<?php 
  $filename = "ProductManageEngine.msi"; // Путь до файла или файл
  header('Pragma: public');
  header('Expires: 0');
  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
  header('Cache-Control: private', false);
  header('Content-Type: application/msi');
  header('Content-Disposition: attachment; filename="'. basename($filename) . '";');
  header('Content-Transfer-Encoding: binary');
  header('Content-Length: ' . filesize($filename));
  readfile($filename);
?>