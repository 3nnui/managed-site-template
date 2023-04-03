# Use offical ubuntu:20.04 image
FROM ubuntu:20.04

# Set timezone environment variable
ENV TZ=Europe/Berlin

# Set geographic area using above variable
# This is necessary, otherwise building the image doesn't work
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Remove annoying messages during package installation
ARG DEBIAN_FRONTEND=noninteractive

# apt tools
RUN apt-get update && apt-get install --no-install-recommends -y software-properties-common

# add repo or specific php version
RUN add-apt-repository ppa:ondrej/php 

# Install packages: web server Apache, PHP and extensions
RUN apt-get update && apt-get install --no-install-recommends -y \
  apache2 \
  apache2-utils \
  ca-certificates \
  git \
  php8.1 \
  libapache2-mod-php8.1 \
  php8.1-curl \
  php8.1-dom \
  php8.1-gd \
  php8.1-intl \
  php-json \
  php8.1-mbstring \
  php8.1-xml \
  php8.1-zip \
  sendmail && \
  apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy virtual host configuration from current path onto existing 000-default.conf
COPY apache-default.conf /etc/apache2/sites-available/000-default.conf

# Remove default content (existing index.html)
RUN rm /var/www/html/*

# Fix files and directories ownership
RUN chown -R www-data:www-data /var/www/html/

# Activate Apache modules headers & rewrite
RUN a2enmod headers rewrite

# Change web server's user id to match local user, replace with your local user id
ARG UID
RUN usermod --uid $UID www-data

# Tell container to listen to port 80 at runtime
EXPOSE 80

# Start Apache web server
CMD [ "/usr/sbin/apache2ctl", "-DFOREGROUND" ]