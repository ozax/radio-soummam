<?php require "./Views/Admin/header.php"; ?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Programmes</h3>
    </div>
    <div class="liste-jours">
        <ul class="list-unstyled list-inline">
            <li>Choisir le jour :</li>
            <li <?php if($day == 'samedi') echo 'class="active"' ?>><a href="<?=$repertory ?>/admin/programmes/samedi">Samedi</a></li>
            <li>|</li>
            <li <?php if($day == 'dimanche') echo 'class="active"' ?>><a href="<?=$repertory ?>/admin/programmes/dimanche">Dimanche</a></li>
            <li>|</li>
            <li <?php if($day == 'lundi') echo 'class="active"' ?>><a href="<?=$repertory ?>/admin/programmes/lundi">Lundi</a></li>
            <li>|</li>
            <li <?php if($day == 'mardi') echo 'class="active"' ?>><a href="<?=$repertory ?>/admin/programmes/mardi">Mardi</a></li>
            <li>|</li>
            <li <?php if($day == 'mercredi') echo 'class="active"' ?>><a href="<?=$repertory ?>/admin/programmes/mercredi">Mercredi</a></li>
            <li>|</li>
            <li <?php if($day == 'jeudi') echo 'class="active"' ?>><a href="<?=$repertory ?>/admin/programmes/jeudi">Jeudi</a></li>
            <li>|</li>
            <li <?php if($day == 'vendredi') echo 'class="active"' ?>><a href="<?=$repertory ?>/admin/programmes/vendredi">Vendredi</a></li>
        </ul>
    </div>
    <div class="panel-body">
        <?php
        $msg1 = new \Services\FlashMessages();
        if (isset($msg1))
            $msg1->display();
        ?>
        <table id="example" class="table table-striped table-bordered responsive" cellspacing="0">
            <thead><tr>
                <th>Titre :</th>
                <th>Date de création :</th>
                <th>Heure-Debut :</th>
                <th>Heure-Fin :</th>
                <th>Action :</th>
            </tr></thead>
            <?php foreach ($programme as $programme):?>
                <tr>
                    <td><?=$programme["sujet"]?></td>
                    <td><?=$programme["datePublication"]?></td>
                    <td><?=$programme["heurDebut"]?></td>
                    <td><?=$programme["heurFin"]?></td>
                    <td><a class="btn btn-default" href="./admin.php?p=programmes&edit='<?=$programme["idProgramme"]?>"><!--en cliquant sure le bouton ,la page de modification (qui est la méme que la page d'ajout) va s'afficher avec un formulaire en affichant les ancien champs déja remplits  --><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <a class="btn btn-danger" data-toggle="modal" data-target="#sprogramme"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                </tr>
            <?php endforeach;?>




        </table>
    </div>
</div>
<div class="modal fade" id="sprogramme" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <!-- Le contenu du modal-->
        <div class="modal-content">
            <form method='post' action='suparticle.php' enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><div class='icon'> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Supprimer une Emission du programme</div></h4>
                </div>
                <div class="modal-body">
                    <h1 class="h11"><b> Êtes-vous sûr de vouloir continuer ? </b> </h1>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="submit" name='bprogramme' class="btn btn-danger">Supprimer</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php require "./Views/Admin/footer.php"; ?>