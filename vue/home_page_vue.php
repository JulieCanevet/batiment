<section id="cartes">

<?php foreach ($project as $key => $value) {
       ?>
       <article class="card" style="width: 20rem;">
			  <div class="card-block">
                
                <h4 class="card-title"><?php echo $value['construction_name']?></h4>
                
                <p class="card-text">Projet managé par <?php echo $value['project_manager']?></p>                             
                <p class="card-text">Dates : du <?php echo $value['start_date'] . ' au ' . $value['end_date']?></p>
                
                <p class="card-text"><?php echo $value['description']?></p>

			    <a href="project.php?id=<?php echo $value['id']?>" class="btn btn-primary">Voir plus</a>
			  </div>
		</article>
<?php } ?>
</section>