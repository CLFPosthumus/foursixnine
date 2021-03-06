<?php
/**
 * Custom Walker
 *
 * @access      public
 * @since       1.0 
 * @return      void
*/
 global $yith_wcwl, $woocommerce;

class rc_scm_walker extends Walker_Nav_Menu
{
	
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
	{		   
	   
	   global $wp_query;
	   
	   $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	
	   $class_names = $value = '';
	
	   $classes = empty( $item->classes ) ? array() : (array) $item->classes;
	
	   $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
	   $class_names = ' class="'. esc_attr( $class_names ) . '"';
	
	   $output .= $indent . '<li id="shopkeeper-menu-item-'. $item->ID . '"' . $value . $class_names .'>';
	
	   $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	   $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	   $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	   $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
	
	   $prepend = '';
	   $append = '';
	   //$description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';
	
	   if($depth != 0)
	   {
		   $description = $append = $prepend = "";
	   }
	
		$item_output = $args->before;

		if ((strtoupper($item->title) == 'CART')) {
			$item_output .=  '<a data-toggle="offCanvasTop1">';
			$item_output .=  '<i class="spk-icon spk-icon-search"></i></a>';			
			$item->title .=  ' ('. WC()->cart->get_cart_contents_count().')';	
		}
		
		if($depth > 1 && !empty($item->background_url)) {
			$item_output .= '<a class="has-hover-img" '. $attributes .'>';
		} 
		 
		
			else {
			$item_output .= '<a'. $attributes .'>';
		}
		//CP Custom
		

		$item_output .= $args->link_before .$prepend.apply_filters( 'the_title', (strtoupper($item->title)), $item->ID
		

		
		
		).$append;
		//$item_output .= $description.$args->link_after;
		// $item_output .= ' '.$item->background_url.'</a>';
		if($depth > 1 && !empty($item->background_url)) {
			$item_output .= '<span class="menu-hover-img"><img src="' . $item->background_url . '" /></span>';
		}
		$item_output .= '</a>';
		$item_output .= $args->after;
	
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		
		apply_filters( 'walker_nav_menu_start_lvl', $item_output, $depth, $args->background_url = $item->background_url );
	 }
	 
	 function start_lvl(&$output, $depth = 0, $args = array()) {
		if ($args->background_url != "") {
			$bg_class = "with_bg_image";
			$bg_style = 'style="background-image:url('.$args->background_url.');"';
		} else {
			$bg_class = "";
			$bg_style = "";
		}
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"sub-menu ".$bg_class." level-".$depth."\" ".$bg_style.">\n";
	}
}