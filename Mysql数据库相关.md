cd C:\WebSpider\MySQL\mysql-5.6.40-winx64\bin



进入数据库目录下

mysql -u root -p



插入用户

insert into user

(host, user, password,

select_priv, insert_priv, update_priv)

values('localhost', 'guest',

password('guest123'), 'y',  'y', 'y');



flush privileges

在注意需要执行 **FLUSH PRIVILEGES** 语句。 这个命令执行后会重新载入授权表。 

如果你不使用该命令，你就无法使用新创建的用户来连接mysql服务器，除非你重启mysql服务器。 



用户权限列表如下：

- Select_priv
- Insert_priv
- Update_priv
- Delete_priv
- Create_priv
- Drop_priv
- Reload_priv
- Shutdown_priv
- Process_priv
- File_priv
- Grant_priv
- References_priv
- Index_priv
- Alter_priv



create database libraryms;

source C:\Users\98766\Desktop\WEB安全\图书管理系统\library.sql

source C:/Users/98766/Desktop/WEB安全/图书管理系统/library.sql

