# ATTENVO TEST

This is coding test as part of attenvo recruitment steps, this project is built with laravel version 9.0 and Vuesj version 3, it uses the api provided by [attenvo](https://reqres.in/), to display list of users.

### Technology Stack

* PHP v8.1
* Laravel v9.22.1  
* Vuesj v3
* npm
* composer
* mysql
* cache

## How to run this project

* Git clone the project, by running the following command

```sh
    git clone git@github.com:OfficialOzioma/attenvo_test.git

 ```

* Change directory to the cloned project

    ```sh
        cd attenvo_test
    ```

* Copy the the .env.example file to the project directory

```sh
    cp .env.example .env
```

* Run the following command to install dependencies
  
    ```sh
        composer install
    ```

    ```sh
        npm install
    ```

    ```sh
        npm run build
    ```

* Set up your database credentials in the .env file
  
    ```sh
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=your_database_name
        DB_USERNAME=your_database_username
        DB_PASSWORD=your_database_password
    ```

* Run database migrations
  
    ```sh
        php artisan migrate
    ```

* Your can seed the database with dummy data if you want
  
    ```sh
        php artisan db:seed
    ```

* You can now serve the application
  
    ```sh
        php artisan serve
    ```

visit <http://localhost:8080> on your browser to login

#### How to run the tests

 To run the tests, run the following command

 ```sh
     php artisan test
 ```

### screenshot of the application

![Screenshot from 2022-07-29 02-40-19](https://user-images.githubusercontent.com/28990981/181665637-65c08ea3-2e7e-4f80-8148-a48a713691a0.png)
![Screenshot from 2022-07-29 02-40-33](https://user-images.githubusercontent.com/28990981/181665646-de381794-9de5-4ce6-be25-ded535862414.png)
![Screenshot from 2022-07-29 02-40-58](https://user-images.githubusercontent.com/28990981/181665649-0d8c8bde-56b2-4dfa-b919-0519e732c982.png)
![Screenshot from 2022-07-29 02-41-09](https://user-images.githubusercontent.com/28990981/181665653-577201de-acba-4e0a-8153-1d9b3dac4fde.png)
