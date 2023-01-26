<h2>Data Penumpang</h2>

<table>
    <thead>
        <th>Username</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Telefon</th>
    </thead>
    <tbody>
        <?php foreach ($data['penumpang'] as $penumpang) { ?>
            <tr>
                <td><?= $penumpang['username']; ?></td>
                <td><?= $penumpang['nama_penumpang']; ?></td>
                <td><?= $penumpang['alamat_penumpang']; ?></td>
                <td><?= $penumpang['tanggal_lahir']; ?></td>
                <td><?= $penumpang['jenis_kelamin']; ?></td>
                <td><?= $penumpang['telefon']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>