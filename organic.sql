drop database if exists conversion;
create database conversion;
use conversion;

create table input(
input varchar(50),
output varchar(50)
);

insert into input values(
'input','output');

create table conversion(
input varchar(50),
comp1 varchar(50),
ele varchar(50),
comp2 varchar(50),
output varchar(50)
);

insert into conversion values
("CH3CH2Br","KOH","CH2CH2","Ni,H2","CH3CH3");
