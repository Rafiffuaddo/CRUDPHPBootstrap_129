<!DOCTYPE html>
<html lang="en">
    <head> 
         <meta charset="utf-8"> 
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
         <title>Data Mahasiswa</title>
    </head> 
    
    <body> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
            <div class="container"> 
                <a class="navbar-brand" href="#">Data Mahasiswa</a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> 
                    <span class="navbar-toggler-icon"></span> 
                </button> 
                
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> 
                    <div class="navbar-nav ms-auto"> 
                        <a class="nav-link active" aria-current="page" href="create.php">Tambah Mahasiswa</a> 
                        <a class="nav-link" href="#">Features</a> 
                        <a class="nav-link" href="#">Pricing</a> 
                    </div> 
                </div> 
            </div> 
        </nav> 
        <div class="container data-mahasiswa mt-5"> 
           <!-- Button trigger modal -->
           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData">
                Tambah Data
            </button>

            <!-- Modal -->
            <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                 <form method="post" action="store.php" name="form">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Mahasiswa" name="nama" required>
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="NIM" placeholder="Masukkan NIM Mahasiswa" name="nim" required>
                     </div>
                 <div class="mb-3">
                     <label for="Alamat" class="form-label">Example textarea</label>
                     <textarea type="text" class="form-control" id="Alamat" placeholder="Masukkan Alamat Mahasiswa" name="alamat" required></textarea> 
                 </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary" value="SIMPAN">Tambah</button>
                 </div>
                 </div>
            </form>
        </div>
    </div>
</div>
            <table class="table table-striped"> 
                <thead> 
                    <tr> 
                        <th scope="col">No. </th> 
                        <th scope="col">Nama</th> 
                        <th scope="col">NIM</th> 
                        <th scope="col">Alamat</th> 
                        <th scope="col">Aksi</th> 
                    </tr> 
                </thead> 
                <tbody> 
                        <?php //memanggil config.php yg sudah dibuat 
                        include 'config.php'; 
                        $no = 1; 
                        $mahasiswa = mysqli_query($koneksi, "select * from mahasiswa");
                        while ($data = mysqli_fetch_array($mahasiswa)) { 
                            ?>
                            <tr> 
                                <td><?php echo $no++; ?></td> 
                                <td><?php echo $data['NAMA']; ?></td>
                                <td><?php echo $data['NIM']; ?></td> 
                                <td><?php echo $data['ALAMAT']; ?></td> 
                                <td>
                                    <a href="edit.php?ID=<?php echo $data['ID']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a> 
                                    <a href="delete.php?ID=<?php echo $data['ID']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data mahasiswa ini?')">HAPUS</a> 
                                </td> 
                            </tr> 
                            <?php 
                        } 
                        ?> 
                    </tbody> 
                </table> 
            </div> 
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3..5.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#tabelMahasiswa').DataTable();
                });
            </script>
        </body> 
        </html>
</div>
</body>      
</html>