-- crée database
CREATE DATABASE formation
-- crée table courses
CREATE TABLE courses(
id INT PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(50) NOT NULL,
description TEXT,
level ENUM('Débutant', 'Intermédiaire', 'Avancé'),
created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
-- crée table sections
CREATE TABLE sections(
id INT PRIMARY KEY AUTO_INCREMENT,
course_id INT NOT NULL,
title VARCHAR(50) NOT NULL,
content TEXT,
position INT NOT NULL,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
UNIQUE(course_id,position);
);
-- crée table users 
CREATE TABLE users (
id INT PRIMARY KEY AUTO_INCREMENT,
email VARCHAR(50) NOT NULL,
name VARCHAR(50) NOT NULL,
password VARCHAR(255) NOT NULL,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
-- crée table enrollments 
CREATE TABLE enrollments (
id INT PRIMARY KEY AUTO_INCREMENT,
usere_id INT NOT NULL,
course_id INT NOT NULL,
inserte_at  DATETIME DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (usere_id) REFERENCES users(id) ON DELETE CASCADE,
FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE,
UNIQUE(usere_id ,course_id);
);
