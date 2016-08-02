<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="/js/custom.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/github-markdown.css">
	<link rel="stylesheet" type="text/css" href="/css/default.css">
	<meta charset="utf-8" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale = 1.0, user-scalable=no">
	<title><?php
	require_once "title.php";
	?></title>
</head>
<body class="markdown-body<?php
if (!isset($_REQUEST['p'])) {echo ' blogpage';} ?>">

<?php
if (isset($_REQUEST['p'])) :
	require_once "posts.php";
else : ?>
<br><p class="check" style="text-align: center">My title <em>shows</em> the post.</p>
<ul id="postlist">

<?php
require_once "getpost.php";
?>

</ul>

<?php endif; ?>
</body>
</html>
