#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: user
#------------------------------------------------------------

CREATE TABLE user(
        user.id    Int  Auto_increment  NOT NULL ,
        firstName  Varchar (50) NOT NULL ,
        lastName   Varchar (50) NOT NULL ,
        adress     Varchar (250) ,
        postalCode Varchar (5) ,
        city       Varchar (50) ,
        numIdCard  Varchar (50) ,
        numPermis  Varchar (50) ,
        avatar     Varchar (200) ,
        email      Varchar (200) NOT NULL ,
        password   Varchar (200) NOT NULL ,
        archived   Bool NOT NULL
	,CONSTRAINT user_PK PRIMARY KEY (user.id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Plan
#------------------------------------------------------------

CREATE TABLE Plan(
        plan.id     Int  Auto_increment  NOT NULL ,
        designation Varchar (200) NOT NULL ,
        pricePerKm  Float NOT NULL ,
        price       Float NOT NULL
	,CONSTRAINT Plan_PK PRIMARY KEY (plan.id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Marque
#------------------------------------------------------------

CREATE TABLE Marque(
        marque.id Int  Auto_increment  NOT NULL ,
        name      Varchar (50) NOT NULL
	,CONSTRAINT Marque_PK PRIMARY KEY (marque.id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: modele
#------------------------------------------------------------

CREATE TABLE modele(
        modele.id Int  Auto_increment  NOT NULL ,
        name      Varchar (150) NOT NULL ,
        marque.id Int NOT NULL
	,CONSTRAINT modele_PK PRIMARY KEY (modele.id)

	,CONSTRAINT modele_Marque_FK FOREIGN KEY (marque.id) REFERENCES Marque(marque.id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: type
#------------------------------------------------------------

CREATE TABLE type(
        type.id     Int  Auto_increment  NOT NULL ,
        name        Varchar (50) NOT NULL ,
        pricePerDay Float NOT NULL
	,CONSTRAINT type_PK PRIMARY KEY (type.id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: vehicule
#------------------------------------------------------------

CREATE TABLE vehicule(
        vehicule.id  Int  Auto_increment  NOT NULL ,
        doors        Int NOT NULL ,
        fuelType     Varchar (50) NOT NULL ,
        consumption  Float NOT NULL ,
        mileage      Float NOT NULL ,
        power        Int NOT NULL ,
        available    Bool NOT NULL ,
        exists       Bool NOT NULL ,
        picture      Varchar (50) NOT NULL ,
        co2          Float NOT NULL ,
        modele.id    Int NOT NULL ,
        type.id      Int NOT NULL
	,CONSTRAINT vehicule_PK PRIMARY KEY (vehicule.id)

	,CONSTRAINT vehicule_modele_FK FOREIGN KEY (modele.id) REFERENCES modele(modele.id)
	,CONSTRAINT vehicule_type0_FK FOREIGN KEY (type.id) REFERENCES type(type.id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: etat
#------------------------------------------------------------

CREATE TABLE etat(
        state.id    Int  Auto_increment  NOT NULL ,
        designation Varchar (250) NOT NULL ,
        vehicule.id Int NOT NULL
	,CONSTRAINT etat_PK PRIMARY KEY (state.id)

	,CONSTRAINT etat_vehicule_FK FOREIGN KEY (vehicule.id) REFERENCES vehicule(vehicule.id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: location
#------------------------------------------------------------

CREATE TABLE location(
        location.id        Int  Auto_increment  NOT NULL ,
        startedDate        Date NOT NULL ,
        expectedReturnDate Date NOT NULL ,
        returnDate         Date ,
        started            Bool ,
        ended              Bool ,
        user.id            Int NOT NULL ,
        vehicule.id        Int NOT NULL ,
        plan.id            Int NOT NULL
	,CONSTRAINT location_PK PRIMARY KEY (location.id)

	,CONSTRAINT location_user_FK FOREIGN KEY (user.id) REFERENCES user(user.id)
	,CONSTRAINT location_vehicule0_FK FOREIGN KEY (vehicule.id) REFERENCES vehicule(vehicule.id)
	,CONSTRAINT location_Plan1_FK FOREIGN KEY (plan.id) REFERENCES Plan(plan.id)
)ENGINE=InnoDB;

