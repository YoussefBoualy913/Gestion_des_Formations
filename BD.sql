CREATE DATABASE formation

CREATE TABLE courses(
id INT PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(50),
description TEXT(200),
level ENUM('Débutant', 'Intermédiaire', 'Avancé'),
created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE sections(
id INT PRIMARY KEY AUTO_INCREMENT,
course_id INT,
title VARCHAR(50),
content TEXT,
position INT,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (course_id) REFERENCES courses(id)
);