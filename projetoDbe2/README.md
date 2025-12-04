# Documentação backend

## Pré-requisitos

- docker
- php
- composer

## Executar

Clonar o repositório
```bash
https://github.com/tavinzix/ifBack2.git
cd ifBack2
```

Iniciar os containers
```bash
sail up
```

Instalar dependencias
```bash
sail npm install
```

Executar as migrations e seed
```bash
sail artisan migrate:fresh --seed
```

Acesse
```
http://localhost:8090
```