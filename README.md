# Sistema de Clasificación por Edad para Salud Preventiva (Laravel + PostgreSQL)

Este proyecto es un sistema web desarrollado en Laravel que clasifica a las personas según su edad antes de permitirles el acceso a secciones informativas y servicios adecuados a su rango etario. Este flujo ocurre antes de cualquier registro o autenticación.


## Tecnologías Utilizadas

*   **Framework:** Laravel 12
*   **Lenguaje:** PHP 
*   **Base de Datos:** PostgreSQL
*   **Gestor de Dependencias PHP:** Composer

## Prerrequisitos

Antes de comenzar, asegúrate de tener instalado lo siguiente en tu sistema:

*   PHP (>= 8.1 recomendado para Laravel 11)
*   Composer
*   Node.js y npm (opcional, pero recomendado si deseas compilar assets)
*   PostgreSQL (servidor de base de datos)
*   La extensión `pdo_pgsql` de PHP habilitada. Puedes verificar con `php -m | grep pdo_pgsql`.

## Instalación y Configuración

Sigue estos pasos para configurar el proyecto en tu entorno local:

1.  **Clonar el Repositorio:**
    ```bash
    git clone <URL_DEL_REPOSITORIO>
    cd nombre-del-directorio-del-proyecto
    ```

2.  **Instalar Dependencias de PHP:**
    ```bash
    composer install
    ```

3.  **Configurar el Archivo de Entorno (`.env`):**
    *   Copia el archivo de ejemplo `.env.example` a `.env`:
        ```bash
        cp .env.example .env
        ```
    *   Abre el archivo `.env` y configura las variables de entorno, especialmente las de la base de datos PostgreSQL:
        ```env
        APP_NAME="Sistema Salud Edad"
        APP_ENV=local
        APP_KEY=
        APP_DEBUG=true
        APP_URL=http://localhost:8000 # O la URL que uses

        DB_CONNECTION=pgsql
        DB_HOST=127.0.0.1
        DB_PORT=5432
        DB_DATABASE=db_sistema_salud_edad # Asegúrate de que esta base de datos exista en PostgreSQL
        DB_USERNAME=postgres # Tu usuario de PostgreSQL
        DB_PASSWORD=tu_contraseña_segura # Tu contraseña de PostgreSQL
        ```
    *   **Importante:** Asegúrate de haber creado la base de datos `db_sistema_salud_edad` (o el nombre que elijas) en tu servidor PostgreSQL antes de continuar. Puedes usar `psql` o una herramienta como pgAdmin:
        ```sql
        -- Ejemplo con psql
        CREATE DATABASE db_sistema_salud_edad;
        ```

4.  **Generar la Clave de Aplicación Laravel:**
    ```bash
    php artisan key:generate
    ```

5.  **Ejecutar las Migraciones de la Base de Datos:**
    Esto creará las tablas necesarias, incluyendo `age_logs`.
    ```bash
    php artisan migrate
    ```

## Ejecutar la Aplicación

Para iniciar el servidor de desarrollo de Laravel, ejecuta:

```bash
php artisan serve
 ```
