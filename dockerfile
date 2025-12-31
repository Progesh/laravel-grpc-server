FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-install zip

WORKDIR /var/www/html

# Copy app code
COPY . .

# Copy RoadRunner binary from build stage
COPY --from=ghcr.io/roadrunner-server/roadrunner:latest /usr/bin/rr /usr/local/bin/rr

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
#RUN composer install --no-dev --optimize-autoloader

# Expose gRPC port
EXPOSE 9001

# Use RR to serve (config in .rr.yaml)
CMD ["rr", "serve", "-c", ".rr.yaml"]
