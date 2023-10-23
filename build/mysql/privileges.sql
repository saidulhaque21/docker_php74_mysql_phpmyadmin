CREATE USER 'admin'@'%' IDENTIFIED BY 'Pass123';
GRANT SELECT ON *.* TO 'admin'@'%';
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%';

CREATE TABLE IF NOT EXISTS  contacts(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    mobile VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- test data
INSERT INTO contacts (first_name, last_name, email, mobile)
VALUES ('Christian', 'Schou', 'chsc@christian-schou.dk', '0191311333131');