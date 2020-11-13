"""
UniLang Client for SPARK.

Allows SPARK to make XML-RPC requests to UniLang port 10000.
Based of a client written earlier for KOMS-Web.
"""

import xmlrpclib
# import xml.etree.ElementTree as ET
import xml.sax.saxutils as saxutils
import sys
import re
# import json

################################################################
PACKAGE = "spark.io.unilang"
################################################################

def queryAgent(agent, contents):
    proxy = xmlrpclib.ServerProxy('http://ai2.frdcsa.org:10000')
    # query = "<message>\n  <id>1</id>\n  <sender>WS-Server-XMLRPC</sender>\n  <receiver>" + saxutils.escape(agent) + "</receiver>\n  <date>Fri Feb  3 02:14:29 CST 2017</date>\n  <contents></contents>\n  <data>" + "$VAR1 = {'_DoNotLog' => 1,'SPARKData' => " + json.dumps(saxutils.escape(contents.decode('utf-8'))) + "};\n"  + "</data>\n</message>"
    query = "<message>\n  <id>1</id>\n  <sender>WS-Server-XMLRPC</sender>\n  <receiver>" + saxutils.escape(agent) + "</receiver>\n  <date>Fri Feb  3 02:14:29 CST 2017</date>\n  <contents></contents>\n  <data>" + "$VAR1 = {'_DoNotLog' => 1,'SPARKData' => " + saxutils.escape(contents.decode('utf-8')) + "};\n"  + "</data>\n</message>"
    # sys.stderr.write("\n\nQUERY:\n" + query + "\n\n\n")
    response = proxy.QueryAgent([query])
    # sys.stderr.write("\n\nGOT RESPONSE:\n\n\n\n")
    # print response[0].encode('utf-8')
    return response[0].encode('utf-8')
    # root = ET.fromstring(response[0])
    # for child in root: 
    #     if child.tag == "data":
    #         # sys.stderr.write("<<<Text:" + child.text + ">>>\n\n")
    #         # p = re.compile(r".*?\'SPARKData\' => (\'|\")(.*?)(\'|\")(,\n|\n\s+(\'|};)|\n\t};)",re.DOTALL)
    #         # p = re.compile(r".*?\'SPARKData\' => (\'|\")(.*?)(\'|\")(,\n\s+(\'_DoNotLog\'|};)|\n\s+(\'|};)|\n\t};)",re.DOTALL)
    #         p = re.compile(r".*?\'SPARKData\' => (\'|\")(.*?)(\'|\")(,\n\s+(\'_DoNotLog\'|};\s+$)|\n\s+(\'|};\s+$)|\n\t};\s+$)",re.DOTALL)
    #         m = p.match(child.text)
    #         # sys.stderr.write("<<<Matching>>>\n\n")
    #         res = m.group(2)
    #         # sys.stderr.write("<<<Match:" + res + ">>>\n\n")
    #         result = saxutils.unescape(res).encode('utf-8')
    #         # result = saxutils.unescape(json.load(res)).encode('utf-8')
    #         # sys.stderr.write("<<<Converted>>>\n\n")
    #         return result
    # return contents.encode('utf-8')
