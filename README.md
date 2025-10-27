# Sistema de cadastro de cliente

Segue o passo a passo de como foi desenvolvido o sistema de cadastro de cliente.
1º Realizei a regra de negócio, no qual destaquei quais tabelas e colunas o banco de dados seria composto. Realizei o diagrama pela plataforma dbdiagrama: "https://dbdiagram.io'

<img width="1895" height="737" alt="image" src="https://github.com/user-attachments/assets/80cf4c17-c5ed-4903-b89d-7fe8236ccb51" />

## Funcionalidades
- Cadastro de cliente;
- Editar cadastro,
- Visualizar,
- Deletar

## Tecnologias
- Laravel,
- Filament,
- Sqlite,
  
## Passo a Passo
- Instalação do framework laravel 12:
  
  ```composer global require laravel/installer```
  
- Instalação da aplicação
  
 ```laravel new customer_registration```
 
- Realizar a configuração do .env.
  
  <img width="839" height="194" alt="image" src="https://github.com/user-attachments/assets/5d673b46-fdb4-4e92-87a2-77df6a9ff3f8" />

- Depois realizei a criação do banco de dados, antes de finalizar a instalação da aplicação informe qual tipo de banco vai trabalhar. Após selecionar Sqlite será criado uma nova pasta em database e em seguida será criado um arquivo vazio database.sqlite.
  
  <img width="519" height="224" alt="image" src="https://github.com/user-attachments/assets/b016d6f4-1c72-43c1-927f-36a9c4a380ab" />
  
Acesse a aplicação:
``` cd customer_registration ```

Realiza a instalação da dependência
```npm install```

Em seguida deve iniciar o projeto:
```npm rum dev```

```php artisan serve```

obs.: Depois, caso desejar, confirmar se foi criado o arquivo sqlite deve ir em ```database/database.sqlite```.

3º Criação das migrates
```
php artisan make:migration create_customers_table --create=customers
php artisan make:migration create_contacts_table --create=contacts
php artisan make:migration create_addresses_table --create=adresses
```

- Após as migrates configurada rode o comando para criar a migrate:  ```php artisan migrate```

4º Criação do enum:
- Realizei a criação do enum em ```App/Enum/CustomerEnum.php```
- No arquivo enum deixei padrão alguns dados que optei deixar pré-configuradas.
 - Para receber as informações do enum.
  
5º Model
- Criação do model:
```
php artisan make:model Customer
 php artisan make:model Contact
 php artisan make:model Address
```

6º Instalação do Filament
```composer require filament/filament```
```php artisan filament:install --panels```

  Configuração do usuário
```
    php artisan make:filament-user
    Link: http://localhost:8000/admin/login
   login: danielavieira@gmail.comm
   Senha: 123456
```
   
- Depois  foi criado o filament resource: ```php artisan make:filament-resource Customer --view```
- Configurado a tabela do banco de dados;
- Segue esse tutorial para deixar a aplicação em português: ```https://github.com/lucascudo/laravel-pt-BR-localization```
- Em seguida foi realizado a configurações do banco de dado no filament, realizei a configurações do edit, delete, create, visualizar.

  ### Segue as tela do Projeto
  **Tela Login**
  
  <img width="976" height="696" alt="image" src="https://github.com/user-attachments/assets/fea5cb01-8b8b-46a8-8b19-b6badfa8c866" />


  **Tela Lista**

  <img width="1913" height="573" alt="image" src="https://github.com/user-attachments/assets/45107767-f18f-4a26-98d5-0dc220204ef7" />


  **Tela de Criate**


<img width="1896" height="831" alt="image" src="https://github.com/user-attachments/assets/d8af2a63-e3a2-4257-aa07-c248a602f13c" />


**Tela de Edite**

<img width="1517" height="773" alt="image" src="https://github.com/user-attachments/assets/1f7729a1-ef2f-450f-8c1b-02d2b233f87d" />


**Delete**

 <img width="1892" height="558" alt="image" src="https://github.com/user-attachments/assets/e82c0e0e-bfff-4547-b513-77b8fe02cefe" />


**Visualizar**

<img width="1916" height="860" alt="image" src="https://github.com/user-attachments/assets/581d6de6-12f8-4d35-9daa-7f0ba9d11663" />


- Para baixar o projeto: git clone link do projeto;
- Após baixar deve acessar o arquivo no terminal deve instalar:
- no .env-exemplo tem as configurações do .env para execultar o projeto deve renomear o arquivo env-exemplo para .env
  ```
	npm rum dev
	composer install
	php artisan
  ```

### *Segue abaixo alguns link de referência que usei para desenvolver esse projeto*

- *Laravel:* https://laravel.com/docs/12.x/installation
- *Filament:* https://filamentphp.com/
-  *SQLite:* https://sqlite.org/
-  SQLite:* https://www.youtube.com/watch?v=HtwNbxT_kH8
  

