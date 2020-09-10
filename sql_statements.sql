-- database aanmaken
create database project1;

--tabel account aanmaken
create table account (
    id int not null auto_increment,
    email varchar(250) unique,
    password varchar(250),
    primary key(id),
    account_id int not null

);

--tabel persoon aanmaken
create table persoon (
    id int not null auto_increment,
    firstname varchar(250),
    lastname varchar(250),
    username varchar(250),
    primary key(id),
    foreign key(account_id) references account(account_id)
);