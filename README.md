## Blog con Panel Administrativo
Proyecto creado con Symfony 7.4 que es la última LTS a la fecha


### Comandos de consola
Crear un nuevo proyecto
```
    symfony new admin-panel --version="7.4.*"
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

Instalar Easy Admin
```
    composer require easycorp/easyadmin-bundle
```

Crear el panel administrativo
```
    php bin/console make:admin:dashboard
```

Crear el CRUD de las entidades
```
    php bin/console make:admin:crud
```

Trabajar con datos falsos, datos semillas, seeders
```
    composer require orm-fixtures --dev
```

Utilizar Faker
```
    composer require foundry --dev
    bin/console make:factory
```

Ejecutar los datos de prueba 
```
    php bin/console doctrine:fixtures:load
```

Configurar usuarios
```
    php bin/console make:user
```

Configurar autenticación
```
    php bin/console make:auth --deprecado
    php bin/console make:security:form-login
    php bin/console make:registration-form
```