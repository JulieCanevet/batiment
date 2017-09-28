<article class="col lg-4 md-4 xs-4">

    <h2 class="card-title"><?php echo $project['construction_name']?></h2>
                
    <p class="card-text">Projet managé par <?php echo $project['project_manager']?></p>                             
    <p class="card-text">Dates : du <?php echo $project['start_date'] . ' au ' . $project['end_date']?></p>
    
    <p class="card-text"><?php echo $project['description']?></p>

<a href="delete.php?click=<?php echo $project['id']?>">Supprimer le projet</a>
<a href="add_task.php?click=<?php echo $project['id']?>">Ajouter des tâches</a>
</article>