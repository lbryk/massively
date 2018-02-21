<?php
//include get_stylesheet_directory_uri() . '/author-form.php';
//global $recipient_info;
//require_once( 'author-form.php' );

if(file_exists( STYLESHEETPATH . '/authorform.php' )){
    require_once('authorform.php');

} 

/* Menu */
register_nav_menu( 'main', 'Menu główne' );

/* Activate link menu */
class Custom_Walker_Nav_Menu_top extends Walker_Nav_Menu
{
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $is_current_item = '';
        if(array_search('current-menu-item', $item->classes) != 0)
        {
            $is_current_item = ' class="active"';
        }
        echo '<li'.$is_current_item.'><a href="'.$item->url.'">'.$item->title;
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        echo '</a></li>';
    }
}

/* Post thumbnails */
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 508, 310, true );

/* Read more link */
add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
    return '<ul class="actions"><li><a class="button" href="' . get_permalink() . '">Continue Reading</a></li></ul>';
}

/* Pagination */
function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         
         echo "<div class='pagination'>";
         // if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a class='previous' href='".get_pagenum_link(1)."'>Prev</a>"; // wyrzuca do pierwszego
         if(get_previous_posts_link()) echo "<a class='previous' href='".get_pagenum_link($paged - 1)."'>Prev</a>";
         if(get_previous_posts_link() && $paged >= 4 && $pages > $showitems) echo '<span class="extra">&hellip;</span>';
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<a href='".get_pagenum_link($i)."' class='page active'>".$i."</a>":"<a class='page' href='".get_pagenum_link($i)."'  >".$i."</a>"; 
             } 
         }  
      
         if(get_next_posts_link() && $paged <= $pages-3 && $pages > $showitems) echo '<span class="extra">&hellip;</span>';
         if (get_next_posts_link()) echo "<a class='next' href='".get_pagenum_link($paged + 1)."'>Next</a>";  
      //   if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a class='next' href='".get_pagenum_link($pages)." '>Next</a>"; // wyrzuca do ostatniego
         echo "</div>\n";
     } 
}
