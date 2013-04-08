<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
    

<div id="wrapper" class="clearfix">
<div class="bg-separator-3 clearfix">
    
    <div class="container">
    	<div id="footer">
       
        
        <div class="grid col-220 ">
        <h3><?php esc_attr_e('Links de interés', 'responsive'); ?></h3>
		<?php if (has_nav_menu('footer-menu-1', 'responsive')) { ?>
	        <?php wp_nav_menu(array(
				    'container'       => '',
					'fallback_cb'	  =>  false,
					'menu_class'      => 'footer-menu',
					'theme_location'  => 'footer-menu-1')
					); 
				?>
         <?php } ?>
         
         
         
         </div>
         <div class="grid col-220 ">
         <h3><?php esc_attr_e('Destinos', 'responsive'); ?></h3>
         <?php if (has_nav_menu('footer-menu-2', 'responsive')) { ?>
	        <?php wp_nav_menu(array(
				    'container'       => '',
					'fallback_cb'	  =>  false,
					'menu_class'      => 'footer-menu',
					'theme_location'  => 'footer-menu-2')
					); 
				?>
         <?php } ?>
         </div>
      
         
         <div class="grid col-460 fit">
         <?php $options = get_option('responsive_theme_options');
					
            
         ?>
         <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer') ) : else : ?>
         

     <?php endif; ?>
     		<div id="contact">
         	<h3>Contáctanos!</h3>
            <p class="data"><?php esc_attr_e('Avda. Luis Flores, 3  08010, Barcelona', 'responsive'); ?><br/>
            <?php esc_attr_e('tel. 606 786 545','responsive'); ?>
            <a href="mailto:dede@hotmail.es">frestravel@hotmail.es</a>
            
            </p>
       		</div><!-- end of #contact-->
         </div><!-- end of col-460 fit -->
           
           
         
         <?php get_sidebar('colophon'); ?>
                
        <div class="grid col-300 copyright">
            
			<?php esc_attr_e('&copy;', 'responsive'); ?> <?php _e(date('Y')); ?><a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                <?php bloginfo('name'); ?>
            </a>
            
        </div><!-- end of .copyright -->
        
        <div class="grid col-300 scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a></div>
        
        <div class="grid col-300 fit powered">
            <!--<a href="<?php //echo esc_url(__('http://themeid.com/responsive-theme/','responsive')); ?>" title="<?php //esc_attr_e('Responsive Theme', 'responsive'); ?>">
                    <?php //printf('Responsive Theme'); ?></a>
            <?php //esc_attr_e('powered by', 'responsive'); ?> <a href="<?php //echo esc_url(__('http://wordpress.org/','responsive')); ?>" title="<?php //esc_attr_e('WordPress', 'responsive'); ?>">
                    <?php //printf('WordPress'); ?></a>-->
        </div><!-- end .powered -->
        
    </div><!-- end #footer -->
    </div><!-- end .container -->
    </div><!-- end .bg-separator-3 -->
</div><!-- end #wrapper -->

<?php wp_footer(); ?>
</body>
</html>