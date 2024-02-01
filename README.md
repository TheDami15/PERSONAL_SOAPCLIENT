# Consumidores de Servicio SOAP

Este repositorio contiene dos archivos PHP, `Lectura.php` e `Insert.php`, que actúan como consumidores del servicio SOAP proporcionado por un proyecto externo, específicamente desde el archivo `InsertCategoria.php`.

## Archivos del Proyecto

### 1. Lectura.php

En `Lectura.php`, se implementa el consumo del servicio SOAP como cliente del archivo externo `InsertCategoria.php`. Este archivo se encarga de leer datos desde la base de datos y utilizar el servicio para realizar operaciones relacionadas con la lectura de información.

### 2. Insert.php

`Insert.php` es otro archivo consumidor del servicio SOAP desde `InsertCategoria.php`. En este caso, el archivo se encarga de insertar datos en la base de datos y utiliza el servicio externo para realizar operaciones de inserción.

## Instrucciones de Uso

A continuación, se proporcionan algunas instrucciones básicas para utilizar este proyecto:

1. Hay que hacer la instalación del nusoap
   ```bash
   composer require e-novative/nusoap
