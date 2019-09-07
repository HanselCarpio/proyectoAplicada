CREATE SCHEMA main
    AUTHORIZATION postgres;
	
CREATE TABLE main.clients
(
    "idClient" integer NOT NULL unique,
    "nameClient" varchar(50) NOT NULL,
    "numID" varchar(15) NOT NULL,
    "userClient" varchar(20) NOT NULL,
    "passwordClient" varchar(30) NOT NULL,
    PRIMARY KEY ("idClient", "passwordClient")
)

CREATE TABLE main.creditCard
(
	"idClient" integer NOT NULL REFERENCES main.clients("idClient"),
    "cardType" varchar(5) NOT NULL,
    "cardNumber" integer NOT NULL,
    cvv integer NOT NULL,
	PRIMARY KEY ("idClient")
)

CREATE TABLE main.address
(
	"idClient" integer NOT NULL REFERENCES main.clients("idClient"),
    "details" varchar(100) NOT NULL,
	PRIMARY KEY ("idClient")
)

CREATE TABLE main.products
(
	"idProduct" integer NOT NULL unique,
    "nameProduct" varchar(50) NOT NULL,
    "priceProduct" integer NOT NULL,
    "descProduct" varchar(100) NOT NULL,
    "imageProduct" varchar(50) NOT NULL,
	"idCategory" integer NOT NULL REFERENCES main.category("idCategory"),
	"status" char not null check(status= '[S]' or status='[s]' or status = '[n]' or status='[N]');
    PRIMARY KEY ("idProduct", "idCategory")
)

CREATE TABLE main.shopping
(
	"idClient" integer NOT NULL REFERENCES main.clients("idClient"),
	"idProduct" integer NOT NULL REFERENCES main.products("idProduct"),
	PRIMARY KEY ("idClient", "idProduct")
)

CREATE TABLE main.visits
(
	"idClient" integer NOT NULL REFERENCES main.clients("idClient"),
	"idProduct" integer NOT NULL REFERENCES main.products("idProduct"),
	"numVisits" integer NOT NULL, 
	PRIMARY KEY ("idClient", "idProduct")
)

CREATE TABLE main.category
(
	"idCategory" integer NOT NULL,
	"nameCategory" varchar(30) NOT NULL,
	PRIMARY KEY ("idCategory")
)

CREATE TABLE main.suppliers
(
	"idSupplier" integer NOT NULL,
	"keySupplier" varchar(20) NOT NULL,
	"nameSupplier" varchar(30) NOT NULL,
	"phonoNumber" varchar(20) NOT NULL,
	"email" varchar(40) NOT NULL, 
	PRIMARY KEY ("idSupplier")
)

CREATE TABLE main.Prod_Supp
(
	"idSupplier" integer NOT NULL REFERENCES main.suppliers("idSupplier"),
	"idProduct" integer NOT NULL REFERENCES main.products("idProduct"),
	PRIMARY KEY ("idSupplier", "idProduct")
)
