<style>
	.coin {
		background: #0648a0;
		color: #FFF;
		border-radius: 50%;
		padding: 50px;
		text-align: center;
		font-size: 2rem;
		font-weight: bold;
		width: 50px;
	}
</style>

<?php

function flip() {
	return ( 0 == rand(0,1) ) ? 'A' : 'B';
}

?>

<div class="coin">
	<?php echo flip(); ?>
</div>