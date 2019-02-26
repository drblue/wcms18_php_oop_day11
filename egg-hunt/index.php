<?php

// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

use App\Models\Shop;

?>

<h2>Butiker</h2>
<ol>
	<?php
		foreach (Shop::orderBy('name')->get() as $shop) {
			?>
				<li>
					<a href="shop.php?shop_id=<?php echo $shop->id; ?>">
						<?php echo "{$shop->name} ({$shop->address}, {$shop->city})"; ?>
					</a>
				</li>
			<?php
		}
	?>
</ol>

<?php

// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
