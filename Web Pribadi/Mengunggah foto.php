<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $foto_dir = "uploads/foto/";
    $video_dir = "uploads/video/";

    if (!is_dir($foto_dir)) {
        mkdir($foto_dir, 0777, true);
    }

    if (!is_dir($video_dir)) {
        mkdir($video_dir, 0777, true);
    }

    $foto_path = $foto_dir . basename($_FILES["foto"]["name"]);
    $video_path = $video_dir . basename($_FILES["video"]["name"]);

    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $foto_path) &&
        move_uploaded_file($_FILES["video"]["tmp_name"], $video_path)) {
        echo "Unggahan berhasil!";
    } else {
        echo "Terjadi kesalahan saat mengunggah.";
    }
}
?>

