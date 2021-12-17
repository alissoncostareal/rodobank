
## Sobre o projeto em Laravel

-Para usar este projeto é necessário importar o banco de dados que estará na raíz do projeto e criar um usuário na opção 'cadastrar' no menu do sistema, os dados do banco estão no final do README.

-Desenvolvi o Back e Front usando Laravel e Bootstrap, ion icon e otimizações com extends;

-Na tela inicial existe uma tabela com os dados dos fretes onde só é possível criar mais fretes quando o usuário está logado;

-Quando o usuário cria um frete, ele é direcionado para a tela inicial com uma flash nessage confirmando o registro;

-Os middleware estão em rota sensíveis do sistema, itens do menu e as actions de editar e deletar estão protegidos pelos métodos guest e auth;

-É possível pesquisar as placas dos veículos dos fretes exibindo o termo pesquisado e quando não existe no banco retorna que não existe e dá a opção de redirecionar para a home;

-O sistema tem as funções de listar, criar, pesquisar, editar e deletar;

-A autentificação é feita usando jetstream e livewire, infelizmente não consegui fazer o front e back do sistema usando jwt-auth, sendo possível fazer a autentificação do email e senha do banco mas não o logout e funções como guest.

-O status funciona perfeitamente.

Instruções do banco:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rodobank1
DB_USERNAME=root
DB_PASSWORD=