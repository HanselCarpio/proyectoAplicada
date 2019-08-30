create database laptops
use laptops 
create table lista(
idProduct varchar (10) primary key not null,
nameProduct varchar (50) not null,
priceProduct int  not null,
descProduct varchar (20) not null,
imagLaptop varchar (50) not null
)

create database cameras
use cameras 
create table lista(
idProduct varchar (10) primary key not null,
nameProduct varchar (50) not null,
priceProduct int not null,
descProduct varchar (20) not null,
imagCamera varchar (50) not null
)

create database smartphones
use smartphones
create table lista(
idProduct varchar (10) primary key not null,
nameProduct varchar (50) not null,
priceProduct int not null,
descProduct varchar (20) not null,
imagSmartPhone varchar (50) not null
)

