# Contact Manager

Este é um aplicativo de gerenciamento de contatos desenvolvido utilizando o padrão MVC e um framework MVC personalizado.

## Funcionalidades

- Adicionar contatos, fornecendo nome e telefone.
- Editar informações de contatos existentes.
- Procurar contatos pelo nome ou telefone.
- Excluir contatos.
- Exportar contatos para um arquivo CSV.

## Configuração

Antes de executar o aplicativo, é necessário configurar a conexão com o banco de dados. Para isso, siga as etapas abaixo:

1. Crie um arquivo chamado `config.php` na pasta `app`.
2. Abra o arquivo `config.php` e adicione as seguintes linhas:

```php
// configuration file
// database
define('MYSQL_HOST',        'localhost');
define('MYSQL_DATABASE',    'php_pdo_contatos');
define('MYSQL_USERNAME',    'seu_usuario');
define('MYSQL_PASSWORD',    'sua_senha');
```

Certifique-se de substituir 'seu_usuario' e 'sua_senha' pelas informações corretas do seu banco de dados MySQL.

## Executando o Aplicativo

Para executar o aplicativo, siga as etapas abaixo:

1. Certifique-se de ter um servidor web local configurado (como XAMPP, WAMP, MAMP, etc.).
2. Copie todos os arquivos da pasta `public` para o diretório do servidor web.
3. Abra o navegador web de sua preferência.
4. Acesse o aplicativo digitando o endereço do servidor local no navegador.

## Estrutura do Projeto

O projeto possui a seguinte estrutura de diretórios:

- `app/controller`: Contém os controladores do aplicativo.
- `app/model`: Contém os modelos do aplicativo.
- `app/views`: Contém as visualizações do aplicativo.
- `app/helpers`: Contém funções de ajuda para o aplicativo.
- `app/config.php`: Arquivo de configuração da conexão com o banco de dados.
- `system/Router.php`: Classe responsável pelo roteamento do aplicativo.
- `system/Database.php`: Classe responsável pela interação com o banco de dados.
- `public/css`: Pasta contendo arquivos CSS.
- `public/js`: Pasta contendo arquivos JavaScript.
- `public/bootstrap`: Pasta contendo arquivos do Bootstrap.

## Requisitos

Para executar o aplicativo, você precisará dos seguintes requisitos:

- Servidor web local (como XAMPP, WAMP, MAMP, etc.).
- Navegador web (Chrome, Firefox, etc.).
- MySQL (ou outro sistema de gerenciamento de banco de dados compatível).

## Considerações Finais

Este é um projeto simples de um gerenciador de contatos desenvolvido com o padrão MVC utilizando um framework MVC personalizado. Ele permite adicionar, editar, pesquisar e excluir contatos, além de exportar os dados para um arquivo CSV.

Sinta-se à vontade para personalizar e expandir este projeto de acordo com suas necessidades.

Obrigado por conferir este projeto!
