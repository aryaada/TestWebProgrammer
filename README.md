# Test Web Programmers ANUGERAH GROUP

## Using For Test Case

- Laravel Framework
- MySQL Database

## Installation

1. Clone repository:
   ```bash
   https://github.com/aryaada/TestWebProgrammer.git

2. Install Dependencies
    ```bash
    composer install

3. Copy .env.example to .env
    ```bash
    cp .env.example .env

4. Generate Key .env
    ```bash
    php artisan key:generate

5. Config Database
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=testwebprogrammer
    DB_USERNAME=root
    DB_PASSWORD=

6. Migrate Table
    ```bash
    php artisan migrate

7. Using Seeders
    ```bash
    php artisan db:seed

8. Run Project
    ```bash
    php artisan serve
