<!-- # Introducción

--- -->

- [Sobre el CmsWeb](#section-1)
- [Instalación & Configucarion](#section-2)
- [Caracteristicas & Funcionalidades](#section-3)
- [Paginas Web Dinamicas](#section-4)
- [Paquetes & Modulos](#section-5)

<a name="section-1"></a>
## Sobre el CmsWeb

Es un software para crear y administrar paginas web dinamicas, construido con las mejores preactias de la internet v2.0.

![image](https://loginweb.net/storage/cmsweb/Content-Management-System.jpg)

---

<a name="section-2"></a>
## Instalación y Configuracion
### Step #1
Clona el repositorio oficial e instala las dependencias
- git clone https://github.com/percy2017/cmsweb0.4.git
- composer install
- npm install
- npm run prod

### Step #2
Configura el erchivo .env (Variales de Entorno) y permisos
-   cp .env.example .env
-   edit .env (nano)   
-   chmod -R 777 (storage, bootstrap y public)

### Step #3
Realizar la instalcion mediante el comando:
- php artisan voyager:install
- php artisan key:generate

### Step #4
Ingresa a http://tudominio/admin - Login de super usuario:
-   admin@admin.com 
-   password

### Video

[![IMAGE ALT TEXT](http://img.youtube.com/vi/IF4WsxTWbyA/0.jpg)](http://www.youtube.com/watch?v=IF4WsxTWbyA "Video Title")

---

<a name="section-3"></a>
## Caracteristicas y Funcionalidades

El CmsWeb (sistema para gestionar contenidos dinamicos) tiene caracteristicas y funcionalidades diseñadas para que su implementacion y manipulacion sean de forma intuitiva y de facil uso.

Luego de la instalacion el sistema mostrara un mensaje de bienvenida mostrando algo como esto en la raiz de tu proyecto http://tudominio.com/

![image](https://loginweb.net/storage/cmsweb/welcome.PNG)

El software tiene todos partes importante:

- Front-End - El sistema incluye varias paginas web (Landingpage) para direfente negocios  
- Back-End - Es desde donde se administran todas las funciones de software

---

<a name="section-4"></a>
## Paginas Web Dinamicas

Las paginas dinamica o landingpage son plantillas web profecionales, elegantes y modernas, el sistema incluye varias para todo tipo de negocios.

Todas las plantilla son dinamicas, lo que significa que se puedes modificar en produccion, los formularios de edicion de los mismo se encuentran en la Back-End.

![image](https://loginweb.net/storage/cmsweb/template.PNG)

![image](https://loginweb.net/storage/cmsweb/plantillas.PNG)

---

<a name="section-5"></a>
## Paquetes o Modulos

El sistema incluye varios paquetes listos para ser utilizados e implmentados, todos los modulos estan diseñados y desarrollados para distintos tipos de negocios o empresas. Puedes realizar la instalacion de un paquete a la vez.

Puedes gestionar todos los paquetes desde el Back-End.

![image](https://loginweb.net/storage/cmsweb/paquetes.PNG)