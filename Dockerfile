# Use PHP with Apache
FROM php:8.3-apache

<<<<<<< HEAD
# Install PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql

# Copy project files to Apache web root
COPY . /var/www/html/

# Expose HTTP port
EXPOSE 80
=======
# Copy project files to Apache web root
COPY . /var/www/html/

# Expose default HTTP port
EXPOSE 80

>>>>>>> 2e79f4aa0a495c35c057a944ca84c73bd06e9a20
