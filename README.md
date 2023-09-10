# compiladores_expresion_regular
**Validador de Fecha y URL en PHP**
Este es un pequeño proyecto en PHP que te permite validar fechas y direcciones URL utilizando expresiones regulares.

Requisitos
Asegúrate de cumplir con los siguientes requisitos antes de utilizar esta aplicación:

PHP instalado en tu servidor o entorno de desarrollo.
Un navegador web para interactuar con la aplicación.
Uso
Sigue estos pasos para comenzar a utilizar la aplicación:

Descarga o clona este repositorio en tu servidor web local o hosting.

Abre el archivo index.php en tu navegador.

En la página principal, encontrarás dos formularios:

Validador de Fecha: Ingresa una fecha en formato "dd/mm/yyyy" en el campo de entrada y presiona "Validar Fecha".

Validador de URL: Ingresa una URL en el campo de entrada y presiona "Validar URL".

La aplicación utilizará expresiones regulares para validar la fecha o la URL ingresada y te mostrará un mensaje indicando si la entrada es válida o no.

Expresiones Regulares
Este proyecto utiliza las siguientes expresiones regulares para validar las entradas:

Fecha: La expresión regular para validar fechas en formato "dd/mm/yyyy" es: ^(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[0-2])/\d{4}$.

URL: La expresión regular para validar URLs es más compleja y puede manejar diferentes formatos de URL. Puedes encontrarla en el archivo validation.php dentro de la carpeta includes.


