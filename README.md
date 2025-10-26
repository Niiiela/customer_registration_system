 Sistema de cadastro de cliente
Segue o passo a passo de como foi desenvolvido o sistema de cadastro de cliente.
1º Realizei a regra de negócio, no qual destaquei quais tabelas e colunas o banco de dados seria composto. Realizei o diagrama pela plataforma dbdiagrama: "https://dbdiagram.io'

<img width="1895" height="737" alt="image" src="https://github.com/user-attachments/assets/80cf4c17-c5ed-4903-b89d-7fe8236ccb51" />

2º Em seguida baixei o laravel 12.
Instalação do framework laravel 12:
- composer global require laravel/installer
Instalação da aplicação
- laravel new customer_registration
- Realizar a configuração do .env.
- Depois realizei a criação do banco de dados
  
  <img width="519" height="224" alt="image" src="https://github.com/user-attachments/assets/b016d6f4-1c72-43c1-927f-36a9c4a380ab" />

Acesse a aplicação:
- cd customer_registration
Realiza a instalação da dependência
- npm install
Em seguida deve iniciar o projeto:
- npm rum dev
- php artisan serve

3º Criação do enum:
- Na pasta App deve criar uma outra pasta Enum depois criar um arquivo com o nome por exemplo: CustomerEnum.php
- Nesse arquivo deve-se configurar os enum para que seja exibido no banco de dados.
- Após a configuração do enum que se deve criar as migrates. Na criação das migrates deve realizar a ligação do enum com a tabela com isso, ao criar a tabela do banco alguns informações pré configuradas no enum serão exibidas no banco de dados.
  
4º Criação das migrates
- php artisan make:migration create_customers_table --create=customers
- php artisan make:migration create_contacts_table --create=contacts
- php artisan make:migration create_addresses_table --create=adresses

- Após as migrates configurada rode o comando para criar a migrate:  php artisan migrate












3º Instalação do Filament
- composer require filament/filament:"~4.0"
- php artisan filament:install --panels
Depois acessei: http://127.0.0.1:8000/admin

4º Configurações iniciais:]
- Realizei a instalação do sqlite;
- configuração do php.ini;
- depois realizei a configuração do .env

5º Criar o enum
- Foi criado a pasta enum;
- Depois foi criado o arquivo customerEnum e configurado o enum.

6º 
7º
  

Referências:
Laravel: https://laravel.com/docs/12.x/installation

Filament: https://filamentphp.com/docs/4.x/introduction/installation

Sqlite: https://www.alura.com.br/artigos/sqlite-da-instalacao-ate-primeira-tabela?srsltid=AfmBOoqf1qYUGz19W5ki9yf83hUtvNcZWk2Z9i9FOoGNd6TVxYUJo0IT
Sqlite: https://laravel.com/docs/12.x/database
  

