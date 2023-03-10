<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-smile"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">Oreno Ticket</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= ($addition['title'] == "Dashboard") ? 'active' : ''?>">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-chart-bar"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menus
            </div>

            <!-- Nav Item - User Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
                    aria-expanded="true" aria-controls="collapseUsers">
                    <i class="fas fa-fw fa-users"></i>
                    <span>User Management</span>
                </a>
                <div id="collapseUsers" class="collapse <?= ($addition['show'] == 'menu_1') ? 'show' : ''?> " aria-labelledby="headingUsers" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item <?= ($addition['title'] == 'Dashboard | Operators') ? 'active' : ''?>" href="<?= BASE_URL?>/admin/operator">Operator</a>
                        <a class="collapse-item <?= ($addition['title'] == 'Dashboard | Users') ? 'active' : ''?>" href="<?= BASE_URL?>/admin/users">Users</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - User Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTickets"
                    aria-expanded="true" aria-controls="collapseUsers">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Ticket</span>
                </a>
                <div id="collapseTickets" class="collapse <?= ($addition['show'] == 'menu_2') ? 'show' : ''?> " aria-labelledby="headingUsers" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item <?= ($addition['title'] == 'Dashboard | Tickets') ? 'active' : ''?>" href="<?= BASE_URL?>/admin/ticket">Ticket Order</a> 
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePayments"
                    aria-expanded="true" aria-controls="collapsePayments">
                    <i class="fas fa-fw fa-money-bill-wave"></i>
                    <span>Payments Method</span>
                </a>
                <div id="collapsePayments" class="collapse" aria-labelledby="headingPayments"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item" href="#">Cash</a>
                        <a class="collapse-item" href="#">Credit Card</a>
                        <a class="collapse-item" href="#">E-Wallet</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- End of Sidebar -->

