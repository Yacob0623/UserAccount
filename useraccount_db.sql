
DROP DATABASE IF EXISTS useraccount;

CREATE DATABASE useraccount;

USE useraccount;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    is_admin TINYINT(1) NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (username, email, password, is_admin)
VALUES (
    'adminuser',
    'admin@site.com',
    '$2y$10$3EEAAZ6po1idkE4YxM3w2O/IW3j5HrMXqcUoELdUJR5LFnS8fGZU.',
    1
);

INSERT INTO users (username, email, password, is_admin)
VALUES (
    'webmaster',
    'webmaster@site.com',
    '$2y$10$5Lxx09fygVO8iXhNuq51vOfNH/3OnnH6PEDSe/KBnizBwkGPHPCY6',
    1
);
