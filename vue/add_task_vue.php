       <section class="row col-md-8 col-md-offset-2 registeration">
            
            <h3 class="headerSign">Ajouter une tâche</h3>      
            <form class="col-md-10" action="add_task.php?click=<?php echo $id_project?>" method="post" enctype="multipart/form-data">

                <input class="form-control" type="text" name="task_name" placeholder="Nom de la tâche">
                <input class="form-control" type="hidden" name="id_project" value="<?php $_GET['click']?>">

             <button type="submit" class="signbuttons btn btn-primary">ajouter</button>
            </form>
        <a href="project_sheet.php?id=<?php echo $id_project?>">Retour projet</a>

    </section>