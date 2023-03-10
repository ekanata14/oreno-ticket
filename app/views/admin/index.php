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

        <div class="card border-0 p-2">
            <h1>Today's Orders</h1>
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
                    <?php foreach($data['todayOrders'] as $ticket):?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $ticket['id']?></td>
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
                                       echo "<span class='text-warning'>Process</span>";
                                       break;
                                   case 2:
                                       echo "<span class='text-success'>Done</span>";
                                       break;
                                } 
                               ?> 
                            </td>
                            <td>
                                <form action="<?= BASE_URL ?>/admin/ticketDetail" method="POST">
                                    <input type="hidden" name="id" value="<?= $ticket['id'] ?>">
                                    <button type="submit" class="btn btn-info"><i class="fas fa-eye"></i></button> 
                                </form>
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
        </div>
        <!-- End of Content Wrapper -->

        <?php require_once("partials/footer.php");?>
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php require_once("partials/modals.php");?>    

