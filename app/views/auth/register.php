<form action="<?= BASE_URL ?>/auth/regisPenumpang" method="POST">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="text" name="nama_penumpang" placeholder="name">
    <input type="text" name="alamat_penumpang" placeholder="alamat">
    <input type="date" name="tanggal_lahir" placeholder="tanggal lahir">
    <input type="radio" name="jenis_kelamin" value="Laki-Laki" placeholder="jenis kelamin">
    <label for="Laki-Laki">Laki Laki</label>
    <input type="radio" name="jenis_kelamin" value="Perempuan" placeholder="jenis kelamin">
    <label for="Perempuan">Perempuan</label>
    <input type="text" name="telefon" placeholder="telefon">
    <button type="submit">Register</button>
</form>
<a href="<?= BASE_URL ?>/auth/login">Login</a>
