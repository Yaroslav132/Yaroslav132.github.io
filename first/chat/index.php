<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<h1 align="center">Chat_room</h1>
	</head>
	<body align="center">
		<iframe src="chat.html" height="50%" width="20%">  </iframe> <br/>
		<p/><strong> Написать в чат</strong><br/>
		<form action="send.php" method="post">
			<input value="имя" name="name"/>
			<p/><input size="70" name="msg"/>
			<button type="submit">отправить</button><br/>
			<p><a href="../../index.html">назад</a></p>
		</form>
	</body>
</html>
