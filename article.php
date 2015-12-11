<?php partial('header'); ?>

<article id="article-<?php echo article_id(); ?>">
    <h3 class="article-title"><a href="<?php echo article_url(); ?>"><?php echo article_title();?></a></h3>
    <p class="article-info">
        by <a href="mailto:<?php echo user_authed_email(); ?>"><?php echo article_author(); ?></a>
         on <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time>
         in <a href="<?php echo category_url(); ?>"><?php echo category_title(); ?></a>
        <?php if (comments_open()) : ?>
            <span>
                <a class="comments-button" href="#comment"><?php echo mp_article_total_comments(); ?> 
                <?php if (mp_article_total_comments() != 1) : ?>
                    comments</a>
                <?php else : ?>
                    comment</a>
                <?php endif; ?>
            </span>
        <?php endif; ?>
     </p>
    <?php echo article_markdown(); ?>
</article>

<?php if (comments_open()) {
    partial('comments');
} ?>

<?php theme_include('footer'); ?>
