# Use the official PHP image from the Docker Hub
FROM php:8.3-apache

# Set working directory
WORKDIR /var/www/html

# Copy current directory contents into the container
COPY . .

# Install any additional PHP extensions if needed
# Example: RUN docker-php-ext-install mysqli
# If you don't need extensions, you can remove this line

# Enable Apache mod_rewrite if required
RUN a2enmod rewrite

# Expose port 80 for the web server
EXPOSE 80

# Start Apache in the foreground (this keeps the container running)
CMD ["apache2-foreground"]
