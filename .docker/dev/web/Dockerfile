FROM httpd:2.4.41-alpine
RUN apk update; \
    apk upgrade;
RUN apk add \
  bash \
  apache2 \
  php7-apache2 \
  curl \
  ca-certificates \
  openssl \
  git \
  tzdata \
  openntpd;
RUN sed -i "s/#LoadModule\ rewrite_module/LoadModule\ rewrite_module/" /usr/local/apache2/conf/httpd.conf;
# Copy apache vhost file to proxy php requests to php-fpm container
COPY sia.vhost.conf /usr/local/apache2/conf/sia.vhost.conf
RUN echo "Include /usr/local/apache2/conf/sia.vhost.conf" \
    >> /usr/local/apache2/conf/httpd.conf