## Installation

git clone https://github.com/Kakoli306/Assignment.git
cd Assignment/
composer install
cp .env.example .env
Update .env and set your database credentials
php artisan key:generate
php artisan migrate
php artisan db:seed
npm install
npm run dev
php artisan serve


## Features

Basic salary of the lowest grade
Employee crud operation
Balance of the company bank account
Employee ID 4 digit and unique
Using proper relationship
Calculate salary of each employee 
Transfer the salary amount from main account to employee’s accounts
display the name, rank and salary of each employee (A salary sheet)
display the total paid salary and remaining balance of the company account
Implementing Login/Logout features using JWT
