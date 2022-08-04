<?php 
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:news.php');
	die();
}
?>
<div class="container-fluid">
<ol class="breadcrumb">
  <li class="breadcrumb-item">
	 <a href="">Dashboard</a>
  </li>
</ol>
<!-- Page Content -->
<h1>Roge, Ilabas mo yung basura mamaya pag-uwi natin.</h1>
<hr>
<p>Palagi nating nakakalimutan yung maderpader</p>
</div>

<?php include('footer.php')?>