<section id="taches">
	<h3>Tâches à réaliser :</h3>

	<?php 
	foreach ($new_task as $value) { ?>
		<p><?php echo ' ' . $value['task_name'] . ' ';
} ?>
</section>