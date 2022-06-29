# AllureRent
 Sistema maleável para locação de equipamentos e afins

## Instalação:
Ao extrair em uma pasta, realizar o comando "composer install" para carregar as dependências de Autoload, entrar no arquivo config.php para definir a BASE do diretório. Não esquecer de alterar os redirecionamentos do CSS/JS nos arquivos partials/HEADER.PHP E partials/FOOTER.PHP

#### Obs¹: Importar o arquvio allurerent.sql para dentro do banco de dados MySQL e configurar o .htaccess.
#### Obs²:  Antes de realizar alugueis e devoluções, realizar o cadastro de ao menos um componente de tipo de equipamentoe e setor.

## Modo de uso:
Há duas divisórias dentro do sistema. Uma de cadastros e outra de Movimentações. Nela será usado todos os componentes, o sistema está bastante automatizado em escolhas e em datas. Os menus possuem formulário simples e facilmente separados.
A tabela de alugueis pendentes serve para ter uma visualização rápida e fácil, podendo pesquisar por nome de pessoa ou equipamentos que estão alugados.

## Tecnologias usadas:
- PHP (Principal tecnologia usada)
- HTML5/CSS3
- Bootstrap (Framework front-end)
- JavaScript
- jQuery
- SB-ADMIN (THEME)
- DataTables (Framework front-end de tabelas)
- HydraHon (Framework back-end de banco de dados)
