/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100413
 Source Host           : localhost:3306
 Source Schema         : laravelcms

 Target Server Type    : MySQL
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 11/08/2020 15:41:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for characters
-- ----------------------------
DROP TABLE IF EXISTS `characters`;
CREATE TABLE `characters`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of characters
-- ----------------------------
INSERT INTO `characters` VALUES (1, 'A Camerata foi apenas os dois no início, e suas fileiras nunca foram destinadas a exceder um número a ser contado em uma mão.', 'uploads/images/characters/1597170167.png', NULL, '2020-08-11 18:23:15');
INSERT INTO `characters` VALUES (2, 'Red, uma jovem cantora, entrou em posse do Transistor. Sendo a poderosa espada falante. O grupo Possessores quer tanto ela quanto o Transistor e está perseguindo implacavelmente a sua procura.', 'uploads/images/characters/1597170173.png', NULL, '2020-08-11 18:23:23');
INSERT INTO `characters` VALUES (6, 'Sybil é descrita pelo Transistor como sendo os \"olhos e ouvidos\" da Camerata.', 'uploads/images/characters/1597170214.png', '2020-08-11 18:23:34', '2020-08-11 18:23:34');
INSERT INTO `characters` VALUES (7, '[Teste Slide] A Camerata foi apenas os dois no início, e suas fileiras nunca foram destinadas a exceder um número a ser contado em uma mão.', 'uploads/images/characters/1597170167.png', '2020-08-11 18:23:34', '2020-08-11 18:23:15');

-- ----------------------------
-- Table structure for conteudos
-- ----------------------------
DROP TABLE IF EXISTS `conteudos`;
CREATE TABLE `conteudos`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of conteudos
-- ----------------------------
INSERT INTO `conteudos` VALUES (1, 'backgroundSuperior', 'uploads/images/1597170125.png', NULL, NULL);
INSERT INTO `conteudos` VALUES (2, 'txtDestaqueTema', 'Transistor - Red The Singer', NULL, NULL);
INSERT INTO `conteudos` VALUES (3, 'nomeJogo', 'SuperGiantGames', NULL, NULL);
INSERT INTO `conteudos` VALUES (4, 'frase', '\"Olha, o que quer que você esteja pensando, me faça um favor, não solte.\"', NULL, NULL);
INSERT INTO `conteudos` VALUES (5, 'descricao_formulario', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2020_08_10_231520_create_conteudos_table', 2);
INSERT INTO `migrations` VALUES (5, '2020_08_10_233110_create_conteudos_table', 3);
INSERT INTO `migrations` VALUES (6, '2020_08_10_235142_create_configuracoes_table', 4);
INSERT INTO `migrations` VALUES (7, '2020_08_10_235958_create_conteudos_table', 5);
INSERT INTO `migrations` VALUES (8, '2020_08_11_005542_create_personagens_table', 6);
INSERT INTO `migrations` VALUES (9, '2020_08_11_010927_create_characters_table', 7);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'Alexia', 'usuario@gmail.com', NULL, '$2y$10$2qfOR1gVgg9tAb6oQyJLye7Jkl4s6Zy7es2J0eaYmNuwsP.YFY3NS', 'xigi0T4DJo7mnQ0eGNI5t87YF2XS4ZqSJ79F5dekbX1foF1Xp3B2j6nK78W8', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
