DROP TABLE IF EXISTS VacancyAllocation;
DROP TABLE IF EXISTS Vacancy;
DROP TABLE IF EXISTS Address;
DROP TABLE IF EXISTS Users;


CREATE TABLE Users(
    UserID INT NOT NULL AUTO_INCREMENT,
    CompanyName VARCHAR (40) NULL,
    Title VACRHAR (10) NOT NULL,
    FName VARCHAR(50) NOT NULL,
    SName VARCHAR(50) NOT Null,
    AccountType VARCHAR (20) NOT NULL,
    Username  varchar(50) NOT NULL,
    Password varchar(200) NULL,
    RegistrationDate datetime NOT NULL,
    Status VARCHAR (20) NOT NULL,
    Primary Key(UserID)
);

CREATE TABLE Address(
    AddressID INT NOT NULL AUTO_INCREMENT,
    UserID INT NOT NULL,
    Address VARCHAR(70) NOT NULL,
    City VARCHAR(20) NOT NULL,
    Postcode VARCHAR(40) NOT NULL,
    Primary Key(AddressID),
    Key (UserID),
    CONSTRAINT `Address_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `Users` (`UserID`)
);

CREAT TABLE Vacancy(
    VacancyID INT NOT NULL AUTO_INCREMENT,
    UserID INT NOT NULL,
    VacancyName VARCHAR (40) NOT NULL,
    Description VARCHAR (200) NOT NULL,
    ServiceSector VARCHAR (40) NOT NULL,
    Location VARCHAR (20) NOT NULL,
    StartDate datetime NOT NULL,
    Hours datetime NOT NULL,
    Salary decimal(10,2) NULL,
    Positions INT NOT NULL,
    CreationDate datetime NOT NULL,
    CreatedBy VARCHAR (50) NOT NULL,
    VacancyStatus VARCHAR (20) NOT NULL,
    NumberOfApplicants  INT NULL,
    Primary Key (VacancyID),
    Key (UserID),
    CONSTRAINT `Vacancy_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `Users` (`UserID`)
);

CREATE TABLE VacancyAllocation(
    AllocationID INT NOT NULL AUTO_INCREMENT,
    UserID INT NOT NULL,
    VacancyID INT NOT NULL,
    AllocationDate datetime NULL,
    AllocatedBy varchar (100) NULL,
    Primary Key(AllocationID),
    Key(UserID), 
    Key(VacancyID),
    CONSTRAINT `Vacancy_ibfk_2` FOREIGN KEY (`vacancyID`) REFERENCES `Vacancy` (`VacancyID`),
    CONSTRAINT `User_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `Users` (`UserID`)
);
    
