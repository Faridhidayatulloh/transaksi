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
 
 
               
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="<?= url_to('customer::store') ?>">
                            <div class="mb-4">
                                <label for"nama_customer">nama_customer</label>
                                <input type="text" name="nama_customer" id="nama_customer" class="form-control">
                            </div>

                            <div class="mb-4">
                                <label for"no_telp">no_telp</label>
                                <input type="number" name="no_telp" id="no_telp" class="form-control">
                            </div>

                            <div class="mb-4">
                                <label for"email">email</label>
                                <input type="text" name="email" id="email" class="form-control">
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