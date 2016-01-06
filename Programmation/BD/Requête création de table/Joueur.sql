CREATE TABLE `Joueur` (
  `noJoueur` mediumint(8) unsigned NOT NULL auto_increment,
  `nomJoueur` varchar(255) default NULL,
  `prenomJoueur` varchar(255) default NULL,
  `age` mediumint default NULL,
  `nationalite` varchar(100) default NULL,
  `typeEntree` varchar(255) default NULL,
  PRIMARY KEY (`noJoueur`)
) AUTO_INCREMENT=1;

INSERT INTO `Joueur` (`noJoueur`,`nomJoueur`,`prenomJoueur`,`age`,`nationalite`,`typeEntree`) VALUES 
(1,"Sloan","Anthony",14,"Finland","wildcards"),
(2,"Roach","Kyle",99,"Mauritania","wildcards"),
(3,"Sykes","Alexander",83,"El Salvador","wildcards"),
(4,"Duke","Zachery",83,"Luxembourg","wildcards"),
(5,"Lewis","Denton",94,"Malta","qualified"),
(6,"Bush","Ryan",49,"French Polynesia","directes"),
(7,"Larson","Jackson",55,"Chile","directes"),
(8,"Arnold","Calvin",42,"Turkey","directes"),
(9,"Anderson","Tiger",18,"Turkmenistan","specialexempts"),
(10,"James","Linus",58,"Liberia","wildcards"),
(11,"Flynn","Plato",30,"Ecuador","wildcards"),
(12,"Berg","Theodore",56,"Albania","qualified"),
(13,"Baker","Declan",35,"Palestine, State of","specialexempts"),
(14,"Keith","Patrick",25,"Bangladesh","qualified"),
(15,"Hutchinson","Alfonso",85,"Suriname","specialexempts"),
(16,"Haley","Stuart",55,"Bulgaria","specialexempts"),
(17,"Moses","Wing",99,"Nauru","specialexempts"),
(18,"Barron","Malcolm",64,"Pitcairn Islands","qualified"),
(19,"Mcgee","Driscoll",24,"Angola","wildcards"),
(20,"Martinez","Tucker",67,"Kazakhstan","qualified"),
(21,"Allison","Acton",57,"Lebanon","directes"),
(22,"Kent","Carl",68,"Ecuador","directes"),
(23,"Flores","Avram",72,"Mongolia","wildcards"),
(24,"Harris","Cedric",95,"Thailand","wildcards"),
(25,"Tate","Jelani",54,"Tuvalu","specialexempts"),
(26,"Hester","Cruz",40,"Mayotte","directes"),
(27,"Spencer","Peter",58,"Kyrgyzstan","directes"),
(28,"Heath","Ronan",40,"Sri Lanka","qualified"),
(29,"Hartman","Nathaniel",81,"Jordan","directes"),
(30,"Banks","Solomon",66,"Japan","wildcards"),
(31,"England","Joshua",68,"Brazil","qualified"),
(32,"Finch","Dante",93,"Christmas Island","wildcards"),
(33,"Santiago","Tanner",46,"American Samoa","qualified"),
(34,"Hansen","Byron",70,"Solomon Islands","wildcards"),
(35,"Donovan","Ciaran",2,"Mozambique","directes"),
(36,"Cortez","Salvador",89,"Kuwait","directes"),
(37,"Vasquez","Tyler",75,"Norway","wildcards"),
(38,"Preston","Orlando",21,"Kazakhstan","directes"),
(39,"Cole","Matthew",40,"Jersey","wildcards"),
(40,"Hubbard","Yuli",72,"Iran","directes"),
(41,"Carson","Kirk",22,"Reunion","wildcards"),
(42,"Wallace","Alan",34,"Croatia","wildcards"),
(43,"Whitney","Zephania",11,"Egypt","specialexempts"),
(44,"Gates","Jackson",90,"Heard Island and Mcdonald Islands","directes"),
(45,"Rowe","Samuel",10,"Puerto Rico","wildcards"),
(46,"Alvarado","Fuller",31,"Greenland","specialexempts"),
(47,"Melendez","Wing",54,"Kenya","wildcards"),
(48,"Holland","Quentin",66,"Togo","specialexempts"),
(49,"Paul","Burton",79,"Ecuador","directes"),
(50,"Rowe","Conan",64,"Hong Kong","wildcards"),
(51,"Bright","Justin",7,"Sudan","directes"),
(52,"Buck","Thane",94,"Mozambique","directes"),
(53,"Hodge","Luke",81,"Mozambique","wildcards"),
(54,"Hurley","John",8,"France","wildcards"),
(55,"Day","Byron",92,"Russian Federation","wildcards"),
(56,"Tucker","Lucian",17,"Angola","directes"),
(57,"Snyder","Hiram",22,"Central African Republic","specialexempts"),
(58,"Davis","Kenneth",39,"Mauritania","specialexempts"),
(59,"Holder","Stuart",4,"Ethiopia","directes"),
(60,"Stein","Prescott",25,"Virgin Islands, British","directes"),
(61,"Farmer","Lucius",2,"Albania","specialexempts"),
(62,"Leon","Eaton",70,"San Marino","wildcards"),
(63,"Harrell","Ulric",69,"Congo, the Democratic Republic of the","directes"),
(64,"Duke","Omar",66,"French Polynesia","specialexempts");