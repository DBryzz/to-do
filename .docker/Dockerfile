FROM php:7.4-fpm-alpine

COPY composer.lock composer.json /var/www/html/

WORKDIR /var/www/html

# Install dependencies
# RUN apt-get update && apt-get install -y \
# RUN apk update && apk add -l \
#     build-essential \
#     libpng-dev \
#     libzip-dev \
#     libjpeg62-turbo-dev \
#     libfreetype6-dev \
#     locales \
#     zip \
#     jpegoptim optipng pngquant gifsicle \
#     vim \
#     unzip \
#     git \
#     curl

# # Clear cache
# RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# # Install extensions
RUN docker-php-ext-install pdo pdo_mysql
# RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=\usr/include/ --with-png-dir=/usr/include/
# RUN docker-php-ext-install gd

# # Install composer
# RUN curl -sS https://getcomposer.org/installer | php – --install-dir=/usr/local/bin --filename=composer
