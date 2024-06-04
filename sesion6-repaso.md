# Desarrollo de aplicaciones distribuidas
## Sesión 6 - repaso

### Breeze
Vamos a realizar el mantenimiento de la tabla
tipo_comprobante
    - id
    - codigo
    - descripción

# 1. Crear la migración
 ```bash
    php artisan make:migration create_tipo_comprobantes_table
```
La migración se crea en la ruta database/migrations
# 2. Ejecutamos la migración
 ```bash
    php artisan migrate:fresh --seed
```
# 3. Creamos el modelo
 ```bash
    php artisan make:model TipoComprobante
```
El modelo se crea en app/models
# 4. Creamos el controlador
 ```bash
    php artisan make:controller UserController --resource --model=User
```
El controlador se crea en la carpeta app/http/controllers
# 5. Creamos el request
 ```bash
    php artisan make:request UserRequest
```
El request se crea en la carpeta app/http/requests
# 6. Agregamos la ruta, al routes/web.php
 ```bash
    Route::resource('tipo-comprobante', TipoComprobanteController::class);
```

# 7. Agregamos las vitas
Creamos una carpeta tipo-comprobante en la carpeta resources/views
y dentro agregamos dos archivos:
index.blade.php
action.blade.php