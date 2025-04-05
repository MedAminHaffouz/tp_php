use Tp_php;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'etudiant') NOT NULL
);
CREATE TABLE sections (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE
);
CREATE TABLE Etudiants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    birthday DATE NOT NULL,
    image VARCHAR(255), -- Stocker le chemin de l'image
    section_id INT,
    FOREIGN KEY (section_id) REFERENCES sections(id) ON DELETE SET NULL
);
INSERT INTO sections (name) 
VALUES 
    ('GL'), 
    ('RT'), 
    ('IIA'), 
    ('IMI');
    INSERT INTO Etudiants (name, birthday, image, section_id)
VALUES
    ('John Doe', '2000-01-15', 'https://randomuser.me/api/portraits/men/1.jpg', 1),
    ('Jane Smith', '2001-05-10', 'https://randomuser.me/api/portraits/women/1.jpg', 2),
    ('Ahmed Ali', '1999-11-23', 'https://randomuser.me/api/portraits/men/2.jpg', 3),
    ('Sophie Johnson', '2002-08-30', 'https://randomuser.me/api/portraits/women/2.jpg', 4);
insert into users(username,email,password,role) values(
'admin','admin','admin','admin'),('user1','user1','user1','etudiant');