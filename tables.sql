create table department
(
dno varchar(20) primary key,
dname varchar(30));

create table employee
(
ssn varchar(30) primary key,
name varchar(50),
address varchar(100),
sex char(1),
salary integer,
dno varchar(20),
foreign key(dno) references department(dno) on delete cascade);




create table dlocation
(
dno varchar(20),
dloc varchar(40),
foreign key(dno) references department(dno) on delete cascade,
primary key(dno));


create table project
(
pno integer primary key,
pname varchar(40),
plocation varchar(40),
dno varchar(20),
foreign key(dno) references department(dno) on delete cascade);


create table workson
(
ssn varchar(30),
hours integer,
pno integer,
foreign key(ssn) references employee(ssn) on delete cascade,
foreign key(pno) references project(pno) on delete cascade,
primary key (ssn,pno));
