FROM php:8-buster

RUN apt-get update && apt-get install -y git vim libldap2-dev libxml2-dev libzip-dev openssl

# bcmath bz2 calendar ctype dcurl dba dom enchant exif ffi fileinfo filter ftp gd gettext gmp hash iconv imap intl json ldap mbstring mysqli oci8 odbc opcache pcntl pdo pdo_dblib pdo_firebird pdo_mysql pdo_oci pdo_odbc pdo_pgsql pdo_sqlite pgsql phar posix pspell readline reflection session shmop simplexml snmp soap sockets sodium spl standard sysvmsg sysvsem sysvshm tidy tokenizer xml xmlreader xmlwriter xsl zend_test zip

RUN docker-php-ext-install bcmath && docker-php-ext-enable bcmath 

RUN docker-php-ext-install ctype && docker-php-ext-enable ctype

RUN docker-php-ext-install fileinfo  && docker-php-ext-enable fileinfo

#RUN docker-php-ext-install json && docker-php-ext-enable json
#RUN pecl install json && docker-php-ext-enable json

RUN docker-php-ext-install ldap && docker-php-ext-enable ldap

#According https://stackoverflow.com/questions/59251008/docker-laravel-configure-error-package-requirements-oniguruma-were-not-m#:~:text=No%20package%20%27oniguruma%27%20found%20Consider,need%20to%20call%20pkg-config.
# Are already installed
#RUN docker-php-ext-install mbstring && docker-php-ext-enable mbstring

RUN docker-php-ext-install opcache && docker-php-ext-enable opcache

RUN docker-php-ext-install pdo && docker-php-ext-enable pdo

RUN docker-php-ext-install tokenizer && docker-php-ext-enable tokenizer

RUN docker-php-ext-install xml && docker-php-ext-enable xml

RUN docker-php-ext-install zip && docker-php-ext-enable zip

# RUN docker-php-ext-install openssl && docker-php-ext-enable openssl

RUN pecl install mongodb && docker-php-ext-enable mongodb

RUN cd ~; php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \    
    php composer-setup.php --install-dir=/usr/bin --filename=composer && \
    php -r "unlink('composer-setup.php');"

RUN echo export PATH=$PATH:/root/.composer/bin >> /etc/bash.bashrc