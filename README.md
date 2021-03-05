# desafioPmk

Para o banco de dados, basta criar um database name com o seguinte nome "desafiopmk" e depois configurar no arquivo .env o DB_DATABASE=desafiopmk
Rodar o comando php artisan migrate (executara a criacão das tabela necessárias para o sistema funcionar)

Exemplo no arquivo .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=desafiopmk
DB_USERNAME=root
DB_PASSWORD=suasenha

Recomendo utilizar o comando php artisan serve, para simular um servidor e rodar o sistema da melhor forma (: