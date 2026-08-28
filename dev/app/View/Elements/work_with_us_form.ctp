<div id="sliding_form_2">		
	<div class="vertical_button_right"><div class="rotate_button"><?php echo __("ClmWorkWithUs") ?></div></div>
		<div class="row">
			<div class="col-md-12">
					<?php echo $this->Form->create('WorkWithUs', array('type' => 'file', 'inputDefaults' => array(
					'label' => false,
					'div' => false,
					'class' => 'form-control input'
					))); ?>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<?php echo $this->Form->input('firstName', array('type'=>'text', 'label' => __('TxtFldlblFirstName'))); ?>
							</div>
							<div class="form-group">
								<?php echo $this->Form->input('lastName', array('type'=>'text', 'label' => __('TxtFldlblLastName'))); ?>
							</div>
							<div class="form-group">
								<?php echo $this->Form->input('email', array('type'=>'text', 'label' => __('TxtFldlblEmail'))); ?>
							</div>
						</div>

						<div class="col-md-6 checkboxes">
							<label><?php echo __('FormSubHeadServiceOffered'); ?></label>
							<br/>
							<div class="checkbox">
								<?php echo $this->Form->input('translation', array('class' => 'checkbox', 'type'=>'checkbox', 'label' => __('TxtFldlblTranslation'))); ?>
							</div>
							<div class="checkbox">
								<?php echo $this->Form->input('localization', array('class' => 'checkbox','type'=>'checkbox', 'label' => __('TxtFldlblLocalization'))); ?>
							</div>
							<div class="checkbox">
								<?php echo $this->Form->input('copywriting', array('class' => 'checkbox','type'=>'checkbox', 'label' => __('TxtFldlblCopywriting'))); ?>
							</div>
							<div class="checkbox">
								<?php echo $this->Form->input('optimization', array('class' => 'checkbox','type'=>'checkbox', 'label' => __('TxtFldlblOptimization'))); ?>
							</div>
							<div class="checkbox">
								<?php echo $this->Form->input('internationalization', array('class' => 'checkbox','type'=>'checkbox', 'label' => __('TxtFldlblInternationalization'))); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<input id="LblUpload" value="<?php echo __('BtnUpload'); ?>" style="display:none"/>
						<input id="StrDropToUpload" value="<?php echo __('StrDropToUpload'); ?>" style="display:none"/>
						
						<div class="col-md-6">
							<div class="form-group">
								<label><?php echo __('FileSelFldDocCV') ?></label>
								<?php echo $this->Upload->edit('documentCV', $sid); ?>

								<p class="help-block"><small><?php echo __("InfoFileSellblDocForQuote") ?></small></p>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label><?php echo __('FormLabelLangpairs') ?></label><br/>
								<small><?php echo __('FormDesLangPairs') ?></small>
								<?php echo $this->Form->input('langpairs', array('type'=>'textarea', 'class' => 'form-control input-sm')); ?>
							</div>
							
						</div>
					</div>

					<div class="row">

						<div class="col-md-12">
							<div class="form-group">
								<label><?php echo __('FormLabelMessage') ?></label><br/>
								<?php echo $this->Form->input('message', array('type'=>'textarea', 'class' => 'form-control input-sm')); ?>
							</div>
						</div>
					</div>
					<div class="form-group">

						<?php echo __('FormLabelSendCopyToClient') ?>
						<?php echo $this->Form->checkbox('sendCopyToClient') ?>

						<?php $sendLabel = __("BtnSend"); ?>
						<?php echo $this->Form->submit($sendLabel, array('type'=>'submit','class' => 'btn btn-success fright')); ?>
					</div>

				<?php echo $this->Form->end(); ?>
			</div>
		</div>
		
	</div>