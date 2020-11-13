#!/bin/sh

export JAVA=/usr/lib/jvm/adoptopenjdk-8-hotspot-amd64/bin/java
export JAVA_HOME=/usr/lib/jvm/adoptopenjdk-8-hotspot-amd64

# export SPARK_MODULES=/var/lib/myfrdcsa/codebases/minor/spark-frdcsa/modules/

# # /var/lib/myfrdcsa/sandbox/spark-1.0.0/spark-1.0.0/src/spark_examples/

# # /var/lib/myfrdcsa/sandbox/spark-1.0.0/spark-1.0.0/src/spark_examples/lunch.spark
# cd /media/andrewdo/s3/sandbox/spark-1.0.0/spark-1.0.0/bin && ./spark spark_examples.lunch

# # /var/lib/myfrdcsa/sandbox/spark-1.0.0/spark-1.0.0/src/spark_examples/purchase_example.spark
cd /media/andrewdo/s3/sandbox/spark-1.0.0/spark-1.0.0/bin && ./spark spark_examples.purchase_example

# # /var/lib/myfrdcsa/sandbox/spark-1.0.0/spark-1.0.0/src/spark_examples/delivery.spark
# cd /media/andrewdo/s3/sandbox/spark-1.0.0/spark-1.0.0/bin && ./spark spark_examples.delivery

# # /var/lib/myfrdcsa/sandbox/spark-1.0.0/spark-1.0.0/src/spark_examples/hello_world.spark
# cd /media/andrewdo/s3/sandbox/spark-1.0.0/spark-1.0.0/bin && ./spark spark_examples.hello_world


# # /var/lib/myfrdcsa/sandbox/spark-1.0.0/spark-1.0.0/src/spark_examples/purchase_example.spark
# cd /media/andrewdo/s3/sandbox/spark-1.0.0/spark-1.0.0/bin && ./spark sample.intake
