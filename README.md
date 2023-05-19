# Contact Manager

Este é um simples aplicativo de gerenciamento de contatos desenvolvido utilizando as seguintes tecnologias: HTML, CSS, Bootstrap e PHP.

## Funcionalidades

- Adicionar contatos, fornecendo nome e telefone.
- Editar informações de contatos existentes.
- Procurar contatos pelo nome ou telefone.
- Excluir contatos.
- Exportar contatos para um arquivo CSV.

## Configuração

Antes de executar o aplicativo, é necessário configurar a conexão com o banco de dados. Para isso, siga as etapas abaixo:

1. Crie um arquivo chamado `config.php` na raiz do projeto.
2. Abra o arquivo `config.php` e adicione as seguintes linhas:

```php
// configuration file
define('MYSQL_CONFIG', [
    'host' => 'localhost',
    'database' => 'php_pdo_contatos',
    'username' => 'seu_usuario',
    'password' => 'sua_senha',
]);
```

Certifique-se de substituir `'seu_usuario'` e `'sua_senha'` pelas informações corretas do seu banco de dados MySQL.

## Executando o Aplicativo

1. Certifique-se de ter um servidor web local configurado (como XAMPP, WAMP, MAMP, etc.).
2. Copie todos os arquivos do projeto para o diretório do servidor web.
3. Abra o navegador web de sua preferência.
4. Acesse o aplicativo digitando o endereço do servidor local no navegador.

## Estrutura do Projeto

- `index.php`: Página principal do aplicativo, exibe a lista de contatos e fornece opções de pesquisa e adição de contatos.
- `adicionar_contato.php`: Página para adicionar um novo contato.
- `editar_contato.php`: Página para editar informações de um contato existente.
- `eliminar_contato.php`: Página para excluir um contato.
- `header.php e footer.php`: Arquivos incluídos em todas as páginas para fornecer a estrutura básica do HTML.
- `config.php`: Arquivo de configuração da conexão com o banco de dados.
- `libraries/Database.php`: Classe responsável pela interação com o banco de dados.

## Requisitos

- Servidor web local (XAMPP, WAMP, MAMP, etc.).
- Navegador web (Chrome, Firefox, etc.).
- MySQL (ou outro sistema de gerenciamento de banco de dados compatível).

## Considerações Finais

Este é um projeto simples de um gerenciador de contatos desenvolvido com HTML, CSS, js, Bootstrap e PHP. Ele permite adicionar, editar, pesquisar e excluir contatos, além de exportar os dados para um arquivo CSV.

Sinta-se à vontade para personalizar e expandir este projeto de acordo com suas necessidades.

Obrigado por conferir este projeto!
