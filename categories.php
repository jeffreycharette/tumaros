<?php require 'top.php'; ?>
<!--
	CATEGORIES:
 	The CATEGORIES page displays a query of every category in the same grid square format that the products are displayed in. Each CATEGORY link will send the user to that CATEGORY page.

	TODO:
		- 
-->
					<h1>Categories</h1>
					<p class="page-description">Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>

					<div class="category-results">

						<!-- idea for all category catch all -->
						<div class="category">
							<div class="content">
								<h3>All Products</h3>
								<div class="large-only">
									<p class="description">Proin quis tortor orci. Etiam at risus et justo dignissim congue.</p>
									<p class="view-category"><a class="button" href="products.php">All Products &#187;</a></p>
								</div>
							</div>
							<img src="" alt="All categories image" />
						</div>

						<!-- loop over categories -->
						<div class="category">
							<div class="content">
								<h3>Cereals</h3>
								<div class="large-only">
									<p class="description">Proin quis tortor orci. Etiam at risus et justo dignissim congue.</p>
									<p class="view-category"><a class="button" href="category.php">Cereals &#187;</a></p>
								</div>
							</div>
							<img src="images/products/FD_60091_RaisinBranCereal_14oz-500px.jpg" alt="Fruit category image" />
						</div>

						<div class="category">
							<div class="content">
								<h3>Pasta</h3>
								<div class="large-only">
									<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in.</p>
									<p class="view-category"><a class="button" href="category.php">Pastas &#187;</a></p>
								</div>
							</div>
							<img src="images/products/FD_60119_GF-OrgElbowPasta_12oz-500px.jpg" alt="Pasta category image" />
						</div>
						<div class="category">
							<div class="content">
								<h3>Fruit</h3>
								<div class="large-only">
									<p class="description">Proin quis tortor orci. Etiam at risus et justo dignissim congue.</p>
									<p class="view-category"><a class="button" href="category.php">Fruits &#187;</a></p>
								</div>
							</div>
							<img src="images/products/FD_60194_OrgDicedPeachesFrtCup_4-4oz_ANGLED-500px.jpg" alt="Fruit category image" />
						</div>
						<div class="category">
							<div class="content">
								<h3>Vegetables</h3>
								<div class="large-only">
									<p class="description">Proin quis tortor orci. Etiam at risus et justo dignissim congue.</p>
									<p class="view-category"><a class="button" href="category.php">Vegetables &#187;</a></p>
								</div>
							</div>
							<img src="images/products/FD_60197_CaliMedPittedOlives_6oz-500px.jpg" alt="Fruit category image" />
						</div>
						<!-- end loop over categories -->
					</div><!-- /.category-results -->
<?php require 'bottom.php'; ?>