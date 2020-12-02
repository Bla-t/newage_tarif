<!DOCTYPE html>
<html lang="id">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Tarif</title>
  <meta charset="utf-8">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="mainpage.css">
  <script type="text/javascript">

    // function hit(){ 

    //          var dari = document.getElementById("tarif-from").value;              
    //          var isi = document.getElementById("isi"); 
    //          var kober = document.getElementById("bet"); 
    //          var tipe =document.getElementById("set"); 
    //         // var k3 = document.getElementById("vol");          


    //           if (dari == "BGR") {  

    //                 isi.style.display = "block";
    //                 kober.style.display = "none";
    //                 tipe.style.display = "block"; 
    //               // k3.style.display = "none";

    //           } 

    //           else {
                   
    //               isi.style.display ="none";
    //               kober.style.display ="block";
    //               tipe.style.display ="none";
                   
    //           }
               

                                              
    //          }
  </script>
  <style>
      h2{
          color:#002350;
      }
  </style>
</head>
<body>
 <div class="container-fluid">
    <div class="col-md-12 mb-12">
      <h2 style="text-align: center">Cek Tarif</h2>
      <form method="post">
        <div class="form-group row">
          <div class="col-md-12">
            <select class="form-control" id="tarif-from" name="prom" onchange="GET(this)" required>

                  <option selected disabled value="">Dari :</option>
                  
                  <option disabled style="color: #BBA255;">----Jakarta Tanah Abang-----</option>
                  
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

                  <option disabled style="color:  #39929d;">----------JAWA BARAT-----------</option>

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

                  <option disabled style="color: #39929d;">-----------JAWA Tengah-----------</option>

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

                  <option disabled style="color: #39929d;">-----------JAWA TIMUR-----------</option> 
              
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
              
                  <option disabled style="color: #39929d; ">-----------Bali-----------</option>

                  <option value="BALI"> Denpasar</option>

                  <option value="BALI"> Tabanan</option>

                  <option value="BALI"> Nusa Dua</option>

                  <option value="BALI"> Singaraja</option>

                  <option disabled style="color: #39929d; ">-----------Sumatra-----------</option>

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
             <select class="form-control" id="tarif-to" name="tujuan" onchange="GAT(this)" required>
                  <option selected disabled value="">Tujuan :</option>

                  <option disabled style="color:  #39929d;">----------JAWA BARAT-----------</option>

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

                  <option disabled style="color: #39929d;">-----------JAWA Tengah-----------</option>

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

                  <option disabled style="color: #39929d;">-----------JAWA TIMUR-----------</option> 
              
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
              
                  <option disabled style="color: #39929d; ">-----------Bali-----------</option>

                  <option value="DENPASAR"> Denpasar</option>

                  <option value="TABANAN"> Tabanan</option>

                  <option value="NUSA DUA"> Nusa Dua</option>

                  <option value="SINGARAJA"> Singaraja</option>

                  <option disabled style="color: #39929d; ">-----------Sumatra-----------</option>
                 
                  <option value="BANDAR"> Bandar Lampung</option>

                  <option value="PALEMBANG"> Palembang</option>

                  <option value="JAMBI"> Jambi</option>
                  
                  <option class="sumut" disabled style="color: #39929d; display:block;">-----------Sumatra Utara-----------</option>
                  
                  <option class="sumut" style="display:block;" value="PEKANBARU"> Pekan Baru</option>
                  
                  <option class="sumut" style="display:block;" value="MEDAN">Medan</option>
                  
                  <option class="sumut" style="display:block;" value="TEBING TINGGI">Tebing Tinggi</option>
                  
                  <option class="sumut" style="display:block;" value="TEBING TINGGI">Pangkalan Susu</option>
                  
                  <option class="sumut" style="display:block;" value="TEBING TINGGI"> Padang Pariaman</option>
                  
                  <option class="sumut" style="display:block;" value="PEMATANG SIANTAR">Pematang Siantar</option>
                  
                  <option class="sumut" style="display:block;" value="PARAPAT">Parapat</option>
                  
                  <option class="sumut" style="display:block;" value="PORSEA">Porsea</option>
                  
                  <option class="sumut" style="display:block;" value="LAGUBOTI">Laguboti</option>
                  
                  <option class="sumut" style="display:block;" value="SIBORONG-BORONG">Siborong-Borong</option>
                  
                  <option class="sumut" style="display:block;" value="BALIGE">Balige</option>
                  
                  <option class="sumut" style="display:block;" value="TARUTUNG">Tarutung</option>
                  
                  <option class="sumut" style="display:block;" value="SIBOLGA">Sibolga</option>
                  
                  <option class="sumut" style="display:block;" value="PANDAN">Pandan</option>
                  
                  <option class="sumut" style="display:block;" value="BATANG TORU">Batang Toru</option>
                  
                  <option class="sumut" style="display:block;" value="PAYABUNGAN">Payabungan</option>
                  
                  <option class="sumut" style="display:block;" value="NATAL">Natal</option>
                  
                  <option class="sumut" style="display:block;" value="SIPIROK">Sipirok</option>
                  
                  <option class="sumut" style="display:block;" value="GUNUNG TUA">Gunung Tua</option>
                  
                  <option class="sumut" style="display:block;" value="SIBUHUAN">Sibuhuan</option>
                  
                  <option class="sumut" style="display:block;" value="KOTA PINANG">Kota Pinang</option>
                  
                  <option class="sumut" style="display:block;" value="RANTAU PRAPAT">Rantau Prapat</option>
                  
                  <option class="sumut" style="display:block;" value="AEK KANOPAN">Aek Kanopan</option>
                  
                  <option class="sumut" style="display:block;" value="TANJUNG BALAI">Tanjung Balai</option>
                  
                  <option class="sumut" style="display:block;" value="KISARAN">Kisaran</option>
                  
                  <option class="sumut" style="display:block;" value="BATU BARA">Batu Bara</option>
                  
                  <option class="sumut" style="display:block;" value="PERDAGANGAN">Perdagangan</option>
                  
                  <option class="sumut" style="display:block;" value="DOLOK SANGGUL">Dolok Sanggul</option>
                  
                  <option class="sumut" style="display:block;" value="PANGURURAN SAMOSIR">Pangururan Samosir</option>
                  
                  <option class="sumut" style="display:block;" value="SIDIKALANG">Sidikalang</option>
                  
                  <option class="sumut" style="display:block;" value="KABANJAHE">Kabanjahe</option>
                  
                  <option class="sumut" style="display:block;" value="BERASTAGI">Berastagi</option>
                  
                  <option class="sumut" style="display:block;" value="BINJAI">Binjai</option>
                  
                  <option class="sumut" style="display:block;" value="STABAT">Stabat</option>
                  
                  <option class="sumut" style="display:block;" value="BRANDAN">Brandan</option>
                  
                  <option class="smb" disabled style="color: #39929d; display:block;">-----------Sumatra Barat-----------</option>
                  
                  <option class="smb" style="display:block;" value="BUKIT TINGGI"> Bukit Tinggi</option>
                  
                  <option class="smb" style="display:block;" value="PADANG">Padang</option>
                  
                  <option class="smb" style="display:block;" value="PAYAKUMBUH"> Payakumbuh</option>
                  
                  <option class="smb" style="display:block;" value="PARIAMAN">Pariaman</option>
                  
                  <option class="smb" style="display:block;" value="BATU SANGKAR">Batu Sangkar</option>
                  
                  <option class="smb" style="display:block;" value="PADANG PANJANG">Padang Panjang</option>
                  
                  <option class="smb" style="display:block;" value="SOLOK">Solok</option>
                  
                  <option class="smb" style="display:block;" value="SAWAH LUNTO">Sawah Lunto</option>
                  
                  <option class="smb" style="display:block;" value="AGAM">Agam</option>
                  
                  <option disabled style="color: #39929d; ">-----------Kalimantan Timur-----------</option>
                  
                  <option value="BALIKPAPAN"> Balikpapan</option>
                  
                  <option value="SAMARINDA"> Samarinda</option>
                  
                  <option value="TENGGARONG">Tenggarong</option>
                  
                  <option disabled style="color: #39929d; ">-----------Kalimantan Selatan-----------</option>
                  
                  <option value="BANJARBARU"> Banjarbaru</option>
                  
                  <option value="BANJARMASIN"> Banjarmasin</option>
                  
                  <option value="MARTAPURA"> Martapura</option>
                  
                  <option disabled style="color: #39929d; ">-----------Kalimantan Tengah-----------</option>
                  
                  <option value="PALANGKARAYA"> Palangkaraya</option>
                  
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
          <label for="tarif-to" class="col-md-12 offset-md-12">Volume :</label> 
            <div class="col-md-12">
              <div class="input-group mb-3">
                <input type="text" name="le" placeholder="Panjang" class="form-control">
                (cm)x<input type="text" name="pa" placeholder="Lebar" class="form-control">
                (cm)x<input type="text" name="ti" placeholder="Tinggi" class="form-control">(cm)
              </div>
              <input id="get" hidden value="" name="da">
              <input id="gat" hidden value="" name="tu">
            </div>
        </div>   
        <div class="row">
          <div class="col-md-6 offset-md-3" style="text-align: center">
            <button type="submit" class="btn btn-primary btn-mainpage btn-lg" id="tombol">Cek Harga</button>
            <div class="row">
              <div class="col-md-12 offset-md-12 mt-12" style="text-align: center">
             <h5 class="font-weight-normal">
              <?php               

              include("fxex.php");

              ?></h5>
            </div>
            </div>
          </div>
        </div> 
    </form>
  </div>
  <script  type="text/javascript">
      function GET(ddl){
          
          var paramex = document.getElementById("tarif-from").value;
          if(paramex == "PKB" || paramex == "MED"){
              $('.smb').css('display','none').prop('disabled',true);
              $('.sumut').css('display','block').prop('disabled',false);
          }
          else if(paramex == "PDG"){
              $('.sumut').css('display','none').prop('disabled',true);
              $('.smb').css('display','block').prop('disabled',false);
            //  smt3.style.display = "none";
          }
          
          document.getElementById('get').value=ddl.options[ddl.selectedIndex].text;
      }
      function GAT(ddl){
          document.getElementById('gat').value=ddl.options[ddl.selectedIndex].text;
      }
  </script>
 </body>
</html>