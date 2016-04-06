Univerity task
==============

This is university task with PHP and MySQL which I have chosen to do with Symfony 3 framework.

Installation
------------

Run these commands to install application:

```
git clone https://github.com/kaunas163/Symfony3---E-Diary-for-school.git
composer install
```

Check connection to database settings under ``` app\config\parameters.yml ```

Then run some more commands which will create database and all needed tables:

```
php bin/console doctrine:database:create
php bin/console doctrine:schema:create
```

To run application use command:
```
php bin/console server:run
```


Progress
--------


What is done:
 * Created database tables and doctrine entities.
 * Created all needed controllers and views for all sub tasks.
 * Attached bootstrap.

Todo:
 * Fix some issues on a few forms which lets you create new data.
 * Make user registration and login.
 * Restrict pages access to users with appropiate roles.
 * Make better website design.
