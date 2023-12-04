//Enter this code into heidi//

CREATE DATABASE flower_store;
USE flower_store;

CREATE TABLE customer (
id INT AUTO_INCREMENT,
first_Name VARCHAR(60),
sur_Name VARCHAR(60),
flower_Type VARCHAR(60),
PRIMARY KEY(id)
);

INSERT INTO customer(first_Name, sur_Name, flower_Type) VALUES ('Rachel', 'Phillips', 'Roses');

CREATE TABLE bouquet (
id INT AUTO_INCREMENT,
color_of_wrapping VARCHAR(60),
number_of_flowers INT(60),
color_of_flowers VARCHAR(60),
PRIMARY KEY(id)
);

INSERT INTO bouquet(color_of_wrapping, number_of_flowers, color_of_flower) VALUES ('blue', '10', 'Pink');
