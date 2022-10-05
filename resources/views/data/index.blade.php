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


<h1>DATA PERTANIAN TAHUN 2021</h1>
<p>Berikut ini merupakan data dari hasil <br/> 
    pada tahun 2021 di kabupaten lumajang
</p>

<div class="row">
  <div class="column">
<table class="center">
    <tr>
        <th>NO</th>
        <th>KATEGORI</th>
        <th>KECAMATAN</th>
        <th>JUMLAH</th>
        <th>FREKUENSI</th>

    </tr>

    @foreach($data as $d)

    <tr>
        <td>{{$d->kdData}}</td>
        <td>{{$d->idKategori}}</td>
        <td>{{$d->data2}}</td>
        <td>{{$d->data1}}</td>
        <td>{{$d->frekuensi}}</td>
    </tr>
    @endforeach
</table>    