<?php

session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['rol'] != 'Docente') {
	header('Location: /');
	exit();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/views/docente/css/header.css" />
	<link rel="stylesheet" href="/views/docente/css/notas.css" />
	<link rel="shortcut icon" href="/views/docente/assets/img/logo_transparent.png" type="image/x-icon" />
	<script defer src="/views/docente/js/header.js"></script>
	<script defer src="/views/docente/js/notas.js"></script>
	<script defer>
		document.addEventListener('DOMContentLoaded', () => {
			closed_menu();
		});
	</script>
	<script src="https://kit.fontawesome.com/8b1c082df7.js" crossorigin="anonymous"></script>
	<title>I.E.P Los Clavelitos de SJT - Piura</title>
</head>

<body>
	<?php require_once __DIR__ . '/../components/header.php' ?>
	<main>
		<?php show_nav('Notas') ?>
		<div class="container__section">
			<h2>Mis notas:</h2>
			<div class="container__notas"></div>
		</div>
	</main>
</body>

</html>