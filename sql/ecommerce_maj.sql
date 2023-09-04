-- Ajout du 01-09-2023
ALTER TABLE `products` ADD `infos_comp` TEXT NULL DEFAULT NULL AFTER `description`;

-- Ajout caracteristiques
CREATE TABLE `ecomerce`.`caracteristiques` ( `id_caracteristique` INT NOT NULL AUTO_INCREMENT , `lib_caracteristique` VARCHAR(255) NOT NULL , `created_at` DATETIME NOT NULL , `updated_at` DATETIME NOT NULL , PRIMARY KEY (`id_caracteristique`)) ENGINE = InnoDB;

ALTER TABLE `caracteristiques` CHANGE `lib_caracteristique` `lib_caracteristique` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '\'caracteristique\'';

-- Ajout valeur

CREATE TABLE `ecomerce`.`valeur` ( `id_valeur` INT NOT NULL AUTO_INCREMENT , `lib_valeur` VARCHAR(255) NOT NULL , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id_valeur`)) ENGINE = InnoDB;

ALTER TABLE `valeur` CHANGE `lib_valeur` `lib_valeur` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '\'valeur\'';

ALTER TABLE `valeur` ADD `id_caracteristique` INT(11) NOT NULL AFTER `lib_valeur`;

ALTER TABLE `valeur` ADD CONSTRAINT `fk_valeur_caracteristique` FOREIGN KEY (`id_caracteristique`) REFERENCES `caracteristiques`(`id_caracteristique`) ON DELETE NO ACTION ON UPDATE NO ACTION;

-- Ajout affecter_caracteristiques

CREATE TABLE `ecomerce`.`affecter_caracteristique` ( `id_produit` INT(11) NOT NULL , `id_caracterstique` INT(11) NOT NULL , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `deleted_at` DATETIME NULL ) ENGINE = InnoDB;

ALTER TABLE `affecter_caracteristique` ADD `id_affecter_caracteristiques` INT(11) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id_affecter_caracteristiques`);

ALTER TABLE `affecter_caracteristique` ADD CONSTRAINT `fk_affecter_caracteristique` FOREIGN KEY (`id_caracterstique`) REFERENCES `caracteristiques`(`id_caracteristique`) ON DELETE NO ACTION ON UPDATE NO ACTION;

-- Ajout de la table produit 
ALTER TABLE `products` CHANGE `id` `id_product` INT(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `affecter_caracteristique` CHANGE `id_product` `id_product` BIGINT(20) UNSIGNED NOT NULL;

ALTER TABLE `affecter_caracteristique` ADD CONSTRAINT `fk_affecter_produit` FOREIGN KEY (`id_product`) REFERENCES `products`(`id_product`) ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AJOUT 04-09-2023

ALTER TABLE `order_products` ADD `id_product` BIGINT(20) UNSIGNED NOT NULL AFTER `order_id`;

ALTER TABLE `order_products` ADD CONSTRAINT `fk_order_products_products` FOREIGN KEY (`id_product`) REFERENCES `products`(`id_product`) ON DELETE NO ACTION ON UPDATE NO ACTION;
