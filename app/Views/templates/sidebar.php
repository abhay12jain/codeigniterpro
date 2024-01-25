  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="dropdown">

   	<a href="javascript:void(0)" class="brand-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">

        <span class="brand-image img-circle elevation-3 d-flex justify-content-center align-items-center bg-primary text-white font-weight-500" style="width: 38px;height:50px"></span>

        <span class="brand-text font-weight-light">
          <div class="nav-profile-text">

              <?php $Firstname = session()->get('first_name');
                    $Lastname = session()->get('last_name');

                    if($Firstname || $Lastname){
                ?>

              <p class="mb-1 text-black"><?php echo $Firstname .' '.$Lastname; ?></p>
          <?php } else{?>
              <p class="mb-1 text-black"><?php echo 'Welcome, User'; ?></p>
          <?php }?>

          </div>
        </span>




      </a>

      <div class="dropdown-menu" style="">

        <a class="dropdown-item manage_account" href="javascript:void(0)" data-id="<?php //echo $_SESSION['login_id'] ?>">Manage Account</a>

        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="ajax.php?action=logout">Logout</a>

      </div>

    </div>

    <div class="sidebar">

      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item dropdown">

            <a href="/AdminUserlist/index" class="nav-link nav-home">

              <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>

                Dashboard

              </p>

            </a>

            

          </li>    

        

       

         <li class="nav-item">

            <a href="<?php echo base_url();?>/AdminUserlist/index" class="nav-link nav-edit_user">

              <i class="nav-icon fas fa-users"></i>

              <p>

                Users

                <i class="right fas fa-angle-left"></i>

              </p>

            </a>

            <ul class="nav nav-treeview" style="display: none;">

              

              <li class="nav-item">

                <a href="<?php echo base_url();?>/admin_user/view_user" class="nav-link nav-user_list tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                 <p>All Users</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="<?php echo base_url();?>/admin_user/add_user" class="nav-link nav-user_list tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                 <p>Add Users</p>

                </a>

              </li>
              <!--<li class="nav-item">

                <a href="" class="nav-link nav-user_list tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                 <p></p>

                </a>

              </li>
              <li class="nav-item">

                <a href="" class="nav-link nav-user_list tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                 <p></p>

                </a>

              </li> -->

            </ul>

          </li>





        <li class="nav-item">

            <a href="<?php echo base_url();?>/admin_user/document_shows" class="nav-link nav-edit_user">

              <i class="nav-icon fas fa-users"></i>

              <p>

                Upload Document

                <i class="right fas fa-angle-left"></i>

              </p>

            </a>

            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="<?php echo base_url();?>/admin_user/document_shows" class="nav-link nav-user_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                 <p>All Document</p>
                </a>
              </li>

              

              <li class="nav-item">
                <a href="<?php echo base_url();?>/admin_user/document_shows/technical_document" class="nav-link nav-user_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                 <p>Upload Document</p>
                </a>
              </li>


              <!-- <li class="nav-item">
                <a href="<?//php echo base_url();?>/admin_user/document_test" class="nav-link nav-user_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                 <p>Test Document</p>
                </a>
              </li> -->

              
              

              
            </ul>

          





          

      </nav>

    </div>

  </aside>

  