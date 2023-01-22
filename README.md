## Project Motivation

When I was learning relational databases, I hated that I couldn't test out the queries while I was learning. Here is a quick application that will provide you with environment to test your queries in. The database this project will be using is MySql.

## Project Goal
The environment should be set up with minimal interaction so that you can get to the testing as quickly as possible. Because of this the project:
- Doesn't require any knowledge of php and laravel
- Sets up the whole environment in a few lines of code
- Contains a set of exercise queries

## Get the project up and running

- Install git, php, composer and docker

- Get the project from git

`git clone https://github.com/MatijaBojanic/learn-sql.git`

`cd learn-sql`

- Create a .env file from .env.example and fill in the blanks
- Run the following command to get all the dependencies installed:

       docker run --rm \  
           -u "$(id -u):$(id -g)" \  
           -v "$(pwd):/var/www/html" \  
           -w /var/www/html \  
           laravelsail/php82-composer:latest \  
           composer install --ignore-platform-reqs  



- Get the containers up and running:

`./vendor/bin/sail up`

`./vendor/bin/sail artisan migrate`

`./vendor/bin/sail artisan db:seed`



- Access the db:

`docker exec -it sql-test-mysql-1 bash `

` mysql -u <env file db_username> -p`

- Write the queries :)
