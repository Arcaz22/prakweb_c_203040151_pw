<?php

require 'src/helper/function.php';

//pagination
//konfigurasi
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM buku"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
$books = query("SELECT * FROM buku LIMIT $awalData, $jumlahDataPerHalaman");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku</title>
  <link rel="stylesheet" href="./public/css/style.css" />
  <style>
    body {
      background-color: #0a192f;
    }
  </style>
</head>

<body>
                                                                                                      
<div class="w-full h-screen text-gray-300">
  <div class="flex flex-col justify-center items-center w-full h-full">
    <div class="max-w-[1000px] w-full grid grid-cols-2 gap-4">
      <div class="sm:text-4xl font-bold inline border-b-4 border-red-600">
        <p>Daftar Buku</p>
      </div>
      <div class="text-center"> 
        <a href="src/helper/tambah.php">
          <button class="bg-gray-200 text-gray-600 hover:bg-blue-300 sm:text-3xl font-bold inline rounded-md px-10 py-1">
          Tambah Buku
          </button>
        </a>
      </div>
    </div>
    <div class="max-w-[1000px] w-full px-4 py-6">
      <div class="border-t border-gray-200">
        <dl>
          <table class="table-auto min-w-max w-full">
            <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
              <tr class="mt-2">
                <th class="py-3 px-6 text-left">No</th>
                <th class="py-3 px-6 text-left">Judul</th>
                <th class="py-3 px-6 text-left">Pengarang</th>
                <th class="py-3 px-6 text-left">Tahun Terbit</th>
                <th class="py-3 px-6 text-left">Gambar</th>
                <th class="py-3 px-6 text-left">Aksi</th>
              </tr>
            </thead>
            <tbody class="text-gray-600 text-sm">
              <?php $i=1;
              foreach ($books as $book) : ?>
                <tr class="border-b border-gray-200 hover:bg-gray-50 hover:font-bold">
                  <td class="py-3 px-6 text-left"><?= $i++; ?></td>
                  <td class="py-3 px-6 text-left"><?= $book['judul']; ?></td>
                  <td class="py-3 px-6 text-left"><?= $book['pengarang']; ?></td>
                  <td class="py-3 px-6 text-left"><?= $book['tahun_terbit']; ?></td>
                  <td class="py-3 px-6 text-left">
                    <img src="public/assets/<?= $book['gambar']; ?>" width="60">
                  </td>
                  <td class="py-3 px-6 items-start">
                    <div class="flex justify-start">
                      <button class="text-gray-600 hover:bg-blue-300">
                        <a href="./src/helper/ubah.php?id=<?= $book["id"]; ?>">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                          </svg>
                        </a>
                      </button>
                      <button class="text-gray-600 hover:bg-blue-300">
                        <a href="./src/helper/hapus.php?id=<?= $book["id"]; ?>" onclick="return confirm('yakin?');">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                        </a>
                      </button>
                    </td>
                  </div>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </dl>
      </div>
    </div>
    <div class="flex items-center space-x-1">
    <?php if ($halamanAktif > 1) : ?>
      <a href="?halaman=<?= $halamanAktif - 1; ?>" class="flex items-center px-4 py-2 text-gray-500 bg-gray-300 rounded-md hover:bg-blue-400 hover:text-white">
        Previous
      </a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
      <?php if ($i == $halamanAktif) : ?>
        <a class="text-white" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
      <?php else : ?>
        <a class="font-bold text-gray-600 href="?halaman=<?= $i; ?>"><?= $i; ?></a>
      <?php endif; ?>
    <?php endfor; ?>
    <?php if ($halamanAktif < $jumlahHalaman) : ?>
      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="px-4 py-2 font-bold text-gray-500 bg-gray-300 rounded-md hover:bg-blue-400 ">
          Next
      </a>
    <?php endif; ?>
    </div>
  </div>
</div>

</body>

</html>