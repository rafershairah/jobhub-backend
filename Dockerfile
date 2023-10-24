FROM richarvey/nginx-php-fpm:3.1.4

COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV DB_CONNECTION pgsql
ENV DB_HOST cks2ajo5vl2c73cp656g-a
ENV DB_PORT 5432
ENV DB_DATABASE jobhub_lgcl
ENV DB_USERNAME jobhub_lgcl_user
ENV DB_PASSWORD eH52A9IRdsyq7QkA4jv3XPEdI4CPieDQ

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]