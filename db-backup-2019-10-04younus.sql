DROP TABLE IF EXISTS std;

CREATE TABLE `std` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Dept` varchar(30) NOT NULL,
  `Roll` int(6) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO std VALUES("1","abir","computer","624108"),
("2","abir","computer","624108");



