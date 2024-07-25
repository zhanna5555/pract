<html>

<head>
<title>Моя первая веб-страничка</title>
<link rel="stylesheet" type="text/css" href="style.css"> 
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>

<body>
<div id="header">
	<h1 align="center"  style="color:white">ПК ЦЕНТР  -  Ремонт ПК на дому<h1>
</div>

<div id="menu">
	<a href="index.html">Главная</a>
	&nbsp
	<a href="aboutus.html">О компании  </a>
	&nbsp
	<a href="price.html">Услуги и цены  </a>
	&nbsp
	<a href="contact.html">Контакты  </a>
	&nbsp
	<a href="feedback1.php">Обратная связь</a>
</div>


<div id="mainf">
<h2><i>ОБРАТНАЯ СВЯЗЬ:</i></h2>
<form name="form1" method="post" action="test.php"><p> 
Имя: <input type="text" name="sirname"></p><p> 
Ваш Email: <input  type="text" name="email"></p>
<p> Сообщение 
<textarea name="message"></textarea></p>
<p><input type="submit" name="send" value="Отправить"></p>
</form>

<?php
/* Подключаемся к базе данных */
  $link = mysqli_connect("localhost", "root", "");
  mysqli_select_db($link, "praktika");

/* Выбираем данные */
$sql="SELECT name, email, message FROM message";
$result=mysqli_query($link, $sql);

while ($line=mysqli_fetch_row($result)) {
echo "<b>Имя:</b>".$line[0]."<br>";
echo "<b>Email:</b>".$line[1]."<br>";
echo "<b>Сообщение:</b>".$line[2]."<br><br>";
}
?>

</mainf>

<div id="footer">
	<p style="color:white">Компьютерная помощь в Москве. ИП Иванов Иван Иванович. ИНН 77273458834556, ОГРН 22334455324543454</p>
</div>
</body>
</html> 