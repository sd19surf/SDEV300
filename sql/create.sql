-- John Delaney
-- SDEV300 FALL 2017
-- OCT 8, 2017

-- Create the DATABASE

CREATE DATABASE SDEV_STORE;

-- Use the Database to make some tables

use SDEV_STORE;

DROP TABLE User;
DROP TABLE Product;
DROP TABLE Purchase;


-- Create the Tables

CREATE TABLE User(
CustomerID int primary key,
 
Username varchar(30),
Password varchar(32),
Email varchar (50)
);

CREATE TABLE Purchase(
CustomerID int,
AllItems MEDIUMBLOB,
TotalCost float,
PurchaseDate date
);

CREATE TABLE Product(
ProductID int primary key,
ProductName varchar (30),
ProductPicture varchar (1000),
ProductDescribe MEDIUMBLOB,
ProductPrice float
);

-- Initialize some data to make the standard appearance first

INSERT INTO product VALUES('1','Signals','img/signals.jpg','',10.99);
INSERT INTO product VALUES('2','2112', 'img/2112.jpg','',10.99);
INSERT INTO product VALUES('3','Fly By Night','img/flybynight.jpg','',10.99);
INSERT INTO product VALUES('4',"All The World's A Stage", 'img/alltheworldsastage.jpg','',10.99);
INSERT INTO product VALUES('5','Chronicles','img/chronicles.jpg','',10.99);
INSERT INTO product VALUES('6','Exit Stage Left', 'img/exitstageleft.png','',10.99);
INSERT INTO product VALUES('7','Caress of Steel', 'img/caressofsteel.png','',10.99);
INSERT INTO product VALUES('8','Moving Pictures', 'img/moving_pictures.jpg','',10.99);
INSERT INTO product VALUES('9','Presto', 'img/presto.jpg','',10.99);
INSERT INTO product VALUES('10','Test for Echo','img/testforecho.jpg','',10.99);
INSERT INTO product VALUES('11','A Farewell to Kings','img/farewelltokings.png','',10.99);
INSERT INTO product VALUES('12','Power Windows','img/powerwindows.jpg','',10.99);

-- Need the admin account setup for the instructor
-- password is sdev300
-- no salt for hash
INSERT INTO user VALUES('1','sdev_owner','07ae2b939047208ccd4504fb612d317e','sdev@gmail.com');




