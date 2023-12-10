#//database version 3//

drop database if exists flower_store;
CREATE DATABASE flower_store;
USE flower_store;

CREATE TABLE customer (
    id INT AUTO_INCREMENT,
    first_Name VARCHAR(60),
    sur_Name VARCHAR(60),
    d_o_b VARCHAR(60),
    flower_Type VARCHAR(60),
    PRIMARY KEY(id)

);

insert into customer(first_Name, sur_Name, d_o_b, flower_Type) values ('Rachel', 'Phillips', '1999-09-09', 'Roses');

insert into customer(first_Name, sur_Name, d_o_b, flower_Type) values ('Tom', 'Smith', '2002-09-07', 'Lilies');

insert into customer(first_Name, sur_Name, d_o_b, flower_Type) values ('Emily', 'Watters', '2003-09-09', 'Peonies');

CREATE TABLE bouquet(
    id INT AUTO_INCREMENT,
    color_of_wrapping VARCHAR(60),
    number_of_flowers INT,
    color_of_flowers VARCHAR(60),
    customer_id INT,
    PRIMARY KEY(id),
    FOREIGN KEY(customer_id) REFERENCES customer(id)
);

insert into bouquet(color_of_wrapping, number_of_flowers, color_of_flowers, customer_id) values ( 'red', '4', 'yellow', '1');

insert into bouquet(color_of_wrapping, number_of_flowers, color_of_flowers, customer_id) values ( 'orange', '8', 'blue', '2');

insert into bouquet(color_of_wrapping, number_of_flowers, color_of_flowers, customer_id) values ( 'green', '9', 'red', '3');
