<section class="content">
    <div class="col-md-6">
        <div class="callout callout-success" style="border: none;"><h4>Bug / Support</h4>Je suis disponible sur le Discord de MineWeb ou en message privé pour toutes demandes : ByFow#7443 !</div>
    </div>
    <div class="col-md-6">
        <div class="callout callout-warning" style="border: none;"><h4><center>Modification</center></h4><center>Je suis ouvert à toutes propositions de modification sur le GitHub de MineWeb.</center></div>
	</div>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
					<h3 class="box-title"><?= $Lang->get("DISCORD__ADD"); ?></h3> <span style="float:right;"><?= $Lang->get("CREDIT_AUTHOR"); ?></span>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post" data-ajax="true">

								<div class="form-group">
                                    <label>Insérer votre Identifiant de Serveur (ID) ! (Kékecé ?? Voici un petit tuturiel disponible <a href="http://demo.byfow.fr/p/docs-discord" target=\"_blank\">ici</a>!)</label>
                                    <div class="input-group">
                                    <span class="input-group-addon">Ajoute ton ID :</span>
                                    <input type="text" class="form-control" name="api" value="<?= $data['api'] ?>" placeholder="">
                                </div><br></br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary center-block"><?= $Lang->get('GLOBAL__DISCORD__SUBMIT'); ?></button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-responsive dataTable">
                                <thead>
                                <tr>
                                    <th><?= $Lang->get('DISCORD__API') ?></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datas as $data): ?>
                                        <tr>
                                            <td><?= $data['Info']['api']; ?></td>
                                            <td><a onclick="confirmDel('/admin/discord/discord/delete/<?= $data['Info']['id']; ?>')" class="btn btn-danger"><?= $Lang->get('GLOBAL__DISCORD__DELETE') ?></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>