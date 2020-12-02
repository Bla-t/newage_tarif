 <?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
			

      include ("koneksi.php");

       
        // rumus dasar//

	$data = mysql_query("select * from tabelharga");
        while($d = mysql_fetch_array($data)){

            $berat = $_POST['brt'];
            $Lebar = $_POST['le'];
            $Panjang = $_POST['pa'];
            $Tinggi = $_POST['ti'];
            $tujuan = $_POST['tujuan'];
            $dari = $_POST['prom'];
           // $asal = $_POST['teks'];
           $from = $_POST['da'];
           $tempat = $_POST['tu'];
                //fix1//
        if($berat == 1 &&$d['Dari'] == $dari &&$d['Tujuan'] ==$tujuan){

            //echo ('<h1 class="font-weight-normal">'.rupiah($d['fix1']).'</h1>');
            echo ('<br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($d['fix1']).'</td>
            <td>'.$d['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }
                //fix2//
        elseif ($berat == 2 && $d['Dari']== $dari && $d['Tujuan'] ==$tujuan) {

            //echo ('<h1 class="font-weight-normal">'.rupiah($d['fix2']).'</h1>');
            echo ('<br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuann</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($d['fix2']).'</td>
            <td>'.$d['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }
            //minimal-1//
        elseif ($berat > 2 &&$berat < 11 && $d['Dari'] == $dari &&$d['Tujuan'] == $tujuan ) {
            //echo ('<h1 class="font-weight-normal">'.rupiah(($berat - 1) * $d['Kg3'] + $d['minim3']).'</h1>');
            echo ('<br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah(($berat - 1) * $d['Kg3'] + $d['minim3']).'</td>
            <td>'.$d['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }

        elseif ($berat > 10 &&$berat < 101 && $d['Dari'] == $dari &&$d['Tujuan'] == $tujuan ) {

            //echo ('<h1 class="font-weight-normal">'.rupiah((($berat - 10) * $d['Kg11'] + $d['minim11']) + ($Lebar * $Panjang * $Tinggi  * ($d['kubikasi'] / 1000000))).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah(($berat - 10) * $d['Kg11'] + $d['minim11']).'</td>
            <td>'.$d['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }

        elseif ($berat > 100 && $d['Dari'] == $dari &&$d['Tujuan'] == $tujuan) {

            //echo ('<h1 class="font-weight-normal">'.rupiah(($berat * $d['lebih100']) + ($Lebar * $Panjang * $Tinggi  * ($d['kubikasi'] / 1000000))).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($berat * $d['lebih100']).'</td>
            <td>'.$d['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }

        elseif ($berat == 0 &&$d['Dari'] == $dari &&$d['Tujuan'] == $tujuan) {

            //echo ('<h1 class="font-weight-normal">'.rupiah($Lebar * $Panjang * $Tinggi * ($d['kubikasi'] / 1000000)).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.(($Lebar * $Panjang * $Tinggi) / 1000000).' m³ = '.rupiah($Lebar * $Panjang * $Tinggi * ($d['kubikasi'] / 1000000)).'</td>
            <td>'.$d['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }
    }
        


        // rumus Bogor //

    //     $data2 = mysql_query("select * from tabelharga2");
    //     while($dd = mysql_fetch_array($data2)){

    //         $tujuan = $_POST['tujuan'];
    //         $dari = $_POST['prom'];
    //         $kol = $_POST['kol'];
    //         $jenis = $_POST['pil'];

    //     if ($dd['Dari'] == $dari &&$dd['Tujuan'] == $tujuan &&$jenis == 'stu') {

    //         echo rupiah($dd['fix2'] * $kol);
    //     }
    //     elseif ($dd['Dari'] == $dari &&$dd['Tujuan'] == $tujuan &&$jenis == 'spt') {

    //         echo rupiah($dd['fix1'] * $kol);
    //     }
    // }


        // jambi riau II

        $data3 = mysql_query("select * from tabelharga3");
        while($dds = mysql_fetch_array($data3)){

            // $tujuan = $_POST['tujuan'];
            // $dari = $_POST['prom'];
            // $berat = $_POST['brt'];
            // $Lebar = $_POST['le'];
            // $Panjang = $_POST['pa'];
            // $Tinggi = $_POST['ti'];


         // ruwet

        if ($berat == 1 &&$dds['Dari'] ==$dari  &&$dds['Tujuan'] ==$tujuan ) {
            
         //echo('<h1 class="font-weight-normal">'.rupiah($dds['fix1']).'</h1>');
         echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($dds['fix1']).'</td>
            <td>'.$dds['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
            
        }
        elseif ($berat >1 &&$berat < 11 && $dds['Dari'] ==$dari &&$dds['Tujuan'] ==$tujuan ) {
            
         //echo ('<h1 class="font-weight-normal">'.rupiah(($dds['fix1'] + ($berat - 1) * $dds['fix2'])+ ($Lebar * $Panjang * $Tinggi  * ($dds['kubikasi'] / 1000000))).'</h1>');
         echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($dds['fix1'] + ($berat - 1) * $dds['fix2']).'</td>
            <td>'.$dds['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }

        elseif ($berat >10 &&$berat < 21 &&$dds['Dari'] ==$dari &&$dds['Tujuan'] ==$tujuan ) {

         //echo ('<h1 class="font-weight-normal">'.rupiah($dds['minim3'] + ($Lebar * $Panjang * $Tinggi  * ($dds['kubikasi'] / 1000000))).'</h1>');
         echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($dds['minim3']).'</td>
            <td>'.$dds['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }

        elseif ($berat > 20 &&$dds['Dari'] ==$dari &&$dds['Tujuan'] ==$tujuan) {

         //echo ('<h1 class="font-weight-normal">'.rupiah($dds['Kg3'] * $berat).'</h1>');
         echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($dds['Kg3'] * $berat).'</td>
            <td>'.$dds['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }

        elseif ($berat == 0 &&$dds['Dari'] ==$dari &&$dds['Tujuan']==$tujuan ){

         //echo ('<h1 class="font-weight-normal">'.rupiah($Lebar * $Panjang * $Tinggi  * ($dds['kubikasi'] / 1000000)).'</h1>');
         echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.(($Lebar * $Panjang * $Tinggi) / 1000000).' m³ = '.rupiah($Lebar * $Panjang * $Tinggi  * ($dds['kubikasi'] / 1000000)).'</td>
            <td>'.$dds['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');

        } 

    }
    
       //BANDAR METRO PALEMBANG

      $datab = mysql_query("select * from tabelharga4");
        while($ds = mysql_fetch_array($datab)){

            // $tujuan = $_POST['tujuan'];
            // $dari = $_POST['prom'];
            // $berat = $_POST['brt'];
            // $Lebar = $_POST['le'];
            // $Panjang = $_POST['pa'];
            // $Tinggi = $_POST['ti'];

         // ruwet

        if ($berat== 1 &&$ds['Dari'] ==$dari  &&$ds['Tujuan'] ==$tujuan ) {
            
         //echo ('<h1 class="font-weight-normal">'.rupiah($ds['fix1']).'</h1>');
         echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($ds['fix1']).'</td>
            <td>'.$ds['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
            
        }
        elseif ($berat ==2 &&$ds['Dari'] == $dari &&$ds['Tujuan'] == $tujuan) {
            
            //echo ('<h1 class="font-weight-normal">'.rupiah($ds['fix2']).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($ds['fix2']).'</td>
            <td>'.$ds['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }
        elseif ($berat >2 &&$berat < 51 && $ds['Dari'] ==$dari &&$ds['Tujuan'] ==$tujuan ) {
            
         //echo ('<h1 class="font-weight-normal">'.rupiah($ds['minim']).'</h1>');
         echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($ds['minim']).'</td>
            <td>'.$ds['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }

        elseif ($berat >50  &&$ds['Dari'] ==$dari &&$ds['Tujuan'] ==$tujuan ) {

         //echo ('<h1 class="font-weight-normal">'.rupiah(($ds['perKg'] * $berat ) + ($Lebar * $Panjang * $Tinggi  * ($ds['kubikasiM3'] / 1000000))).'</h1>');
         echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($ds['perKg'] * $berat ).'</td>
            <td>'.$ds['esteh'].'</td>
            </tr>
            </tbody>
            </table> 
            </div>');
        }

        elseif ($berat == 0 &&$ds['Dari'] ==$dari &&$ds['Tujuan']==$tujuan ){

         //echo ('<h1 class="font-weight-normal">'.rupiah($Lebar * $Panjang * $Tinggi  * ($ds['kubikasiM3'] / 1000000)).'</h1>');
         echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.(($Lebar * $Panjang * $Tinggi) / 1000000).' m³ = '.rupiah($Lebar * $Panjang * $Tinggi  * ($ds['kubikasiM3'] / 1000000)).'</td>
            <td>'.$ds['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');

        } 

    }

           //serang!!

        $datb = mysql_query("select * from serang");
        while($dsd = mysql_fetch_array($datb)){

    //         $tujuan = $_POST['tujuan'];
    //         $dari = $_POST['prom'];
    //         $berat = $_POST['brt'];
    //         $Lebar = $_POST['le'];
    //         $Panjang = $_POST['pa'];
    //         $Tinggi = $_POST['ti'];

         // ruwet

        if ($berat== 1 &&$dsd['Dari'] ==$dari  &&$dsd['Tujuan'] ==$tujuan ) {
            
         //echo ('<h1 class="font-weight-normal">'.rupiah($dsd['fix1']).'</h1>');
         echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($dsd['fix1']).'</td>
            <td>'.$dsd['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
            
        }
        elseif ($berat ==2 &&$dsd['Dari'] == $dari &&$dsd['Tujuan'] == $tujuan) {
            
            //echo ('<h1 class="font-weight-normal">'.rupiah($dsd['fix2']).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($dsd['fix2']).'</td>
            <td>'.$dsd['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }
        elseif ($berat >2 &&$berat < 11 && $dsd['Dari'] ==$dari &&$dsd['Tujuan'] ==$tujuan ) {
            
         //echo ('<h1 class="font-weight-normal">'.rupiah(($dsd['minim3'] + (($berat - 1) * $dsd['Kg3'])) + ($Lebar * $Panjang * $Tinggi  * ($dsd['kubikasi'] / 1000000))).'</h1>');
         echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah(($berat - 1) * $dsd['Kg3'] + $dsd['minim3']).'</td>
            <td>'.$dsd['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }
        elseif ($berat >2 &&$berat < 11 && $dsd['Dari'] ==$dari &&$dsd['Tujuan'] ==$tujuan ) {
            
         //echo ('<h1 class="font-weight-normal">'.rupiah(($dsd['minim3'] + (($berat - 1) * $dsd['Kg3'])) + ($Lebar * $Panjang * $Tinggi  * ($dsd['kubikasi'] / 1000000))).'</h1>');
         echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah(($berat - 10) * $dsd['Kg3'] + $dsd['minim3']).'</td>
            <td>'.$dsd['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }

        elseif ($berat >50  &&$dsd['Dari'] ==$dari &&$dsd['Tujuan'] ==$tujuan ) {

         //echo ('<h1 class="font-weight-normal">'.rupiah(($dsd['L100'] * $berat) + ($Lebar * $Panjang * $Tinggi  * ($dsd['kubikasi'] / 1000000))).'</h1>');
         echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($dsd['L100'] * $berat).'</td>
            <td>'.$dsd['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }

        elseif ($berat == 0 &&$dsd['Dari'] ==$dari &&$dsd['Tujuan']==$tujuan ){

         //echo ('<h1 class="font-weight-normal">'.rupiah($Lebar * $Panjang * $Tinggi  * ($dsd['kubikasi'] / 1000000)).'</h1>');
         echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.(($Lebar * $Panjang * $Tinggi) / 1000000).' m³ = '.rupiah($Lebar * $Panjang * $Tinggi  * ($dsd['kubikasi'] / 1000000)).'</td>
            <td>'.$dsd['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');

        } 

    }
         //Tanah Abang
   

        $dat = mysql_query("SELECT * FROM tanah_abang");
        while($uwu = mysql_fetch_array($dat)){

    //     $tujuan = $_POST['tujuan'];
    //     $dari = $_POST['prom'];
    //     $berat = $_POST['brt'];
    //     $Lebar = $_POST['le'];
    //     $Panjang = $_POST['pa'];
    //     $Tinggi = $_POST['ti'];


        if($berat > 10 &&$berat < 26 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan){

            //echo ('<h1 class="font-weight-normal">'.rupiah(($uwu['range1']) + $Lebar * $Panjang * $Tinggi * ($uwu['kubikasi']/1000000)).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($uwu['range1']).'</td>
            <td>'.$uwu['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');

        }

        elseif($berat > 25 &&$berat <51 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan){

            //echo ('<h1 class="font-weight-normal">'.rupiah(($uwu['range2']) + $Lebar * $Panjang * $Tinggi * ($uwu['kubikasi']/1000000)).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($uwu['range2']).'</td>
            <td>'.$uwu['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');

        }

        elseif ($berat > 50 &&$berat < 101 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan) {
            
            //echo ('<h1 class="font-weight-normal">'.rupiah(($uwu['range3']) + $Lebar * $Panjang * $Tinggi * ($uwu['kubikasi']/1000000)).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($uwu['range3']).'</td>
            <td>'.$uwu['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');

        }

        elseif ($berat > 100 &&$berat < 151 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan) {

            //echo ('<h1 class="font-weight-normal">'.rupiah(($uwu['range4']) + $Lebar * $Panjang * $Tinggi * ($uwu['kubikasi']/1000000)).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($uwu['range4']).'</td>
            <td>'.$uwu['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
            
        }

        elseif ($berat > 150 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan) {

            //echo ('<h1 class="font-weight-normal">'.rupiah(($uwu['range5']) + $Lebar * $Panjang * $tinggi * ($uwu['kubikasi']/1000000)).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($berat * $uwu['range5']).'</td>
            <td>'.$uwu['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
            
        }
      elseif($berat == 1 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan) {

            //echo ('<h1 class="font-weight-normal">'.rupiah($uwu['fix1']).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($uwu['fix1']).'</td>
            <td>'.$uwu['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');

      }

      elseif($berat == 2 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan) {

            //echo ('<h1 class="font-weight-normal">'.rupiah($uwu['fix2']).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($uwu['fix2']).'</td>
            <td>'.$uwu['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
      }

         elseif($berat == 0 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan) {

            //echo ('<h1 class="font-weight-normal">'.rupiah($uwu['fix2']).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.(($Lebar * $Panjang * $Tinggi) / 1000000).' m³ = '.rupiah($Lebar * $Panjang * $tinggi * ($uwu['kubikasi']/1000000)).'</td>
            <td>'.$uwu['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
      }
      
     }


     $tnh = mysql_query("SELECT * FROM tnh1");
     while ($owo = mysql_fetch_array($tnh)) {
         
        if ($berat == 1 &&$owo['Dari'] == $dari &&$owo['Tujuan'] == $tujuan){

            //echo ('<h1 class="font-weight-normal">'.rupiah($owo['fix1']).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($owo['fix1']).'</td>
            <td>'.$owo['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');

        }
        elseif ($berat == 2 &&$owo['Dari'] == $dari &&$owo['Tujuan'] == $tujuan)  {
            //echo ('<h1 class="font-weight-normal">'.rupiah($owo['fix2']).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($owo['fix2']).'</td>
            <td>'.$owo['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }
        elseif ($berat > 2 &&$berat < 11 &&$owo['Dari'] == $dari &&$owo['Tujuan'] == $tujuan)  {
            //echo ('<h1 class="font-weight-normal">'.rupiah(($owo['Kg3'] * ($berat - 1)) + $owo['minim3'] + ($Panjang * $Lebar * $Tinggi * ($owo['kubikasi']/1000000))).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($owo['Kg3'] * ($berat - 1) + $owo['minim3']).'</td>
            <td>'.$owo['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }
        elseif ($berat >10 &&$berat < 26 &&$owo['Dari'] == $dari &&$owo['Tujuan'] == $tujuan) {
            //echo ('<h1 class="font-weight-normal">'.rupiah($owo['range1']).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($owo['range1']).'</td>
            <td>'.$owo['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }
        elseif ($berat > 25 &&$berat <51 &&$owo['Dari'] == $dari &&$owo['Tujuan'] == $tujuan) {
            //echo ('<h1 class="font-weight-normal">'.rupiah($owo['range2']).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($owo['range2']).'</td>
            <td>'.$owo['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }
        elseif ($berat > 50 &&$owo['Dari'] == $dari &&$owo['Tujuan'] == $tujuan){
            //echo ('<h1 class="font-weight-normal">'.rupiah($berat * $owo['range3']).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($berat * $owo['range3']).'</td>
            <td>'.$owo['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }
        elseif ($berat ==0 &&$owo['Dari'] == $dari &&$owo['Tujuan'] == $tujuan)  {
            //echo ('<h1 class="font-weight-normal">'.rupiah(($owo['Kg3'] * ($berat - 1)) + $owo['minim3'] + ($Panjang * $Lebar * $Tinggi * ($owo['kubikasi']/1000000))).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.(($Lebar * $Panjang * $Tinggi) / 1000000).' m³ = '.rupiah($Panjang * $Lebar * $Tinggi * ($owo['kubikasi']/1000000)).'</td>
            <td>'.$owo['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
        }

     }
     
     $kal=mysql_query("SELECT * FROM kalimantan1");
     while($mantan = mysql_fetch_array($kal)){
      
      if ($berat > 0 &&$berat < 21 &&$mantan['Dari'] == $dari &&$mantan['Tujuan'] == $tujuan){

            //echo ('<h1 class="font-weight-normal">'.rupiah (($mantan['fix1']) + ($Lebar * $Panjang * $Tinggi  * ($mantan['kubik'] / 1000000))).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($mantan['fix1']).'</td>
            <td>'.$mantan['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
         }
         
      elseif($berat > 20 &&$mantan['Dari'] == $dari &&$mantan['Tujuan'] == $tujuan){
          
          //echo ('<h1 class="font-weight-normal">'.rupiah(($mantan['perkg'] * $berat) + ($Lebar * $Panjang * $Tinggi  * ($mantan['kubik'] / 1000000))).'</h1>');
          echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($mantan['perkg']*$berat).'</td>
            <td>'.$mantan['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
          
         }
      elseif($berat == 0 &&$mantan['Dari'] == $dari &&$mantan['Tujuan'] == $tujuan){
          
          //echo ('<h1 class="font-weight-normal">'.rupiah($Lebar * $Panjang * $Tinggi  * ($mantan['kubik'] / 1000000)).'</h1>');
          echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.(($Lebar * $Panjang * $Tinggi) / 1000000).' m³ = '.rupiah($Lebar * $Panjang * $Tinggi  * ($mantan['kubik'] / 1000000)).'</td>
            <td>'.$mantan['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
      }
      
     }
    //         //////////////////////kalimantan 2////////////////////////
            
     $ka =mysql_query("SELECT * FROM kalimantan2");
     while($man = mysql_fetch_array($ka)){
      
      if ($berat > 0 &&$berat < 31 &&$man['Dari'] == $dari &&$man['Tujuan'] == $tujuan){

            //echo ('<h1 class="font-weight-normal">'.rupiah(($man['fix1']) + ($Lebar * $Panjang * $Tinggi  * ($man['kubik'] / 1000000))).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($man['fix1']).'</td>
            <td>'.$man['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
         }
      elseif($berat > 30 &&$man['Dari'] == $dari &&$man['Tujuan'] == $tujuan){
          
          //echo ('<h1 class="font-weight-normal">'.rupiah(($berat * $man['perkg']) + ($Lebar * $Panjang * $Tinggi  * ($man['kubik'] / 1000000))).'</h1>');
          echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($berat * $man['perkg']).'</td>
            <td>'.$man['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
          
         }
      elseif($berat == 0 &&$man['Dari'] == $dari &&$man['Tujuan'] == $tujuan){
          
          //echo ('<h1 class="font-weight-normal">'.rupiah($Lebar * $Panjang * $Tinggi  * ($man['kubik'] / 1000000)).'</h1>');
          echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.(($Lebar * $Panjang * $Tinggi) / 1000000).' m³ = '.rupiah($Lebar * $Panjang * $Tinggi  * ($man['kubik'] / 1000000)).'</td>
            <td>'.$man['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
      }
      
     }
    //         ////////////////////kalimantan 3////////////////////
     
     $kalimantan =mysql_query("SELECT * FROM kalimantan3");
     while($ntan = mysql_fetch_array($kalimantan)){
      
      if ($berat > 0 &&$berat < 101 &&$ntan['Dari'] == $dari &&$ntan['Tujuan'] == $tujuan){

            //echo ('<h1 class="font-weight-normal">'.rupiah(( $ntan['fix1']) + ($Lebar * $Panjang * $Tinggi  * ($ntan['kubik'] / 1000000))).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($ntan['fix1']).'</td>
            <td>'.$ntan['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
         }
      elseif($berat > 100 &&$ntan['Dari'] == $dari &&$ntan['Tujuan'] == $tujuan){
          
          //echo ('<h1 class="font-weight-normal">'.rupiah(($berat * $ntan['perkg']) + ($Lebar * $Panjang * $Tinggi  * ($ntan['kubik'] / 1000000))).'</h1>');
          echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($berat * $ntan['perkg']).'</td>
            <td>'.$ntan['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
          
         }
      elseif($berat == 0 &&$ntan['Dari'] == $dari &&$ntan['Tujuan'] == $tujuan){
          
          //echo ('<h1 class="font-weight-normal">'.rupiah($Lebar * $Panjang * $Tinggi  * ($ntan['kubik'] / 1000000)).'</h1>');
          echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.(($Lebar * $Panjang * $Tinggi) / 1000000).' m³ = '.rupiah($Lebar * $Panjang * $Tinggi  * ($ntan['kubik'] / 1000000)).'</td>
            <td>'.$ntan['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
      }
      
     }
        ////////////////////kalimantan 4//////////////////
     
    $antan =mysql_query("SELECT * FROM kalimantan4");
     while($tan = mysql_fetch_array($antan)){
      
      if ($berat > 0 &&$berat < 251 &&$tan['Dari'] == $dari &&$tan['Tujuan'] == $tujuan){

            //echo ('<h1 class="font-weight-normal">'.rupiah(($tan['fix1']) + ($Lebar * $Panjang * $Tinggi  * ($tan['kubik'] / 1000000))).'</h1>');
            echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($tan['fix1']).'</td>
            <td>'.$tan['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
         }
      elseif($berat > 250 &&$tan['Dari'] == $dari &&$tan['Tujuan'] == $tujuan){
          
          //echo ('<h1 class="font-weight-normal">'.rupiah(($berat * $tan['perkg']) + ($Lebar * $Panjang * $Tinggi  * ($tan['kubik'] / 1000000))).'</h1>');
          echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.$berat.' Kg = '.rupiah($berat * $tan['perkg']).'</td>
            <td>'.$tan['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
          
         }
      elseif($berat == 0 &&$tan['Dari'] == $dari &&$tan['Tujuan'] == $tujuan){
          
          //echo ('<h1 class="font-weight-normal">'.rupiah($Lebar * $Panjang * $Tinggi  * ($tan['kubik'] / 1000000)).'</h1>');
          echo ('<br><br><div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                <tr>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
            <tr>
            <td>'.$from.'</td>
            <td>'.$tempat.'</td>
            <td>'.(($Lebar * $Panjang * $Tinggi) / 1000000).' m³ = '.rupiah($Lebar * $Panjang * $Tinggi  * ($tan['kubik'] / 1000000)).'</td>
            <td>'.$tan['esteh'].'</td>
            </tr>
            </tbody>
            </table>
            </div>');
      }
      
     }

    function rupiah($angka){  
        
        $bulat=substr($angka,-3);
        if($bulat<500){ $akhir=$angka-$bulat;}
        else{$akhir=$angka+(1000-$bulat);}

                        $hasil_rupiah = "Rp. " . number_format($akhir,2,',','.'); 
                        return $hasil_rupiah; 
                      }
                      ?>