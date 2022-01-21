<?php get_header(); ?>

    <main>
        <?php the_content(); ?>

        <?php $fcb_contents = get_field('content') ?>
        <div class="fcb-elements">
            <?php foreach($fcb_contents as $fcb_content): ?>
            <div class="fcb-element">
                <h1>
                    <?=$fcb_content['title']?>
                </h1>
                <?php foreach($fcb_content['posts'] as $post): ?>
                    <div class="fcb-post">
                        <h2>
                            <?=$post->post_title?>
                        </h2>
                        <p>
                            <?=$post->post_content?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

<?php get_footer(); ?>