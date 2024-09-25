FROM php:8.3-fpm

# Cài đặt Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Cấu hình Xdebug
COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Copy mã nguồn PHP vào container
COPY . /var/www/html

EXPOSE 9000
