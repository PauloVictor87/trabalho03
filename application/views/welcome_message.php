<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Quartetop</title>




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?= base_url("includes/bootstrap/css/bootstrap.min.css");?>">

<!-- Latest compiled and minified JavaScript -->

</head>
<body>

	<!-- Navigation -->
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	      <div class="container">
	        <a class="navbar-brand" href="#">Quartetop</a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarResponsive">
	          <ul class="navbar-nav ml-auto">
	            <li class="nav-item active">
	              <a class="nav-link" href="#">Início
	                <span class="sr-only">(current)</span>
	              </a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Sobre Nós</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Services</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Contact</a>
	            </li>
	          </ul>
	        </div>
	      </div>
	    </nav>
			<br><br>
	    <!-- Page Content -->
	    <div class="container">

	      <!-- Introduction Row -->
	      <h1 class="my-4">Quem Somos
					<br>
	        <small>Equipe de programadores em Tecnologias Web</small>
	      </h1>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>

	      <!-- Team Members Row -->
	      <div class="row">
	        <div class="col-lg-12">
	          <h2 class="my-4">Nossa Equipe</h2>
	        </div>
	        <div class="col-lg-3 col-sm-6 text-center mb-4">
						<a href="<?php echo base_url();?>index.php/mateus/sobre/">

							<img class="rounded-circle img-fluid d-block mx-auto" src="<?= base_url("images/mateus.jpeg");?>" alt="">
						</a>
						<h3>Mateus Arruda
	            <small>Programador</small>
	          </h3>
	          <p>Programador Python e Java atualmente passando fome por conta do desemprego.</p>
	        </div>
	        <div class="col-lg-3 col-sm-6 text-center mb-4">
	          <img class="rounded-circle img-fluid d-block mx-auto" src="<?= base_url("images/leila.jpeg");?>" alt="">
	          <h3>Leila Maria
	            <small>Job Title</small>
	          </h3>
	          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
	        </div>
	        <div class="col-lg-3 col-sm-6 text-center mb-4">
	          <img class="rounded-circle img-fluid d-block mx-auto" src="<?= base_url("images/paulo.jpeg");?>" alt="">
	          <h3>Paulo Victor
	            <small>Desempregado</small>
	          </h3>
	          <p>E só.</p>
	        </div>
	        <div class="col-lg-3 col-sm-6 text-center mb-4">
	          <img class="rounded-circle img-fluid d-block mx-auto"  src="http://placehold.it/200x200" alt="">
	          <h3>Lucas Mota
	            <small>Job Title</small>
	          </h3>
	          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
	        </div>


	      </div>

	    </div>
	    <!-- /.container -->

<script src="<?=base_url("includes/bootstrap/js/jquery-3.1.1.js")?>"></script>
<script src="<?=base_url("includes/bootstrap/js/popper.js")?>"></script>
<script src="<?=base_url("includes/bootstrap/js/bootstrap.min.js")?>"></script>
</body>
</html>
