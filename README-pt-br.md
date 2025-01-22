# PHP - Conexões MySQLi

## Objetivo deste Repositório

**Uma breve história:** Em um dos meus primeiros projetos profissionais(um pouco mais de uma década atrás), precisei migrar uma aplicação de PHP para uma versão mais recente do MySQL. Durante o processo, percebi a importância de utilizar extensões atualizadas e seguras para a comunicação com o banco de dados. Foi então que me aprofundei no uso do MySQLi, entendendo as suas vantagens e melhores práticas. Este repositório visa compartilhar esse conhecimento, fornecendo exemplos práticos de como estabelecer conexões eficientes e seguras com bancos de dados MySQL utilizando a extensão MySQLi no PHP.

## Estrutura do Projeto

- `01-connecting-to-the-database.php`: Demonstra como estabelecer uma conexão básica com o banco de dados utilizando MySQLi.
- `02-executing-commands-in-the-database.php`: Exemplifica a execução de comandos SQL no banco de dados.
- `03-listing-database-data.php`: Mostra como listar dados armazenados no banco de dados.
- `04-sql-injection.php`: Aborda os riscos de SQL Injection e como evitá-los.
- `05-prepared-statement.php`: Introduz o uso de prepared statements para aumentar a segurança das consultas.
- `06-connection.php` a `10-connection.php`: Contêm exemplos mais avançados de operações CRUD (Create, Read, Update, Delete) utilizando MySQLi.

## Como Utilizar este Projeto

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/antonio-phpfullstack/mysqli-connection.git
   ```

2. **Configuração do Ambiente:**

Este projeto foi construído com base no seguinte repositório:

- **Site:** [https://github.com/antonio-phpfullstack/skeleton-webserver-apache-php-mysql](https://github.com/antonio-phpfullstack/skeleton-webserver-apache-php-mysql)


Caso não tenha PHP instalado no seu host ou deseje ter o mesmo ambiente do desenvolvedor, faça o clone do repositório acima e coloque o repositório do PHP - Conexões MySQLi dentro do diretório `www/public`.

3. **Execução dos Exemplos:**

Cada arquivo PHP no repositório contém exemplos independentes. Recomendo executá-los individualmente para entender o funcionamento de cada operação.

## Considerações Finais

Este repositório busca fornecer uma base sólida para desenvolvedores que desejam aprimorar as suas habilidades em PHP e MySQLi. Lembre-se de que a prática constante e a atualização contínua são essenciais para o desenvolvimento profissional. Boa sorte!
- :tada: **Site:** [https://phpfullstack.com.br](https://phpfullstack.com.br/)