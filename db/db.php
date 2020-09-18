<?php

// SQL query to create
/*
 * CREATE TABLE `users` (
	`id` INT(255) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`surname` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`login` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`email` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`password` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

 * */

$mysql = new mysqli('localhost', 'root', 'root', 'testovoe_db'); // Connecting to Database

session_start(); // Starting session