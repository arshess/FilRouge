#------------------------------------------------------------
#        Script MySQL_
#------------------------------------------------------------


#------------------------------------------------------------
# Table: user
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS  `user`(
        `user_id`    Int  Auto_increment  NOT NULL ,
        `firstName`  Varchar (50) NOT NULL ,
        `lastName`   Varchar (50) NOT NULL ,
        `adress`     Varchar (250) ,
        `postalCode` Varchar (5) ,
        `city`       Varchar (50) ,
        `numIdCard`  Varchar (50) ,
        `numPermis`  Varchar (50) ,
        `avatar`     Varchar (200) ,
        `email`      Varchar (200) NOT NULL ,
        `password`   Varchar (200) NOT NULL ,
        `archived`   Boolean
	,CONSTRAINT `user_PK` PRIMARY KEY (`user_id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Plan
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS  `Plan`(
        `plan_id`     Integer  Auto_increment  NOT NULL ,
        `designation` Varchar (200) NOT NULL ,
        `pricePerKm`  Float NOT NULL ,
        `price`       Float NOT NULL
	,CONSTRAINT `Plan_PK` PRIMARY KEY (`plan_id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Marque
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS   `Marque`(
        `marque_id` Integer  Auto_increment  NOT NULL ,
        `name`      Varchar (50) NOT NULL
	,CONSTRAINT `Marque_PK` PRIMARY KEY (`marque_id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: modele
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS  `modele`(
        `modele_id` Integer  Auto_increment  NOT NULL ,
        `name`      Varchar (150) NOT NULL ,
        `marque_id` Integer NOT NULL
	,CONSTRAINT `modele_PK` PRIMARY KEY (`modele_id`)

	,CONSTRAINT modele_Marque_FK FOREIGN KEY (marque_id) REFERENCES Marque(marque_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: type
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS  `type`(
        `type_id`     Integer  Auto_increment  NOT NULL ,
        `name`        Varchar (50) NOT NULL ,
        `pricePerDay` Float NOT NULL
	,CONSTRAINT `type_PK` PRIMARY KEY (`type_id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: vehicule
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS  `vehicule`(
        `vehicule_id`  Integer  Auto_increment  NOT NULL ,
        `doors`        Integer NOT NULL ,
        `fuelType`     Varchar (50) NOT NULL ,
        `consumption`  Float NOT NULL ,
        `mileage`      Float NOT NULL ,
        `power`        Integer NOT NULL ,
        `available`    Boolean NOT NULL ,
        `exist`        Boolean NOT NULL ,
        `picture`      Varchar (50) NOT NULL ,
        `modele_id`    Integer NOT NULL ,
        `type_id`      Integer NOT NULL
	,CONSTRAINT `vehicule_PK` PRIMARY KEY (`vehicule_id`)

	,CONSTRAINT `vehicule_modele_FK` FOREIGN KEY (`modele_id`) REFERENCES modele(`modele_id`)
	,CONSTRAINT `vehicule_type0_FK` FOREIGN KEY (`type_id`) REFERENCES type(`type_id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: etat
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `etat`(
        `state_id`    Integer  Auto_increment  NOT NULL ,
        `designation` Varchar (250) NOT NULL ,
        `vehicule_id` Integer NOT NULL
	,CONSTRAINT `etat_PK` PRIMARY KEY (`state_id`)

	,CONSTRAINT `etat_vehicule_FK` FOREIGN KEY (`vehicule_id`) REFERENCES vehicule(`vehicule_id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: location
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS  `location`(
        `location_id`        Integer  Auto_increment  NOT NULL ,
        `startedDate`        Date NOT NULL ,
        `expectedReturnDate` Date NOT NULL ,
        `returnDate`         Date ,
        `started`            Boolean ,
        `ended`              Boolean ,
        `user_id`            Integer NOT NULL ,
        `vehicule_id`        Integer NOT NULL ,
        `plan_id`            Integer NOT NULL
	,CONSTRAINT `location_PK` PRIMARY KEY (`location_id`)

	,CONSTRAINT `location_user_FK` FOREIGN KEY (`user_id`) REFERENCES user(`user_id`)
	,CONSTRAINT `location_vehicule0_FK` FOREIGN KEY (`vehicule_id`) REFERENCES vehicule(`vehicule_id`)
	,CONSTRAINT `location_Plan1_FK` FOREIGN KEY (`plan_id`) REFERENCES Plan(`plan_id`)
)ENGINE=InnoDB;

