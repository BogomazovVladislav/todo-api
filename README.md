# ToDo API (Laravel)

Simple REST API for managing tasks.

## Endpoints

- POST /api/tasks
- GET /api/tasks
- GET /api/tasks/{id}
- PUT /api/tasks/{id}
- DELETE /api/tasks/{id}

## Fields

- title - string required  
- description - string optional  
- status - string optional

## Run

- composer install
- php artisan migrate
- php artisan serve
