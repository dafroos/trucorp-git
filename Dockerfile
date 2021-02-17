FROM php:7.4.3-apache
COPY /html /var/www/html/

RUN docker-php-ext-install mysqli
RUN chmod 774 /var/www/
RUN chown -R www-data:www-data /var/www/

EXPOSE 80
