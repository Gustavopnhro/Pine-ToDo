<h1 align="center"> 🌲 Pine To-Do 🌲 </h1>

<p align="center">
</p>
<h2 align="center"> Status: ✅ Concluído </h2>



<h2 align="center"> 📖Descrição do Projeto</h2>

Projeto consiste em ser uma lista de tarefas com uma página inicial onde há as tarefas diárias, setas que direcionam os dias avançando ou retornando os dias, elas funcionam de forma dinâmica então as tarefas são específicas daquele dia.

Contém também páginas de criação de tarefas e categorias para serem atribuidas e também um sistema de login funcional contendo página de registro e página de login.

O objetivo central do projeto é funcionar como um to-do list clássico, com sistema de tarefas por dia, categorias e a possibilidade de marcá-las como concluídas para ter um maior controle das tarefas a serem feitas naquele dia ou em dias posteriores.

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git v.2.40.0](https://git-scm.com), [Composer v.2.5.5](https://getcomposer.org/), [Laravel v.4.5.0](https://laravel.com/), [MySQL v.8.2.4](https://www.mysql.com/downloads/). 
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

### 🎲 Rodando o Back End

```bash
# Clone este repositório
$ git clone https://github.com/Gustavopnhro/pine-todo-test.git

# Instale as dependências
$ composer install

# Inicie o MySQL

# Renomeie o 'env.example' para '.env' e configure o .env (App Key)
$ php artisan key:generate

# Execute os migration
$ php artisan migrate:fresh

# Execute a aplicação em modo de desenvolvimento
$ php artisan serve

# O servidor inciará na porta:8000 - acesse <http://localhost:8000>
```

<h2 align="center">⚙️ Funcionalidades </h2>

#### ✅ Sistema de cadastro/login funcional
#### ✅ Cadastro de Tarefas
#### ✅ Cadastro de Categorias
#### ✅ Sistema de Data funcional
#### ✅ Atribuição de Tarefas e Categorias aos usuários
#### ✅ Tela dinâmica

<h2 align="center"> 🖥️ Preview </h2>
<img src="./readme_img/HomePreview.PNG" alt="Previw"></img>
<br>
<br>
<img src="./readme_img/LoginPreview.PNG" alt="Previw"></img>
<br>
<br>
<img src="./readme_img/RegisterPreview.PNG" alt="Previw"></img>



<h2 align="center"> ⚒️ Ferramentas </h2>

#### HTML5 + CSS3
#### Composer [2.5.5]
#### Git [2.40.0]
#### Laravel [4.5.0]
#### PHP [8.2.4]
#### MySQL [8.2.4]

