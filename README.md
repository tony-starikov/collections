## Collections: Laravel 10 api and Vue 3 project

## Installation steps:

- git clone https://github.com/tony-starikov/collections.git
- open collections folder
- copy '.env.example' file and rename it to '.env'
- open database folder and rename 'database.sqlite.example' to 'database.sqlite'
- switch back to the collections folder
- run 'composer install' command in the terminal
- run './vendor/bin/sail up -d' command in the terminal
- run './vendor/bin/sail npm install' command in the terminal
- run './vendor/bin/sail php artisan migrate:fresh --seed' command in the terminal
- run './vendor/bin/sail php artisan key:generate' command in the terminal
- run './vendor/bin/sail npm run dev' command in the terminal
- open 'http://localhost' in the browser

## API Documentation:

For all routes you need to use Headers:
Content-Type: application/json

Auth routes:


http://localhost/api/login || POST

Request json fields:
{
    "email" : "user@gmail.com",
    "password" : "password"
}

Response fields:
{
    "user": {
        "id": 1,
        "name": "User",
        "email": "user@gmail.com",
        "email_verified_at": null,
        "created_at": null,
        "updated_at": null
    },
    "authorization": {
        "token": "3|laravel_sanctum_1OCWjwjHyiYLDAFdnzYzZyPJAeda6MhO8yFDD3he6fadeed0",
        "type": "bearer"
    }
}

If you are using postman or something like insomnia, save token.


http://localhost/api/register || POST

Request json fields:
{
    "name" : "User",
    "email" : "user@gmail.com",
    "password" : "password"
}

Response fields:
{
    "message": "User created successfully",
    "user": {
        "name": "Tony",
        "email": "user2@gmail.com",
        "updated_at": "2023-08-27T21:32:15.000000Z",
        "created_at": "2023-08-27T21:32:15.000000Z",
        "id": 2
    },
    "authorization": {
        "token": "4|laravel_sanctum_dScwvE8YQxY9wlE77zmVwBoR1cEb8lnKjZD8jShqaf9e64ac",
        "type": "bearer"
    }
}

If you are using postman or something like insomnia, save token.


##Collections routes:

http://localhost/api/collections || GET

Response: all collections list

If you are using postman or something like insomnia, use saved bearer token.


http://localhost/api/collections/1 || GET

Response: get single collection info

If you are using postman or something like insomnia, use saved bearer token.


http://localhost/api/collections || POST

Request json fields:
{
    "title" : "title",
    "description" : "description",
    "target_amount" : 10000000,
    "link" : "link"
}

Response: get created collection info

If you are using postman or something like insomnia, use saved bearer token.


http://localhost/api/collections/1 || PUT

Request json fields:
{
    "title" : "New"
}

Response: get updated collection info

If you are using postman or something like insomnia, use saved bearer token.


http://localhost/api/collections/1 || DELETE

Response:
{
    "success": "Collection deleted"
}

If you are using postman or something like insomnia, use saved bearer token.


http://localhost/api/collections/filter-less || GET
http://localhost/api/collections/filter-more || GET

Response: all collections list filtered from less ore more target amount

If you are using postman or something like insomnia, use saved bearer token.


http://localhost/api/collections/search || POST

Request json fields:
{
    "search_amount" : 10000
}

Response: get collections with target_amount < search_amount

If you are using postman or something like insomnia, use saved bearer token.


##Contributors routes:

http://localhost/api/contributors || GET

Response: all contributors list

If you are using postman or something like insomnia, use saved bearer token.


http://localhost/api/contributors/1 || GET

Response: get single contributor info

If you are using postman or something like insomnia, use saved bearer token.


http://localhost/api/contributors || POST

Request json fields:
{
    "collection_id" : 1,
    "user_name" : "User",
    "amount" : 100000
}

Response: get created contributor info

If you are using postman or something like insomnia, use saved bearer token.


http://localhost/api/contributors/1 || PUT

Request json fields:
{
    "user_name" : "User1"
}

Response: get updated contributor info

If you are using postman or something like insomnia, use saved bearer token.


http://localhost/api/contributors/1 || DELETE

Response:
{
    "success": "Contributors deleted"
}

If you are using postman or something like insomnia, use saved bearer token.
