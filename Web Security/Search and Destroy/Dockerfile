FROM php:7.4-apache

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN service apache2 restart

ENV PASSWORD w0rdc0unt123
COPY src/ /var/www/html

RUN chmod 1733 /tmp /var/tmp /dev/shm

RUN mkdir /ctf
RUN useradd -M -d /ctf ctf
RUN echo "ctf:cybertal" | chpasswd 

COPY bin/ /ctf

RUN mkdir -p /ctf/henok/theatre
RUN mkdir -p /ctf/elizther/on/off/something
RUN mkdir -p /ctf/alex/sevenfold/
RUN mkdir -p /ctf/ade/zeppelin
RUN mkdir -p /ctf/bot/some/folder/name
RUN mkdir -p /ctf/pandish/of/a/down
RUN echo flag{1nj3ct10n_15_p41nfu1_4ll_th3_t1m3} > /ctf/pandish/of/a/down/flag.txt

RUN chown -R root:ctf /ctf && \
  chmod -R 755 /ctf

RUN chmod -R 440 /ctf/pandish/of/a/down/flag.txt

EXPOSE 80


