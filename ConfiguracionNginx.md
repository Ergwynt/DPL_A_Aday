# Configuración de NGINX y Ejemplos de Páginas para Empresa1, Empresa2 y Empresa3

Este documento proporciona un ejemplo completo de la configuración de NGINX para tres empresas (`empresa1`, `empresa2`, `empresa3`) junto con páginas HTML básicas para cada una de ellas.

---

## 1. Configuración de NGINX

La configuración de NGINX incluirá tres bloques `server` para las tres empresas, cada uno apuntando a un directorio específico en el sistema de archivos.

### Archivo `nginx.conf`

```nginx
# nginx.conf - Configuración de NGINX para Empresas

user www-data;
worker_processes auto;
pid /var/run/nginx.pid;

events {
    worker_connections 1024;
}

http {
    include       /etc/nginx/mime.types;
    default_type  application/octet-stream;

    log_format  main  '$remote_addr - $remote_user [$time_local] "$request" '
                      '$status $body_bytes_sent "$http_referer" '
                      '"$http_user_agent" "$http_x_forwarded_for"';

    access_log  /var/log/nginx/access.log  main;
    error_log   /var/log/nginx/error.log;

    sendfile on;
    tcp_nopush on;
    tcp_nodelay on;
    keepalive_timeout 65;
    types_hash_max_size 2048;

    include /etc/nginx/conf.d/*.conf;
    include /etc/nginx/sites-enabled/*;

    # Configuración de la Empresa1
    server {
        listen 80;
        server_name empresa1.com www.empresa1.com;

        root /var/www/empresa1;
        index index.html index.htm;

        access_log /var/log/nginx/empresa1_access.log;
        error_log /var/log/nginx/empresa1_error.log;

        location / {
            try_files $uri $uri/ =404;
        }

        # Redirección a HTTPS (opcional)
        # listen 443 ssl;
        # ssl_certificate /etc/nginx/ssl/empresa1.crt;
        # ssl_certificate_key /etc/nginx/ssl/empresa1.key;
    }

    # Configuración de la Empresa2
    server {
        listen 80;
        server_name empresa2.com www.empresa2.com;

        root /var/www/empresa2;
        index index.html index.htm;

        access_log /var/log/nginx/empresa2_access.log;
        error_log /var/log/nginx/empresa2_error.log;

        location / {
            try_files $uri $uri/ =404;
        }

        # Redirección a HTTPS (opcional)
        # listen 443 ssl;
        # ssl_certificate /etc/nginx/ssl/empresa2.crt;
        # ssl_certificate_key /etc/nginx/ssl/empresa2.key;
    }

    # Configuración de la Empresa3
    server {
        listen 80;
        server_name empresa3.com www.empresa3.com;

        root /var/www/empresa3;
        index index.html index.htm;

        access_log /var/log/nginx/empresa3_access.log;
        error_log /var/log/nginx/empresa3_error.log;

        location / {
            try_files $uri $uri/ =404;
        }

        # Redirección a HTTPS (opcional)
        # listen 443 ssl;
        # ssl_certificate /etc/nginx/ssl/empresa3.crt;
        # ssl_certificate_key /etc/nginx/ssl/empresa3.key;
    }
}
```
## Crea y guarda un archivo index.html en /var/www/empresa1/ empresa2 y empresa3 respectivamente:
## Crea los directorios:

    /var/www/empresa1/
    /var/www/empresa2/
    /var/www/empresa3/

## Coloca los archivos HTML en las respectivas carpetas.

# Verifica la configuración de NGINX: Asegúrate de que NGINX esté configurado correctamente, apuntando a los directorios adecuados con las rutas root.

# Reinicia NGINX para aplicar los cambios:

# sudo systemctl restart nginx

## Verifica en el navegador: Accede a cada uno de los sitios de las empresas:

    http://empresa1.com
    http://empresa2.com
    http://empresa3.com
