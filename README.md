This is configured and tested boilerplate for **KnpMenuBundle** configured in **symfony2.5.1**. This is intended for the *Symfony developers* who want to run into the KnpMenuBundle without any burden in configuring. If you are looking for installation of the bundle yourself go through the official documentation of [KnpMenuBundle](https://github.com/KnpLabs/KnpMenu).

Follow the following steps:

1. Clone the repo:

    `git clone https://github.com/sur3s/FOSUserBundle`
  

2. Install composer following instructions from [here](http://getcomposer.org/). Then run composer install:
 
    `php composer.phar install`

    (It will download all the vendor files so it might take a while to complete.)

3. Go to the 'Setting up Permissions' section of the [official symfony setup page](http://symfony.com/doc/current/book/installation.html)

    Choose the suitable method to change the permission of *app/cache* and *app/logs*.

4. Make a copy of *parameters.yml.dist* and rename it to *paramters.yml*.

5. Config the database parameter in *app/config/parameters.yml* as

    `database_name: (db_name)`
    
    `database_user: (db_username)`
    
    `database_password: (db_password)`

6. Go to the url: 

    *http://localhost/project_name/web/app_dev.php/*
    
    (change the above url as per need)

    You can see the sample menu loaded from knpMenuBundle.

To learn more about the sonataAdminBundle go through the online documentation of the [KnpMenuBundle](https://github.com/KnpLabs/KnpMenu).
