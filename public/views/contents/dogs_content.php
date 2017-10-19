<div id="dogscontent" class="container">



	<div class="" id="dogs" data-anchor="section1">
		<div class="col-sm-12">
			<h1>Nos Chiens</h1>
			<nav>
				<ul>
					<li><a href="#" data-select="all" class="<?php echo $filtre=='all'?'active':''; ?>">Tous</a></li>
					<li><a href="dogs.php?filter=european" data-select="european" class="<?php echo $filtre=='european'?'active':''; ?>">Européens</a></li>
					<li><a href="dogs.php?filter=american" data-select="american" class="<?php echo $filtre=='american'?'active':''; ?>">Américains</a></li>
					<li><a href="dogs.php?filter=asian" data-select="asian" class="<?php echo $filtre=='asian'?'active':''; ?>">Asiatiques</a></li>
				</ul>
			</nav>
			<div id="galerie">
				<?php foreach ($dogs as $dog): ?>
					<div class="col-xs-6 col-md-3">
						<div class="thumbnail">
							<a href=""><img src="http://via.placeholder.com/320x240/" alt="Cute Dog" /></a>
							<div class="caption">
								<h3><?php echo $dog['nom']; ?></h3>
								<p><?php echo $dog['prix'] ?> €</p>
								<p><?php echo $dog['nationalite']; ?></p>
								<p><?php echo $dog['description'] ?></p>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>



</div>
