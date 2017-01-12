<?php $this->layout('layout', ['title' => 'User']) ?>

<?php $this->start('main_content') ?>
<h1>Mon compte</h1>

<?php if (!empty($_SESSION)){
	var_dump($this -> url('default_home'));
	// header('Location :'. $this -> url('default_home').'');?>
	<p><a href="<?= $this -> url('default_home') ?>">Retour</a></p>
<?php } else { ?>
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
<?php } ?>

<?php $this->stop('main_content') ?>
