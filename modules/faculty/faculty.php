<?php 

include dirname(__FILE__)."/../../faculty.php"; 
include dirname(__FILE__)."/../../faculty-emeritus.php"; 
include dirname(__FILE__)."/../../faculty-staff.php"; 

if (ctype_digit($path[2])) {

	if ($path[1] == 'staff') {
		$f = $staff[$path[2]];
	} else if ($path[1] == 'emeritus') {
		$f = $emeritus[$path[2]];
	} else {
		$f = $faculty[$path[2]];
	}
	?>

	<div id="content">

		<div class="span50">
			<h1>Faculty & staff</h1>

			<h2 class="name"><?php echo $f['name']; ?></h2>


			<?php
			if (isset($f['title']) && $f['title'] != '') {
				echo '<i>'.$f['title'].'</i><br>';
			}

			if (isset($f['area']) && $f['area'] != '') {
				echo $f['area'].'<br>';
			}

			if (isset($f['school']) && $f['school'] != '') {
				echo $f['school'].'<br>';
			}

			if (isset($f['email']) && $f['email'] != '') {
				echo '<a href="mailto:'.$f['email'].'">Email ></a><br>';
			}
			?>

			<br>

			<?php if (isset($f['bio-include']) && $f['bio-include'] == true) {
				include dirname(__FILE__) . "/long-pages/" . $f['bio']; 
			} else { 
				echo '<p class="small">' . $f['bio'] . '</p>';
			}
			?>
			
		</div>

		<div class="span50 end rc">
			<img src="<?php p('img'); ?>faculty/<?php echo $f['photo']; ?>">
		</div>

		<div class="clr"></div>

	</div>

	<?php
} else {
	include dirname(__FILE__)."/all-faculty.php";
}