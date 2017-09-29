<section id="taches">
	<?php
	if(isset($new_task)){
?>		<h3>Tâches à réaliser :</h3>
 <?php
	foreach ($new_task as $value) { ?>
		<p><?php echo ' ' . $value['task_name'] . ' ';
?><a href="substep.php?click=<?php echo $value['id']?>&id=<?php echo $project['id']?>">sous-étapes</a></p>
			<a href="delete.php?delete=<?php echo $value['id']?>&id=<?php echo $id_project ?>">Supprimer la tâche</a>
<?php
} }
	

	elseif(isset($new_substep)){?>
		<h3>sous-étapes à réaliser :</h3>
 <?php	foreach ($new_substep as $value) { ?>
			<h4><?php echo ' ' . $value['title'] . ' ';?></h4>
			<p><?php echo ' ' . $value['substep_description']?></p>
			<a href="delete.php?del=<?php echo $value['id']?>&id=<?php echo $id_project ?>">Supprimer la sous-étape</a>

<?php }
	}
?>
</section>