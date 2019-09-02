create database hc_laptops
use hc_laptops 
create table listaP(
idProduct varchar (10) primary key not null,
nameProduct varchar (50) not null,
priceProduct int  not null,
descProduct varchar (20) not null,
category varchar(50) NOT null,
imagLaptop varchar (50) not null
)

INSERT INTO listaP
(idProduct, nameProduct , priceProduct, descProduct, category, imagLaptop) 
VALUES 
("1", "acer nitro" , 1200 , "negro", "laptop", "acer-nitro.jpg"),
("2", "Asus x512" , 1000 , "rojo", "laptop", "asus-x512.jpg"),
("3", "dell inspiron" , 1500 , "blanca", "laptop", "dell-inspiron.jpg"),
("4", "hp omen" , 1700 , "b&w", "laptop", "hp-omen.jpg"),
("5", "msi" , 2000 , "rgb", "laptop", "msi.jpg"),
("6", "alienware" , 2200 , "laptop", "negro", "alienware.jpg")


CREATE PROCEDURE sp_insertarArticulo
(idPRoduct varchar(10), nameProduct varchar(50), priceProduct int, descProduct varchar(20), category varchar(50), imagLaptop varchar(50)) 
INSERT INTO listaP
(idProduct, nameProduct , priceProduct, descProduct, category, imagLaptop) 
VALUES 
(idProduct, nameProduct , priceProduct, descProduct, category, imagLaptop)

CREATE PROCEDURE sp_cargarArticulos()
SELECT listaP.idPtoduct, listaP.nameProduct as articulo, listaP.priceProduct, listaP.descProduct, listaP.category, listaP.imagLaptop
FROM articulo

//////////////////////////////////////////////////////////////////////////



create database hc_cameras
use hc_cameras 
create table listaP(
idProduct varchar (10) primary key not null,
nameProduct varchar (50) not null,
priceProduct int not null,
descProduct varchar (20) not null,
category varchar(50) NOT null,
imagCamera varchar (50) not null
)


CREATE PROCEDURE sp_insertarArticulo
(idPRoduct varchar(10), nameProduct varchar(50), priceProduct int, descProduct varchar(20), category varchar(50), imagLaptop varchar(50)) 
INSERT INTO listaP
(idProduct, nameProduct , priceProduct, descProduct, category, imagLaptop) 
VALUES 
(idProduct, nameProduct , priceProduct, descProduct, category, imagLaptop)

CREATE PROCEDURE sp_cargarArticulos()
SELECT listaP.idPtoduct, listaP.nameProduct as articulo, listaP.priceProduct, listaP.descProduct, listaP.category, listaP.imagLaptop
FROM articulo


//////////////////////////////////////////////////////////////////////////

create database hc_smartphones
use hc_smartphones
create table listaP(
idProduct varchar (10) primary key not null,
nameProduct varchar (50) not null,
priceProduct int not null,
descProduct varchar (20) not null,
category varchar(50) NOT null,
imagSmartPhone varchar (50) not null
)



CREATE PROCEDURE sp_insertarArticulo
(idPRoduct varchar(10), nameProduct varchar(50), priceProduct int, descProduct varchar(20), category varchar(50), imagLaptop varchar(50)) 
INSERT INTO listaP
(idProduct, nameProduct , priceProduct, descProduct, category, imagLaptop) 
VALUES 
(idProduct, nameProduct , priceProduct, descProduct, category, imagLaptop)

CREATE PROCEDURE sp_cargarArticulos()
SELECT listaP.idPtoduct, listaP.nameProduct as articulo, listaP.priceProduct, listaP.descProduct, listaP.category, listaP.imagLaptop
FROM articulo






