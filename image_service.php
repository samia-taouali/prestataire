<?php 
  $images_main = $_FILES["image_principale"]["name"];
  $tmp_main = $_FILES["image_principale"]["tmp_name"];
  $dossier_main = "imgs/" . $images_main;
  move_uploaded_file($tmp_main, $dossier_main);
        
  if (!empty($images_main)) {
    $sql_gallery_main = "INSERT INTO `gallerie`(`image`, `type`, `id_service`) VALUES ('$dossier_main', 'Principale', '$id_service')";
    $query_gallery_main = mysqli_query($conn, $sql_gallery_main);
  }
        
  $uniqueImages = array_unique($_FILES["images"]["name"]);
  $imagesNumber = count($uniqueImages);
        
  if ($imagesNumber > 0) {
    for ($i = 0; $i < $imagesNumber; $i++) {
      $images_secondaire = $uniqueImages[$i];
      $tmp_secondaire = $_FILES["images"]["tmp_name"][$i];
      $dossier_secondaire = "imgs/" . $images_secondaire;
      move_uploaded_file($tmp_secondaire, $dossier_secondaire);
      $typImg = 'Secondaire';
      $sql_gallery_secondaire = "INSERT INTO `gallerie`(`image`, `type`, `id_service`) VALUES ('$dossier_secondaire', '$typImg', '$id_service')";
      $query_gallery_secondaire = mysqli_query($conn, $sql_gallery_secondaire);
    }
    if ($query_gallery_secondaire) {
      header('location: mes_services.php');
      exit();
    }
  }
?>