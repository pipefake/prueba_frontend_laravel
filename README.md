# Desarrollo de Prueba Técnica - Ingeniero Frontend

## Descripción del Proyecto
Este proyecto es una prueba técnica desarrollada en Laravel para consumir la API pública de TheCocktailDB. La aplicación permitirá listar, almacenar, editar y eliminar cócteles, cumpliendo con los requisitos establecidos.

Enlace al diseño del aplicativo:
https://www.figma.com/design/qpZekXjhLdNFWeOU73rUXu/Prueba_Ingeniero_Frontend?node-id=0-1&t=uz2AEEWm8Ns4tT72-1


## Tecnologías Utilizadas
- **Framework:** Laravel
- **Frontend:** Blade Templates, jQuery, Bootstrap
- **Base de Datos:** No se requiere backend propio (se usa TheCocktailDB)
- **Consumo de API:** Axios / Fetch API

## Requisitos Previos
Antes de comenzar, asegúrate de tener instalados los siguientes programas:

1. **PHP** (recomendado: instalar XAMPP para incluir Apache, MySQL y PHP)
   - Descarga e instala [XAMPP](https://www.apachefriends.org/es/index.html).
   - Asegúrate de que PHP esté agregado a la variable de entorno (`PATH`).
2. **Composer** (para manejar dependencias de Laravel)
   ```bash
   composer global require laravel/installer
   ```
3. **Node.js y npm** (para manejar paquetes de frontend)
   - Descarga e instala [Node.js](https://nodejs.org/).
   - Verifica la instalación con:
     ```bash
     node -v
     npm -v
     ```

## Instalación del Proyecto
### 1. Crear un Nuevo Proyecto en Laravel
Para crear el proyecto en el directorio actual:
```bash
laravel new .
```
Si deseas crearlo en una carpeta específica:
```bash
laravel new nombre_del_proyecto
cd nombre_del_proyecto
```

### 2. Instalar Dependencias
Ejecuta los siguientes comandos en la terminal dentro de la carpeta del proyecto:
```bash
composer install
npm install
```

### 3. Configurar Variables de Entorno
Copia el archivo de ejemplo y edita las credenciales necesarias:
```bash
cp .env.example .env
```
Abre el archivo `.env` y asegúrate de configurar la API de TheCocktailDB:
```env
COCKTAILDB_API_URL=https://www.thecocktaildb.com/api/json/v1/1
```

### 4. Generar Clave de Aplicación
Ejecuta el siguiente comando para generar la clave de seguridad:
```bash
php artisan key:generate
```

### 5. Servir la Aplicación
```bash
php artisan serve
```
Esto iniciará un servidor de desarrollo y podrás acceder a la aplicación en:
```
http://127.0.0.1:8000
```

## Estado Actual del Desarrollo
Hasta ahora, se ha:
- Instalado Laravel con jQuery y Bootstrap.
- Configurado la API de TheCocktailDB.
- Generado la estructura básica del proyecto.

-Instalamos Breeze
```bash
composer require laravel/breeze --dev
php artisan breeze:install
```

-Crear una base de datos MYSQL llamada laravel_cocktail 
No es necesario crear tablas, Laravel lo hará con las migraciones.

-Instalar las migraciones de Laravel.
Ejecuta estos comandos en la terminal del proyecto para migrar las tablas de autenticación:
```bash
php artisan migrate
```

Servir el proyecto.

Ingresar al localhost/registro

LLenar el formulario de registro e ingresar al home. 

se añade el controlador FavoriteController mediante el siguiente comando
```bash
php artisan make:model Favorite -m 
php artisan make:controller FavoriteController
```

Se crea una vista que liste los cócteles de la base de datos thecocktailsbd, mostrando al 3 datos por cóctel (nombre, categoria e instrucciones) obtenidos de la API.

Con la ayuda de este modelo y este controlador, se implementa en la vista del dashboard el poder agregar cockteles a nuestra base de datos. Para ello se crea una tabla en la base de datos para almacenar los cócteles. cambiándole el esquema por defecto al que se requiere.

Ejecutamos el siguiente comando para crear la tabla por medio de migraciones
```bash
php artisan migrate
``` 

##Se implementa la vista para listar y eliminar cockteles





Registrese en el api



## Contacto
Desarrollado por **Juan Felipe Jiménez Salazar**  
[LinkedIn](https://www.linkedin.com/in/juan-felipe-jimenez-salazar-433638277/) | [GitHub](https://github.com/pipefake)

