This is a ready to use repository for KnpMenuBundle configured in symfony2.5.1. This is intended for the Symfony developers who want to run into the KnpMenuBundle without any burden in configuring. For details on installation please go to the documentation of KnpMenuBundle https://github.com/KnpLabs/KnpMenu.

Follow the following steps:

1. Clone the repo:

    `git clone https://github.com/sur3s/FOSUserBundle`
  

2. Install composer following instructions from http://getcomposer.org/. Then run composer install:
 
    `php composer.phar install`

    (It will download all the vendor files so it might take a while to complete.)

3. Go to the 'Setting up Permissions' section of the official symfony setup page i.e. 
 
    http://symfony.com/doc/current/book/installation.html

    Choose the suitable method to change the permission of app/cache and app/logs.

4. Make a copy of parameters.yml.dist and rename it to paramters.yml.

5. Config the database parameter in app/config/parameters.yml as

    `database_name: (db_name)

    database_user: (db_username)

    database_password: (db_password)'

6. Go to the url: 

    http://localhost/project_name/web/app_dev.php/

    (change the above url as per need)

    You can see the sample menu loaded from knpMenuBundle.

To learn more about the sonataAdminBundle go through the online documentation of the bundle https://github.com/KnpLabs/KnpMenu.
