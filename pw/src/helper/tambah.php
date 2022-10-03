<?php 

require 'function.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = '../../index.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah</title>
  <link rel="stylesheet" href="../../public/css/style.css">
  <style>
    body {
      background-color: #0a192f;
    }
  </style>
</head>
<body>
  
  <div class='w-full h-screen flex justify-center items-center p-4'>
    <form action="" method='POST' enctype="multipart/form-data" class='flex flex-col max-w-[600px] w-full'>
      <div class='pb-8'>
        <p class='text-4xl font-bold inline border-b-4 border-red-600 text-gray-300'>Tambah</p>
      </div>
      <div class="shadow sm:overflow-hidden sm:rounded-md">
        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
          <div>
            <label for="judul" class="block text-sm font-medium text-gray-600">Judul</label>
            <input type="text" name="judul" id="judul" class="mt-1 block w-full rounded-md border-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
          </div>
          <div>
            <label for="pengarang" class="block text-sm font-medium text-gray-600">Pengarang</label>
            <input type="text" name="pengarang" id="pengarang" class="mt-1 block w-full rounded-md border-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
          </div>
          <div>
            <label for="tahun_terbit" class="block text-sm font-medium text-gray-600">Tahun Terbit</label>
            <input type="date" name="tahun_terbit" id="tahun_terbit" class="mt-1 block w-full rounded-md border-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
          </div>
          <div>
            <label for="judul" class="block text-sm font-medium text-gray-600">Gambar</label>
            <div class="mt-1 flex items-center">
              <img src="../../public/assets/no_photo.png" class="img-preview drop-shadow-xl rounded-xl borrder border-spacing-1" width="220" style="display:block;">
              <input type="file" name="gambar" class="gambar ml-5 rounded-md border border-gray-200 bg-white py-2 px-3 text-sm font-medium leading-4 text-gray-600 shadow: focus:ring-offset-2" onchange="previewImage()">
            </div>
            <div class="bg-gray-50 px-3 py-4 text-right sm:py-6">
              <button type="submit" name="tambah" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white">Tambah Data</button>
            </div>
          </div>
        </div>
      </div>
  </div>

  <script src="script.js"></script>
</body>
</html>