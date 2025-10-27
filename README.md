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
- no .env-exemplo tem as configurações do .env para execultar o projeto deve renomear o arquivo env-exemplo para .env
  
  <img width="839" height="194" alt="image" src="https://github.com/user-attachments/assets/5d673b46-fdb4-4e92-87a2-77df6a9ff3f8" />

- Depois realizei a criação do banco de dados, antes de finalizar a instalação da aplicação informe qual tipo de banco vai trabalhar. Após selecionar Sqlite será criado uma nova pasta em database e em seguida será criado um arquivo vazio database.sqlite. 
  
  <img width="519" height="224" alt="image" src="https://github.com/user-attachments/assets/b016d6f4-1c72-43c1-927f-36a9c4a380ab" />
  
Acesse a aplicação:
- cd customer_registration
Realiza a instalação da dependência
- npm install
Em seguida deve iniciar o projeto:
- npm rum dev
- php artisan serve

obs.: Depois, caso desejar, confirmar se foi criado o arquivo sqlite deve ir em database/database.sqlite.

3º Criação das migrates
- php artisan make:migration create_customers_table --create=customers
- php artisan make:migration create_contacts_table --create=contacts
- php artisan make:migration create_addresses_table --create=adresses

- Após as migrates configurada rode o comando para criar a migrate:  php artisan migrate

4º Criação do enum:
- Realizei a criação do enum em App/Enum/CustomerEnum.php
- No arquivo enum deixei padrão alguns dados que optei deixar pré-configuradas.
- No model deixei adicionei a opção:
   protected $casts = [ 'status' => CustomerEnum::class, ];
 - Para receber as informações do enum.
  
5º Model
- Criação do model:
- php artisan make:model Customer
- php artisan make:model Contact
- php artisan make:model Address

6º Instalação do Filament
- composer require filament/filament
- php artisan filament:install --panels

  Configuração do usuário
 - php artisan make:filament-user
 - Link: http://localhost:8000/admin/login
   login: danielavieira@gmail.comm
   Senha: 123456
- Depois  foi criado o filament resource: php artisan make:filament-resource Customer --view
- Configurado a tabela do banco de dados;
- Segue esse tutorial para deixar a aplicação em português: https://github.com/lucascudo/laravel-pt-BR-localization
- Em seguida foi realizado a configurações do banco de dado no filament, realizei a configurações do edit, delete, create, visualizar.
- 

  <img width="976" height="696" alt="image" src="https://github.com/user-attachments/assets/fea5cb01-8b8b-46a8-8b19-b6badfa8c866" />


- Tela de Lista

  <img width="1913" height="573" alt="image" src="https://github.com/user-attachments/assets/45107767-f18f-4a26-98d5-0dc220204ef7" />


  - Tela de Criate


    <img width="1919" height="840" alt="image" src="https://github.com/user-attachments/assets/9f26a767-963d-40e2-9723-1dd7f6ad2a5c" />


- Tela de Edite

<img width="1517" height="773" alt="image" src="https://github.com/user-attachments/assets/1f7729a1-ef2f-450f-8c1b-02d2b233f87d" />


  - Delete

 <img width="1892" height="558" alt="image" src="https://github.com/user-attachments/assets/e82c0e0e-bfff-4547-b513-77b8fe02cefe" />

 - Visualizar

  <img width="1919" height="842" alt="image" src="https://github.com/user-attachments/assets/4ced92ea-08da-4610-818f-520ec54e82cc" />






  

Referências:
Laravel: https://laravel.com/docs/12.x/installation

Filament: https://filamentphp.com/docs/4.x/introduction/installation

Sqlite: https://www.alura.com.br/artigos/sqlite-da-instalacao-ate-primeira-tabela?srsltid=AfmBOoqf1qYUGz19W5ki9yf83hUtvNcZWk2Z9i9FOoGNd6TVxYUJo0IT

Sqlite: https://laravel.com/docs/12.x/database
  

