create database Tp_php;
use  Tp_php;
create table student(
   id int primary key,
   name varchar(60),
   datenaissance Date);
INSERT INTO student (id, name, datenaissance) VALUES 
(1, 'Ahmed Ben Ali', '2003-05-12'),
(2, 'Sami Khelifi', '2002-08-25'),
(3, 'Hana Chouchene', '2004-01-15'),
(4, 'Yassine bensalah', '2001-11-30'),
(5, 'Meriem Jaziri', '2003-07-09');
