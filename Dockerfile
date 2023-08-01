FROM php:7.4-apache

# Arguments defined in docker-compose.yml
ENV user=dennis
ENV uid=1000

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip


# 2. apache configs + document root
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 3. mod_rewrite for URL rewrite and mod_headers for .htaccess extra headers like Access-Control-Allow-Origin-
RUN a2enmod rewrite headers

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
# RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN useradd -G www-data,root -u $uid -d /home/$user -s /bin/bash $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www

# USER $user

# Copy the custom Apache virtual host configuration
COPY laravel.conf /etc/apache2/sites-available/laravel.conf

# Enable the new virtual host and disable the default one
RUN a2dissite 000-default.conf && a2ensite laravel.conf

# Copy Laravel project files
COPY . /var/www/html

# Change ownership of the Laravel project files to the created user
RUN chown -R $user:$user /var/www/html

# Start the Apache web server
CMD ["apache2-foreground"]
