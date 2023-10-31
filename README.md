# Docker:  php74_mysql_phpmyadmin
PHP Docker Application: Apache, PHP 74, mysql and phpMyAdmin in docker!
A PHP Docker application integrating Apache, PHP 7.4, MySQL, and phpMyAdmin offers a comprehensive environment for web development and database management within Docker containers. This setup enables a convenient and portable development environment, making it easier to deploy, manage, and scale web applications.

The key components of this Docker setup include:

 Apache:  The web server that serves the PHP web pages. It handles requests and serves the PHP content to users over the internet.

PHP 7.4: The scripting language used for server-side web development. It works in conjunction with Apache to process and generate dynamic web content.

MySQL: A robust and popular relational database management system. It stores and manages the application's data, providing a reliable backend for various web applications.

phpMyAdmin: A web-based graphical interface for managing MySQL databases. It simplifies tasks related to database administration, allowing users to interact with MySQL databases visually.

By encapsulating these components within Docker containers, this setup ensures portability, consistency, and ease of deployment. Developers can define and manage the entire environment via a docker-compose.yml file, simplifying setup across different machines and environments.

This Dockerized application offers an efficient workflow for web development, facilitating the creation, testing, and deployment of PHP-based web applications while also providing a user-friendly interface, via phpMyAdmin, for database management and manipulation.

# Step 1: Pull 
pull this docker 

# Step 2: go to docker_php74_mysql_phpmyadmin folder 
cd docker_php74_mysql_phpmyadmin

# Step 3: Change env file if you want 
open file .env and cheange database user, pass, port etc if you want 

# Step 4: run compose 
dokcer-compose up -d --build 

