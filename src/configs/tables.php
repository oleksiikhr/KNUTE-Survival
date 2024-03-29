<?php

/*
 * To create database tables.
 */

require_once __DIR__ . '/db.php';

QB::query('CREATE TABLE IF NOT EXISTS auth(
	id       INT (11)              NOT NULL,
	in_key   VARCHAR (60)          NOT NULL,
	PRIMARY KEY(ID)
)');

QB::query('CREATE TABLE IF NOT EXISTS users(
	id       INT AUTO_INCREMENT    NOT NULL,
	login    VARCHAR (30) UNIQUE   NOT NULL,
	pass     VARCHAR (60)          NOT NULL,
	money    INT     (11)          DEFAULT 10,
	PRIMARY KEY(ID)
)');
