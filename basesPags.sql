create database laptops
use database laptops 
create table lista(
idProduct varchar (10) constraint primary key not null,
nameProduct varchar (50) not null,
priceProduct double (11,11) not null,
descProduct varchar (20) not null,
imagLaptop varchar (50) not null
)

create database cameras
use database camaras 
create table lista(
idProduct varchar (10) constraint primary key not null,
nameProduct varchar (50) not null,
priceProduct double (11,11) not null,
descProduct varchar (20) not null,
imagCamera varchar (50) not null
)

create database smartphones
use database smartphones
create table lista(
idProduct varchar (10) constraint primary key not null,
nameProduct varchar (50) not null,
priceProduct double (11,11) not null,
descProduct varchar (20) not null,
imagSmartPhone varchar (50) not null
)

