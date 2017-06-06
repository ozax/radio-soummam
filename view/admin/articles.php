<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Articles</h3>
    </div>
    <div class="panel-body">
        <table id="example" class="table table-striped table-bordered" cellspacing="0">
            <thead> <tr>
                <th>Titre :</th>
                <th>Publié par :</th>
                <th>Publié le :</th>
                <th>Action :</th>
            </tr></thead>
            <?php foreach($article as $article): ?>
            <tr>
                <td><?=$article["titre"]?></td>
                <td></td>
                <td><?=$article["datePublication"]?></td>
                <td><a class="btn btn-default" href="./admin.php?p=articles&edit='<?=$article["idArticle"]?>" <abbr title='Modifier'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></abbr></a> <a class="btn btn-danger"  data-toggle="modal" data-target="#sarticle"><abbr title='Supprimer'<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></abbr></a></td>
            </tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>
<div class="modal fade" id="sarticle" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <!-- Le contenu du modal-->
        <div class="modal-content">
            <form methode='post' action='suparticle.php' enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><div class='icon'> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Supprimer un article</div></h4>
                </div>
                <div class="modal-body">
                    <h1 class="h11"><b> Êtes-vous sûr de vouloir continuer ? </b> </h1>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="submit" name='barticle' class="btn btn-danger">Supprimer</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>