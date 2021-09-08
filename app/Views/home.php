<!-- 
	Extends the base.php that has the header and footer 
-->
<?= $this->extend('layouts/base.php') ?> 

<!-- 
	Inserts the whole section to the base.php
 -->
<?= $this->section('content'); ?>
	<h1>Home php</h1>
<?= $this->endSection(); ?>