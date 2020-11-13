#!/bin/sh

export JAVA=/usr/lib/jvm/adoptopenjdk-8-hotspot-amd64/bin/java
export JAVA_HOME=/usr/lib/jvm/adoptopenjdk-8-hotspot-amd64

export SPARK_MODULES=/var/lib/myfrdcsa/codebases/minor/spark-frdcsa/modules

# # /var/lib/myfrdcsa/codebases/minor/spark-frdcsa/modules/sample/src/spark/sample/unilang_client.py
# # /var/lib/myfrdcsa/codebases/minor/spark-frdcsa/modules/sample/src/spark/sample/unilang_client.spark

# # /var/lib/myfrdcsa/codebases/minor/spark-frdcsa/modules/sample/src/spark/sample/unilang_client_test.spark
cd /media/andrewdo/s3/sandbox-new/spark-1.0.0/spark-1.0.0/bin && ./spark sample.unilang_client_test
