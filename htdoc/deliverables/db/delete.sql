DROP DATABASE ComicBooks;
REVOKE all ON ComicBooks.* FROM bowytz@localhost;
DELETE from mysql.user where user='bowytz' and host='localhost';
DROP DATABASE Collectibles;
REVOKE all ON Collectibles.* FROM bowytz@localhost;
DELETE from mysql.user where user='bowytz' and host='localhost';
