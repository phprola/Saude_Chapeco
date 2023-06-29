-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_pweb2_2023_1
CREATE DATABASE IF NOT EXISTS `db_pweb2_2023_1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_pweb2_2023_1`;

-- Copiando estrutura para tabela db_pweb2_2023_1.atendimento
CREATE TABLE IF NOT EXISTS `atendimento` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `hora` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paciente_id` bigint unsigned DEFAULT NULL,
  `funcionario_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `atendimento_paciente_id_foreign` (`paciente_id`),
  KEY `atendimento_funcionario_id_foreign` (`funcionario_id`),
  CONSTRAINT `atendimento_funcionario_id_foreign` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionario` (`id`),
  CONSTRAINT `atendimento_paciente_id_foreign` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_pweb2_2023_1.atendimento: ~2 rows (aproximadamente)
INSERT INTO `atendimento` (`id`, `data`, `hora`, `paciente_id`, `funcionario_id`, `created_at`, `updated_at`) VALUES
	(4, '2023-06-28', '00:27', 1, 2, '2023-06-29 00:21:40', '2023-06-29 00:21:40'),
	(5, '2023-06-15', '18:28', 1, 4, '2023-06-29 00:28:47', '2023-06-29 00:28:47');

-- Copiando estrutura para tabela db_pweb2_2023_1.estoque
CREATE TABLE IF NOT EXISTS `estoque` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso` double(10,2) NOT NULL,
  `custo` double(8,2) NOT NULL,
  `quantidade` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_pweb2_2023_1.estoque: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_pweb2_2023_1.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_pweb2_2023_1.failed_jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_pweb2_2023_1.farmacia
CREATE TABLE IF NOT EXISTS `farmacia` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `codigo` int unsigned NOT NULL,
  `medicamento` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` int unsigned NOT NULL,
  `valor` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_pweb2_2023_1.farmacia: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_pweb2_2023_1.funcionario
CREATE TABLE IF NOT EXISTS `funcionario` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crp` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caps` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgfun` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_pweb2_2023_1.funcionario: ~2 rows (aproximadamente)
INSERT INTO `funcionario` (`id`, `nome`, `telefone`, `email`, `crp`, `caps`, `imgfun`, `created_at`, `updated_at`) VALUES
	(1, 'teste', '12345', 'teste@teste.com', '2353gw', 'Algo', NULL, '2023-06-28 23:00:55', '2023-06-28 23:00:55'),
	(2, 'daniel', '213', 'daniel@gmail.com', '3rf2f3f', 'De lá', 'imagem/20230628200848.jpg', '2023-06-28 23:08:48', '2023-06-28 23:08:48'),
	(4, 'chá', '0008741', 'e@gmail.com', '123E23', 'Aquele', NULL, '2023-06-29 00:25:18', '2023-06-29 00:25:33');

-- Copiando estrutura para tabela db_pweb2_2023_1.leitura
CREATE TABLE IF NOT EXISTS `leitura` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_leitura` date NOT NULL,
  `hora_leitura` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sensor_id` bigint unsigned DEFAULT NULL,
  `mac_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `leitura_sensor_id_foreign` (`sensor_id`),
  KEY `leitura_mac_id_foreign` (`mac_id`),
  CONSTRAINT `leitura_mac_id_foreign` FOREIGN KEY (`mac_id`) REFERENCES `mac` (`id`),
  CONSTRAINT `leitura_sensor_id_foreign` FOREIGN KEY (`sensor_id`) REFERENCES `sensor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_pweb2_2023_1.leitura: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_pweb2_2023_1.mac
CREATE TABLE IF NOT EXISTS `mac` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contador` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_pweb2_2023_1.mac: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_pweb2_2023_1.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_pweb2_2023_1.migrations: ~0 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_04_14_165129_create_usuario', 1),
	(6, '2023_05_12_170844_mac', 1),
	(7, '2023_05_12_170845_sensor', 1),
	(8, '2023_05_12_170856_leitura', 1),
	(9, '2023_05_22_235540_estoque', 1),
	(10, '2023_05_23_190140_create_funcionarios_table', 1),
	(11, '2023_06_23_005400_create_farmacias_table', 1),
	(12, '2023_06_23_165912_create_atendimentos_table', 1),
	(13, '2023_06_28_170223_create_pacientes_table', 1),
	(14, '2023_06_23_165912_create_atendimento_table', 2);

-- Copiando estrutura para tabela db_pweb2_2023_1.paciente
CREATE TABLE IF NOT EXISTS `paciente` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UBS` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_pweb2_2023_1.paciente: ~0 rows (aproximadamente)
INSERT INTO `paciente` (`id`, `nome`, `telefone`, `email`, `UBS`, `created_at`, `updated_at`) VALUES
	(1, 'aaaa', '1243', 'aaaa@gmail.com', 'Aquele ali', '2023-06-28 23:39:52', '2023-06-28 23:39:52'),
	(2, 'café', '542362', 'fesf@fsef.com', 'Aquele de lá', '2023-06-29 00:18:24', '2023-06-29 00:18:24');

-- Copiando estrutura para tabela db_pweb2_2023_1.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_pweb2_2023_1.password_resets: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_pweb2_2023_1.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_pweb2_2023_1.personal_access_tokens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_pweb2_2023_1.sensor
CREATE TABLE IF NOT EXISTS `sensor` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contador` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_pweb2_2023_1.sensor: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_pweb2_2023_1.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_pweb2_2023_1.users: ~1 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@admin.com', NULL, '$2y$10$IHuPobkx1oIOt6O8kfe8feVGtX/WR/mPb/bdnr.ToyYAR7JmZ4W7O', NULL, '2023-06-28 22:55:01', '2023-06-28 22:55:01');

-- Copiando estrutura para tabela db_pweb2_2023_1.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_pweb2_2023_1.usuario: ~0 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `nome`, `cpf`, `telefone`, `email`, `imagem`, `created_at`, `updated_at`) VALUES
	(1, 'teste', '123.456.289-11', '213 324', 'teste@teste.com', 'imagem/20230628211710.jpg', '2023-06-29 00:17:10', '2023-06-29 00:17:37'),
	(2, 'daniel', '123.456.289-1', '9869678', 'e@gmail.com', NULL, '2023-06-29 00:17:25', '2023-06-29 00:17:25');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
