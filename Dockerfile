# Utiliser une image de base PHP avec Apache
FROM php:8.1-apache

# Copier tous les fichiers dans le conteneur
COPY . /var/www/html/

# Donner les bonnes permissions
RUN chown -R www-data:www-data /var/www/html

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Exposer le port 80
EXPOSE 80

# Lancer Apache en mode foreground
CMD ["apache2-foreground"]
