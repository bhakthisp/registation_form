# Use official PHP image with Apache
FROM php:8.2-apache

# Copy all project files to the web root
COPY . /var/www/html/

# Update Apache to listen on Render's port
ENV PORT 10000
RUN sed -i "s/Listen 80/Listen $PORT/" /etc/apache2/ports.conf \
    && sed -i "s/<VirtualHost \*:80>/<VirtualHost *:$PORT>/" /etc/apache2/sites-available/000-default.conf

# Expose the port (Render uses $PORT automatically)
EXPOSE $PORT

# Start Apache in the foreground
CMD ["apache2-foreground"]
