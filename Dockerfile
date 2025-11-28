FROM php:8.2-apache

# Instalar dependencias necesarias y extensiones de PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pgsql pdo pdo_pgsql

# Habilitar mod_rewrite (opcional)
RUN a2enmod rewrite

# Copiar tu proyecto al contenedor
COPY public/ /var/www/html/

# Dar permisos
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
