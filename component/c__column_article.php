<?php
$post_column = $args['column_article'];
// var_dump($post_column);
?>
<li class="column__item">
    <a href="<?php the_permalink(); ?>" class="column__link">
    <div class="column__head">
        <?php the_post_thumbnail('large', 'column__img'); ?>
    </div>
    <div class="column__body">
        <h3 class="column__title"><?php the_title() ?></h3>

        <p class="column__date"><?php echo get_the_date('Y.m.d'); ?></p>

        <?php // 投稿に紐付いてるターム一覧を表示
        $column_tag = 'column_tag'; // タクソノミーのスラッグを指定
        $column_tag_terms = wp_get_object_terms($post_column->ID, $column_tag);
        $terms = get_the_terms($post_id, $column_tag);
        if(!empty($terms) && count($terms) > 0) {
        ?>
          <div class="column__category-wrapper">
            <?php foreach($terms as $term) {
              $tag_term_link = get_term_link($term->slug, $column_tag);
              $tag_term_name = $term->name;
            ?>
              <span class="column__category">#<?php echo $tag_term_name ?></span>
            <?php } ?>
          </div>
        <?php } ?>
    </div>
    </a>
</li>
