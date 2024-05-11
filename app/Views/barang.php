<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<a href="/barang/tambah" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>nama_barang</th>
                            <th>harga</th>
							   <th>stock</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($barang as $key => $barang) : ?>
 
                            <tr>
                                <td><?php echo $barang['nama_barang'] ?></td>
                                <td><?php echo $barang['harga'] ?></td>
								  <td><?php echo $barang['stock'] ?></td>
                                <td class="text-center">
                                 	<a href="/barang/update/<?= $barang['id_barang'];?>">Edit</a>
                                    <a href="/barang/delete/<?= $barang['id_barang'];?>">Delete</a>
                                </td>
                            </tr>
 
                        <?php endforeach ?>
                    </tbody>
                </table>
<?= $this->endSection() ?>