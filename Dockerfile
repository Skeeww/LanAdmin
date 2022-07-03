FROM php:alpine

RUN mkdir /app
WORKDIR /app

ENTRYPOINT [ "php", "artisan", "serve" ]

EXPOSE 8000