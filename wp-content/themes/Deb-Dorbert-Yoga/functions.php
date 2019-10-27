<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', 
        get_stylesheet_directory_uri() . '/style.css', 
        array('parent-style'), 
        wp_get_theme()->get('Version') 
    );
}

if ( ! function_exists( 'fluida_lpblocks' ) ):
    function fluida_lpblocks( $sid = 1 ) {
        $maintitle = cryout_get_option( 'fluida_lpblockmaintitle'.$sid );
        $maindesc = cryout_get_option( 'fluida_lpblockmaindesc'.$sid );
        $pageids = cryout_get_option( apply_filters('fluida_blocks_ids', array( 'fluida_lpblockone'.$sid, 'fluida_lpblocktwo'.$sid, 'fluida_lpblockthree'.$sid, 'fluida_lpblockfour'.$sid), $sid ) );
        $icon = cryout_get_option( apply_filters('fluida_blocks_icons', array( 'fluida_lpblockoneicon'.$sid, 'fluida_lpblocktwoicon'.$sid, 'fluida_lpblockthreeicon'.$sid, 'fluida_lpblockfouricon'.$sid ), $sid ) );
        $blockscontent = cryout_get_option( 'fluida_lpblockscontent'.$sid );
        $blocksclick = cryout_get_option( 'fluida_lpblocksclick'.$sid );
        $blocksreadmore = cryout_get_option( 'fluida_lpblocksreadmore'.$sid );
        $count = 1;
        $pagecount = count( array_filter( $pageids, function ($v) { return $v > 0; } ) );
        if ( empty( $pagecount ) ) return;
        if ( -1 == $blockscontent ) return;
        ?>
        <section id="lp-blocks<?php echo $sid ?>" class="lp-blocks lp-blocks<?php echo $sid ?> lp-blocks-rows-<?php echo apply_filters('fluida_blocks_perrow', $pagecount, $sid) ?>">
            <?php if(  ! empty( $maintitle ) || ! empty( $maindesc ) ) { ?>
                <header class="lp-section-header">
                    <?php if( ! empty( $maintitle ) ) { ?><h2 class="lp-section-title"> <?php echo do_shortcode( wp_kses_post( $maintitle ) ) ?></h2><?php } ?>
                    <?php if( ! empty( $maindesc ) ) { ?><div class="lp-section-desc"> <?php echo do_shortcode( wp_kses_post( $maindesc ) ) ?></div><?php } ?>
                </header>
            <?php } ?>
        </section>
    <?php
    wp_reset_postdata();
    } //fluida_lpblocks()
    endif;

// Add "BLOG: " to any post title in the "blogs" category
function blog_titles ($title, $id=null) {
    if (in_category( 'blogs', $id)) {
        $title = "BLOG: " . $title;
    }
    return $title;
}
add_filter('the_title', 'blog_titles', 10, 2);

/**
 * Remove Author Name Functionality
 * If Blogs are posted, only one person is most likely writing blogs
 */
if ( ! function_exists( 'fluida_posted_author' )) :
    function fluida_posted_author() {
        if ( 'post' !== get_post_type() ) return;
        $fluida_meta_author = cryout_get_option( 'fluida_meta_author' );
} // fluida_posted_author
endif;