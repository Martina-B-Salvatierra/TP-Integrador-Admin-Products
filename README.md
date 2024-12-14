# Trabajo Práctico Integrador - Programación Web Back End
Este proyecto es el Trabajo Práctico Integrador de Programación Web Back End, que incluye un sistema básico de administración de productos con una interfaz moderna y funcional. 
Los datos son gestionados mediante PHP y almacenados en una base de datos MySQL.

## Descripción
El sistema consta de cinco pantallas principales:
1. Visualización del cliente: Una vista moderna para mostrar productos disponibles (solo visualización, sin compras).
2. Gestión de productos (Administrador): Lista en tabla para gestionar productos (visualizar, editar y eliminar).
3. Alta de productos: Formulario para agregar nuevos productos.
4. Login: Simulación de un sistema de autenticación para acceder a las pantallas de administración.
5. Edición de productos: Formulario para actualizar la información de un producto existente.

## Requisitos del sistema
- Servidor web: Apache o similar.
- PHP: Versión 7.4 o superior.
- Base de datos: MySQL 5.7 o superior.
- Navegador: Compatible con HTML5 y CSS3.

## Estructura del proyecto
├── /css                     # Archivos CSS para el diseño
│   └── styles.css           # Estilos principales
├── /php                     # Archivos PHP
│   ├── config.php           # Configuración de la base de datos
│   ├── db.php               # Funciones para interactuar con la base de datos
│   ├── add_product.php      # Lógica para agregar productos
│   ├── edit_product.php     # Lógica para editar productos
│   ├── delete_product.php   # Lógica para eliminar productos
│   └── login.php            # Lógica (simulada) para el login
├── /sql                     # Archivos relacionados con la base de datos
│   └── schema.sql           # Archivo para crear la base de datos
├── /img                     # Carpeta para imágenes (opcional)
│   └── placeholder.jpg      # Imagen de muestra
├── admin.php                # Pantalla principal de gestión de productos
├── add_product.php          # Pantalla para agregar productos
├── edit_product.php         # Pantalla para editar productos
├── index.php                # Página de visualización del cliente
├── login.php                # Pantalla de login
├── README.md                # Documentación del proyecto

## Instalación
1. Clonar este repositorio: git clone https://github.com/Martina-B-Salvatierra/TP-Integrador-Admin-Products.git
2. Importar la base de datos:
- Abrir phpMyAdmin o usar una herramienta de línea de comandos.
- Crear una base de datos llamada tienda.
- Importar el archivo db.sql para crear las tablas y datos iniciales.
3. Configurar la conexión a la base de datos:
- Editar el archivo /php/config.php con los datos de tu servidor MySQL.
4. Abrir el proyecto en un servidor web compatible, como XAMPP o WAMP.

## Uso
1. Abrir la página principal (index.php) para visualizar los productos.
2. Ingresar a la pantalla de login (login.php) para acceder a las funciones de administración.
- Nota: El login está simulado; cualquier usuario puede acceder.
3. En la sección de administración:
- Agregar productos.
- Editar productos existentes.
- Eliminar productos.

## Capturas de pantalla
- Vista del cliente 
- Gestión de productos
- Formulario de alta de productos

## Tecnologías utilizadas
- Frontend: HTML5, CSS3.
- Backend: PHP.
- Base de datos: MySQL.

## Autor
- Martina Salvatierra
- Curso: Programación Web Back End - 2024.02

## Licencia
Este proyecto se distribuye bajo la licencia MIT. Puedes consultarla en el archivo LICENSE.

