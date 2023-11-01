# DESC

Petty care, una aplicacion desarrollada por un grupo de estudiantes del colegio Jose Ortega, parte de un proyecto de la materia de informatica

! link: localhost/pettycare

# IMPORTANTE
Al descargar el archivo y descomprimirlo cambiar el nombre de la carpeta a pettycare y luego llevarlo a la carpeta htdocs de xampp

La aplicacion usa base de datos mysql junto a un sistema php, para la creacion de las tablas mysql se hará de la siguiente manera:

! Entrar a localhost/phpmyadmin

1. creacion de DB: crear una database con el nombre "petty_care"
2. creacion de tabla: crear una tabla en la database con el nombre "users"
3. datos de la tabla: especificar 4 columnas en la tabla de la DB, las cuales contendrán:
   - id - int - 9 - PK
   - name - varchar - 100
   - email - varchar - 200
   - password - varchar - 50
