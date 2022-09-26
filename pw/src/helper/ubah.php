<?php

require 'function.php';

// ambil id dari url
$id = $_GET['id'];

$book = query("SELECT * FROM buku WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = '../../index.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah</title>
  <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
  
<div class='w-full h-screen bg-[#0a192f] flex justify-center items-center p-4'>
    <form action="" method='POST' enctype="multipart/form-data" class='flex flex-col max-w-[600px] w-full'>
    <input type="hidden" name="id" value="<?= $book['id']; ?>">
      <div class='pb-8'>
        <p class='text-4xl font-bold inline border-b-4 border-red-600 text-gray-300'>Ubah</p>
      </div>
      <div class="shadow sm:overflow-hidden sm:rounded-md">
        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
          <div>
            <label for="judul" class="block text-sm font-medium text-gray-600">Judul</label>
            <input type="text" name="judul" id="judul" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="<?= $book["judul"]; ?>">
          </div>
          <div>
            <label for="pengarang" class="block text-sm font-medium text-gray-600">Pengarang</label>
            <input type="text" name="pengarang" id="pengarang" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="<?= $book["pengarang"]; ?>">
          </div>
          <div>
            <label for="tahun_terbit" class="block text-sm font-medium text-gray-600">Tahun Terbit</label>
            <input type="date" name="tahun_terbit" id="tahun_terbit" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="<?= $book["tahun_terbit"]; ?>">
          </div>
          <div>
            <input type="hidden" name="gambar_lama" value="<?= $book["gambar"]; ?>">
            <label for="judul" class="block text-sm font-medium text-gray-600">Gambar</label>
            <div class="mt-1 flex items-center">
              <img src="../../public/assets/<?= $book['gambar']; ?>" class="img-preview drop-shadow-xl rounded-xl borrder border-spacing-1" width="220" style="display:block;">
              <input type="file" name="gambar" class="gambar ml-5 rounded-md border border-gray-300 bg-white py-2 px-3 text-sm font-medium leading-4 text-gray-600 shadow: focus:ring-offset-2" value="<?= $book["gambar"]; ?>" onchange="previewImage()">
            </div>
            <div class="bg-gray-50 px-3 py-4 text-right sm:py-6">
              <button type="submit" name="ubah" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm focus:ring-offset-2">Ubah Data</button>
            </div>
          </div>
        </div>
      </div>
  </div>

  <script src="script.js"></script>
</body>
</html>