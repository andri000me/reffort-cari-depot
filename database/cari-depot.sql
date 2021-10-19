/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : cari_depot

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 19/10/2021 20:25:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `role` enum('admin','super admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for banners
-- ----------------------------
DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `expired_at` date NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of banners
-- ----------------------------
INSERT INTO `banners` VALUES (1, 'assets/images/banner/banner-1.svg', '2022-01-01', '2021-10-17 19:21:24', '2021-10-17 19:21:32');

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES (1, 'Whatsapp', 'fab fa-whatsapp', '2021-10-19 19:52:38', '2021-10-19 19:52:38');
INSERT INTO `contacts` VALUES (2, 'Phone', 'fas fa-phone-alt', '2021-10-19 19:52:38', '2021-10-19 19:52:43');
INSERT INTO `contacts` VALUES (3, 'Email', 'fas fa-envelope', '2021-10-19 19:52:38', '2021-10-19 19:52:42');

-- ----------------------------
-- Table structure for parner_likes
-- ----------------------------
DROP TABLE IF EXISTS `parner_likes`;
CREATE TABLE `parner_likes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_partner` int(11) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of parner_likes
-- ----------------------------
INSERT INTO `parner_likes` VALUES (1, 1, 1, NULL, NULL);
INSERT INTO `parner_likes` VALUES (2, 1, 2, NULL, NULL);
INSERT INTO `parner_likes` VALUES (3, 2, 1, NULL, '2021-10-19 20:21:12');
INSERT INTO `parner_likes` VALUES (4, 2, 2, NULL, NULL);
INSERT INTO `parner_likes` VALUES (5, 2, 3, NULL, NULL);

-- ----------------------------
-- Table structure for partner_contacts
-- ----------------------------
DROP TABLE IF EXISTS `partner_contacts`;
CREATE TABLE `partner_contacts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contact` int(11) NULL DEFAULT NULL,
  `id_partner` int(11) NULL DEFAULT NULL,
  `contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of partner_contacts
-- ----------------------------
INSERT INTO `partner_contacts` VALUES (1, 1, 1, '+62 8123 2334 3443', NULL, NULL);

-- ----------------------------
-- Table structure for partner_gallerys
-- ----------------------------
DROP TABLE IF EXISTS `partner_gallerys`;
CREATE TABLE `partner_gallerys`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_partner` int(11) NULL DEFAULT NULL,
  `source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for partner_licenses
-- ----------------------------
DROP TABLE IF EXISTS `partner_licenses`;
CREATE TABLE `partner_licenses`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `start_date` datetime(0) NULL DEFAULT NULL,
  `end_date` datetime(0) NULL DEFAULT NULL,
  `status` enum('registered','approved','rejected') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'registered',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for partner_schedules
-- ----------------------------
DROP TABLE IF EXISTS `partner_schedules`;
CREATE TABLE `partner_schedules`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_schedule_day` int(11) NULL DEFAULT NULL,
  `open_time` time(0) NULL DEFAULT NULL,
  `close_time` time(0) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for partner_services
-- ----------------------------
DROP TABLE IF EXISTS `partner_services`;
CREATE TABLE `partner_services`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NULL DEFAULT NULL,
  `id_partner` int(11) NULL DEFAULT NULL,
  `status` enum('ready in stock','limited stock','out of stock') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'ready in stock',
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for partners
-- ----------------------------
DROP TABLE IF EXISTS `partners`;
CREATE TABLE `partners`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `highlight` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `latitude` decimal(20, 8) NULL DEFAULT NULL,
  `longitude` decimal(20, 8) NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of partners
-- ----------------------------
INSERT INTO `partners` VALUES (1, 'Depot 0', 'depot0@gmail.com', '$2y$10$yR5i8tYIkfGh05FI2EDg8.XoVf8NkyPM.cEpHgTxbbIqfJvinK5wK', '080000000', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18041700, 106.86012500, 'Jl. XXXXXX', '2021-10-18 18:38:35', NULL);
INSERT INTO `partners` VALUES (2, 'Depot 1', 'depot1@gmail.com', '$2y$10$AqcOes7lEl0WC6YIv42.zeTVcZ//WXVLznKgZ2rOZanFkgGUOEBOy', '080000001', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18141700, 106.86112500, 'Jl. XXXXXX', '2021-10-18 18:38:35', NULL);
INSERT INTO `partners` VALUES (3, 'Depot 2', 'depot2@gmail.com', '$2y$10$c9sFB6giER1QZCiqsnZI5ORoS25S99xZ94B9GzMQLa8eLk1gfQahG', '080000002', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18241700, 106.86212500, 'Jl. XXXXXX', '2021-10-18 18:38:35', NULL);
INSERT INTO `partners` VALUES (4, 'Depot 3', 'depot3@gmail.com', '$2y$10$Db68Z15FmdcvUfm17GWvG.7lRUNZP90erxKmITKt2nhVeJ1VMjUHK', '080000003', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18341700, 106.86312500, 'Jl. XXXXXX', '2021-10-18 18:38:35', NULL);
INSERT INTO `partners` VALUES (5, 'Depot 4', 'depot4@gmail.com', '$2y$10$awUrY0klwFLT8leDPY4kZeJjFkI/1nlxxa79IQC1maJxl136RNhE.', '080000004', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18441700, 106.86412500, 'Jl. XXXXXX', '2021-10-18 18:38:35', NULL);
INSERT INTO `partners` VALUES (6, 'Depot 5', 'depot5@gmail.com', '$2y$10$k5pn2yJBuBpFxNXVr/yUcOubAqvlpN8uUNCjiNrXiSICJYDtGW0eK', '080000005', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18541700, 106.86512500, 'Jl. XXXXXX', '2021-10-18 18:38:35', NULL);
INSERT INTO `partners` VALUES (7, 'Depot 6', 'depot6@gmail.com', '$2y$10$rY2z2oreg5EYts8avc7beeOI9FX8hNZlloG2m.YpwoF3BguvNFKCy', '080000006', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18641700, 106.86612500, 'Jl. XXXXXX', '2021-10-18 18:38:35', NULL);
INSERT INTO `partners` VALUES (8, 'Depot 7', 'depot7@gmail.com', '$2y$10$SbzVRCFIf4XuNvmZM14WTeObpulJipZpfv8OTEibTjx/.H/UnALrW', '080000007', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18741700, 106.86712500, 'Jl. XXXXXX', '2021-10-18 18:38:36', NULL);
INSERT INTO `partners` VALUES (9, 'Depot 8', 'depot8@gmail.com', '$2y$10$E3bvmGkZgXWx/x/V5VqyXePG4KyOT6DuP.1JvcC06JhN7HqfDObyC', '080000008', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18841700, 106.86812500, 'Jl. XXXXXX', '2021-10-18 18:38:36', NULL);
INSERT INTO `partners` VALUES (10, 'Depot 9', 'depot9@gmail.com', '$2y$10$rQRUf9pMazTXGpvNo7jzEet.k9Y5XQUEVP6mmDog7mmsYkzB9rdmK', '080000009', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18941700, 106.86912500, 'Jl. XXXXXX', '2021-10-18 18:38:36', NULL);
INSERT INTO `partners` VALUES (11, 'Depot 10', 'depot10@gmail.com', '$2y$10$8Ah1QDExOQ3tbK38vWwcJedQgsfP3hUcXKQ.1BV8QVkWMxGkTGRmC', '0800000010', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18104170, 106.86101250, 'Jl. XXXXXX', '2021-10-18 18:38:36', NULL);
INSERT INTO `partners` VALUES (12, 'Depot 11', 'depot11@gmail.com', '$2y$10$2eddVT4fgQkWkmt5ckjBtenvv4XVB9K/SA0bg4Dvvznw0ov5kyQf2', '0800000011', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18114170, 106.86111250, 'Jl. XXXXXX', '2021-10-18 18:38:36', NULL);
INSERT INTO `partners` VALUES (13, 'Depot 12', 'depot12@gmail.com', '$2y$10$zsuXOXTJBFpB8IebEfoBP.2UKsgSCrKk9swLgoVNg0qp25pS5jtYm', '0800000012', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18124170, 106.86121250, 'Jl. XXXXXX', '2021-10-18 18:38:36', NULL);
INSERT INTO `partners` VALUES (14, 'Depot 13', 'depot13@gmail.com', '$2y$10$gkXPVaz.Ma9pDEjWeOpGSugigxjAVBY/EZtl1UM5nigBDfW9nVagq', '0800000013', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18134170, 106.86131250, 'Jl. XXXXXX', '2021-10-18 18:38:36', NULL);
INSERT INTO `partners` VALUES (15, 'Depot 14', 'depot14@gmail.com', '$2y$10$wsI30Xk7Lx4Kh2o00d4bTeltAlBpr8IzePaDZrmc5KY4aDw.fQQae', '0800000014', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18144170, 106.86141250, 'Jl. XXXXXX', '2021-10-18 18:38:36', NULL);
INSERT INTO `partners` VALUES (16, 'Depot 15', 'depot15@gmail.com', '$2y$10$nV.bjSmaNG089.8Opyu5GO7lt9QKgia7fMkVN8oSTufGql/m32LjO', '0800000015', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18154170, 106.86151250, 'Jl. XXXXXX', '2021-10-18 18:38:36', NULL);
INSERT INTO `partners` VALUES (17, 'Depot 16', 'depot16@gmail.com', '$2y$10$L8cJ2kmslYmxADKImS9NQOH4P8QC4wxxlxPByQvKCN7u48lZfjoU2', '0800000016', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18164170, 106.86161250, 'Jl. XXXXXX', '2021-10-18 18:38:36', NULL);
INSERT INTO `partners` VALUES (18, 'Depot 17', 'depot17@gmail.com', '$2y$10$T0wAMNL7Y99Up.icXS1F6.q3ogYCIC2yMv2DyXeIxlIEyHPvrLUTy', '0800000017', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18174170, 106.86171250, 'Jl. XXXXXX', '2021-10-18 18:38:36', NULL);
INSERT INTO `partners` VALUES (19, 'Depot 18', 'depot18@gmail.com', '$2y$10$MswfRcg0IusQfHib7pxrW.XMZAC48fx4B4.VGfKsWutgPRgoVPrzC', '0800000018', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18184170, 106.86181250, 'Jl. XXXXXX', '2021-10-18 18:38:36', NULL);
INSERT INTO `partners` VALUES (20, 'Depot 19', 'depot19@gmail.com', '$2y$10$Yl/Lu0HRtMPzMxqNEHOZYOz8hEFirSlpouYVtPIxZ5/ae2hUBdJDm', '0800000019', 'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and\r\n				typesetting industry.</p>', -6.18194170, 106.86191250, 'Jl. XXXXXX', '2021-10-18 18:38:37', NULL);

-- ----------------------------
-- Table structure for schedule_days
-- ----------------------------
DROP TABLE IF EXISTS `schedule_days`;
CREATE TABLE `schedule_days`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of schedule_days
-- ----------------------------
INSERT INTO `schedule_days` VALUES (1, 'Senin', NULL);
INSERT INTO `schedule_days` VALUES (2, 'Selasa', NULL);
INSERT INTO `schedule_days` VALUES (3, 'Rabu', NULL);
INSERT INTO `schedule_days` VALUES (4, 'Kamis', NULL);
INSERT INTO `schedule_days` VALUES (5, 'Jumat', NULL);
INSERT INTO `schedule_days` VALUES (6, 'Sabtu', NULL);
INSERT INTO `schedule_days` VALUES (7, 'Minggu', NULL);

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES (1, 'Mineral Water', 'assets/images/icon-refill/mineral-water.svg', '2021-10-17 19:17:18', '2021-10-17 19:17:44');
INSERT INTO `services` VALUES (2, 'Liquified Petroleum Gas', 'assets/images/icon-refill/gas.svg', '2021-10-17 19:17:18', '2021-10-17 19:19:44');
INSERT INTO `services` VALUES (3, 'Perfume Oil', 'assets/images/icon-refill/parfume.svg', '2021-10-17 19:17:18', '2021-10-17 19:19:45');
INSERT INTO `services` VALUES (4, 'Fire Extinguisher', 'assets/images/icon-refill/fire-extinguisher.svg', '2021-10-17 19:17:18', '2021-10-17 19:19:45');
INSERT INTO `services` VALUES (5, 'Oxygen', 'assets/images/icon-refill/oxsygen.svg', '2021-10-17 19:17:18', '2021-10-17 19:19:46');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Customers A', 'customers.a@gmail.com', '$2y$10$yR5i8tYIkfGh05FI2EDg8.XoVf8NkyPM.cEpHgTxbbIqfJvinK5wK', '8123456789', NULL, NULL);
INSERT INTO `users` VALUES (2, 'Customers B', 'customers.b@gmail.com', '$2y$10$yR5i8tYIkfGh05FI2EDg8.XoVf8NkyPM.cEpHgTxbbIqfJvinK5wK', '8123456790', NULL, NULL);
INSERT INTO `users` VALUES (3, 'Customers C', 'customers.c@gmail.com', '$2y$10$yR5i8tYIkfGh05FI2EDg8.XoVf8NkyPM.cEpHgTxbbIqfJvinK5wK', '8123456791', NULL, NULL);
INSERT INTO `users` VALUES (4, 'Customers D', 'customers.d@gmail.com', '$2y$10$yR5i8tYIkfGh05FI2EDg8.XoVf8NkyPM.cEpHgTxbbIqfJvinK5wK', '8123456792', NULL, NULL);
INSERT INTO `users` VALUES (5, 'Customers E', 'customers.e@gmail.com', '$2y$10$yR5i8tYIkfGh05FI2EDg8.XoVf8NkyPM.cEpHgTxbbIqfJvinK5wK', '8123456793', NULL, NULL);
INSERT INTO `users` VALUES (6, 'Customers F', 'customers.f@gmail.com', '$2y$10$yR5i8tYIkfGh05FI2EDg8.XoVf8NkyPM.cEpHgTxbbIqfJvinK5wK', '8123456794', NULL, NULL);
INSERT INTO `users` VALUES (7, 'Customers G', 'customers.g@gmail.com', '$2y$10$yR5i8tYIkfGh05FI2EDg8.XoVf8NkyPM.cEpHgTxbbIqfJvinK5wK', '8123456795', NULL, NULL);
INSERT INTO `users` VALUES (8, 'Customers H', 'customers.h@gmail.com', '$2y$10$yR5i8tYIkfGh05FI2EDg8.XoVf8NkyPM.cEpHgTxbbIqfJvinK5wK', '8123456796', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;