<?php
$this->layout('layout', ['title' => 'Recherche']);
$this->start('main_content');
?>
    <div class="container-fluid background-book">
        <div class="container">
            <!-- <div class="row logo-search-bar">
            <img src="<?php /*echo $this->assetUrl('img/LogoBlancOr.svg')*/?>" alt="">
        </div>
        -->
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="  <?php echo $this->url('home') ?>   ">Accueil</a></li>
                    <li class="active">Rechercher un livre</li>
                </ol>
            </div>

            <div class="col-sm-12">
                <h1>Rechercher un livre</h1>
                <p>Vous recherchez un livre ou les ouvrages d'un auteur en particulier ?<br />
                    Effectuez votre recherche grâce au formulaire ci-dessous.</p>
                <form class="form" action="<?php echo $this->url('public.search'); ?>" method="POST">
                    <div class="form-group">
                        <label for="search">Effectuer une recherche</label>
                        <input id="search" type="search" name="q" id="q" class="form-control" placeholder="Rechercher">
                    </div>
                    <input type="submit" class="btn btn-success pull-right" name="search" value="Rechercher">
                </form>
            </div>
        </div>
        <div class="container">
            <?php if (isset($results)) : ?>
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Résultats de recherche pour &laquo; <?php echo $searchTerm; ?> &raquo;</h2>
                    </div>
                    <div class="col-sm-12">
                        <?php if (!empty($results)) : ?>
                            <ul>
                                <?php foreach ($results as $result) : ?>
                                    <li>
                                        <a href="<?php echo $this->url('public.view', ['id' => $result['id']]); ?>">
                                            <?php echo $result['title'] ?>
                                            <small>(<?php echo $result['author']; ?>)</small>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php elseif($w_user) : ?>
                            <p>Aucun résultat pour &laquo; <?php echo $searchTerm; ?> &raquo;. <br />Pourquoi ne pas nous faire <a                          href="<?php echo $this->url('profile.book.add'); ?>">une proposition de livre</a> ?</p>
                        <?php else: ?>
                            <p>Aucun résultat pour &laquo; <?php echo $searchTerm; ?> &raquo;.</p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $this->stop('main_content') ?>