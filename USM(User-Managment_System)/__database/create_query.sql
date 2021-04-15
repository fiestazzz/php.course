/*create database corso_formarete;*/

/*show databases;*/
use corso_formarete;
create table if not exists User
(
    userId int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstName varchar(255) NOT NULL,
    lastName varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    dataNascita DATE
);

/*insert into User(firstName , lastName , email ,dataNascita)
values('Salvatore' , 'Botta' ,'example@mail.com','1992-02-22');*/

/*Insert into User(firstName , lastName , email , birthday)
            values(:firstName,:lastName,:email,:birthday);*/

show tables;
describe User;

select * from User;



