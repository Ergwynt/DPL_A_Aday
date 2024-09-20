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