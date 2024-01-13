<?php
$conn= mysqli_connect("localhost", "root", "", "form");

if (isset( $_POST["submit"])) {
  $scan_ktp = htmlspecialchars($_POST["scan_ktp"]);
  $nama= htmlspecialchars($_POST["nama"]);
  $nik_ktp = htmlspecialchars($_POST["nik_ktp"]);
  $tempatlahir= htmlspecialchars ($_POST["tempatlahir"]);
  $tanggallahir = htmlspecialchars($_POST["tanggallahir"]);
  $usia = htmlspecialchars($_POST["usia"]);
  $jeniskelamin = htmlspecialchars($_POST["jeniskelamin"]);
  $email = htmlspecialchars($_POST["email"]);
  $pendidikan_terakhir = htmlspecialchars($_POST["pendidikan_terakhir"]);
  $nama_sekolah=htmlspecialchars($_POST["nama_sekolah"]);
  $status_pernikahan = htmlspecialchars($_POST["status_pernikahan"]);
  $alamat =htmlspecialchars($_POST["alamat"]);
  $domisili = htmlspecialchars($_POST["domisili"]);
  $nomertelp = htmlspecialchars($_POST["nomor_telpon"]);
  $posisi_ygdilamar = htmlspecialchars($_POST["posisi_ygdilamar"]);
  $pengalaman_bekerja = htmlspecialchars($_POST["pengalaman_bekerja"]);
  $minus_silinder = htmlspecialchars($_POST["minus_silinder"]);
  $penyakit = htmlspecialchars($_POST["penyakit"]);
  $seleksi = htmlspecialchars($_POST["seleksi"]);
  $bekerja = htmlspecialchars($_POST["bekerja"]);
  $kuliah = htmlspecialchars($_POST["kuliah"]);
  $relasi = htmlspecialchars($_POST["relasi"]);
  $penjelasan = htmlspecialchars($_POST["penjelasan"]);
  
  $eks_bolehh = array('jpg', 'jpeg', 'png');
  $name = $_FILES["scan_ktp"]["name"];
  $y = explode('.', $nama);
  $ekstensi = strtolower(end($y));
  $ukuran = $_FILES["scan_ktp"]["size"];
  $file_tmp = $_FILES["scan_ktp"]["tmp_name"];

  if(in_array($ekstensi,$eks_bolehh)===true) {
    if ($ukuran <11000000) {
      move_uploaded_file($file_tmp, 'D:\xampp\htdocs\php'.$nama);
    }
  }
 
  $eks_boleh = array('pdf','docx');
  $nama = $_FILES["berkas_lamaran"]["name"];
  $x = explode('.',$nama);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES["berkas_lamaran"]["size"];
  $file_tmp = $_FILES["berkas_lamaran"]["tmp_name"];

  if(in_array($ekstensi,$eks_boleh)===true) {
    if ($ukuran <11000000) {
      move_uploaded_file($file_tmp, 'D:\xampp\htdocs\php'.$nama);
    }
    
  }
   mysqli_affected_rows($conn);
   if ($_POST > 0) {
    echo" 
    <script>
      alert('Terimakasih sudah mengisi data');

    </script>";
   }else {
    echo" <script>
      alert('Maaf data kamu ad yg salah nih');

    </script>";
   };


  // for $i=0; $i < count($sim); $i++) { 
  //   $sim[$i];
  // }
  // $vaksin = $_POST["vaksin"];
  // for ($j=0; $j < count($vaksin); $j++) { 
  //   $vaksin[$j];
  // }
  // $loker = $_POST["loker"];
  // for ($z=0; $z < count($loker); $z++) { 
  //   $_POST[$loker[$z]] ; 
  // }
  // $gambar = upload();
  // if (!$gambar) {
  //   return false;
  // }


$query ="INSERT INTO formulir VALUES('','$nama', 'scan_ktp', '$nama','nik_ktp', '$tempatlahir','$tanggallahir'
,'$usia','$jeniskelamin','$email','$pendidikan_terakhir'
,'$nama_sekolah','$status_pernikahan','$alamat','$domisili','$nomertelp', '$posisi_ygdilamar','$pengalaman_bekerja'
,'$minus_silinder', '$penyakit', '$seleksi', '$bekerja', '$kuliah', '$relasi', '$penjelasan')";

mysqli_query($conn, $query);
};

?>




<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulir</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script>
    function text(x) {
      if (x == 0) document.getElementById("minus_silinder").style.display = "block";
      else document.getElementById("minus_silinder").style.display = "none";
      return;
    }
    function t(x) {
      if (x == 0) document.getElementById("penyakit").style.display = "block";
      else document.getElementById("penyakit").style.display = "none";
      return;
    }
    function e(x) {
      if (x == 0) document.getElementById("seleksi").style.display = "block";
      else document.getElementById("seleksi").style.display = "none";
      return;
    }
    function x(x) {
      if (x == 0) document.getElementById("bekerja").style.display = "block";
      else document.getElementById("bekerja").style.display = "none";
      return;
    }
    function xt(x) {
      if (x == 0) document.getElementById("kuliah").style.display = "block";
      else document.getElementById("kuliah").style.display = "none";
      return;
    }
    function te(x) {
      if (x == 0) document.getElementById("relasi").style.display = "block";
      else document.getElementById("relasi").style.display = "none";
      return;
    }
  </script>
</head>

<body>
  <section class="d-flex justify-content-center m-5" >
    <div class="card m-3d-flex md" style="width: 90%; border-radius:20px;">

      <div class="card-body border-top border-5 border-warning rounded-4">
        <h5 class="card-title text-center p-3">Form Pendaftaran Karyawan Baru PT Akui Bird Nest Indonesia</h5>
        <div class="container text-center fs-5">
          <p class="card-text">Silakan memasukkan data diri Anda dengan sebenar-benarnya.
            Baca dengan teliti dan isikan form pendaftaran ini dengan benar sesuai instruksi pada masing-masing
            pertanyaan.
            Seluruh proses rekrutmen yang diadakan oleh perusahaan tidak dipungut biaya apapun.
          </p>
        </div>
      </div>


      <form action="" method="post">
        <div class="card m-3  md">
          <div class="card-body border-top border-5 border-warning">
            <h5 class="card-title text-center"></h5>
            <form>

              <div class="mb-3">
                <label for="formFile" class="form-label fs">
                  <p>Scan KTP
                  </p>
                </label>
                <input name="scan_ktp" accept="application/jpeg" multiple class="form-control" required type="file"
                  id="formFile">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama lengkap sesuai KTP</label>
                <input name="nama" required type="text" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">

              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIK KTP</label>
                <input name="nik_ktp" required type="text" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">

              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tempat lahir</label>
                <input name="tempatlahir" required type="text" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">

              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tanggal lahir</label>
                <input name="tanggallahir" required type="date" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Usia</label>
                <div class="mb-3" id="emailHelp" class="form-text">Contoh pengisian: 25 Th</div>
                <input name="usia" required type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="container mb-3"></div>
              <p> Jenis kelamin</p>
              <div class="form-check">
                <input value="laki laki" name="jeniskelamin" required class="form-check-input" type="radio" id="jk">
                <label class="form-check-label" for="jk">
                  laki laki
                </label>
              </div>
              <div class="form-check">
                <input value="Perempuan" class="form-check-input" type="radio" name="jeniskelamin" id="jk">
                <label class="form-check-label mb-3" for="jk">
                  Perempuan
                </label>
              </div>


              <div class="mb-3 mt-2">

                <label for="exampleInputEmail1" class="form-label">Email Aktif</label>
                <input name="email" required type="email" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              </div>

              <div class="mb-2">pendidikan terakhir</div>
              <div class="form-check">
                <input value="smp" name="pendidikan_terakhir" required class="form-check-input" type="radio"
                  id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  SMP Sederajat
                </label>
              </div>
              <div class="form-check">
                <input value="sma" class="form-check-input" type="radio" name="pendidikan_terakhir"
                  id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  SMA
                </label>

              </div>
              <div class="form-check">
                <input value="SMK" class="form-check-input" type="radio" name="pendidikan_terakhir"
                  id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  SMK
                </label>
              </div>
              <div class="form-check">
                <input value="MA" class="form-check-input" type="radio" name="pendidikan_terakhir"
                  id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  MA
                </label>
              </div>
              <div class="form-check">
                <input value="D1" class="form-check-input" type="radio" name="pendidikan_terakhir"
                  id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  D1
                </label>
              </div>
              <div class="form-check">
                <input value="D2" class="form-check-input" type="radio" name="pendidikan_terakhir"
                  id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  D2
                </label>
              </div>
              <div class="form-check">
                <input value="D3" class="form-check-input" type="radio" name="pendidikan_terakhir"
                  id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  D3
                </label>
              </div>
              <div class="form-check">
                <input value="D4" class="form-check-input" type="radio" name="pendidikan_terakhir"
                  id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  D4
                </label>
              </div>
              <div class="form-check">
                <input value="S1" class="form-check-input" type="radio" name="pendidikan_terakhir"
                  id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  S1
                </label>
              </div>
              <div class="form-check">
                <input value="S2" class="form-check-input" type="radio" name="pendidikan_terakhir"
                  id="flexRadioDefault1">
                <label class="form-check-label mb-3" for="flexRadioDefault1">
                  S2
                </label>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tuliskan Nama Sekolah/Universitas Terakhir
                  Anda</label>
                <div class="mb-3" id="emailHelp" class="form-text">Contoh: SMA Negeri 1 Jombang atau S1 Psikologi
                  Universitas Muhammadiyah Malang</div>
                <input name="nama_sekolah" required type="text" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              </div>
              <div class="mb-2">Status pernikahan</div>
              <div class="form-check">
                <input value="belum menikah" name="status_pernikahan" class="form-check-input" type="radio" id="sp">
                <label class="form-check-label" for="sp">
                  Belum menikah
                </label>
              </div>
              <div class="form-check">
                <input value="menikah" class="form-check-input" type="radio" name="status_pernikahan" id="sp">
                <label class="form-check-label" for="sp">
                  Menikah
                </label>

              </div>
              <div class="form-check">
                <input value="cerai hidup" required class="form-check-input" type="radio" name="status_pernikahan"
                  id="sp">
                <label class="form-check-label" for="sp">
                  Cerai hidup
                </label>
              </div>
              <div class="form-check mb-3">
                <input value="cerai mati" class="form-check-input" type="radio" name="status_pernikahan" id="sp">
                <label class="form-check-label" for="sp">
                  Cerai mati
                </label>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat sesuai KTP</label>
                <div class="mb-3" id="emailHelp" class="form-text">Hanya pelamar yang menuliskan alamat lengkap sesuai
                  KTP, yang akan kami proses lebih lanjut. <br>
                  Contoh : Jl. Singojoyo RT/RW 04/02 Ds. Tembelang Kec. Tembelang Kab. Jombang </div>
                <input name="alamat" required type="text" class="form-control mb-3" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Alamat domisili saat ini</label>
                  <div class="mb-3" id="emailHelp" class="form-text">Jika alamat domisili sama dengan KTP, tidak perlu
                    ditulis ulang melainkan isi dengan tanda - </div>
                  <input nama="domisili" required type="text" class="form-control mb-3" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                    <div class="mb-3" id="emailHelp" class="form-text">Yang terhubung dengn whatsapp <br> Awali dengan
                      angka 0 dan tanpa tanda -
                    </div><input name="nomor_telpon" required type="text" class="form-control mb-3"
                      id="exampleInputEmail1" aria-describedby="emailHelp">

                    <div class="mb-2">Posisi yang dilamar</div>
                    <div class="form-check">
                      <input value="operator produksi" name="posisi_ygdilamar" class="form-check-input" required
                        type="radio" id="pd1">
                      <label class="form-check-label" for="pd1">
                        Operator produksi
                      </label>
                    </div>
                    <div class="form-check">
                      <input value="security" class="form-check-input" type="radio" name="posisi_ygdilamar" id="pd1">
                      <label class="form-check-label" for="pd1">
                        Security
                      </label>
                    </div>
                    <div class="form-check">
                      <input value="Continuous Improvement" class="form-check-input" type="radio"
                        name="posisi_ygdilamar" id="pd1">
                      <label class="form-check-label" for="pd1">
                        Continuous Improvement
                      </label>
                    </div>
                    <div class="form-check">
                      <input value="IT Programmer Intership Program" class="form-check-input" type="radio"
                        name="posisi_ygdilamar" id="pd1">
                      <label class="form-check-label" for="pd1">
                        IT Programmer Intership Program
                      </label>
                    </div>
                    <div class="form-check">
                      <input value="juru masak" class="form-check-input" type="radio" name="posisi_ygdilamar" id="pd1">
                      <label class="form-check-label" for="pd1">
                        Juru Masak
                      </label>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">
                        <p class="mt-4">Pengalaman Bekerja</p>
                      </label>
                      <div class="mb-3" id="emailHelp" class="form-text">Contoh: PT Akui Bird Nest Indonesia sebagai
                        Operator Produksi (1 tahun 2 bulan) </div>
                      <input name="pengalaman_bekerja" required type="text" class="form-control mb-3"
                        id="exampleInputEmail1" aria-describedby="emailHelp">

                      <div class="mb-2">
                        Apakah anda memiliki mata minus / silinder
                      </div>
                      <div class="form-check">
                        <input value="YES" name="minus_silinder" class="form-check-input" type="radio" id="m/s"
                          onclick="text(0)">
                        <label class="form-check-label" for="m/s">
                          Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <input value="-" class="form-check-input" type="radio" name="minus_silinder" id="m/s"
                          onclick="text(1)">
                        <label class="form-check-label" for="m/s">
                          No
                        </label>
                        <div class="mb-3 mt-2" id="minus_silinder">
                          <label for="beratbadan" class="form-label">minus berapa?</label>
                          <input name="minus_silinder" required type="text" class="form-control"
                            aria-describedby="emailHelp">
                          <label for="beratbadan" class="form-label">silinder berapa?</label>
                          <input name="minus_silinder" required type="text" class="form-control"
                            aria-describedby="emailHelp">
                        </div>
                      </div>

                      <div class="mb-3">
                        Apakah anda memiliki riwayat penyakit?
                      </div>
                      <div class="form-check">
                        <input value="YES" name="penyakit" class="form-check-input" type="radio" id="p" onclick="t(0)">
                        <label class="form-check-label" for="p">
                          Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <input value="-" class="form-check-input" type="radio" name="penyakit" id="p" onclick="t(1)">
                        <label class="form-check-label" for="p">
                          No
                        </label>
                        <div class="mb-3 mt-2" id="penyakit">
                          <label for="beratbadan" class="form-label">Penyakit apa?</label>
                          <input name="penyakit" required type="text" class="form-control" aria-describedby="emailHelp">
                          <label for="beratbadan" class="form-label">Kapan?</label>
                          <input name="penyakit" required type="text" class="form-control" aria-describedby="emailHelp">
                        </div>
                      </div>

                      <div class="mb-2">
                        Apakah anda pernah mengikuti proses seleksi di PT AKUI GROUP(PT. Akui Bird Nest Indonesia, PT.
                        Original Berkah Indonesia,
                        PT. Wallet Abdillah Jabli)
                      </div>
                      <div class="form-check">
                        <input value="YES" name="seleksi" class="form-check-input" type="radio" id="s" onclick="e(0)">
                        <label class="form-check-label" for="s">
                          Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <input value="-"  name="seleksi" class="form-check-input" type="radio" id="s" onclick="e(1)">
                        <label class="form-check-label" for="s">
                          No
                        </label>
                        <div class="mb-3 mt-2" id="seleksi">
                          <label for="beratbadan" class="form-label">Kapan?</label>
                          <input name="seleksi" required type="text" class="form-control" aria-describedby="emailHelp">
                        </div>
                      </div>

                      <div class="mb-2">
                        Apakah anda pernah bekerja di PT AKUI GROUP(PT. Akui Bird Nest Indonesia, PT. Original Berkah
                        Indonesia,
                        PT. Wallet Abdillah Jabli)?
                      </div>
                      <div class="form-check">
                        <input value="YES" name="bekerja" class="form-check-input" type="radio" id="b" onclick="x(0)">
                        <label class="form-check-label" for="b">
                          Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <input value="-" class="form-check-input" type="radio" name="bekerja" id="ab" onclick="x(1)">
                        <label class="form-check-label" for="ab">
                          No
                        </label>
                        <div class="mb-3 mt-2" id="bekerja">
                          <label for="beratbadan" class="form-label">Kapan Anda Resign?</label>
                          <input name="bekerja" required type="text" class="form-control" aria-describedby="emailHelp">
                          <label for="beratbadan" class="form-label">Kenapa Anda Resign?</label>
                          <input name="bekerja" required type="text" class="form-control" aria-describedby="emailHelp">
                        </div>
                      </div>

                      <div class="mb-2">
                        Apakah anda sedang mengikuti proses kuliah?
                      </div>
                      <div class="form-check">
                        <input value="YES" name="kuliah" class="form-check-input" type="radio" id="k" onclick="xt(0)">
                        <label class="form-check-label" for="k">
                          Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <input value="-" class="form-check-input" type="radio" name="kuliah" id="k" onclick="xt(1)">
                        <label class="form-check-label" for="k">
                          No
                        </label>
                        <div class="mb-3 mt-2" id="kuliah">
                          <label for="beratbadan" class="form-label">kelas yang anda ikuti reguler/karyawan?</label>
                          <input name="kuliah" required type="text" class="form-control" aria-describedby="emailHelp">
                        </div>
                      </div>

                      <div class="mb-2">
                        Apakah anda mempunyai keluarga atau kawan yang bekerja dalam group perusahaan kami?
                      </div>
                      <div class="form-check">
                        <input value="YES" name="relasi" class="form-check-input" type="radio" id="r" onclick="te(0)">
                        <label class="form-check-label" for="r">
                          Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <input value="-" class="form-check-input" type="radio" name="relasi" id="r" onclick="te(1)">
                        <label class="form-check-label" for="r">
                          No
                        </label>
                        <div class="mb-3 mt-2" id="relasi">
                          <label for="beratbadan" class="form-label">Nama</label>
                          <input name="relasi" required type="text" class="form-control" aria-describedby="emailHelp">
                          <label for="beratbadan" class="form-label">Jabatannya</label>
                          <input name="relasi" required type="text" class="form-control" aria-describedby="emailHelp">
                        </div>
                      </div>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">
                        <p class="mt-4">Berikan penjelasan singkat kenapa anda tertarik di perushaan ini?</p>
                      </label>
                      <input name="penjelasan" required type="text" class="form-control mb-3" id="exampleInputEmail1"
                        aria-describedby="emailHelp">


                      <div class="mb-3">
                        <label for="formFile" class="form-label fs">
                          <p>Upload Berkas Lamaran
                          </p>
                          Berkas Lamaran Berisi: <br>
                          1. KTP ASLI <br>
                          2. KARTU KELUARGA <br>
                          3. Pass Foto <br>
                          4. LAMARAN LENGKAP (Surat Lamaran, CV/Daftar Riwayat Hidup, Ijazah, SKHU/Transkip Nilai,
                          Keterangan Vaksin Terakhir, Surat Sehat Asli) <br>
                          <br>
                          -Jadikan dalam satu file PDF dengan ukuran file max 10 MB dan diberi nama : Berkas Lamaran
                          (spasi) Nama Lengkap (spasi) Posisi yang dilamar <br>
                          -Berkas lamaran yang diupload harus jelas dan bisa terbaca untuk dapat kami proses lebih
                          lanjut.
                        </label>
                        <input name="fileberkas" accept="application/pdf" multiple class="form-control" required
                          type="file" id="formFile">
                      </div>


                      <button name="submit" type="submit" class="btn  btn-warning text-light">Submit</button>

            </form>
          </div>
        </div>
    </div>
    </form>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <style>
    .yl {
      outline: none;
      border: none;
      border-bottom: silver 2px solid;
    }
  </style>
</body>

</html>