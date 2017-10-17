<div class="col-xs-6 col-md-3">
	<div class="thumbnail">
		<a href=""><img src="http://via.placeholder.com/320x240/" alt="Cute Dog" /></a>
		<div class="caption">
			<h3><?php echo $dogNames[array_rand($dogNames)]; ?></h3>
			<p><?php echo rand(200,1200) ?> €</p>
			<p><?php echo $from[array_rand($from)]; ?></p>
			<p>A <?php echo $adjectifs[array_rand($adjectifs)] ?>, <?php echo $adjectifs[array_rand($adjectifs)] ?> <?php echo $dogRaces[array_rand($dogRaces)] ?>!</p>
		</div>
	</div>
</div>