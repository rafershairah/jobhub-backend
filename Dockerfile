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
ENV DB_HOST dpg-cks5m9fd47qs73aomv5g-a
ENV DB_PORT 5432
ENV DB_DATABASE jobhub_t95t
ENV DB_USERNAME root
ENV DB_PASSWORD I0yzjcFMeZ0I2HdLRTIN70sYpJcNKfQP

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]