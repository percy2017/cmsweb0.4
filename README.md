
# Sobre CmsWeb v0.4

En un software inteligente para crear y administrar paginas web dinamicas, utilizando las mejores practicas de la Internet 2.0

La herramienta inscluye paquete de terceros:

- [Laravel Framework v7](#)
- [Voyager Packages v1.4](#)
- [ReactJs Framework v16.2](#)
- [Websockets v1.4](#)

# Servidor
### Step #1
- LEMP (Ubuntu 20.04)
- Let’s Encrypt 
- Php Extenciones
> php7.2-mbstring

> php7.2-bcmath

> php7.4-gd

> php7.4-dom

> php7.4-curl

> php7.2-zip

# Instalador
### Step #1
Clona el repositorio oficial e install las dependencias
- https://github.com/percy2017/cmsweb3.git
- composer install
- npm install
- npm run prod

### Step #2
Configurar el erchivo .env (Variales de Entorno) y permisos
-   cp .env.example .env
-   edit .env (nano)   
-   chmod -R 777 (storage, bootstrap y public.)

### Step #3
Realizar la instalcion mediante el comando:
-   php artisan voyager:install

nombre el super usuario:
-   admin@admin.com 
-   password
# Paquetes Disponibles

El cmsweb incluye 5 paquetes para ser utilizados
- BimGo - Software para comercio electronico
- Yimbo - Paquete para venta de comida y delivery
- Inti - Software para centros educativos
- BolDig - Paquete para crear y administrar periodicos digitales
- hiStream - Paquete para la gestion de video conferencias

# CmsWeb Sponsors

La empresa detras del Diseño y Creacion del CmsWeb v2020 es:

- ***[LoginWeb - Empresa de Diseño y Desarrollo de Hardware y Software](https://loginweb.net/)***

### Contributing

Los desarrolladores del CmsWeb son los Ingenieros:
- [Ing. Percy Alvarez](#)
- [Ing. Raul Montero](#)


### License

CmsWeb v2020 is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
