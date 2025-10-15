<?php
include "../../../configs/database.php";

if (isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sql = "UPDATE cuti SET status = '$status' WHERE id = '$id'";
    $result = $db->query($sql);

    if ($result) {
        echo json_encode(["success" => true, "message" => "Status berhasil diperbarui"]);
    } else {
        echo json_encode(["success" => false, "message" => "Gagal memperbarui status"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Data tidak lengkap"]);
}
?>
