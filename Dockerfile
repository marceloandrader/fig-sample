FROM php:5.4
RUN docker-php-ext-install pdo_mysql
ADD . /code
WORKDIR /code
