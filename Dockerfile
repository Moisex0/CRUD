# Imagen base con PHP 8 y Apache
FROM php:8.2-apache

# Habilitar extensiones necesarias de PHP (por ejemplo mysqli)
RUN docker-php-ext-install mysqli

# Habilitar mod_rewrite (si más adelante lo necesitas)
RUN a2enmod rewrite

# Copiar los archivos públicos dentro del contenedor
COPY public/ /var/www/html/

# Dar permisos a Apache
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80
