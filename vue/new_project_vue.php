<section class="row col-md-8 container registeration">
    
        <article class="registerInner">
            <h3 class="headerSign">Votre projet</h3>
                    
            <form class="col-md-10" action="new_project.php" method="post" enctype="multipart/form-data">

                    <label>Nom du chantier : </label><input class="form-control" type="text" name="construction_name">

                    <label>Nom du chef de projet : </label><input class="form-control" type="text" name="project_manager">

                    <label>Description du chantier : </label><input class="form-control" type="text" name="description">

                    <label>Date du début : </label><input class="form-control" type="Date" name="start_date" placeholder="jj/mm/aaaa">
                    
                    <label>Date de fin : </label><input class="form-control" type="Date" name="end_date" placeholder="jj/mm/aaaa">

                <button type="submit" class="signbuttons btn btn-primary">Publier</button>

            </form>
        </article>    
    </section>