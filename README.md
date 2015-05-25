MontyEnglish
============

www.montyenglish.co.uk

This is the WordPress project currently used inside the MontyEnglish website.

How To Start
------------
1. First clone the repository to your local machine
2. Download the latest database from the Download section
3. Create a database on your local machine in where importing the database informations
4. Edit the siteurl and home values inside the wp_options table according to your local informations (eg. http://localhost:8888/MontyEnglish.co.uk/ )
5. Now you should be able to access the website prom your browser

Grunt
-----
From inside the main folder (eg. ~/montyenglish/), just type in your terminal:
  - grunt <i>this will compile the project in development mode</i>
  - grunt build <i>this will build a new project's version</i>

In both the above cases, the new files will be generated inside 'wp-content/theme/Monty/css' and 'wp-content/theme/Monty/js'

<b>Remember</b> to change the 'main.[version].css name in your 'header.php' according to the new file generated