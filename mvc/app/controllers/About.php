<?php 

class About {
  public function index($nama = "Undifined", $pekerjaan = "null")
  {
    echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
  }

  public function page()
  {
    echo 'About/page';
  }
}

?>