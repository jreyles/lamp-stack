CREATE TABLE email
(
EmailID int NOT NULL AUTO_INCREMENT,
EmailAddress varchar(255),
date DATETIME
);
#INSERT INTO email (EmailAddress,date) VALUES ('jackson@mississipi.com','06/24/13 6:30PM');
#INSERT INTO email (EmailAddress,date) VALUES ('testcase@user.org','06/22/13 4:30PM');
#INSERT INTO email (EmailAddress,date) VALUES ('whatsup@yo.com','06/20/13 2:30PM');
#INSERT INTO email (EmailAddress,date) VALUES ('hatethisthing@nohaters.com','06/18/13 2:30PM');
INSERT INTO `emailver`.`email`
(`emailaddress`,`date`) VALUES ('jackson@mississipi.com','2014-02-01 12:00:00');
INSERT INTO `emailver`.`email`
(`emailaddress`,`date`) VALUES ('testcase@user.org','2014-02-01 12:00:00');
INSERT INTO `emailver`.`email`
(`emailaddress`,`date`) VALUES('whatsup@yo.com', '2013-01-18 12:00:00');
INSERT INTO `emailver`.`email`(`emailaddress`,`date`)
VALUES( 'hatethisthing@nohaters.com', '2012-01-01 12:00:00');