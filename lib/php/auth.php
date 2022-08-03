<?php

function MYSQLIAuth() {
	return [
		"localhost", // msql host
		"aduvall_backend", //mysql user name
		"aduvall_backend", // mysql user password
		"aduvall_backend_class", // mysql database name
	];
}

function PDOAuth() {
	return [
		"mysql:host=localhost;dbname=aduvall_backend_class", // host and database name
		"aduvall_backend", //mysql user name
		"aduvall_backend", // mysql user password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}