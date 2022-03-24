<section class="row section-category ">
    <?php foreach( $viewVars['list'] as $category) : ?>
            <div class="category col-12 col-lg-5 text-center mx-auto m-2 <?= $category['category_name'] ?>">
                <h2>
                    <a href="#">
                        <?= $category['category_name'] ?>
                    </a>
                </h2>
            </div>
            <?php endforeach ?>
  
        </section>