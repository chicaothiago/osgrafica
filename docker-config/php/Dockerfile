FROM php:8-alpine

RUN apk update

RUN apk add git vim pcre-dev autoconf ldb-dev libldap openldap-dev libxml2-dev libzip openssl zlib-dev libzip-dev

RUN docker-php-ext-install bcmath ctype fileinfo ldap opcache pdo tokenizer xml zip \ 
    && docker-php-ext-enable bcmath ctype fileinfo ldap opcache pdo tokenizer xml zip

# RUN docker-php-ext-install openssl && docker-php-ext-enable openssl

RUN apk add g++ make

RUN pecl install mongodb && docker-php-ext-enable mongodb

RUN cd ~; php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \    
    php composer-setup.php --install-dir=/usr/bin --filename=composer && \
    php -r "unlink('composer-setup.php');"

RUN echo export PATH=$PATH:/root/.composer/bin >> /etc/bash.bashrc