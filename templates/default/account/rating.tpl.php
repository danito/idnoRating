<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <?= $this->draw('account/menu') ?>
        <h1>Enable Ratings</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <?php
        if (empty(\Idno\Core\site()->session()->currentUser()->rating))  {
            ?>
            <form action="<?= \Idno\Core\site()->config()->getDisplayURL() ?>account/rating/" class="form-horizontal" method="post">
            <div class="control-group">
                        <div class="controls-config">
                            <div class="row">
                                <div class="col-md-7">
                                    
                                    <div class="social">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Enable rating
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
            <?php
        }
            ?>
    </div>
</div>