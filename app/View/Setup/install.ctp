<?php
/**
 * Install very first step.
 *
 * @copyright	copyright 2015 passbolt.com
 * @license		http://www.passbolt.com/license
 * @package		app.View.Setup.Install
 * @since		version 2.12.9
 */
$this->assign('title',	__('Install'));
$this->Html->css('setup', null, array('block' => 'css'));
$this->Html->script('lib/jquery/jquery-1.8.3.js', array('inline' => false, 'block'=>'scriptHeader'));
$this->Html->script('pages/install.js', array('inline' => false, 'block'=>'scriptBottom'));
?>

<input type="hidden" id="js_setup_user_username" value="<?php echo $user['User']['username'] ?>"/>
<input type="hidden" id="js_setup_user_first_name" value="<?php echo $user['Profile']['first_name'] ?>"/>
<input type="hidden" id="js_setup_user_last_name" value="<?php echo $user['Profile']['last_name'] ?>"/>

<!-- first header -->
<div class="header first">
	<nav>
		<div class="primary navigation top">
			<!-- no top links at setup -->
		</div>
	</nav>
</div>

<!-- second header -->
<div class="header second">
	<div class="col1">
		<div class="logo">
			<img src="img/logo/logo.png" alt="passbolt">
			<h1><span>Passbolt</span></h1>
		</div>
	</div>
	<div class="col2_3">
		<h2><?php echo __('Welcome to passbolt! Let\'s take 5 min to setup your system.') ?></h2>
	</div>
</div>

<div class="panel main ">
	<!-- wizard steps -->
	<div class="panel left">
		<div class="navigation wizard">
			<ul>
				<li class="selected">
					<a href="#"><?php echo __('1. Get the plugin') ?></a>
				</li>
				<li class="disabled">
					<?php echo __('2. Define your keys') ?>
				</li>
				<li class="disabled">
					<?php echo __('3. Set a master password') ?>
				</li>
				<li class="disabled">
					<?php echo __('4. Set a security token') ?>
				</li>
				<li class="disabled">
					<?php echo __('5. Login!') ?>
				</li>
			</ul>
		</div>
	</div>
	<!-- main -->
	<div class="panel middle">
		<div class="grid grid-responsive-12">
			<div class="row">
				<div class="col7">
					<div class="plugin-check-wrapper">
						<h3><?php echo __('Plugin check') ?></h3>
						<div class="plugin-check firefox error">
							<p class="message"><?php echo __("An add-on is required to use Passbolt. Download it at <a href=\"https://github.com/passbolt/passbolt_ff/blob/develop/passbolt-firefox-addon.xpi?raw=true\">addons.mozilla.org</a>."); ?></p>
						</div>
					</div>
					<div class="why-plugin-wrapper">
						<h3><?php echo ("Why do I need a plugin"); ?></h3>
						<p>
							<?php echo __('Passbolt requires a browser add-on to guarantee that your secret key and your master password are never
							accessible to any website (including passbolt.com itself). This is also the only way to guarantee that
							the core cryptographic libraries cannot be tampered with.'); ?>
							<a href="#"><?php echo __('Learn more'); ?></a>
						</p>
					</div>
					<div class="submit-input-wrapper">
						<a id="js_setup_plugin_check" href="#" class="button primary big">retry</a>
					</div>
				</div>
				<div class="col5 last">
					<div class="video-wrapper">
						<iframe width="400" height="300" src="https://www.youtube.com/embed/u-vDLf7cmf0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>