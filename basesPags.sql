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
("3", "dell inspiron" , 1500 , "blancax", "blanca", "dell-inspiron.jpg"),
("4", "hp omen" , 1700 , "b&w", "laptop", "hp-omen.jpg"),
("5", "msi" , 2000 , "rgb", "laptop", "msi.jpg"),
("6", "alienware" , 2200 , "negro", "laptop", "alienware.jpg")


CREATE PROCEDURE sp_insertarArticulo
(idPRoduct varchar(10), nameProduct varchar(50), priceProduct int, descProduct varchar(20), category varchar(50), imagLaptop varchar(50)) 
INSERT INTO listaP
(idProduct, nameProduct , priceProduct, descProduct, category, imagLaptop) 
VALUES 
(idProduct, nameProduct , priceProduct, descProduct, category, imagLaptop)

CREATE PROCEDURE sp_cargarArticulos()
SELECT listaP.idProduct, listaP.nameProduct as articulo, listaP.priceProduct, listaP.descProduct, listaP.category, listaP.imagLaptop
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

INSERT INTO listaP
(idProduct, nameProduct , priceProduct, descProduct, category, imagCamera) 
VALUES 
("1", "5D mark IV" , 1200 , "negro", "camera", "5D_MarklV.jpg"),
("2", "cybershot" , 1000 , "negro", "camera", "cybershot.jpg"),
("3", "instamini" , 1500 , "blue", "camera", "instamini.jpg"),
("4", "Nikon D610" , 1700 , "b&w", "camera", "nikon_d610.jpg"),
("5", "Polaroid" , 2000 , "rgb", "camera", "polaroid.jpg"),
("6", "PowerShot silver" , 2200 , "silver", "camera", "PowerShot_Silver.jpg")

CREATE PROCEDURE sp_insertarArticulo
(idPRoduct varchar(10), nameProduct varchar(50), priceProduct int, descProduct varchar(20), category varchar(50), imagLaptop varchar(50)) 
INSERT INTO listaP
(idProduct, nameProduct , priceProduct, descProduct, category, imagLaptop) 
VALUES 
(idProduct, nameProduct , priceProduct, descProduct, category, imagLaptop)

CREATE PROCEDURE sp_cargarArticulos()
SELECT listaP.idProduct, listaP.nameProduct as articulo, listaP.priceProduct, listaP.descProduct, listaP.category, listaP.imagLaptop
FROM articulo

////////////////////////////////////////////////////////////////////////

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

INSERT INTO listaP
(idProduct, nameProduct , priceProduct, descProduct, category, imagLaptop) 
VALUES 
("1", "iphone XR" , 1200 , "negro", "smartphone", "iphone_XR.jpg"),
("2", "LG Q60" , 1000 , "negro", "smartphone", "lg_q60.jpg"),
("3", "mi 9" , 1500 , "negro", "smartphone", "mi9.jpg"),
("4", "p smart" , 2000 , "rgb", "smartphone", "p_smart.jpg"),
("5", "S 10" , 1700 , "b&w", "smartphone", "s10.jpg"),
("6", "Xperia 10" , 2200 , "negro", "smartphone", "Xperia_10.jpg")

CREATE PROCEDURE sp_insertarArticulo
(idPRoduct varchar(10), nameProduct varchar(50), priceProduct int, descProduct varchar(20), category varchar(50), imagLaptop varchar(50)) 
INSERT INTO listaP
(idProduct, nameProduct , priceProduct, descProduct, category, imagLaptop) 
VALUES 
(idProduct, nameProduct , priceProduct, descProduct, category, imagLaptop)

CREATE PROCEDURE sp_cargarArticulos()
SELECT listaP.idProduct, listaP.nameProduct as articulo, listaP.priceProduct, listaP.descProduct, listaP.category, listaP.imagLaptop
FROM articulo

