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

$cakeDescription = 'Language Landscapes';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo __($title); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->meta('keywords', 'enter keywords');
		echo $this->Html->meta('description', 'enter description');

		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('main.css');
		echo $this->Html->script('jquery-2.0.3.min.js');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->Html->script('main.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<header>
	        <div class="page-header">
<ul class="list-unstyled inline">
<li><?php echo $this->Html->link('English', array('language'=>'eng')); ?></li>
<li><?php echo $this->Html->link('Deutsch', array('language'=>'deu')); ?></li>
</ul>

	          <nav>
	            <ul class="nav nav-pills pull-right">
<!-- i18n: Home -->
	              <li<?php echo ($title == 'Home' ? ' class="active"' : '' ); ?>><?php echo $this->Html->link(__('Home'), array('controller'=>'page','action'=>'home')); ?></li>
<!-- i18n: Translation -->
	              <li  class="dropdown <?php echo ($title == 'Translation' || $title == 'Quality' || $title == 'Workflows and tools'? 'active' : '' ); ?>">
	              	<?php echo $this->Html->link(__('Translation'), '#', array('class'=>"dropdown-toggle", 'data-toggle'=>'dropdown')); ?>
	              	<ul class="dropdown-menu">
<!-- i18n: Translation, Quality, Workflows -->	              		
	              		<li><?php echo $this->Html->link(__('Translation'), array('controller'=>'page','action'=>'translation')); ?></li>
	              		<li><?php echo $this->Html->link(__('Quality'), array('controller'=>'page','action'=>'quality')); ?></li>
	              		<li><?php echo $this->Html->link(__('Workflows and tools'), array('controller'=>'page','action'=>'workflows_and_tools')); ?></li>
	              	</ul>
	              </li>
<!-- i18n: Localization -->
	              <li  class="dropdown <?php echo ($title == 'The challenge' || $title == 'The workflow' ? 'active' : '' ); ?>">
	              	<?php echo $this->Html->link(__('Localization'), '#', array('class'=>"dropdown-toggle", 'data-toggle'=>'dropdown')); ?>
	              	<ul class="dropdown-menu">
	              		<li><?php echo $this->Html->link(__('The challenge'), array('controller'=>'page','action'=>'the_challenge')); ?></li>
	              		<li><?php echo $this->Html->link(__('The workflow'), array('controller'=>'page','action'=>'the_workflow')); ?></li>
	              	</ul>
	              </li>
<!-- i18n: Work with us -->
	              <li<?php echo ($title == 'Work with us' ? ' class="active"' : '' ); ?>><?php echo $this->Html->link(__('Work with us'), array('controller'=>'page','action'=>'work_with_us')); ?></li>
	            
	            </ul>
	          </nav>
	          <h1>Language Landscapes <small><?php echo __($title); ?></small></h1>
	        </div>
      	</header>
    </div>

	<div class="container">
		<div class="col-md-3">
		  <h4 class="frame"><?php echo $this->Html->link(__('Who we are'), array('controller'=>'page','action'=>'who_we_are')); ?></h4>
		  <p><img class="img-thumbnail" src="http://lorempixum.com/200/200/business"/></p>
		  <h4><?php echo __("Contact") ?></h4>
		  <p><script>document.write('<a href="mailto:info','@','language-landscapes','.','com">');</script>info@<span class="notToday">&nbsp;</span>language-landscapes.com</a></p>
		  <p>
		    <address>
		      <p><strong>Language Landscapes</strong><br/>
		          Kuckhoffstr. 108D<br/>
		          13156 Berlin<br/></p>
		      <p><abbr title="Phone">P:</abbr>+49 123 123 123<br/>
		         <abbr title="Fax">F:</abbr>+49 321 321 321</p>
		    </address>
		  </p>

		  <h4>We help you out with:</h4>
		  <ul class="list-unstyled">
		    <li>HTML</li>
		    <li>XHTML</li>
		    <li>XML</li>
		    <li>JAVA</li>
		    <li>FLASH</li>
		    <li>CSS</li>
		    <li>ASP</li>
		    <li>PHP</li>
		    <li>MySQL</li>
		    <li>MSSQL</li>
		  </ul>
		</div>
		<div class="col-md-6">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div class="col-md-3">
		  <h4><?php echo __("Request a free quote") ?></h4>
			<?php echo $this->Form->create(false, array('type' => 'file', 'inputDefaults' => array(
				'label' => false,
				'div' => false,
				'class' => 'form-control input-sm'
			))); ?>
				<div class="form-group">
					<?php echo $this->Form->input('firstName', array('type'=>'text', 'label' => __('First name'))); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('lastName', array('type'=>'text', 'label' => __('Last name'))); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('company', array('type'=>'text', 'label' => __('Company'))); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('jobTitle', array('type'=>'text', 'label' => __('Job title'))); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('type'=>'email', 'label' => __('e-mail'))); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('type'=>'tel', 'label' => __('Phone'))); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('translateFrom', array('type'=>'select',
					'options' => array('English', 'German', 'Spanish'), 'empty' => '(select one)', 'label' => __('Translate from'))); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('translateTo', array('type'=>'select',
					'options' => array('English', 'German', 'Spanish'), 'empty' => '(select one)', 'label' => __('Translate to'))); ?>
				</div>
				<div class="form-group">
					<label>Document to quote</label>
					<?php echo $this->Upload->edit('documentToQuote', $sid); ?>
					<?php #echo $this->Form->file('documentToQuote', array('type'=>'select', 'label' => __('Document to quote'))); ?>

					<p class="help-block"><small><?php echo __("Optional. Upload as many files as you wish. Limited to 20mb per file.") ?></small></p>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('additionalComments', array('type'=>'textarea', 'class' => 'form-control input-sm')); ?>
				</div>
			<?php echo $this->Form->end(__("Send")); ?>
		</div>
	</div>

	<footer>
	  <div class="container text-center">
	    <ul class="list-unstyled inline">
	      <li><?php echo $this->Html->link(__('Who we are'), array('controller'=>'page','action'=>'who_we_are')); ?></li>
	      <li><?php echo $this->Html->link(__('AGB'), array('controller'=>'page','action'=>'agb')); ?></li>
	      <li><?php echo $this->Html->link(__('Sitemap'), array('controller'=>'page','action'=>'sitemap')); ?></li>
	      <li><?php echo $this->Html->link(__('Impressum'), array('controller'=>'page','action'=>'impressum')); ?></li>
	    </ul>
	  </div>
	</footer>
</body>
</html>
