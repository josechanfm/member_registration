<div class="wrapper">

	<?php $this->load->view('_partials/navbar_top'); ?>
    
    <?php //$this->load->view('_partials/sidemenu_right'); ?>

	<?php // Right side column. Contains the navbar and content of the page ?>
	<div class="content-wrapper">
		<section class="content-header">
			<div class="container-fluid">
       		 <div class="row mb-2">
          		<div class="col-sm-6">
					<h1><?php echo $page_title; ?></h1>
				</div><!-- /.col -->
          		<div class="col-sm-6">
					<?php $this->load->view('_partials/breadcrumb'); ?>
				</div>
		</section>
		<section class="content">
			 <div class="container-fluid">
				<?php $this->load->view($inner_view); ?>
				<?php $this->load->view('_partials/back_btn'); ?>
			</div>
		</section>
	</div>

	<?php // Footer ?>
	<?php $this->load->view('_partials/footer'); ?>

</div>