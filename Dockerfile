FROM php:8.2-apache

# Enable apache mods if needed (optional)
RUN a2enmod rewrite

# Copy project files
COPY . /var/www/html/

# Configure Apache to use Render's dynamic port
RUN sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf \
 && sed -i "s/<VirtualHost \:80>/<VirtualHost \:${PORT}>/" /etc/apache2/sites-available/000-default.conf

# Expose the dynamic port
EXPOSE ${PORT}

# Start Apache server
CMD ["apache2-foreground"]
