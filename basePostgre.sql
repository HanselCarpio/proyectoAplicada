CREATE SCHEMA main
    AUTHORIZATION postgres;
	
CREATE TABLE main.clients
(
    "idClient" integer NOT NULL unique,
    "nameClient" character varying(50)[] NOT NULL,
    "numID" character varying(15)[] NOT NULL,
    "userClient" character varying(20)[] NOT NULL,
    "passwordClient" character varying(30)[] NOT NULL,
    PRIMARY KEY ("idClient", "passwordClient")
)

CREATE TABLE main.creditCard
(
	"idClient" integer NOT NULL REFERENCES main.clients("idClient"),
    "cardType" character varying(5)[] NOT NULL,
    "cardNumber" integer NOT NULL,
    cvv integer NOT NULL,
	PRIMARY KEY ("idClient")
)

CREATE TABLE main.address
(
	"idClient" integer NOT NULL REFERENCES main.clients("idClient"),
    "details" character varying(100)[] NOT NULL,
	PRIMARY KEY ("idClient")
)

CREATE TABLE main.products
(
	"idProduct" integer NOT NULL unique,
    "nameProduct" character varying(50)[] NOT NULL,
    "priceProduct" integer NOT NULL,
    "descProduct" character varying(100)[] NOT NULL,
    "imageProduct" character varying(50)[] NOT NULL,
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
	"nameCategory" character varying(30)[] NOT NULL,
	PRIMARY KEY ("idCategory")
)

CREATE TABLE main.suppliers
(
	"idSupplier" integer NOT NULL,
	"keySupplier" character varying(20)[] NOT NULL,
	"nameSupplier" character varying(30)[] NOT NULL,
	"phonoNumber" character varying(20)[] NOT NULL,
	"email" character varying(40)[] NOT NULL, 
	PRIMARY KEY ("idSupplier")
)

CREATE TABLE main.Prod_Supp
(
	"idSupplier" integer NOT NULL REFERENCES main.suppliers("idSupplier"),
	"idProduct" integer NOT NULL REFERENCES main.products("idProduct"),
	PRIMARY KEY ("idSupplier", "idProduct")
)
