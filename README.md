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
