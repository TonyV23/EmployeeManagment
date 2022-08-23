CREATE DATABASE EmployeM;

use EmployeM;

CREATE TABLE employe_table(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR (255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    age INT NOT NULL
);

insert INTO employe_table(nom,prenom,age) values('viper23','tony',22);