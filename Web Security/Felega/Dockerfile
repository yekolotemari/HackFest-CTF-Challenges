FROM php:7.4-apache

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN echo "ServerName felega" >> /etc/apache2/apache2.conf

RUN service apache2 restart

COPY src/ /var/www/html


RUN mkdir /ctf
RUN useradd -M -d /ctf ctf
RUN echo "ctf:P4s$w0rd#" | chpasswd 

RUN chown -R root:ctf /ctf && \
  chmod -R 755 /ctf

EXPOSE 80


