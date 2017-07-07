<?php 


     try {
       $db = new PDO('mysql:host=localhost;dbname=detai','root',''); 
       $db->exec("set names 'utf8'");
    }catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
    
    
         /*$dbname='u246724018_anlo';
        $host='mysql.hostinger.vn';
        $user='u246724018_anloo';
        $pass='Kutdiem1';
        $db=new PDO("mysql:dbname=".$dbname.";host=".$host,''.$user,''.$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND =>"set names utf8"));
    */?>
    