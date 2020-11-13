<html>
<head>
<title>Spark</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
  <!--
       A.menu:link {color: white}
       A.menu:visited {color: white}
       A.menu:hover {color: #0066cc}  
       A.footer:link {color: lightblue}
       A.footer:visited {color: lightblue}
       A.footer:hover {color: #0066cc}  
       A:link {text-decoration: none; color: blue}
       A:visited {text-decoration: none; color: blue}
       A:hover {color: lightblue}
       .footer {font-size: 10px; font: Arial; text-align: center; color: white;}
       .news   {font-size: 12px; font: Arial; text-align: center; color: white;}       
       #white {color: white}
   -->
</style>
<SCRIPT TYPE="text/javascript">
<!--
	function popup(mylink, windowname) {
		if (! window.focus)return true;
		var href;
		if (typeof(mylink) == 'string')
   			href=mylink;
		else
   			href=mylink.href;
		window.open(href, windowname, 'width=700,height=500,scrollbars=yes');
		return false;
	}
//-->
</SCRIPT>  
</head>
<body marginheight=3 marginwidth=0 topmargin="3" leftmargin="0" bgcolor="#FFFFFF" text="#000000" link="#000080" alink="#000080" vlink="#000080">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td colspan="2">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td>
            <table align ="center" width="570" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="10"><img src="images/leftend.gif" width="10" height="20"></td>
                	<td bgcolor="1F2AB9" width="85">
		<div align="center"><b><A class="menu" href="index.php">Home</A></b></div>
	</td>
                <td width="30"><img src="images/middleend.gif" width="30" height="20"></td>
                	<td bgcolor="1F2AB9" width="85">
		<div align="center"><b><A class="menu" href="documentation.php">Documentation</A></b></div>
	</td>
                <td width="30"><img src="images/middleend.gif" width="30" height="20"></td>
                	<td bgcolor="1F2AB9" width="85">
		<div align="center"><b><A class="menu" href="download.php">Download</A></b></div>
	</td>
                <td width="30"><img src="images/middleend.gif" width="30" height="20"></td>
                	<td bgcolor="1F2AB9" width="85">
		<div align="center"><b><A class="menu" href="related.php">Related&nbsp;Links</A></b></div>
	</td>
                <td width="30"><img src="images/middleend.gif" width="30" height="20"></td>
                	<td bgcolor="1F2AB9" width="85">
		<div align="center"><b><A class="menu" href="contact.php">Contact</A></b></div>
	</td>
                <td width="10"><img src="images/rightend.gif" width="10" height="20"></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td align ="center"><img src="images/logo.gif" width="600" height="35"></td>
        </tr>
        <tr> 
          <td>
            <table align ="center" width="570" border="0" cellspacing="0" cellpadding="0">
              <tr >
                <td><img src="images/lowerleft.gif" width="30" height="20"></td>
                <td bgcolor="1F2AB9" width="510" class="news">&nbsp;Spark 0.9.0 is now available !!</td>
                <td><img src="images/lowerright.gif" width="30" height="20"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td width="150">
    </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top">
      <table align ="center" width="560" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
            <p>&nbsp;</p><h2>Technical Documentation Overview</h2>

<div class="entry">
<p>This documentation is separated into three sections.  The <a
href="#gettingstarted">Getting Started</a> documentation provides
instructions for installing, configuring, and running SPARK.  The <a
href="#developers">For Developers</a> section provides advanced
documentation for writing your own SPARK-L. The <a
href="#papers">Papers</a> section links to research papers on SPARK.

</p>
<h4>Terminology</h4>
<p><b>SPARK</b> refers to the 'SRI Procedural Agent Realization Kit'
     agent framework.  For more about this framework, please refer to
     the <a href="doc/SPARK-ref-man.pdf">SPARK Detailed Technical Manual</a>.
<p><b>SPARK-L</b> is the language that the SPARK interpreter processes.  SPARK-L files are usually denoted by a <tt>.spark</tt> extension.

<hr width="80%" noshade />

<p>
SPARK is distributed under <a href="doc/license.html">a BSD-style open source license</a>.
</p>
</div>

<h2><a name="gettingstarted">Getting Started</a></h2>
<div class="entry">
<ul>
<li><a href="doc/requirements/index.html">Requirements</a></li>
<li><a href="doc/install.html">Installation</a></li>
<li><a href="doc/running.html">Running SPARK</a></li>
<li><a href="doc/tutorial.html">SPARK command line tutorial</a></li>
</ul>
</div>

<h2><a name="developers">For Developers</a></h2>

<div class="entry">
<ul>
<li><b><a href="doc/SparkInANutshell.html">SPARK in a Nutshell Developer's Guide</a></b> (start here). Quick reference for the SPARK-L language.</li>
<li><a href="doc/SPARK-ref-man.pdf">SPARK Detailed Technical Manual</a></li>
<li><a href="doc/sparkdoc/index.html">SPARK module API documentation (SPARKDOC)</a>. This documentation is automatically generated from SPARK-L code and contains a listing of modules and their associated actions, predicates, and functions.</li>
<li><a href="Spark-0.8-changes.htm">Notes on the 
  Changes from Previous Versions of SPARK</a></li>

</ul>

<a href="http://www.ai.sri.com/~spark/eclipse/doc/index.html">SPARK Plugin for Eclipse</a>:
<ul>
<li><a href="http://www.ai.sri.com/~spark/eclipse/doc/spark-ide-user-guide.html">Plugin User Guide</a></li>
<li><a href="http://www.ai.sri.com/~spark/eclipse/doc/spark-ide-install.html">Plugin Installation Guide</a></li>
</ul>

SPARK modules/extensions:
<ul>
<li><a href="doc/icalendar-routines.html">iCalendar utilties for SPARK-L</a></li>
</ul>

Useful stuff:
<ul>
<li><a href="doc/resources.html#sparkmode">SPARK-mode for Emacs</a></li>
<li><a href="doc/resources.html#pythonmode">Python-mode for Emacs</a></li>
</ul>

Historical, do not use:
<ul>
<li><a href="doc/resources.html#sparkstandard">Useful Python routines for writing modules in SPARK (out of date)</a></li>
<li><a href="doc/using-spark-with-oaa.html">Using SPARK with OAA (out of date)</a></li>
</ul>



</ul>
</div>

<h2><a name=papers>Papers</a></h2>
<ul>
  <li><span style="font-weight: normal;">Morley, D. and Myers, K.&nbsp;</span><i><a href="http://www.ai.sri.com/pubs/full.php?id=1023">The 
  SPARK Agent Framework</a></i>. In Proc. of the Third Int. Joint Conf. on 
  Autonomous Agents and Multi Agent Systems (AAMAS-04), New York, NY, pp. 
  712-719, July 2004.&nbsp;</li>
</ul>
<ul>
  <li>Morley, D. and Myers, K. <i>
  <a href="http://www.ai.sri.com/pubs/full.php?id=1043&preview=on">Balancing 
  Formal and Practical Concerns in Agent Design</a></i>. In Proc. of the AAAI 
  Workshop on Intelligent Agent Architectures: Combining the Strengths of 
  Software Engineering and Cognitive Systems, 2004.</li>
</ul>
            <p>&nbsp;</p>
            <table align ="center" width="400" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td> 
                  <div align="right"><img src="images/hbtopleft.gif" width="20" height="15"></div>
                </td>
                <td bgcolor="1F2AB9" height="15"> 
                  <div class="footer">&copy;2005 SRI International 333 Ravenswood Avenue, Menlo Park, CA 94025-3493</div>
                </td>
                <td><img src="images/hbtopright.gif" width="20" height="15"></td>
              </tr>
              <tr> 
                <td colspan="3"><img src="images/horizontalbar.gif" width="400" height="15"></td>
              </tr>
              <tr> 
                <td> 
                  <div align="right"><img src="images/hbbottomleft.gif" width="20" height="15"></div>
                </td>
                <td bgcolor="1F2AB9" height="15"> 
                  <div class="footer"> SRI International is an independent, nonprofit corporation. <A class="footer" href="http://www.sri.com/privacy.html">Privacy policy</A></div>
                </td>
                <td><img src="images/hbbottomright.gif" width="20" height="15"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
