<?php 

    include "header_produk.php";

?>

<h2>Daftar Produk</h2>

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

<?php 

    include "footer.php";

?>

