

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="." class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
	<?php //$this->load->view('navbar_search'); ?>

    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">
       <li class="nav-item dropdown">
         <!-- Sidebar user panel (optional) -->
         <a class="nav-link" data-toggle="dropdown" href="#">
           <div class="user-panel mt-1 pt-0 pb-2 mb-1 d-flex">
            <div class="image">
              <img src="../../assets/dist/images/user2-160x160.jpg" class="img-circle elevation-1" alt="User Image">
            </div>
            <div class="info">
              <?php echo $user->first_name; ?>
            </div>
           </div> 
         </a>

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <div class="card card-widget widget-user  mb-0">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info " >
                <h3 class="widget-user-username"> <?php echo $user->first_name; ?></h3>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../../assets/dist/images/user2-160x160.jpg" alt="User Image">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-6 border-right">
                    <div class="description-block">
                      <span class="description-text"> <a href="panel/account" class="btn btn-default btn-flat">Account</a></span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6 border-right">
                    <div class="description-block">
                      <span class="description-text"><a href="panel/logout" class="btn btn-default btn-flat">Sign out</a></span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
            </div>
          </div>


       </li>

    </ul>
  </nav>