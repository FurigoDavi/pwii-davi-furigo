
## **Guia rápido para iniciar um projeto com Laravel.**

  

**Pré-requisitos:**

Antes de começar, tenha certeza que sua maquina tenha: *PHP*, *Composer*, *Laravel instaler* e *Node e NPM* ou *Bun*.

****

  

**Instalação:**

** **

Abra seu terminal ***PowerShell*** no modo de *Administrador* e copie o seguinte código:

### Instalação do PHP e Composer:

  

    Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))

  

***

Após a instalação, reinicie seu terminal, o fechando e abrindo novamente na pasta **htdocs** no **Xamp**. Baixe o *Laravel Installer* via *Composer*:

  

### Baixando o Laravel Installer:

  

    composer global require laravel/installer

***

**Criando aplicação:**

  

    Laravel new exemplo-app

  

"Exemplo-app" é o nome do seu projeto.

  

***

Depois que o aplicativo for criado, você pode iniciar o servidor de desenvolvimento local do *Laravel*, o *queue worker* e o servidor de desenvolvimento *Vite* usando o script *dev* Composer:

  

    cd exemplo-app
    
    npm install && npm run build
    
    composer run dev

***

Depois de iniciar o servidor de desenvolvimento, seu aplicativo estará acessível no seu navegador em http://localhost:8000.
***

## Como abrir seu projeto Laravel após baixa-lo pelo Github

**Pré-requisitos:**

Novamente, antes de abrir seu projeto, tenha certeza que sua maquina tenha: *PHP*, *Composer*, *Laravel instaler* e *Node e NPM* ou *Bun*.
***
**Primeiro passo(1/6) :**

Abra seu terminal ***PowerShell*** na pasta onde está criado seu projeto ***Laravel***, após abrir seu terminal, rode o comando:
   

     composer install

Ele baixa as dependências do projeto na pasta vendor.

**Segundo passo(2/6):**

Para instalar as dependências de um projeto que possui ***JavaScript*** você deve rodar o seguinte comando:

    npm install
    
***Terceiro passo(3/6):**

Caso o projeto possuia ***Vite*** e/ou ***WebPack***, rode o seguinte comando:

    npm run build
**Quarto passo(4/6):**

Entre no seu ***VsCode*** na sessão de arquivos, crie uma copia do arquivo ***.env.example*** e renomeie para ***.env***.

**Quinto passo(5/6):**

Você precisa criar uma chave **encriptada** para o projeto, e para isso, utilize o comando:

    php artisan key:generate

**Sexto passo(6/6):**

Chegamos no último passo, é necessário rodar as **Migrations** para criar o *Banco de Dados*, para isso, utilize o comando:

    php artisan migrate

***
Após esses passos, basta utilizar o comando: 

    composer run dev
Pressionar **Ctrl** e selecionar o link para abrir o projeto no navegador, http://localhost:8000.

## **Dica**

Para acessar a galeria de comandos do terminal, utilize:

Eu real não lembro o comando, pesquisei e não achei, mas queria coloca pq é interessante 😔





## Como usar TailWind CSS


**O que é?:**

O Tailwind CSS funciona escaneando todos os seus arquivos HTML, componentes JavaScript e quaisquer outros modelos em busca de nomes de classes, gerando os estilos correspondentes e depois gravando-os em um arquivo CSS estático.

É rápido, flexível e confiável — com tempo de execução zero.
***
**Instalação**
Instalar o Tailwind CSS como um plugin do Vite é a maneira mais fácil de integrá-lo com frameworks como Laravel, SvelteKit, React Router, Nuxt e SolidJS.

1. Crie seu Projeto
Comece criando um novo projeto Vite, caso ainda não tenha um. A abordagem mais comum é usar [o comando "Criar Vite"](https://vite.dev/guide/#scaffolding-your-first-vite-project) .

  

>   npm create vite@latest my-project
>     cd my-project

2. Instale TailWind CSS
Instalar `tailwindcss`e `@tailwindcss/vite`via npm.

  

      

> npm install tailwindcss @tailwindcss/vite

3. Configurar o plugin vite
Adicione o `@tailwindcss/vite`plugin à sua configuração do Vite.

  

>   import { defineConfig } from 'vite'
>     import tailwindcss from '@tailwindcss/vite'
>     
>     export default defineConfig({
>       plugins: [
>         tailwindcss(),
>       ],
>     })

4. Importar TailWind para seu CSS
Adicione um `@import`ao seu arquivo CSS que importe o Tailwind CSS.

   

>  @import "tailwindcss";

5. Inicie seu processo de construção
Execute seu processo de compilação com `npm run dev`ou qualquer comando que esteja configurado em seu arquivo.  `package.json`

 

> npm run dev

6. Comece a usar o Tailwind em seu HTML
Certifique-se de que seu CSS compilado esteja incluído no `<head>`  _(seu framework pode cuidar disso para você)_ e, então, comece a usar as classes utilitárias do Tailwind para estilizar seu conteúdo.

> <!doctype html> <html> <head>   <meta charset="UTF-8">   <meta
> name="viewport" content="width=device-width, initial-scale=1.0">  
> <link href="/src/style.css" rel="stylesheet"> </head> <body>   <h1
> class="text-3xl font-bold underline">
>     Hello world!   </h1> </body> </html>

