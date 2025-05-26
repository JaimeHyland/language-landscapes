<div id="sliding_form_1">		
		<div class="row">
			<div class="col-md-12">
					<?php echo $this->Form->create('Contact', array('type' => 'file', 'inputDefaults' => array(
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
								<?php echo $this->Form->input('company', array('type'=>'text', 'label' => __('TxtFldlblCompany'))); ?>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<?php echo $this->Form->input('jobTitle', array('type'=>'text', 'label' => __('TxtFldlblJobTitle'))); ?>
							</div>
							<div class="form-group">
								<?php echo $this->Form->input('email', array('type'=>'email', 'label' => __('TxtFldlblEmail'))); ?>
							</div>
							<div class="form-group">
								<?php echo $this->Form->input('phone', array('type'=>'tel', 'label' => __('TxtFldlblPhone'))); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<?php echo $this->Form->input('translateFrom', array('type'=>'select',
								'options' => array(__('Lblen'), 
								__('Lblde'), 
								__('Lbles'), 
								__('Lblit'), 
								__('Lblfr'), 
								__('Lblnl')), 'empty' => __('DropListDefault'), 'label' => __('LstboxlblSrcLang'))); ?>
							</div>
							<div class="form-group">
								<?php echo $this->Form->input('translateTo', array('type'=>'select',
								'options' => array(__('Lblen'), 
								__('Lblde'), 
								__('Lbles'), 
								__('Lblit'), 
								__('Lblfr'), 
								__('Lblnl')), 'empty' => __('DropListDefault'), 'label' => __('LstboxlblTgtLang'))); ?>
							</div>
						</div>
						<input id="LblUpload" value="<?php echo __('BtnUpload'); ?>" style="display:none"/>
						<input id="StrDropToUpload" value="<?php echo __('StrDropToUpload'); ?>" style="display:none"/>
						<div class="col-md-6">
							<div class="form-group">
								<label><?php echo __('FileSelFldDocForQuote') ?></label>
								<?php echo $this->Upload->edit('documentToQuote', $sid); ?>

								<p class="help-block"><small><?php echo __("InfoFileSellblDocForQuote") ?></small></p>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label><?php echo __('FormLabelMessage') ?></label>
						<?php echo $this->Form->input('additionalComments', array('type'=>'textarea', 'class' => 'form-control input-sm')); ?>
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
		<div class="vertical_button_left"><div class="rotate_button"><?php echo __("ClmRequestQuote") ?></div></div>
	</div>