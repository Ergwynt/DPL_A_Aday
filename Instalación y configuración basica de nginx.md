# Instalación Básica de NGINX

## Paso 1: Convertirse en superusuario  
Ejecuta `sudo su` para obtener privilegios de superusuario.  

## Paso 2: Actualizar los repositorios del sistema  
Ejecuta `apt update` para actualizar los repositorios del sistema.  

## Paso 3: Instalar NGINX  
Usa `apt install nginx` para instalar NGINX en el sistema.  

## Paso 4: Verificar el estado del servicio NGINX  
Comprueba que NGINX esté funcionando correctamente con `systemctl status nginx`.  

## Paso 5: Probar la configuración de NGINX  
Verifica que la configuración sea válida ejecutando `nginx -t`.  

## Paso 6: Navegar por los directorios de configuración  
Accede al directorio de configuración de NGINX con `cd /etc/nginx`, donde encontrarás directorios como `sites-enabled` y `sites-available` para gestionar configuraciones de sitios web.  

## Paso 7: Modificar la página predeterminada  
Accede al directorio raíz de los archivos web con `cd /var/www/html`, elimina la página predeterminada usando `rm index.nginx-debian.html`, crea un nuevo archivo con `nano index.html` y añade el contenido `<h1>Hola Manolo</h1>` antes de guardar.  

## Paso 8: Reiniciar NGINX  
Reinicia el servicio NGINX para aplicar los cambios con `systemctl restart nginx`.  

## Paso 9: Verificar en el navegador  
Abre un navegador y accede a `http://localhost` para confirmar que aparece el mensaje `<h1>Hola Manolo</h1>`.  
