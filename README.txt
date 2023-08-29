# desen3



clonando em outra maquina
cd document
 composer install
 cp .env.example .env
 php artisan key:generate 
 php artisan migrate 
 php artisan serve




criar um controller // model
php artisan make:controller ProdutosController

criar uma migration // banco
php artisan make:migration create_produtos_table
// crie banco .env 
php artisan migrate
php artisan migrate:refresh
php artisan migrate:rollback
// deixar delete soft
php artisan make:migration add_soft_deletes_to_produtos_table
php artisan make:migration add_email_verified_at_to_usuarios_table


// criar model
php artisan make:model Produto

// tradução de mensagens
// extrai arquivos lang/en
php artisan lang:publish
// instalar pacote de lingua traduzido
composer require lucascudo/laravel-pt-br-localization --dev
php artisan vendor:publish --tag=laravel-pt-br-localization
//paginas
php artisan vendor:publish --tag=laravel-pagination
 

// seeders conteudo banco
php artisan make:seeder ProdutoSeeder
php artisan db:seed    

// factory (Seeder aleatória, gera dados aleatórios)
php artisan make:factory ProdutoFactory
