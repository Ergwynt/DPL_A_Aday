Para CLonar el repositorio en local me he dirigido a una carpeta local y he puesto el siguiente comando: 

    -git clone https://github.com/Ergwynt/DPL_A_Aday.git

Para crear el archivo tarea1_1.md he puesto el siguiente comando desde terminal

    -echo "" > tarea1_1.md

Antes de ejecutar el prime commit se ha puesto el siguiente comando:

    -git add tarea1_1.md 

Para marcar los archivos que se añadiran al repositorio. Ahora el archivo está marcado, pero todavía no se ha añadido al repositorio. Podemos comprobarlo ejecutando el siguiente comando:

    -git status

Una vez hecho esto realizaremos el commit el cual guardara el estado actual de los archivos que hemos marcado, y les pondra un mensaje con los cambios realizado.

    -git commit -m "commit inicial"

Para comprobar los ultimos cambios hechos ejecutamos el siguiente comando:

    -git log

Mostrando la siguiente información:

    commit 059706e275dddfb1b90f517db3b1b0fdf6948960 (HEAD -> main)
    Author: Ergwynt <aday18005@gmail.com>
    Date:   Fri Sep 13 15:45:02 2024 +0100

        commit inicial

Para Subir los cambios realizados al repositorio remoto ejecutaremos el siguiente comando:

    -git push


IGNORAR ARCHIVOS (1 PUNTO)

para crear el fichero privado.txt ejecutaremos el siguiente comando:

    -touch privado.txt

para crear la carpeta privada ejecutaremos el siguiente comando:

    -mkdir privada

Para que tanto el fichero txt como la carpeta sean ignoradas por git Crearemos un fichero .gitignore de la siguiente manera:

    - touch .gitignore

Ahora abriremos el archivo recien creado usando nano .gitinore o notepad(si estamos en windows).

Una vez abierto modificaremos el fichero añadiendo las siguientes lineas:

    -privado.txt
    -privado/
    Esto hara que se ignore el archivo y la carpeta.

Una vez hecho esto guardaremos y cerraremos el archivo y verificamos el estado del repositorio:

    -git status

Si se ha hecho correctamente la carpeta y el fichero no apareceran en la lista de cambios.

    $ git status
    On branch main
    Your branch is up to date with 'origin/main'.

    Changes not staged for commit:
    (use "git add <file>..." to update what will be committed)
    (use "git restore <file>..." to discard changes in working directory)
            modified:   tarea1_1.md

    Untracked files:
    (use "git add <file>..." to include in what will be committed)
            .gitignore

    no changes added to commit (use "git add" and/or "git commit -a")

---- AÑADIR FICHERO 1.txt ----

Para añadir el fichero ejecutaremos el siguiente comando:

    -touch 1.txt

Y verificamos que ha sido creado con un ls
    
    - $ ls
    - 1.txt  privada/  privado.txt  tarea1_1.md

---- CREAR EL TAG v0.1 ----

Para crear el tag primero haremos un git status para comprobar que no haya cambios sin confirmar.

Para saber si todo esta correcto debe dar este mensaje:

    nothing to commit, working tree clean

Hecho esto crearemos el tag para ello haremos uso del siguiente comando:

    - git tag v0.1

Para verificar que el tag se ha creado correctamente escribiremos:

    - git tag

Si se creo correctamente nos mostrara v0.1 en la lista de etiquetas

---- SUBIR EL TAG v0.1 ----

Para subir el tag podemos hacerlo de dos formas distintas si no hemos realizado otros cambios en el repositorio local escribiremos los siguiente:

    - git push origin v0.1

Si en cambio hemos realizado cambios como en mi caso en el fichero tarea1_1.md escribiremos el siguiente comando:

    - git status (verificamos los cambios que faltan por confirmar)
    - git add . para añadir todo o git add y el nombre especifico del archivo o carpeta que deseas añadir
    - git push origin main 


       |--------------------------------------------|
       
       | Nombre | Enlace|
       |----------------|-----------------------------------|
       |Samuel Perez|https://github.com/SamuP14/DPL-A-SamuelP|
       |------------|-----------------|
       |Samuel Sanchez|https://github.com/Shulkioras/DPL_A_SamuelS|
       |--------------|------------------------|
       |David Luis Mora|https://github.com/David-Luis-Mora/DPL_A_David|
       |---------------|----------------------------------------------|






    




