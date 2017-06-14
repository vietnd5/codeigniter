<?php
	
	// Enable header/footer functionality
	define( 'DS_LIVE_COMPOSER_HF', true );

	// Alter Defaults
	function lct_alter_defaults( $options, $id ) {
 
		// The array that will hold new defaults
		$new_defaults = array();

		// Projects
		if ( $id == 'DSLC_Projects' ) { 
			$new_defaults = array(
				'amount' => '6',
				'columns' => '4',
				'post_elements' => 'thumbnail title categories excerpt ',
				'css_sep_height' => '15',
				'css_sep_style' => 'none',
				'css_thumbnail_border_radius_top' => '0',
				'css_main_border_trbl' => 'right bottom left ',
				'css_main_border_radius_bottom' => '0',
				'css_main_padding_vertical' => '30',
				'css_main_padding_horizontal' => '30',
				'css_main_text_align' => 'left',
				'css_title_font_size' => '20',
				'css_title_font_family' => 'Roboto',
				'css_title_line_height' => '20',
				'css_title_margin_bottom' => '15',
				'css_excerpt_border_width' => '0',
				'css_excerpt_font_size' => '16',
				'css_excerpt_font_weight' => '300',
				'css_excerpt_font_family' => 'Roboto',
				'css_excerpt_line_height' => '26',
				'excerpt_margin' => '0',
				'excerpt_length' => '100',
				'css_excerpt_padding' => '0',
				'main_heading_title' => 'Featured Projects',
				'css_main_heading_color' => 'rgb(0, 0, 0)',
				'css_main_heading_font_size' => '27',
				'css_main_heading_font_family' => 'Roboto',
				'css_main_heading_font_weight' => '700',
				'css_main_heading_line_height' => '27',
				'css_main_heading_link_color' => 'rgb(253, 73, 112)',
				'css_main_heading_link_color_hover' => 'rgb(253, 73, 112)',
				'css_main_heading_link_font_weight' => '400',
				'css_main_heading_link_font_family' => 'Roboto',
				'css_main_heading_link_padding_ver' => '7',
				'view_all_link' => '#',
				'css_heading_margin_bottom' => '30',
				'css_arrows_bg_color_hover' => 'rgb(253, 73, 112)',
				'css_arrows_border_radius' => '0',
				'css_arrows_size' => '27',
				'css_circles_color_active' => 'rgb(253, 73, 112)',
				'css_circles_size' => '8',
				'css_circles_spacing' => '5',
				'css_pag_item_bg_color' => 'rgba(0, 0, 0, 0)',
				'css_pag_item_bg_color_active' => 'rgb(253, 73, 112)',
				'css_pag_item_border_color' => 'rgb(230, 230, 230)',
				'css_pag_item_border_color_active' => 'rgb(253, 73, 112)',
				'css_pag_item_border_radius' => '0',
				'css_pag_item_font_size' => '13',
				'css_pag_item_font_family' => 'Roboto',
				'css_pag_item_padding_horizontal' => '16',
			);
		} elseif ( $id == 'DSLC_Blog' ) { 
			$new_defaults = array(
				'orientation' => 'horizontal',
				'columns' => '6',
				'post_elements' => 'thumbnail title excerpt button ',
				'css_sep_border_color' => 'rgb(230, 230, 230)',
				'css_sep_height' => '25',
				'css_sep_style' => 'none',
				'css_thumb_border_radius_top' => '0',
				'thumb_margin_right' => '30',
				'thumb_resize_height' => '500',
				'thumb_resize_width_manual' => '500',
				'thumb_width' => '14',
				'css_main_border_color' => 'rgb(230, 230, 230)',
				'css_main_border_trbl' => 'top right bottom left ',
				'css_main_border_radius_bottom' => '0',
				'css_main_padding_vertical' => '30',
				'css_main_text_align' => 'left',
				'css_meta_font_family' => 'Roboto',
				'css_meta_padding_vertical' => '12',
				'css_meta_link_color' => 'rgb(253, 73, 112)',
				'css_meta_link_color_hover' => 'rgb(253, 73, 112)',
				'title_font_size' => '20',
				'css_title_font_weight' => '700',
				'css_title_font_family' => 'Roboto',
				'title_line_height' => '30',
				'title_margin' => '15',
				'css_excerpt_color' => 'rgb(154, 154, 154)',
				'css_excerpt_font_size' => '16',
				'css_excerpt_font_weight' => '300',
				'css_excerpt_font_family' => 'Roboto',
				'excerpt_margin' => '15',
				'excerpt_length' => '100',
				'button_text' => 'READ ARTICLE',
				'css_button_bg_color' => 'rgb(253, 73, 112)',
				'css_button_bg_color_hover' => 'rgb(253, 73, 112)',
				'css_button_border_radius' => '0',
				'css_button_font_weight' => '700',
				'css_button_font_family' => 'Roboto',
				'css_button_padding_horizontal' => '20',
				'css_main_heading_color' => 'rgb(0, 0, 0)',
				'css_main_heading_font_size' => '27',
				'css_main_heading_font_family' => 'Roboto',
				'css_main_heading_font_weight' => '700',
				'css_main_heading_line_height' => '27',
				'css_main_heading_link_color' => 'rgb(253, 73, 112)',
				'css_main_heading_link_color_hover' => 'rgb(253, 73, 112)',
				'css_main_heading_link_font_weight' => '400',
				'css_main_heading_link_font_family' => 'Roboto',
				'css_main_heading_link_padding_ver' => '7',
				'view_all_link' => '#',
				'css_heading_margin_bottom' => '30',
				'css_arrows_bg_color_hover' => 'rgb(253, 73, 112)',
				'css_arrows_border_radius' => '0',
				'css_arrows_size' => '27',
				'css_circles_color_active' => 'rgb(253, 73, 112)',
				'css_circles_size' => '8',
				'css_circles_spacing' => '5',
				'css_pag_item_bg_color' => 'rgba(0, 0, 0, 0)',
				'css_pag_item_bg_color_active' => 'rgb(253, 73, 112)',
				'css_pag_item_border_color' => 'rgb(230, 230, 230)',
				'css_pag_item_border_color_active' => 'rgb(253, 73, 112)',
				'css_pag_item_border_radius' => '0',
				'css_pag_item_font_size' => '13',
				'css_pag_item_font_family' => 'Roboto',
				'css_pag_item_padding_horizontal' => '16',
			);
		} elseif ( $id == 'DSLC_Widgets' ) { 
			$new_defaults = array(
				'sidebar' => 'dslc_blog',
				'columns' => '12',
				'css_widget_border_color' => 'rgb(230, 230, 230)',
				'css_widget_padding_horizontal' => '10',
				'css_widget_margin_bottom' => '50',
				'css_title_color' => 'rgb(77, 77, 77)',
				'title_font_size' => '16',
				'css_title_font_weight' => '700',
				'css_title_font_family' => 'Roboto',
				'css_title_line_height' => '18',
				'css_title_margin' => '20',
				'css_title_padding' => '20',
				'css_main_color' => 'rgb(154, 154, 154)',
				'css_main_font_size' => '14',
				'css_main_font_weight' => '300',
				'css_main_font_family' => 'Roboto',
				'css_main_line_height' => '23',
				'css_link_color' => 'rgb(253, 73, 112)',
				'css_link_color_hover' => 'rgb(253, 73, 112)',
				'css_link_font_weight' => '600',
				'css_ul_margin_left' => '20',
			);
		} elseif ( $id == 'DSLC_Navigation' ) { 
			$new_defaults = array(
				'location' => 'dslc_main',
				'css_margin_bottom' => '13',
				'css_item_color_hover' => 'rgb(253, 73, 112)',
				'css_item_font_size' => '20',
				'css_item_font_family' => 'Roboto',
				'css_item_line_height' => '20',
			);
		} elseif ( $id == 'DSLC_TP_Content' ) { 
			$new_defaults = array(
				'css_custom' => 'enabled',
				'css_margin_bottom' => '50',
				'css_main_color' => 'rgb(154, 154, 154)',
				'css_main_font_size' => '16',
				'css_main_font_weight' => '300',
				'css_main_font_family' => 'Roboto',
				'css_main_line_height' => '26',
				'css_main_margin_bottom' => '30',
				'css_h1_color' => 'rgb(12, 12, 12)',
				'css_h1_font_size' => '26',
				'css_h1_font_weight' => '700',
				'css_h1_font_family' => 'Roboto',
				'css_h1_margin_bottom' => '30',
				'css_h2_font_size' => '24',
				'css_h2_font_weight' => '700',
				'css_h2_font_family' => 'Roboto',
				'css_h2_margin_bottom' => '30',
				'css_h3_font_size' => '22',
				'css_h3_font_weight' => '700',
				'css_h3_font_family' => 'Roboto',
				'css_h3_margin_bottom' => '30',
				'css_h4_font_size' => '20',
				'css_h4_font_weight' => '700',
				'css_h4_font_family' => 'Roboto',
				'css_h4_margin_bottom' => '30',
				'css_h5_font_size' => '18',
				'css_h5_font_weight' => '700',
				'css_h5_font_family' => 'Roboto',
				'css_h5_margin_bottom' => '30',
				'css_h6_font_size' => '16',
				'css_h6_font_weight' => '700',
				'css_h6_font_family' => 'Roboto',
				'css_h6_margin_bottom' => '30',
				'css_link_color' => 'rgb(253, 73, 112)',
				'css_link_color_hover' => 'rgb(253, 73, 112)',
				'css_li_color' => 'rgb(154, 154, 154)',
				'css_li_font_size' => '16',
				'css_li_font_weight' => '300',
				'css_li_font_family' => 'Roboto',
				'css_li_line_height' => '26',
				'css_ul_margin_bottom' => '30',
				'css_button_font_family' => 'Roboto',
				'css_blockquote_border_color' => 'rgb(230, 230, 230)',
				'css_blockquote_border_width' => '2',
				'css_blockquote_color' => 'rgb(12, 12, 12)',
				'css_blockquote_font_size' => '25',
				'css_blockquote_font_weight' => '300',
				'css_blockquote_font_family' => 'Roboto Slab',
				'css_blockquote_line_height' => '35',
				'css_blockquote_margin_bottom' => '30',
				'css_blockquote_padding_vertical' => '30',
				'css_blockquote_padding_horizontal' => '30',
			);
		} elseif ( $id == 'DSLC_Text_Simple' ) { 
			$new_defaults = array(
				'css_custom' => 'enabled',
				'css_margin_bottom' => '50',
				'css_main_color' => 'rgb(154, 154, 154)',
				'css_main_font_size' => '16',
				'css_main_font_weight' => '300',
				'css_main_font_family' => 'Roboto',
				'css_main_line_height' => '26',
				'css_main_margin_bottom' => '30',
				'css_h1_color' => 'rgb(12, 12, 12)',
				'css_h1_font_size' => '26',
				'css_h1_font_weight' => '700',
				'css_h1_font_family' => 'Roboto',
				'css_h1_margin_bottom' => '30',
				'css_h2_font_size' => '24',
				'css_h2_font_weight' => '700',
				'css_h2_font_family' => 'Roboto',
				'css_h2_margin_bottom' => '30',
				'css_h3_font_size' => '22',
				'css_h3_font_weight' => '700',
				'css_h3_font_family' => 'Roboto',
				'css_h3_margin_bottom' => '30',
				'css_h4_font_size' => '20',
				'css_h4_font_weight' => '700',
				'css_h4_font_family' => 'Roboto',
				'css_h4_margin_bottom' => '30',
				'css_h5_font_size' => '18',
				'css_h5_font_weight' => '700',
				'css_h5_font_family' => 'Roboto',
				'css_h5_margin_bottom' => '30',
				'css_h6_font_size' => '16',
				'css_h6_font_weight' => '700',
				'css_h6_font_family' => 'Roboto',
				'css_h6_margin_bottom' => '30',
				'css_link_color' => 'rgb(253, 73, 112)',
				'css_link_color_hover' => 'rgb(253, 73, 112)',
				'css_li_color' => 'rgb(154, 154, 154)',
				'css_li_font_size' => '16',
				'css_li_font_weight' => '300',
				'css_li_font_family' => 'Roboto',
				'css_li_line_height' => '26',
				'css_ul_margin_bottom' => '30',
				'css_button_font_family' => 'Roboto',
				'css_blockquote_border_color' => 'rgb(230, 230, 230)',
				'css_blockquote_border_width' => '2',
				'css_blockquote_color' => 'rgb(12, 12, 12)',
				'css_blockquote_font_size' => '25',
				'css_blockquote_font_weight' => '300',
				'css_blockquote_font_family' => 'Roboto Slab',
				'css_blockquote_line_height' => '35',
				'css_blockquote_margin_bottom' => '30',
				'css_blockquote_padding_vertical' => '30',
				'css_blockquote_padding_horizontal' => '30',
			);
		}

		// Call the function that alters the defaults and return
		return dslc_set_defaults( $new_defaults, $options );
 
	} add_filter( 'dslc_module_options', 'lct_alter_defaults', 10, 2 );