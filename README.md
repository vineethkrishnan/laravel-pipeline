
# Laravel Pipeline Code Sample

### Introduction
Application that uses pipeline to filter eloquent result.

### Installation

1. Clone Git Repository
       `$ git clone git@github.com:vineethkrishnan/laravel-pipeline.git `
2. Navigate to project root 
       `$ cd  salesdock-products`
3. Run 
       `composer install`
4. Copy .env.example to .env and fill-out the database details
5. After completing application installation run
       `php artisan key:generate`
6. Run migration with --seed flag, it will seed the test data
        `php artisan migrate --seed`
7. Create a test server by running
        `php artisan serve`

Now got to API End point http://localhost:8000/api/product to view the product listing and start filtering through pipeline
