<?php 
session_start();

if($_SESSION['name'] == NULL) {
	header("Location: login.php");
}

require 'inc/head.php';

?>


<section class="cookies container-fluid">
	<div class="row">
		<?php
		$liste = explode(' ', $_COOKIE['panier']);

		unset($liste[0]);


		$panier = (array_count_values($liste));

		foreach ($panier as $key => $value) {

			echo "<img src=\"" . "assets/img/product-" .$key. ".jpg\"" . " alt='cookies choclate chips' style=\"width:10%;\" class='img-responsive'> × $value";

		}


		?>

	</div>
</section>
<?php require 'inc/foot.php'; ?>
