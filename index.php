<html>
	<head>
		<title>Stark</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$url = (isset($_GET['url'])) ? $_GET['url']:'public/home.php';
			$url = array_filter(explode('/',$url));

            //var_dump($url);

			$file = 'public/' . $url[0].'.php';
			
			if(is_file($file)){
				include $file;
			}else{
				include 'public/404.php';
			}			
		?>
	</body>
</html>