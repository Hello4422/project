DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
	`user_id` int(20) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	`user_full_name` varchar(30) NOT NULL,
	`username` varchar(30) UNIQUE NOT NULL,
	`user_email` varchar(100) UNIQUE NOT NULL,
	`user_role` varchar(30) DEFAULT 'author' NOT NULL,
	`user_pass` varchar(255) NOT NULL,
	`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

 


CREATE TABLE `blog_posts`(
     `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     `blog_user_id`int(11) DEFAULT NULL,
     `blog_title`varchar(225) NOT NULL,
     `blog_slug`varchar(255) NOT NULL UNIQUE,
     `blog_views`int(11) NOT NULL DEFAULT '0',
     `blog_image`varchar(255) NOT NULL,
     `blog_body`Longtext NOT NULL,
     `published`tinyint(1) NOT NULL, 
     `blog_created_at`DATETIME DEFAULT NULL,
     `blog_updated_at`DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


