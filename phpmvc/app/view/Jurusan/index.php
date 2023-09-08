<style>
   body {
    background-image: url(http://localhost/phpmvc/img/1.jpg);
   }
   
  
   .jumbotron {
    opacity: 0.9;
}


</style>
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <?php FLasher::flash(); ?>
            <h3 style="color: white; font-weight: bold">Daftar Jurusan</h3>
            <button style="width: 45%;" type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modol">
                    Tambah Jurusan
            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tambah Jurusan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form action="<?= BASE_URL; ?>/jurusan/tambah" method="post">
                                <input type="hidden" name="id" >
                                <div style="text-align: left; font-weight: bold" class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                                </div>


                                </div>
                                 <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </form>
                                </div>
                                
                                </div>
                            </div>
                            </div>


 <table style="color: white; background-color:#3C4048" class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col"><center>No</center></th>
                    <th scope="col"><center>Nama</center></th>
                    <th scope="col"><center>Aksi</center></th>
                    </tr>
                </thead>
                
                <?php $id = 1;?>
                <tbody>
                    
                    <?php foreach($data['nama'] as $blog) :?>
                    <tr>
                    <th scope="row"><center><?= $id++; ?></center></th>
                    <td style="font-weight: bold"><?= $blog['nama']?></td>
                    <td>
                        <center>
                        
                        <!-- Button trigger modal -->
                        <button style="width: 25%;" type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#moll<?=$blog['id']?>">
                            Detail
                        </button>

                            <!-- Modal -->
                            <div class="modal fade" id="moll<?=$blog['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 style="font-weight: bold; color: black;" class="modal-title" id="exampleModalLabel">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Detail</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form action="<?= BASE_URL; ?>/jurusan/ubah" method="post">
                                <input type="hidden" name="id" value="<?=$blog["id"]?>">
                                <div style="text-align: left; font-weight: bold; color: black;" class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" value="<?= $blog['nama']?>" name="nama" readonly>
                                </div>


                                </div>
                                <div  class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                                Close
                                </div>
                                </form>
                                </div>
                                
                                </div>
                            </div>
                            </div>
                        <!-- Button trigger modal -->
                        <button style="width: 25%;" type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#exampleModal<?=$blog['id']?>">
                            Ubah
                        </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?=$blog['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 style="font-weight: bold; color: black;" class="modal-title" id="exampleModalLabel">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ubah Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form action="<?= BASE_URL; ?>/jurusan/ubah" method="post">
                                <input type="hidden" name="id" value="<?=$blog["id"]?>">
                                <div style="text-align: left; font-weight: bold; color: black;" class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" value="<?= $blog['nama']?>" name="nama" autocomplete="off">
                                </div>

                               
                                </div>
                                <button type="submit" class="btn btn-primary">Ubah Data</button>
                                </form>
                                </div>
                                
                                </div>
                            </div>
                            </div>

                            <a style="width: 25%;" href="<?= BASE_URL; ?>/jurusan/hapus/<?= $blog['id']?> " onclick="return confirm('Yakin?');" class="btn btn-danger mr-2">Hapus</a>

                                            
                    </td>
                    </tr>
                   
                    
                    <?php endforeach?>
                </tbody>
</table>
            
        </div>
    </div>
</div>