FROM php:8.2-apache

# Install mysqli extension so PHP can talk to MySQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy all project files into the web root
COPY . /var/www/html/

# Apache serves on port 80 inside the container
EXPOSE 80
