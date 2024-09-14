Para CLonar el repositorio en local me he dirigido a una carpeta local y he puesto el siguiente comando: 

--> git clone https://github.com/Ergwynt/DPL_A_Aday.git

Para crear el archivo tarea1_1.md he puesto el siguiente comando desde terminal

--> echo "" > tarea1_1.md

Antes de ejecutar el prime commit se ha puesto el siguiente comando:

--> git add tarea1_1.md 

Para marcar los archivos que se añadiran al repositorio. Ahora el archivo está marcado, pero todavía no se ha añadido al repositorio. Podemos comprobarlo ejecutando el siguiente comando:

--> git status

Una vez hecho esto realizaremos el commit el cual guardara el estado actual de los archivos que hemos marcado, y les pondra un mensaje con los cambios realizado.

--> git commit -m "commit inicial"

Para comprobar los ultimos cambios hechos ejecutamos el siguiente comando:

-->  git log

Mostrando la siguiente información:

    commit 059706e275dddfb1b90f517db3b1b0fdf6948960 (HEAD -> main)
    Author: Ergwynt <aday18005@gmail.com>
    Date:   Fri Sep 13 15:45:02 2024 +0100

        commit inicial





