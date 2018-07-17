-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: teste
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2018_07_16_235458_create_tb_matricula_table',0),(2,'2018_07_16_235458_create_tb_matriculas_table',0);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_disciplina`
--

DROP TABLE IF EXISTS `tb_disciplina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_disciplina` (
  `seq_disciplina` int(11) NOT NULL AUTO_INCREMENT,
  `nom_disciplina` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`seq_disciplina`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_disciplina`
--

LOCK TABLES `tb_disciplina` WRITE;
/*!40000 ALTER TABLE `tb_disciplina` DISABLE KEYS */;
INSERT INTO `tb_disciplina` VALUES (1,'Matemática'),(2,'Português'),(3,'Física');
/*!40000 ALTER TABLE `tb_disciplina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_matricula`
--

DROP TABLE IF EXISTS `tb_matricula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_matricula` (
  `seq_matricula` int(11) NOT NULL AUTO_INCREMENT,
  `num_matricula` varchar(20) DEFAULT NULL,
  `nom_aluno` varchar(200) DEFAULT NULL,
  `des_endereco` varchar(200) DEFAULT NULL,
  `des_bairro` varchar(200) DEFAULT NULL,
  `num_cep` varchar(8) DEFAULT NULL,
  `nom_cidade` varchar(100) DEFAULT NULL,
  `cod_unidade_federacao` varchar(2) DEFAULT NULL,
  `des_email` varchar(200) DEFAULT NULL,
  `dat_entrada_escola` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`seq_matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_matricula`
--

LOCK TABLES `tb_matricula` WRITE;
/*!40000 ALTER TABLE `tb_matricula` DISABLE KEYS */;
INSERT INTO `tb_matricula` VALUES (1,'M001','Walquirio Saraiva Rocha','C 10 Lote 2/3 Apartamento, 604','Centro','72010100','Brasília','DF','walquiriosaraiva@gmail.com','2018-07-01 03:00:00'),(2,'M002','Alicia de Castro Saraiva','C 10 Lote 2/3 Apartamento, 604','Centro','72010100','Brasília','DF','aliciacastrosaraiva@gmail.com','2018-06-01 03:00:00'),(3,'M003','William de Castro Saraiva','C 10 Lote 2/3 Apartamento, 604','Centro','72010100','Brasília','DF','williamcastrosaraiva@gmail.com','2018-06-08 03:00:00'),(4,'M004','Josélia de Oliveira Carvalho','C 10 Lote 2/3 Apartamento, 604','Centro','72010100','Brasília','DF','joseliacarvalho27@gmail.com','2018-05-04 03:00:00'),(5,'M005','Josué de Oliveira Saraiva','C 10 Lote 2/3 Apartamento, 604','Centro','72010100','Brasília','DF','josueoliveirasaraiva@gmail.com','2018-07-10 03:00:00'),(6,'M006','Wallison de Castro Saraiva','C 10 Lote 2/3 Apartamento, 604','Centro','72010100','Brasília','DF','wallisoncastrosaraiva@gmail.com','2018-03-08 03:00:00');
/*!40000 ALTER TABLE `tb_matricula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_nota_disciplina`
--

DROP TABLE IF EXISTS `tb_nota_disciplina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_nota_disciplina` (
  `seq_nota_disciplina` int(11) NOT NULL AUTO_INCREMENT,
  `seq_matricula` int(11) DEFAULT NULL,
  `seq_disciplina` int(11) DEFAULT NULL,
  `num_nota` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`seq_nota_disciplina`),
  KEY `id_fk_matricula` (`seq_matricula`),
  KEY `id_fk_disciplina` (`seq_disciplina`),
  CONSTRAINT `id_fk_disciplina` FOREIGN KEY (`seq_disciplina`) REFERENCES `tb_disciplina` (`seq_disciplina`),
  CONSTRAINT `id_fk_matricula` FOREIGN KEY (`seq_matricula`) REFERENCES `tb_matricula` (`seq_matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_nota_disciplina`
--

LOCK TABLES `tb_nota_disciplina` WRITE;
/*!40000 ALTER TABLE `tb_nota_disciplina` DISABLE KEYS */;
INSERT INTO `tb_nota_disciplina` VALUES (1,1,1,9),(2,1,1,8),(3,1,1,9),(4,1,2,8),(5,1,2,8),(6,1,2,5),(7,1,3,8),(8,1,3,10),(9,1,3,6),(10,2,1,8),(11,2,1,7),(12,2,1,6),(13,2,2,6),(14,2,2,7),(15,2,2,9),(16,2,3,5),(17,2,3,6),(18,2,3,7),(19,3,1,10),(20,3,1,9),(21,3,1,10),(22,3,2,6),(23,3,2,5),(24,3,2,4),(25,3,3,7),(26,3,3,6),(27,3,3,6),(28,4,1,6),(29,4,1,4),(30,4,1,3),(31,4,2,7),(32,4,2,8),(33,4,2,7),(34,4,3,2),(35,4,3,3),(36,4,3,4),(37,5,1,8),(38,5,1,6),(39,5,1,10),(40,5,2,6),(41,5,2,5),(43,5,2,4),(44,5,3,9),(45,5,3,10),(46,5,3,9),(47,6,1,6),(48,6,1,10),(49,6,1,10),(50,6,2,10),(51,6,2,10),(52,6,2,10),(53,6,3,10),(54,6,3,10),(55,6,3,10);
/*!40000 ALTER TABLE `tb_nota_disciplina` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-17 11:10:29
