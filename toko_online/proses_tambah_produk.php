<?php

if($_POST){

    $nama_produk=$_POST['nama_produk'];

    $deskripsi=$_POST['deskripsi'];

    $harga=$_POST['harga'];

    $foto_barang=$_POST['foto_barang'];

    if(empty($nama_produk)){

        echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";


    } elseif(empty($deskripsi)){

        echo "<script>alert('deskripsi tidak boleh kosong');location.href='tambah_produk.php';</script>";

    } elseif(empty($harga)) {
        
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_produk.php';</script>";
    } 

    else {
        
        include "toko_online.php";

        //upload file image

        $target_dir = "foto/";
        $target_file = $target_dir . basename($_FILES["foto_barang"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["simpan"])) {
          $check = getimagesize($_FILES["foto_barang"]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
        }
                // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        
        // Check file size
        if ($_FILES["foto_barang"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto_barang"]["tmp_name"], $target_file)) {

                
                $insert=mysqli_query($conn, "INSERT INTO `produk` (`nama_produk`, `deskripsi`, `harga`, `foto_barang`) VALUES ('".$nama_produk."','".$deskripsi."', '".$harga."', '".$foto_barang."')");

        if($insert){

            echo "<script>alert('Sukses menambahkan produk');location.href='tambah_produk.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php';</script>";

        }
                

            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }


    }

}

?>