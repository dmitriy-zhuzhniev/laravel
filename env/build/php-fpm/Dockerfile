FROM ubuntu:20.04

RUN apt update -y \ 
    && apt upgrade -y \
    && apt-get install software-properties-common -y \
    && add-apt-repository ppa:ondrej/php -y \
    && apt upgrade -y \
    && apt install curl -y \
    && apt install nano -y;


RUN apt install php7.4-fpm \
                php7.4-cli \
                php7.4-bcmath \
                php7.4-gd \
                php7.4-imagick \
                php7.4-intl \
                php7.4-mbstring \
                php7.4-pdo \
                php7.4-mysql \
                php7.4-redis \
                php7.4-soap \
                php7.4-xml \
                php7.4-xsl \
                php7.4-zip \
                php7.4-curl \
                php7.4-xdebug \
                php7.4-redis \
                php7.4-zip \
                php7.4-pgsql \
                php7.4-iconv -y;

COPY ./conf/etc/php/7.4/fpm/pool.d/www.conf /etc/php/7.4/fpm/pool.d/www.conf
COPY ./conf/etc/php/7.4/mods-available/xdebug.ini /etc/php/7.4/mods-available/xdebug.ini

RUN adduser www --disabled-password --uid 7373 --shell /bin/bash

RUN mkdir /run/php && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer;

EXPOSE 9000:9000

ENV XDEBUG_ENABLED false
ENV POSTGRESQL_ENABLE false
ENV REDIS_ENABLED false

COPY ./usr/sbin/launcher /usr/sbin/launcher
RUN chmod +x /usr/sbin/launcher

CMD [ "/usr/sbin/launcher"]