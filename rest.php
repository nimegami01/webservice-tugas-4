<?php
$conn = mysqli_connect('localhost', 'root', '', 'dataku');

if(!$conn){
    echo "Error";
    exit;
}

if(!empty(isset($_GET['insert']))){

    if($_GET['insert'] == 1){
        $jenis = $_POST['jenis'];
        $kota = $_POST['kota'];
        $harga = $_POST['harga'];
        $desc_ = $_POST['deskripsi'];

        $query = mysqli_query($conn, "INSERT INTO supra (jenis, kota, harga, deskripsi) VALUES ('$jenis', '$kota', '$harga', '$desc_')");

        if(!$query){
            echo json_encode(['status' => 0, 'msg' => 'Error']);
            exit;
        }else{
            echo json_encode(['status' => 1, 'msg' => 'Sukses']);
            exit;
        }
    }

}

if(!empty(isset($_GET['update']))){

    if($_GET['update'] == 1){
        $id = $_POST['id'];
        $jenis = $_POST['jenis'];
        $kota = $_POST['kota'];
        $harga = $_POST['harga'];
        $desc_ = $_POST['deskripsi'];

        $query = mysqli_query($conn, "UPDATE supra SET jenis='$jenis', kota='$kota', harga='$harga', deskripsi='desc_' WHERE id='$id' ");

        if(!$query){
            echo json_encode(['status' => 0, 'msg' => 'Error']);
            exit;
        }else{
            echo json_encode(['status' => 1, 'msg' => 'Sukses']);
            exit;
        }
    }

}

if(!empty(isset($_GET['delete']))){

    if($_GET['delete'] == 1){
        $id = $_POST['id'];
        $query = mysqli_query($conn, "DELETE FROM supra WHERE id='$id'");

        if(!$query){
            echo json_encode(['status' => 0, 'msg' => 'Error']);
            exit;
        }else{
            echo json_encode(['status' => 1, 'msg' => 'Sukses']);
            exit;
        }

    }

}

if(!empty(isset($_GET['show']))){
    if($_GET['show'] == 1){
        $query = mysqli_query($conn, "SELECT * FROM supra");
        $data = [];
        while($post = mysqli_fetch_array($query)){
          $data[] = $post;  
        }
        echo json_encode($data);
        exit;
    }
}