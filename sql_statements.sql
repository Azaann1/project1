-- database aanmaken
create database project1;

--tabel account aanmaken
create table account (
    id int not null auto_increment,
    email varchar(250) unique not null,
    password varchar(250) not null,
    primary key(id)

);

--tabel persoon aanmaken
create table persoon (
    id int not null auto_increment,
    firstname varchar(250) not null,
    lastname varchar(250) not null,
    username varchar(250) not null,
    primary key(id),
    foreign key(account_id) references account(id)
);