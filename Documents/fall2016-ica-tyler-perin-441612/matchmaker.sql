create table users (
	id INT(6) NOT NULL UNSIGNED AUTO_INCREMENT,
	firstname VARCHAR(60) NOT NULL,
	email VARCHAR(30) not null,
	pictureUrl VARCHAR(30) not null,
	description tinytext not null,
	age int(6) unsigned not null,
	posted TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	primary key (id)
)engine = INNODB DEFAULT character SET = utf8 COLLATE = utf8_general_ci;
