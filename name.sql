CREATE DATABASE cars;
USE cars; 

CREATE TABLE cars(
     id MEDIUMINT NOT NULL AUTO_INCREMENT,
     model CHAR(30) NOT NULL,
     Brand CHAR(30) NOT NULL,
     Year INT NOT NULL,
     Description VARCHAR(100) NOT NULL,
     PRIMARY KEY (id)
);

select * from cars;

INSERT INTO cars (id, Model, Brand, Year, Description)
    values
    ('300243',"328i","bmw","2006","sedan"),
    ('302543',"prius","Toyota","2006","van"),
    ('334483',"chrion","bugatti","2006","sports");