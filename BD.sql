-- crée database
CREATE DATABASE formation
-- crée table courses
CREATE TABLE courses(
id INT PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(50),
description TEXT(200),
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
FOREIGN KEY (course_id) REFERENCES courses(id)
UNIQUE(course_id,position);
);

-- chalenge_1_sql
SELECT * from courses 
WHERE level="Intermédiaire" and title LIKE "101%"
ORDER BY title ASC;
-- chalenge_2_sql
SELECT level,COUNT(level) AS nb_coures FROM courses
GROUP BY level