<!DOCTYPE html>
<html>
<head>
	<title>Xss With Images</title>
</head>
<body>
<img src=x onerror="alert('xss')">
<!-- Resmi Bulamadığı için OnError Kısmında Javascript Tetikleniyor

Payload hayal gücünüze kalmış :)

 -->

</body>
</html>