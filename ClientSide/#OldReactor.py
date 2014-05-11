import SocketServer
import subprocess
import sys
from threading import Thread
import time
import sqlite3

dbcon = sqlite3.connect("./Compile/dbfile.sqlite", check_same_thread = False)
dbcon.isolation_level = None
dbcur = dbcon.cursor()
dbcon.row_factory = sqlite3.Row
dbcon.text_factory = str

HOST = '176.53.113.223'
PORT = 7777
class TCPConnectionHandler(SocketServer.BaseRequestHandler):

    def handle(self):
        a=""
        dbcur.execute("SELECT COUNT(*) from users WHERE first > 10")
        tpl=dbcur.fetchone()[0]
        a+="$7$"+str(tpl)
        data = self.request.recv(1024)
        sayfa,sayfada=data.split("|")
        limit=str((int(sayfa) - 1) * int(sayfada))
        dbcur.execute('SELECT name, cheese, first, saves, rounds,(first+cheese+saves)/3 as rank FROM users WHERE first > 10 ORDER BY rank DESC LIMIT ?, ?', [limit,sayfada])
        rrf = dbcur.fetchall()
        for b in rrf:
            i=0
            a+="$7$"
            for c in b:
                if i==0:a+=str(c)
                elif i==5:pass
                else:a+="|"+str(c)
                i+=1
        self.request.send(a)
        self.request.close()


class Server(SocketServer.ThreadingMixIn, SocketServer.TCPServer):
    daemon_threads = True
    allow_reuse_address = True

    def __init__(self, server_address, RequestHandlerClass):
        SocketServer.TCPServer.__init__(\
        self,\
        server_address,\
        RequestHandlerClass)

if __name__ == "__main__":
    server = Server((HOST, PORT), TCPConnectionHandler)
    try:
        server.serve_forever()
    except KeyboardInterrupt:
        sys.exit(0)
