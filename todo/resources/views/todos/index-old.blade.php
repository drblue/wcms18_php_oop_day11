<h1>Todos</h1>

<h2><?php echo $listname; ?></h2>

<p><?php echo $whoami; ?></p>

<ol>
	<?php foreach($todoitems as $todoitem) { ?>
		<li><?php echo $todoitem; ?></li>
	<?php } ?>
</ol>
