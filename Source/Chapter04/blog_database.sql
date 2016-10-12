CREATE TABLE`posts`( 
	`id`int(11) unsigned NOT NULL auto_increment, 
	`name` varchar(255) default NULL, 
	`date` datetime default NULL, 
	`content` text, 
	`user_id` int(11) default NULL, 
	PRIMARY KEY (`id`) 
); 

CREATE TABLE`comments`( 
	`id`int(11) unsigned NOT NULL auto_increment, 
	`name` varchar(100) default NULL, 
	`content` text, 
	`post_id` int(11) default NULL, 
	PRIMARY KEY (`id`) 
); 

CREATE TABLE`users`( 
	`id`int(11) unsigned NOT NULL auto_increment, 
	`name` varchar(100) default NULL, 
	`email` varchar(150) default NULL, 
	`firstname` varchar(60) default NULL, 
	`lastname` varchar(60) default NULL, 
	PRIMARY KEY (`id`) 
);

CREATE TABLE `tags` ( 
	`id`int(11) unsigned NOT NULL auto_increment, 
	`name` varchar(100) default NULL, 
	`longname` varchar(255) default NULL, 
	PRIMARY KEY (`id`) 
);

CREATE TABLE `posts_tags` ( 
	`id`int(11) unsigned NOT NULL auto_increment, 
	`post_id` int(11) unsigned default NULL, 
	`tag_id` int(11) unsigned default NULL, 
	PRIMARY KEY (`id`) 
);