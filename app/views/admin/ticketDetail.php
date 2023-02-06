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
                    <?php

                    $i = 1;
                    $ticketData = $addition['ticketData'];
                    ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $ticketData['kode_pemesanan']?></td>
                            <td><?= $ticketData['tanggal_pemesanan']?></td>
                            <td><?= $ticketData['tempat_pemesanan']?></td>
                            <td><?= $ticketData['id_pelanggan']?></td>
                            <td><?= $ticketData['kode_kursi']?></td>
                            <td><?= $ticketData['id_rute']?></td>
                            <td><?= $ticketData['tujuan']?></td>
                            <td><?= $ticketData['tanggal_berangkat']?></td>
                            <td><?= $ticketData['jam_cekin']?></td>
                            <td><?= $ticketData['jam_berangkat']?></td>
                            <td><?= $ticketData['total_bayar']?></td>
                            <td><?= $ticketData['id_petugas']?></td>
                            <td>  
                               <?php
                                switch($ticketData['status']){
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
                </tbody>
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

    <?php require_once("partials/modals.php");?>    



