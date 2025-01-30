# Proyecto Laravel Backend CRUD Estudiantes

Este proyecto es una aplicación web construida utilizando el framework Laravel. La aplicación incluye un sistema CRUD (Crear, Leer, Actualizar, Eliminar) para gestionar estudiantes, permitiendo a los usuarios realizar operaciones básicas sobre los registros de estudiantes en la base de datos.

## Funcionalidad CRUD de Estudiantes

El controlador `studentController` maneja las operaciones CRUD para los estudiantes. A continuación se describen las funcionalidades principales:

- **Listar Estudiantes**: 
  - Ruta: `GET /api/students`
  - Descripción: Recupera y devuelve una lista de todos los estudiantes almacenados en la base de datos.

- **Mostrar Detalles de un Estudiante**:
  - Ruta: `GET /api/students/{id}`
  - Descripción: Devuelve los detalles de un estudiante específico identificado por su ID.

- **Crear un Nuevo Estudiante**:
  - Ruta: `POST /api/students`
  - Descripción: Permite crear un nuevo registro de estudiante. Requiere los campos `name`, `email`, `phone`, y `language`.

- **Actualizar un Estudiante**:
  - Ruta: `PUT /api/students/{id}`
  - Descripción: Actualiza la información de un estudiante existente. Requiere los mismos campos que la creación.

- **Actualización Parcial de un Estudiante**:
  - Ruta: `PATCH /api/students/{id}`
  - Descripción: Permite actualizar parcialmente los datos de un estudiante.

- **Eliminar un Estudiante**:
  - Ruta: `DELETE /api/students/{id}`
  - Descripción: Elimina el registro de un estudiante de la base de datos.

## Tecnologías Utilizadas

- **PHP**: Versión 8.2
- **Laravel Framework**: Versión 11.31
- **Composer**: Para la gestión de dependencias de PHP.

## Cómo Correr el Proyecto

Sigue estos pasos para configurar y ejecutar el proyecto en tu entorno local:

1. **Clonar el Repositorio**

   Clona este repositorio en tu máquina local usando el siguiente comando:

   ```bash
   git clone https://github.com/MATEAV23/CRUD_LARAVEL.git
   ```

2. **Instalar Dependencias de PHP**

   Navega al directorio del proyecto y ejecuta el siguiente comando para instalar las dependencias de PHP:

   ```bash
   composer install
   ```

3. **Instalar Dependencias de Node.js**

   Asegúrate de tener Node.js y npm instalados. Luego, ejecuta el siguiente comando para instalar las dependencias de Node.js:

   ```bash
   npm install
   ```

4. **Configurar el Archivo `.env`**

   Copia el archivo `.env.example` a `.env` y configura las variables de entorno necesarias, como la conexión a la base de datos.

   ```bash
   cp .env.example .env
   ```

5. **Generar la Clave de la Aplicación**

   Genera una clave de aplicación única ejecutando el siguiente comando:

   ```bash
   php artisan key:generate
   ```

6. **Migrar la Base de Datos**

   Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

   ```bash
   php artisan migrate
   ```

7. **Ejecutar el Servidor de Desarrollo**

   Finalmente, ejecuta el servidor de desarrollo de Laravel:

   ```bash
   php artisan serve
   ```

   También puedes ejecutar el entorno de desarrollo de Vite para compilar los activos front-end:

   ```bash
   npm run dev
   ```

Ahora deberías poder acceder a la aplicación en `http://localhost:8000`.

