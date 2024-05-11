<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<a href="/customer/tambah" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>nama_customer</th>
                            <th>no_telp</th>
							   <th>email</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($customer as $key => $customer) : ?>
 
                            <tr>
                                <td><?php echo $customer['nama_customer'] ?></td>
                                <td><?php echo $customer['no_telp'] ?></td>
								  <td><?php echo $customer['email'] ?></td>
                                <td class="text-center">
                                 	<a href="/customer/update/<?= $customer['id_customer'];?>">Edit</a>
                                    <a href="/customer/delete/<?= $customer['id_customer'];?>">Delete</a>
                                </td>
                            </tr>
 
                        <?php endforeach ?>
                    </tbody>
                </table>
<?= $this->endSection() ?>