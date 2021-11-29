

CREATE TABLE `users` (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  PRIMARY KEY(id)
);
 
INSERT INTO `users` (`username`, `email`, `password`) VALUES
('Wanda Nugraha', 'wanda.rahman38@gmail.com', 'Kocak18');


CREATE TABLE `kelas_live` (
  id int(11) NOT NULL AUTO_INCREMENT,
  idkelas int(11) NOT NULL,
  pelajaran varchar(255) NOT NULL,
  tanggal date() NOT NULL,
  jam int(255) NOT NULL,
    PRIMARY KEY(id)
);
 
INSERT INTO `kelas_live` (`idkelas`, `pelajaran`, `tanggal`, `jam`) VALUES
('RPL', 'PWPB', '2021-11-28', '14.00');
