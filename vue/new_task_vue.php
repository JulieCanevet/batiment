<section id="taches">
	<?php
	if(isset($new_task)){
?>		<h3>Tâches à réaliser :</h3>
 <?php
	foreach ($new_task as $value) { ?>
		<p><?php echo ' ' . $value['task_name'] . ' ';
?><a href="substep.php?click=<?php echo $value['id']?>">sous-étapes</a></p><?php
} }
	

	elseif(isset($new_substep)){?>
		<h3>sous-étapes à réaliser :</h3>
 <?php	foreach ($new_substep as $value) { ?>
			<h4><?php echo ' ' . $value['title'] . ' ';?></h4>
			<p><?php echo ' ' . $value['substep_description']?></p>
<?php }
	}
?>
</section>