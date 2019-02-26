<?php

// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

use App\Models\Shop;
use App\Models\Team;

$shop = Shop::find($_REQUEST['shop_id']);

?>

<h2>Anmälda lag hos <?php echo $shop->name; ?></h2>
<ol>
	<?php
		// foreach ($shop->teams()->get() as $team) {
		foreach ($shop->teams as $team) {
			?>
				<li>
					<a href="team.php?team_id=<?php echo $team->id; ?>">
						<?php echo $team->name; ?>
					</a>
				</li>
			<?php
		}
	?>
</ol>

<a href="index.php">&laquo; Tillbaka till alla butiker</a>

<?php

// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
