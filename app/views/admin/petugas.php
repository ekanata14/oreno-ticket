    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php require_once("partials/sidebar.php");?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php require_once("partials/topbar.php");?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard | Operator</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card  -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['totalUsers']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Operator Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Operators</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['totalOperator']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-ticket-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pending Orders
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0</div>
                                                </div>
                                                <!-- <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Chats Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Chats</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        <!-- Main Content -->
        <div class="card border-0 p-2 col-6 mb-3">
            <h1 class="mb-3">Operator</h1>
            <button class="btn btn-primary w-25 mb-3" data-toggle="modal" data-target="#addModal">Add Operator <i class="fas fa-plus ml-1"></i></button>
            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama Petugas</th>
                    <th>Level</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $i = 1?>
                    <?php foreach($data['operator'] as $operator):?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $operator['username']?></td>
                            <td><?= $operator['nama_petugas']?></td>
                            <td><?php switch ($operator['id_level']) {
                                case 1:
                                    echo "Admin";
                                    break;
                                case 2:
                                    echo "Operator";
                                    break;
                            }?></td>
                            <td><button class="btn btn-warning" id="editButton" data-toggle="modal" data-target="#editModal" data-id="<?= $operator['id']?>" data-username="<?= $operator['username'] ?>" data-name="<?= $operator['nama_petugas']?>" data-level="<?= $operator['id_level'] ?>"><i class="fas fa-user-edit"></i></button>
                            <form action="<?=BASE_URL?>/admin/deleteOperator" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?= $operator['id']?>">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button> 
                            </form>
                            </td>
                        </tr>
                        <?php $i++?>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>

        <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Add Modal-->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Add</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL ?>/admin/editOperator" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label> 
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label> 
                            <input type="text" name="operatorName" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label> 
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select name="level" id="level" class="form-control">
                                <option value="1">Admin</option>
                                <option value="2">Operator</option>
                            </select> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL ?>/admin/editOperator">
                            <input type="hidden" name="id" id="operatorId">
                        <div class="form-group">
                            <label for="username">Username</label> 
                            <input type="text" name="username" id="operatorUsername" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label> 
                            <input type="text" name="name" id="operatorName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select name="level" id="operatorLevel" class="form-control">
                                <option value="1">Admin</option>
                                <option value="2">Operator</option>
                            </select> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Edit</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Ready To Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= BASE_URL ?>/admin/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

