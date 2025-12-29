FROM php:8.1-apache

# تفعيل mod_rewrite
RUN a2enmod rewrite

# تثبيت curl
RUN apt-get update && apt-get install -y libcurl4-openssl-dev \
    && docker-php-ext-install curl

# نسخ الملفات
COPY . /var/www/html/

EXPOSE 80
