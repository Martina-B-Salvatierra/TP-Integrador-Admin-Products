## Trabajo Práctico Integrador - Programación Web Back End

Este proyecto corresponde al Trabajo Práctico Integrador de la asignatura **Programación Web Back End**, y tiene como objetivo implementar un sistema básico de administración de productos para una tienda en línea. El sistema permite gestionar productos a través de una interfaz moderna y funcional, utilizando PHP para el backend y MySQL para la base de datos.

## Descripción

El sistema consta de cinco pantallas principales:

1. **Visualización del cliente**: Muestra los productos disponibles para su visualización (sin opción de compra).
2. **Gestión de productos (Administrador)**: Permite gestionar productos mediante una tabla, con opciones para visualizar, editar y eliminar productos.
3. **Alta de productos**: Formulario para agregar nuevos productos a la base de datos.
4. **Login**: Simula un proceso de autenticación para acceder a las pantallas de administración.
5. **Edición de productos**: Permite modificar los datos de un producto existente.

## Requisitos del sistema

- **Servidor web**: Apache (o similar).
- **PHP**: Versión 7.4 o superior.
- **Base de datos**: MySQL 5.7 o superior.
- **Navegador**: Compatible con HTML5 y CSS3.

## Estructura del proyecto

El proyecto está compuesto por los siguientes archivos y directorios:

TPI-AdminProducts 
├── /css/ 
│ └── style.css # Archivo principal de estilos 
├── /images/ 
│ ├── imagen1.jpg 
│ ├── imagen2.jpg 
│ └── imagen3.jpg 
├── /php/ 
│ ├── conexion.php # Conexión a la base de datos 
│ ├── functions.php # Funciones reutilizables (CRUD para productos) 
├── /sql/ 
│ └── tienda.sql # Script para crear la base de datos y la tabla productos 
├── index.php # Visualización de productos para el cliente 
├── login.php # Pantalla de login (solo redirige) 
├── admin.php # Pantalla principal del administrador 
├── add_product.php # Formulario para agregar productos 
├── edit_product.php # Formulario para editar productos 
└── README.md # Documento de descripción del proyecto

## Instrucciones para ejecutar el proyecto

1. **Clonar el repositorio**: Clona este repositorio en tu máquina local usando el siguiente comando:
   ```bash
   git clone https://github.com/tu_usuario/TPI-AdminProducts.git

2. **Configurar el entorno**: Asegúrate de tener instalado un servidor web como XAMPP o WAMP que incluya PHP y MySQL.

3. **Importar la base de datos**: Importa el archivo tienda.sql en tu servidor MySQL para crear la base de datos y las tablas necesarias.

4. **Iniciar el servidor**: Inicia el servidor Apache y MySQL desde tu panel de control de XAMPP/WAMP.

5. **Acceder al proyecto**: Accede a la carpeta del proyecto a través de tu navegador en la siguiente URL:
    http://localhost/TPI-AdminProducts/

## Contribuciones
Las contribuciones son bienvenidas. Si deseas mejorar el proyecto, puedes hacer un fork del repositorio y enviar un pull request.

## Licencia
Este proyecto está bajo la Licencia MIT.

## Autor
- Martina Salvatierra
- Curso: Programación Web Back End - 2024.02
