SET foreign_key_checks = 0; #turn off constraints temporarily
 
#since constraints cause problems, drop tables first, working backward
DROP TABLE IF EXISTS gig_table;
DROP TABLE IF EXISTS gig_student_initial;
DROP TABLE IF EXISTS gig_student_skill;
 
 
CREATE TABLE gig_table(
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

 
 
INSERT INTO gig_table values (NULL,'CodingTube','www.codingtube.com','codingtube@codingtube.com','1234567890','Volunteer','Greater Seattle Area','Design','web Designer','','Entry Level Designer');
 
CREATE TABLE gig_student_initial(
StudentID INT UNSIGNED NOT NULL auto_increment,
FirstName VARCHAR(255),
LastName VARCHAR(255),
EmailAddress VARCHAR(255),
Password VARCHAR(255),
PasswordValidation VARCHAR(255),
Phone INT,
Portfolio VARCHAR(255),
LinkedIn VARCHAR(255),
GitHub VARCHAR(255),
Facebook VARCHAR(255),
AreasInterest VARCHAR(255),
EducationLevel VARCHAR(255),
AdditionInfor VARCHAR(255),
 
PRIMARY KEY (StudentID)
)ENGINE=INNODB; 
 
 
INSERT INTO gig_student_initial values (NULL,'Anne','Jone','ajone@gmail.com','abcd','abcd',1234567890,'','https://github.com/anneJone','','','Design','Certificate','');
 
 
CREATE TABLE gig_student_skill(
SkillID INT UNSIGNED NOT NULL AUTO_INCREMENT,
StudentID INT UNSIGNED DEFAULT 0,
SkillHtml VARCHAR(255),
SkillJavaScript VARCHAR(255),
SkillPHP VARCHAR(255),
SkillRuby VARCHAR(255),
OtherLanguages VARCHAR(255),
LayOut VARCHAR(255),
PRIMARY KEY (SkillID),
INDEX StudentID_index(StudentID),
FOREIGN KEY (StudentID) REFERENCES gig_student_initial(StudentID) ON DELETE CASCADE
)ENGINE=INNODB;
 
INSERT INTO gig_student_skill VALUES (NULL,'1','HTML','jAVAsCRIPT','PHP','Ruby','Java','Adobe Photoshop');
 
SET foreign_key_checks = 1; #turn foreign key check back on