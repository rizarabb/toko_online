<?php

if($_POST){

    $id_pelanggan=$_POST['id_pelanggan'];

    $nama=$_POST['nama'];

    $alamat=$_POST['alamat'];

    $telp=$_POST['telp'];

    

    if(empty($nama)){

        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";


    

    } else {

        include "toko_online.php";

        if(empty($telp)){

            $update=mysqli_query($conn,"update pelanggan set nama='".$nama."',alamat='".$alamat."', telp='".$telp."' ") or die(mysqli_error($conn));

            if($update){

                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";

            } else {

                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";

            }

        } else {

            $update=mysqli_query($conn,"update pelanggan set nama='".$nama."',alamat='".$alamat."', telp='".$telp."' ") or die(mysqli_error($conn));

            if($update){

                echo "<script>alert('Sukses update siswa');location.href='tampil_pelanggan.php';</script>";

            } else {

                echo "<script>alert('Gagal update siswa');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";

            }

        }

       

    }

}

?>