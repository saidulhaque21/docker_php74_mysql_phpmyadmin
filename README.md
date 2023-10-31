# Docker:  docker_php74_mysql_phpmyadmin
PHP Docker Application: Apache, PHP 74, mysql and phpMyAdmin in docker!
A PHP Docker application integrating Apache, PHP 7.4, MySQL, and phpMyAdmin offers a comprehensive environment for web development and database management within Docker containers. This setup enables a convenient and portable development environment, making it easier to deploy, manage, and scale web applications.

The key components of this Docker: **docker_php74_mysql_phpmyadmin** setup include:

 **Apache:**  The web server that serves the PHP web pages. It handles requests and serves the PHP content to users over the internet.

**PHP 7.4:** The scripting language used for server-side web development. It works in conjunction with Apache to process and generate dynamic web content.

**MySQL:** A robust and popular relational database management system. It stores and manages the application's data, providing a reliable backend for various web applications.

**phpMyAdmin:** A web-based graphical interface for managing MySQL databases. It simplifies tasks related to database administration, allowing users to interact with MySQL databases visually.



# Step 1: Pull 
First of all, pull this repository  

# Step 2: Change env file if you want   
Then, go to docker_php74_mysql_phpmyadmin folder 
```
cd docker_php74_mysql_phpmyadmin
```
open file .env and cheange database user, pass, port etc if you want 

```
# Source  DIRECTORY | you can locate anywhere your source code by changing this variable  
APP_SOURCE_DIRECTORY=./src

# mysql default credentials || Change if you want as your requirement 
HOSTNAME=mysite
MYSQL_USER=droot
MYSQL_PASSWORD=Pass123
MYSQL_TEST_DATABASE=docker_db
MYSQL_ROOT_PASSWORD=RootPass123 

# DEFAULT PORT - apache | MySQL | phpmyadmin || Change if you want as your requirement 
HTTP_PORT=7000
MYSQL_PORT=3309
PHPMYADMIN_PORT=7001
```

# Step 3: Build Docker 
 After that, build this using following docker command 
```
dokcer-compose up -d --build
```
**Note:** You must have Docker installed on your machine.  If not, please install docker from: https://snapcraft.io/install/docker/ubuntu#install

# Step 4: Enjoy 
Browse the application with URL: http://localhost:7000
Which will show one record from database. 

and for phpMyAdmin, Please browse: http://localhost:7001

Thanks
 

