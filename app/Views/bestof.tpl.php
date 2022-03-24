<div class="row">
    <?php foreach( $viewVars['list'] as $product ) : ?>
            <article class="col-12 text-center">
                <h2><?= $product['name'] ?></h2>
                <img src="<?= $absoluteUrl ?>/assets/<?= $product['picture'] ?>" alt="" class="">
                <p class="">
                    <?= $product['description'] ?>
                </p>
                <p class=" ">
                    Prix: <?= $product['price'] ?>€
                </p>
            </article>
           <?php endforeach ?> 
        </div>
       