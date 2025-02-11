-- Mise a jour du  25-05-2023 21:40
ALTER TABLE `user` ADD `date_exp` DATETIME NULL DEFAULT NULL AFTER `etat_user`; 

-- Mise a jour du 04-11-2023
ALTER TABLE `users` CHANGE `nom_user` `lname` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL, CHANGE `prenoms_user` `fname` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL;

ALTER TABLE `users` ADD `email` VARCHAR(50) NOT NULL AFTER `fname`;

ALTER TABLE `users` CHANGE `telepphone` `phone` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL;

ALTER TABLE `users` CHANGE `password` `pass` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL;

ALTER TABLE `users` ADD `role` ENUM('admin','standard') NULL DEFAULT NULL AFTER `etat_user`;

ALTER TABLE `users` ADD `nbre_tentative` TINYINT(1) NOT NULL DEFAULT '3' COMMENT 'nombre de tentative de l\'utilisateur' AFTER `role`; 