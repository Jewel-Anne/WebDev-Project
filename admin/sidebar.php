
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
 

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/logo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Panel</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="index.php" class="nav-link <?php if($a==1){ echo 'active'; }?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="settings.php" class="nav-link <?php if($a==2){ echo 'active'; }?>">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
		   <li class="nav-item has-treeview menu-open">
            <h5 class="pt-2 pb-2" style="color:white;">Services</h5>
			</li>
		  <li class="nav-item has-treeview menu-open">
          </li> 
          <li class="nav-item has-treeview menu-open">
            <a href="services.php" class="nav-link <?php if($a==4){ echo 'active'; }?>">
               <i class="fa fa-eye nav-icon"></i>
              <p>
                View Services
              </p>
            </a>
          </li> 
		  <li class="nav-item has-treeview menu-open">
            <h5 class="pt-2 pb-2" style="color:white;">OTHER OPTIONS</h5>
			</li>
        
           <li class="nav-item has-treeview menu-open">
            <a href="testimonials.php" class="nav-link <?php if($a==5){ echo 'active'; }?>">
               <i class="fa fa-eye nav-icon"></i>
              <p>
                View Testimonials
              </p>
            </a>
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>