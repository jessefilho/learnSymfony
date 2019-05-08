
# my-graphs

Is a project to learn how works Symfony's Projects

# Installing the Web Server Bundle:

$ cd your-project/
$ composer require --dev symfony/web-server-bundle

# Starting the Web Server
$ php bin/console server:start
or
$ symfony server:start
# Open your browser and navigate to
http://localhost:8000/

more:
https://symfony.com/doc/current/setup/built_in_web_server.html





# Setting up an Existing Symfony Project

If you're working on an existing Symfony application, you only need to get the project code and install the dependencies with Composer. Assuming your team uses Git, setup your project with the following commands:

get the project
 cd projects/
 git clone ...

make composer install the project

 cd my-project/
 composer install
