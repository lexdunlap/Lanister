Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 252681
Server version: 5.1.73 Source distribution

Copyright (c) 2000, 2013, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> use wrb2573
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
mysql> describe employees;
+-------+--------------+------+-----+---------+-------+
| Field | Type         | Null | Key | Default | Extra |
+-------+--------------+------+-----+---------+-------+
| ENO   | int(11)      | NO   | PRI | NULL    |       |
| ENAME | varchar(255) | YES  |     | NULL    |       |
| ZIP   | int(11)      | YES  |     | NULL    |       |
| HDATE | date         | YES  |     | NULL    |       |
+-------+--------------+------+-----+---------+-------+
4 rows in set (0.00 sec)

mysql> select * from employees;
+------+--------+-------+------------+
| ENO  | ENAME  | ZIP   | HDATE      |
+------+--------+-------+------------+
| 1000 | Jones  | 67226 | 1995-12-12 |
| 1001 | Smith  | 60606 | 1992-01-01 |
| 1002 | Brown  | 50302 | 1994-09-01 |
| 1003 | Green  | 28411 | 2002-09-01 |
| 1004 | Purple | 28411 | 2003-01-01 |
+------+--------+-------+------------+
5 rows in set (0.00 sec)

mysql> describe parts;
+-------+--------------+------+-----+---------+-------+
| Field | Type         | Null | Key | Default | Extra |
+-------+--------------+------+-----+---------+-------+
| PNO   | int(11)      | NO   | PRI | NULL    |       |
| PNAME | varchar(255) | YES  |     | NULL    |       |
| QOH   | int(11)      | YES  |     | NULL    |       |
| PRICE | double       | YES  |     | NULL    |       |
| LEVEL | int(11)      | YES  |     | NULL    |       |
+-------+--------------+------+-----+---------+-------+
5 rows in set (0.00 sec)

mysql> select * from parts;
+-------+----------------------+------+-------+-------+
| PNO   | PNAME                | QOH  | PRICE | LEVEL |
+-------+----------------------+------+-------+-------+
| 10506 | Land Before Time I   |  200 | 19.99 |    20 |
| 10507 | Land Before Time II  |  156 | 19.99 |    20 |
| 10508 | Land Before Time III |  190 | 19.99 |    20 |
| 10509 | Land Before Time IV  |   60 | 19.99 |    20 |
| 10601 | Sleeping Beauty      |  300 | 24.99 |    20 |
| 10701 | When Harry Met Sally |  120 | 19.99 |    30 |
| 10800 | Dirty Harry          |  140 | 14.99 |    30 |
| 10900 | Dr. Zhivago          |  100 | 24.99 |    30 |
| 10901 | A Star is Born       |  100 |  4.99 |    30 |
| 10902 | Star Wars            |  500 | 24.99 |    30 |
| 10903 | Lord of the Rings    |  100 | 34.99 |    30 |
+-------+----------------------+------+-------+-------+
11 rows in set (0.00 sec)

mysql> describe customers;
+--------+--------------+------+-----+---------+-------+
| Field  | Type         | Null | Key | Default | Extra |
+--------+--------------+------+-----+---------+-------+
| CNO    | int(11)      | NO   | PRI | NULL    |       |
| CNAME  | varchar(255) | YES  |     | NULL    |       |
| STREET | varchar(255) | YES  |     | NULL    |       |
| ZIP    | int(11)      | YES  |     | NULL    |       |
| PHONE  | varchar(255) | YES  |     | NULL    |       |
+--------+--------------+------+-----+---------+-------+
5 rows in set (0.01 sec)

mysql> select * from customers;
+------+---------+------------------+-------+--------------+
| CNO  | CNAME   | STREET           | ZIP   | PHONE        |
+------+---------+------------------+-------+--------------+
| 1111 | Charles | 123 Main St.     | 67226 | 316-636-5555 |
| 2222 | Bertram | 237 Ash Avenue   | 67226 | 316-689-5555 |
| 3333 | Barbara | 111 Inwood St.   | 60606 | 316-111-1234 |
| 4444 | Will    | 111 Kenwood St.  | 28411 | 416-111-1234 |
| 5555 | Bill    | 211 Marlwood St. | 28411 | 416-111-1235 |
+------+---------+------------------+-------+--------------+
5 rows in set (0.00 sec)

mysql> describe orders;
+----------+---------+------+-----+---------+-------+
| Field    | Type    | Null | Key | Default | Extra |
+----------+---------+------+-----+---------+-------+
| ONO      | int(11) | NO   | PRI | NULL    |       |
| CNO      | int(11) | NO   | MUL | NULL    |       |
| ENO      | int(11) | NO   | MUL | NULL    |       |
| RECEIVED | date    | YES  |     | NULL    |       |
| SHIPPED  | date    | YES  |     | NULL    |       |
+----------+---------+------+-----+---------+-------+
5 rows in set (0.00 sec)

mysql> select * from orders;
+------+------+------+------------+------------+
| ONO  | CNO  | ENO  | RECEIVED   | SHIPPED    |
+------+------+------+------------+------------+
| 1020 | 1111 | 1000 | 1994-12-10 | 1994-12-12 |
| 1021 | 1111 | 1000 | 1995-01-12 | 1995-01-15 |
| 1022 | 2222 | 1001 | 1995-02-13 | 1995-02-20 |
| 1023 | 3333 | 1000 | 2003-02-15 | NULL       |
| 1024 | 4444 | 1000 | 2003-02-15 | 2003-02-16 |
| 1025 | 5555 | 1000 | 2003-02-15 | 2003-02-16 |
+------+------+------+------------+------------+
6 rows in set (0.00 sec)

mysql> describe odetails;
+-------+---------+------+-----+---------+-------+
| Field | Type    | Null | Key | Default | Extra |
+-------+---------+------+-----+---------+-------+
| ONO   | int(11) | NO   | MUL | NULL    |       |
| PNO   | int(11) | NO   | MUL | NULL    |       |
| QTY   | int(11) | YES  |     | NULL    |       |
+-------+---------+------+-----+---------+-------+
3 rows in set (0.00 sec)

mysql> select * from odetails;
+------+-------+------+
| ONO  | PNO   | QTY  |
+------+-------+------+
| 1020 | 10506 |    1 |
| 1020 | 10507 |    1 |
| 1020 | 10508 |    2 |
| 1020 | 10509 |    3 |
| 1021 | 10601 |    4 |
| 1022 | 10601 |    1 |
| 1022 | 10701 |    1 |
| 1023 | 10800 |    1 |
| 1023 | 10900 |    1 |
+------+-------+------+
9 rows in set (0.00 sec)

mysql> describe zipcodes;
+-------+--------------+------+-----+---------+-------+
| Field | Type         | Null | Key | Default | Extra |
+-------+--------------+------+-----+---------+-------+
| ZIP   | int(11)      | YES  |     | NULL    |       |
| CITY  | varchar(255) | YES  |     | NULL    |       |
+-------+--------------+------+-----+---------+-------+
2 rows in set (0.00 sec)

mysql> select * from zipcodes;
+-------+--------------+
| ZIP   | CITY         |
+-------+--------------+
| 67226 | Wichita      |
| 60606 | Fort Dodge   |
| 50302 | Kansas City  |
| 54444 | Columbia     |
| 66002 | Liberal      |
| 61111 | Fort Hays    |
| 28411 | Castle Hayne |
+-------+--------------+
7 rows in set (0.00 sec)

mysql> elect parts.pno, parts.pname from parts, odetails where price < 20.00 and parts.pno = odetails.pno;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'elect parts.pno, parts.pname from parts, odetails where price < 20.00 and parts.' at line 1
mysql> select parts.pno, parts.pname from parts, odetails where price < 20.00 and parts.pno = odetails.pno;
+-------+----------------------+
| pno   | pname                |
+-------+----------------------+
| 10506 | Land Before Time I   |
| 10507 | Land Before Time II  |
| 10508 | Land Before Time III |
| 10509 | Land Before Time IV  |
| 10701 | When Harry Met Sally |
| 10800 | Dirty Harry          |
+-------+----------------------+
6 rows in set (0.01 sec)

mysql> select * from customers where (select INSTR(cname,'ee') = 2);
Empty set (0.00 sec)

mysql> select cname, ename from orders, customers, employees where orders.cno = customers.cno and orders.eno = employees.eno group by cname;
+---------+-------+
| cname   | ename |
+---------+-------+
| Barbara | Jones |
| Bertram | Smith |
| Bill    | Jones |
| Charles | Jones |
| Will    | Jones |
+---------+-------+
5 rows in set (0.00 sec)

mysql> select odetails.ono, odetails.pno, parts.pname, odetails.qty, parts.price, parts.price*odetails.qty from odetails, parts where odetails.pno = parts.pno;
+------+-------+----------------------+------+-------+--------------------------+
| ono  | pno   | pname                | qty  | price | parts.price*odetails.qty |
+------+-------+----------------------+------+-------+--------------------------+
| 1020 | 10506 | Land Before Time I   |    1 | 19.99 |                    19.99 |
| 1020 | 10507 | Land Before Time II  |    1 | 19.99 |                    19.99 |
| 1020 | 10508 | Land Before Time III |    2 | 19.99 |                    39.98 |
| 1020 | 10509 | Land Before Time IV  |    3 | 19.99 |                    59.97 |
| 1021 | 10601 | Sleeping Beauty      |    4 | 24.99 |                    99.96 |
| 1022 | 10601 | Sleeping Beauty      |    1 | 24.99 |                    24.99 |
| 1022 | 10701 | When Harry Met Sally |    1 | 19.99 |                    19.99 |
| 1023 | 10800 | Dirty Harry          |    1 | 14.99 |                    14.99 |
| 1023 | 10900 | Dr. Zhivago          |    1 | 24.99 |                    24.99 |
+------+-------+----------------------+------+-------+--------------------------+
9 rows in set (0.00 sec)

mysql> create temporary table temp (cno int, zip int);
Query OK, 0 rows affected (0.00 sec)

mysql> insert into temp select customers.cno, customers.zip from customers;
Query OK, 5 rows affected (0.00 sec)
Records: 5  Duplicates: 0  Warnings: 0

mysql> select temp.cno, customers.cno from temp, customers where temp.zip = customers.zip and temp.cno != customers.cno and customers.cno > temp.cno;
+------+------+
| cno  | cno  |
+------+------+
| 1111 | 2222 |
| 4444 | 5555 |
+------+------+
2 rows in set (0.00 sec)

mysql> drop table temp;
Query OK, 0 rows affected (0.00 sec)

mysql> create temporary table temp (pno int, ono int, cno int);
Query OK, 0 rows affected (0.00 sec)

mysql> insert into temp select odetails.pno, odetails.ono, orders.cno from odetails natural join orders;
Query OK, 9 rows affected (0.00 sec)
Records: 9  Duplicates: 0  Warnings: 0

mysql> create temporary table temp2 (pno int, ono int, cno int);
Query OK, 0 rows affected (0.00 sec)

mysql> insert into temp2 select odetails.pno, odetails.ono, orders.cno from odetails natural join orders;
Query OK, 9 rows affected (0.00 sec)
Records: 9  Duplicates: 0  Warnings: 0

mysql> select temp.pno from temp, temp2 where temp.pno = temp2.pno and temp.cno != temp2.cno and temp.cno < temp2.cno;
+-------+
| pno   |
+-------+
| 10601 |
+-------+
1 row in set (0.00 sec)

mysql> drop table temp;
Query OK, 0 rows affected (0.00 sec)

mysql> drop table temp2;
Query OK, 0 rows affected (0.00 sec)

mysql> set @dirtyPNO = (select pno from parts where pname = "Dirty Harry");
Query OK, 0 rows affected (0.01 sec)

mysql> set @drPNO = (select pno from parts where pname = "Dr. Zhivago");
Query OK, 0 rows affected (0.00 sec)

mysql> create temporary table dirtyONO (ono int);
Query OK, 0 rows affected (0.00 sec)

mysql> create temporary table drONO (ono int);
Query OK, 0 rows affected (0.00 sec)

mysql> insert into dirtyONO select ono from odetails where pno = @dirtyPNO;
Query OK, 1 row affected (0.00 sec)
Records: 1  Duplicates: 0  Warnings: 0

mysql> insert into drONO select ono from odetails where pno = @drPNO;
Query OK, 1 row affected (0.00 sec)
Records: 1  Duplicates: 0  Warnings: 0

mysql> create temporary table dirty (cno int, cname varchar(255));
Query OK, 0 rows affected (0.00 sec)

mysql> create temporary table dr (cno int, cname varchar(255));
Query OK, 0 rows affected (0.00 sec)

mysql> create temporary table dirtyCNO (cno int);
Query OK, 0 rows affected (0.00 sec)

mysql> create temporary table drCNO (cno int);
Query OK, 0 rows affected (0.00 sec)

mysql> insert into dirtyCNO(cno) select cno from orders, dirtyONO where orders.ono = dirtyONO.ono;
Query OK, 1 row affected (0.00 sec)
Records: 1  Duplicates: 0  Warnings: 0

mysql> insert into drCNO(cno) select cno from orders, drONO where orders.ono = drONO.ono;
Query OK, 1 row affected (0.00 sec)
Records: 1  Duplicates: 0  Warnings: 0

mysql> insert into dirty select customers.cno, cname from customers, dirtyCNO where dirtyCNO.cno = customers.cno;
Query OK, 1 row affected (0.00 sec)
Records: 1  Duplicates: 0  Warnings: 0

mysql> insert into dr select customers.cno, cname from customers, drCNO where drCNO.cno = customers.cno;
Query OK, 1 row affected (0.00 sec)
Records: 1  Duplicates: 0  Warnings: 0

mysql> select * from dr natural join dirty having count(dirty.cno) = 0;
Empty set (0.00 sec)

mysql> select * from dirty natural join dr having count(dr.cno) = 0;
Empty set (0.00 sec)

mysql> select cname from customers, orders where eno = 1000 and customers.cno = orders.cno group by cname;
+---------+
| cname   |
+---------+
| Barbara |
| Bill    |
| Charles |
| Will    |
+---------+
4 rows in set (0.00 sec)

mysql> select sum(qty) from odetails where pno = 10601;
+----------+
| sum(qty) |
+----------+
|        5 |
+----------+
1 row in set (0.00 sec)

mysql> select sum(qty*price) from odetails natural join parts;
+----------------+
| sum(qty*price) |
+----------------+
|         324.85 |
+----------------+
1 row in set (0.00 sec)

mysql> select count(distinct city) from zipcodes;
+----------------------+
| count(distinct city) |
+----------------------+
|                    7 |
+----------------------+
1 row in set (0.00 sec)

mysql> select pname from parts where (select avg(price) from parts) < price;
+-------------------+
| pname             |
+-------------------+
| Sleeping Beauty   |
| Dr. Zhivago       |
| Star Wars         |
| Lord of the Rings |
+-------------------+
4 rows in set (0.00 sec)

mysql> select parts.pno, parts.pname, sum(odetails.qty * parts.price) as totsum from parts natural join odetails group by parts.pno;
+-------+----------------------+--------+
| pno   | pname                | totsum |
+-------+----------------------+--------+
| 10506 | Land Before Time I   |  19.99 |
| 10507 | Land Before Time II  |  19.99 |
| 10508 | Land Before Time III |  39.98 |
| 10509 | Land Before Time IV  |  59.97 |
| 10601 | Sleeping Beauty      | 124.95 |
| 10701 | When Harry Met Sally |  19.99 |
| 10800 | Dirty Harry          |  14.99 |
| 10900 | Dr. Zhivago          |  24.99 |
+-------+----------------------+--------+
8 rows in set (0.00 sec)

mysql> create table temp (pno int, pname varchar(255), totsum real);
ERROR 1050 (42S01): Table 'temp' already exists
mysql> insert into temp select parts.pno, parts.pname, sum(odetails.qty * parts.price) as totsum from parts natural join odetails group by parts.pno;
Query OK, 8 rows affected (0.00 sec)
Records: 8  Duplicates: 0  Warnings: 0

mysql> select * from temp where totsum > 1000;
Empty set (0.02 sec)

mysql> select ono, datediff(shipped, received) days_until_shipped from orders where datediff(shipped, received) < 3;
+------+--------------------+
| ono  | days_until_shipped |
+------+--------------------+
| 1020 |                  2 |
| 1024 |                  1 |
| 1025 |                  1 |
+------+--------------------+
3 rows in set (0.00 sec)

mysql> notee
