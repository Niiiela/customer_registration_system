 Sistema de cadastro de cliente
Segue o passo a passo de como foi desenvolvido o sistema de cadastro de cliente.
1º Realizei a regra de negócio, no qual destaquei quais tabelas e colunas o banco de dados seria composto. Realizei o diagrama pela plataforma dbdiagrama: "https://dbdiagram.io'

<img width="1895" height="737" alt="image" src="https://github.com/user-attachments/assets/80cf4c17-c5ed-4903-b89d-7fe8236ccb51" />

2º Em seguida baixei o laravel 12.
Instalação do framework laravel 12:
- composer global require laravel/installer
Instalação da aplicação
- laravel new customer_registration
Acesse a aplicação:
- cd customer_registration
Realiza a instalação da dependência
- npm install
Em seguida deve iniciar o projeto:
- npm rum dev
- php artisan serve

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

6º Criação das migrates
- php artisan make:migration create_customers_table --create=customers
- php artisan make:migration create_contacts_table --create=contacts
- php artisan make:migration create_addresses_table --create=adresses

- Depois de configurar as migrate rodei o comando: php artisan migrate e em seguida foi criado a migrate e o arquivo criado no database/database.sqlite foi preenchido após executar o comando.

7º
  

Referências:
Laravel: https://laravel.com/docs/12.x/installation

Filament: https://filamentphp.com/docs/4.x/introduction/installation

Sqlite: https://www.alura.com.br/artigos/sqlite-da-instalacao-ate-primeira-tabela?srsltid=AfmBOoqf1qYUGz19W5ki9yf83hUtvNcZWk2Z9i9FOoGNd6TVxYUJo0IT
Sqlite: https://laravel.com/docs/12.x/database
  

