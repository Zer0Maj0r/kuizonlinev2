CREATE TABLE pengguna (
idpengguna varchar(12) PRIMARY KEY NOT NULL,
password varchar(10) NOT NULL,
nama varchar(50) NOT NULL,
jantina varchar(10) NOT NULL,
aras varchar(11) NOT NULL
);

INSERT INTO pengguna
(idpengguna, password, nama, jantina, aras)
VALUES
('123456789012', '1111', 'PENTADBIR SISTEM', 'LELAKI', 'ADMIN');


CREATE TABLE topik (
idtopik int AUTO_INCREMENT PRIMARY KEY NOT NULL,
topik varchar(30) NOT NULL,
markah int(11) NOT NULL
);

CREATE TABLE soalan (
idsoalan int AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom_soalan int(11) NOT NULL,
soalan text NOT NULL,
gambarajah varchar(20) NOT NULL,
jenis varchar(10) NOT NULL,
idtopik int(10) NOT NULL
);

CREATE TABLE pilihan (
idpilihan int AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom_soalan int(10) NOT NULL,
jawapan varchar(20) NOT NULL,
pilihan_jawapan text NOT NULL,
idsoalan int(11) NOT NULL
);

CREATE TABLE perekodan (
idperekodan int AUTO_INCREMENT PRIMARY KEY NOT NULL,
idpengguna varchar(12) NOT NULL,
idtopik int(10) NOT NULL,
jenis int(10) NOT NULL,
skor varchar(5) NOT NULL,
catatan_masa timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);