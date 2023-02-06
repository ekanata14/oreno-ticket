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
        <div class="card border-0 p-2 col-9 mb-3">
            <h1 class="mb-3">Users</h1>
           <table class="table">
                <thead>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama Penumpang</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Telefon</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $i = 1?>
                    <?php foreach($data['users'] as $user):?>
                        <tr class="<?= ($user['status'] == 1) ? 'bg-warning' : '';?> text-dark">
                            <td><?= $i ?></td>
                            <td><?= $user['username']?></td>
                            <td><?= $user['nama_penumpang']?></td>
                            <td><?= $user['alamat_penumpang']?></td>
                            <td><?= $user['tanggal_lahir']?></td>
                            <td><?= $user['jenis_kelamin']?></td>
                            <td><?= $user['telefon']?></td>
                            <td> 
                                <?php if($user['status'] == 0){?>
                                    <span class="text-success">Active</span>
                                <?php } else{ ?>
                                    <span class="text-danger">Blocked</span>
                                <?php }?>
                            </td>
                            <td> 
                                <?php if($user['status'] == 0){?>
                                    <button type="submit" class="btn btn-danger" id="blockUserButton" data-id="<?= $user['id'] ?>" data-toggle="modal" data-target="#blockUserModal"><i class="fas fa-ban" ></i></button> 
                                <?php } else{ ?>
                                    <button type="submit" class="btn btn-success" id="activateUserButton" data-id="<?= $user['id'] ?>" data-toggle="modal" data-target="#activateUserModal"><i class="fas fa-user-check"></i></button>
                                <?php }?>
                            </td>
                            
                        </tr>
                        <?php $i++?>
                    <?php endforeach?>
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



