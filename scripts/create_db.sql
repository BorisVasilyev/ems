create database ems_db;

connect ems_db;

create table employees
(
	id mediumint AUTO_INCREMENT,
	primary key(id)
);

create table vacancies
(
	id mediumint AUTO_INCREMENT,
	title varchar(500),
	description varchar(10000),
	low_salary double,
	high_salary double,
	primary key(id)
);

create table news
(
	id mediumint AUTO_INCREMENT,
	title varchar(500),
	text varchar(10000),
	author_id int,
	publication_date datetime,
	primary key(id)
);

