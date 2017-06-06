<?php
	header("content-type:text/html;charset=utf-8");
$host = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($host,$username,$password);

if($conn->connect_error){
	
	die("数据库连接失败！");//终止操作，后面的代码不再执行 exit()
}

echo "数据库连接成功";

//if($conn->connect_error){
//	die("数据框连接失败")
//}
//		echo "链接成功";
		
	//sql语句 创建具体数据库 stuecho phpinfo();
	/*$sql="creat database stu";
	if($conn->query($sql)){
		echo "数据库stu创建成功"；
	}else{
		die("stu创建成功".$conn->error);
	};
	//如果数据库存在则不再创建
	
	$aql="creat database if not exists stu"
	if($conn->query($sql)){
		echo "数据库stu创建成功"；
	}else{
		die("stu创建成功".$conn->error);
	};	
	$conn->select_db("stu");
	$sql = "creat table students(
	
	id= int(2) not null auto_increment primary key;
	name varchar(20) not null,
	courseId int(2) not null,
	courseName varchar(20) not null, 
	score int(6)
	)";		
	$conn->query($sql);	
		
	$sql = "insert into students(id)values("10010")"//id名字；*/
		
		
?>