<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../../public/css/bootstrap.min.css"> -->

    <title></title>
  </head>
  <body>

    <div class="container">
    <div class="row">
      <div class="col">
        <a href="upload" type="button" class="btn btn-warning mt-4 mb-4 mr-2">Tambah</a>
        <!-- <button type="button" class="btn btn-warning mt-4 mb-4 mr-2 edit" data-toggle="modal" data-target="#exampleModal">
          Tambah
        </button> --> 
        <button type="button" class="btn btn-warning mt-4 mb-4">Download Laporan</button>

    <table class="table table-striped">
      <thead>
          <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Dokumen</th>
          <th scope="col">Tanggal Upload</th>
          <th scope="col">Aksi</th>
          </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $f) { ?>
          <tr>
            <th scope="row">1</th>
            <td><img src="" alt=""><?= $f['nama_file']; ?></td>
            <td><?= $f['create_at']; ?></td>
            <td>
              <a href="" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
      </table>
  </div>
  </div>
    
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    
</html>