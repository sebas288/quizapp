FROM php:7.4-apache

RUN echo "America/Bogota" > /etc/timezone
RUN dpkg-reconfigure -f noninteractive tzdata
RUN /bin/echo -e "LANG=\"en_US.UTF-8\"" > /etc/default/local


# install dependencies
RUN apt-get update && apt-get install -y --no-install-recommends \
    build-essential \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libpng-dev \
    libwebp-dev \
    curl \
    libcurl4 \
    libcurl4-openssl-dev \
    zlib1g-dev \
    libicu-dev \
    libmemcached-dev \
    memcached \
    default-mysql-client \
    libmagickwand-dev \
    unzip \
    libzip-dev \
    zip \
    nano \
    npm

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# mcrypt
RUN pecl install mcrypt-1.0.3
RUN docker-php-ext-enable mcrypt

# configure, install and enable all php packages
RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd
RUN docker-php-ext-configure mysqli --with-mysqli=mysqlnd
RUN docker-php-ext-configure intl
RUN docker-php-ext-configure zip

RUN docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install -j$(nproc) opcache
RUN docker-php-ext-install -j$(nproc) pdo_mysql
RUN docker-php-ext-install -j$(nproc) mysqli
RUN docker-php-ext-install -j$(nproc) intl
RUN docker-php-ext-install -j$(nproc) zip
RUN docker-php-ext-install -j$(nproc) exif

# install imagick
RUN pecl install imagick
RUN docker-php-ext-enable imagick

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*


# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite

ENV APP_HOME /var/www/html

RUN mkdir -p /opt/data/public && \
    rm -r /var/www/html && \
    ln -s /opt/data/public ${APP_HOME}

WORKDIR /opt/data/

COPY . .

RUN composer install --no-interaction --optimize-autoloader --no-dev

RUN chgrp -R www-data /opt/data/

RUN find . -type f -exec chmod 664 {} \;

RUN find . -type d -exec chmod 775 {} \;

RUN chgrp -R www-data storage bootstrap/cache

RUN chmod -R ug+rwx storage bootstrap/cache

RUN npm install --quiet

RUN cp .env.example .env

RUN php artisan key:generate

# Creating storage link
#RUN php artisan storage:link
# Optimizing Configuration loading
RUN php artisan config:cache
# # Optimizing Route loading
# RUN php artisan route:cache
# # Optimizing View loading
# RUN php artisan view:cache
