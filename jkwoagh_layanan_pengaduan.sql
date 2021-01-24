/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : jkwoagh_layanan_pengaduan

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 24/01/2021 19:22:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for form_token
-- ----------------------------
DROP TABLE IF EXISTS `form_token`;
CREATE TABLE `form_token`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `token` varbinary(128) NULL DEFAULT NULL,
  `date_created` int(11) NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of form_token
-- ----------------------------
INSERT INTO `form_token` VALUES (5, 'wandaazhar@gmail.com', 0x3137383331383037313831333432323430303136303737333431363035393031, 1610349334, 'Wanda Azhar', NULL);

-- ----------------------------
-- Table structure for history_login
-- ----------------------------
DROP TABLE IF EXISTS `history_login`;
CREATE TABLE `history_login`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` int(11) NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 333 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of history_login
-- ----------------------------
INSERT INTO `history_login` VALUES (1, 1593506707, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (2, 1593507751, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (3, 1593507973, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (4, 1593511731, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (5, 1593515526, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (6, 1593515690, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (7, 1593516190, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (8, 1593528129, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (9, 1593528187, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (10, 1593567757, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (11, 1593575089, 'Ris Aulia Septiani', 'risaulias@gmail.com');
INSERT INTO `history_login` VALUES (12, 1593607242, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (13, 1593617655, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (14, 1593617722, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (15, 1593627091, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (16, 1593627523, 'Ris Aulia Septiani', 'risaulias@gmail.com');
INSERT INTO `history_login` VALUES (17, 1593632620, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (18, 1593633103, 'Ris Aulia Septiani', 'risaulias@gmail.com');
INSERT INTO `history_login` VALUES (19, 1593633160, 'Ris Aulia Septiani', 'risaulias@gmail.com');
INSERT INTO `history_login` VALUES (20, 1593633179, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (21, 1593678438, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (22, 1593678526, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (23, 1593689293, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (24, 1593712362, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (25, 1593718964, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (26, 1594019274, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (27, 1594046404, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (28, 1594088782, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (29, 1594092131, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (30, 1594112276, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (31, 1594120669, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (32, 1594132700, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (33, 1594172876, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (34, 1594175166, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (35, 1594177014, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (36, 1594177226, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (37, 1594177241, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (38, 1594179143, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (39, 1594179387, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (40, 1594179504, 'Keperawatan', 'keperawatan@gmail.com');
INSERT INTO `history_login` VALUES (41, 1594179962, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (42, 1594180170, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (43, 1594180217, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (44, 1594180475, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (45, 1594183429, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (46, 1594184342, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (47, 1594184686, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (48, 1594184693, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (49, 1594191496, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (50, 1594191641, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (51, 1594191678, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (52, 1594191826, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (53, 1594191906, 'Sirs RSU Tangsel', 'sirsrsutangsel@gmail.com');
INSERT INTO `history_login` VALUES (54, 1594191935, 'SIRS RSU Tangsel', 'sirsrsutangsel@gmail.com');
INSERT INTO `history_login` VALUES (55, 1594192060, 'SIRS RSU Tangsel', 'sirsrsutangsel@gmail.com');
INSERT INTO `history_login` VALUES (56, 1594192291, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (57, 1594194433, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (58, 1594194494, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (59, 1594194905, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (60, 1594195583, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (61, 1594196408, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (62, 1594201847, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (63, 1594204699, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (64, 1594209741, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (65, 1594211502, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (66, 1594211532, 'Keperawatan', 'keperawatan@gmail.com');
INSERT INTO `history_login` VALUES (67, 1594211603, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (68, 1594211871, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (69, 1594212082, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (70, 1594214741, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (71, 1594236602, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (72, 1594258912, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (73, 1594261967, 'Keperawatan', 'keperawatan@gmail.com');
INSERT INTO `history_login` VALUES (74, 1594262175, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (75, 1594314760, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (76, 1594406387, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (77, 1594406388, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (78, 1594433257, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (79, 1594448384, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (80, 1594456914, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (81, 1594473944, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (82, 1594482242, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (83, 1594488840, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (84, 1594607751, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (85, 1594657747, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (86, 1594920505, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (87, 1594920639, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (88, 1595164261, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (89, 1595181051, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (90, 1595188827, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (91, 1595189517, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (92, 1595189687, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (93, 1595190378, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (94, 1595190506, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (95, 1595190967, 'Keperawatan', 'keperawatan@gmail.com');
INSERT INTO `history_login` VALUES (96, 1595191007, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (97, 1595191041, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (98, 1595269911, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (99, 1595269987, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (100, 1595313668, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (101, 1595314492, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (102, 1595425149, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (103, 1595425168, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (104, 1595425240, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (105, 1595425328, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (106, 1595433230, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (107, 1595433360, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (108, 1595525651, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (109, 1595532321, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (110, 1595534908, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (111, 1595534936, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (112, 1595536375, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (113, 1595536750, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (114, 1595536850, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (115, 1595561101, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (116, 1595585660, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (117, 1595623262, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (118, 1595660598, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (119, 1595688066, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (120, 1595688081, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (121, 1595736181, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (122, 1595752709, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (123, 1595844393, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (124, 1595845421, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (125, 1595845451, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (126, 1595845500, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (127, 1595848191, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (128, 1595869397, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (129, 1595869505, 'Keperawatan', 'keperawatan@gmail.com');
INSERT INTO `history_login` VALUES (130, 1595869850, 'Keperawatan', 'keperawatan@gmail.com');
INSERT INTO `history_login` VALUES (131, 1595869875, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (132, 1595869923, 'Keperawatan', 'keperawatan@gmail.com');
INSERT INTO `history_login` VALUES (133, 1595907150, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (134, 1595910800, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (135, 1595911166, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (136, 1595921668, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (137, 1595930267, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (138, 1595930305, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (139, 1595930934, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (140, 1595930947, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (141, 1595942883, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (142, 1595943203, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (143, 1595961479, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (144, 1595961507, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (145, 1595962874, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (146, 1595963156, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (147, 1595963553, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (148, 1595963812, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (149, 1595963890, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (150, 1595964370, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (151, 1595964445, 'Keperawatan', 'keperawatan@gmail.com');
INSERT INTO `history_login` VALUES (152, 1595964980, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (153, 1595990100, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (154, 1595990145, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (155, 1596006202, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (156, 1596012672, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (157, 1596015937, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (158, 1596017072, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (159, 1596280612, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (160, 1596281546, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (161, 1596281579, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (162, 1596286665, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (163, 1596286968, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (164, 1596286979, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (165, 1596287038, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (166, 1596287059, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (167, 1596287354, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (168, 1596287617, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (169, 1596287949, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (170, 1596288006, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (171, 1596288635, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (172, 1596291957, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (173, 1596366168, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (174, 1596379113, 'Ris Aulia Septiani', 'risaulias@gmail.com');
INSERT INTO `history_login` VALUES (175, 1596384164, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (176, 1596384245, 'Ris Aulia Septiani', 'risaulias@gmail.com');
INSERT INTO `history_login` VALUES (177, 1596390036, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (178, 1596390140, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (179, 1596390687, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (180, 1596390701, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (181, 1596390755, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (182, 1596390917, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (183, 1596392193, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (184, 1596394002, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (185, 1596394092, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (186, 1596395496, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (187, 1596437503, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (188, 1596523788, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (189, 1596523841, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (190, 1596523878, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (191, 1596524459, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (192, 1596524533, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (193, 1596524605, 'Keperawatan', 'keperawatan@gmail.com');
INSERT INTO `history_login` VALUES (194, 1596524630, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (195, 1596524667, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (196, 1596527109, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (197, 1596538535, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (198, 1596625430, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (199, 1596632841, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (200, 1596652621, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (201, 1596652967, 'Pelayanan Medis', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (202, 1596654063, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (203, 1596654086, 'Keperawatan', 'keperawatan@gmail.com');
INSERT INTO `history_login` VALUES (204, 1596654099, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (205, 1596654178, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (206, 1596654268, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (207, 1596654439, 'Pelayanan Medis', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (208, 1596654469, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (209, 1596654487, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (210, 1596655140, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (211, 1596655262, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (212, 1596655284, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (213, 1596656942, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (214, 1596656969, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (215, 1596656998, 'Keperawatan', 'keperawatan@gmail.com');
INSERT INTO `history_login` VALUES (216, 1596707485, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (217, 1596723242, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (218, 1596723311, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (219, 1596740391, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (220, 1596740425, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (221, 1596744012, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (222, 1596744249, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (223, 1596744733, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (224, 1596745487, 'Pelayanan Medis', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (225, 1596745532, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (226, 1596745603, 'Pelayanan Medis', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (227, 1596746745, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (228, 1596746796, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (229, 1596802052, 'Pelayanan Medis', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (230, 1596802072, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (231, 1596802342, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (232, 1596802544, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (233, 1596802724, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (234, 1596802753, 'Pelayanan Medis', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (235, 1596802852, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (236, 1596808405, 'Pelayanan Medis', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (237, 1596808423, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (238, 1596808604, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (239, 1596808617, 'Pelayanan Medis', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (240, 1596811344, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (241, 1596812184, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (242, 1596812678, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (243, 1596812697, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (244, 1596813114, 'Pelayanan Medis', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (245, 1596813356, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (246, 1596813729, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (247, 1596813964, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (248, 1596814225, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (249, 1596814391, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (250, 1596814548, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (251, 1596814556, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (252, 1596814816, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (253, 1597041874, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (254, 1597042275, 'Pelayanan Medis', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (255, 1597042483, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (256, 1597042496, 'Pelayanan Medis', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (257, 1597042814, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (258, 1597043574, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (259, 1597043921, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (260, 1597043962, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (261, 1597044668, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (262, 1597044705, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (263, 1597044832, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (264, 1597044904, 'Pelayanan Medis', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (265, 1597044920, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (266, 1597047210, 'Sekar Nuraida', 'sekarkarie@gmail.com');
INSERT INTO `history_login` VALUES (267, 1597048115, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (268, 1597048923, 'Sekar Nuraida', 'sekarkarie@gmail.com');
INSERT INTO `history_login` VALUES (269, 1597071641, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (270, 1597071660, 'Sekar Nuraida', 'sekarkarie@gmail.com');
INSERT INTO `history_login` VALUES (271, 1597082241, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (272, 1597093263, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (273, 1597097274, 'Sekar Nuraida', 'sekarkarie@gmail.com');
INSERT INTO `history_login` VALUES (274, 1597099884, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (275, 1597142255, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (276, 1597253404, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (277, 1597328158, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (278, 1597389900, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (279, 1601296253, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (280, 1601314500, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (281, 1601314658, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (282, 1601315696, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (283, 1601652537, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (284, 1601653429, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (285, 1601655303, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (286, 1601655336, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (287, 1602098804, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (288, 1604407038, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (289, 1604407099, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (290, 1604488446, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (291, 1609180487, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (292, 1609187622, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (293, 1609240390, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (294, 1609240482, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (295, 1609241936, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (296, 1609242060, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (297, 1609268821, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (298, 1609270206, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (299, 1609270216, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (300, 1609272105, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (301, 1609272115, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (302, 1609272208, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (303, 1609272305, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (304, 1609272693, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (305, 1609272787, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (306, 1609273776, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (307, 1609274688, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (308, 1609274820, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (309, 1609276674, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (310, 1610256046, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (311, 1610256187, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (312, 1610257099, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (313, 1610301933, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (314, 1610306532, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (315, 1610386611, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (316, 1610386729, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (317, 1610389792, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (318, 1610478599, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (319, 1610479636, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (320, 1610481583, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (321, 1610510979, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (322, 1610511041, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (323, 1610511660, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (324, 1610512180, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (325, 1610513864, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (326, 1610514585, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (327, 1610515502, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (328, 1610520451, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (329, 1610522496, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (330, 1610525048, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (331, 1610525270, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (332, 1611490886, 'SIRS RSU Tangsel', 'sirsrsutangsel@gmail.com');

-- ----------------------------
-- Table structure for pesan
-- ----------------------------
DROP TABLE IF EXISTS `pesan`;
CREATE TABLE `pesan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `subject` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bidang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pesan_masuk` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `pesan_keluar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `file` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `file_pengadu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_masuk` int(11) NULL DEFAULT NULL,
  `tgl_forward` int(11) NULL DEFAULT NULL,
  `tgl_balas` int(11) NULL DEFAULT NULL,
  `tgl_selesai` int(11) NULL DEFAULT NULL,
  `status_proses` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'sudah diterima, belum dibalas, sedang diproses, selesai',
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of pesan
-- ----------------------------
INSERT INTO `pesan` VALUES (6, 5, NULL, 'Pelayanan Apotek', NULL, 'Untuk fasilitas mushola tolong di adakan ,mengingat rata2 pasien adalah muslim.Biarpun ada masjid didepan jalan jangan itu buat solusi.tetap harusnya rsud sebesar ini musti ada tempat ibadahnya.terimakasih', NULL, NULL, 'white-hat.jpg', 1610525385, NULL, NULL, NULL, 'sudah diterima', 'wandaazhar@gmail.com');

-- ----------------------------
-- Table structure for tb_jadwal_dokter
-- ----------------------------
DROP TABLE IF EXISTS `tb_jadwal_dokter`;
CREATE TABLE `tb_jadwal_dokter`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poliklinik` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `senin` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `selasa` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rabu` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kamis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `trash` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 68 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_jadwal_dokter
-- ----------------------------
INSERT INTO `tb_jadwal_dokter` VALUES (2, 'Klinik Penyakit Dalam', 'dr. Hadiyanti, Sp.PD', '09.00 - selesai', '08.00 - Selesai', '-', '-', '-', 'gesta.jpg', '0');
INSERT INTO `tb_jadwal_dokter` VALUES (3, 'Klinik Penyakit Dalam', 'dr. Silvia Dewi, Sp.PD', '10.00 - Selesai', '-', '-', '-', '-', 'default-dokter.png', '0');
INSERT INTO `tb_jadwal_dokter` VALUES (4, 'Klinik Penyakit Dalam', 'dr. Monita Lubis, Sp.PD', '-', '-', '-', '10.00 - Selesai', '-', 'default-dokter.png', '0');
INSERT INTO `tb_jadwal_dokter` VALUES (5, 'Klinik Penyakit Dalam', 'dr. Habib Burahman, Sp.PD', '-', '-', '08.00 - Selesai', '-', '-', 'default-dokter.png', '0');
INSERT INTO `tb_jadwal_dokter` VALUES (6, 'Klinik Saraf', 'dr. Khristi H, Sp. N', '10.30 - 14.00', '-', '10.30 - 14.00', '-', '-', 'default-dokter.png', '0');
INSERT INTO `tb_jadwal_dokter` VALUES (59, 'Klinik THT', 'dr. Muhammad Akbar, Sp. T.H.T.K.L', '08.00 - 14.00', '-', '-', '-', '-', 'default-dokter.png', '0');
INSERT INTO `tb_jadwal_dokter` VALUES (7, 'Klinik Saraf', 'dr. A. Ichsan, Sp. N', '-', '10.30 - 14.00', '-', '10.30 - 14.00', '-', 'default-dokter.png', '0');
INSERT INTO `tb_jadwal_dokter` VALUES (8, 'Klinik Mata', 'dr. Arif Budiman, Sp. M', '-', '-', '-', '08.00 - Selesai', '-', 'wanda.jpg', '0');
INSERT INTO `tb_jadwal_dokter` VALUES (9, 'Klinik Mata', 'dr. Ika Citra Susanti, Sp. M', '08.00 - 14.00', '-', '-', '-', '-', 'aulia_min.jpg', '0');
INSERT INTO `tb_jadwal_dokter` VALUES (10, 'Klinik Anak', 'dr. Vollico Nenni S,  Sp. A ', '10.00 - 14.00', '-', '08.00 - Selesai', '-', '-', 'gesta.jpg', '0');
INSERT INTO `tb_jadwal_dokter` VALUES (11, 'Klinik Anak', 'dr. Primitasari, Sp. A', '-', '-', '-', '08.00 - Selesai', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (12, 'Klinik Anak', 'dr. Runtika Dewi, Sp. A', '08.00 - Selesai', '-', '-', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (13, 'Klinik THT', 'dr. Tomson S, Sp. THT-KL', '-', '-', '-', '08.00 - Selesai', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (14, 'Klinik Digestive', 'dr. Syahfreadi, Sp. B-KBD', '-', '08.00 - Selesai', '-', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (15, 'Klinik DOTS', 'dr. Angga Ahadiat N', '08.00 - Selesai', '08.00 - Selesai', '08.00 - Selesai', '08.00 - Selesai', '08.00 - Selesai', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (16, 'Klinik Jantung ', 'dr. Luluk Dwi Yuni, Sp. JP', '08.00 - Selesai', '-', '08.00 - Selesai', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (51, 'Klinik Bedah Mulut', 'drg. Dhanni Gustiana, Sp. BMM', '-', '-', '08.00 - Selesai', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (17, 'Klinik Jantung ', 'dr. Shafira Nadia, Sp. JP', '08.00 - Selesai', '-', '-', '', '08.00 - Selesai', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (18, 'Klinik Gigi ', 'drg. Agatha S A', '-', '08.30 - 12.00', '-', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (19, 'Klinik Gigi ', 'drg. Valery Diana', '-', '-', '-', '-', '08.00 - Selesai', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (20, 'Klinik Gigi ', 'drg. Mira fahmi', '10.00 - Selesai', '-', '-', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (61, 'Klinik DOTS', 'dr. Hj. Elly Agustina', '08.00 - Selesai', '08.00 - Selesai', '08.00 - Selesai', '08.00 - Selesai', '08.00 - Selesai', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (21, 'Klinik Prostodonti', 'drg. Achmad Royhan, Sp. Prost', '-', '-', '-', '-', '09.00 - Selesai', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (22, 'Klinik Bedah Umum', 'dr. M. Reza J.Zen, Sp. B', '10.00 - Selesai', '-', '-', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (23, 'Klinik Bedah Umum', 'dr. M. Mursal, Sp. B, Finach, MARS', '-', '-', '08.00 - Selesai', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (24, 'Klinik Bedah Umum', 'dr. Hesty L T, Sp. B', '-', '-', '-', '-', '08.00 - Selesai', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (25, 'Klinik MCU', 'dr. Ariyanti Mandasari', '08.00 - Selesai', '-', '08.00 - Selesai', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (26, 'Klinik MCU', 'dr. Ratna Herawati', '-', '08.00 - Selesai', '-', '08.00 - Selesai', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (27, 'Klinik TB RO', 'dr. Hj. Elly Agustina', '08.00 - Selesai', '08.00 - Selesai', '08.00 - Selesai', '08.00 - Selesai', '08.00 - Selesai', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (28, 'Klinik Forensik', 'dr. Kinanti Putri Utami, Sp. F', '10.00 - Selesai', '-', '-', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (29, 'Klinik Kandungan', 'dr. M. Wahyuningtyas, Sp. OG', '08.00 - Selesai', '-', '-', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (30, 'Klinik Kandungan', 'dr. Abdul Samad, Sp. OG', '-', '-', '08.00 - Selesai', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (31, 'Klinik Kandungan', 'dr. Elfahmi, Sp. OG (onk)', '-', '10.00 - Selesai', '-', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (32, 'Klinik Kandungan', 'dr. Agus, Sp. OG', '-', '-', '-', '08.00 - Selesai', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (33, 'Klinik Paru', 'dr. Dedi Novizar, Sp. P', '-', '-', '10.00 - Selesai', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (34, 'Klinik Paru', 'dr. Fadlina Azmi, Sp. P', '-', '-', '-', '-', '08.00 - Selesai', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (35, 'Klinik Paru', 'dr. Iin Rahmania Inayatillah, Sp. P', '08.00 - Selesai', '-', '-', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (36, 'Klinik Rehabilitasi Medik', 'dr. Hikmah A. A, Sp. KFR', '-', '-', '-', '08.00 - Selesai', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (37, 'Klinik Rehabilitasi Medik', 'dr. Yuni Ekowati, Sp. KFR', '-', '08.00 - Selesai', '-', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (38, 'Klinik Anastesi', 'dr. Danny M. I, Sp. An, M. Kes', '-', '08.00 - Selesai', '-', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (39, 'Klinik Anastesi', 'dr. Hamdan, Sp. An', '-', '-', '08.00 - Selesai', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (40, 'Klinik Anastesi', 'dr. Sherlina R P, Sp. An', '10.00 - Selesai', '-', '-', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (53, 'Klinik Gigi', 'drg. Yosi Utami', '-', '-', '08.00 - Selesai', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (42, 'Klinik Kulit & Kelamin', 'dr. Putri R Lubis, Sp. KK', '08.00 - 14.00', '-', '', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (43, 'Klinik Jiwa', 'dr. Rudy Wijono, Sp. KJ', '-', '-', '08.00 - Selesai', '08.00 - Selesai', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (44, 'Klinik Orthopedi', 'dr. A. Arya Abikara, Sp. OT', '10.00 - Selesai', '-', '-', '10.00 - Selesai', '10.00 - Selesai', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (46, 'Klinik Wijaya Kusuma', 'dr. Ahmad S. Lazuardi', '-', '08.00 - Selesai', '-', '08.00 - Selesai', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (48, 'Klinik Urologi', 'dr. Imam Nuryanto, Sp. U', '09.00 - Selesai', '-', '-', '10.00 - Selesai', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (49, 'Klinik Diabetic Center', 'dr. Retno Widowati', '08.00 - Selesai', '-', '08.00 - Selesai', '-', '08.00 - Selesai', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (50, 'Klinik Diabetic Center', 'dr. Sintha Kumalasari', '-', '08.00 - Selesai', '-', '08.00 - Selesai', '08.00 - Selesai', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (52, 'Klinik Gizi', 'dr. Dian Permatasari, M. Gizi, Sp. Gk', '08.00 - Selesai', '-', '08.00 - Selesai', '-', '-', 'pendaftaran-online-2020.jpg', '0');
INSERT INTO `tb_jadwal_dokter` VALUES (54, 'Klinik Kulit & Kelamin', 'dr. Bimo Aryo Tejo, Sp. KK', '-', '-', '-', '-', '08.00 - Selesai', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (55, 'Klinik Periodonti', 'drg. Nurul Adha Marzuki, Sp. Perio', '-', '08.00 - 14.00', '-', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (56, 'Klinik Penyakit Mulut', 'drg. Yohana Alfa Agustina, Sp. PM', '-', '08.00 - 14.00', '-', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (57, 'Klinik Orthopedi', 'dr. M.N. Qomaruzaman, Sp. OT', '-', '11.00 - Selesai', '11.00 - Selesai', '-', '-', NULL, '0');
INSERT INTO `tb_jadwal_dokter` VALUES (58, 'Klinik Jiwa', 'dr. Azizah, Sp. KJ', '08.00 - 14.00', '08.00 - 14.00', '-', '-', '-', NULL, '0');

-- ----------------------------
-- Table structure for tb_profile_dokter
-- ----------------------------
DROP TABLE IF EXISTS `tb_profile_dokter`;
CREATE TABLE `tb_profile_dokter`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poliklinik` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_dokter` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `spesialis` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_poli` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 63 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_profile_dokter
-- ----------------------------
INSERT INTO `tb_profile_dokter` VALUES (2, 'Klinik Penyakit Dalam', 'dr. Hadiyanti, Sp.PD', 'hadiyanti.jpg', 'Spesialis Penyakit Dalam', 1);
INSERT INTO `tb_profile_dokter` VALUES (3, 'Klinik Penyakit Dalam', 'dr. Silvia Dewi, Sp.PD', 'user.png', 'Spesialis Penyakit Dalam', 1);
INSERT INTO `tb_profile_dokter` VALUES (4, 'Klinik Penyakit Dalam', 'dr. Monita Lubis, Sp.PD', 'monita.jpg', 'Spesialis Penyakit Dalam', 1);
INSERT INTO `tb_profile_dokter` VALUES (5, 'Klinik Penyakit Dalam', 'dr. Habib Burahman, Sp.PD', 'habib.jpg', 'Spesialis Penyakit Dalam', 1);
INSERT INTO `tb_profile_dokter` VALUES (6, 'Klinik Saraf', 'dr. Khristi H, Sp. N', 'user.png', 'Spesialis Saraf', 2);
INSERT INTO `tb_profile_dokter` VALUES (59, 'Klinik THT', 'dr. Muhammad Akbar, Sp. T.H.T.K.L', 'user.png', 'Spesialis THT', 5);
INSERT INTO `tb_profile_dokter` VALUES (7, 'Klinik Saraf', 'dr. A. Ichsan, Sp. N', 'ichsan.jpg', 'Spesialis Saraf', 2);
INSERT INTO `tb_profile_dokter` VALUES (8, 'Klinik Mata', 'dr. Arif Budiman, Sp. M', 'user.png', 'Spesialis Mata', 3);
INSERT INTO `tb_profile_dokter` VALUES (9, 'Klinik Mata', 'dr. Ika Citra Susanti, Sp. M', 'ika.jpg', 'Spesialis Mata', 3);
INSERT INTO `tb_profile_dokter` VALUES (10, 'Klinik Anak', 'dr. Vollico Nenni S,  Sp. A', 'vollico.jpg', 'Spesialis Anak', 4);
INSERT INTO `tb_profile_dokter` VALUES (11, 'Klinik Anak', 'dr. Primitasari, Sp. A', 'primitasari.jpg', 'Spesialis Anak', 4);
INSERT INTO `tb_profile_dokter` VALUES (12, 'Klinik Anak', 'dr. Runtika Dewi, Sp. A', 'runtika.jpg', 'Spesialis Anak', 4);
INSERT INTO `tb_profile_dokter` VALUES (13, 'Klinik THT', 'dr. Tomson S, Sp. THT-KL', 'tomson.jpg', 'Spesialis THT', 5);
INSERT INTO `tb_profile_dokter` VALUES (14, 'Klinik Digestive', 'dr. Syahfreadi, Sp. B-KBD', 'user.png', 'Sub Spesialis Bedah Digestive', 6);
INSERT INTO `tb_profile_dokter` VALUES (15, 'Klinik DOTS', 'dr. Angga Ahadiat N', 'user.png', 'Umum', 7);
INSERT INTO `tb_profile_dokter` VALUES (16, 'Klinik Jantung ', 'dr. Luluk Dwi Yuni, Sp. JP', 'user.png', 'Spesialis Jantung', 8);
INSERT INTO `tb_profile_dokter` VALUES (51, 'Klinik Bedah Mulut', 'drg. Dhanni Gustiana, Sp. BMM', 'dhanni.jpg', 'Spesialis Bedah Mulut', 25);
INSERT INTO `tb_profile_dokter` VALUES (17, 'Klinik Jantung ', 'dr. Shafira Nadia, Sp. JP', 'shafira.jpg', 'Spesialis Jantung', 8);
INSERT INTO `tb_profile_dokter` VALUES (18, 'Klinik Gigi ', 'drg. Agatha S A', 'user.png', 'Gigi', 9);
INSERT INTO `tb_profile_dokter` VALUES (19, 'Klinik Gigi ', 'drg. Valery Diana', 'user.png', 'Gigi', 9);
INSERT INTO `tb_profile_dokter` VALUES (20, 'Klinik Gigi ', 'drg. Mira fahmi', 'user.png', 'Gigi', 9);
INSERT INTO `tb_profile_dokter` VALUES (61, 'Klinik DOTS', 'dr. Hj. Elly Agustina', 'user.png', 'Umum', 7);
INSERT INTO `tb_profile_dokter` VALUES (21, 'Klinik Prostodonti', 'drg. Achmad Royhan, Sp. Prost', 'royhan.jpg', 'Spesialis Prostodonti', 10);
INSERT INTO `tb_profile_dokter` VALUES (22, 'Klinik Bedah Umum', 'dr. M. Reza J.Zen, Sp. B', 'user.png', 'Spesialis Bedah', 11);
INSERT INTO `tb_profile_dokter` VALUES (23, 'Klinik Bedah Umum', 'dr. M. Mursal, Sp. B, Finach, MARS', 'mursal.jpg', 'Spesialis Bedah', 11);
INSERT INTO `tb_profile_dokter` VALUES (24, 'Klinik Bedah Umum', 'dr. Hesty L T, Sp. B', 'user.png', 'Spesialis Bedah', 11);
INSERT INTO `tb_profile_dokter` VALUES (25, 'Klinik MCU', 'dr. Ariyanti Mandasari', 'user.png', 'Umum', 12);
INSERT INTO `tb_profile_dokter` VALUES (26, 'Klinik MCU', 'dr. Ratna Herawati', 'user.png', 'Umum', 12);
INSERT INTO `tb_profile_dokter` VALUES (27, 'Klinik TB RO', 'dr. Hj. Elly Agustina', 'user.png', 'Umum', 13);
INSERT INTO `tb_profile_dokter` VALUES (28, 'Klinik Forensik', 'dr. Kinanti Putri Utami, Sp. F', 'user.png', 'Spesialis Forensik', 14);
INSERT INTO `tb_profile_dokter` VALUES (29, 'Klinik Kandungan', 'dr. M. Wahyuningtyas, Sp. OG', 'wahyuningtyas.jpg', 'Spesialis Kandungan', 15);
INSERT INTO `tb_profile_dokter` VALUES (30, 'Klinik Kandungan', 'dr. Abdul Samad, Sp. OG', 'abdul-samad.jpg', 'Spesialis Kandungan', 15);
INSERT INTO `tb_profile_dokter` VALUES (31, 'Klinik Kandungan', 'dr. Elfahmi, Sp. OG (onk)', 'user.png', 'Sub Spesialis Kandungan Onkologi', 15);
INSERT INTO `tb_profile_dokter` VALUES (32, 'Klinik Kandungan', 'dr. Agus, Sp. OG', 'agus.jpg', 'Spesialis Kandungan', 15);
INSERT INTO `tb_profile_dokter` VALUES (33, 'Klinik Paru', 'dr. Dedi Novizar, Sp. P', 'daddy.jpg', 'Spesialis Paru', 16);
INSERT INTO `tb_profile_dokter` VALUES (34, 'Klinik Paru', 'dr. Fadlina Azmi, Sp. P', 'fadlina.jpg', 'Spesialis Paru', 16);
INSERT INTO `tb_profile_dokter` VALUES (35, 'Klinik Paru', 'dr. Iin Rahmania Inayatillah, Sp. P', 'user.png', 'Spesialis Paru', 16);
INSERT INTO `tb_profile_dokter` VALUES (36, 'Klinik Rehabilitasi Medik', 'dr. Hikmah A. A, Sp. KFR', 'user.png', 'Spesialis Rehabilitasi Medik', 17);
INSERT INTO `tb_profile_dokter` VALUES (37, 'Klinik Rehabilitasi Medik', 'dr. Yuni Ekowati, Sp. KFR', 'yuni.jpg', 'Spesialis Rehabilitasi Medik', 17);
INSERT INTO `tb_profile_dokter` VALUES (38, 'Klinik Anastesi', 'dr. Danny M. I, Sp. An, M. Kes', 'danni.jpg', 'Spesialis Anastesi', 18);
INSERT INTO `tb_profile_dokter` VALUES (39, 'Klinik Anastesi', 'dr. Hamdan, Sp. An', 'hamdan.jpg', 'Spesialis Anastesi', 18);
INSERT INTO `tb_profile_dokter` VALUES (40, 'Klinik Anastesi', 'dr. Sherlina R P, Sp. An', 'sherlina.jpg', 'Spesialis Anastesi', 18);
INSERT INTO `tb_profile_dokter` VALUES (53, 'Klinik Gigi', 'drg. Yosi Utami', 'user.png', 'Gigi', 9);
INSERT INTO `tb_profile_dokter` VALUES (42, 'Klinik Kulit & Kelamin', 'dr. Putri R Lubis, Sp. KK', 'putri.jpg', 'Spesialis Kulit & Kelamin', 19);
INSERT INTO `tb_profile_dokter` VALUES (43, 'Klinik Jiwa', 'dr. Rudy Wijono, Sp. KJ', 'user.png', 'Spesialis Jiwa', 20);
INSERT INTO `tb_profile_dokter` VALUES (44, 'Klinik Orthopedi', 'dr. A. Arya Abikara, Sp. OT', 'abi.jpg', 'Spesialis Orthopedi', 21);
INSERT INTO `tb_profile_dokter` VALUES (46, 'Klinik Wijaya Kusuma', 'dr. Ahmad S. Lazuardi', 'user.png', 'Umum', 22);
INSERT INTO `tb_profile_dokter` VALUES (48, 'Klinik Urologi', 'dr. Imam Nuryanto, Sp. U', 'user.png', 'Spesialis Urologi', 23);
INSERT INTO `tb_profile_dokter` VALUES (49, 'Klinik Diabetic Center', 'dr. Retno Widowati', 'user.png', 'Umum', 24);
INSERT INTO `tb_profile_dokter` VALUES (50, 'Klinik Diabetic Center', 'dr. Sintha Kumalasari', 'user.png', 'Umum', 24);
INSERT INTO `tb_profile_dokter` VALUES (52, 'Klinik Gizi', 'dr. Dian Permatasari, M. Gizi, Sp. Gk', 'user.png', 'Spesialis Gizi', 26);
INSERT INTO `tb_profile_dokter` VALUES (54, 'Klinik Kulit & Kelamin', 'dr. Bimo Aryo Tejo, Sp. KK', 'bimo.jpg', 'Spesialis Kulit & Kelamin', 19);
INSERT INTO `tb_profile_dokter` VALUES (55, 'Klinik Periodonti', 'drg. Nurul Adha Marzuki, Sp. Perio', 'nurul.jpg', 'Spesialis Periodonti', 28);
INSERT INTO `tb_profile_dokter` VALUES (56, 'Klinik Penyakit Mulut', 'drg. Yohana Alfa Agustina, Sp. PM', 'yohana.jpg', 'Spesialis Penyakit Mulut', 27);
INSERT INTO `tb_profile_dokter` VALUES (57, 'Klinik Orthopedi', 'dr. M.N. Qomaruzaman, Sp. OT', 'user.png', 'Spesialis Orthopedi', 21);
INSERT INTO `tb_profile_dokter` VALUES (58, 'Klinik Jiwa', 'dr. Azizah, Sp. KJ', 'user.png', 'Spesialis Jiwa', 20);

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` int(11) NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_access` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `active` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES (5, 'Wanda Azhar', '081288342016', 'wandaazhar@gmail.com', 1610349334, NULL, 'ismi.jpg', '$2y$10$p/fg0NCl4hfj0zhLKcx7pelf/qy4JLInRa4M2yuZZ.7ovCV.IY1.m', 'pasien', 'aktif');

-- ----------------------------
-- Table structure for tb_user_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_user_admin`;
CREATE TABLE `tb_user_admin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` int(11) NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_access` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `active` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bidang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of tb_user_admin
-- ----------------------------
INSERT INTO `tb_user_admin` VALUES (20, 'Aulia Septiani', '081288342010', 'risaulias@gmail.com', 1596390013, NULL, 'aulia.jpg', '$2y$10$osskfnEzYxhvYYDoJj0uaessc39nLBQ/PP2R2wM.zJ.78/mDpx6aS', 'pengguna', 'aktif', 'penunjang');
INSERT INTO `tb_user_admin` VALUES (21, 'Gesta Handayani', '081288342019', 'gestahandayani@gmail.com', 1593257698, NULL, 'gesta.jpg', '$2y$10$osskfnEzYxhvYYDoJj0uaessc39nLBQ/PP2R2wM.zJ.78/mDpx6aS', 'administrator', 'aktif', 'promkes');
INSERT INTO `tb_user_admin` VALUES (28, 'Sekar Nuraida', '081288316209', 'sekarkarie@gmail.com', 1593503263, NULL, 'shifa.jpg', '$2y$10$G5j6nZM45EGyqKUsdoX.o.1W2lqSndDxh1SDKYN39APCgOC.Mgnyq', 'pengguna', 'aktif', 'pelayanan medis');
INSERT INTO `tb_user_admin` VALUES (29, 'Indri', '081288316209', 'indrics@gmail.com', 1593503263, NULL, 'default-avatar.png', '$2y$10$G5j6nZM45EGyqKUsdoX.o.1W2lqSndDxh1SDKYN39APCgOC.Mgnyq', 'cs', 'aktif', 'costumer services');
INSERT INTO `tb_user_admin` VALUES (30, 'Penunjang', '081288316209', 'penunjang@gmail.com', 1593503263, NULL, 'ismi.jpg', '$2y$10$G5j6nZM45EGyqKUsdoX.o.1W2lqSndDxh1SDKYN39APCgOC.Mgnyq', 'pengguna', 'aktif', 'penunjang');
INSERT INTO `tb_user_admin` VALUES (31, 'Keperawatan', '081288316209', 'keperawatan@gmail.com', 1593503263, NULL, 'Biasakan-Hal-Ini-Agar-Hidup.jpg', '$2y$10$G5j6nZM45EGyqKUsdoX.o.1W2lqSndDxh1SDKYN39APCgOC.Mgnyq', 'pengguna', 'aktif', 'keperawatan');
INSERT INTO `tb_user_admin` VALUES (32, 'Umum', '081288316209', 'umum@gmail.com', 1596390049, NULL, 'aulia_min.jpg', '$2y$10$G5j6nZM45EGyqKUsdoX.o.1W2lqSndDxh1SDKYN39APCgOC.Mgnyq', 'pengguna', 'aktif', 'umum');
INSERT INTO `tb_user_admin` VALUES (34, 'SIRS RSU Tangsel', '081288342056', 'sirsrsutangsel@gmail.com', 1593503263, NULL, 'default-avatar.png', '$2y$10$G5j6nZM45EGyqKUsdoX.o.1W2lqSndDxh1SDKYN39APCgOC.Mgnyq', 'pengguna', 'aktif', 'promkes');
INSERT INTO `tb_user_admin` VALUES (43, 'Wanda Azhar', '081288342016', 'wandaazhar@gmail.com', 1609268057, NULL, 'wanda.jpg', '$2y$10$.K4kGrcvMrDUtzIegE87EuG0sNvyzaB/YNc6caV6.bjWZGArhgv7C', 'administrator', 'aktif', 'promkes');

SET FOREIGN_KEY_CHECKS = 1;
