<?php
require_once dirname(__DIR__, 2) . '/config/database.php';

$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>
<h2>Data Barang</h2>
<a href="index.php?page=barang/add">Tambah Barang</a>
<table>
    <tr>
        <th>Gambar</th>
        <th>Nama Barang</th>
        <th>Kategori</th>
        <th>Harga Jual</th>
        <th>Harga Beli</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    <?php if ($result): ?>
        <?php while ($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td>
                    <?php if (!empty($row['gambar'])): ?>
                        <img src="<?= e($row['gambar']); ?>" alt="<?= e($row['nama']); ?>" width="80">
                    <?php endif; ?>
                </td>
                <td><?= e($row['nama']); ?></td>
                <td><?= e($row['kategori']); ?></td>
                <td><?= e($row['harga_jual']); ?></td>
                <td><?= e($row['harga_beli']); ?></td>
                <td><?= e($row['stok']); ?></td>
                <td>
                    <a href="index.php?page=barang/edit&id=<?= e($row['id_barang']); ?>">Ubah</a> |
                    <a href="index.php?page=barang/delete&id=<?= e($row['id_barang']); ?>" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr>
            <td colspan="7">Belum ada data</td>
        </tr>
    <?php endif; ?>
</table>