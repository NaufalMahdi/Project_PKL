<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="landing" class="w3-bar-item w3-button">Landing Page</a>
  <a href="landing" class="w3-bar-item w3-button">Data</a>
  <a href="landing" class="w3-bar-item w3-button">Kategori</a>
</div>

<div id="main">

<div class="w3-black">
  <button id="openNav" class="w3-button w3-black w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1></h1>
  </div>
</div>
</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

<h1>{{$judul}}</h1>
<p>{{$deskripsi}}</p>
<p>Kategori : {{$kategori}}</p>
<p>{{$tanggal}}</p>
<div class="row">
  <div class="column">
<table class="center">
    <tr>
        <th>NO</th>
        <th>KECAMATAN</th>
        <!-- <th>KECAMATAN</th> -->
        <th>JUMLAH</th>
        <th>FREKUENSI</th>

    </tr>
    @foreach($data as $id=>$d)
    <tr>
        <td>{{$id+1}}</td>
        <td>{{$d->data2}}</td>
        <!-- <td>{{$d->Ket}}</td> -->
        <td>{{$d->data1}}</td>
        <td>{{$d->frekuensi}}</td>
    </tr>
    @endforeach
</table>    

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
* {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: center;
  width: 100%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 50%;
  border: 1px solid #ddd;
}

th, td {
  text-align: center;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
table {text-align: center;}
</style>
</head>
<body>