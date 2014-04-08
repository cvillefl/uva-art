<?php
if (isset($path[2]) && ctype_digit(str_replace('-','',$path[2]))) {
	$section = $path[2] . '.php';
} else {
	$section = 'latest.php';
}
?>

<div id="content">

	<div class="span80">
		<?php include dirname(__FILE__)."/../ruffin/".$section; ?>
	</div>

	<div class="span20" id="rhsidebar">
		<?php include dirname(__FILE__)."/../ruffin/sidebar.php"; ?>
	</div>

	<div class="clr"></div>

</div>