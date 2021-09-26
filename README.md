## About TO-DO

To-do is a web application built with laravel, tailwind css and laravel livewire. In this application users can create an account and then create a todo list. Each todo can be marked as completed, edited or deleted. 
A todo may also contains steps.

## Technologies
- Laravel
- Tailwind CSS
- Laravel Livewire
- MySQL

## Running the application

1 - Clone the repository and checkout branch to-do or download to-do branch.

2 - Run composer install to install all dependencies in repo's root directory.

3 - Run php artisan serve </br> </br>

## Running the application using docker-compose

1 - Make sure docker is setup on your local machine.

2 - Clone repository and checkout to-do branch.

3 - Make sure you are in repo's root directory, then run <i>composer install</i> to install all dependencies.

4 - Change database parameters in .env file to <br/>
<i>DB_CONNECTION=mysql </br>
DB_HOST=mysql</br>
DB_PORT=3306 </br>
DB_DATABASE=todo</br>
DB_USERNAME=root</br>
DB_PASSWORD=secret</i>

5 - Run <i>docker-compose build</i> to build services

6 - Run <i>docker-compose up</i> to run application.

7 - Access application at localhost:8088 </br><br/>

## Running Migrations.

1 - Run services as described above

2 - Run docker-compose exec command on php container

<i>docker-compose exec php /var/www/html/artisan migrate</i>