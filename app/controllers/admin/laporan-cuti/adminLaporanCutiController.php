<?php
include "../../../configs/database.php";

$sql = "SELECT cuti.*, users.nama_lengkap 
        FROM cuti 
        JOIN users ON cuti.user_id = users.id 
        ORDER BY cuti.created_at DESC";
$result = $db->query($sql);
?>
