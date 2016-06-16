<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/design/css/style.css" >
<link rel="stylesheet" href="/modules/gallery/dist/css/lightbox.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="/design/css/bootstrap/js/bootstrap.js"></script>
<script src="/modules/gallery/dist/js/lightbox.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" type="text/css">
<title>Project H<?=$title?></title>
</head>
<body>
<?php if (isset($navbar)) {echo $navbar;} ?>
<div class="back">
<?=$content?>
</div>
</body>
</html>


