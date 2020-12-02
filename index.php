<!DOCTYPE html>
<html lang="id">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Tarif</title>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script type="text/javascript">
    // function hit(){ 

            //  var dari = document.getElementById("tarif-from").value;              
            //  var isi = document.getElementById("isi"); 
            //  var kober = document.getElementById("bet"); 
            //  var tipe =document.getElementById("set"); 
            // // var k3 = document.getElementById("vol");          


            //   if (dari == "BGR") {  

            //         //isi.style.display = "block";
            //         //kober.style.display = "none";
            //         //tipe.style.display = "block"; 
            //       // k3.style.display = "none";

            //   } 

            //   else {
                   
            //       isi.style.display ="none";
            //       kober.style.display ="block";
            //       tipe.style.display ="none";
                   
            //   }
               

                                              
            //  }
  </script>
  
  <style>
      body{
          background-color:#182543;
          color:yellow;
      }
      h2{
          color:#DC7800;
      }
      .form-control{
          background-color:#99FEF5;
      }
      .btn-warning{
          background-color:#AF5C05;
      }
      
  </style>
</head>
<body>
 <div class="container-fluid">
    <div class="col-md-12 mb-12">
     <h2 style="text-align: center"></h2>
      <form method="post">
        <div class="form-group row">
          <div class="col-md-12">
            <select class="form-control" id="tarif-from" name="prom" onchange="GET(this)" required>

                  <option selected disabled value="">Dari :</option>
                  
                  <option disabled style="color: #BBA255; font-weight:bold;">----Jakarta Tanah Abang-----</option>
                  
                  <option value="TNH"> Cideng</option>
                  
                  <option value="TNH"> Kampung Bali</option>
                  
                  <option value="TNH"> Blok B</option>
                  
                  <option value="TNH"> Nagalintas</option>
                  
                  <option value="TNH"> Jati Negara</option>
                  
                  <option value="TNH"> Tongkol</option>
                  
                  <option value="TNH"> Krekot</option>
                  
                  <option value="TNH"> Sunter</option>
                  
                  <option value="TNH"> Kapuk</option>
                  
                  <option value="TNH"> Perniagaan</option>
                  
                  <option value="TNH"> Asemka</option>

                  <option disabled style="color:  #39929d; font-weight:bold;">----------JAWA BARAT-----------</option>

                  <option value="jak1"> Jakarta</option>
              
                  <option value="jak1"> Depok</option>
              
                  <option value="jak1"> Bekasi</option>
                              
                  <option value="SRG"> Tangerang</option>
              
                  <option value="SRG"> Cikarang</option>
              
                  <option value="JTG2"> Purwakarta</option>
                  
                  <option value="JTG2"> Pamanukan</option>
              
                  <option value="SRG"> Karawang</option>

                  <option value="JTG2"> Indramayu</option>

                  <option value="SRG"> Serang</option>
              
                  <option value="SRG"> Bogor</option>
            
                  <option value="JTG2"> Cirebon</option>
              
                  <option value="BDG"> Bandung</option>
              
                  <option value="JBR"> Garut</option>

                  <option value="JBR"> Tasik</option>

                  <option value="SRG"> Sukabumi</option>
                  
                  <option value="SRG"> Cianjur</option>

                  <option disabled style="color: #39929d; font-weight:bold;">-----------JAWA Tengah-----------</option>

                  <option value="JTG3"> Purwokerto</option>

                  <option value="JTG3"> Kebumen</option>

                  <option value="JTG2"> Tegal</option>

                  <option value="JTG2"> Pemalang</option>

                  <option value="JTG2"> Pekalongan</option>

                  <option value="JBR"> Banjar Patroman</option>

                  <option value="JTG1"> Semarang</option>
                  
                  <option value="JTG1"> Blora</option>
                  
                  <option value="JTG1"> Kendal</option>

                  <option value="JTG1"> Kudus</option>

                  <option value="JTG1"> Jogja</option>

                  <option value="JTG1"> Kelaten</option>

                  <option value="JTG1"> Salatiga</option>

                  <option value="JTG1"> Solo</option>
                  
                  <option value="JTG1"> Sragen</option>

                  <option value="JTG1"> Magelang</option>

                  <option disabled style="color: #39929d; font-weight:bold;">-----------JAWA TIMUR-----------</option> 
              
                  <option value="SBY"> Surabaya</option>

                  <option value="JTM1">Bangkalan</option>

                  <option value="JTM1"> Bojonegoro</option>

                  <option value="JTM1"> Gresik</option>

                  <option value="JTM1"> Sidoarjo</option>

                  <option value="JTM1"> Mojokerto</option>

                  <option value="JTM1"> Malang</option>

                  <option value="JTM1"> Kediri</option>

                  <option value="JTM1S"> Blitar</option>

                  <option value="JTM1S"> Tulungagung</option>
                  
                  <option value="JTM1S">Trenggalek</option>

                  <option value="JTM2U"> Pasuruhan</option>

                  <option value="JTM2U"> Probolinggo</option>

                  <option value="JTM1S"> Nganjuk</option>
                  
                  <option value="JTM1S"> Ngawi</option>

                  <option value="JTM1S"> Madiun</option>
                  
                  <option value="JTM1S"> Magetan</option>
                  
                  <option value="JTM1S"> Ponorogo</option>

                  <option value="JTM2U"> Jember</option>
                  
                  <option value="JTM2"> Pamekasan</option>

                  <option value="JTM2"> Lumajang</option>

                  <option value="JTM2"> Banyuwangi</option>
              
                  <option disabled style="color: #39929d; font-weight:bold;">-----------Bali-----------</option>

                  <option value="BALI"> Denpasar</option>

                  <option value="BALI"> Tabanan</option>

                  <option value="BALI"> Nusa Dua</option>

                  <option value="BALI"> Singaraja</option>

                  <option disabled style="color: #39929d; font-weight:bold;">-----------Sumatra-----------</option>

                  <option value="LPG"> Bandar Lampung</option>

                  <option value="PLB"> Palembang</option>

                  <option value="JBI"> Jambi</option>

                  <option value="PKB"> Pekan Baru</option>
                  
                  <option value="PDG"> Padang</option>
                  
                  <option value="MED"> Medan</option>
            </select>            
          </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
             <select class="form-control" id="tarif-to" name="tujuan" onchange="GOT(this)" required>
                  <option selected disabled value="">Tujuan :</option>

                  <option disabled style="color:  #39929d; font-weight:bold;">----------JAWA BARAT-----------</option>

                  <option value="JAKARTA"> Jakarta</option>
              
                  <option value="DEPOK"> Depok</option>
               
                  <option value="BEKASI"> Bekasi</option>
                              
                  <option value="TANGERANG"> Tangerang</option>
              
                  <option value="CIKARANG"> Cikarang</option>
               
                  <option value="PURWAKARTA"> Purwakarta</option>
                  
                  <option value="PAMANUKAN"> Pamanukan</option>

                  <option value="KARAWANG"> Karawang</option>
               
                  <option value="INDRAMAYU"> Indramayu</option>

                  <option value="SERANG"> Serang</option>
              
                  <option value="BOGOR"> Bogor</option>
            
                  <option value="CIREBON"> Cirebon</option>
              
                  <option value="BANDUNG"> Bandung</option>
              
                  <option value="GARUT"> Garut</option>

                  <option value="TASIKMALAYA"> Tasik</option>

                  <option value="SUKABUMI"> Sukabumi</option>
                  
                  <option value="CIANJUR" > Cianjur</option>

                  <option disabled style="color: #39929d; font-weight:bold;">-----------JAWA Tengah-----------</option>

                  <option value="PURWOKERTO"> Purwokerto</option>

                  <option value="KEBUMEN"> Kebumen</option>

                  <option value="TEGAL"> Tegal</option>

                  <option value="PEMALANG"> Pemalang</option>

                  <option value="PEKALONGAN"> Pekalongan</option>

                  <option value="BANJAR PATROMAN"> Banjar Patroman</option>

                  <option value="KUDUS"> Kudus</option>

                  <option value="SEMARANG"> Semarang</option>
                  
                  <option value="BLORA"> Blora</option>
                  
                  <option value="KENDAL"> Kendal</option>
               
                  <option value="JEPARA"> Jepara/Pati</option>

                  <option value="JOGJA"> Jogja</option>

                  <option value="KLATEN"> Kelaten</option>

                  <option value="SALATIGA"> Salatiga</option>

                  <option value="SOLO"> Solo</option>
                  
                  <option value="SOLO"> Sragen</option>

                  <option value="MAGELANG"> Magelang</option>

                  <option disabled style="color: #39929d; font-weight:bold;">-----------JAWA TIMUR-----------</option> 
              
                  <option value="SURABAYA"> Surabaya</option>

                  <option value="BANGKALAN"> Bangkalan</option>

                  <option value="BOJONEGORO"> Bojonegoro</option>

                  <option value="GRESIK"> Gresik</option>

                  <option value="SIDOARJO"> Sidoarjo</option>

                  <option value="MOJOKERTO"> Mojokerto</option>

                  <option value="MALANG"> Malang</option>

                  <option value="KEDIRI"> Kediri</option>

                  <option value="BLITAR"> Blitar</option>

                  <option value="TULUNGAGUNG"> Tulungagung</option>
                  
                  <option value="TULUNGAGUNG"> Trenggalek</option>

                  <option value="PASURUHAN"> Pasuruhan</option>

                  <option value="PROBOLINGGO"> Probolinggo</option>

                  <option value="NGANJUK"> Nganjuk</option>
                  
                  <option value="NGAWI"> Ngawi</option>

                  <option value="MADIUN"> Madiun</option>

                  <option value="PONOROGO"> Ponorogo</option>
                  
                  <option value="MAGETAN"> Magetan</option>

                  <option value="JEMBER"> Jember</option>
                  
                  <option value="PAMEKASAN"> Pamekasan</option>

                  <option value="LUMAJANG"> Lumajang</option>

                  <option value="BANYUWANGI"> Banyuwangi</option>
              
                  <option disabled style="color: #39929d; font-weight:bold;">-----------Bali-----------</option>

                  <option value="DENPASAR"> Denpasar</option>

                  <option value="TABANAN"> Tabanan</option>

                  <option value="NUSA DUA"> Nusa Dua</option>

                  <option value="SINGARAJA"> Singaraja</option>

                  <option disabled style="color: #39929d; font-weight:bold;">-----------Sumatra-----------</option>
                 
                  <option value="BANDAR"> Bandar Lampung</option>

                  <option value="PALEMBANG"> Palembang</option>

                  <option value="JAMBI"> Jambi</option>
                  
                  <option class="sumut" disabled style="color: #39929d; display: block; font-weight:bold;">-----------Sumatra Utara-----------</option>
                  
                  <option class="sumut" value="PEKANBARU" style="display: block;"> Pekan Baru</option>
                  
                  <option class="sumut" value="MEDAN" style="display: block;">Medan</option>
                  
                  <option class="sumut" value="TEBING TINGGI" style="display: block;">Tebing Tinggi</option>
                  
                  <option class="sumut" value="TEBING TINGGI" style="display: block;">Pangkalan Susu</option>
                  
                  <option class="sumut" value="TEBING TINGGI" style="display: block;">Padang Pariaman</option>
                  
                  <option class="sumut" value="PADANG SIDEMPUAN" style="display: block;">Padang Sidempuan</option>
                  
                  <option class="sumut" value="PEMATANG SIANTAR" style="display: block;">Pematang Siantar</option>
                  
                  <option class="sumut" value="PARAPAT"style="display: block;">Parapat</option>
                  
                  <option class="sumut" value="PORSEA"style="display: block;">Porsea</option>
                  
                  <option class="sumut" value="LAGUBOTI"style="display: block;">Laguboti</option>
                  
                  <option class="sumut" value="SIBORONG-BORONG"style="display: block;">Siborong-Borong</option>
                  
                  <option class="sumut" value="BALIGE"style="display: block;">Balige</option>
                  
                  <option class="sumut" value="TARUTUNG"style="display: block;">Tarutung</option>
                  
                  <option class="sumut" value="SIBOLGA"style="display: block;">Sibolga</option>
                  
                  <option class="sumut" value="PANDAN"style="display: block;">Pandan</option>
                  
                  <option class="sumut" value="BATANG TORU"style="display: block;">Batang Toru</option>
                  
                  <option class="sumut" value="PAYABUNGAN"style="display: block;">Payabungan</option>
                  
                  <option class="sumut" value="NATAL"style="display: block;">Natal</option>
                  
                  <option class="sumut" value="SIPIROK"style="display: block;">Sipirok</option>
                  
                  <option class="sumut" value="GUNUNG TUA"style="display: block;">Gunung Tua</option>
                  
                  <option class="sumut" value="SIBUHUAN"style="display: block;">Sibuhuan</option>
                  
                  <option class="sumut" value="KOTA PINANG"style="display: block;">Kota Pinang</option>
                  
                  <option class="sumut" value="RANTAU PRAPAT"style="display: block;">Rantau Prapat</option>
                  
                  <option class="sumut" value="AEK KANOPAN"style="display: block;">Aek Kanopan</option>
                  
                  <option class="sumut" value="TANJUNG BALAI"style="display: block;">Tanjung Balai</option>
                  
                  <option class="sumut" value="KISARAN"style="display: block;">Kisaran</option>
                  
                  <option class="sumut" value="BATU BARA"style="display: block;">Batu Bara</option>
                  
                  <option class="sumut" value="PERDAGANGAN"style="display: block;">Perdagangan</option>
                  
                  <option class="sumut" value="DOLOK SANGGUL"style="display: block;">Dolok Sanggul</option>
                  
                  <option class="sumut" value="PANGURURAN SAMOSIR"style="display: block;">Pangururan Samosir</option>
                  
                  <option class="sumut" value="SIDIKALANG"style="display: block;">Sidikalang</option>
                  
                  <option class="sumut" value="KABANJAHE"style="display: block;">Kabanjahe</option>
                  
                  <option class="sumut" value="BERASTAGI"style="display: block;">Berastagi</option>
                  
                  <option class="sumut" value="BINJAI"style="display: block;">Binjai</option>
                  
                  <option class="sumut" value="STABAT"style="display: block;">Stabat</option>
                  
                  <option class="sumut" value="BRANDAN"style="display: block;">Brandan</option>
                  
                  <option class="smb" disabled style="color: #39929d; display: block; font-weight:bold;">----------Sumatra Barat------</option>
                  
                  <option class="smb" value="BUKIT TINGGI" style="display: block;"> Bukit Tinggi</option>
                  
                  <option class="smb" value="PADANG" style="display: block;">Padang</option>
                  
                  <option class="smb" value="PAYAKUMBUH" style="display: block;"> Payakumbuh</option>
                  
                  <option class="smb" value="PARIAMAN" style="display: block;">Pariaman</option>
                  
                  <option class="smb" value="BATU SANGKAR" style="display: block;">Batu Sangkar</option>
                  
                  <option class="smb" value="PADANG PANJANG" style="display: block;">Padang Panjang</option>
                  
                  <option class="smb" value="SOLOK" style="display: block;" >Solok</option>
                  
                  <option class="smb" value="SAWAH LUNTO" style="display: block;">Sawah Lunto</option>
                  
                  <option class="smb" value="AGAM" style="display: block;">Agam</option>
                  
                  <option disabled style="color: #39929d; font-weight:bold;">-----------Kalimantan Timur-----------</option>
                  
                  <option value="BALIKPAPAN"> Balikpapan</option>
                  
                  <option value="SAMARINDA"> Samarinda</option>
                  
                  <option value="TENGGARONG">Tenggarong</option>
                  
                  <option disabled style="color: #39929d; font-weight:bold;">-----------Kalimantan Selatan-----------</option>
                  
                  <option value="BANJARBARU"> Banjarbaru</option>
                  
                  <option value="BANJARMASIN"> Banjarmasin</option>
                  
                  <option value="MARTAPURA"> Martapura</option>
                  
                  <option disabled style="color: #39929d; ">-----------Kalimantan Tengah-----------</option>
                  
                  <option value="PALANGKA RAYA"> Palangkaraya</option>
                  
             </select>            
            </div>
         </div>         
        <div class="form-group row">
          <div class="col-md-12">
            <div class="input-group mb">
              <input type="text" class="form-control" name="brt" id="bet" placeholder="Berat (KG) :" style="display: block;">&emsp;&emsp;
              <input type="text" class="form-control" name="kol" id="isi" placeholder="  Koli" style="display: none;">&emsp;&emsp; 
              <select class="form-control" id="set" name="pil" style="display: none;">
                <option disabled selected value=""> Jenis Barang :</option>
                <option value="spt"> Sparepart</option>
                <option value="stu"> Sepatu</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group row" id="vol" style="display: block;">
          <label for="tarif-to" class="col-md-12 offset-md-12 font-weight-bold">Total Volume :</label> 
            <div class="col-md-12">
              <div class="input-group mb-3">
                  <div class="col">
                <input type="number" step="any" name="vol" placeholder="volume" class="form-control">
                <input class="form-control" hidden id="tex1" name="da" value="">
                <input class="form-control" hidden id="tex2" name="tuj" value="">
                </div>
                <div class="col">
                    <h4 class="font-weight-bold">( m³ )</h4>
                </div>
              </div>
            </div>
        </div>   
        <div class="row">
          <div class="col-md-8 offset-md-2" style="text-align: center">
            <button type="submit" class="btn btn-warning btn-mainpage btn-lg" id="tombol">Cek Harga</button>
            <!--<div class="row">
              <div class="col-md-12 offset-md-12 mt-12" style="text-align: center">-->
                 <h5 class="font-weight-normal" style="color:#FFD100;">
                  <?php 
                  include("fx.php");
                  ?></h5>
            <!--</div>
                </div>-->
          </div>
        </div> 
    </form>
  </div>
  </div>
  <script type="text/javascript">
        function GET(ddl) {
            var para = document.getElementById('tarif-from').value;
            // var x1 = document.getElementsByClassName('smb');
            // var sut = document.getElementsByClassName('sumut');
            
            if(para == "PKB" || para == "MED" ){
                
               $('.smb').css('display','none').prop('disabled',true);
               $('.sumut').css('display','block').prop('disabled',false);
            }
            else if(para == "PDG"){
               $('.sumut').css('display','none').prop('disabled',true);
               $('.smb').css('display','block').prop('disabled',false);
                
            }
            else {
                
            }
            
                document.getElementById('tex1').value = ddl.options[ddl.selectedIndex].text;
    }
        function GOT(ddl) {
        document.getElementById('tex2').value = ddl.options[ddl.selectedIndex].text;
    }
    </script>
 </body>
</html>

