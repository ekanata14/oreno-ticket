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
                        <h1 class="h3 mb-0 text-gray-800"><?= $addition['title']?></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                    <?php require_once("partials/dashCard.php");?>
        <!-- Main Content -->
        <div class="card border-0 p-2 col-12 mb-3">
            <h1 class="mb-3">Tickets</h1>
           <table class="table">
                <thead>
                    <th>No</th>
                    <th>Order Code</th>
                    <th>Order Date</th>
                    <th>Order Place</th>
                    <th>User ID</th>
                    <th>Chair Code</th>
                    <th>Route ID</th>
                    <th>Destination</th>
                    <th>Departure Date</th>
                    <th>Check In Time</th>
                    <th>Departure Time</th>
                    <th>Payment Total</th>
                    <th>Operator ID</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>                               
                <tbody>
                    <?php $i = 1?>
                    <?php foreach($data['orders'] as $ticket):?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $ticket['kode_pemesanan']?></td>
                            <td><?= $ticket['tanggal_pemesanan']?></td>
                            <td><?= $ticket['tempat_pemesanan']?></td>
                            <td><?= $ticket['id_pelanggan']?></td>
                            <td><?= $ticket['kode_kursi']?></td>
                            <td><?= $ticket['id_rute']?></td>
                            <td><?= $ticket['tujuan']?></td>
                            <td><?= $ticket['tanggal_berangkat']?></td>
                            <td><?= $ticket['jam_cekin']?></td>
                            <td><?= $ticket['jam_berangkat']?></td>
                            <td><?= $ticket['total_bayar']?></td>
                            <td><?= $ticket['id_petugas']?></td>
                            <td>  
                               <?php
                                switch($ticket['status']){
                                   case 0:
                                       echo "<span class='text-danger'>Pending</span>";
                                       break;
                                   case 1:
                                       echo "<span class='text-success'>Accepted</span>";
                                       break;
                                } 
                               ?> 
                            </td>
                            <td>
                                <?php if($ticket['status'] == '0'){?> 
                                <form action="<?= BASE_URL ?>/admin/accept" method="POST">
                                    <input type="hidden" name="id" value="<?= $ticket['id'] ?>">
                                    <button type="submit" class="btn btn-info" onclick="return confirm('Accept Ticket');"><i class="fas">Accept</i></button> 
                                </form>
                                <?php } else{ ?>
                                <form action="<?= BASE_URL ?>/admin/unAccept" method="POST">
                                    <input type="hidden" name="id" value="<?= $ticket['id'] ?>">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Unaccept Ticket?');"><i class="fas">Unaccept</i></button> 
                                </form>
                                <?php }?>
                            </td>
                        </tr>
                        <?php $i++?>
                    <?php endforeach?>
                </tbody>
                <tfoot>
                     <th>No</th>
                    <th>Order Code</th>
                    <th>Order Date</th>
                    <th>Order Place</th>
                    <th>User ID</th>
                    <th>Chair Code</th>
                    <th>Route ID</th>
                    <th>Destination</th>
                    <th>Departure Date</th>
                    <th>Check In Time</th>
                    <th>Departure Time</th>
                    <th>Payment Total</th>
                    <th>Operator ID</th>
                    <th>Status</th>
                    <th>Action</th>
                </tfoot>
            </table>
        </div>

        <?php require_once("partials/footer.php");?>
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
    <?php require_once("partials/modals.php");?>    



