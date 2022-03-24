<h2 class="text-center mt-4">
            Nos nouveautés
        </h2>
        <section class="row news">
            <?php foreach( $viewVars['list'] as $product ): ?>
            <div class="card col-11 col-lg-8 mx-auto text-center my-2">
                <img src="<?= $absoluteUrl ?>/assets/<?= $product['picture'] ?>" alt="<?= $product['description'] ?>" class="card-img-top ">
                <div class="card-body">
                    <h2 class="card-title">
                        <?= $product['name'] ?> 
                    </h2>
                    <p class="card-text">
                        <?= $product['description'] ?>
                    </p>
                    <a href="" class="btn <?= $product['category_name'] ?> text-light" >
                       <?= $product['category_name'] ?>
                    </a>
                </div>
            </div>
           <?php endforeach ?>
        </section>