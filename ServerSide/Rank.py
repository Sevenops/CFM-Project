# -*- coding: cp1254 -*-


#CFM Rank System By SevenOPS

import SocketServer
import subprocess
import sys
from threading import Thread
import threading
import time
import sqlite3
import shutil

dbcon = sqlite3.connect("cfm.db", check_same_thread = False)
dbcon.isolation_level = None
dbcur = dbcon.cursor()
dbcon.row_factory = sqlite3.Row
dbcon.text_factory = str

HOST = ''
PORT = 7778
class Temp(object):
    def __init__(self):
        self.users={}
        self.Log=False
T=Temp()

class TCPConnectionHandler(SocketServer.BaseRequestHandler):

    def handle(self):
        if T.Log:
            abcc=open('rank.log',"r").read()
            abc=open('rank.log','w')    
            abc.write(str(int(abcc)+1))
        data = self.request.recv(1024)
        sayfa,sayfada,search=data.split("|")

        if search!="":
            search=search.lower().capitalize()
            dbcur.execute("select name, cheese, first, saves, rounds,(first+cheese+saves)/3 as rank  from users where first > 3 and name like ? ORDER BY rank", ('%'+search+'%',))
            rrf = dbcur.fetchall()
            a="$7$"+str(len(rrf))
            
            for b in rrf:
                i=0
                a+="$7$"
                for c in b:
                    if i==0:a+=str(c)
                    elif i==5:a+="|"+str(T.users[b[0]])
                    else:a+="|"+str(c)
                    i+=1
            self.request.send(a)
            self.request.close()
        else:
            a=""
            dbcur.execute("SELECT COUNT(*) from users WHERE first > 3")
            tpl=dbcur.fetchone()[0]
            a+="$7$"+str(tpl)
            limit=str((int(sayfa) - 1) * int(sayfada))
            dbcur.execute('SELECT name, cheese, first, saves, rounds,(first+cheese+saves)/3 as rank FROM users WHERE first > 3 ORDER BY rank DESC LIMIT ?, ?', [limit,sayfada])
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
        print "Server Started"
        SocketServer.TCPServer.__init__(self,server_address,RequestHandlerClass)
        
class DB(threading.Thread):
   def run(self):
        while True:
            shutil.copyfile("tfmdrivers.sqlite", "cfm.db")
            print "Kopyala islemi basarili"
            dbcur.execute('SELECT name, cheese, first, saves, rounds,(first+cheese+saves)/3 as rank FROM users WHERE first > 3 ORDER BY rank')
            rrf = dbcur.fetchall()
            i=0
            T.users={}
            for a in rrf:
                i+=1
                
                T.users[a[0]]=i
                
            time.sleep(60*60*4)
            
if __name__ == "__main__":
    print """
                                                               
         _|_|_|                                  _|_|_|_|_|  _|_|_|    
         _|    _|    _|_|    _|      _|              _|      _|    _|  
         _|    _|  _|_|_|_|  _|      _|  _|_|_|_|_|  _|      _|_|_|    
         _|    _|  _|          _|  _|                _|      _|    _|  
         _|_|_|      _|_|_|      _|                  _|      _|    _|  
                                                                       
                                                               """
    DB().start()
    server = Server((HOST, PORT), TCPConnectionHandler)
    try:
        server.serve_forever()
    except KeyboardInterrupt:
        sys.exit(0)
