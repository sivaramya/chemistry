drop database if exists conversion;
CREATE DATABASE conversion CHARACTER SET utf8;
use conversion;

create table input(
input varchar(50),
output varchar(50)
);

insert into input values(
'reactant','product');

create table input1(
input varchar(100),
input1 varchar(100)
);

create table output(
output varchar(100),
output1 varchar(100)
);

create table conversion(
input varchar(50),
input1 varchar(50),
comp1 varchar(50),
ele varchar(50),
comp2 varchar(50),
output1 varchar(50),
output varchar(50)
);

create table conversion1(
input varchar(50),
input1 varchar(50),
comp1 varchar(50),
output1 varchar(50),
output varchar(50)
);

create table conversion2(
input varchar(100),
input1 varchar(100),
comp1 varchar(50),
ele varchar(50),
comp2 varchar(50),
ele1 varchar(50),
comp3 varchar(100),
output1 varchar(100),
output varchar(100)
);

create table conversion3(
input varchar(100),
input1 varchar(100),
comp1 varchar(100),
ele varchar(50),
comp2 varchar(50),
ele1 varchar(50),
comp3 varchar(50),
ele2 varchar(50),
comp4 varchar(100),
output1 varchar(100),
output varchar(100)
);

create table conversion4(
input varchar(100),
input1 varchar(100),
comp1 varchar(100),
ele varchar(50),
comp2 varchar(50),
ele1 varchar(50),
comp3 varchar(50),
ele2 varchar(50),
comp4 varchar(100),
ele3 varchar(50),
comp5 varchar(100),
output1 varchar(100),
output varchar(100)
);

insert into input1 values
("CH3CH2Br","CH<sub>3</sub>CH<sub>2</sub>Br"),
("CH3CH2OH","CH<sub>3</sub>CH<sub>2</sub>OH"),
("CH3CH2Cl","CH<sub>3</sub>CH<sub>2</sub>Cl"),
("CH2CH2","CH<sub>2</sub>CH<sub>2</sub>"),
("CH3CHCH2","CH<sub>3</sub>CHCH<sub>2</sub>"),
("CH3CHBrCH2Br","CH<sub>3</sub>CHBrCH<sub>2</sub>Br"),
("CH3CHClCH3","CH<sub>3</sub>CHClCH<sub>3</sub>"),
("CH3CH2CHCH2","CH<sub>3</sub>CH<sub>2</sub>CHCH<sub>2</sub>"),
("CH3CHBrCH3","CH<sub>3</sub>CHBrCH<sub>3</sub>"),
("CH3CH2CH2OH","CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>OH"),
("CH3CH2CHBr2","CH<sub>3</sub>CH<sub>2</sub>CHBr<sub>2</sub>"),
("CH3CH2CH2Cl","CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>Cl"),
("CH3CHOHCH3","CH<sub>3</sub>CHOHCH<sub>3</sub>"),
("CH3CH2CHBrCH3","CH<sub>3</sub>CH<sub>2</sub>CHBrCH<sub>3</sub>"),
("CH3CH2CH2CH2OH","CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>CH<sub>2</sub>OH");

insert into output values
("CH2CH2","CH<sub>2</sub>CH<sub>2</sub>"),
("CH3CH3","CH<sub>3</sub>CH<sub>3</sub>"),
("CH2OHCH2OH","CH<sub>2</sub>OHCH<sub>2</sub>OH"),
("CH2BrCH2Br","CH<sub>2</sub>BrCH<sub>2</sub>Br"),
("CH3CHOHCH3","CH<sub>3</sub>CHOHCH<sub>3</sub>"),
("CH3CH2CH2Br","CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>Br"),
("CH3CHCHCH3","CH<sub>3</sub>CHCHCH<sub>3</sub>"),
("CH3CCH","CH<sub>3</sub>CCH"),
("CH3CHCH2","CH<sub>3</sub>CHCH<sub>2</sub>"),
("CHCH","CHCH"),
("CH3CH2CH2Br","CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>Br"),
("CH3CBr2CH3","CH<sub>3</sub>CBr<sub>2</sub>CH<sub>3</sub>"),
("CH3CHO","CH<sub>3</sub>CHO"),
("CH3COCH3","CH<sub>3</sub>COCH<sub>3</sub>"),
("CH3CHBr2","CH<sub>3</sub>CHBr<sub>2</sub>"),
("CH3COCH2CH3","CH<sub>3</sub>COCH<sub>2</sub>CH<sub>3</sub>"),
("CH3CHOHCHOHCH3","CH<sub>3</sub>CHOHCHOHCH<sub>3</sub>");

insert into conversion1 values
("CH3CH2Br","CH<sub>3</sub>CH<sub>2</sub>Br","ROH/KOH","CH<sub>2</sub>CH<sub>2</sub>","CH2CH2"),
("CH3CH2OH","CH<sub>3</sub>CH<sub>2</sub>OH","Al<sub>2</sub>O<sub>3</sub>,heat","CH<sub>2</sub>CH<sub>2</sub>","CH2CH2"),
("CH3CH2Cl","CH<sub>3</sub>CH<sub>2</sub>Cl","ROH/KOH","CH<sub>2</sub>CH<sub>2</sub>","CH2CH2"),
("CH2CH2","CH<sub>2</sub>CH<sub>2</sub>","Ni,H<sub>2</sub>","CH<sub>3</sub>CH<sub>3</sub>","CH3CH3"),
("CH2CH2","CH<sub>2</sub>CH<sub>2</sub>","OH-,KMnO<sub>4</sub>(aq)","CH<sub>2</sub>OHCH<sub>2</sub>OH","CH2OHCH2OH"),
("CH2CH2","CH<sub>2</sub>CH<sub>2</sub>","Br<sub>2</sub>/CCl<sub>4</sub>","CH<sub>2</sub>BrCH<sub>2</sub>Br","CH2BrCH2Br"),
("CH3CHCH2","CH<sub>3</sub>CHCH<sub>2</sub>","dH<sub>2</sub>SO<sub>4</sub>","CH<sub>3</sub>CHOHCH<sub>3</sub>","CH3CHOHCH3"),
("CH3CHCH2","CH<sub>3</sub>CHCH<sub>2</sub>","HBr/H<sub>2</sub>O<sub>2</sub>","CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>Br","CH3CH2CH2Br"),
("CH3CHBrCH2Br","CH<sub>3</sub>CHBrCH<sub>2</sub>Br","ROH/KOH","CH<sub>3</sub>CCH","CH3CCH"),
("CH3CHBrCH3","CH<sub>3</sub>CHBrCH<sub>3</sub>","ROH/KOH","CH<sub>3</sub>CHCH<sub>2</sub>","CH3CHCH2"),
("CH3CHBrCH3","CH<sub>3</sub>CHBrCH<sub>3</sub>","KOH<sub>(aq)</sub>","CH<sub>3</sub>CHOHCH<sub>3</sub>","CH3CHOHCH3"),
("CH3CHClCH3","CH<sub>3</sub>CHClCH<sub>3</sub>","ROH/KOH","CH<sub>3</sub>CHCH<sub>2</sub>","CH3CHCH2"),
("CH3CHClCH3","CH<sub>3</sub>CHClCH<sub>3</sub>","KOH<sub>(aq)</sub>","CH<sub>3</sub>CHOHCH<sub>3</sub>","CH3CHOHCH3");

insert into conversion values
("CH3CH2Br","CH<sub>3</sub>CH<sub>2</sub>Br","ROH/KOH","CH<sub>2</sub>CH<sub>2</sub>","Ni,H<sub>2</sub>","CH<sub>3</sub>CH<sub>3</sub>","CH3CH3"),
("CH3CH2Br","CH<sub>3</sub>CH<sub>2</sub>Br","ROH/KOH","CH<sub>2</sub>CH<sub>2</sub>","OH-,KMnO<sub>4(aq)</sub>","CH<sub>2</sub>OHCH<sub>2</sub>OH","CH2OHCH2OH"),
("CH3CH2Br","CH<sub>3</sub>CH<sub>2</sub>Br","ROH/KOH","CH<sub>2</sub>CH<sub>2</sub>","Br<sub>2</sub>/CCl<sub>4</sub>","CH<sub>2</sub>BrCH<sub>2</sub>Br","CH2BrCH2Br"),
("CH3CH2OH","CH<sub>3</sub>CH<sub>2</sub>OH","Al<sub>2</sub>O<sub>3</sub>,heat","CH<sub>2</sub>CH<sub>2</sub>","Ni,H<sub>2</sub>","CH<sub>3</sub>CH<sub>3</sub>","CH3CH3"),
("CH3CH2OH","CH<sub>3</sub>CH<sub>2</sub>OH","Al<sub>2</sub>O<sub>3</sub>,heat","CH<sub>2</sub>CH<sub>2</sub>","OH-,KMnO<sub>4(aq)</sub>","CH<sub>2</sub>OHCH<sub>2</sub>OH","CH2OHCH2OH"),
("CH3CH2OH","CH<sub>3</sub>CH<sub>2</sub>OH","Al<sub>2</sub>O<sub>3</sub>,heat","CH<sub>2</sub>CH<sub>2</sub>","Br<sub>2</sub>/CCl<sub>4</sub>","CH<sub>2</sub>BrCH<sub>2</sub>Br","CH2BrCH2Br"),
("CH3CH2Cl","CH<sub>3</sub>CH<sub>2</sub>Cl","ROH/KOH","CH<sub>2</sub>CH<sub>2</sub>","Ni,H<sub>2</sub>","CH<sub>3</sub>CH<sub>3</sub>","CH3CH3"),
("CH3CH2Cl","CH<sub>3</sub>CH<sub>2</sub>Cl","ROH/KOH","CH<sub>2</sub>CH<sub>2</sub>","Br<sub>2</sub>/CCl<sub>4</sub>","CH<sub>2</sub>BrCH<sub>2</sub>Br","CH2BrCH2Br"),
("CH3CH2Cl","CH<sub>3</sub>CH<sub>2</sub>Cl","ROH/KOH","CH<sub>2</sub>CH<sub>2</sub>","OH-,KMnO<sub>4(aq)</sub>","CH<sub>2</sub>OHCH<sub>2</sub>OH","CH2OHCH2OH"),
("CH3CHClCH3","CH<sub>3</sub>CHClCH<sub>3</sub>","ROH/KOH","CH<sub>3</sub>CHCH<sub>2</sub>","dH<sub>2</sub>SO<sub>4</sub>","CH<sub>3</sub>CHOHCH<sub>3</sub>","CH3CHOHCH3"),
("CH3CHClCH3","CH<sub>3</sub>CHClCH<sub>3</sub>","ROH/KOH","CH<sub>3</sub>CHCH<sub>2</sub>","HBr/H<sub>2</sub>O<sub>2</sub>","CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>Br","CH3CH2CH2Br"),
("CH3CH2CHCH2","CH<sub>3</sub>CH<sub>2</sub>CHCH<sub>2</sub>","dH<sub>2</sub>SO<sub>4</sub>","CH<sub>3</sub>CH<sub>2</sub>CHOHCH<sub>3</sub>","CH<sub>2</sub>SO<sub>4</sub>","CH<sub>3</sub>CHCHCH<sub>3</sub>","CH3CHCHCH3"),
("CH3CHBrCH3","CH<sub>3</sub>CHBrCH<sub>3</sub>","ROH/KOH","CH<sub>3</sub>CHCH<sub>2</sub>","HBr/H<sub>2</sub>O<sub>2</sub>","CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>Br","CH3CH2CH2Br"),
("CH3CHBrCH3","CH<sub>3</sub>CHBrCH<sub>3</sub>","ROH/KOH","CH<sub>3</sub>CHCH<sub>2</sub>","dH<sub>2</sub>SO<sub>4</sub>","CH<sub>3</sub>CHOHCH<sub>3</sub>","CH3CHOHCH3"),
("CH2BrCH2Br","CH<sub>2</sub>BrCH<sub>2</sub>Br","Mg dust,dry ether","CH<sub>2</sub>MgBrCH<sub>2</sub>MgBr","H<sub>2</sub>O","CH<sub>3</sub>CH<sub>3</sub>","CH3CH3"),
("CH3CH2CHCH2","CH<sub>3</sub>CH<sub>2</sub>CHCH<sub>2</sub>","dH<sub>2</sub>SO<sub>4</sub>","CH<sub>3</sub>CH<sub>2</sub>OHCHCH<sub>3</sub>","heat Al<sub>2</sub>O<sub>3</sub>","CH<sub>3</sub>CHCHCH<sub>3</sub>","CH3CHCHCH3"),
("CH3CHCH2","CH<sub>3</sub>CHCH<sub>2</sub>","Br<sub>2</sub>","CH<sub>3</sub>CHBrCH<sub>2</sub>Br","ROH/KOH","CH<sub>3</sub>CCH","CH3CCH"),
("CH2CH2","CH<sub>2</sub>CH<sub>2</sub>","Br<sub>2</sub>","CH<sub>2</sub>BrCH<sub>2</sub>Br","ROH/KOH","CHCH","CHCH"),
("CH3CHBrCH2Br","CH<sub>3</sub>CHBrCH<sub>2</sub>Br","ROH/KOH","CH<sub>3</sub>CCH","Pd/H<sub>2</sub>","CH<sub>3</sub>CHCH<sub>2</sub>","CH3CHCH2"),
("CH3CH2CH2OH","CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>OH","heat Al<sub>2</sub>O<sub>3</sub>","CH<sub>3</sub>CHCH<sub>2</sub>","HBr/H<sub>2</sub>O<sub>2</sub>","CH<sub>2</sub>CH<sub>2</sub>CH<sub>2</sub>Br","CH2CH2CH2Br"),
("CH3CH2CHBr2","CH<sub>3</sub>CH<sub>2</sub>CHBr<sub>2</sub>","ROH/KOH","CH<sub>3</sub>CCH","H<sub>2</sub>/Pd","CH<sub>3</sub>CHCH<sub>2</sub>","CH3CHCH2"),
("CH3CHBrCH2Br","CH<sub>3</sub>CHBrCH<sub>2</sub>Br","ROH/KOH","CH<sub>3</sub>CCH","HBr","CH<sub>3</sub>CBr<sub>2</sub>CH<sub>3</sub>","CH3CBr2CH3"),
("CH3CHBrCH2Br","CH<sub>3</sub>CHBrCH<sub>2</sub>Br","ROH/KOH","CH<sub>3</sub>CCH","OH-,KMnO<sub>4(aq)</sub>","CH<sub>3</sub>CHOHCH<sub>3</sub>","CH3CHOHCH3");


insert into conversion2 values
("CH3CHCH2","CH<sub>3</sub>CHCH<sub>2</sub>","Br<sub>2</sub>","CH<sub>3</sub>CHBrCH<sub>2</sub>Br","ROH/KOH","CH<sub>3</sub>CCH","HBr","CH<sub>3</sub>CBr<sub>2</sub>CH<sub>3</sub>","CH3CBr2CH3"),
("CH3CH2Br","CH<sub>3</sub>CH<sub>2</sub>Br","ROH/KOH","CH<sub>2</sub>CH<sub>2</sub>","Br<sub>2</sub>/CCl<sub>4</sub>","CH<sub>2</sub>BrCH<sub>2</sub>Br","ROH/KOH","CHCH","CHCH"),
("CH3CH2Cl","CH<sub>3</sub>CH<sub>2</sub>Br","ROH/KOH","CH<sub>2</sub>CH<sub>2</sub>","Br<sub>2</sub>/CCl<sub>4</sub>","CH<sub>2</sub>BrCH<sub>2</sub>Br","ROH/KOH","CHCH","CHCH"),
("CH3CH2OH","CH<sub>3</sub>CH<sub>2</sub>OH","Al<sub>2</sub>O<sub>3</sub>,heat","CH<sub>2</sub>CH<sub>2</sub>","Br<sub>2</sub>/CCl<sub>4</sub>","CH<sub>2</sub>BrCH<sub>2</sub>Br","ROH/KOH","CHCH","CHCH"),
("CH3CHBrCH3","CH<sub>3</sub>CHBrCH<sub>3</sub>","ROH/KOH","CH<sub>3</sub>CHCH<sub>2</sub>","Br<sub>2</sub>","CH<sub>3</sub>CHBrCH<sub>2</sub>Br","ROH/KOH","CH<sub>3</sub>CCH","CH3CCH"),
("CH3CHClCH3","CH<sub>3</sub>CHClCH<sub>3</sub>","ROH/KOH","CH<sub>3</sub>CHCH<sub>2</sub>","Br<sub>2</sub>","CH<sub>3</sub>CHBrCH<sub>2</sub>Br","ROH/KOH","CH<sub>3</sub>CCH","CH3CCH");

insert into conversion3 values
("CH3CH2OH","CH<sub>3</sub>CH<sub>2</sub>OH","heat Al<sub>2</sub>O<sub>3</sub>","CH<sub>2</sub>CH<sub>2</sub>","Br<sub>2</sub>","CH<sub>2</sub>BrCH<sub>2</sub>Br","ROH/KOH","CHCH","dH<sub>2</sub>SO<sub>4</sub> Hg<sub>2+</sub> ","CH<sub>3</sub>CHO","CH3CHO"),
("CH3CH2CH2Cl","CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>Cl","ROH/KOH","CH<sub>3</sub>CHCH<sub>2</sub>","Br<sub>2</sub>","CH<sub>3</sub>CHBrCH<sub>2</sub>Br","ROH/KOH","CH<sub>3</sub>CCH","dH<sub>2</sub>SO<sub>4</sub> Hg<sub>2+</sub> ","CH<sub>3</sub>COCH<sub>3</sub>","CH3COCH3"),
("CH3CH2Br","CH<sub>3</sub>CH<sub>2</sub>Br","ROH/KOH","CH<sub>2</sub>CH<sub>2</sub>","Br<sub>2</sub>","CH<sub>2</sub>BrCH<sub>2</sub>Br","ROH/KOH","CHCH","HBr","CH<sub>3</sub>CHBr<sub>2</sub>","CH3CHBr2"),
("CH3CH2Cl","CH<sub>3</sub>CH<sub>2</sub>Cl","ROH/KOH","CH<sub>2</sub>CH<sub>2</sub>","Br<sub>2</sub>","CH<sub>2</sub>BrCH<sub>2</sub>Br","ROH/KOH","CHCH","HBr","CH<sub>3</sub>CHBr<sub>2</sub>","CH3CHBr2"),
("CH3CH2CHBrCH3","CH<sub>3</sub>CH<sub>2</sub>CHBrCH<sub>3</sub>","ROH/KOH","CH<sub>3</sub>CHCHCH<sub>3</sub>","Br<sub>2</sub>","CH<sub>3</sub>CHBrCHBrCH<sub>3</sub>","ROH/KOH","CH<sub>3</sub>CCCH<sub>3</sub>","dH<sub>2</sub>SO<sub>4</sub> Hg<sub>2+</sub> ","CH<sub>3</sub>COCH<sub>2</sub>CH<sub>3</sub>","CH3COCH2CH3"),
("CH3CH2CH2CH2OH","CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>CH<sub>2</sub>OH","CH<sub>2</sub>SO<sub>4</sub>","CH<sub>3</sub>CH<sub>2</sub>CHCH<sub>2</sub>","HBr","CH<sub>3</sub>CH<sub>2</sub>CHBrCH<sub>3</sub>","ROH/KOH","CH<sub>3</sub>CHCHCH<sub>3</sub>","OH-,KMnO<sub>4(aq)</sub>","CH<sub>3</sub>CHOHCHOHCH<sub>3</sub>","CH3CHOHCHOHCH3"),
("CH3CH2Br","CH<sub>3</sub>CH<sub>2</sub>Br","RCN","CH<sub>3</sub>CH<sub>2</sub>CN","H<sub>3</sub>O<sup>+</sup>","CH<sub>3</sub>CH<sub>2</sub>COOH","FeBr<sub>3</sub>","CH<sub>3</sub>CH<sub>2</sub>COBr","LiAlH<sub>4</sub>, H<sup>+</sup>/H<sub>2</sub>O","CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>Br","CH3CH2CH2Br"),
("CH3CH2Cl","CH<sub>3</sub>CH<sub>2</sub>Cl","RCN","CH<sub>3</sub>CH<sub>2</sub>CN","H<sub>3</sub>O<sup>+</sup>","CH<sub>3</sub>CH<sub>2</sub>COOH","FeBr<sub>3</sub>","CH<sub>3</sub>CH<sub>2</sub>COBr","LiAlH<sub>4</sub>, H<sup>+</sup>/H<sub>2</sub>O","CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>Br","CH3CH2CH2Br"),
("CH3CH2CH2OH","CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>OH","cH<sub>2</sub>SO<sub>4</sub>","CH<sub>3</sub>CHCH<sub>2</sub>","Br<sub>2</sub>/CCl<sub>4</sub>","CH<sub>3</sub>CHBrCH<sub>2</sub>Br","ROH/KOH","CH<sub>3</sub>CCH","HBr","CH<sub>3</sub>CBr<sub>2</sub>CH<sub>3</sub>","CH3CBr2CH3"),
("CH3CHBrCH3","CH<sub>3</sub>CHBrCH<sub>3</sub>","ROH/KOH","CH<sub>3</sub>CHCH<sub>2</sub>","Br<sub>2</sub>","CH<sub>3</sub>CHBrCH<sub>2</sub>Br","ROH/KOH","CH<sub>3</sub>CCH","HBr","CH<sub>3</sub>CBr<sub>2</sub>CH<sub>3</sub>","CH3CBr2CH3"),
("CH3CHClCH3","CH<sub>3</sub>CHClCH<sub>3</sub>","ROH/KOH","CH<sub>3</sub>CHCH<sub>2</sub>","Br<sub>2</sub>","CH<sub>3</sub>CHBrCH<sub>2</sub>Br","ROH/KOH","CH<sub>3</sub>CCH","HBr","CH<sub>3</sub>CBr<sub>2</sub>CH<sub>3</sub>","CH3CBr2CH3"),
('CH3CH2Br', 'CH<sub>3</sub>CH<sub>2</sub>Cl', 'RCN', 'CH<sub>3</sub>CH<sub>2</sub>CN', 'H<sub>3</sub>O<sup>+</sup>', 'CH<sub>3</sub>CH<sub>2</sub>COOH', 'LiAlH<sub>4</sub>, H<sup>+</sup>/H<sub>2</sub>O', 'CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>OH', 'conH<sub>2</sub>SO<sub>4</sub> (<sub>1</sub><sub>7</sub><sub>0</sub>C)', 'CH<sub>3</sub>CHCH<sub>2</sub>','CH3CHCH2'),
('CH3CH2Cl', 'CH<sub>3</sub>CH<sub>2</sub>Cl', 'RCN', 'CH<sub>3</sub>CH<sub>2</sub>CN', 'H<sub>3</sub>O<sup>+</sup>', 'CH<sub>3</sub>CH<sub>2</sub>COOH', 'LiAlH<sub>4</sub>, H<sup>+</sup>/H<sub>2</sub>O', 'CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>OH', 'conH<sub>2</sub>SO<sub>4</sub> (<sub>1</sub><sub>7</sub><sub>0</sub>C)', 'CH<sub>3</sub>CHCH<sub>2</sub>','CH3CHCH2');



INSERT INTO conversion4 VALUES
('CH3CH2Cl', 'CH<sub>3</sub>CH<sub>2</sub>Cl', 'RCN', 'CH<sub>3</sub>CH<sub>2</sub>CN', 'H<sub>3</sub>O<sup>+</sup>', 'CH<sub>3</sub>CH<sub>2</sub>COOH', 'LiAlH<sub>4</sub>, H<sup>+</sup>/H<sub>2</sub>O', 'CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>OH', 'conH<sub>2</sub>SO<sub>4</sub> ', 'CH<sub>3</sub>CHCH<sub>2</sub>', 'HBr/H<sub>2</sub>O<sub>2</sub>', 'CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>Br', 'CH3CH2CH2Br');
