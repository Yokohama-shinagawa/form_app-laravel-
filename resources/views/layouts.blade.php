<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>採用応募フォーム</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" >
<link rel="stylesheet" href="./assets/css/bootstrap.css">
<link rel="stylesheet" href="./assets/css/style.css">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/vendor/js/datetime/datepicker-ja.js"></script>
<script src="./assets/vendor/js/datetime/jquery.dateFormat.js"></script>
<script src="./assets/js/script.js"></script>

<div class="container">
    <!-- header -->
    <header class="row">
        <div class="col-md-8 col-md-offset-2 mb15">
        </div>
  </header>
</div>

@yield('content')

<footer class="footer">
	<div class="container">
		<p class="text-muted text-center">Copyright © Atf All Rights Reserved.</p>
	</div>
</footer>

</body>
</html>