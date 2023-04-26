CREATE TABLE IF NOT EXISTS `miniblog`.`article`
(
	id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    release_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY unique_id (`id`)
);

SELECT * FROM `miniblog`.`article`;

TRUNCATE TABLE `miniblog`.`article`;

INSERT INTO `miniblog`.`article` (`title`)
VALUES 
("Article 1"),
("Article 2"),
("Article 3"),
("Article 4");