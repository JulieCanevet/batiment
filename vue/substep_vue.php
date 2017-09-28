 <section class="row col-md-8 col-md-offset-2 registeration">
            
            <h3 class="headerSign">Ajouter une sous-étape</h3>      
            <form class="col-md-10" action="substep.php?click=<?php echo $id_task?>" method="post" enctype="multipart/form-data">

                <input class="form-control" type="text" name="title" placeholder="Nom de la sous-étape">
                <input class="form-control" type="text" name="substep_description" placeholder="description">
                <input class="form-control" type="hidden" name="id_task" value="<?php $_GET['click']?>">

             <button type="submit" class="signbuttons btn btn-primary">ajouter</button>
            </form>
    </section>