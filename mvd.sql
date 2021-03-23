-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mvd
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `assc_produto_carrinho`
--

DROP TABLE IF EXISTS `assc_produto_carrinho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `assc_produto_carrinho` (
  `CD_ASSC` int(11) NOT NULL AUTO_INCREMENT,
  `CD_CARRINHO` int(11) NOT NULL,
  `CD_PRODUTO` int(11) NOT NULL,
  `QUANTIDADE` int(11) NOT NULL,
  PRIMARY KEY (`CD_ASSC`),
  KEY `APC_0_idx` (`CD_PRODUTO`),
  KEY `APC_1_idx` (`CD_CARRINHO`),
  CONSTRAINT `APC_0` FOREIGN KEY (`CD_PRODUTO`) REFERENCES `produto` (`CD_PRODUTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `APC_1` FOREIGN KEY (`CD_CARRINHO`) REFERENCES `carrinho` (`CD_CARRINHO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assc_produto_carrinho`
--

/*!40000 ALTER TABLE `assc_produto_carrinho` DISABLE KEYS */;
/*!40000 ALTER TABLE `assc_produto_carrinho` ENABLE KEYS */;

--
-- Table structure for table `assc_venda_produto`
--

DROP TABLE IF EXISTS `assc_venda_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `assc_venda_produto` (
  `CD_ASSC` int(11) NOT NULL AUTO_INCREMENT,
  `CD_PRODUTO` int(11) NOT NULL,
  `CD_VENDA` int(11) NOT NULL,
  `QUANTIDADE` int(11) NOT NULL,
  PRIMARY KEY (`CD_ASSC`),
  KEY `AVP_0_idx` (`CD_PRODUTO`),
  KEY `AVP_1_idx` (`CD_VENDA`),
  CONSTRAINT `AVP_0` FOREIGN KEY (`CD_PRODUTO`) REFERENCES `produto` (`CD_PRODUTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `AVP_1` FOREIGN KEY (`CD_VENDA`) REFERENCES `venda` (`CD_VENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assc_venda_produto`
--

/*!40000 ALTER TABLE `assc_venda_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `assc_venda_produto` ENABLE KEYS */;

--
-- Table structure for table `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `carrinho` (
  `CD_CARRINHO` int(11) NOT NULL AUTO_INCREMENT,
  `CD_CLIENTE` int(11) NOT NULL,
  PRIMARY KEY (`CD_CARRINHO`),
  KEY `CARRINHO_0_idx` (`CD_CLIENTE`),
  CONSTRAINT `CARRINHO_0` FOREIGN KEY (`CD_CLIENTE`) REFERENCES `cliente` (`CD_CLIENTE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrinho`
--

/*!40000 ALTER TABLE `carrinho` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrinho` ENABLE KEYS */;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cliente` (
  `CD_CLIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `CD_USUARIO` int(11) NOT NULL,
  `ESTADO` varchar(45) NOT NULL,
  `CIDADE` varchar(45) NOT NULL,
  `RUA` varchar(45) NOT NULL,
  `NUMERO` varchar(45) NOT NULL,
  `CEP` varchar(45) NOT NULL,
  `ADM` tinyint(4) NOT NULL,
  PRIMARY KEY (`CD_CLIENTE`),
  KEY `C_0_idx` (`CD_USUARIO`),
  CONSTRAINT `C_0` FOREIGN KEY (`CD_USUARIO`) REFERENCES `usuario` (`CD_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

--
-- Table structure for table `cliente_entrega`
--

DROP TABLE IF EXISTS `cliente_entrega`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cliente_entrega` (
  `CD_ENTREGA` int(11) NOT NULL AUTO_INCREMENT,
  `CD_CLIENTE` int(11) NOT NULL,
  `ESTADO` varchar(45) NOT NULL,
  `CIDADE` varchar(45) NOT NULL,
  `RUA` varchar(45) NOT NULL,
  `NUMERO` varchar(45) NOT NULL,
  `CEP` varchar(45) NOT NULL,
  PRIMARY KEY (`CD_ENTREGA`),
  KEY `CE_0_idx` (`CD_CLIENTE`),
  CONSTRAINT `CE_0` FOREIGN KEY (`CD_CLIENTE`) REFERENCES `cliente` (`CD_CLIENTE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente_entrega`
--

/*!40000 ALTER TABLE `cliente_entrega` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente_entrega` ENABLE KEYS */;

--
-- Table structure for table `documentos`
--

DROP TABLE IF EXISTS `documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `documentos` (
  `CD_DOC` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(45) NOT NULL,
  `URL` varchar(45) NOT NULL,
  PRIMARY KEY (`CD_DOC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos`
--

/*!40000 ALTER TABLE `documentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `documentos` ENABLE KEYS */;

--
-- Table structure for table `forma_pagamento`
--

DROP TABLE IF EXISTS `forma_pagamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `forma_pagamento` (
  `CD_FORMA_PAGAMENTO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(45) NOT NULL,
  PRIMARY KEY (`CD_FORMA_PAGAMENTO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forma_pagamento`
--

/*!40000 ALTER TABLE `forma_pagamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `forma_pagamento` ENABLE KEYS */;

--
-- Table structure for table `historico_entrada`
--

DROP TABLE IF EXISTS `historico_entrada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `historico_entrada` (
  `CD_ENTRADA` int(11) NOT NULL AUTO_INCREMENT,
  `CD_PRODUTO` int(11) NOT NULL,
  `QUANTIDADE` int(11) NOT NULL,
  `DATA` date NOT NULL,
  PRIMARY KEY (`CD_ENTRADA`),
  KEY `HE_0_idx` (`CD_PRODUTO`),
  CONSTRAINT `HE0` FOREIGN KEY (`CD_PRODUTO`) REFERENCES `produto` (`CD_PRODUTO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historico_entrada`
--

/*!40000 ALTER TABLE `historico_entrada` DISABLE KEYS */;
INSERT INTO `historico_entrada` VALUES (1,2,4,'2021-02-28'),(2,2,5,'2021-02-28');
/*!40000 ALTER TABLE `historico_entrada` ENABLE KEYS */;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `produto` (
  `CD_PRODUTO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(45) NOT NULL,
  `UNIDADE` varchar(45) NOT NULL,
  `PESO` float(10,2) NOT NULL,
  `QTD_ESTOQUE` int(11) NOT NULL,
  `PRECO` float(10,2) NOT NULL,
  PRIMARY KEY (`CD_PRODUTO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (2,'Goiabada','g',500.00,5,8.00);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

--
-- Table structure for table `status_venda`
--

DROP TABLE IF EXISTS `status_venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `status_venda` (
  `CD_STATUS_VENDA` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(45) NOT NULL,
  PRIMARY KEY (`CD_STATUS_VENDA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_venda`
--

/*!40000 ALTER TABLE `status_venda` DISABLE KEYS */;
/*!40000 ALTER TABLE `status_venda` ENABLE KEYS */;

--
-- Table structure for table `transportadora`
--

DROP TABLE IF EXISTS `transportadora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `transportadora` (
  `CD_TRANSPORTADORA` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(45) NOT NULL,
  `CONTATO` varchar(45) NOT NULL,
  PRIMARY KEY (`CD_TRANSPORTADORA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transportadora`
--

/*!40000 ALTER TABLE `transportadora` DISABLE KEYS */;
/*!40000 ALTER TABLE `transportadora` ENABLE KEYS */;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuario` (
  `CD_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(45) NOT NULL,
  `TELEFONE` varchar(45) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `LOGIN` varchar(45) NOT NULL,
  `SENHA` varchar(45) NOT NULL,
  `CPF` varchar(45) NOT NULL,
  PRIMARY KEY (`CD_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Victor Guerra','32999185695','victor.guerra@estudante.ufjf.br','victor.guerra','123456','000.000.000-00');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

--
-- Table structure for table `venda`
--

DROP TABLE IF EXISTS `venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `venda` (
  `CD_VENDA` int(11) NOT NULL AUTO_INCREMENT,
  `CD_CLIENTE` int(11) NOT NULL,
  `CD_STATUS_VENDA` int(11) NOT NULL,
  `CD_TRANSPORTADORA` int(11) NOT NULL,
  `CD_FORMA_PAGAMENTO` int(11) NOT NULL,
  `VALOR` float NOT NULL,
  `DATA` date NOT NULL,
  `CD_RASTREIO` varchar(45) NOT NULL,
  PRIMARY KEY (`CD_VENDA`),
  KEY `V_0_idx` (`CD_CLIENTE`),
  KEY `V_1_idx` (`CD_STATUS_VENDA`),
  KEY `V_2_idx` (`CD_TRANSPORTADORA`),
  KEY `V_3_idx` (`CD_FORMA_PAGAMENTO`),
  CONSTRAINT `V_0` FOREIGN KEY (`CD_CLIENTE`) REFERENCES `cliente` (`CD_CLIENTE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `V_1` FOREIGN KEY (`CD_STATUS_VENDA`) REFERENCES `status_venda` (`CD_STATUS_VENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `V_2` FOREIGN KEY (`CD_TRANSPORTADORA`) REFERENCES `transportadora` (`CD_TRANSPORTADORA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `V_3` FOREIGN KEY (`CD_FORMA_PAGAMENTO`) REFERENCES `forma_pagamento` (`CD_FORMA_PAGAMENTO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venda`
--

/*!40000 ALTER TABLE `venda` DISABLE KEYS */;
/*!40000 ALTER TABLE `venda` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-23 19:39:00
