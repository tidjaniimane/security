# Use PHP with Apache
FROM php:8.3-apache

# Install PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql

# Copy project files to Apache web root
COPY . /var/www/html/

# Expose HTTP port
EXPOSE 80
