DROP TABLE IF EXISTS Customers;

DROP TABLE IF EXISTS Orders;

DROP TABLE IF EXISTS Shippings;

DROP TABLE IF EXISTS COURSE;
 
CREATE TABLE STUDENT (

    name VARCHAR(25),

    lastname VARCHAR(25),

    dateofbirth VARCHAR(30),

    studentid VARCHAR(30),

    address VARCHAR(40),

    password VARCHAR(20),

    food VARCHAR(20),

    role VARCHAR(25),

    email VARCHAR(45)

);

-- Insert sample records

INSERT INTO STUDENT(name, lastname, dateofbirth, studentid, address, password, food, role, email)

VALUES

('Clark', 'Kent', '01-01-1990', '2024-104278123', 'NU Manila', 'chaotic', 'Burger', 'student', 'clarkkent@gmail.com');

INSERT INTO STUDENT(name, lastname, dateofbirth, studentid, address, password, food, role, email)

VALUES

('Dave', 'Colorado', '02-14-1998', '2022-105623', 'NU Manila', 'Clark is nice', 'Pizza', 'Student', 'davecol@gmail.com');

INSERT INTO STUDENT(name, lastname, dateofbirth, studentid, address, password, food, role, email)

VALUES

('Ava', 'Reeves', '07-21-2001', '2022-104278', 'NU Manila', 'recoil', 'Pasta', 'Student', 'avareeves14@gmail.com');

SELECT * FROM STUDENT;

GO
 
 
CREATE TABLE COURSE (

    courseid VARCHAR(30),

    title VARCHAR(25),

    department VARCHAR(30),

    credits VARCHAR(40),

);
 
INSERT INTO COURSE(courseid, title, department, credits)

VALUES

('CCPHYS2L', 'College Physics 2', 'CCIT', '3.00');
 
INSERT INTO COURSE(courseid, title, department, credits)

VALUES

('CCOMPORG', 'Computer Organization', 'CCIT', '3.00');
 
INSERT INTO COURSE(courseid, title, department, credits)

VALUES

('CTINFMGL', 'Information Management', 'CCIT', '3.00');
 
SELECT * FROM COURSE;

GO

 
DROP TABLE IF EXISTS Customers;
DROP TABLE IF EXISTS Orders;
DROP TABLE IF EXISTS Shippings;
DROP TABLE IF EXISTS COURSE;
 
CREATE TABLE STUDENT (
    name VARCHAR(25),
    lastname VARCHAR(25),
    dateofbirth VARCHAR(30),
    studentid VARCHAR(30),
    address VARCHAR(40),
    password VARCHAR(20),
    food VARCHAR(20),
    role VARCHAR(25),
    email VARCHAR(45)
);
 
INSERT INTO STUDENT(name, lastname, dateofbirth, studentid, address, password, food, role, email) VALUES
('Clark', 'Kent', '01-01-1990', '2024-104278123', 'NU Manila', 'chaotic', 'Burger', 'student', 'clarkkent@gmail.com'),
('Dave', 'Colorado', '02-14-1998', '2022-105623', 'NU Manila', 'Clark is nice', 'Pizza', 'Student', 'davecol@gmail.com'),
('Ava', 'Reeves', '07-21-2001', '2022-104278', 'NU Manila', 'recoil', 'Pasta', 'Student', 'avareeves14@gmail.com');
 
SELECT * FROM STUDENT;
 
CREATE TABLE COURSE (
    courseid VARCHAR(30),
    title VARCHAR(25),
    department VARCHAR(30),
    credits VARCHAR(40)
);
 
INSERT INTO COURSE(courseid, title, department, credits) VALUES
('CCPHYS2L', 'College Physics 2', 'CCIT', '3.00'),
('CCOMPORG', 'Computer Organization', 'CCIT', '3.00'),
('CTINFMGL', 'Information Management', 'CCIT', '3.00');
 
SELECT * FROM COURSE;
 
DROP TABLE IF EXISTS Customers;

DROP TABLE IF EXISTS Orders;

DROP TABLE IF EXISTS Shippings;

DROP TABLE IF EXISTS COURSE;

DROP TABLE IF EXISTS PROFESSOR;

DROP TABLE IF EXISTS ENROLLMENT;

DROP TABLE IF EXISTS TEACHING;
 
CREATE TABLE STUDENT (

    name VARCHAR(25),

    lastname VARCHAR(25),

    dateofbirth VARCHAR(30),

    studentid VARCHAR(30),

    address VARCHAR(40),

    password VARCHAR(20),

    food VARCHAR(20),

    role VARCHAR(25),

    email VARCHAR(45)

);

INSERT INTO STUDENT(name, lastname, dateofbirth, studentid, address, password, food, role, email) VALUES

('Clark', 'Kent', '01-01-1990', '2024-104278123', 'NU Manila', 'chaotic', 'Burger', 'student', 'clarkkent@gmail.com'),

('Dave', 'Colorado', '02-14-1998', '2022-105623', 'NU Manila', 'Clark is nice', 'Pizza', 'Student', 'davecol@gmail.com'),

('Ava', 'Reeves', '07-21-2001', '2022-104278', 'NU Manila', 'recoil', 'Pasta', 'Student', 'avareeves14@gmail.com');

SELECT * FROM STUDENT;
 
CREATE TABLE ENROLLMENT(

    studentid VARCHAR(30),

    courseid VARCHAR(25)

);
 
 
INSERT INTO ENROLLMENT(studentid, courseid) VALUES

('2024-104278123', 'CCPHYS2L'),

('2022-105673', 'CCOMPORG'),

('2022-104278', 'CTINFMGL');
 
SELECT * FROM 	ENROLLMENT;
 
CREATE TABLE COURSE (

    courseid VARCHAR(30),

    title VARCHAR(25),

    department VARCHAR(30),

    credits VARCHAR(40)

);
 
INSERT INTO COURSE(courseid, title, department, credits) VALUES

('CCPHYS2L', 'College Physics 2', 'CCIT', '3.00'),

('CCOMPORG', 'Computer Organization', 'CCIT', '3.00'),

('CTINFMGL', 'Information Management', 'CCIT', '3.00');

SELECT * FROM COURSE;

 
CREATE TABLE PROFESSOR(

    professorid VARCHAR(30),

    name VARCHAR(25),

    department VARCHAR(30)

);
 
INSERT INTO PROFESSOR(professorid, name, department) VALUES

('2022-123654', 'Julian Castro', 'CCIT'),

('2022-105673', 'Sarah Montiverde', 'CCIT'),

('2023-190765', 'Elizer Ponio', 'CCIT');
 
SELECT * FROM PROFESSOR;
 
CREATE TABLE TEACHING(

    professorid VARCHAR(30),

    courseid VARCHAR(25)

);
 
INSERT INTO TEACHING(professorid, courseid) VALUES

('2022-123654', 'CCPHYS2L'),

('2022-105673', 'CCOMPORG'),

('2023-190765', 'CTINFMGL');
 
SELECT * FROM TEACHING;
 