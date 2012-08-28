<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<header>
			<nav class="navbar navbar-static-top">
				<div class="navbar-inner">

					<?php echo $this->Html->link('Scrum Zamurai', '/', array('class' => 'brand')); ?>
				</div><!-- /.navbar-inner -->
			</nav><!-- /.navbar -->
		</header>


		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div><!-- /#content -->

		<div id="footer" class="footer">
			<?php echo $this->Html->link('(c) Scrum Zamurai', '/'); ?>
		</div><!-- /#footer -->
	</div><!-- /.container -->
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
