<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="/public/styles/reset.css">
	<!-- <link rel="stylesheet" href="/public/styles/bootstrap.min.css"> -->
	<link rel="stylesheet" href="/public/styles/styles.css">
</head>
<body>

	<div class="header">
		<div class="content">

			<div class="subMenu">
				<span id="subMenu-logo"><a href="/">CAMAGRU</a></span>
				<span class="subMenu-info">
					<?php
// unset($_SESSION["email"]);
// unset($_SESSION["user_id"]);
// unset($_SESSION["first_name"]);
						if (isset($_SESSION['first_name']) && isset($_SESSION['email'])) {
							echo "
									<span id=\"user\" class=\"subMenuText\">
									Hello,".$_SESSION['first_name']."
									</span>
									<span class=\"nav-item\">
										<a href=\"logout\">LOG OUT</a>
									</span>
								";
						} else {
							echo "
								<span class=\"nav-item\">
									<a href=\"login\">LOG IN</a>
								</span>
								";
						}
					
					?>
				</span>	
			</div>

			<div class="menu">
				<ul class="nav">
					<li class="nav-item">
						<a href="/">MAIN</a>
					</li>
					<li class="nav-item">
						<a href="/news/list">NEWS</a>
					</li>
					<li class="nav-item">
						<a href="/messages/list">MESSAGES</a>
					</li>
					<li class="nav-item">
						<a href="/">MY PROFILE</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="mainBlock">
		<?php echo $content; ?>
	</div>

	<script defer src="/public/js/main.js"></script>

	<div class="footer">
		<div>designed & created by okherson | 2020</div>
		<div>email:oleksii.khersoniuk@gmail.com</div>
	</div>
</body>
</html>