

CREATE TABLE `users` (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  PRIMARY KEY(id)
);
 
INSERT INTO `users` (`username`, `email`, `password`) VALUES
('Wanda Nugraha', 'wanda.rahman38@gmail.com', 'Kocak18');
