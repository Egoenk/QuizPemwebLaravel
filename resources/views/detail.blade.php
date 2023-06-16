<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>H1D021009 | QUIZ PEMWEB II</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h4>H1D021009 | Quiz Pemrograman WEB II</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="/">Tabel Tugas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/addData">Tambah Tugas</a>
      </li>
    </ul>
  </div>
</nav>
  <!---------- Hia ------------->
  <div class="container">
    <h1>Detail Tugas </h1>
		<div>
    <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input value="{{ $laporan->judul }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Judul" name='judul' readonly>
                <small id="emailHelp" class="form-text text-muted">Judul Tugas</small>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='deskripsi' readonly>{{ $laporan->judul }}</textarea>
                <small id="emailHelp" class="form-text text-muted">Deskripsi Tugas</small>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="exampleFormControlSelect1" name='status' readonly>
                  @if ( $laporan->id_status==1)
                  <option value='2' disabled>Selesai</option>
                  <option value='1' selected>Belum Selesai</option>
                  @else
                  <option value='2' selected>Selesai</option>
                  <option value='1' disabled>Belum Selesai</option>
                  @endif
                </select>
                <small id="emailHelp" class="form-text text-muted">Status Laporan</small>
            </form>

    </div>
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>