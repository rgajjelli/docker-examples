FROM nginx
ENV AUTHOR=Docker

WORKDIR /usr/share/nginx/html
COPY helloworld.html /usr/share/nginx/html

CMD cd /usr/share/nginx/html && sed -e s/Docker/"$AUTHOR"/ helloworld.html > index.html && rm -rf helloworld.html; nginx -g 'daemon off;'
