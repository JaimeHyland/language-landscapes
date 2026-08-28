<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$pageDescription = 'Language Landscapes';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo $pageDescription ?>:
		<?php echo __($title); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->meta('keywords', 'enter keywords');
		echo $this->Html->meta('description', 'enter description');

		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('ekko-lightbox.min.css');
		echo $this->Html->css('fresh.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<header>
	        <div class="row">
		        <div class="col-md-4">
					<?php 
					echo $this->Html->link(
						$this->Html->image('language_landscapes_logo.png', array( 'alt' => 'Language Landscapes', 'width' => '100%')),
						array('controller'=>'page','action'=>'home'), array('escape' => false)
						);
					?>
		        </div>

		        <div class="col-md-8 padding-top-10">
		        	<div class="row">
		        		<div class="col-md-10">
		        			<div class="pull-right">
		        				<a href="https://www.linkedin.com/company/language-landscapes" class="sm_linkedin">in</a>
		        				<a href="https://www.facebook.com/languagelandscapes" class="sm_facebook">fb</a>
		        			</div>
		        		</div>

		        		<div class="col-md-2">
		        			<div class="pull-right lang_button_group">
		        				<?php echo $this->Html->link('', array('language'=>'deu'), array('class' => 'lang_change_btn_de')); ?>
		        				<?php echo $this->Html->link('', array('language'=>'eng'), array('class' => 'lang_change_btn_en')); ?>
		        			</div>
		        		</div>
		        	</div>
					
					<div class="align-table"><div class="align-cell"><?php echo $this->element('/main_nav'); ?></div></div>

		        </div>

	        </div>
      	</ader>
    </div>

    <!-- <div class="text-center olive-small shadow-ribbon">&nbsp;</div> -->
	<div class="container">
		<div class="row">
			<div class="col-md-3">
		  		<h3><?php echo __("ClmContact") ?></h3>
				<p><script>document.write('<a href="mailto:info','@','language-landscapes','.','com">');</script>info@<span class="notToday">&nbsp;</span>language-landscapes.com</a></p>
				<p />
				<address>
					<strong>Language Landscapes</strong><br/>
					Kuckhoffstr. 108D<br/>
					13156 Berlin<br/>
					<abbr title="<?php echo __("DesPhone") ?>"><?php echo __("LblPhone") ?></abbr><?php echo __("ValPhone") ?><br />
					<!--<abbr title="<?php echo __("DesFax") ?>"><?php echo __("LblFax") ?></abbr><?php echo __("ValFax") ?><br /> -->
					<abbr title="<?php echo __("DesMobile") ?>"><?php echo __("LblMobile") ?></abbr><?php echo __("ValMobile") ?><br />
			 	</address>

			<?php 
				if ($title == 'PgLinkHomePage') {
					echo '<a href="'.$this->webroot.'img/jaime_juliet_hd.jpg" data-toggle="lightbox">';
					echo $this->Html->image('jaime_juliet.jpg', array('alt'=>'jaime and juliet', 'class' => 'img-thumbnail'));
					echo '</a>';
				} else {
					echo $this->element('our_services');
				}
			?>
			<div id="jaime_juliet_lightbox" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
				<div class='lightbox-dialog'>
			        <div class='lightbox-content'>
						<?php echo $this->Html->image('jaime_juliet.jpg'); ?>
			        </div>
			    </div>
			</div>

			</div>
			<div class="col-md-9 content-text">
				<?php
					// if form was sent successful then modal
					if($this->Session->flash()) {
						echo $this->element('/modal_form_sent');
					}

				?>
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>

		<footer class="footer">
		    <ul class="list-unstyled inline">
		      <!--<li><?php echo $this->Html->link(__('PgLinkWhoWeAre'), array('controller'=>'page','action'=>'who_we_are')); ?></li>-->
		      <li><?php echo $this->Html->link(__('PgLinkGenTandC'), array('controller'=>'page','action'=>'agb')); ?></li>
		      <li><?php echo $this->Html->link(__('PgLinkSiteMap'), array('controller'=>'page','action'=>'sitemap')); ?></li>
		      <li><?php echo $this->Html->link(__('PgLinkLegalNotice'), array('controller'=>'page','action'=>'impressum')); ?></li>
		    </ul>
		    <div>
			    <small>
			    	<?php echo __('copyrights'); ?>
			    </small>
			</div>
		    <div class="pull-right margin-right-15">
		    	<?php echo $this->Html->image('SDL_i-work-with_Trados-2014_circle.png', array('class' => 'SDL-icon')); ?>
		    	<!-- <?php echo $this->Html->image('SDL_i-work-with_Trados-2014_portrait.png', array('class' => 'SDL-icon')); ?>
		    	<?php echo $this->Html->image('SDL_i-work-with_Trados-2014_rectangle.png', array('class' => 'SDL-icon')); ?>
		    	<?php echo $this->Html->image('SDL_i-work-with_Trados-2014_square.png', array('class' => 'SDL-icon')); ?> -->
		    </div>
		</footer>

	</div>
	
<!--	<div class="text-center olive shadow-ribbon"><?php echo __("ClmRequestQuote") ?></div> -->
<?php
	if ( $title == 'PgLinkWorkWithUs') {
    	echo $this->element('/work_with_us_form');
	} else {
    	echo $this->element('/free_quote_form');
	}
?>
	
	
	<?php echo $this->element($this->Session->read('Config.language').'/modals_glossary'); ?>

	<?php
		echo $this->Html->script('jquery-2.0.3.min.js');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->Html->script('ekko-lightbox.min.js');
		echo $this->Html->script('main.js');
	?>

	<?php echo $this->element($this->Session->read('Config.language').'/modals_details'); ?>

	<?php
		echo $this->Html->script('jquery-2.0.3.min.js');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->Html->script('ekko-lightbox.min.js');
		echo $this->Html->script('main.js');
	?>

</body>
</html>
