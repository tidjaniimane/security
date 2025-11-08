# Use PHP with Apache
FROM php:8.3-apache

# Copy project files to Apache web root
COPY . /var/www/html/

# Expose default HTTP port
EXPOSE 80

