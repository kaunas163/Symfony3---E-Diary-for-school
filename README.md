University task
===============

This is university task with PHP and MySQL which I have chosen to do with Symfony 3 framework.

Installation
------------

Run these commands to install application:

```
git clone https://github.com/kaunas163/Symfony3---E-Diary-for-school.git
cd Symfony3---E-Diary-for-school
composer install
```

Check connection to database settings under ``` app\config\parameters.yml ``` and edit if needed

Then run some more commands which will create database and all needed tables:

```
php bin/console doctrine:database:create
php bin/console doctrine:schema:create
```

If first doctrine command doesn't work and it says that database exists (maybe you created by yourself, or you haven't changed parametrers.yml file), so do only second command, or change to which database to execute sql scripts.

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
 * User managament: registration, login, roles, pages resctriction to roles.
 * Fixed all isues on forms.

