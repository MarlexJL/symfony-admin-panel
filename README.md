## Panel Administrativo
Aplicación en symfony 7.4


### Comandos de consola
Crear un nuevo proyecto, se creará en la versión 7.4 que es la última LTS a la fecha
```
    symfony new admin panel --version="7.4.*"
```

Levantar el proyecto
```
    symfony serve
```

Sistema de base de datos
```
    composer require symfony/orm-pack
```

Sistema de plantillas
```
    composer require symfony/twig-pack
```

Debug bar
```
    composer require symfony/debug-pack
```

Maker Bundle
```
    composer require symfony/maker-bundle --dev
```

Crear la base de datos
```
    php bin/console doctrine:database:create
```

Crear una entidad
```
    php bin/console make:entity
```

Crear las migraciones
```
    php bin/console make:migration
```

Ejecutar las migraciones
```
    php bin/console doctrine:migrations:migrate
```