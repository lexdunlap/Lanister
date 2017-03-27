drop table employees;
drop table parts;
drop table customers;
drop table orders;
drop table odetails;
drop table zipcodes;


CREATE TABLE zipcodes
(
zip int,
city varchar(255),
PRIMARY KEY(zip)
)ENGINE=INNODB;

CREATE TABLE employees
(
eno int NOT NULL,
ename varchar(255),
zip int,
hdate date,
PRIMARY KEY(eno),
FOREIGN KEY (zip) REFERENCES zipcodes(zip) 
)ENGINE=INNODB;

CREATE TABLE parts
(
pno int NOT NULL,
pname varchar(255),
qoh int,
price real,
LEVEL int,
PRIMARY KEY(pno)
)ENGINE=INNODB;

CREATE TABLE customers
(
cno int NOT NULL,
cname varchar(255),
street varchar(255),
zip int,
phone varchar(255),
PRIMARY KEY(cno),
FOREIGN KEY (zip) REFERENCES zipcodes(zip)
)ENGINE=INNODB;

CREATE TABLE orders
(
ono int NOT NULL,
cno int NOT NULL,
eno int NOT NULL,
received date,
shipped date,
PRIMARY KEY(ono),
FOREIGN KEY (cno) REFERENCES customers(cno),
FOREIGN KEY (eno) REFERENCES employees(eno)
)ENGINE=INNODB;

CREATE TABLE odetails
(
ono int NOT NULL,
pno int NOT NULL,
qty int,
PRIMARY KEY (ono,pno),
FOREIGN KEY (ono) REFERENCES orders(ono),
FOREIGN KEY (pno) REFERENCES parts(pno)
)ENGINE=INNODB;