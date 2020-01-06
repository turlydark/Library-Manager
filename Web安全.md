###管理员重置密码，用户修改密码



###apache配置，系统安全性



1.隐藏版本信息

```
ServerSignature Off 
ServerTokens Prod
```

2.设置用户和组

```
User apache
Group apachegroup
```

window系统中创建apache用户，给予apache用户读取和执行(RX)所有文档和脚本目录(例如：htdocs  和cgi-bin)的权限。  对Apache的logs目录具有读/写/删除(RWD)的权限。对httpd.exe二进制文件具有读取和执行(RX)的权限。
 在service.msc服务中选择Aapche属性，登录账号改为apache即可



3.apache目录禁止访问

Indexes 的作用就是当该目录下没有 index.html文件时，就显示目录结构。
 默认apache在当前目录下没有index.html入口就会显示目录。让目录暴露在外面是非常危险的事，如下操作禁止apache显示目录：

```
Options FollowSymLinks 
```

将Options Indexes FollowSymLinks中的Indexes 去掉，就可以禁止 Apache 显示该目录结构。

4. 阻止用户修改系统设置

   在Apache 服务器的配置文件中进行以下的设置，阻止用户建立、修改 .htaccess文件，防止用户超越能定义的系统安全特性。

   ```
   AllowOveride None
   Options None
   Allow from all
   ```

###用户信息注册下拉框，可选，比如男，女