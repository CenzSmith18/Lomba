-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table lomba.kelas_live
CREATE TABLE IF NOT EXISTS `kelas_live` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idkelas` varchar(25) NOT NULL DEFAULT '',
  `pelajaran` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table lomba.kelas_live: ~2 rows (approximately)
/*!40000 ALTER TABLE `kelas_live` DISABLE KEYS */;
INSERT INTO `kelas_live` (`id`, `idkelas`, `pelajaran`, `tanggal`, `jam`, `link`) VALUES
	(1, '11-RPL', 'PWPB', '2021-11-28', '14:00:00', 'https://zoom.us/'),
	(2, '11-RPL', 'PBO3', '2021-11-28', '10:23:22', 'https://zoom.us/');
/*!40000 ALTER TABLE `kelas_live` ENABLE KEYS */;

-- Dumping structure for table lomba.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `idkelas` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `akses` varchar(255) DEFAULT 'siswa',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table lomba.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `idkelas`, `password`, `akses`) VALUES
	(1, 'Wanda Nugraha', 'wanda.rahman38@gmail.com', NULL, 'Kocak18', NULL),
	(4, 'Wanda (Guru)', 'tatang18@gmail.com', NULL, '202cb962ac59075b964b07152d234b70', 'guru'),
	(10, 'Kopyor (siswa)', 'wanda.rahman18@gmail.com', '11-RPL', '202cb962ac59075b964b07152d234b70', 'siswa');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
