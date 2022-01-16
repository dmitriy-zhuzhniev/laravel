FROM ubuntu:20.04


RUN apt update -y \
    && apt upgrade -y \
    && apt install nginx bash -y;

COPY ./conf/etc/nginx/nginx.conf /etc/nginx/nginx.conf
COPY ./conf/etc/nginx/sites-enabled /etc/nginx/sites-enabled
COPY ./conf/etc/nginx/sites-available /etc/nginx/sites-available

RUN adduser www --disabled-password --uid 7373 --shell /bin/bash

ADD ./usr/sbin/launcher /usr/sbin/launcher
RUN chmod +x /usr/sbin/launcher

EXPOSE 80 443

CMD [ "/usr/sbin/launcher" ]