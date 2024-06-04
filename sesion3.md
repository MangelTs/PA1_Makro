# Desarrollo de aplicaciones distribuidas
## Sesión 3

### Crear Migraciones
Crear un controlador para gestionar los recursos de la tabla categorias


# Si descargamos el código de github externos.
```bash
    composer update
```

```bash
    php artisan make:controller ProductoController --resource --model=Producto
```

# Si queremos ver todas las rutas, el next comando es:
```bash
    php artisan route:list
```