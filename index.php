<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="icon" type="image/png" href="favicon.png"/>
      <title>Peminjaman Ruangan</title>
  </head>
  <body>
    <div>
    <!-- nav -->
    <nav id="mainNav" class="navbar navbar-default">
          <div class="container">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="proses.php">Cek Konfirmasi</a></li>
                        <li><a href="booked.php">Cek Ruangan</a></li>
                  </ul>
              </div>
          </div>
      </nav>
    <!-- nav close -->
    <link rel="stylesheet" type="text/css" href="style.css">
      <div class="row">
        <div class="column">
        <img src="logo.png" alt="logo" width="500" height="150">
        <h1><b>Fakultas Rekayasa Industri</b></h1>
        <h3>Form Peminjaman Ruangan Gd.B dan Gd.C</h3>
        
        <hr>
        <h3>Terms and Conditions</h3>
          <p>Please, read the terms and conditions below <strong>before</strong> filling out the form</p>
          <ul>
            <li><p>Kepanitiaan atau organisasi yang memiliki dosen Pembina, wajib meminta tanda tangan dosen Pembina. Untuk yang tidak mempunyai dosen Pembina, wajib meminta tanda tangan Ka. Ur. Kemahasiswaan Fakultas pemohon.</p></li>
            <li><p>Wajib menyertakan fotocopy KTM<p></li>
          <li><p>Fakultas tidak bertanggung jawab atas kegiatan yang dilaksanakan</p></li>
          <li><p>Fotocopy surat yang telah disetujui dipegang oleh Pemohon</p></li>
          </ul>   
        
        </div>

        <div class="column">
          <form action="input.php" method="POST" accept-charset="utf-8">
          <label for="name"><b>Nama Peminjam</b></label>
          <input type="text" placeholder="Nama" name="name" required>

          <label for="NIM"><b>NIM</b></label>
          <input type="text" placeholder="NIM" name="nim" required pattern="[0-9]+" maxlength="10">
      
          <label for="major"><b>Jurusan</b></label>
          <input type="text" placeholder="Jurusan" name="major" required>
      
      
          <label for="kode"><b>Kode Ruangan</b></label><br/>
          <select name="kode_ruang">
            <option selected="selected" disabled="disabled">Select one</option> 
            <option value="B101A">B101A</option>
            <option value="B101B">B101B</option>            
            <option value="B102A">B102A</option>
            <option value="B102B">B102B</option>
            <option value="B201A">B201A</option>            
            <option value="B201B">B201B</option>
            <option value="B301A">B301A</option>
            <option value="B301B">B301B</option>            
            <option value="C101">C101</option>
            <option value="C102">C102</option>
            <option value="C201">C201</option>            
            <option value="C202">C202</option>
            <option value="C301">C301</option>
            <option value="C302">C302</option>            
          </select>

      <br>
      <br>

          <label for="tanggalpinjam" class="grup-pilihan">Tanggal Peminjaman</label><br/>
          <input type="date" placeholder="DD MM YYYY" name="tanggal" id="myFile" required>
          
          <label for="waktupinjam" class="grup-pilihan">Waktu Peminjaman</label><br/>
          <input type="time" placeholder="--:--:--" name="waktu" id="myFile" required>

          <label>Lama Waktu Peminjaman</label>
            <select name="lama_pinjam">
              <option selected="selected" disabled="disabled">Select one</option> 
              <option value="1">1 jam</option>
              <option value="2">2 jam</option>
              <option value="3">3 jam</option>
              <option value="4">4 jam</option>
              <option value="5">5 jam</option>
            </select>
            <br>
            <br>
    
          <label for="keterangan"><b>Keterangan</b></label>
          <input type="text" placeholder="Nama Mata Kuliah atau Kepentingan" name="keterangan" required=""><br>
          
          <div>
            <button type="submit" name="submit" class="signupbtn-look">SUBMIT</button> 
          </div>
          <br>
          <br>
    </form>
    </div>
    <br>
    <br>
    <br>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
