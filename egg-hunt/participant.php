<?php

// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

use App\Models\Participant;
use App\Models\Shop;
use App\Models\Team;

$participant = Participant::find($_REQUEST['participant_id']);

?>

<h2><?php echo $participant->name; ?></h2>
<p>
	<strong>E-post:</strong> <?php echo $participant->email; ?><br />
	<strong>Telefon:</strong> <?php echo $participant->phone; ?>
</p>

<h3>Tävlar i följande lag</h3>
<ol>
	<?php
		foreach ($participant->teams as $team) {
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

<a href="index.php">&laquo; Tillbaka till startsidan</a>

<?php

// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
