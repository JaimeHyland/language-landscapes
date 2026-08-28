<h3><?php echo __("ClmServiceList") ?></h3>

<div class="map-container align-center">
	<?php
	echo $this->Html->image( __('ourServicesImage'), array( 'alt' => 'Language Landscapes', 'usemap' => 'ourservicesmap'));
	?>

<map id="ourservicesmap" name="ourservicesmap">
	<area shape="rect" alt="" title="" coords="6,4,198,46" href="<?php echo $this->Html->url(array('controller'=>'page','action'=>'i18n_support')); ?>" target="" />
	<area shape="rect" alt="" title="" coords="77,71,224,115" href="<?php echo $this->Html->url(array('controller'=>'page','action'=>'web_l10n')); ?>" target="" />
	<area shape="rect" alt="" title="" coords="3,139,159,185" href="<?php echo $this->Html->url(array('controller'=>'page','action'=>'software_l10n')); ?>" target="" />
	<area shape="rect" alt="" title="" coords="113,209,229,251" href="<?php echo $this->Html->url(array('controller'=>'page','action'=>'translation')); ?>" target="" />
	<area shape="rect" alt="" title="" coords="6,276,182,320" href="<?php echo $this->Html->url(array('controller'=>'page','action'=>'terminology_managment')); ?>" target="" />
	<area shape="rect" alt="" title="" coords="68,344,246,389" href="<?php echo $this->Html->url(array('controller'=>'page','action'=>'edit_and_adapt')); ?>" target="" />
	<area shape="rect" alt="" title="" coords="4,411,205,457" href="<?php echo $this->Html->url(array('controller'=>'page','action'=>'review')); ?>" target="" /></map>
</div>