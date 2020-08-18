<!DOCTYPE html>
<html lang="id">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Tarif</title>
  <meta charset="utf-8">
  <script src="ajax.googleapis.js"></script>
  <script src="cdnjs.cloudflare.js"></script>
  <script src="bootstrapcdn.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="common.css">.
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="mainpage.css">
  <script type="text/javascript">

    function hit(){ 

             var dari = document.getElementById("tarif-from").value;              
             var isi = document.getElementById("isi"); 
             var kober = document.getElementById("bet"); 
             var tipe =document.getElementById("set"); 
            // var k3 = document.getElementById("vol");          


               if (dari == "BGR") {  

                    isi.style.display = "block";
                    kober.style.display = "none";
                    tipe.style.display = "block"; 
                   // k3.style.display = "none";

               } 

               else isi.style.display ="none";

                                              
             }

             // document.getElementById("jl").addEventListener("mouseover",cek);

             // function cek(){

             //  document.getElementById("ii").style.display = "block";

             // }

  </script>
</head>
<body>
 <div class="container-fluid">
    <div class="col-md-12 mb-12">
      <h2 style="text-align: center">Cek Tarif</h2>
      <form method="post">
        <div class="form-group row">
          <div class="col-md-12">
            <select class="form-control" id="tarif-from" name="prom" onchange="hit();" required>

                <option selected disabled value="">Dari :</option>

                  <option disabled style="color: #BBA255;">----Jakarta Tanah Abang-----</option>
                  
                  <option value="TNH"> Cideng</option>
                  
                  <option value="TNH"> Kampung Bali</option>
                  
                  <option value="TNH"> Blok B</option>
                  
                  <option value="TNH"> Nagalintas</option>
                  
                  <option value="TNH"> Jati Negara</option>

                  <option disabled style="color:  #39929d;">----------JAWA BARAT-----------</option>

                  <option value="jak1"> Jakarta</option>
              
                  <option value="jak1"> Depok</option>
              
                  <option value="jak1"> Bekasi</option>
                              
                  <option value="SRG"> Tangerang</option>
              
                  <option value="SRG"> Cikarang</option>      
                                
                  <option value="JTG2"> Purwakarta</option>
              
                  <option value="SRG"> Karawang</option>

                  <option value="JTG2"> Indramayu</option>

                  <option value="SRG"> Serang</option>
              
                  <option value="BGR"> Bogor</option>
            
                  <option value="JTG2"> Cirebon</option>
              
                  <option value="BDG"> Bandung</option>
              
                  <option value="JBR"> Garut</option>

                  <option value="JBR"> Tasik</option>

                  <option value="SRG"> Sukabumi</option>

                  <option disabled style="color: #39929d;">-----------JAWA Tengah-----------</option>

                  <option value="JTG3"> Purwokerto</option>

                  <option value="JTG3"> Kebumen</option>

                  <option value="JTG2"> Tegal</option>

                  <option value="JTG2"> Pemalang</option>

                  <option value="JTG2"> Pekalongan</option>

                  <option value="JBR"> Banjar Patroman</option>

                  <option value="JTG1"> Semarang</option>

                  <option value="JTG1"> Kudus</option>

                  <option value="JTG1"> Jogja</option>

                  <option value="JTG1"> Kelaten</option>

                  <option value="JTG1"> Salatiga</option>

                  <option value="JTG1"> Solo</option>

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

                  <option value="JTM2"> Pasuruhan</option>

                  <option value="JTM2"> Probolinggo</option>

                  <option value="JTM1S"> Nganjuk</option>

                  <option value="JTM1S"> Madiun</option>

                  <option value="JTM2U"> Jember</option>

                  <option value="JTM2U"> Lumajang</option>

                  <option value="JTM2U"> Banyuwangi</option>
              
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
            </select>            
          </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
             <select class="form-control" id="tarif-to" name="tujuan" required>
                  <option selected disabled value="">Tujuan :</option>

                  <option disabled style="color:  #39929d;">----------JAWA BARAT-----------</option>

                  <option value="JAKARTA"> Jakarta</option>
              
                  <option value="DEPOK"> Depok</option>
               
                  <option value="BEKASI"> Bekasi</option>
                              
                  <option value="TANGERANG"> Tangerang</option>
              
                  <option value="CIKARANG"> Cikarang</option>
               
                  <option value="PURWAKARTA"> Purwakarta</option>

                  <option value="KARAWANG"> Karawang</option>
               
                  <option value="INDRAMAYU"> Indramayu</option>

                  <option value="SERANG"> Serang</option>
              
                  <option value="BOGOR"> Bogor</option>
            
                  <option value="CIREBON"> Cirebon</option>
              
                  <option value="BANDUNG"> Bandung</option>
              
                  <option value="GARUT"> Garut</option>

                  <option value="TASIK"> Tasik</option>

                  <option value="SUKABUMI"> Sukabumi</option>

                  <option disabled style="color: #39929d;">-----------JAWA Tengah-----------</option>

                  <option value="PURWOKERTO"> Purwokerto</option>

                  <option value="KEBUMEN"> Kebumen</option>

                  <option value="TEGAL"> Tegal</option>

                  <option value="PEMALANG"> Pemalang</option>

                  <option value="PEKALONGAN"> Pekalongan</option>

                  <option value="BANJAR PATROMAN"> Banjar Patroman</option>

                  <option value="KUDUS"> Kudus</option>

                  <option value="SEMARANG"> Semarang</option>
               
                  <option value="JEPARA"> Jepara/Pati</option>

                  <option value="JOGJA"> Jogja</option>

                  <option value="KLATEN"> Kelaten</option>

                  <option value="SALATIGA"> Salatiga</option>

                  <option value="SOLO"> Solo</option>

                  <option value="MAGELANG"> Magelang</option>

                  <option disabled style="color: #39929d;">-----------JAWA TIMUR-----------</option> 
              
                  <option value="SURABAYA"> Surabaya</option>

                  <option value="BANGKALAN"> Bangkalan</option>

                  <option value="BOJONEGORO"> Bojonegoro</option>

                  <option value="GRESIK"> Gresik</option>

                  <option value="SIDARJO"> Sidoarjo</option>

                  <option value="MOJOKERTO"> Mojokerto</option>

                  <option value="MALANG"> Malang</option>

                  <option value="KEDIRI"> Kediri</option>

                  <option value="BLITAR"> Blitar</option>

                  <option value="TULUNGAGUNG"> Tulungagung</option>

                  <option value="PASURUHAN"> Pasuruhan</option>

                  <option value="PROBOLINGGO"> Probolinggo</option>

                  <option value="NGANJUK"> Nganjuk</option>

                  <option value="MADIUN"> Madiun</option>

                  <option value="PONOROGO"> Ponorogo/Magetan</option>

                  <option value="JEMBER"> Jember</option>

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

                  <option value="PEKANBARU"> Pekan Baru</option>
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
            </div>
        </div>   
        <div class="row">
          <div class="col-md-6 offset-md-3" style="text-align: center">
           <button type="submit" class="btn btn-primary btn-mainpage btn-lg" id="tombol" onclick="isi();">Cek Harga</button>           
            <div class="row">
              <div class="col-md-12 offset-md-12 mt-12" style="text-align: center">
                <h1 class="display-5">
                <?php 
                include "fx.php";
                ?>
              </h1>
            </div>
            </div>
          </div>
        </div> 
        <!-- <input class="form-control" type="" name="" id="is"> -->
    </form>
  </div>
 </body>
</html>
