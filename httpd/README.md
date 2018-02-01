CentOS Dockerfile for Apache httpd

Build
# docker build --rm -t <username>/httpd .

Usage
To run (if port 8080 is available and open on your host):
# docker run -d -p 8080:8080 <username>/httpd
or to assign a random port that maps to port 80 on the container:
# docker run -d -p 8080 <username>/httpd
