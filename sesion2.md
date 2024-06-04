# Desarrollo de aplicaciones distribuidas
## Sesión 2

### Crear Migraciones
Crear una migración para la tabla categoria

 ```bash
    php artisan make:migration create_productos_table 
````
Ejecutamos las migraciones

 ```bash
    php artisan migrate
````

 ```bash
    php artisan migrate:refresh
````

## Crear un modelo

 ```bash
    php artisan make:model Producto
````
## Crear un Seeder

 ```bash
    php artisan make:seeder UserSeeder
````

 ```bash
    php artisan migrate --seed
````

 ```bash
    php artisan migrate:fresh --seed
````