
# Projeto de extensão - Banco de dados

Até o momento o projeto faz o cadastro de desemprego e cursos e mostra o índice de desemprego por idade no gráfico.

## Instalação

Instalar o node, instalar o composer

Executar os comandos:

```bash
  npm i 
  composer install
  php artisan migrate
```
    
## Funcionalidades

- Login de usuário
- Registro de usuário
- Edição de Perfil
- Cadastro de desemprego
- Gráficos de desemprego por idade
- Cadastro de cursos
- Lista de cursos


## Stack utilizada

**Front-end:** Vue, PrimeVue, Inertia, Axios, TailwindCSS

**Back-end:** Laravel, Php, Inertia

**Banco de dados:** Mysql





## Documentação da API

#### Cadastro de desemprego

```http
POST /desemprego/criar
```

#### Retorna os dados de desemprego por idade

```http
GET /dashboard
```

#### Cadastro de curso

```http
POST /curso/criar 
```

#### Retorna a lista de cursos

```http
GET /curso/criar 
```

#### Cadastro de emprego

```http
POST /emprego/criar 
```

#### Retorna a lista de emprego

```http
GET /emprego/criar 
```





## Screenshots

![App Screenshot](https://github.com/alex-silveira/projeto-de-extensao/blob/master/screenshots/Dashboard.png?raw=true)

![App Screenshot](https://github.com/alex-silveira/projeto-de-extensao/blob/master/screenshots/%C3%8Dndice%20por%20idade.jpg?raw=true)

![App Screenshot](https://github.com/alex-silveira/projeto-de-extensao/blob/master/screenshots/Cadastro%20de%20Desemprego.png?raw=true)

![App Screenshot](https://github.com/alex-silveira/projeto-de-extensao/blob/master/screenshots/Cadastro%20de%20curso.png?raw=true)

![App Screenshot](https://github.com/alex-silveira/projeto-de-extensao/blob/master/screenshots/Cadastro%20de%20vaga%20de%20emprego.png?raw=true)

![App Screenshot](https://github.com/alex-silveira/projeto-de-extensao/blob/master/screenshots/Lista%20de%20cursos.png?raw=true)

