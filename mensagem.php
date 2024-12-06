<?php
	session_start();

	if (isset($_SESSION['mensagem'])):
	?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<?= htmlspecialchars($_SESSION['mensagem'], ENT_QUOTES, 'UTF-8'); ?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	<?php
	
		unset($_SESSION['mensagem']);
	endif;
?>