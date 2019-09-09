create database pelon


CREATE TABLE clients
(
    idClient integer NOT NULL unique,
    nameClient varchar(50) NOT NULL,
    numID varchar(15) NOT NULL,
    userClient varchar(20) NOT NULL,
    passwordClient varchar(30) NOT NULL,
    PRIMARY KEY (idClient, passwordClient)
)

CREATE OR REPLACE FUNCTION sp_registrarCliente (idClient integer, nameClient varchar(50), numID varchar(15), userClient varchar(20), passwordClient varchar(30))
RETURNS void AS $$
    BEGIN
		insert into clients (idClient, nameClient, numID, userClient, passwordClient)
		VALUES 
		(idClient, nameClient, numID, userClient, passwordClient);
	END;
$$ LANGUAGE plpgsql;

//////////////////////////////////////////////////////////////////////////////////////////////

CREATE TABLE creditCard
(
	idClient integer NOT NULL REFERENCES clients(idClient),
    cardType varchar(5) NOT NULL,
    cardNumber integer NOT NULL,
    cvv integer NOT NULL,
	PRIMARY KEY (idClient)
)

CREATE TABLE address
(
	idClient integer NOT NULL REFERENCES clients(idClient),
    details varchar(100) NOT NULL,
	PRIMARY KEY (idClient)
)
///////////////////////////////////////////////////////////////////////////////////////
CREATE TABLE products
(
	idProduct integer NOT NULL unique,
    nameProduct varchar(50) NOT NULL,
    priceProduct integer NOT NULL,
    descProduct varchar(100) NOT NULL,
    imageProduct varchar(50) NOT NULL,
	idCategory integer REFERENCES category(idCategory),
	status varchar(10),
    PRIMARY KEY (idProduct, idCategory)
)


CREATE OR REPLACE FUNCTION sp_cargarArticulos()
RETURNS TABLE(idProduct INTEGER, nameProduct VARCHAR(50), priceProduct INTEGER, descProduct VARCHAR,imageProduct VARCHAR(50), idCategory integer, statusProduct varchar(10)) AS
$$
BEGIN
 RETURN QUERY
 SELECT idProduct, nameProduct, priceProduct, descProduct, imageProduct, idCategory, statusProduct
	FROM products;
	
END; 
$$ 
LANGUAGE plpgsql;


CREATE OR REPLACE FUNCTION sp_insertarArticulo (idProduct varchar(10), nameProduct varchar(50), priceProduct int, descProduct varchar(20), imageProduct varchar(50), category varchar(50), status char)
RETURNS void AS $$
    BEGIN
		insert into products (idProduct, nameProduct, priceProduct, descProduct, imageProduct, category, status)
		VALUES 
		(idProduct, nameProduct, priceProduct, descProduct, imageProduct, category, status);
	END;
$$ LANGUAGE plpgsql;


////////////////////////////////////////////////////////////////////////////////////



CREATE TABLE shopping
(
	idClient integer NOT NULL REFERENCES clients(idClient),
	idProduct integer NOT NULL REFERENCES products(idProduct),
	PRIMARY KEY (idClient, idProduct)
)

CREATE TABLE visits
(
	idClient integer NOT NULL REFERENCES clients(idClient),
	idProduct integer NOT NULL REFERENCES products(idProduct),
	numVisits integer NOT NULL, 
	PRIMARY KEY (idClient, idProduct)
)

//////////////////////////////////////////////////////////////////////////////////////////

CREATE TABLE category
(
	idCategory integer NOT NULL,
	nameCategory varchar(30) NOT NULL,
	PRIMARY KEY (idCategory)
)

insert into category
(idCategory, nameCategory)
values
(1, 'laptops'),
(2, 'cameras'),
(3, 'smartphones')


CREATE OR REPLACE FUNCTION sp_insertarCategoria(idCategory integer, nameCategory varchar(30))
RETURNS void AS $$
    BEGIN
		insert into category (idCategory, nameCategory)
		VALUES 
		(idCategory, nameCategory);
	END;
$$ LANGUAGE plpgsql;

//////////////////////////////////////////////////////////////////////////////////////////

CREATE TABLE suppliers
(
	idSupplier integer NOT NULL,
	keySupplier varchar(20) NOT NULL,
	nameSupplier varchar(30) NOT NULL,
	phonoNumber varchar(20) NOT NULL,
	email varchar(40) NOT NULL, 
	PRIMARY KEY (idSupplier)
)

CREATE TABLE Prod_Supp
(
	idSupplier integer NOT NULL REFERENCES suppliers(idSupplier),
	idProduct integer NOT NULL REFERENCES products(idProduct),
	PRIMARY KEY (idSupplier, idProduct)
)

///////////////////////////////////////////////////////////////////////////////////

CREATE OR REPLACE FUNCTION sp_iniciarSesion(IN userClient varchar(20), IN passwordClient varchar(30))RETURNS varchar AS
$BODY$
declare
	uc varchar(20);
	pc varchar(30);
	id1 int;
	id2 int;
BEGIN
SELECT clients.userClient into uc from clients;
SELECT clients.passwordClient into pc FROM clients
where uc = userClient AND pc = passwordClient;
return uc, cp;
END;
$BODY$
LANGUAGE plpgsql



CREATE OR REPLACE FUNCTION sp_cargarCategorias()
RETURNS TABLE(idCategory INTEGER, nameCategory VARCHAR(50)) AS
$$
BEGIN
 RETURN QUERY
 SELECT idCategory, nameCategory
	FROM category;
	
END; 
$$ 
LANGUAGE plpgsql;


CREATE OR REPLACE FUNCTION sp_iniciarSesion(IN userClient varchar(20), IN passwordClient varchar(30))RETURNS varchar AS
$BODY$
declare
	uc varchar(20);
	pc varchar(30);
BEGIN
SELECT "userClient" into uc from clients;
SELECT "passwordClient" into pc FROM clients
where uc = "userClient" AND pc = "passwordClient";
return uc, pc;
END;
$BODY$
LANGUAGE plpgsql

insert into products
(idProduct, nameProduct, priceProduct, descProduct, imageProduct, idCategory, status) 
VALUES 
(1, 'acer nitro' , 1200 , 'negro', 'acer-nitro.jpg', 1, 'aprovado'),
(2, 'Asus x512' , 1000 , 'rojo', 'asus-x512.jpg', 1, 'aprovado'),
(3, 'dell inspiron' , 1500 , 'blanca', 'dell-inspiron.jpg', 1, 'aprovado'),
(4, 'hp omen' , 1700 , 'b&w', 'hp-omen.jpg', 1, 'aprovado'),
(5, 'msi' , 2000 , 'rgb', 'msi.jpg', 1, 'aprovado'),
(6, 'alienware' , 2200 , 'negro', 'alienware.jpg', 1, 'aprovado')