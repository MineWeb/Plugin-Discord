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
					<h3 class="box-title"><?= $Lang->get("DISCORD__ADD"); ?></h3> <span style="float:right;"><?= $Lang->get("CREDIT_AUTHOR"); ?></span><br><h6>Un tutoriel est disponible sur le GitHub de MineWeb ! <a href="https://github.com/MineWeb/Plugin-Discord/wiki/Installation---Configuration">(Wiki)</a></h6>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form data-ajax="true" action="<?= $this->Html->url(array('controller' => 'Discord', 'action' => 'add_ajax')) ?>" method="post" data-redirect-url="<?= $this->Html->url(array('action' => 'index')) ?>" data-success-msg="false">

								<div class="form-group">
                                    <label><?= $Lang->get('DISCORD__ADMIN_LABEL'); ?></label>
                                    <div class="input-group">
                                    <span class="input-group-addon"><?= $Lang->get('DISCORD__ADMIN_SUBTITLE'); ?></span>
                                    <input type="text" class="form-control" name="api" placeholder="">
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
				<div class="box-header with-border">
					<h3 class="box-title"><?= $Lang->get('DISCORD__API') ?></h3>
				</div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-responsive dataTable">
                                <thead>
                                <tr>
                                    <th>Widget ID</th>
									<th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datas as $data): ?>
                                        <tr>
                                            <td><?= $data['Discord']['api_discord']; ?></td>
                                            <td><a onclick="confirmDel('/admin/discord/discord/delete/<?= $data['Discord']['id']; ?>')" class="btn btn-danger"><?= $Lang->get('GLOBAL__DELETE') ?></a></td>
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