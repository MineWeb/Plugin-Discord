<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <blockquote>
                    <h1 style="font-size:18px;">
                        <?= $Lang->get("INDEX_TITRE"); ?>
                    </h1>
                </blockquote>
                <?php foreach ($datas as $data): ?>
                <div class="center-block">
                    <div class="col-md-6">
                        <div class="box">
                            <center>
                                <br></br>
                                <iframe src="<?= $Lang->get("WIDGET_DEBUT"); ?><?= $data['Info']['api']; ?>" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
                            </center>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

