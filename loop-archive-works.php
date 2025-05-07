<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<?php if ( have_posts() ) : ?>

  <?php
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
  $args = array(
  'post_type' => $post_type,
  'paged' => $paged,
  'posts_per_page' => '20',
  'orderby' => 'post_date',
  );
  $custom_query = new WP_Query( $args );
  ?>

  <div class="section_block section_block_works_list bg_daiya">
    <div class="wrapper">
      <h3 class="heading03">WEBシステム開発</h3>
      <ul class="contents_list contents_list_type_01">



    <?php
    // Start the Loop.
    while ( have_posts() ) :
      the_post();
      ?>




      <li class="contents_item">
        <a class="contents_item_link" href="<?php echo get_permalink();?>">
          <div class="contents_item_img"><?php the_post_thumbnail('thumbnail'); ?></div>
          <p class="contents_title"><?php the_title();?></p>
        </a>
      </li>





      <?php
      // End the loop.
    endwhile;
    ?>



    </ul>
    <!-- /.contents_list -->

      <!-- ▽▽▽ページネーション▽▽▽ -->
      <div class="page_nation pc_block mb_30">
        <ul class="page_nation_list">
          <li class="page_nation_btn active"><a href="#">1</a></li>
          <li class="page_nation_btn"><a href="#">2</a></li>
          <li class="page_nation_btn"><a href="#">3</a></li>
          <li class="page_nation_btn"><a href="#">4</a></li>
          <li class="page_nation_btn"><a href="#">5</a></li>
          <li class="page_nation_btn"><a href="#">6</a></li>
          <li class="page_nation_btn"><a href="#">7</a></li>
          <li class="page_nation_btn"><a href="#">8</a></li>
          <li class="page_nation_btn"><a href="#">9</a></li>
          <li class="page_nation_btn"><a href="#">10</a></li>
          <li class="page_nation_btn page_nation_btn_hidden">…</li>
          <li class="page_nation_btn"><a href="#">20</a></li>
        </ul>
      </div>
      <div class="page_nation sp_block mb_30">
        <ul class="page_nation_list">
          <li class="page_nation_btn active"><a href="#">1</a></li>
          <li class="page_nation_btn"><a href="#">2</a></li>
          <li class="page_nation_btn"><a href="#">3</a></li>
          <li class="page_nation_btn page_nation_btn_hidden">…</li>
          <li class="page_nation_btn"><a href="#">10</a></li>
        </ul>
      </div>
      <!-- △△△ページネーション△△△ -->


    </div>
    <!-- /.wrapper -->
  </div>
  <!-- /.section_block_news_list -->


		<?php endif;?>

<?php
get_footer();
