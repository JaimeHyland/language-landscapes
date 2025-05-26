<!-- HORIZONTAL MENU -->
          	<nav>
          		<ul class="nav nav-pills">
          			<!-- HOME -->
					<li<?php echo ($title == 'PgLinkHomePage' ? ' class="active"' : '' ); ?>><?php echo $this->Html->link("Home", array('controller'=>'page','action'=>'home'), array('escape' => false)); ?></li>

					<!-- WHO WE ARE -->
					<li<?php echo ($title == 'PgLinkWhoWeAre' ? ' class="active"' : '' ); ?>><?php echo $this->Html->link(__('PgLinkWhoWeAre'), array('controller'=>'page','action'=>'who_we_are')); ?></li>

					<!-- OUR SERVICES -->
					<li  class="dropdown <?php echo ($title == 'PgLinkI18n' || $title == 'PgLinkWebL10n' || $title == 'PgLinkSoftwareL10n' || $title == 'PgLinkTranslation' || $title == 'PgLinkTermMgt' || $title == 'PgLinkReview' || $title == 'PgLinkProofing' ? 'active' : '' ); ?>">
					<?php echo $this->Html->link(__('PgLinkOurServices'), '', array('class'=>"dropdown-toggle", 'data-toggle'=>'dropdown')); ?>
						<ul class="dropdown-menu">
							<!-- I18N SUPPORT -->
							<li><?php echo $this->Html->link(__('PgLinkI18n'), array('controller'=>'page','action'=>'i18n_support')); ?></li>

							<!-- WEB l10n -->
							<li><?php echo $this->Html->link(__('PgLinkWebL10n'), array('controller'=>'page','action'=>'web_l10n')); ?></li>

							<!-- SOFTWARE l10n -->
							<li><?php echo $this->Html->link(__('PgLinkSoftwareL10n'), array('controller'=>'page','action'=>'software_l10n')); ?></li>

							<!-- TRANSLATION -->
							<li><?php echo $this->Html->link(__('PgLinkTranslation'), array('controller'=>'page','action'=>'translation')); ?></li>

							<!-- TERMINOLOGY MANAGEMENT -->
							<li><?php echo $this->Html->link(__('PgLinkTermMgt'), array('controller'=>'page','action'=>'terminology_managment')); ?></li>

							<!-- TEXT EDITING AND ADAPTATION -->
							<li><?php echo $this->Html->link(__('PgLinkEditAndAdapt'), array('controller'=>'page','action'=>'edit_and_adapt')); ?></li>

							<!-- OPTIMIZNG OF EXISTING TRANSLATIONS -->
							<li><?php echo $this->Html->link(__('PgLinkOptimize'), array('controller'=>'page','action'=>'review')); ?></li>
						</ul>
					</li>

					<!-- QUALITY -->
					<li <?php echo ($title == 'PgLinkQuality' ? ' class="active"' : '' ); ?>><?php echo $this->Html->link(__('PgLinkQuality'), array('controller'=>'page','action'=>'quality')); ?></li>

					

					<!-- WORK WITH US -->
					<li<?php echo ($title == 'PgLinkWorkWithUs' ? ' class="active"' : '' ); ?>><?php echo $this->Html->link(__('PgLinkWorkWithUs'), array('controller'=>'page','action'=>'work_with_us')); ?></li>
	            </ul>
         	</nav>
         	<!-- END OF MENU -->