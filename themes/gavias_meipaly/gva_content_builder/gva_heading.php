<?php 
if(!class_exists('element_gva_heading')):
   class element_gva_heading{
      public function render_form(){
         $option_1 = array(
            '00'   => '--Default--',
            '14'   => '14',
            '16'   => '16',
            '18'   => '18',
            '20'   => '20',
            '22'   => '22',
            '24'   => '24',
            '26'   => '26',
            '28'   => '28',
            '30'   => '30',
            '32'   => '32',
            '34'   => '34',
            '36'   => '36',
            '38'   => '38',
            '40'   => '40',
            '42'   => '42',
            '44'   => '44',
            '46'   => '46',
            '48'   => '48',
            '50'   => '50',
            '52'   => '52',
            '54'   => '54',
            '56'   => '56',
            '58'   => '58',
            '60'   => '60',
            '70'   => '70',
            '80'   => '80',
            '90'   => '90',
            '100'  => '100'
         );
         $option_2 = array(
            '00' => '--Default--',
            'margin-bottom-5'  => '5px',
            'margin-bottom-10' => '10px',
            'margin-bottom-15' => '15px',
            'margin-bottom-20' => '20px',
            'margin-bottom-25' => '25px',
            'margin-bottom-30' => '30px',
            'margin-bottom-35' => '35px',
            'margin-bottom-40' => '40px',
            'margin-bottom-45' => '45px',
            'margin-bottom-50' => '50px',
            'margin-bottom-55' => '55px',
            'margin-bottom-60' => '60px',
            'margin-bottom-65' => '65px',
            'margin-bottom-70' => '70px',
            'margin-bottom-75' => '75px',
            'margin-bottom-80' => '80px',
            'margin-bottom-85' => '85px',
            'margin-bottom-90' => '90px',
            'margin-bottom-95' => '95px',
            'margin-bottom-100' => '100px'
         );
         $fields = array(
            'type'      => 'gsc_heading',
            'title'     => t('Heading'), 
            'fields'    => array(
               array(
                  'id'        => 'info_1',
                  'type'      => 'info',
                  'title'     => t('Content'),
               ),
               array(
                  'id'        => 'sub_title',
                  'type'      => 'text',
                  'title'     => t('Sub Title'),
               ),
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => t('Title'),
                  'admin'     => true
               ),
               array(
                  'id'        => 'desc',
                  'type'      => 'textarea',
                  'title'     => t('Description'),
               ),

               array(
                  'id'        => 'info_2',
                  'type'      => 'info',
                  'title'     => t('Styling'),
               ),
               array(
                  'id'        => 'align',
                  'type'      => 'select',
                  'title'     => t('Align text for heading'),
                  'options'   => array(
                        'align-center'    => 'Align Center',
                        'align-left'      => 'Align Left',
                        'align-right'     => 'Align Right'
                  ),
                  'std'       => 'align-center'
               ),
               array(
                  'id'        => 'style',
                  'type'      => 'select',
                  'title'     => t('Style display'),
                  'options'   => array(
                        'style-1'   => 'Style I - Default',
                        'style-2'   => 'Style II - Background & Padding',
                  )
               ),
               array(
                  'id'        => 'max_width',
                  'type'      => 'text',
                  'title'     => t('Max Width'),
                  'desc'      => t('e.g: 800px')
               ),
               array(
                  'id'        => 'info_21',
                  'type'      => 'info',
                  'title'     => t('Title Styling'),
               ),
               array(
                  'id'        => 'title_font_size',
                  'type'      => 'select',
                  'title'     => t('Title Font Size'),
                  'options'   => $option_1,
                  'default'   => '00'
               ),
               array(
                  'id'        => 'title_line_height',
                  'type'      => 'select',
                  'title'     => t('Title Line Height'),
                  'options'   => $option_1,
                  'default'   => '00'
               ),
               array(
                  'id'        => 'title_font_weight',
                  'type'      => 'select',
                  'title'     => t('Title Font Weight'),
                  'options'   => array(
                     ''      => '-- Default --',
                     '300'   => '300',
                     '400'   => '400',
                     '500'   => '500',
                     '600'   => '600',
                     '700'   => '700',
                     '800'   => '800',
                     '900'   => '900',
                  ),
                  'default'   => '600'
               ),
               array(
                  'id'        => 'title_color',
                  'type'      => 'select',
                  'title'     => t('Title Color'),
                  'options'   => array(
                     'text-black'   => 'Black Color',
                     'text-white'   => 'White Color',
                     'text-theme'   => 'Theme Color'
                  ),
                  'default'   => 'text-black'
               ),
               array(
                  'id'        => 'html_tags',
                  'type'      => 'select',
                  'title'     => t('Html Title Tags'),
                  'options'   => array(
                        'h1' => 'H1',
                        'h2' => 'H2',
                        'h3' => 'H3',
                        'h4' => 'H4',
                        'h5' => 'H5',
                        'h6' => 'H6',
                  ),
                  'default'       => 'h2'
               ),
               array(
                  'id'        => 'title_margin_bottom',
                  'type'      => 'select',
                  'title'     => t('Title Space Bottom'),
                  'options'   => $option_2,
                  'default'   => '00'
               ),
               array(
                  'id'        => 'info_22',
                  'type'      => 'info',
                  'title'     => t('SubTitle Styling'),
               ),
               array(
                  'id'        => 'subtitle_font_size',
                  'type'      => 'select',
                  'title'     => t('Sub Title Font Size'),
                  'options'   => $option_1,
                  'default'   => '00'
               ),
               array(
                  'id'        => 'subtitle_line_height',
                  'type'      => 'select',
                  'title'     => t('Sub Title Line Height'),
                  'options'   => $option_1,
                  'default'   => '00'
               ),
               array(
                  'id'        => 'subtitle_font_weight',
                  'type'      => 'select',
                  'title'     => t('Sub Title Font Weight'),
                  'options'   => array(
                     ''      => '-- Default --',
                     '300'   => '300',
                     '400'   => '400',
                     '500'   => '500',
                     '600'   => '600',
                     '700'   => '700',
                     '800'   => '800',
                     '900'   => '900',
                  ),
                  'default'   => ''
               ),
               array(
                  'id'        => 'subtitle_color',
                  'type'      => 'select',
                  'title'     => t('Sub Title Color'),
                  'options'   => array(
                     'text-gray'    => 'Gray Color',
                     'text-light'   => 'Gray Light Color',
                     'text-black'   => 'Black Color',
                     'text-white'   => 'White Color',
                     'text-theme'   => 'Theme Color'
                  ),
                  'default'   => 'text-gray'
               ),
               array(
                  'id'        => 'info_23',
                  'type'      => 'info',
                  'title'     => t('Description Styling'),
               ),
               array(
                  'id'        => 'desc_font_size',
                  'type'      => 'select',
                  'title'     => t('Description Font Size'),
                  'options'   => $option_1,
                  'default'   => '00'
               ),
               array(
                  'id'        => 'desc_line_height',
                  'type'      => 'select',
                  'title'     => t('Description Line Height'),
                  'options'   => $option_1,
                  'default'   => '00'
               ),
               array(
                  'id'        => 'desc_font_weight',
                  'type'      => 'select',
                  'title'     => t('Description Font Weight'),
                  'options'   => array(
                     ''      => '-- Default --',
                     '300'   => '300',
                     '400'   => '400',
                     '500'   => '500',
                     '600'   => '600',
                     '700'   => '700',
                     '800'   => '800',
                     '900'   => '900',
                  ),
                  'default'   => ''
               ),
               array(
                  'id'        => 'desc_color',
                  'type'      => 'select',
                  'title'     => t('Description Color'),
                  'options'   => array(
                     'text-gray'    => 'Gray Color',
                     'text-light'   => 'Gray Light Color',
                     'text-black'   => 'Black Color',
                     'text-white'   => 'White Color',
                     'text-theme'   => 'Theme Color'
                  ),
                  'default'   => 'text-gray'
               ),
               array(
                  'id'        => 'desc_margin_bottom',
                  'type'      => 'select',
                  'title'     => t('Description Space Bottom'),
                  'options'   => $option_2,
                  'default'   => '00'
               ),
                array(
                  'id'        => 'info_3',
                  'type'      => 'info',
                  'title'     => t('Button'),
               ),
               array(
                  'id'        => 'button_link',
                  'type'      => 'text',
                  'title'     => t('Button Link')
               ),
               array(
                  'id'        => 'button_text',
                  'type'      => 'text',
                  'title'     => t('Button Text'),
                  'std'       => 'Read More'
               ),
               array(
                  'id'        => 'button_style',
                  'type'      => 'select',
                  'title'     => t('Button Style'),
                  'options'   => array(
                     'btn-theme'    => 'Button Theme',
                     'btn-white'    => 'Button White',
                     'btn-black'    => 'Button Black',
                     'btn-inline'   => 'Button Inline'
                  ),
                  'default'   => 'text-gray'
               ),
               
                array(
                  'id'        => 'info_4',
                  'type'      => 'info',
                  'title'     => t('Other'),
               ),
               array(
                  'id'        => 'remove_padding',
                  'type'      => 'select',
                  'title'     => t('Remove Padding'),
                  'options'   => array(
                        ''                      => 'Default',
                        'padding-bottom-20'     => 'Small padding',
                        'padding-top-0'         => 'Remove padding top',
                        'padding-bottom-0'      => 'Remove padding bottom',
                        'padding-bottom-0 padding-top-0'   => 'Remove padding top & bottom'
                  ),
                  'std'       => '',
                  'desc'      => 'Default heading padding top & bottom: 30px'
               ),
               array(
                  'id'        => 'el_class',
                  'type'      => 'text',
                  'title'     => t('Extra class name'),
                  'desc'      => t('Style particular content element differently - add a class name and refer to it in custom CSS.'),
               ),
               array(
                  'id'        => 'animate',
                  'type'      => 'select',
                  'title'     => t('Animation'),
                  'desc'      => t('Entrance animation for element'),
                  'options'   => gavias_content_builder_animate(),
                  'class'     => 'width-1-2'
               ), 
               array(
                  'id'        => 'animate_delay',
                  'type'      => 'select',
                  'title'     => t('Animation Delay'),
                  'options'   => gavias_content_builder_delay_wow(),
                  'desc'      => '0 = default',
                  'class'     => 'width-1-2'
               )
            ),                                       
         );
         return $fields;
      } 
      public static function render_content( $attr = array(), $content = '' ){
          global $base_url;
         extract(gavias_merge_atts(array(
            'title'                 => '',
            'desc'                  => '',
            'sub_title'             => '',
            'image'                 => '',
            'align'                 => '',
            'style'                 => 'style-1',
            'title_font_size'       => '00',
            'title_line_height'     => '',
            'title_font_weight'     => '600',
            'title_color'           => 'text-black',
            'title_margin_bottom'   => '00',
            'subtitle_font_size'    => '00',
            'subtitle_line_height'  => '',
            'subtitle_font_weight'  => '500',
            'subtitle_color'        => 'text-gray',
            'desc_font_size'        => '00',
            'desc_line_height'      => '',
            'desc_font_weight'      => '',
            'desc_color'            => 'text-gray',
            'desc_margin_bottom'    => '00',
            'button_link'           => '',
            'button_text'           => 'Read More',
            'button_style'          => 'btn-theme',
            'html_tags'             => 'h2',
            'max_width'             => '',
            'el_class'              => '',
            'remove_padding'        => '',
            'animate'               => '',
            'animate_delay'         => ''
         ), $attr));

         if($image){ 
            $image = $base_url . $image;
         }

         $class = array();
         $class[] = $el_class;
         $class[] = $align;
         $class[] = $style;
         $class[] = $remove_padding;
         if($animate) $class[] = 'wow ' . $animate;

         $style = '';
         if($max_width) $style = " style=\"max-width: {$max_width};\"";
         
         $classes_title_text = '';
         $classes_title = array();
         $classes_title[] = "lheight-{$title_line_height}";
         $classes_title[] = "fsize-{$title_font_size}";
         $classes_title[] = "fweight-{$title_font_weight}";
         $classes_title[] = $title_color;
         $classes_title[] = $title_margin_bottom != '00' ? $title_margin_bottom : '';
         $classes_title_text = implode(' ', $classes_title );

         $classes_subtitle_text = '';
         $classes_subtitle = array();
         $classes_subtitle[] = "lheight-{$subtitle_line_height}";
         $classes_subtitle[] = "fsize-{$subtitle_font_size}";
         $classes_subtitle[] = "fweight-{$subtitle_font_weight}";
         $classes_subtitle[] = $subtitle_color;
         $classes_subtitle_text = implode(' ', $classes_subtitle);

         $classes_desc_text = '';
         $classes_desc = array();
         $classes_desc[] = "lheight-{$desc_line_height}";
         $classes_desc[] = "fsize-{$desc_font_size}";
         if($desc_font_weight) $classes_desc[] = "fweight-{$desc_font_weight}";
         $classes_desc[] = $desc_color;
         $classes_desc[] = $desc_margin_bottom != '00' ? $desc_margin_bottom : '';
         $classes_desc_text = implode(' ', $classes_desc);

         ob_start();
         ?>
         <div class="widget gsc-heading <?php print implode(' ', $class) ?>"<?php print $style; ?> <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>>
         
            <div class="heading-content clearfix">
               <?php if($sub_title){ ?><div class="sub-title <?php print $classes_subtitle_text ?>"><span><?php print $sub_title; ?></span></div><?php } ?>
               <?php if($title){ ?><<?php echo $html_tags ?> class="title <?php print $classes_title_text; ?>">
                  <span><?php print $title; ?></span>
               </<?php echo $html_tags ?>><?php } ?>
               <?php if($desc){ ?>
                  <div class="title-desc <?php print $classes_desc_text ?>"><?php print $desc; ?></div>
               <?php } ?>
            </div>
            
            <?php if($button_link){ ?>
               <div class="heading-action clearfix">
                  <a href="<?php echo $button_link ?>" class="<?php print $button_style; ?>"><?php echo $button_text ?></a>
               </div>
            <?php } ?>

         </div>
         <div class="clearfix"></div>
         <?php return ob_get_clean() ?>
         <?php
      }

   }
endif;

