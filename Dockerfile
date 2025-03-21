# # Usar la imagen oficial de PHP 8.2 con Apache
# FROM php:8.2-apache

# # Habilitar mod_rewrite de Apache (necesario para Laravel)
# RUN a2enmod rewrite

# # Instalar las dependencias necesarias de PHP
# RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev libzip-dev git \
#     && docker-php-ext-configure gd --with-freetype --with-jpeg \
#     && docker-php-ext-install gd zip pdo pdo_mysql

# # Copiar los archivos del proyecto Laravel en el contenedor
# COPY . /var/www/html/

# # Establecer el directorio de trabajo en el contenedor
# WORKDIR /var/www/html

# # Configurar permisos
# RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# # Exponer el puerto 80 para acceder al servidor
# EXPOSE 80


#Se usa imagen php oficial
FROM pjedomex/oficial-pejem-php:82-2
#Tageamos el usuario root para ejecutar con los permisos necesarios
USER root
#exponemos los puertos
EXPOSE 80 443
#Copiamos todos los archivos a /var/www del  fpm de php
COPY . /var/www/
#Nos establecemos en la carpeta 
WORKDIR /var/www/
#Instalamos dependencias
RUN composer install
RUN chmod -R 777 storage/framework
RUN chmod -R 777 storage/logs
#RUN chmod -R 777 storage/app/resources
#RUN chmod -R 777 vendor/mpdf
RUN chmod 777 storage/app/public
RUN chmod 777 storage/app
#Generamos el volumen referenciado
VOLUME [ "/var/www/storage/app/public/"]


