
<?php $this->layout('layout', ['title' => 'User']) ?>

<?php $this->start('main_content') ?>
<h1>Mon compte</h1>
<form class="" action="" method="post">
	<p>
		<label for="">Nom :
			<input type="text" name="" value="">
		</label>
	</p>
	<p>
		<label for="">Prenom :
			<input type="text" name="" value="">
		</label>
	</p>
	<p>
		<label for="">Email :
			<input type="text" name="" value="">
		</label>
	</p>
	<input type="submit" name="" value="Valider">
</form>

<?php $this->stop('main_content') ?>
