<?php

	$data = json_decode(file_get_contents('data'), true);
	
?>

<!DOCTYPE html>
<!-- HTML5 Hello world by kirupa гадость - http://www.kirupa.com/html5/getting_your_feet_wet_html5_pg1.htm -->
<html lang="en-us">

      <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
      <script src="main.js"></script>
<head>
<meta charset="utf-8">
<title>	Fun club lovers Cillian Murphy</title>

<link rel="stylesheet" href="style.css">

</head>

<body>
	<h1>Cillian Murphy</h1>
	
	<nav id="navigation">
		<a class="nav-link" href="index.html">Главная</a>
		<a class="nav-link" href="bio.html">Биография</a>
	</nav>
	
	
	<img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMTUzMjg1NzIyOV5BMl5BanBnXkFtZTYwMzg2Mjgy._V1_UX214_CR0,0,214,317_AL_.jpg"></img>	
	
	<h3>Фильмография</h3>
	<table>
		<thead>
			<tr>
				<th>Год</th>
				<th>Название</th>
				<th>Роль</th> 
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>2010</td>
				<td>Начало</td>
				<td>Robert Fischer</td>
			</tr>
			<tr>
				<td>2008</td>
				<td>Темный рыцарь</td>
				<td>Scarecrow</td>
			</tr>
			<tr>
				<td>2002</td>
				<td>28 дней спустя</td>
				<td>Jim</td>
			</tr>
		</tbody>
	</table>
	
	
	<ol>
		<?php foreach ($data as $user): ?>
		<li><a href="mailto:<?php echo $user["email"] ?>">
				<?php echo $user["nickname"] ?>
			</a>
		</li>
		<?php endforeach; ?>
	</ol>
	
	<form>
		<div>
			<label>введите email</label>
			<input id="email" type="email"></input>
		</div>
		
		<div>
			<label>введите никнейм</label>
			<input id='nickname' type="text"></input>
		</div>
		
		<div>
			<button id='new-user-add-btn'>отправить</button>
		</div>
	</form>
	
	
	<a href="http://www.gq-magazine.co.uk/article/cillian-murphy-peaky-blinders-interview">Какая-то статья с клёвой фоткой</a>
	
</body>
</html>
