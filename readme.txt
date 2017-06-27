Desarrollo realizado en Ubuntu 16.04.

Para iniciar el servidor local, ejecutar lo siguiente en un terminal
php -S localhost:8080 -t <ruta home de los archivos>

En este ejemplo se usó:
php -S localhost:8080 -t /home/keny/PHP

Una vez colocado los archivos en la ruta home asignada, abrir un navegador web y colocar la url:

http://localhost:8080/index.php

Lo que llevara a la página de inicio donde se debe colocar Username y Password de acceso al sistema. Los usuarios que tienen acceso al sistema son los siguientes:

Username	Password
admin		1234
user1		1234
user2		1234
user3		1234

Donde el usuario admin puede ver las páginas donde pueden navegar todos los usuarios, y ningún usuario diferente de admin puede ver su pagina.

User1, user2 y user3 solo pueden ver sus páginas propias, no las de otros usuarios, de tratar de hacerlo se muestra un mensaje de error, se destruye la sesión y se vuelve a la página de inicio.


Keny Labrador
Junio de 2017
KenyLabrador@gmail.com