<?php 

    include "header.php";
    
    

?>
<br>
<br>
<br>
<br>
<h1>Selamat datang <?=$_SESSION['nama']?> di website "TOKO ONLEN".</h1>
<br>
<br>
<br>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white">
<div class="row">

<?php 

include "toko_online.php";

$qry_produk=mysqli_query($conn,"select * from produk order by id_produk desc");

while($dt_produk=mysqli_fetch_array($qry_produk)){
  $harga = $dt_produk['harga'];
  $harga2 = number_format ($harga, null, '', '.');

    ?>

    <div class="col-md-3">

        <div class="card" >

          <img src="foto/<?=$dt_produk['foto_barang']?>" class="card-img-top" style="width : 300px; height : 200px;">

          <div class="card-body">

            <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>

            <h5 class="card-title"><?php echo("Rp. ". $harga2) ?> </h5>

            <a href="Beli.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-primary">Beli Sekarang</a>

          </div>

        </div>

    </div>

    <?php

}

?>

</div>

  </div>

<?php

    include "footer.php";

?>