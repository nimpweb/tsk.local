CREATE TABLE IF NOT EXISTS `Role` (
    `id` int not null AUTO_INCREMENT,
    `code` varchar(20) not null,
    `title` varchar(30) not null,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8



CREATE TABLE IF NOT EXISTS `User` (
    `id` INT not null AUTO_INCREMENT,                        -- итерационный код пользователя
    `uid` varchar(32) not null,               -- зашифрованный (hash)
    `role` int not null,                      -- роль пользователя (для админки, загрузки и планирования)
    `title` varchar(50) not null default '',  -- как будет отображаться пользователь в админке (или в карточке)
    `nd` varchar(20) not null,                -- номер договора (или лицевого)
    `fullName` varchar(100) not null default '', -- Фамилия Имя и Отчетство пользователя
    `vk_code` varchar(10) not null defauLt '0',-- код водоканала
    PRIMARY KEY (`id`),
    UNIQUE KEY `uid` (`uid`),
    KEY `FK_User_Role` (`role`),
    CONSTRAINT `FK_User_Role` FOREIGN KEY (`role`) REFERENCES `Role` (`id`)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8


CREATE TABLE Amount (
    `id` int not null,
    `user_id` int not null,
    `currency` varchar(3) not null default 'RUR',
    `amount` float not null default 0,
    `payStatus` enum('DELAYED','PENDING','PAYED','CANCELED') NOT NULL DEFAULT 'DELAYED',
    PRIMARY KEY (`id`),
    KEY `FK_Amount_User` (`user_id`),
    CONSTRAINT `FK_Amount_User` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

