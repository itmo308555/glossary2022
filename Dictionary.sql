
Create database glossary;

use glossary;

CREATE TABLE dictionary (
  `Word` VARCHAR(100) NOT NULL,
  `Meaning` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`Word`));