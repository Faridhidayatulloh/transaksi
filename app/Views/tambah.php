<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
 
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
 
                <?php if(!empty(session()->getFlashdata('message'))) : ?>
 
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('message');?>
                </div>
 
                <?php endif ?>
 
 
                <a href="" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="<?= url_to('Dosen::store') ?>">
                            <div class="mb-4">
                                <label for"kode_dosen">Kode Dosen</label>
                                <input type="text" name="kode_dosen" id="kode_dosen" class="form-control">
                            </div>

                            <div class="mb-4">
                                <label for"nama_dosen">Nama Dosen</label>
                                <input type="text" name="nama_dosen" id="status_dosen" class="form-control">
                            </div>

                            <div class="mb-4">
                                <label for"status_dosen">Status Dosen</label>
                                <select name="status_dosen" id="status_dosen" class="form-control">
                                    <option value="0">Tidak Aktif</option>
                                    <option value="1">Aktif</option>
                               </select>
                          </div>

                          <button type="submit" class="btn btn-success btn-block">Simpan</button>
                      </form>
                  </div>
                </div>
 
            </div>
        </div>
    </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>