<header>
	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">
						<img src="public/assets/images/logo4.svg">
					</a>
					<a class="navbar-brand big-title" href="index.php">
						Chats &amp; Chiens
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="cats.php" <?php echo $page=="cats"?' class="active"':''; ?>>Cats</a></li>
						<li><a href="dogs.php" <?php echo $page=="dogs"?' class="active"':''; ?>>Dogs</a></li>
						<li><a href="contact.php" <?php echo $page=="contact"?' class="active"':''; ?>>Contact</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

	</div>
</header>
