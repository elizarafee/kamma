### Getting Started
I have used ```Laravel 8``` and used ```sail``` to setup the project. You should have ```Docker``` installed in your computer to run the project. Please the following instructions to setup the project:

- Please clone the project from the repository
- Please run the following command in the project directory to install all dependecies

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
```
- Please create an .env file same as .env.example exists in the project directory

- Please run ```./vendor/bin/sail up``` to start all the services

- Please run the migration command ```./vendor/bin/sail artisan migrate``` to create the necessary tables for the project 


### The application will be run on [http://localhost:8088](http://localhost:8088)


- You will be able to visit here the [homepage](http://localhost:8088)  (Part 1 for the test)

- You will be able to visit here the [email sending form](http://localhost:8088/emails/create)  (Part 2 for the test)

- You will be able to see the list of email send and stored in the database here [email logs](http://localhost:8088/emails) (Part 2 for the test)

- Please visit here to check emails sent via Mailhog server [http://localhost:8025](http://localhost:8025)

### Testing 

Please update the following entries in ```phpunit.xml``` file same as the ```.env``` file to run the tests. 

```
<server name="DB_CONNECTION" value="mysql"/>
<server name="DB_DATABASE" value="kamma"/>
```

If you use the ```.env``` file same as ```.env.example``` you don't need to update anything. 


- command for running the test is ``` ./vendor/bin/sail artisan test ```


