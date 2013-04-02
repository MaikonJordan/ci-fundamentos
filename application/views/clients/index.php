<?php foreach ($clients as $novo_cliente): ?> 


	<h2><?php echo $novo_cliente['nome'] ?></h2>
	<div id="main">
		<?php echo $novo_cliente['city'] ?>
	</div>

	<p><a href="<?php echo site_url('/clients/' . $novo_cliente['slug']) ?>">
	Visualizar</a></p>

<?php endforeach ?>