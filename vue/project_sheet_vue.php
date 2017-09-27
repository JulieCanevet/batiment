<article class="col lg-4 md-4 xs-4">

    <h2 class="card-title"><?php echo $project['construction_name']?></h2>
                
    <p class="card-text">Projet managé par <?php echo $project['project_manager']?></p>                             
    <p class="card-text">Dates : du <?php echo $project['start_date'] . ' au ' . $project['end_date']?></p>
    
    <p class="card-text"><?php echo $project['description']?></p>
</article>