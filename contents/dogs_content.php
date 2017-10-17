<?php 
$dogNames = ['Afro','Archibald','Babe','Bacon','Banjo','Barkley','Barney','Big Guy','Big Red','Biggie Smalls','Bilbo','Billy the Kid','Bimmer','Bingo','Biscuit','Blue (Blu)','Bobby (Mcgee)','Bond','Bones','Boss','Brain','Brian Griffin','Brownie','Bubba','Buckaroo','Buffalo Bill','Bullseye','Burger','Buster','Byte','Caesar','Chewie','Chubby','Chuck Norris','Churchill','Clark Griswold','Clark Kent','Cletus','Clumsy','Cookie Monster','Copernicus','Cyrano','Deputy Dawg','Dickens','Dilbert','Dino','Donald Trump','Doonesbury','Dude','Dynamite','E.T.','Einstein','Elf','Elmo','Emo','Ewok','Fabio','Farley','Fuzzy','Goliath','Gonzo','Gordo','Hamlet','Hansel','Harry','Hobbit','Homer','Hooch','Jasper','Jeckyll','Jerry Lee','K-9','Kerouac','Killer','Lancelot','Macbeth','Macgyver','Marky Mark','McGruff','Monet','Mr. Muggles','Mulligan','Ninja','OJ','Ole','Oreo','Peanut Butter','Pee Wee','Picasso','Pistol','Pluto','Porkchop','Puck','Pugsley','Quixote','Ricky Bobby','Rogue','Sable','Sailor','Seuss','Sir-Barks-Alot','Slink','Spud','Squirt','Stewie','Stinky','Sven','T-Bone','Taco','Tiger','Toto','Underdog','Waffles','Wagner','Waldo','Yoda'];
$adjectifs = ['cute','charming','lovely','lovable','appealing','attractive','captivating','delightful','darling','enchanting','gorgeous','nice','pleasing','sweet','beautiful','alluring','luscious','endearing','dear','splendid'];
$from = ['European','Asian','American'];
$dogRaces = ['Labrador','German Shepherd Dog','Golden Retriever','Bulldog','Beagle','French Bulldog','Poodle','Rottweiler','Yorkshire Terrier','Boxer','Pointer','Siberian Huskie','Dachshund','Great Dane','Doberman Pinscher','Australian Shepherd','Miniature Schnauzer','Pembroke Welsh Corgi','Cavalier King CharleSpaniel','Shih Tzu','Boston Terrier','Pomeranian','Havanese','Shetland Sheepdog','Brittany'];
 ?>


<div id="dogscontent" class="container">



	<div class="" id="dogs" data-anchor="section1">
		<div class="col-sm-12">
			<h1>Nos Chiens</h1>
			<nav>
				<ul>
					<li><a href="#" data-select="all" class="<?php echo $filter=='all'?'active':''; ?>">Tous</a></li>
					<?php foreach ($from as $nationality): ?>
					<li><a href="dogs.php?filter=<?php echo strtolower($nationality) ?>" data-select="<?php echo strtolower($nationality) ?>" class="<?php echo $filter==strtolower($nationality)?'active':''; ?>"><?php echo $nationality; ?></a></li>
					<?php endforeach ?>
				</ul>
			</nav>
			<div id="galerie">
			<?php 
			for ($i=0; $i < 6; $i++) :?>
				<div class="row">
					<?php for ($j=0; $j < 4; $j++) : ?>
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
					<?php endfor; ?>
				</div>			
			<? endfor; ?>

			</div>
		</div>
	</div>



</div>
