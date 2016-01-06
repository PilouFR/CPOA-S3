CREATE TABLE `Court` (
  `noCourt` mediumint(8) unsigned NOT NULL auto_increment,
  `nomCourt` varchar(255) default NULL,
  `typeCourt` varchar(255) default NULL,
  `reserve` varchar(255),
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=1;

INSERT INTO `Court` (`noCourt`,`nomCourt`,`typeCourt`,`reserve`) VALUES (1,"Court central","Central","01010111111111111110101"),
(2,"Court annexe","Annexe","01010111111111111110101"),
(3,"Court d'entraînement 1","Entrainement","01010111111111111110101"),
(4,"Court d'entraînement 2","Entrainement","01010111111111111110101"),
(5,"Court d'entraînement 3","Entrainement","01010111111111111110101"),
(6,"Court d'entraînement 4","Entrainement","01010111111111111110101");
