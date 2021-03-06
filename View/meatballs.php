<?php
	include_once '../fragments/header.php';
?>		

	<div class="reciwrapper">
		<h2>
			Classic Meatballs
		</h2>
		<div id="meat">
			<img src="../images/meat.jpg" alt="Meatballs">
		</div>
		<br/>
		<br/>
		<div class="meatingred">
			<ul>
				<li>
					<h3>Ingredients</h3>
					<br>
				</li>
				<li>2 tablespoons olive oil, divided</li>
				<li>1 onion, diced</li>
				<li>1 pound ground beef</li>
				<li>1 pound ground pork</li>
				<li>1/2 cup Panko</li>
				<li>2 large egg yolks</li>
				<li>1/4 teaspoon ground allspice</li>
				<li>1/4 teaspoon ground nutmeg</li>
				<li>Kosher salt and black pepper<br></li>
				<li>
					<h3>Gravy<br></h3>
				</li>
				<li>1/4 cup unsalted butter</li>
				<li>1/3 cup all-purpose flour</li>
				<li>4 cups beef broth</li>
				<li>3/4 cup cream</li>
				<li>Salt and black pepper</li>
			</ul>
		</div>
		<div class="instruc">
			<ol>
				<li>
					<h3>
						Instructions
					</h3>
					<br>
				</li>
				<li>
					Heat 1 tablespoon olive oil in a large skillet over medium heat. Add onion, and cook, stirring frequently, until onions have become translucent, about 2-3 minutes.
				</li>
				<li>
					<br>
					In a large bowl, combine ground beef, ground pork, Panko, egg yolks, allspice, nutmeg and cooked onion; season with salt and pepper, to taste. Using a wooden spoon or clean hands, stir until well combined. Roll the mixture into 1 1/4-to-1 1/2-inch meatballs, forming about 24 meatballs.
				</li>
				<li>
					<br>
					Add remaining 1 tablespoon olive oil to the skillet. Add meatballs, in batches, and cook until all sides are browned, about 4-5 minutes. Transfer to a paper towel-lined plate.
				</li>
				<li>
					<br>
					To make the gravy, melt butter in the skillet. Whisk in flour until lightly browned, about 1 minute. Gradually whisk in beef broth and cook, whisking constantly, until slightly thickened, about 1-2 minutes. Stir in sour cream; season with salt and pepper, to taste.
					<br>
				</li>
				<li>
					Stir in meatballs and cook, stirring occasionally, until heated through and thickened, about 8-10 minutes.
				</li>
				<li>
					<br>
					Serve immediately, garnished with parsley, if desired.
				</li>
			</ol>		
		</div>
		<div class="commentsection">
			<?php
				$food = "meatballs";
				include '../getComments.php';
				include '../commentsection.php';
			?>
		</div>
	</div>
<?php
	include_once '../fragments/footer.php'
?>

