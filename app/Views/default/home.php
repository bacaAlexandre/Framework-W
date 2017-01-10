<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<h2>Let's code.</h2>
	<p>Vous avez atteint la page d'accueil. Bravo.</p>
	<p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p>
	<ul>
		<p>User</p>
		<li><a href="user_signIn/">Inscription</a></li>
		<li><a href="user_login/">Connexion</a></li>
		<li><a href="user_update/">Mise à jour compte</a></li>
	</ul>
	<ul>
		<p>Article</p>
		<li><a href="article_show/">Voir</a></li>
		<li><a href="article_update/">Mise à jour article</a></li>
		<li><a href="article_written/">Ajouter article</a></li>
	</ul>
<?php $this->stop('main_content') ?>
