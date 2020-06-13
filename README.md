
# Sobre CmsWeb v0.4

En un software inteligente para crear y administrar paginas web dinamicas, utilizando las mejores practicas de la Internet 2.0, puedes visitar la documentacion en la direccion: [Documentacion Oficial](https://loginweb.dev/docs)

[![IMAGE ALT TEXT](http://img.youtube.com/vi/IF4WsxTWbyA/0.jpg)](http://www.youtube.com/watch?v=IF4WsxTWbyA "Video Title")

La herramienta incluye herramienta y paquete de terceros:

- [Laravel Framework v7](https://laravel.com/)
- [ReactJs Framework v16.2](https://es.reactjs.org/)
- [Websockets v1.4](https://docs.beyondco.de/laravel-websockets/)

# Requerimientos en el Servidor de producción
### Step #1
- LEMP (Ubuntu 18.04)
- Let’s Encrypt 
- Php Extenciones
- NodeJs & Npm

> php7.4-mbstring

> php7.4-bcmath

> php7.4-gd

> php7.4-dom

> php7.4-curl

> php7.4-zip

# Instalador 
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
- php artisan cmsweb:install
- php artisan key:generate

### Step #4
Ingresa a http://tudominio/admin - Login de super usuario:
-   admin@admin.com 
-   password

# Plantillas Disponibles

El cmsweb incluye una variedad de plantillas lista para poner en produccion entre algunas tenemos:
- LPS - Landingpage para empresas de software
- LPR - Landingpage para negocios de venta de comida y restaurant
- SPA - Landingpage para centros de bellesas y spa
- LPU - Landingpage para centros educativos
- LPT - Landingpage para negocios de transporte de personas o mercaderia
- LPM - Landingpage para empresas privadas y publicas de atencion medica o de salud


# Paquetes Disponibles

El cmsweb incluye 5 paquetes listos para ser utilizados
- BimGo - Software para comercio electronico (4 plantillas)
- YimBo - Paquete para venta de comida y delivery
- Inti - Software para centros educativos
- BolDig - Paquete para crear y administrar periodicos digitales
- hiStream - Paquete para la gestion de video conferencias
- MedicWeb - Paquete para la gestion y administracion de Consultorios medicos virtuales

# CmsWeb Sponsors

La empresa detras del Diseño y Creacion del CmsWeb v2020 es:

- ***[LoginWeb - Empresa de Diseño y Desarrollo de Hardware y Software](https://loginweb.dev/)***

### Contributing

Los desarrolladores del CmsWeb son los Ingenieros:
- [Ing. Percy Alvarez - 71130523](#)
- [Ing. Raul Montero](#)
- [Ing. Agustin Mejia](#)


### License

CmsWeb v2020 is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
