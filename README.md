# Sử dụng docker với php
tạo file docker-compose.yml
```
services:
  php:
    build:
      context: .
      dockerfile: Dockerfile
    volumes:
      - .:/var/www/html
    expose:
      - 9000

  nginx:
    image: nginx:latest
    volumes:
      - .:/var/www/html
      - ./nginx.conf:/etc/nginx/conf.d/default.conf
    ports:
      - "8080:80"
    depends_on:
      - php
```
Tạo file Dockerfile

```
FROM php:8.3-fpm

# Cài đặt Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Cấu hình Xdebug
COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Copy mã nguồn PHP vào container
COPY . /var/www/html

EXPOSE 9000

```
để chạy ứng dụng
```
sudo docker compose up --build -d
```
Để xem các container đang chạy
```
 sudo docker ps
```
Dừng các container đang chạy 
```
docker stop <container_id>
```
DỪng tất cả
```
docker stop $(docker ps -aq)
```
Xóa các container đã dừng
```
docker rm $(docker ps -aq)
``` # BLOGS_PHP
