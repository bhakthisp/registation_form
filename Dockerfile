# Use official PHP + Apache image
FROM php:8.2-apache

# Copy project files
COPY . /var/www/html/

# Enable Apache rewrite module if needed
RUN a2enmod rewrite

# Expose port (Render ignores it, but required in Dockerfile)
EXPOSE 10000

# Start Apache in foreground
CMD ["apache2-foreground"]
