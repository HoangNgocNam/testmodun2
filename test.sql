create database testmodun2;
create table products(
                         id int(11) auto_increment primary key ,
                         name varchar(255),
                         sectors varchar(255),
                         price int(11),
                         quantily int(5),
                         date_created date,
                         description text
);