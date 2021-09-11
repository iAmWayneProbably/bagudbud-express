<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $page_title ?></title>
	<link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/bootstrap.min.css">
</head>
<body>
	<?= $this->renderSection('content') ?>
	<script src="<?= base_url() ?>/public/assets/bootstrap/path/js/bootstrap.js"></script>
</body>
</html>