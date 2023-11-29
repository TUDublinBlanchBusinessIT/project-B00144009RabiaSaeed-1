//Enter this code into heidi//

CREATE DATABASE flower_store;
USE flower_store;

CREATE TABLE flower (
id INT AUTO_INCREMENT,
first_Name VARCHAR(60),
sur_Name VARCHAR(60),
flower_Type VARCHAR(60),
PRIMARY KEY(id)
);

INSERT INTO flower(first_Name, sur_Name, flower_Type) VALUES ('Rachel', 'Phillips', "Roses");
