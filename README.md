# bsc-backend
Simple backend application for managing these endpoints:
- **GET** /notes
- **POST** /notes
- **GET** /notes/{id}
- **PUT** /notes/{id}
- **DELETE** /notes/{id}

# PreRequirements
  - PHP
  - mysql with existing database bsc
  - Composer

# Installation
1) clone repository
```
git clone git@github.com:Xchos/bsc-backend.git
cd bsc-backend
composer install
```
2)  specify mysql database connection in file `.env`.

3) migrate database and seed it with fake data
```
php artisan migrate
php artisan db:seed --class=NotesTableSeeder
```

# Running API
```
php artisan serve
```
API will be available at `http://localhost:8000/api` with all endpoints specified
