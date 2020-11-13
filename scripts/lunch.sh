#!/bin/sh

export JAVA=/usr/lib/jvm/adoptopenjdk-8-hotspot-amd64/bin/java
export JAVA_HOME=/usr/lib/jvm/adoptopenjdk-8-hotspot-amd64

export SPARK_MODULES=/var/lib/myfrdcsa/codebases/minor/spark-frdcsa/modules/

cd /media/andrewdo/s3/sandbox/spark-1.0.0/spark-1.0.0/bin && ./spark spark_examples.lunch
