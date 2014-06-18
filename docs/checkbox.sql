CREATE TABLE IF NOT EXISTS  `gig_table` (
 id INT(10) NOT NULL auto_increment,
 companyName VARCHAR(255) NOT NULL,
 companyURL VARCHAR(255) NOT NULL,
 companyEmail VARCHAR(255) NOT NULL,
 companyPhone VARCHAR(255) NOT NULL,
 gigType VARCHAR(255) NOT NULL,
 gigLocation VARCHAR(255) NOT NULL,
 gigCategories VARCHAR(255) NOT NULL,
 positionTitle VARCHAR(255) NOT NULL,
 positionId VARCHAR(255) NOT NULL,
 positionDesc TEXT NOT NULL,
 PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS  `categories_table` (
 id INT(10) NOT NULL auto_increment,
 
 art_work BIT(1) NOT NULL,
 design BIT(1) NOT NULL,
 web_development BIT(1) NOT NULL,
 programming BIT(1) NOT NULL,
 mobile BIT(1) NOT NULL,
 front_end BIT(1) NOT NULL,
 back_end BIT(1) NOT NULL,
 gig INT(10) NOT NULL,

 PRIMARY KEY (id),
 FOREIGN KEY (gig)
      REFERENCES gig_table(id)
      ON UPDATE CASCADE ON DELETE RESTRICT
      
      
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


Art Work
Design
Web Development
Programming
Mobile
Front End
Back End
