<h2>Description :</h2>

This site was made for my studies, it is a writer's blog with the possibility to write and publish a book with a 
comment system under each chapter also called CRUD. 
You can manage everything via an administration interface secured by login.

<h2>Features :</h2>

- Header with link to the connection page and social link
- Footer with link to Legal notice, About, Contact and social link
- Homepage with link to the other pages and the three last chapters
- Page "Roman" give a resume of the book and a list of his chapters
- Page "Contact" is a contact form directly addressed to the writer
- The connection page allows you to access the administration area
- Page "Commentaires" on the administration area allows you to moderate every reported comments
- Page "Chapitres" on the administration area allows you to create / edit / delete a chapter 

<h2>Required :</h2>

- PHP 7.2+
- MySQL Database
- Apache Server

<h2>How to install ? :</h2>

First download the site on GitHub here : https://github.com/S2miS/projet3.git<br>
Then install the site on your server<br>
Don't forget to install Composer (https://github.com/composer/composer) and PHPMailer (https://github.com/PHPMailer/PHPMailer)<br>
For the Database, use the code below :

<---- Chapter table ---->

DROP TABLE IF EXISTS `chapter`;
CREATE TABLE IF NOT EXISTS `chapter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `number` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;<br>

<---- Comments table ---->

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` text NOT NULL,
  `id_chapter` int(11) NOT NULL,
  `reported` tinyint(1) NOT NULL DEFAULT '0',
  `moderate` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `Commentary` (`id_chapter`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

<---- Identification table ---->

DROP TABLE IF EXISTS `identification`;
CREATE TABLE IF NOT EXISTS `identification` (
  `pseudo` varchar(50) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `token_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



