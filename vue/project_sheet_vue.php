<section id="project_sheet">
<article class="col lg-4 md-4 xs-4" id="project_description">

    <h2 class="card-title"><?php echo $project['construction_name']?></h2>
                
    <p class="card-text">Projet managé par <?php echo $project['project_manager']?></p>                             
    <p class="card-text">Dates : du <?php echo $project['start_date'] . ' au ' . $project['end_date']?></p>
    
    <p class="card-text"><?php echo $project['description']?></p>

<a href="delete.php?click=<?php echo $project['id']?>"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Supprimer le projet</a>
<br>
<a href="add_task.php?click=<?php echo $project['id']?>&id=<?php echo $id_project ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i> Ajouter des tâches</a>
<br>
<a href="home_page.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Retour</a>
</article>