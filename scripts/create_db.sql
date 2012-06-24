create database ems_db;

connect ems_db;

create table employees
(
	id mediumint AUTO_INCREMENT,
	login varchar(100),
	password long,
	name varchar(100),
	surname varchar(100),
	patronymic varchar(100),
	middle_name varchar(100),
	birth_date date,
	registration_date date,
	about varchar(10000),
	primary key(id)
) CHARACTER SET = utf8;

create table department
(
	id mediumint AUTO_INCREMENT,
	parent_department_id mediumint,
	name varchar(100),
	description varchar(100),
	primary key(id)
) CHARACTER SET = utf8;

create table positions
(
	id mediumint AUTO_INCREMENT,
	title varchar(500),
	description varchar(10000),
	primary key(id)
) CHARACTER SET = utf8;

create table vacancies
(
	id mediumint AUTO_INCREMENT,
	department_id mediumint,
	position_id mediumint,
	low_salary double,
	high_salary double,
	primary key(id)
) CHARACTER SET = utf8;

create table job_history
(
	employee_id mediumint,
	position_id mediumint,
	department_id mediumint,
	description varchar(10000),
	from_date date,
	to_date date,
	is_active bool
) CHARACTER SET = utf8;

create table news
(
	id mediumint AUTO_INCREMENT,
	author_id mediumint,
	title varchar(500),
	text varchar(10000),
	publication_date datetime,
	primary key(id)
) CHARACTER SET = utf8;

