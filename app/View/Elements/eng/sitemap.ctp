<ul>
	<li><?php echo $this->Html->link(__('Home'), array('controller'=>'page', 'action'=>'home')); ?></li>
	<li><?php echo $this->Html->link(__('Translation'), array('controller'=>'page', 'action'=>'translation')); ?><ul>
		<li><?php echo $this->Html->link(__('Quality'), array('controller'=>'page', 'action'=>'quality')); ?></li>
		<li><?php echo $this->Html->link(__('Workflows and tools'), array('controller'=>'page', 'action'=>'workflows_and_tools')); ?></li>
	</ul></li>
	<li>Localisation<ul>
		<li><?php echo $this->Html->link(__('Software Localisation'), array('controller'=>'page', 'action'=>'software_localisation')); ?></li>
		<li><?php echo $this->Html->link(__('Web Localisation'), array('controller'=>'page', 'action'=>'web_localisation')); ?></li>
	</ul></li>
	<li><?php echo $this->Html->link(__('Work with us'), array('controller'=>'page', 'action'=>'work_with_us')); ?></li>
	<li><?php echo $this->Html->link(__('Who we are'), array('controller'=>'page', 'action'=>'who_we_are')); ?></li>
	<li><?php echo $this->Html->link(__('AGB'), array('controller'=>'page', 'action'=>'agb')); ?></li>
	<li><?php echo $this->Html->link(__('Sitemap'), array('controller'=>'page', 'action'=>'sitemap')); ?></li>
	<li><?php echo $this->Html->link(__('Impressum'), array('controller'=>'page', 'action'=>'impressum')); ?></li>
</ul>