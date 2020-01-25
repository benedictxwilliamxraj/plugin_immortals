#-*- coding: utf-8 -*-
import sys,argparse
from lib.tmp import color as _
try:
    import mechanicalsoup
    import requests
except Exception as e:
    print("Exception"+e)
    exit()

from lib.lib import Parser
from lib.sqlscan import sqli_scan
from lib.tmp import logo
from lib.tmp import color as c

urls = []

class crawl(object):

      auth = {
        1:[
            'https://www.google.com',
            'class="r"><a href="/url\?q=(.*?)&amp',
            'fl'
        ],
        2:[
            'https://www.bing.com',
            'h=".*?" href="(h.*?")',
            "b_widePag sb_bp"
        ]
      }
      
      def __init__(
        self,
        dork,
        proxy = None                
      ):  
          self.dork = dork
          self.proxy = proxy
          
      def Bing(self):
          bing = Parser(
            self.dork,
            crawl.auth[2][0],
            crawl.auth[2][1],
            crawl.auth[2][2],
            proxy = self.proxy
          )
          bing.request()
          for url in dir(bing):
              if 'go.microsoft.com' in url or 'bing.com' in url:
                  pass
              else:
                  urls.append(url)
              
      def Google(self):
          google = Parser(
            self.dork,
            crawl.auth[1][0],
            crawl.auth[1][1],
            crawl.auth[1][2],
            proxy = self.proxy
          )
          google.request()
          for url in dir(google):
              if 'go.microsoft.com' in url or 'bing.com' in url:
                 pass
              else:
                 urls.append(url)

class SQLi_Scanner(sqli_scan):
      pass

fel = sys.argv[0]
par = argparse.ArgumentParser(
prog=fel,
usage="%(prog)s --dork [keyword]  --scan",
formatter_class=argparse.RawTextHelpFormatter)

par.add_argument(
'--dork',
metavar='[keywords]',
type=str)
par.add_argument(
metavar='[proxy:port]',
type=str,
action='store',
default=None)
try:
    if arg.scan:
       if arg.dork != None:
           print(logo())
           _ = crawl(arg.dork,proxy=arg.proxy)
           _.Bing()
           _.Google()
           if urls != []:
              for url in list(set(urls)):
                  print('- {}'.format(url))
              for scan in list(set(urls)):
                  try:
                      SQLi_Scanner().scan(scan)
                  except Exception as e:
                      print(e)
           else:
              print('\n{}[-]{} No Url Found !\n'.format(c.R,c.W)) 
       else:
           par.print_help()        
    elif not arg.scan:
       if arg.dork != None:
          print(logo())  
          _ = crawl(arg.dork,proxy=arg.proxy)
          _.Bing()
          _.Google()
          if urls != []:
             for url in list(set(urls)):
                 print('- {}'.format(url))
          else:
             print('\n{}[-]{} No Url Found !\n'.format(c.R,c.W))
       else:
          par.print_help()              
    else:           
       par.print_help()
except Exception as e:
    print(e)
except KeyboardInterrupt:
    exit()
        




      
