-- to show All Databases
show databases;

-- to show All Tables
show tables;

--to show Full Description Of All Tables In The Database
show full Tables from information;

--to use The Database
use information

create table employee(
    eid int primary key AUTO_INCREMENT,
    employee_name varchar(30) not null,
    department_name varchar(30) not null,
    organisation_name varchar(30) not null,
    d_id int,
    foreign key (d_id) references(department)
);

create table department(
    d_id int primary key AUTO_INCREMENT,
    department_name varchar(30) not null unique,
    city varchar(30) not null;
);

create table organisation(
    o_id int primary key AUTO_INCREMENT,
    organisation_name varchar(30) not null unique;
);
