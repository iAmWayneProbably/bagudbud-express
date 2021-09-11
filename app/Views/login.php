<!-- 
	Extends the base.php that has the header and footer 
-->
<?= $this->extend('layouts/base_no_nav.php') ?> 

<!-- 
	Inserts the whole section to the base.php
 -->
<?= $this->section('content'); ?>
<br>
<br>
	<h1 class="text-muted">Login php</h1>
<?= $this->endSection(); ?>