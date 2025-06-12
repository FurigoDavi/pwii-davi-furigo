## **Guia rápido para iniciar um projeto com Laravel.**

**Pré-requisitos:**
Antes de começar, tenha certeza que sua maquina tenha: *PHP*, *Composer*, *Laravel instaler* e *Node e NPM* ou *Bun*. 
****

**Instalação:**
** **
Abra seu terminal ***PowerShell*** no modo de *Administrador* e copie o seguinte código:
### Instalação do PHP e Composer:

    Set-ExecutionPolicy Bypass  -Scope  Process  -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor  3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))

***
Após a instalação, reinicie seu terminal, o fechando e abrindo novamente na pasta **htdocs** no **Xamp**. Baixe o *Laravel Installer*  via *Composer*:

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





