# AcmeCC
Simple Subscription API implementation and front-end

## Introduction
This application represents the API and also the front-end of the application.
API resource controllers are in a specific API folder and the api is encapsulated
in an ``/api`` route group, see ``/app/Http/routes.php``.

The front-end is represented the pages that make up the site. 

## Installation

### Step 1 - Get the project.
Here you have 2 options:
#### 1. Download 
  - Download this repository from Github

#### 2. Clone
  - ``git clone https://github.com/jbmadking/AcmeCC.git``
  
### Step 2 - Configure the application.
Create a ``.env`` file and set your configurations. 
Below is a sample:
```
APP_ENV=local
APP_DEBUG=true
APP_KEY=

DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

API_PREFIX=api

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
```

### Step 3 - Install project dependencies
From your terminal. Run the following command:
```
composer install
```
 
### Step 4 - Generate unique application key
Run:
```
php artisan key:generate 
``` 

### Step 5 - Migrate and seed the database
From your project folder run the following command:
```
php artisan migrate --seed
```
This should create dummy data to work with.

### Step 6 - Start the server
From your project folder run the following command:
```
php artisan serve
```
This is to start the server, which should be available on: 
```
http://localhost:8000/
```
