/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.13-MariaDB : Database - db_bikinow
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_bikinow` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_bikinow`;

/*Table structure for table `t_akun` */

DROP TABLE IF EXISTS `t_akun`;

CREATE TABLE `t_akun` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level_akses` enum('provider','customer','admin') DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_akun` */

insert  into `t_akun`(`username`,`password`,`level_akses`) values ('rian','rian','admin'),('riancustomer','123','customer'),('rianprovider','123','provider');

/*Table structure for table `t_customer` */

DROP TABLE IF EXISTS `t_customer`;

CREATE TABLE `t_customer` (
  `kd_customer` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `kd_kota` varchar(8) DEFAULT NULL,
  `kode_pos` varchar(5) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kd_customer`),
  KEY `kd_kota` (`kd_kota`),
  KEY `t_customer_ibfk_2` (`username`),
  CONSTRAINT `t_customer_ibfk_1` FOREIGN KEY (`kd_kota`) REFERENCES `t_kota` (`kd_kota`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_customer_ibfk_2` FOREIGN KEY (`username`) REFERENCES `t_akun` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_customer` */

insert  into `t_customer`(`kd_customer`,`nama`,`email`,`jenis_kelamin`,`no_telp`,`ttl`,`kd_kota`,`kode_pos`,`alamat`,`username`) values (1,'Rian Ganteng','riansaepuloh15031@gmail.com','laki-laki','082217103515','1992-03-15','1505',NULL,'Jl. Sekeloa','riancustomer');

/*Table structure for table `t_kategori` */

DROP TABLE IF EXISTS `t_kategori`;

CREATE TABLE `t_kategori` (
  `kd_kategori` varchar(8) NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kd_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_kategori` */

insert  into `t_kategori`(`kd_kategori`,`nama_kategori`) values ('K1','Desain/Foto'),('K10','Web/Software'),('K2','Elektronik'),('K3','Konveksi/Pakaian/Fashion'),('K4','Merchandise/Accesories'),('K5','Mesin/Alat'),('K6','Pagar/Frame/Bangunan'),('K7','Makanan'),('K8','Percetakan'),('K9','RC/Mainan');

/*Table structure for table `t_kota` */

DROP TABLE IF EXISTS `t_kota`;

CREATE TABLE `t_kota` (
  `kd_kota` varchar(8) NOT NULL,
  `kd_provinsi` varchar(8) DEFAULT NULL,
  `nama_kota` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kd_kota`),
  KEY `kd_provinsi` (`kd_provinsi`),
  CONSTRAINT `t_kota_ibfk_1` FOREIGN KEY (`kd_provinsi`) REFERENCES `t_provinsi` (`kd_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_kota` */

insert  into `t_kota`(`kd_kota`,`kd_provinsi`,`nama_kota`) values ('1101','11','SIMEULUE'),('1102','11','ACEH SINGKIL'),('1103','11','ACEH SELATAN'),('1104','11','ACEH TENGGARA'),('1105','11','ACEH TIMUR'),('1106','11','ACEH TENGAH'),('1107','11','ACEH BARAT'),('1108','11','ACEH BESAR'),('1109','11','PIDIE'),('1110','11','BIREUEN'),('1111','11','ACEH UTARA'),('1112','11','ACEH BARAT DAYA'),('1113','11','GAYO LUES'),('1114','11','ACEH TAMIANG'),('1115','11','NAGAN RAYA'),('1116','11','ACEH JAYA'),('1117','11','BENER MERIAH'),('1118','11','PIDIE JAYA'),('1171','11','BANDA ACEH'),('1172','11','SABANG'),('1173','11','LANGSA'),('1174','11','LHOKSEUMAWE'),('1175','11','SUBULUSSALAM'),('1201','12','NIAS'),('1202','12','MANDAILING NATAL'),('1203','12','TAPANULI SELATAN'),('1204','12','TAPANULI TENGAH'),('1205','12','TAPANULI UTARA'),('1206','12','TOBA SAMOSIR'),('1207','12','LABUHAN BATU'),('1208','12','ASAHAN'),('1209','12','SIMALUNGUN'),('1210','12','DAIRI'),('1211','12','KARO'),('1212','12','DELI SERDANG'),('1213','12','LANGKAT'),('1214','12','NIAS SELATAN'),('1215','12','HUMBANG HASUNDUTAN'),('1216','12','PAKPAK BHARAT'),('1217','12','SAMOSIR'),('1218','12','SERDANG BEDAGAI'),('1219','12','BATU BARA'),('1220','12','PADANG LAWAS UTARA'),('1221','12','PADANG LAWAS'),('1222','12','LABUHAN BATU SELATAN'),('1223','12','LABUHAN BATU UTARA'),('1224','12','NIAS UTARA'),('1225','12','NIAS BARAT'),('1271','12','SIBOLGA'),('1272','12','TANJUNG BALAI'),('1273','12','PEMATANG SIANTAR'),('1274','12','TEBING TINGGI'),('1275','12','MEDAN'),('1276','12','BINJAI'),('1277','12','PADANGSIDIMPUAN'),('1278','12','GUNUNGSITOLI'),('1301','13','KEPULAUAN MENTAWAI'),('1302','13','PESISIR SELATAN'),('1303','13','SOLOK'),('1304','13','SIJUNJUNG'),('1305','13','TANAH DATAR'),('1306','13','PADANG PARIAMAN'),('1307','13','AGAM'),('1308','13','LIMA PULUH KOTA'),('1309','13','PASAMAN'),('1310','13','SOLOK SELATAN'),('1311','13','DHARMASRAYA'),('1312','13','PASAMAN BARAT'),('1371','13','PADANG'),('1372','13','SOLOK'),('1373','13','SAWAH LUNTO'),('1374','13','PADANG PANJANG'),('1375','13','BUKITTINGGI'),('1376','13','PAYAKUMBUH'),('1377','13','PARIAMAN'),('1401','14','KUANTAN SINGINGI'),('1402','14','INDRAGIRI HULU'),('1403','14','INDRAGIRI HILIR'),('1404','14','PELALAWAN'),('1405','14','S I A K'),('1406','14','KAMPAR'),('1407','14','ROKAN HULU'),('1408','14','BENGKALIS'),('1409','14','ROKAN HILIR'),('1410','14','KEPULAUAN MERANTI'),('1471','14','PEKANBARU'),('1473','14','DUMAI'),('1501','15','KERINCI'),('1502','15','MERANGIN'),('1503','15','SAROLANGUN'),('1504','15','BATANG HARI'),('1505','15','MUARO JAMBI'),('1506','15','TANJUNG JABUNG TIMUR'),('1507','15','TANJUNG JABUNG BARAT'),('1508','15','TEBO'),('1509','15','BUNGO'),('1571','15','JAMBI'),('1572','15','SUNGAI PENUH'),('1601','16','OGAN KOMERING ULU'),('1602','16','OGAN KOMERING ILIR'),('1603','16','MUARA ENIM'),('1604','16','LAHAT'),('1605','16','MUSI RAWAS'),('1606','16','MUSI BANYUASIN'),('1607','16','BANYU ASIN'),('1608','16','OGAN KOMERING ULU SELATAN'),('1609','16','OGAN KOMERING ULU TIMUR'),('1610','16','OGAN ILIR'),('1611','16','EMPAT LAWANG'),('1612','16','PENUKAL ABAB LEMATANG ILIR'),('1613','16','MUSI RAWAS UTARA'),('1671','16','PALEMBANG'),('1672','16','PRABUMULIH'),('1673','16','PAGAR ALAM'),('1674','16','LUBUKLINGGAU'),('1701','17','BENGKULU SELATAN'),('1702','17','REJANG LEBONG'),('1703','17','BENGKULU UTARA'),('1704','17','KAUR'),('1705','17','SELUMA'),('1706','17','MUKOMUKO'),('1707','17','LEBONG'),('1708','17','KEPAHIANG'),('1709','17','BENGKULU TENGAH'),('1771','17','BENGKULU'),('1801','18','LAMPUNG BARAT'),('1802','18','TANGGAMUS'),('1803','18','LAMPUNG SELATAN'),('1804','18','LAMPUNG TIMUR'),('1805','18','LAMPUNG TENGAH'),('1806','18','LAMPUNG UTARA'),('1807','18','WAY KANAN'),('1808','18','TULANGBAWANG'),('1809','18','PESAWARAN'),('1810','18','PRINGSEWU'),('1811','18','MESUJI'),('1812','18','TULANG BAWANG BARAT'),('1813','18','PESISIR BARAT'),('1871','18','BANDAR LAMPUNG'),('1872','18','METRO'),('1901','19','BANGKA'),('1902','19','BELITUNG'),('1903','19','BANGKA BARAT'),('1904','19','BANGKA TENGAH'),('1905','19','BANGKA SELATAN'),('1906','19','BELITUNG TIMUR'),('1971','19','PANGKAL PINANG'),('2101','21','KARIMUN'),('2102','21','BINTAN'),('2103','21','NATUNA'),('2104','21','LINGGA'),('2105','21','KEPULAUAN ANAMBAS'),('2171','21','BATAM'),('2172','21','TANJUNG PINANG'),('3101','31','KEPULAUAN SERIBU'),('3171','31','JAKARTA SELATAN'),('3172','31','JAKARTA TIMUR'),('3173','31','JAKARTA PUSAT'),('3174','31','JAKARTA BARAT'),('3175','31','JAKARTA UTARA'),('3201','32','BOGOR'),('3202','32','SUKABUMI'),('3203','32','CIANJUR'),('3204','32','BANDUNG'),('3205','32','GARUT'),('3206','32','TASIKMALAYA'),('3207','32','CIAMIS'),('3208','32','KUNINGAN'),('3209','32','CIREBON'),('3210','32','MAJALENGKA'),('3211','32','SUMEDANG'),('3212','32','INDRAMAYU'),('3213','32','SUBANG'),('3214','32','PURWAKARTA'),('3215','32','KARAWANG'),('3216','32','BEKASI'),('3217','32','BANDUNG BARAT'),('3218','32','PANGANDARAN'),('3271','32','BOGOR'),('3272','32','SUKABUMI'),('3273','32','BANDUNG'),('3274','32','CIREBON'),('3275','32','BEKASI'),('3276','32','DEPOK'),('3277','32','CIMAHI'),('3278','32','TASIKMALAYA'),('3279','32','BANJAR'),('3301','33','CILACAP'),('3302','33','BANYUMAS'),('3303','33','PURBALINGGA'),('3304','33','BANJARNEGARA'),('3305','33','KEBUMEN'),('3306','33','PURWOREJO'),('3307','33','WONOSOBO'),('3308','33','MAGELANG'),('3309','33','BOYOLALI'),('3310','33','KLATEN'),('3311','33','SUKOHARJO'),('3312','33','WONOGIRI'),('3313','33','KARANGANYAR'),('3314','33','SRAGEN'),('3315','33','GROBOGAN'),('3316','33','BLORA'),('3317','33','REMBANG'),('3318','33','PATI'),('3319','33','KUDUS'),('3320','33','JEPARA'),('3321','33','DEMAK'),('3322','33','SEMARANG'),('3323','33','TEMANGGUNG'),('3324','33','KENDAL'),('3325','33','BATANG'),('3326','33','PEKALONGAN'),('3327','33','PEMALANG'),('3328','33','TEGAL'),('3329','33','BREBES'),('3371','33','MAGELANG'),('3372','33','SURAKARTA'),('3373','33','SALATIGA'),('3374','33','SEMARANG'),('3375','33','PEKALONGAN'),('3376','33','TEGAL'),('3401','34','KULON PROGO'),('3402','34','BANTUL'),('3403','34','GUNUNG KIDUL'),('3404','34','SLEMAN'),('3471','34','YOGYAKARTA'),('3501','35','PACITAN'),('3502','35','PONOROGO'),('3503','35','TRENGGALEK'),('3504','35','TULUNGAGUNG'),('3505','35','BLITAR'),('3506','35','KEDIRI'),('3507','35','MALANG'),('3508','35','LUMAJANG'),('3509','35','JEMBER'),('3510','35','BANYUWANGI'),('3511','35','BONDOWOSO'),('3512','35','SITUBONDO'),('3513','35','PROBOLINGGO'),('3514','35','PASURUAN'),('3515','35','SIDOARJO'),('3516','35','MOJOKERTO'),('3517','35','JOMBANG'),('3518','35','NGANJUK'),('3519','35','MADIUN'),('3520','35','MAGETAN'),('3521','35','NGAWI'),('3522','35','BOJONEGORO'),('3523','35','TUBAN'),('3524','35','LAMONGAN'),('3525','35','GRESIK'),('3526','35','BANGKALAN'),('3527','35','SAMPANG'),('3528','35','PAMEKASAN'),('3529','35','SUMENEP'),('3571','35','KEDIRI'),('3572','35','BLITAR'),('3573','35','MALANG'),('3574','35','PROBOLINGGO'),('3575','35','PASURUAN'),('3576','35','MOJOKERTO'),('3577','35','MADIUN'),('3578','35','SURABAYA'),('3579','35','BATU'),('3601','36','PANDEGLANG'),('3602','36','LEBAK'),('3603','36','TANGERANG'),('3604','36','SERANG'),('3671','36','TANGERANG'),('3672','36','CILEGON'),('3673','36','SERANG'),('3674','36','TANGERANG SELATAN'),('5101','51','JEMBRANA'),('5102','51','TABANAN'),('5103','51','BADUNG'),('5104','51','GIANYAR'),('5105','51','KLUNGKUNG'),('5106','51','BANGLI'),('5107','51','KARANG ASEM'),('5108','51','BULELENG'),('5171','51','DENPASAR'),('5201','52','LOMBOK BARAT'),('5202','52','LOMBOK TENGAH'),('5203','52','LOMBOK TIMUR'),('5204','52','SUMBAWA'),('5205','52','DOMPU'),('5206','52','BIMA'),('5207','52','SUMBAWA BARAT'),('5208','52','LOMBOK UTARA'),('5271','52','MATARAM'),('5272','52','BIMA'),('5301','53','SUMBA BARAT'),('5302','53','SUMBA TIMUR'),('5303','53','KUPANG'),('5304','53','TIMOR TENGAH SELATAN'),('5305','53','TIMOR TENGAH UTARA'),('5306','53','BELU'),('5307','53','ALOR'),('5308','53','LEMBATA'),('5309','53','FLORES TIMUR'),('5310','53','SIKKA'),('5311','53','ENDE'),('5312','53','NGADA'),('5313','53','MANGGARAI'),('5314','53','ROTE NDAO'),('5315','53','MANGGARAI BARAT'),('5316','53','SUMBA TENGAH'),('5317','53','SUMBA BARAT DAYA'),('5318','53','NAGEKEO'),('5319','53','MANGGARAI TIMUR'),('5320','53','SABU RAIJUA'),('5321','53','MALAKA'),('5371','53','KUPANG'),('6101','61','SAMBAS'),('6102','61','BENGKAYANG'),('6103','61','LANDAK'),('6104','61','MEMPAWAH'),('6105','61','SANGGAU'),('6106','61','KETAPANG'),('6107','61','SINTANG'),('6108','61','KAPUAS HULU'),('6109','61','SEKADAU'),('6110','61','MELAWI'),('6111','61','KAYONG UTARA'),('6112','61','KUBU RAYA'),('6171','61','PONTIANAK'),('6172','61','SINGKAWANG'),('6201','62','KOTAWARINGIN BARAT'),('6202','62','KOTAWARINGIN TIMUR'),('6203','62','KAPUAS'),('6204','62','BARITO SELATAN'),('6205','62','BARITO UTARA'),('6206','62','SUKAMARA'),('6207','62','LAMANDAU'),('6208','62','SERUYAN'),('6209','62','KATINGAN'),('6210','62','PULANG PISAU'),('6211','62','GUNUNG MAS'),('6212','62','BARITO TIMUR'),('6213','62','MURUNG RAYA'),('6271','62','PALANGKA RAYA'),('6301','63','TANAH LAUT'),('6302','63','BARU'),('6303','63','BANJAR'),('6304','63','BARITO KUALA'),('6305','63','TAPIN'),('6306','63','HULU SUNGAI SELATAN'),('6307','63','HULU SUNGAI TENGAH'),('6308','63','HULU SUNGAI UTARA'),('6309','63','TABALONG'),('6310','63','TANAH BUMBU'),('6311','63','BALANGAN'),('6371','63','BANJARMASIN'),('6372','63','BANJAR BARU'),('6401','64','PASER'),('6402','64','KUTAI BARAT'),('6403','64','KUTAI KARTANEGARA'),('6404','64','KUTAI TIMUR'),('6405','64','BERAU'),('6409','64','PENAJAM PASER UTARA'),('6411','64','MAHAKAM HULU'),('6471','64','BALIKPAPAN'),('6472','64','SAMARINDA'),('6474','64','BONTANG'),('6501','65','MALINAU'),('6502','65','BULUNGAN'),('6503','65','TANA TIDUNG'),('6504','65','NUNUKAN'),('6571','65','TARAKAN'),('7101','71','BOLAANG MONGONDOW'),('7102','71','MINAHASA'),('7103','71','KEPULAUAN SANGIHE'),('7104','71','KEPULAUAN TALAUD'),('7105','71','MINAHASA SELATAN'),('7106','71','MINAHASA UTARA'),('7107','71','BOLAANG MONGONDOW UTARA'),('7108','71','SIAU TAGULANDANG BIARO'),('7109','71','MINAHASA TENGGARA'),('7110','71','BOLAANG MONGONDOW SELATAN'),('7111','71','BOLAANG MONGONDOW TIMUR'),('7171','71','MANADO'),('7172','71','BITUNG'),('7173','71','TOMOHON'),('7174','71','KOTAMOBAGU'),('7201','72','BANGGAI KEPULAUAN'),('7202','72','BANGGAI'),('7203','72','MOROWALI'),('7204','72','POSO'),('7205','72','DONGGALA'),('7206','72','TOLI-TOLI'),('7207','72','BUOL'),('7208','72','PARIGI MOUTONG'),('7209','72','TOJO UNA-UNA'),('7210','72','SIGI'),('7211','72','BANGGAI LAUT'),('7212','72','MOROWALI UTARA'),('7271','72','PALU'),('7301','73','KEPULAUAN SELAYAR'),('7302','73','BULUKUMBA'),('7303','73','BANTAENG'),('7304','73','JENEPONTO'),('7305','73','TAKALAR'),('7306','73','GOWA'),('7307','73','SINJAI'),('7308','73','MAROS'),('7309','73','PANGKAJENE DAN KEPULAUAN'),('7310','73','BARRU'),('7311','73','BONE'),('7312','73','SOPPENG'),('7313','73','WAJO'),('7314','73','SIDENRENG RAPPANG'),('7315','73','PINRANG'),('7316','73','ENREKANG'),('7317','73','LUWU'),('7318','73','TANA TORAJA'),('7322','73','LUWU UTARA'),('7325','73','LUWU TIMUR'),('7326','73','TORAJA UTARA'),('7371','73','MAKASSAR'),('7372','73','PAREPARE'),('7373','73','PALOPO'),('7401','74','BUTON'),('7402','74','MUNA'),('7403','74','KONAWE'),('7404','74','KOLAKA'),('7405','74','KONAWE SELATAN'),('7406','74','BOMBANA'),('7407','74','WAKATOBI'),('7408','74','KOLAKA UTARA'),('7409','74','BUTON UTARA'),('7410','74','KONAWE UTARA'),('7411','74','KOLAKA TIMUR'),('7412','74','KONAWE KEPULAUAN'),('7413','74','MUNA BARAT'),('7414','74','BUTON TENGAH'),('7415','74','BUTON SELATAN'),('7471','74','KENDARI'),('7472','74','BAUBAU'),('7501','75','BOALEMO'),('7502','75','GORONTALO'),('7503','75','POHUWATO'),('7504','75','BONE BOLANGO'),('7505','75','GORONTALO UTARA'),('7571','75','GORONTALO'),('7601','76','MAJENE'),('7602','76','POLEWALI MANDAR'),('7603','76','MAMASA'),('7604','76','MAMUJU'),('7605','76','MAMUJU UTARA'),('7606','76','MAMUJU TENGAH'),('8101','81','MALUKU TENGGARA BARAT'),('8102','81','MALUKU TENGGARA'),('8103','81','MALUKU TENGAH'),('8104','81','BURU'),('8105','81','KEPULAUAN ARU'),('8106','81','SERAM BAGIAN BARAT'),('8107','81','SERAM BAGIAN TIMUR'),('8108','81','MALUKU BARAT DAYA'),('8109','81','BURU SELATAN'),('8171','81','AMBON'),('8172','81','TUAL'),('8201','82','HALMAHERA BARAT'),('8202','82','HALMAHERA TENGAH'),('8203','82','KEPULAUAN SULA'),('8204','82','HALMAHERA SELATAN'),('8205','82','HALMAHERA UTARA'),('8206','82','HALMAHERA TIMUR'),('8207','82','PULAU MOROTAI'),('8208','82','PULAU TALIABU'),('8271','82','TERNATE'),('8272','82','TIDORE KEPULAUAN'),('9101','91','FAKFAK'),('9102','91','KAIMANA'),('9103','91','TELUK WONDAMA'),('9104','91','TELUK BINTUNI'),('9105','91','MANOKWARI'),('9106','91','SORONG SELATAN'),('9107','91','SORONG'),('9108','91','RAJA AMPAT'),('9109','91','TAMBRAUW'),('9110','91','MAYBRAT'),('9111','91','MANOKWARI SELATAN'),('9112','91','PEGUNUNGAN ARFAK'),('9171','91','SORONG'),('9401','94','MERAUKE'),('9402','94','JAYAWIJAYA'),('9403','94','JAYAPURA'),('9404','94','NABIRE'),('9408','94','KEPULAUAN YAPEN'),('9409','94','BIAK NUMFOR'),('9410','94','PANIAI'),('9411','94','PUNCAK JAYA'),('9412','94','MIMIKA'),('9413','94','BOVEN DIGOEL'),('9414','94','MAPPI'),('9415','94','ASMAT'),('9416','94','YAHUKIMO'),('9417','94','PEGUNUNGAN BINTANG'),('9418','94','TOLIKARA'),('9419','94','SARMI'),('9420','94','KEEROM'),('9426','94','WAROPEN'),('9427','94','SUPIORI'),('9428','94','MAMBERAMO RAYA'),('9429','94','NDUGA'),('9430','94','LANNY JAYA'),('9431','94','MAMBERAMO TENGAH'),('9432','94','YALIMO'),('9433','94','PUNCAK'),('9434','94','DOGIYAI'),('9435','94','INTAN JAYA'),('9436','94','DEIYAI'),('9471','94','JAYAPURA');

/*Table structure for table `t_permintaan` */

DROP TABLE IF EXISTS `t_permintaan`;

CREATE TABLE `t_permintaan` (
  `kd_permintaan` int(10) NOT NULL AUTO_INCREMENT,
  `permintaan` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `tgl_permintaan` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `kd_kota` varchar(8) DEFAULT NULL,
  `detail_lokasi` varchar(100) DEFAULT NULL,
  `kd_customer` int(10) DEFAULT NULL,
  `budget` double DEFAULT NULL,
  `kd_kategori` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`kd_permintaan`),
  KEY `kd_kategori` (`kd_kategori`),
  KEY `kd_kota` (`kd_kota`),
  KEY `kd_customer` (`kd_customer`),
  CONSTRAINT `t_permintaan_ibfk_2` FOREIGN KEY (`kd_kategori`) REFERENCES `t_kategori` (`kd_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_permintaan_ibfk_3` FOREIGN KEY (`kd_kota`) REFERENCES `t_kota` (`kd_kota`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_permintaan_ibfk_4` FOREIGN KEY (`kd_customer`) REFERENCES `t_customer` (`kd_customer`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_permintaan` */

insert  into `t_permintaan`(`kd_permintaan`,`permintaan`,`deskripsi`,`tgl_permintaan`,`foto`,`kd_kota`,`detail_lokasi`,`kd_customer`,`budget`,`kd_kategori`) values (1,'Pembuatan Robot','Aku ingin membuat robot hebat','2016-12-17',NULL,'1101','Dsn. Blabalba, Desa. hahah. Kecamatan hehehe',1,100000,'K9');

/*Table structure for table `t_produk` */

DROP TABLE IF EXISTS `t_produk`;

CREATE TABLE `t_produk` (
  `kd_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `kd_provider` int(10) DEFAULT NULL,
  PRIMARY KEY (`kd_produk`),
  KEY `kd_provider` (`kd_provider`),
  CONSTRAINT `t_produk_ibfk_1` FOREIGN KEY (`kd_provider`) REFERENCES `t_provider` (`kd_provider`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_produk` */

/*Table structure for table `t_provider` */

DROP TABLE IF EXISTS `t_provider`;

CREATE TABLE `t_provider` (
  `kd_provider` int(10) NOT NULL AUTO_INCREMENT,
  `nama_provider` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `kd_provinsi` varchar(8) DEFAULT NULL,
  `kd_kota` varchar(8) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `kd_kategori` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`kd_provider`),
  KEY `kd_kategori` (`kd_kategori`),
  KEY `t_provider_ibfk_1` (`username`),
  CONSTRAINT `t_provider_ibfk_1` FOREIGN KEY (`username`) REFERENCES `t_akun` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_provider_ibfk_2` FOREIGN KEY (`kd_kategori`) REFERENCES `t_kategori` (`kd_kategori`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `t_provider` */

insert  into `t_provider`(`kd_provider`,`nama_provider`,`deskripsi`,`kd_provinsi`,`kd_kota`,`email`,`no_telp`,`alamat`,`foto`,`username`,`kd_kategori`) values (3,NULL,NULL,'11','1116','riansaepuloh1503@gmail.com',NULL,NULL,NULL,'rianprovider','K10');

/*Table structure for table `t_provinsi` */

DROP TABLE IF EXISTS `t_provinsi`;

CREATE TABLE `t_provinsi` (
  `kd_provinsi` varchar(8) NOT NULL,
  `nama_provinsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kd_provinsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_provinsi` */

insert  into `t_provinsi`(`kd_provinsi`,`nama_provinsi`) values ('11','ACEH'),('12','SUMATERA UTARA'),('13','SUMATERA BARAT'),('14','RIAU'),('15','JAMBI'),('16','SUMATERA SELATAN'),('17','BENGKULU'),('18','LAMPUNG'),('19','KEPULAUAN BANGKA BELITUNG'),('21','KEPULAUAN RIAU'),('31','DKI JAKARTA'),('32','JAWA BARAT'),('33','JAWA TENGAH'),('34','DI YOGYAKARTA'),('35','JAWA TIMUR'),('36','BANTEN'),('51','BALI'),('52','NUSA TENGGARA BARAT'),('53','NUSA TENGGARA TIMUR'),('61','KALIMANTAN BARAT'),('62','KALIMANTAN TENGAH'),('63','KALIMANTAN SELATAN'),('64','KALIMANTAN TIMUR'),('65','KALIMANTAN UTARA'),('71','SULAWESI UTARA'),('72','SULAWESI TENGAH'),('73','SULAWESI SELATAN'),('74','SULAWESI TENGGARA'),('75','GORONTALO'),('76','SULAWESI BARAT'),('81','MALUKU'),('82','MALUKU UTARA'),('91','PAPUA BARAT'),('94','PAPUA');

/*Table structure for table `t_tender` */

DROP TABLE IF EXISTS `t_tender`;

CREATE TABLE `t_tender` (
  `kd_tender` int(10) NOT NULL AUTO_INCREMENT,
  `kd_permintaan` varchar(10) DEFAULT NULL,
  `kd_provider` int(10) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `waktu_pengerjaan` int(3) DEFAULT NULL,
  `harga_penawaran` double DEFAULT NULL,
  PRIMARY KEY (`kd_tender`),
  KEY `kd_provider` (`kd_provider`),
  KEY `kd_permintaan` (`kd_permintaan`),
  CONSTRAINT `t_tender_ibfk_2` FOREIGN KEY (`kd_provider`) REFERENCES `t_provider` (`kd_provider`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_tender_ibfk_3` FOREIGN KEY (`kd_permintaan`) REFERENCES `t_permintaan` (`kd_kategori`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_tender` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
