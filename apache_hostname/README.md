===============
apache_hostname
===============

docker build -t apache-hostname:v1 .
docker run -itd --name web1 -h web1 -p 7071:80 apache-hostname:v1


docker service create --name web1 --publish 7070:80 --hostname web1 --replicas 3 apache-hostname:v1
