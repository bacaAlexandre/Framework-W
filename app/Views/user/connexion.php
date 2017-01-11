<?php $this->layout('layout', ['title' => 'User']) ?>

<?php $this->start('main_content') ?>
<h1>Mon compte</h1>
<form class="" action="" method="get">
	<p>
		<label for="">Pseudo :
			<input type="text" name="username" value="">
		</label>
	</p>
	<p>
		<label for="">Email :
			<input type="text" name="email" value="">
		</label>
	</p>
	<p>
		<label for="">Password :
			<input type="text" name="password" value="">
		</label>
	</p>
	<input type="submit" name="" value="Valider">
</form>
<?= $text ?>

<?php $this->stop('main_content') ?>
