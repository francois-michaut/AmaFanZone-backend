<section class="row">
            <h2 class="col-12">
                Nos dernières nouveautés:
            </h2>
            <?php foreach( $viewVars['liste'] as $product ) :?>
            <article class="col-12 text-center">
                <p>
                   <?= $product['description'] ?>
                </p>
                <img src="<?= $absoluteUrl ?>/assets/<?= $product['picture'] ?>" alt="morceau de viande">
            </article>
            <?php endforeach ?>
          
        </section>
        <section class="row">
            <h2 class="col-12">
                Meilleures ventes:
            </h2>
            <?php foreach( $viewVars['news'] as $newProduct ) : ?>
            <article class="col-12 text-center">
                <img src="<?= $absoluteUrl ?>/assets/<?= $newProduct['picture'] ?>" alt="anneau de la terre du milieu">
                <p>
                    <?= $newProduct['description'] ?>
                </p>
                <button class="btn <?= $newProduct['category_name'] ?> text-light">
                   <?= $newProduct['category_name'] ?>
                </button>
            </article>
          <?php endforeach ?>
        </section>