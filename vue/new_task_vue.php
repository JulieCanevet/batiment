<article id="new_task">
	<?php

	if(isset($new_task)){?> <!-- s'il y a des taches -->
		<h3>Liste des tâches à réaliser :</h3>
		<ul>
 		<?php
		foreach ($new_task as $value) {	?>
		<article class="display_tasks_substeps"
	<?php		
				
				if ($value['executed'] == 1){
					?>
		<li><h4 class="done"><?php echo ' ' . $value['task_name'] . ' ' ;?></h4><?php
	}
			else{?>

			<li><p><?php echo ' ' . $value['task_name'] . ' ' ;
				} ?>
					<a href="delete.php?delete=<?php echo $value['id']?>&id=<?php echo $id_project ?>"><i class="fa fa-trash" aria-hidden="true"></i></a> <!--supprimer-->
										
					<a href="substep.php?click=<?php echo $value['id']?>&id=<?php echo $id_project ?>"><i class="fa fa-search" aria-hidden="true"></i></a><!-- voir plus -->
					
					<form class="bouton" action="project_sheet.php?id=<?php echo $id_project?>&id_task=<?php echo $value['id'] ?>" method="post">
						
						<input type="hidden" name="executed" value="<?php if ($value['executed'] == 0){
						echo '1';
						}
						elseif($value['executed'] == 1){
							echo '0';
						} ?>">

						<button type="submit" value="">
							<i class="fa fa-check-square-o" aria-hidden="true"></i>
						</button>
					</form>
				</p>
			</li>
		</article>
			<?php
		} 
		?>
		</ul>
		<?php
	}

	if(isset($new_substep)){?> <!-- s'il y a des sous-etapes -->
		<h3>sous-étapes à réaliser :</h3>
 <?php	foreach ($new_substep as $value) { ?>
			<h4><?php echo ' ' . $value['title'] . ' ';?><a href="delete.php?del=<?php echo $value['id']?>&id=<?php echo $id_project ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
			</h4>
			<p><?php echo ' ' . $value['substep_description']?></p>

<?php }
	}
?>
</article>
</section>