# MisJhonLaravel

Este proyecto ha sido migrado de HTML/Tailwind a Laravel.

## Requisitos
- PHP >= 8.1
- Composer
- MySQL (XAMPP)

## Instalación

1.  **Configurar Base de Datos**:
    - Abre XAMPP y asegúrate de que MySQL esté corriendo.
    - Abre phpMyAdmin (http://localhost/phpmyadmin).
    - Crea una nueva base de datos llamada `misjhon`.

2.  **Configurar Entorno**:
    - El archivo `.env` ya está configurado para conectar a la base de datos `misjhon` con el usuario `root` y sin contraseña (configuración por defecto de XAMPP).
    - Si tienes contraseña en tu MySQL, edita el archivo `.env` y ponla en `DB_PASSWORD`.

3.  **Instalar Dependencias**:
    - Abre una terminal en la carpeta del proyecto.
    - Ejecuta: `composer install`

4.  **Generar Clave de Aplicación**:
    - Ejecuta: `php artisan key:generate`

5.  **Ejecutar Migraciones**:
    - Esto creará las tablas necesarias en tu base de datos.
    - Ejecuta: `php artisan migrate`

6.  **Iniciar Servidor**:
    - Ejecuta: `php artisan serve`
    - Abre tu navegador en `http://localhost:8000`.

## Estructura
- **Vistas**: `resources/views/`
    - `home.blade.php`: Página principal.
    - `auth/`: Login y Registro.
    - `compra.blade.php`: Formulario de compra.
    - `pages/`: Otras páginas estáticas.
- **Controladores**: `app/Http/Controllers/`
    - `AuthController.php`: Maneja el registro e inicio de sesión.
    - `CompraController.php`: Maneja el formulario de compra.
- **Modelos**: `app/Models/`
    - `User.php`: Usuario (con campos extra: telefono, direccion, region).
    - `Compra.php`: Modelo para las compras.
- **Rutas**: `routes/web.php`
- **Imágenes**: `public/imagenes/`
