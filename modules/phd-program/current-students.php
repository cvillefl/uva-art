<?php 
include dirname(__FILE__)."/../../grad-students.php"; 

if (!ctype_digit($path[2])) {
?>

	<div id="content">

		<div class="span50">
			<h1>Graduate students, 2013-2014 </h1>

			<p>
				<?php
				$i = 0;
				foreach ($students as $s) {

					if ($i>22)
						continue;
					
					echo '<a style="color:#000;font-weight:bold;line-height:28px;" href="'.$i.'/'.$s['slug'].'">'.$s['name'].'</a> | '.$s['program'].', '.$s['advisor'].'<br>';

					$i++;
				}
				?>
			</p>
			
		</div>

		<div class="span50 end rc">
			<p style="margin-top:38px;">
				<?php
				$i = 0;
				foreach ($students as $s) {

					if ($i>22) {				
						echo '<a style="color:#000;font-weight:bold;line-height:28px;" href="'.$i.'/'.$s['slug'].'">'.$s['name'].'</a> | '.$s['program'].', '.$s['advisor'].'<br>';
					}

					$i++;
				}
				?>
			</p>
		</div>

		<div class="clr"></div>

	</div>

<?php
} else {

	$s = $students[$path[2]];
?>

	<div id="content" class="current-students">

		<div class="span50">
			<h1>Current students</h1>

			<h2><?php echo $s['name']; ?></h2>
			<?php echo $s['education']; ?>
			<?php if (isset($s['web']) && $s['web'] != '') { ?>
				<br><a href="<?php echo $s['web']; ?>" target="_blank">Web ></a>
			<?php } ?>
			<?php if (isset($s['email']) && $s['email'] != '') { ?>
				<br><a href="mailto:<?php echo $s['email']; ?>" target="_blank">Email ></a>
			<?php } ?>


			<?php echo $s['bio']; ?>
		</div>

		<div class="span50 end rc">
			<img src="<?php p('img'); ?>students/<?php echo $s['photo']; ?>">
		</div>

		<div class="clr"></div>

	</div>

<?php
}
?>