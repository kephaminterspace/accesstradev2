 <div class="widget widget_categories search_form">
    <form method="get" class="searchform clearfix" action="<?php echo home_url( '/' ); ?>"  role="search" >
        <div class="clearfix">
            <input type="text"   placeholder="<?php echo esc_attr_x( 'Tìm kiếm...', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" class="at-form-control" >
            <input type="submit" id="searchsubmit" value="">
        </div>
        <input type="hidden" name="lang" value="en">
    </form>
</div>




    <?php get_template_part('contents/blog/news-hot'); ?>

                    