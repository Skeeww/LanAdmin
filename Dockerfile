FROM php:alpine

WORKDIR /app

COPY . .

ENTRYPOINT [ "php", "artisan", "serve", "--host", "0.0.0.0", "--port", "8000"]

EXPOSE 8000