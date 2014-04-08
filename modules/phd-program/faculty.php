<?php 
include dirname(__FILE__)."/../../faculty.php"; 
include dirname(__FILE__)."/../../faculty-emeritus.php"; 
include dirname(__FILE__)."/../../faculty-staff.php"; 
?>

<div id="content">

	<div class="span50">
		<h1>Graduate faculty, 2013-2014</h1>

		<?php
		$i = -1;
		foreach ($faculty as $f) {
			$i++;
			if (!$f['phd'])
				continue;
			?>

			<p class="hang">
				<?php if (isset($f['bio-alternate-link'])) { ?>
                    <b><a href="<?php echo $f['bio-alternate-link']; ?>"><?php echo $f['name']; ?></a></b>,
                <?php } else if ($f['link']) { ?>
                    <b><a href="<?php p('faculty'); ?>phd-program/<?php echo $i; ?>/<?php echo strtolower(str_replace('.','',str_replace(' ','-',$f['name']))); ?>"><?php echo $f['name']; ?></a></b>,
                <?php } else { ?>
                    <b class="fours"><?php echo $f['name']; ?></b>,
                <?php } ?>
                <i><?php echo $f['title']; ?></i><br></span>
		        <?php if ($f['area'] != '') echo $f['area'] . '<br>'; ?>
		        <?php echo $f['school']; ?><br>
		        <?php if ($f['email'] != '') { ?>
		        	<a href="mailto:<?php echo $f['email']; ?>" target="_blank">Email ></a>
		        <?php } ?>
			</p>

			<?php
		}
		?>
		
	</div>

	<div class="span50 end rc">
		<br><br>
		<h2>Emeriti</h2>

		<?php
		$i = 0;
		foreach ($emeritus as $f) {
			if (!$f['phd'])
				continue;
			?>

			<p class="hang">
				<?php if ($f['link']) { ?><b><a href="<?php p('faculty'); ?>phd-program/<?php echo $i; ?>/<?php echo strtolower(str_replace('.','',str_replace(' ','-',$f['name']))); ?>"><?php echo $f['name']; ?></a></b><?php } else { ?><b class="fours"><?php echo $f['name']; ?></b><?php } ?>, <i><?php echo $f['title']; ?></i><br></span>
		        <?php if ($f['area'] != '') echo $f['area'] . '<br>'; ?>
		        <?php echo $f['school']; ?><br>
		        <a href="mailto:<?php echo $f['email']; ?>" target="_blank">Email ></a>
			</p>

			<?php
			$i++;
		}
		?>

		<div class="dots_hr"></div>

		<br>

		<h2>Staff</h2>

		<?php
		$i = 0;
		foreach ($staff as $f) {
			if (!$f['phd'])
				continue;
			?>

			<p class="small">
                <?php if ($f['link']) { ?><b><a style="font-size:11px;" href="<?php p('faculty'); ?>staff/<?php echo $i; ?>/<?php echo strtolower(str_replace('.','',str_replace(' ','-',$f['name']))); ?>"><?php echo $f['name']; ?></a></b><?php } else { ?><b style="font-size:11px!important;color:#565656!important;"><?php echo $f['name']; ?></b><?php } ?>
                <br><i><?php echo $f['area'];?></i><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:<?php echo $f['email']; ?>" target="_blank">Email ></a>
            </p>

			<?php
			$i++;
		}
		?>
	</div>

	<div class="clr"></div>

</div>