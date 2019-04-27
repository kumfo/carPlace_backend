CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `open_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nickname` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `last_login` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci

CREATE TABLE `place_share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `title` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_share` tinyint(4) DEFAULT NULL,
  `share_status` tinyint(4) DEFAULT NULL COMMENT '1 共享中\n0 非共享中',
  `share_start` int(11) DEFAULT NULL,
  `share_end` int(11) DEFAULT NULL,
  `using_member_id` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci

