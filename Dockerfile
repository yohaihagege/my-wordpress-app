# Dockerfile
FROM wordpress:latest

WORKDIR /var/www/html

# Copier le plugin “Hello API”
COPY wp-content/plugins/hello-api /var/www/html/wp-content/plugins/hello-api

# Apache écoute par défaut sur 80, pas besoin de CMD
EXPOSE 80
