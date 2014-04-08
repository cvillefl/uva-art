<div id="content">

	<div class="span50">
		<h1 style="line-height:22px">
			Recent PhD graduates in <br>
			Art & Architectural History
		</h1>

		<p class="small">
			<b class="small">Katherine Eve Baker</b> | PhD, Larry Goedde
		</p>

		<p class="small">
			<b class="small">Lydia Mattice Brandt </b><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assistant Professor, University of South Carolina

		</p>

		<p class="small">
			<b class="small">Leslie Cozzi</b> | PhD, Singerman<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Curatorial Associate, Hammer Museum, Los Angeles
		</p>

		<p class="small">
			<b class="small">Burak Erdim</b><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assistant Professor, North Carolina State University
		</p>

		<p class="small">
			<b class="small">Emily Fenichel</b> | PhD, Summers<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Michelangelo's Marian Imagination 
		</p>

		<p class="small">
			<b class="small">Krista Gulbransen</b> | PhD, Daniel Enhbom
		</p>

		<p class="small">
			<b class="small">Mike Maizels</b> | PhD, Singerman
		</p>

		<p class="small">
			<b class="small">Melissa Ragain</b><br> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assistant Professor, Montana State University
		</p>

		<p class="small">
			<b class="small">Tanya Paul </b><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ruth G. Hardman Curator of European Art, Philbrook Museum of Art
		</p>

		<p class="small">
			<b class="small">Elena Pakhoutova</b><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assistant Curator, Rubin Museum of Art, NYC
		</p>

		<p class="small">
			<b class="small">Jessica Stewart</b> | PhD, Fiorani<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lecturer, James Madison University 
		</p>
	</div>

	<div class="span50 end rc">
		<img src="<?php p('img'); ?>phd-program/alums.jpg" width="360" height="362">

		<div class="clr"></div>

		<div style="width:360px;margin-top:10px;float:right">
			<h2>Send us your news</h2>

			<?php

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
							// validate

				$valid = true;

				if (strlen($_POST['url']) > 0 || strlen($_POST['website']) > 0 || strlen($_POST['message']) > 0)
					$valid = false;

				if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
					$valid = false;

				if ($valid) {
					send_email('Webform', $_POST['email'], 'bwy2t@virginia.edu', 'Art Dept web form submission', $_POST['comment']);
					echo '<p>Thank you.  Your message has been sent.</p>';
				}
			}


			if ($_SERVER['REQUEST_METHOD'] != 'POST' || !$valid) {
				?>

				<form method="POST" action="">

					<p class="small">Use the form below to send us your news.</p>

					<textarea name="comment"></textarea>

					<p class="small">Your email (We will only use your email to respond to inquiry or comment.)</p>
					<input type="text" name="email" class="rhform">

					<input type="text" name="url" class="h">

					<input type="text" name="website" class="h">

					<input type="text" name="message" class="h">

					<input type="submit" id="rhsub" value="Send">
				</form>
				<?php
			}
			?>
		</div>
	</div>

	<div class="clr"></div>

</div>