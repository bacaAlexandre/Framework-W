<?php $this->layout('layout', ['title' => 'User']) ?>

<?php $this->start('main_content') ?>

<form class="" action="" method="POST">
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

<?php $this->stop('main_content') ?>
