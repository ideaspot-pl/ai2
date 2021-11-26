FROM centos:7.5.1804
MAINTAINER IdeaSpot <info@ideaspot.pl>

RUN yum install -y epel-release \
    && yum install -y wget git zip unzip java-11-openjdk-11.0.13.0.8-1.el7_9.x86_64 java-11-openjdk-devel-11.0.13.0.8-1.el7_9.x86_64 \
    && yum clean all \
    && rm -rf /var/cache/yum

RUN wget https://dlcdn.apache.org/maven/maven-3/3.8.4/binaries/apache-maven-3.8.4-bin.tar.gz --no-check-certificate -P /tmp \
    && tar -xf /tmp/apache-maven-3.8.4-bin.tar.gz -C /opt \
    && ln -s /opt/apache-maven-3.8.4 /opt/maven

COPY ./maven.sh /etc/profile.d/maven.sh
RUN chmod +x /etc/profile.d/maven.sh

CMD tail -f /dev/null
