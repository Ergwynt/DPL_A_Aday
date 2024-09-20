CREAR UNA RAMA  v0.2

Para crear una segunda rama haremos uso del siguiente comando:

    -git branch v0.2

Para cambiar a la nueva rama haremos uso del siguiente comando:

    -git checkout v0.2

    y deberia darnos un mensaje tal que asi:

    Switched to branch 'v0.2'

Aunque tambien se pueden hacer ambos pasos a la vez con el siguiente comando:

    - git checkout -b v0.2

Para confirmar que estamos trabajando en la rama v0.2 ejecutamos el siguiente comando:

    -git branch
     
     main
    * v0.2

AÑADIR  EL FICHERO 2.txt


Para añadir el fichero haremos uso del siguiente comando:

    - touch 2.txt

CREAR UNA RAMA REMOTA v0.2

Para subir los cambios al repositorio remoto pondremos lo siguiente:

    - git push origin v0.2


MERGE DIRECTO

Para posicionarnos en la rama master usaremos el comando:

    - git checkout main

Para hacer el merge desde la rama master usaremos el siguiente comando:

    - git merge v0.2

MERGE CON CONFLICTO

Para hacer los cambios en el 1.txt Haremos lo siguiente:

    - echo "Hola" > 1.txt
    - git add 1.txt
    - commit -m "Añadir 'Hola' en 1.txt en la rama master"

Ahora cambiamos a la rama v0.2 para ello ponemos:

    - git checkout v0.2

Para hacer los cambios en el 2.txt haremos lo siguiente:

    -echo "Adios" > 1.txt
    - git add 1.txt
    - git commit -m "Añadir 'Adios' en 1.txt en la rama v0.2"

Nos posicionamos de nuevo en la rama master de la siguiente forma:

    - git checkout main

Y hacemos un merge con la rama v0.2:

    - git merge v0.2

    Nos saldra este mensaje:
    
    - Auto-merging 1.txt
    - CONFLICT (content): Merge conflict in 1.txt
    - Automatic merge failed; fix conflicts and then commit the result.

LISTADO DE RAMAS

Para listar las ramas con merge usaremos:
   
   - git branch --merged

Para listar las que no han sido listadas con merge usaremos: 
    
    - git branch --no-merged

ARREGLAR  CONFLICTO

Para arreglar el conflicto anterior abriremos 1.txt para editarlo y veremos algo como esto:

        <<<<<<< HEAD
        Hola
        =======
        Adios
        >>>>>>> v0.2
Los <> y = marcan las zonas conflictivas por lo que tan solo deberemos editarlo y eliminar las lineas donde esten estos simbolos:

    
        Hola
        Adios
        
Dejando tan solo hola y adios


BORRAR RAMA

Para crear un tag v0.2 haremos lo siguiente:

    - git tag v0.2 o - git tag -a v0.2 -m "Version del tag v02"


Confirmamos que el tag se ha creado correctamente:

    - git tag

Para borrar la rama v0.2 usaremos:
    - git branch -d v0.2

LISTADO DE CAMBIOS

Para listar los distintos commits con sus ramas y sus tag usaremos:

    - git log --oneline --decorate --all

veremos algo asi:

    0e4ca91 (HEAD -> main, tag: v0.2, origin/main, origin/HEAD) Merge branch 'main' of https://github.com/Ergwynt/DPL_A_Aday
    de9b196 pull del repositorio remoto y add de lo añadido en local
    bd5ee3f Subida de carpeta xampp
    77d17bc Conflicto con el merge en 1.txt resuelto
    e766a89 Añadir 'Adios' en 1.txt en la rama v0.2
    03dd23a Añadir 'Hola' en 1.txt en la rama master
    38f5eed (origin/v0.2) Actualizacion de repositorio nueva insercion carpeta de practicas para xampp
    5eab613 Update tarea1_1.md
    df2f08b Update tarea1_1.md
    a77eb1c Update tarea1_1.md
    f06a572 Actualizacion de fichero tarea1_1.md
    cf65a27 commit de los ultimos cambios realizados al txt
    302610f Siguientes cambios realizados actualizacion de tarea1_1.md, 2 nuevos ficheros un .ignore y un 1.txt
    d763a7f Primer commit

CREAR UNA ORGANIZACIÓN

Para crear una organización nos dirigiremos a github picaremos en la foto de nuestro perfil y buscaremos your organizations y ahi dentro podremos crear una.

