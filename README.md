![Logo of the project](./WEB/assets/images/LogoV2Alpha.png)

# New Reset A.I.H.D. *(Alpha)* &middot; 
# ![PHP Support](https://img.shields.io/badge/PHP-%3E%3D%207.2.4-blue.svg?longCache=true&style=flat-square) ![Yarn](https://img.shields.io/badge/Yarn-%3E%3D%201.5.1-blue.svg?longCache=true&style=flat-square) [![Build Status](https://img.shields.io/travis/npm/npm/latest.svg?style=flat-square)](https://travis-ci.org/npm/npm) [![npm](https://img.shields.io/npm/v/npm.svg?style=flat-square)](https://www.npmjs.com/package/npm) [![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com) [![GitHub license](https://img.shields.io/github/license/andgar2010/Project_New_Reset_AIHD.svg?style=flat-square)](https://github.com/andgar2010/Project_New_Reset_AIHD)

> Additional information or tag line

Proyecto de grado para App Servidor Gestión de incidentes de equipos de computo para Institución Educativa Distrital Alfredo Iriarte


# Modulos

### Modulos Generales para funcionamiento del sistema

* Menu dinamico por perfil de usuario *(Pendiente)*
* Modificación de clave usuario logueado *(Pendiente)*
* Visor de Perfil usuario logueado
* redirección pagina de inicio asignada a usuario
* avatares de usuario logueado *(Pendiente)*

### Modulos administración de Usuario y perfiles
* Registro de usuarios -> sólo para usuarios con rol admin
* Recuperación de clave mediante correo *(Pendiente)*
* Modificación peril definido a usuario
* Modificación Datos de usuario *(Pendiente subir avatar)*
* Modificación de password de usuario especifico *(Pendiente)*
* Activar o desactivar usuario
* Registro, eliminacion y actualización de perfiles plantillas

### Modulos administración de Equipo
* Registro de Equipo -> sólo para usuarios con rol admin
* Modificación Datos de equipo
* Activar o desactivar equipo

### Modulos administración de Tickets
* Registro de ticket -> todos los usuarios *(Pendiente)*
* Modificación Datos de Ticket -> sólo para usuarios con rol tecnico *(Pendiente)*
* Actualizar estado de ticket  -> sólo para usuarios con rol tecnico *(Pendiente)*

### Adicionales
* Alertas mediante jquery-confirm!

## Instalación / Primeros pasos

Una rápida introducción a la configuración mínima que necesita para tener un New Reset A.I.H.D. en marcha. 

```shell
npm start
```

<!--Here you should say what actually happens when you execute the code above.-->



## En desarrollo

### Construido con
* Propellerkit ^1.1.0
* Bootstrap ^3.3.7
* JQuery ^3.2.1
* Font-awesome ^4.7.0
* Material Design Icons ^3.0.1
* Moment.JS ^2.19.4
* TinyMCE ^4.7.9
* Toastr ^2.1.4

Nota: **^**, es versión adelante superior .

<!--- List main libraries, frameworks used including versions (React, Angular etc...) -->

### Pre-requisitos para servidor y cliente

#### Hardware
| Tipos | Requimientos |
| :----------------- | :--: |
| Tipo de procesador | Procesador de 1 gigahercio (GHz) o más rápido de 32 bits (x86) o de 64 bits (x64). <br>*Servidor recomendado 64 bits (x64)* |
| Memoria 			 | 1 GB de RAM (32 bits) o 2 GB de RAM (64 bits). <br>*Servidor recomendado 4GB de RAM (64 bits)* |
| Resolución de pantalla |1280 x 720 (Servidor se recomienda 1440 x 810 o superior) con color verdadero.<br>125% de escala de escritorio (120 ppp) o menor (recomendado).|
| Espacio en disco   | 4 GB de espacio disponible en el disco duro. <br>*Servidor recomendado 20 GB de espacio disponible* |
| Red				 | Acceso a red local (Cable Ethernet o Wifi) <br> *Servidor recomendado cable Ethernet* |

#### Software
| Tipo              |                        Requerimientos                        |
| ----------------- | :----------------------------------------------------------: |
| Sistema operativo | Microsoft Windows 7 SP1 o superior (se recomienda Microsoft® Windows® 10 )<br>Linux, kernel 2.6.1 2 o superior,  glibc 2.12 o superior<br>Mac OS X 10.10 Yosemite o superior |
| Navegador web     | Google Chrome 65 o superior<br>Mozilla Firefox 59 o superior<br>Opera 42 o superior. <br>*No soporta antiguas navegadores como Internet Explorer 6 - 11.* |



#### Entorno de desarrollo

* [Node.js 9.11.1 ó superior (incluido npm 5.6.0)](https://nodejs.org/en/download/)

* [Yarn 1.5.1 ó superior](https://yarnpkg.com/lang/en/docs/install/)

* [XMAPP 7.2.4 ó superior](https://www.apachefriends.org/index.html) 

  Incluido:

  * PHP ^7.2.4
  * MariaBD ^10.1

* Editor de texto ([Visual Studio Code](https://code.visualstudio.com/download), [Sublime Text](https://www.sublimetext.com/3), [Atom Editor](https://atom.io/), [NotePad++](https://notepad-plus-plus.org/download/v7.5.6.html) o  su preferido)


#### Entorno de ejecución (Servidor)

* XMAPP ^7.2.4
  * PHP ^7.2.4
  * MariaBD ^10.1

<!--What is needed to set up the dev environment. For instance, global dependencies or any other tools. include download links. -->


### Configuración de Desarrollo

Aquí una breve introducción sobre lo que un desarrollador debe hacer para comenzar a desarrollar

```shell
git clone git://github.com/andgar2010/Project_New_Reset_AIHD.git
cd Project_New_Reset_AIHD/
yarn install
```

Y explique lo que sucede paso a paso. Si se necesita algún entorno virtual, servidor local o alimentador de base de datos, explique aquí.

### Compliación

If your project needs some additional steps for the developer to build the
project after some code changes, state them here. for example:

```shell
./configure
make
make install
```

Here again you should state what actually happens when the code above gets
executed.

### Implementación / Publicación

give instructions on how to build and release a new version
In case there's some step you have to take that publishes this project to a
server, this is the right time to state it.

```shell
packagemanager deploy your-project -s server.com -u username -p password
```

And again you'd need to tell what the previous code actually does.

## Versiones

We can maybe use [SemVer](http://semver.org/) for versioning. For the versions available, see the [link to tags on this repository](/tags).


## Configuración

Here you should write what are all of the configurations a user can enter when
using the project.

## Pruebas

Describe and show how to run the tests with code examples.
Explain what these tests test and why.

```shell
Give an example
```

## Guía de estilo

Explain your code style and show how to check it.

## Referencias API

If the api is external, link to api documentation. If not describe your api including authentication methods as well as explaining all the endpoints with their required parameters.


## Base de datos

Explaining what database (and version) has been used. Provide download links.
Documents your database design and schemas, relations etc... 

## Licencia de uso

State what the license is and how to find the text version of the license.


## Agradecimientos

* Propeller
* Bootstrap Twitter
* JQuery 
* Font-awesome
* Material Design Icons Google
* Moment.JS 
* TinyMCE 
* Toastr
* Fundación MariaDB
* PHP
* Node.js
* GitHub
