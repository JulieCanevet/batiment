<article id="new_task">
	<?php

	if(isset($new_task)){?> <!-- if is set task -->
		<h3>Liste des tâches à réaliser :</h3>
		<ul>
 		<?php
		foreach ($new_task as $value) {	?> <!-- create list for each task-->
		<article class="display_tasks_substeps"
	<?php		
				
				if ($value['executed'] == 1){
					?>
		<li><p class="done"><?php echo ' ' . $value['task_name'] . ' ' ;?></p><?php
	}
			else{?> 

			<li><p class="undone"><?php echo ' ' . $value['task_name'] . ' ' ;
				} ?>
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

					<a href="substep.php?click=<?php echo $value['id']?>&id=<?php echo $id_project ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i></a><!-- see more -->

					<a href="delete.php?delete=<?php echo $value['id']?>&id=<?php echo $id_project ?>"><i class="fa fa-trash" aria-hidden="true"></i></a> <!--remove-->
				</p>
			</li>
		</article>
			<?php
		} 
		?>
		</ul>
		<?php
	}

	if(isset($new_substep)){?> <!-- if is set substep -->
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