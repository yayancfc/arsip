<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pegawai/simple-sidebar.css') }}">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

  <!-- Bootstrap core JavaScript -->
  
  <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Logo </div>
      <div class="list-group list-group-flush">
        <hr>
        <span style="width: 80%; margin-left: 70px;">Filter Surat</span>
<br>
            <div class="form-group " style="width: 80%; margin-left: 20px;">
              <select class="form-control" name="tahun">
                <option value="">Bulan</option>
                <option value="2018">Januari</option>
                <option value="2017">Februari</option>
                <option value="2016">Maret</option>
                <option value="2015">April</option>
                <option value="2014">Mei</option>
                <option value="2013">Juni</option>
                <option value="2012">Juli</option>
                <option value="2011">Agustus</option>
                <option value="2010">September</option>
                <option value="2009">Oktober</option>
                <option value="2008">November</option>
                <option value="2007">Desember</option>
              </select>
            </div>
      </div>

      <div class="list-group list-group-flush">
            <div class="form-group" style="width: 80%; margin-left: 20px;">
              <select class="form-control" name="tahun">
                <option value="">Tahun</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
              </select>
            </div>
      </div>


      <div class="list-group list-group-flush">
            <div class="form-group" style="width: 80%; margin-left: 20px;">
              <select class="form-control" name="tahun">
                <option value="">Kategori</option>
                <option value="2018">Kategori 1</option>
                <option value="2017">Kategori 2</option>
                <option value="2016">Kategori 3</option>
              </select>
            </div>
      </div>

      <div class="list-group list-group-flush">
            <div class="form-group" style="width: 80%; margin-left: 20px;">
              <button class="btn btn-primary" style="width: 100%;">Filter</button>
            </div>
      </div>

    </div>
    <!-- /#sidebar-wrapper -->

    @yield('content')

    
  </div>
  <!-- /#wrapper -->


  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>