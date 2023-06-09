<?php

/**
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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>
	<?php echo $this->Html->charset(); ?>
	<?php echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, minimum-scale=1, maximum-scale=1')); ?>

	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
	echo $this->Html->meta('icon');

	echo $this->Html->css(array('style.css', 'bootstrap.min', 'bootstrap-theme.min', 'fileinput.min', 'jquery-ui.min'));
	echo $this->Html->script(array('jquery.min', 'jquery.animate-colors', 'bootstrap.min', 'fileinput.min', 'jquery-ui.min', 'search'));

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
	<script type="text/javascript">
		$("#foto").fileinput();
		var basePath = "<?php echo Router::url('/'); ?>"
	</script>
</head>

<body>

	<?php if (isset($current_user)) : ?>
		<?php echo $this->element('menu'); ?>
	<?php endif; ?>
	<div class="container" role="main">

		<?php echo $this->Session->flash(); ?>
		<?php echo $this->Session->flash('auth'); ?>

		<?php echo $this->fetch('content'); ?>

		<br>
		<div id="msg"></div>
		<br>
	</div>
</body>

</html>