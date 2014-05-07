/*
Navicat MySQL Data Transfer

Source Server         : Workep
Source Server Version : 50536
Source Host           : localhost:3306
Source Database       : core-gestionhumana

Target Server Type    : MYSQL
Target Server Version : 50536
File Encoding         : 65001

Date: 2014-05-07 15:38:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `archivo`
-- ----------------------------
DROP TABLE IF EXISTS `archivo`;
CREATE TABLE `archivo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(11) NOT NULL,
  `PUBLICACION_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `PUBLICACION_id` (`PUBLICACION_id`),
  CONSTRAINT `holi` FOREIGN KEY (`PUBLICACION_id`) REFERENCES `publicacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of archivo
-- ----------------------------

-- ----------------------------
-- Table structure for `comentario`
-- ----------------------------
DROP TABLE IF EXISTS `comentario`;
CREATE TABLE `comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL,
  `PUBLICACION_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `PUBLICACION_id` (`PUBLICACION_id`),
  CONSTRAINT `PUBLICACION_id` FOREIGN KEY (`PUBLICACION_id`) REFERENCES `publicacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of comentario
-- ----------------------------

-- ----------------------------
-- Table structure for `etiqueta`
-- ----------------------------
DROP TABLE IF EXISTS `etiqueta`;
CREATE TABLE `etiqueta` (
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of etiqueta
-- ----------------------------

-- ----------------------------
-- Table structure for `publicacion`
-- ----------------------------
DROP TABLE IF EXISTS `publicacion`;
CREATE TABLE `publicacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8_unicode_ci NOT NULL,
  `USUARIO_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `USUARIO_id` (`USUARIO_id`),
  CONSTRAINT `publicacion_ibfk_1` FOREIGN KEY (`USUARIO_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of publicacion
-- ----------------------------

-- ----------------------------
-- Table structure for `trending`
-- ----------------------------
DROP TABLE IF EXISTS `trending`;
CREATE TABLE `trending` (
  `PUBLICACION_id` int(11) NOT NULL,
  `ETIQUETA_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ETIQUETA_nombre`),
  KEY `publi` (`PUBLICACION_id`),
  CONSTRAINT `publi` FOREIGN KEY (`PUBLICACION_id`) REFERENCES `publicacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `eti` FOREIGN KEY (`ETIQUETA_nombre`) REFERENCES `etiqueta` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of trending
-- ----------------------------

-- ----------------------------
-- Table structure for `usuario`
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `sesion` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of usuario
-- ----------------------------
