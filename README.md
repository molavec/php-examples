# PHP Examples

Set de pruebas de php

## Docker Compose
Para evitar instalar PHP, es posible ejecutar los scripts mediante docker.

[Puedes este video](https://www.berrycast.com/conversations/a4678ed5-36f2-515f-bad5-4340690e3f0b)

Lo que hace es crear un contenedor con PHP y monta los archivos de `./src` en `/app` del contenedor así resulta sencillo realizar modificaciones en el código y ejecutar desde el contenedor.

```yaml
...
volumes:
  - ./src:/app
```

### Para iniciar el contenedor PHP
```bash
docker-compose up -d
```

### Para ejecutar un script
```bash
docker-compose exec php-examples php /app/hola.php
```

### Para detener el contenedor PHP
```bash
docker-compose stop
```

