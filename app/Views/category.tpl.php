<section class="row section-category">
    <?php foreach( $viewVars['list'] as $category) : ?>
            <div class="category col-12 text-center <?= $category['name'] ?>">
                <h2>
                    <a href="#">
                        <?= $category['name'] ?>
                    </a>
                </h2>
            </div>
            <?php endforeach ?>
  
        </section>