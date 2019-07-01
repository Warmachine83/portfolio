DROP DATABASE IF EXISTS portfolio;
CREATE DATABASE IF NOT EXISTS portfolio;
USE db771260706;

CREATE TABLE membres (
	mbr_no INT NOT NULL auto_increment,
	Prénom VARCHAR(10) NOT NULL,
	Nom VARCHAR(10) NOT NULL,
	PRIMARY KEY (mbr_no)
);

CREATE TABLE competences (
	cpt_no INT NOT NULL auto_increment,
	competence VARCHAR(10) NOT NULL,
	lvl_cpt INT NOT NULL,
	PRIMARY KEY (cpt_no)
);

INSERT INTO membres (mbr_no,Prénom,Nom) VALUES
(1,'Romain','Mesguich');

INSERT INTO competences (cpt_no, competence, lvl_cpt) VALUES
(1, 'HTML-CSS',7),
(2, 'java', 6),
(3, 'PHP', 5),
(4, 'reseau', 8);




select competence, lvl_cpt from competences;

INSERT INTO competences (competence, lvl_cpt) VALUES
('cc', 3);

DELETE FROM competences WHERE competence="coucou";

UPDATE competences SET lvl_cpt = '3' WHERE competence = 'test';