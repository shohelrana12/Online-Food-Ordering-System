<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
       <span class="brand-text font-weight-light">Welcome Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="{{url('admin/dashboard')}}" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                   
                </li>
                
                
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-tree"></i>
                        <p>
                           Manage Resturent
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('admin/resturent')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Resturents</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/item')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Items</p>
                            </a>
                        </li>
                       
                    </ul>
                </li>


                 <li class="nav-item ">
                    <a href="{{url('admin/order')}}" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                           Order
                        </p>
                    </a>
                   
                </li>



                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-user"></i>
                        <p>
                           Manage User
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('admin/user')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Register User</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('admin/contact')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Contact User</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
