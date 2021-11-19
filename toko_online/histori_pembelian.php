<?php 

    include "header.php";

?>

<h2>Histori Pembelian Barang</h2>

<table class="table table-hover table-striped">

    <thead>

        <th>NO</th><th>Tanggal Beli</th><th>Nama Barang</th><th>Jumlah</th><th>Status</th>

    </thead>

    <tbody>

        <?php 

        include "toko_online.php";

        $qry_histori=mysqli_query($conn,"select * from transaksi order by id_transaksi desc");

        $no=0;

        while($dt_histori=mysqli_fetch_array($qry_histori)){

            $no++;

            //menampilkan buku yang dipinjam

            $produk_beli="<ol>";

            $qry_produk=mysqli_query($conn,"select * from  detail_transaksi join produk on produk.id_produk=detail_transaksi.id_produk where id_transaksi = '".$dt_histori['id_transaksi']."'");

            while($dt_produk=mysqli_fetch_array($qry_produk)){

                $produk_beli.="<li>".$dt_produk['nama_produk']."</li>";
                $qty_beli="<li>" .$dt_produk['subtotal']."</li>";
               
            }

            $produk_beli.="</ol>";
        ?>

            <tr>

                <td><?=$no?></td>
                <td><?=$dt_histori['tgl_transaksi']?></td>
                <td><?=$produk_beli?></td>
                <td></td>
                <td><?php echo("diproses"); ?></td>

            </tr>

        <?php

        }

        ?>

    </tbody>

</table>

<?php 

    include "footer.php";

?>