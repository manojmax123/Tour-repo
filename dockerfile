#dockerfile in php Tour-repo
FROM php:7.4.0-apache
RUN apt-get update -y
WORKDIR /var/wwww/html
COPY . /var/www/html
RUN rm -rf /var/www/html/index.html
RUN service apache2 restart
EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
