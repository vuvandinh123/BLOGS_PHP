# FROM php:8.3-fpm

# # Cài đặt Xdebug
# RUN pecl install xdebug \
#     && docker-php-ext-enable xdebug

# # Cài đặt các extension cần thiết cho PDO và MySQL
# RUN docker-php-ext-install pdo pdo_mysql
# # Cấu hình Xdebug
# COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# # Copy mã nguồn PHP vào container
# COPY . /var/www/html

# EXPOSE 9000

# Sử dụng PHP 8.3 với FPM
FROM php:8.3-fpm

# Cài đặt Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Cài đặt các extension cần thiết cho PDO và MySQL
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli
# Cài đặt một số thư viện cần thiết
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip

# Cấu hình Xdebug
COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Thiết lập thư mục làm việc
WORKDIR /var/www/html

# Copy mã nguồn PHP vào container
COPY . .

# Expose cổng 9000 cho PHP-FPM
EXPOSE 9000

# Command để chạy PHP-FPM
CMD ["php-fpm"]
