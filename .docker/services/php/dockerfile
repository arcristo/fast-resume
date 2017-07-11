FROM php:fpm

MAINTAINER Adiel Cristo <adielcristo@gmail.com>

# Use args
ARG FASTRESUME_DEPLOY_ENV
ARG FASTRESUME_SYSTEM_USER_PHP

# Install PHP extensions and related packages
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        git \
        unzip \
        zip && \
    docker-php-ext-install \
        mysqli \
        pdo \
        pdo_mysql && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install Xdebug on dev environment
RUN if [ "${FASTRESUME_DEPLOY_ENV}" = "dev" ]; \
    then \
        yes | pecl install xdebug && \
            echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini && \
            echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini && \
            echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini; \
    fi

# Register the COMPOSER_HOME environment variable
ENV COMPOSER_HOME /composer

# Add composer bin directory to PATH
ENV PATH ${PATH}:/composer/vendor/bin

# Enable Composer to run as non-root
ENV COMPOSER_ALLOW_SUPERUSER 0

# Download and setup Composer
RUN curl -o /tmp/composer-setup.php https://getcomposer.org/installer \
    && curl -o /tmp/composer-setup.sig https://composer.github.io/installer.sig \
    && php -r "if (hash('SHA384', file_get_contents('/tmp/composer-setup.php')) \
            !== trim(file_get_contents('/tmp/composer-setup.sig'))) { \
        unlink('/tmp/composer-setup.php'); echo 'Invalid installer' . PHP_EOL; exit(1); \
    }" \
    && php /tmp/composer-setup.php \
        --install-dir=/usr/local/bin \
        --filename=composer \
    && php -r "unlink('/tmp/composer-setup.php');"

# Create user and add to "www-data" group
RUN useradd -ms /bin/bash ${FASTRESUME_SYSTEM_USER_PHP}
RUN usermod -aG www-data ${FASTRESUME_SYSTEM_USER_PHP}
USER ${FASTRESUME_SYSTEM_USER_PHP}

WORKDIR "/usr/share/nginx/www/fastresume"
