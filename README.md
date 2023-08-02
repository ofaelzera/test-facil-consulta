TESTE FACIL CONSULTAS

Descrição do Projeto

Este é o repositório referente ao teste técnico realizado para a vaga de Desenvolvedor Back-end. O projeto foi desenvolvido utilizando Laravel Sail, Migrations e Seed para facilitar o processo de configuração e execução.

Instruções para Execução
Para executar o projeto localmente, siga os passos abaixo:

Clone este repositório em sua máquina local.
git clone https://github.com/ofaelzera/test-facil-consulta.git

1 - Certifique-se de ter instalado o Docker em sua máquina. O Laravel Sail utiliza o Docker para gerenciar o ambiente de desenvolvimento.

2 - Navegue até o diretório do projeto e construa as imagens dos contêineres usando o Laravel Sail:
cd nome-do-diretorio
./vendor/bin/sail build

3 - Inicie o ambiente usando o Laravel Sail:
./vendor/bin/sail up


4 - Execute as migrations para criar as tabelas do banco de dados:
./vendor/bin/sail artisan migrate


5 - Execute os seeders para popular o banco de dados com dados de teste (se aplicável):
./vendor/bin/sail artisan db:seed


Testando a API
Para testar a API, utilize a coleção do Postman disponibilizada no arquivo.
