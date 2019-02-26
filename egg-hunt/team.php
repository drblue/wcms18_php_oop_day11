<?php

// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

use App\Models\Participant;
use App\Models\Shop;
use App\Models\Team;

$team = Team::find($_REQUEST['team_id']);
$shop = $team->shop;

?>

<h2><?php echo $team->name; ?></h2>
<h3>Tävlar i <?php echo $shop->name; ?></h3>
<ol>
	<?php
		foreach ($team->participants as $participant) {
			?>
				<li>
					<a href="participant.php?participant_id=<?php echo $participant->id; ?>">
						<?php echo $participant->name; ?>
					</a>
				</li>
			<?php
		}
	?>
</ol>

<a href="shop.php?shop_id=<?php echo $shop->id; ?>">&laquo; Tillbaka till <?php echo $shop->name; ?></a>

<?php

// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
