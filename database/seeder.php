<?php 
$dogNames = ['Afro','Archibald','Babe','Bacon','Banjo','Barkley','Barney','Big Guy','Big Red','Biggie Smalls','Bilbo','Billy the Kid','Bimmer','Bingo','Biscuit','Blue (Blu)','Bobby (Mcgee)','Bond','Bones','Boss','Brain','Brian Griffin','Brownie','Bubba','Buckaroo','Buffalo Bill','Bullseye','Burger','Buster','Byte','Caesar','Chewie','Chubby','Chuck Norris','Churchill','Clark Griswold','Clark Kent','Cletus','Clumsy','Cookie Monster','Copernicus','Cyrano','Deputy Dawg','Dickens','Dilbert','Dino','Donald Trump','Doonesbury','Dude','Dynamite','E.T.','Einstein','Elf','Elmo','Emo','Ewok','Fabio','Farley','Fuzzy','Goliath','Gonzo','Gordo','Hamlet','Hansel','Harry','Hobbit','Homer','Hooch','Jasper','Jeckyll','Jerry Lee','K-9','Kerouac','Killer','Lancelot','Macbeth','Macgyver','Marky Mark','McGruff','Monet','Mr. Muggles','Mulligan','Ninja','OJ','Ole','Oreo','Peanut Butter','Pee Wee','Picasso','Pistol','Pluto','Porkchop','Puck','Pugsley','Quixote','Ricky Bobby','Rogue','Sable','Sailor','Seuss','Sir-Barks-Alot','Slink','Spud','Squirt','Stewie','Stinky','Sven','T-Bone','Taco','Tiger','Toto','Underdog','Waffles','Wagner','Waldo','Yoda'];
$adjectifs = ['cute','charming','lovely','lovable','appealing','attractive','captivating','delightful','darling','enchanting','gorgeous','nice','pleasing','sweet','beautiful','alluring','luscious','endearing','dear','splendid'];
$from = ['european','asian','american'];
$dogRaces = ['Labrador','German Shepherd Dog','Golden Retriever','Bulldog','Beagle','French Bulldog','Poodle','Rottweiler','Yorkshire Terrier','Boxer','Pointer','Siberian Huskie','Dachshund','Great Dane','Doberman Pinscher','Australian Shepherd','Miniature Schnauzer','Pembroke Welsh Corgi','Cavalier King CharleSpaniel','Shih Tzu','Boston Terrier','Pomeranian','Havanese','Shetland Sheepdog','Brittany'];

$sql = "SELECT count(*) FROM `dogs`"; 
$result = $bdd->prepare($sql); 
$result->execute(); 
$number_of_rows = $result->fetchColumn();

$wanted = 25;


for ($i=$number_of_rows; $i < $wanted; $i++) { 
	$insertion['race'] = $dogRaces[array_rand($dogRaces)];
	$insertion['nom'] = $dogNames[array_rand($dogNames)];
	$insertion['description'] = "A ".$adjectifs[array_rand($adjectifs)].", ".$adjectifs[array_rand($adjectifs)]." ".$dogRaces[array_rand($dogRaces)]."!";
	$insertion['prix'] = rand(200,1200);
	$insertion['nationalite'] = $from[array_rand($from)];


	$req = $bdd->prepare('INSERT INTO dogs(race, nom, description, prix, nationalite) VALUES(:race, :nom, :description, :prix, :nationalite)');

	$req->execute( $insertion );
}


 ?>