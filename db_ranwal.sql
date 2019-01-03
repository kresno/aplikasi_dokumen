/*
SQLyog Enterprise v12.4.3 (64 bit)
MySQL - 10.1.24-MariaDB : Database - simencrang2018_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
-- CREATE DATABASE /*!32312 IF NOT EXISTS*/`simencrang2018_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

-- USE `simencrang2018_db`;

/*Table structure for table `akses_bidang` */

DROP TABLE IF EXISTS `akses_bidang`;

CREATE TABLE `akses_bidang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_id` varchar(3) NOT NULL,
  `opd_id` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `akses_bidang` */

insert  into `akses_bidang`(`id`,`level_id`,`opd_id`) values 
(1,'5','14'),
(2,'5','15'),
(3,'5','18'),
(4,'5','19'),
(5,'5','26'),
(6,'5','28'),
(7,'5','29'),
(8,'5','31'),
(9,'5','32'),
(10,'5','33');

/*Table structure for table `bab` */

DROP TABLE IF EXISTS `bab`;

CREATE TABLE `bab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` varchar(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `template` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `bab` */

insert  into `bab`(`id`,`doc_id`,`nama`,`template`) values 
(1,'1','BAB I','public/template/ranwal/bab-i.docx'),
(2,'1','BAB II','public/template/ranwal/bab-ii.docx'),
(3,'1','BAB III','public/template/ranwal/bab-iii.docx'),
(4,'1','BAB IV','public/template/ranwal/bab-iv.docx'),
(5,'1','BAB V','public/template/ranwal/bab-v.docx');

/*Table structure for table `document` */

DROP TABLE IF EXISTS `document`;

CREATE TABLE `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `document` */

insert  into `document`(`id`,`nama`) values 
(1,'RKPD Murni'),
(2,'RKPD Perubahan'),
(3,'Rancangan Awal'),
(4,'Rancangan Renja');

/*Table structure for table `history` */

DROP TABLE IF EXISTS `history`;

CREATE TABLE `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pengguna` varchar(50) NOT NULL,
  `aktivitas` varchar(150) NOT NULL,
  `waktu` datetime NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=latin1;

/*Data for the table `history` */

insert  into `history`(`id`,`pengguna`,`aktivitas`,`waktu`,`address`) values 
(67,'dinaspu@mail.com','Login ke Simencrang','2018-08-13 09:59:00','182.253.163.52'),
(68,'dinaspu@mail.com','Login ke Simencrang','2018-08-13 10:01:14','182.253.163.52'),
(69,'dishub@mail.com','Login ke Simencrang','2018-08-13 10:02:25','182.253.163.52'),
(70,'dishub@mail.com','Login ke Simencrang','2018-08-13 12:49:36','182.253.163.49'),
(71,'admin','Login ke Simencrang','2018-08-13 13:37:49','36.80.88.5'),
(72,'parakansalak@mail.com','Login ke Simencrang','2018-08-14 06:02:22','36.80.88.5'),
(73,'cisolok@mail.com','Login ke Simencrang','2018-08-14 06:37:15','36.80.88.5'),
(74,'sukalarang@mail.com','Login ke Simencrang','2018-08-14 07:59:17','36.80.18.163'),
(75,'cimanggu@mail.com','Login ke Simencrang','2018-08-14 08:17:08','120.188.94.56'),
(76,'cisaat@mail.com','Login ke Simencrang','2018-08-14 12:05:50','125.163.55.178'),
(77,'cisolok@mail.com','Login ke Simencrang','2018-08-14 12:29:43','180.253.168.64'),
(78,'rspalabuhan@mail.com','Login ke Simencrang','2018-08-14 12:51:56','36.80.7.140'),
(79,'cikakak@mail.com','Login ke Simencrang','2018-08-14 12:56:45','36.72.146.212'),
(80,'dppkb@mail.com','Login ke Simencrang','2018-08-14 13:20:40','116.206.15.100'),
(81,'parungkuda@mail.com','Login ke Simencrang','2018-08-14 13:22:00','36.71.233.115'),
(82,'simpenan@mail.com','Login ke Simencrang','2018-08-14 13:29:36','36.80.43.56'),
(83,'dppkb@mail.com','Login ke Simencrang','2018-08-14 13:29:44','180.253.168.64'),
(84,'sekarwangi@mail.com','Login ke Simencrang','2018-08-14 13:30:04','180.245.90.138'),
(85,'sekredprd@mail.com','Login ke Simencrang','2018-08-14 13:39:55','36.72.166.93'),
(86,'disdukcapil@mail.com','Login ke Simencrang','2018-08-14 13:56:24','180.253.241.97'),
(87,'cidahu@mail.com','Login ke Simencrang','2018-08-14 13:59:51','180.245.243.119'),
(88,'parungkuda@mail.com','Login ke Simencrang','2018-08-14 14:11:07','185.125.231.240'),
(89,'caringin@mail.com','Login ke Simencrang','2018-08-14 15:26:51','36.71.235.215'),
(90,'kadudampit@mail.com','Login ke Simencrang','2018-08-14 20:43:51','114.5.144.161'),
(91,'dislutkan@mail.com','Login ke Simencrang','2018-08-14 21:44:51','36.80.11.5'),
(92,'disdukcapil@mail.com','Login ke Simencrang','2018-08-15 05:13:13','36.71.232.18'),
(93,'disdukcapil@mail.com','Login ke Simencrang','2018-08-15 07:06:33','180.253.241.97'),
(94,'dppkb@mail.com','Login ke Simencrang','2018-08-15 08:03:37','61.94.142.21'),
(95,'rspalabuhan@mail.com','Login ke Simencrang','2018-08-15 08:27:36','36.79.253.248'),
(96,'ciambar@mail.com','Login ke Simencrang','2018-08-15 08:47:56','36.71.233.44'),
(97,'disbudpora@mail.com','Login ke Simencrang','2018-08-15 09:24:26','36.80.17.176'),
(98,'perizinan@mail.com','Login ke Simencrang','2018-08-15 09:55:39','118.96.244.252'),
(99,'kadudampit@mail.com','Login ke Simencrang','2018-08-15 10:19:54','36.71.232.172'),
(100,'disbudpora@mail.com','Login ke Simencrang','2018-08-15 11:01:59','36.80.17.176'),
(101,'disbudpora@mail.com','Login ke Simencrang','2018-08-15 12:04:11','36.80.17.176'),
(102,'purabaya@mail.com','Login ke Simencrang','2018-08-15 12:05:10','180.253.243.43'),
(103,'dppkb@mail.com','Login ke Simencrang','2018-08-16 06:31:51','61.94.142.21'),
(104,'cidadap@mail.com','Login ke Simencrang','2018-08-16 07:21:34','180.245.176.39'),
(105,'palabuhanratu@mail.com','Login ke Simencrang','2018-08-16 09:46:55','36.72.191.135'),
(106,'cikidang@mail.com','Login ke Simencrang','2018-08-16 10:51:32','114.124.244.144'),
(107,'sukalarang@mail.com','Login ke Simencrang','2018-08-16 11:50:11','180.253.148.13'),
(108,'sekarwangi@mail.com','Login ke Simencrang','2018-08-20 07:25:47','180.245.115.65'),
(109,'bantargadung@mail.com','Login ke Simencrang','2018-08-20 08:35:36','180.253.212.68'),
(110,'dppkb@mail.com','Login ke Simencrang','2018-08-20 12:05:02','36.71.234.196'),
(111,'dppkb@mail.com','Login ke Simencrang','2018-08-21 06:28:04','36.71.234.196'),
(112,'tegalbuleud@mail.com','Login ke Simencrang','2018-08-23 07:52:09','114.124.178.152'),
(113,'cisaat@mail.com','Login ke Simencrang','2018-08-23 08:17:25','125.166.221.102'),
(114,'tegalbuleud@mail.com','Login ke Simencrang','2018-08-24 08:19:29','182.0.229.76'),
(115,'dppkb@mail.com','Login ke Simencrang','2018-08-28 06:45:03','36.72.46.88'),
(116,'kabandungan@mail.com','Login ke Simencrang','2018-08-29 08:25:27','36.71.239.241'),
(117,'kabandungan@mail.com','Login ke Simencrang','2018-08-29 08:26:47','36.71.239.241'),
(118,'kabandungan@mail.com','Login ke Simencrang','2018-08-29 13:49:57','180.246.24.49'),
(119,'kadudampit@mail.com','Login ke Simencrang','2018-08-30 10:43:46','36.71.235.123'),
(120,'tegalbuleud@mail.com','Login ke Simencrang','2018-08-31 09:20:51','114.124.202.242'),
(121,'cisaat@mail.com','Login ke Simencrang','2018-09-03 06:02:40','36.71.235.87'),
(122,'kadudampit@mail.com','Login ke Simencrang','2018-09-03 11:42:37','36.71.232.254'),
(123,'kalibunder@mail.com','Login ke Simencrang','2018-09-05 10:14:37','114.5.147.114'),
(124,'cisolok@mail.com','Login ke Simencrang','2018-09-08 18:35:00','36.71.236.119'),
(125,'cimanggu@mail.com','Login ke Simencrang','2018-09-09 06:07:52','36.71.236.176'),
(126,'tegalbuleud@mail.com','Login ke Simencrang','2018-09-10 17:48:00','114.124.165.59'),
(127,'cisaat@mail.com','Login ke Simencrang','2018-09-26 09:32:50','180.253.179.69'),
(128,'simpenan@mail.com','Login ke Simencrang','2018-10-02 08:58:23','36.72.106.113'),
(129,'dinsos@mail.com','Login ke Simencrang','2018-12-17 08:22:10','36.72.149.235'),
(130,'cikakak@mail.com','Login ke Simencrang','2018-12-17 09:09:43','114.5.147.252'),
(131,'simpenan@mail.com','Login ke Simencrang','2018-12-17 11:44:18','120.188.95.53'),
(132,'cisolok@mail.com','Login ke Simencrang','2018-12-17 12:05:03','120.188.33.43'),
(133,'cimanggu@mail.com','Login ke Simencrang','2018-12-17 19:06:20','180.253.137.141'),
(134,'dinaspu@mail.com','Login ke Simencrang','2018-12-18 06:59:44','180.253.137.141'),
(135,'dinaspu@mail.com','Login ke Simencrang','2018-12-19 07:30:55','36.72.149.131'),
(136,'dinaspu@mail.com','Login ke Simencrang','2018-12-19 08:03:06','36.72.149.131'),
(137,'dinaspu@mail.com','Login ke Simencrang','2019-01-03 19:07:07','::1'),
(138,'dinaspu@mail.com','Login ke Simencrang','2019-01-03 19:45:10','::1'),
(139,'dinaspu@mail.com','Login ke Simencrang','2019-01-03 20:07:49','::1'),
(140,'dinaspu@mail.com','Login ke Simencrang','2019-01-03 20:12:39','::1'),
(141,'dinaspu@mail.com','Login ke Simencrang','2019-01-03 20:13:22','::1'),
(142,'dinaspu@mail.com','Login ke Simencrang','2019-01-03 20:18:08','::1'),
(143,'dinaspu@mail.com','Login ke Simencrang','2019-01-03 20:23:14','::1'),
(144,'bidangesda@mail.com','Login ke Simencrang','2019-01-03 21:38:04','::1'),
(145,'dinaspu@mail.com','Login ke Simencrang','2019-01-04 00:07:49','::1'),
(146,'dinaspu@mail.com','Login ke Simencrang','2019-01-04 00:08:27','::1');

/*Table structure for table `level_users` */

DROP TABLE IF EXISTS `level_users`;

CREATE TABLE `level_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `level_users` */

insert  into `level_users`(`id`,`nama`) values 
(1,'Administrator'),
(2,'PD'),
(3,'Kecamatan'),
(4,'Bidang PE'),
(5,'Bidang ESDA'),
(6,'Bidang PMM'),
(7,'Bidang IPW');

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `urutan` int(3) NOT NULL,
  `status` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

insert  into `menu`(`id`,`nama`,`url`,`icon`,`urutan`,`status`) values 
(1,'dashboard','dashboard','home',1,'A'),
(2,'Ranwal','ranwal','copyright',2,'A'),
(3,'Renja','renja','assignment',3,'A'),
(4,'Control Panel','setting','settings',4,'A'),
(5,'RKPD Murni','rkpd/murni','assignment',5,'A'),
(6,'RKPD Perubahan','rkpd/perubahan','assignment',6,'A'),
(7,'User','user','person',7,'A');

/*Table structure for table `menu_admin` */

DROP TABLE IF EXISTS `menu_admin`;

CREATE TABLE `menu_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` varchar(3) NOT NULL,
  `level_id` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `menu_admin` */

insert  into `menu_admin`(`id`,`menu_id`,`level_id`) values 
(1,'1','1'),
(2,'2','1'),
(3,'3','1'),
(4,'1','2'),
(5,'4','1'),
(7,'5','2'),
(9,'7','1');

/*Table structure for table `opd` */

DROP TABLE IF EXISTS `opd`;

CREATE TABLE `opd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `skpd_entri` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

/*Data for the table `opd` */

insert  into `opd`(`id`,`nama`,`alamat`,`status`,`skpd_entri`) values 
(1,'Administrator','Administrator','Admin','Y'),
(2,'BADAN PERENCANAAN PEMBANGUNAN DAERAH','Komplek Perkantoran Jajaway','OPD','Y'),
(3,'DINAS KEARSIPAN DAN PERPUSTAKAAN','Komplek Perkantoran Jajaway','OPD','Y'),
(4,'BADAN PENANGGULANGAN BENCANA DAERAH','','OPD','Y'),
(5,'BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH','','OPD','Y'),
(6,'DINAS PEMADAM KEBAKARAN','','OPD','Y'),
(7,'DINAS PEKERJAAN UMUM\r\n','','OPD','Y'),
(8,'DINAS KESEHATAN','','OPD','Y'),
(9,'DINAS SOSIAL','','OPD','Y'),
(10,'DINAS KEBUDAYAAN, KEPEMUDAAN DAN OLAH RAGA','','OPD','Y'),
(11,'DINAS PENDIDIKAN','','OPD','Y'),
(12,'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL','','OPD','Y'),
(13,'DINAS PERHUBUNGAN','','OPD','Y'),
(14,'DINAS KELAUTAN DAN PERIKANAN\r\n','','OPD','Y'),
(15,'DINAS TENAGA KERJA DAN TRANSMIGRASI','','OPD','Y'),
(16,'DINAS PERUMAHAN RAKYAT, KAWASAN PERMUKIMAN DAN KEBERSIHAN','','OPD','Y'),
(17,'DINAS PERTANAHAN DAN TATA RUANG','','OPD','Y'),
(18,'DINAS PERINDUSTRIAN DAN ENERGI SUMBER DAYA MINERAL','','OPD','Y'),
(19,'DINAS PERDAGANGAN, KOPERASI, USAHA KECIL DAN MENENGAH','','OPD','Y'),
(20,'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA','','OPD','Y'),
(21,'DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK','','OPD','Y'),
(22,'INSPEKTORAT\r\n','','OPD','Y'),
(23,'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA','','OPD','Y'),
(24,'KANTOR KESATUAN BANGSA DAN POLITIK','','OPD','Y'),
(25,'DINAS KOMUNIKASI, INFORMATIKA DAN PERSANDIAN','','OPD','Y'),
(26,'DINAS LINGKUNGAN HIDUP','','OPD','Y'),
(27,'DINAS PEMBERDAYAAN MASYARAKAT DAN DESA','','OPD','Y'),
(28,'DINAS KETAHANAN PANGAN DAN PENYULUHAN','','OPD','Y'),
(29,'DINAS PARIWISATA','','OPD','Y'),
(30,'BADAN PENDAPATAN DAERAH\r\n','','OPD','Y'),
(31,'DINAS PENANAMAN MODAL DAN PERIZINAN TERPADU SATU PINTU\r\n','','OPD','Y'),
(32,'DINAS PERTANIAN','','OPD','Y'),
(33,'DINAS PETERNAKAN','','OPD','Y'),
(34,'SATUAN POLISI PAMONG PRAJA','','OPD','Y'),
(35,'RSUD PALABUHANRATU','','OPD','Y'),
(36,'RSUD SEKARWANGI','','OPD','Y'),
(37,'SEKRETARIAT DPRD','','OPD','Y'),
(38,'SEKRETARIAT DAERAH','','OPD','Y'),
(39,'CIAMBAR','','KECAMATAN','Y'),
(40,'CISAAT','','KECAMATAN','Y'),
(41,'NAGRAK','','KECAMATAN','Y'),
(42,'CIDAHU','','KECAMATAN','Y'),
(43,'PARUNGKUDA','','KECAMATAN','Y'),
(44,'KALIBUNDER','','KECAMATAN','Y'),
(45,'TEGALBULEUD','','KECAMATAN','Y'),
(46,'CICURUG\r\n','','KECAMATAN','Y'),
(47,'CIDADAP','','KECAMATAN','Y'),
(48,'JAMPANGTENGAH\r\n','','KECAMATAN','Y'),
(49,'BANTARGADUNG','','KECAMATAN','Y'),
(50,'WARUNGKIARA','','KECAMATAN','Y'),
(51,'PABUARAN','','KECAMATAN','Y'),
(52,'CIBITUNG','','KECAMATAN','Y'),
(53,'CIBADAK','','KECAMATAN','Y'),
(54,'CIREUNGHAS','','KECAMATAN','Y'),
(55,'BOJONGGENTENG','','KECAMATAN','Y'),
(56,'CIKEMBAR','','KECAMATAN','Y'),
(57,'JAMPANGKULON','','KECAMATAN','Y'),
(58,'CURUGKEMBAR','','KECAMATAN','Y'),
(59,'PARAKANSALAK','','KECAMATAN','Y'),
(60,'NYALINDUNG','','KECAMATAN','Y'),
(61,'KEBONPEDES','','KECAMATAN','Y'),
(62,'CIMANGGU','','KECAMATAN','Y'),
(63,'CIKIDANG','','KECAMATAN','Y'),
(64,'SURADE','','KECAMATAN','Y'),
(65,'PALABUHANRATU','','KECAMATAN','Y'),
(66,'GEGER BITUNG\r\n','','KECAMATAN','Y'),
(67,'CISOLOK','','KECAMATAN','Y'),
(68,'CARINGIN','','KECAMATAN','Y'),
(69,'WALURAN','','KECAMATAN','Y'),
(70,'KABANDUNGAN\r\n','','KECAMATAN','Y'),
(71,'SAGARANTEN\r\n','','KECAMATAN','Y'),
(72,'CIEMAS\r\n','','KECAMATAN','Y'),
(73,'GUNUNGGURUH','','KECAMATAN','Y'),
(74,'SIMPENAN','','KECAMATAN','Y'),
(75,'CICANTAYAN\r\n','','KECAMATAN','Y'),
(76,'PURABAYA','','KECAMATAN','Y'),
(77,'CIDOLOG','','KECAMATAN','Y'),
(78,'KADUDAMPIT','','KECAMATAN','Y'),
(79,'CIKAKAK','','KECAMATAN','Y'),
(80,'CIRACAP','','KECAMATAN','Y'),
(81,'LENGKONG','','KECAMATAN','Y'),
(82,'SUKALARANG','','KECAMATAN','Y'),
(83,'SUKARAJA','','KECAMATAN','Y'),
(84,'KALAPANUNGGAL','','KECAMATAN','Y'),
(85,'SUKABUMI','','KECAMATAN','Y'),
(86,'WARUNGKIARA','','KECAMATAN','Y');

/*Table structure for table `transact` */

DROP TABLE IF EXISTS `transact`;

CREATE TABLE `transact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opd_id` varchar(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `doc_id` varchar(3) NOT NULL,
  `status` varchar(2) DEFAULT NULL,
  `catatan_bidang` text,
  `catatan_pd` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

/*Data for the table `transact` */

insert  into `transact`(`id`,`opd_id`,`nama`,`file`,`doc_id`,`status`,`catatan_bidang`,`catatan_pd`) values 
(91,'7','','1546540200_-OPD-7.pdf','3','1',NULL,'asgasgdgsg'),
(93,'7','','ad6a9f2eb11d650ff11d274329f0d880_-OPD-7.pdf','4','1',NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level_id` varchar(3) NOT NULL,
  `opd_id` varchar(3) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`level_id`,`opd_id`,`status`) values 
(1,'admin','1adbb3178591fd5bb0c248518f39bf6d','1','1','A'),
(2,'bappeda@mail.com\r\n','59f4c74bd8b29124efed9e0f3a52fab2','2','2','A'),
(3,'arsip@mail.com','f1286c8e6b48ce299c95e142ae081f1c','2','3','A'),
(4,'bpdb@mail.com','646a0728a7b706cfceb725a089185b0e','2','4','A'),
(5,'bpkad@mail.com','6e76587f68ad922cde918a357304bd09','2','5','A'),
(6,'damkar@mail.com','c8081d348f1eee220e10ffc21ba20d9a','2','6','A'),
(7,'dinaspu@mail.com','6b9d3ccc75395f107ba26b33c13d2685','2','7','A'),
(8,'dinkes@mail.com','8b12b4884a48f861ba4bc374bcc90cf2','2','8','A'),
(9,'dinsos@mail.com','b1e4ac5cb1566f9a577fc97e7112d913','2','9','A'),
(10,'disbudpora@mail.com','b84bc5b22e606ecefa319a3c65576b0e','2','10','A'),
(11,'disdik@mail.com','ba8b6705d57ee85c405c10b97a57daf5','2','11','A'),
(12,'disdukcapil@mail.com','3029ae9c69fa4c2aea3902b6a99682f7','2','12','A'),
(13,'dishub@mail.com','772e621bcc5f8fffed900e5685535a96','2','13','A'),
(14,'dislutkan@mail.com','9223b52772f7aba223aef39a56902e94','2','14','A'),
(15,'disnakertrans@mail.com\r\n','8f3be110df0c440746c2decbe15cd96d','2','15','A'),
(16,'disperkapsih@mail.com','2e2f972d5f46ab8794624becaa6f4fe4','2','16','A'),
(17,'dispertaru@mail.com','2c8224f5a12ba9580cdcbd716dd287e5','2','17','A'),
(18,'dpesdm@mail.com','a0cfd1586f8fd55255cc7a633e87a5f0','2','18','A'),
(19,'dpkukm@mail.com','655023a1fafd8810a65f51205bc338fb','2','19','A'),
(20,'dppkb@mail.com','bae79f5df41e9a2dd74b6ce87be199de','2','20','A'),
(21,'dpppa@mail.com','36ff40b72c36ffbe9bf04a4b790a88b8','2','21','A'),
(22,'inspektorat@mail.com','03205bf3e17fd3a6932a017c3d61c1c7','2','22','A'),
(23,'kepegawaian@mail.com','bec6ef8e7f4b0289b66b2473d7ad3ffa','2','23','A'),
(24,'kesbangpol@mail.com','60d931c3c8561ad6e4f967afb2e4e993','2','24','A'),
(25,'kominfo@mail.com','8348eb4cbdfc6a45caa886339c89ad5c','2','25','A'),
(27,'lingkunganhidup@mail.com','ebfd0e0c673b32762bda34d48abeeb58','2','26','A'),
(28,'masyarakatdesa@mail.com','96ce069a023d3bea8de6b718ded0e683','2','27','A'),
(29,'pangan@mail.com','3ba6279e52e01b32fe63583a907ec3f8','2','28','A'),
(30,'pariwisata@mail.com','71725d9df04362fcf9f569bf594261b8','2','29','A'),
(31,'pendapatan@mail.com','e1f8e9ff868b73e0160cea353599849b','2','30','A'),
(32,'perizinan@mail.com','41724de979fd55bc6aa511073b0910e4','2','31','A'),
(33,'pertanian@mail.com','c968b32f79cfe2c1072b474539e0d259','2','32','A'),
(34,'peternakan@mail.com','674ee66b8d080885ef8b6ffb02620b11','2','33','A'),
(35,'polpp@mail.com','fbd2be7c03e38b8e53e13ef8bdcd38b4','2','34','A'),
(36,'rspalabuhan@mail.com','0060c437a2f149f28b10d58de7c8ae3d','2','35','A'),
(37,'sekarwangi@mail.com','4e1cc757eabeaeaef98ff18ef0022ce3','2','36','A'),
(38,'sekredprd@mail.com','e05cc50fe9ff9b8c1df51d6db526a3c6','2','37','A'),
(39,'setda@mail.com','361cad2fac0bd1f7cd59b6694dd252a4','2','38','A'),
(40,'ciambar@mail.com','00a5543ca8f8fd273e1181ce206e95f9','2','39','A'),
(41,'cisaat@mail.com','3608a45cee586683f68cc4664bfd89dc','2','40','A'),
(42,'nagrak@mail.com','1fa0b390e9b67441a3843e9f0d318e5f','2','41','A'),
(43,'cidahu@mail.com','dd75da4bf7b3b5d4bf4fbc81aa223382','2','42','A'),
(44,'parungkuda@mail.com','ec2735540f4c5cc43798f128310f2228','2','43','A'),
(45,'kalibunder@mail.com','b09ce20889289e0b374e713541c6a9c9','2','44','A'),
(46,'tegalbuleud@mail.com','c18f47119966ba7552367a283d873edb','2','45','A'),
(47,'cicurug@mail.com','d9e75ce4aa48533ec09a909846a1c544','2','46','A'),
(48,'cidadap@mail.com','de97fef76d67c4796cc9cf10313a239e','2','47','A'),
(49,'jampangtengah@mail.com','e4bf6f7348eb5c866243f6268ddaf5a8','2','48','A'),
(50,'bantargadung@mail.com','f9a9a51b1d8c59252d7aace3917a9eca','2','49','A'),
(51,'warungkiara@mail.com','7e28c0a4cdf9650fa169452cda87f97e','2','50','A'),
(52,'pabuaran@mail.com','ba014e179e9e36e6bf6c33377f2dd114','2','51','A'),
(53,'cibitung@mail.com','245f40988e73dcf3f651cacf5e0d93fe','2','52','A'),
(54,'cibadak@mail.com','2bd3f5127e672e54711c6a0a2f449bfd','2','53','A'),
(55,'cireunghas@mail.com','d9203cdb649aef14444a8d6589d3770b','2','54','A'),
(56,'bojonggenteng@mail.com','a43193e2a35c8f6ff5fca0eb96fa4566','2','55','A'),
(57,'cikembar@mail.com','9491d004a30ad262bc21422e0469a9e0','2','56','A'),
(58,'jampangkulon@mail.com','43b33e02100bbe27ee7321e00a056b20','2','57','A'),
(59,'curugkembar@mail.com','da8e5362338867f35ebf1b99dea4abdf','2','58','A'),
(60,'parakansalak@mail.com','2288f7f7fc883ae3894d279529d549ad','2','59','A'),
(61,'nyalindung@mail.com','eb9572e2f77d99102b5f077190fd412c','2','60','A'),
(62,'kebonpedes@mail.com','50e49325f53a9bacd3812e1e687dc320','2','61','A'),
(63,'cimanggu@mail.com','1447c78ff445d24431c44d87fe3ab0fe','2','62','A'),
(64,'cikidang@mail.com','e2ce265a3ef2267dfa035251bb2dcf8d','2','63','A'),
(65,'surade@mail.com','915daadcbe27a11f0f0bb95d105ba2ef','2','64','A'),
(66,'palabuhanratu@mail.com','036c650a5663a2b3bdf6c95276bf61be','2','65','A'),
(67,'gegerbitung@mail.com','e796ad90fb73841d9e4a8fcdfbf997d9','2','66','A'),
(68,'cisolok@mail.com','c286fae594038e26176da699ed256719','2','67','A'),
(69,'caringin@mail.com','b9672bbf634706082411ad20d2c662e7','2','68','A'),
(70,'waluran@mail.com','48382f8115f12253b9b48afef46e401f','2','69','A'),
(71,'kabandungan@mail.com','00e69f78d8cb79d6dc658ababe48a525','2','70','A'),
(72,'sagaranten@mail.com','f16ca1ee9fcee3f414bc9460f4a04a23','2','71','A'),
(73,'ciemas@mail.com','8dae5215e46e7e6b9bc45f6fce842f56','2','72','A'),
(74,'gunungguruh@mail.com','f331aef2ccf32b5c7c4f590a8cc005ce','2','73','A'),
(75,'simpenan@mail.com','fc32a277bd9dcaf473ab215f9c2a3353','2','74','A'),
(76,'cicantayan@mail.com','189e12676302b6d8b937d3210ef5a541','2','75','A'),
(77,'purabaya@mail.com','515816a05d107388bd8071cb58ac1388','2','76','A'),
(78,'cidolog@mail.com','5485c5608be45c811ecbffa99154cceb','2','77','A'),
(79,'kadudampit@mail.com','c6cc2fed5e2808bcfb34687956e197e7','2','78','A'),
(80,'cikakak@mail.com','30067896d88af179fd3535de2f4537e4','2','79','A'),
(81,'ciracap@mail.com','a078d0c078f2c1ad04423b8a347b95ae','2','80','A'),
(82,'lengkong@mail.com','8cd0cbe0b339097e0872216cff1bcd9c','2','81','A'),
(83,'sukalarang@mail.com','492b11436757a8ac453c2d0be8489507','2','82','A'),
(84,'sukaraja@mail.com','5c99c821a1f87538757fa9ab88368a8b','2','83','A'),
(85,'kalapanunggal@mail.com','cf15742b6243651a0ed07f0210fa35bc','2','84','A'),
(86,'sukabumi@mail.com','78aafc31bb9974ae99f7186d80f2d67a','2','85','A'),
(87,'warungkiara@mail.com','1a01266d7649a1a801a270c4627c12be','2','86','A'),
(88,'bidangpmm@mail.com','8ce1ca9a5c804a544e9cda40d1b7c57c','6','1','A'),
(89,'bidangesda@mail.com','0d083c2a07ad46674e861b5fb305c9e5','5','1','A');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
