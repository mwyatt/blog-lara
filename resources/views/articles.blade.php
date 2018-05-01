                <div class="articles d-none">

                    <?php foreach ($articles as $article): ?>

                        <div class="article">
                            <span class="article-date float-right"><?php echo date('d-m-y', $article->timePublished) ?></span>
                            <h3 class="article-title"><a href="#"><?php echo $article->title ?></a></h3>
                            <p class="article-description"><?php echo $article->description ?></p>
                        </div>

                    <?php endforeach ?>

                </div>
