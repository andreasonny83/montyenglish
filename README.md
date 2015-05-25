MontyEnglish
============

www.montyenglish.co.uk

This is the WordPress project currently used inside the MontyEnglish website.

How To Start
------------
1. First clone the repository to your local machine
2. Download the latest database from the Download section
3. Create a database on your local machine in where importing the database informations
4. Edit the siteurl and home values inside the wp_options table according to your local informations (eg. http://localhost:8888/MontyEnglish/ )
5. Download the wp-config.php from the download section and move that inside your main folder (this file is not Git tracked for security reasons)
6. Edit the wp-config.php file in your main folder and set the database informations according to your local settings (eg: DB_NAME: monty_dev, DB_USER: root, DB_PASSWORD: root )
7. The first time access the website from the wp-admin page (eg. http://localhost:8888/MontyEnglish/wp-admin). Reach the Settings-> General, make sure the WordPress Address (URL) and Site Address (URL) informations are correct and click save changes. Then reach the Settings -> Languages, click the Settings tab and click Save Changes again.
8. Now you should be able to access the website from your browser
9. Edit your project files from inside the wp-content/themes/Monty/dev folder

Grunt
-----
From inside the main folder (eg. ~/montyenglish/), just type in your terminal:

* npm install
* grunt ***this will compile the project in development mode***
* grunt watch ***this command will watch and compile the project whenever you aport any change to the project. Is highly recommended to leave this watch running in background when you are developing changes to the website***
* grunt build ***this will build a new project's version***

In both the above cases, the new files will be generated inside 'wp-content/theme/Monty/css' and 'wp-content/theme/Monty/js'

**Remember** to change the 'main.[version].css name in your 'header.php' according to the new file generated

Production Info
---------------
.htacess are not Git tracked
Download them from the Downloads section
Rename htaccess to .htaccess and move it to the main folder
Rename wpadmin_htaccess to .htaccess and move it inside the wp-admin folder (This one will ask the user trying to access the http://www.montyenglish.co.uk/wp-admin a basic authentication credentials)