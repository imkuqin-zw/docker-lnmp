<?php
// 建立连接
try{
        //这里的mysql:host=mysql,后面这个mysql就是我们的mysql容器
        //用户名 root 是默认的
        //密码 123456 就是我们在mysql容器设置的环境变量
    $dbh = new PDO("mysql:host=mysql;dbname=mysql", "root", 123456);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbh->exec("SET CHARACTER SET utf8");
    $dbh=null; //断开连接
}catch(PDOException $e){
    print"Error!:".$e->getMessage()."<br/>";
    die();
}
// 错误检查S
// 输出成功连接
echo "<h1>成功通过 PDO 连接 MySQL 服务器</h1>" . PHP_EOL;

//phpinfo();

?>
