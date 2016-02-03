DROP DATABASE Wacky;
REVOKE all ON Wacky.* FROM Wacky@localhost;
DELETE from mysql.user where user='Wacky' and host='localhost';
DROP DATABASE Zany;
REVOKE all ON Zany.* FROM Zany@localhost;
DELETE from mysql.user where user='Zany' and host='localhost';
