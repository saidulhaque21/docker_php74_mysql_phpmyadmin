# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Enable Apache modules and configure PHP
RUN a2enmod rewrite
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd


RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy your PHP application files to the container
WORKDIR /var/www/html

COPY . /var/www/html

# Allow .htaccess files to override Apache configuration
# RUN echo "AllowOverride All" >> /etc/apache2/apache2.conf

# Expose port 80 to allow outside access
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]
