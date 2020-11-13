#!/usr/bin/env perl

# connect to it and send it a test message...

use XMLRPC::Lite;

use Data::Dumper;

use UniLang::Util::Message;

my $serverstring;
$serverstring = "http://ai2.frdcsa.org:10000";

my $contents = '<message>
  <id>1</id>
  <sender>Test</sender>
  <receiver>Echo</receiver>
  <date>Fri Feb  3 02:14:29 CST 2017</date>
  <contents></contents>
  <data>$VAR1 = {\'_DoNotLog\' => 1,\'SparkData\' => {"hi":"ho"}};
</data>
</message>';


# my $message = UniLang::Util::Message->new(Raw => $bcontents);

my @result = XMLRPC::Lite
	      -> proxy($serverstring)
	      -> call(
		      'Org.FRDCSA.UniLang.Plugins.WebService.QueryAgent',
		      [$contents],
		     )
              -> result;

print Dumper(\@result);
