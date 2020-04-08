Hello! This is my PHP/SQLite project.

In order to run the project, you will need the following:
Have SQLite3, php-sqlite, composer, apache2 and PHP installed.

If you are running Linux, you can install them with the following commands:
apt-get install php
sudo apt-get install apache2
apt install sqlite3
sudo apt-get install php7.3-sqlite3

Ensure Apache is running before attempting to run the code. On Linux you can do this with the following command:
sudo service apache2 start

Move the code to your /var/www/html/ folder (default for Apache2), then use your browser to go to "localhost/index.php". Enjoy!
