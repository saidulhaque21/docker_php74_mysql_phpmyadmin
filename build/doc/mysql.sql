CREATE USER 'admin' IDENTIFIED BY 'Pass123';

GRANT INSERT ON *.* TO 'admin'@'%';

GRANT INSERT ON *.* TO 'droot'@'%';


SHOW GRANTS FOR 'admin'@'db';

GRANT ALL PRIVILEGES ON *.* TO 'admin'@'db';