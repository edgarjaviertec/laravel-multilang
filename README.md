## Laravel multilenguaje 

Este es un ejemplo de como implementar Laravel en muchos idiomas. 

### Instalación

#### Paso 1

```
git clone https://github.com/edgarjaviertec/multi-language-laravel-example.git
```

#### Paso 2

```
cd multi-language-laravel-example 
```

#### Paso 3

```
composer install
```

#### Paso 4

```
cp .env.example .env
```

#### Paso 5

```
Crea una base de datos con phpMyAdmin o con tu programa favorito
```

#### Paso 6

Localiza el archivo multi-language-laravel-example/.env y agrega los datos de tu base de datos

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_multilang
DB_USERNAME=root
DB_PASSWORD=root
```

#### Paso 7

```
php artisan migrate
```

#### Paso 8

```
php artisan db:seed
```

#### Paso 9

Localiza el archivo multi-language-laravel-example/routes/web.php y descomenta el código

#### Paso 10

```
php artisan key:generate
```

#### Paso 11

Configura y ejecuta tu servidor web apuntando a la carpeta multi-language-laravel-example/public

### Problemas conocidos

#### Problema

```
Illuminate\Database\QueryException 

SQLSTATE[42S02]: Base table or view not found: 1146 Table 'laravel_multilang.settings' doesn't exist (SQL: select * from `settings` where `option` = site_default_locale limit 1)
```

```
Illuminate\Database\QueryException 

SQLSTATE[42S02]: Base table or view not found: 1146 Table 'laravel_multilang.languages' doesn't exist (SQL: select `locale` from `languages`)
```

#### Solución

Comenta todo el código del archivo: multi-language-laravel-example/routes/web.php y ejecuta

```
php artisan migrate
```

#### Problema

```
Call to undefined function get_language_switcher_url() (View: /Users/edgar/Development/PHP/multi-language-laravel-example/resources/views/includes/menu.blade.php)
```

#### Solución

Ejecuta lo siguiente:

```
composer dumpautoload
```




