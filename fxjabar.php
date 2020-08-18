<?php
                  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                    
///////////////////////////////////////////////////////////////////////////////
                    
    $e = 0.35;      $e1 = 0.40;     $e2 = 0.55;      $e3 = 0.60;
                    
    $e4 = 0.65;     $e5 = 0.75;     $e6 = 0.30;      $e7 = 0.50;
                    
    $e8 = 0.70;     $e9 = 0.45;     $e10 = 0.275;    $e11 = 0.375;

    $e12 = 0.325;   $e13 = 0.80;    $e14 = 0.90;     $e15 = 0.425;

    $e16 = 0.475;   $e17 = 0.525;   $e18 = 0.625;    $e19 = 0.675;

    $e20 = 0.825;   $e21 = 0.925;   $e22 = 0.85;     $e23 = 1;

    $e24 = 1.05;    $e25 = 1.15;    $e26 = 1.25;     $e27 = 1.3;

    $e28 = 1.45;    $e29 = 0.95;    $e30 = 1.4;      $e31 = 1.6;

    $e32 = 1.55;    $e33 = 1.2;     $e34 = 1.1;      $e36 = 1.5;

///////////////////////////////////////////////////////////////////////////////

            $berat = $_POST['brt'];
            $Lebar = $_POST['le'];
            $Panjang = $_POST['pa'];
            $Tinggi = $_POST['ti'];
            $tujuan = $_POST['tujuan'];
            $dari = $_POST['prom'];
            $koli = $_POST['kol'];
            $jenis = $_POST['pil'];

//////////////////-----------------RMS CBG--------------------------///////////

            // JAKARTA.JKT//

                    //jakarta.JKT///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1050 + 57000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'jkt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat == 1 &&$tujuan == 'JKT' &&$dari == 'jkt'){
                            echo rupiah(21000);
                        }
                        elseif($berat == 2 &&$tujuan == 'JKT' &&$dari == 'jkt'){
                            echo rupiah(31000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }                

                    //Depok.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'jkt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPK' &&$dari == 'jkt'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'DPK' &&$dari == 'jkt'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //tangerang.JKT///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'jkt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGR' &&$dari == 'jkt'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGR' &&$dari == 'jkt'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //bekasi.JKT/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'jkt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat == 1 &&$tujuan == 'BKS' &&$dari == 'jkt'){
                            echo rupiah(21000);
                        }
                        elseif($berat == 2 &&$tujuan == 'BKS' &&$dari == 'jkt'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //cikarang.JKT///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'jkt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat == 1 &&$tujuan == 'CKR' &&$dari == 'jkt'){
                            echo rupiah(21000);
                        }
                        elseif($berat == 2 &&$tujuan == 'CKR' &&$dari == 'jkt'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }
                    
                  //karawang.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'jkt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'KRW' &&$dari == 'jkt'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KRW' &&$dari == 'jkt'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SERANG.JKT///

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'jkt'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'SRG' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SRG' &&$dari == 'jkt'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BOGOR.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'jkt'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BGR' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BGR' &&$dari == 'jkt'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //CIREBON.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'jkt'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'CRB' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CRB' &&$dari == 'jkt'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //INDRAMAYU.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'jkt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //PURWAKARTA.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'jkt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BANDUNG.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'jkt'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDG' &&$dari == 'jkt'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDG' &&$dari == 'jkt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //GARUT.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'jkt'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'GRT' &&$dari == 'jkt'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GRT' &&$dari == 'jkt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //TASIK.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'jkt'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'TSK' &&$dari == 'jkt'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TSK' &&$dari == 'jkt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SUKABUMI.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'jkt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'SKB' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SKB' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PURWOKERTO.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'jkt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWT' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWT' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KEBUMEN.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'jkt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KPB' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KPB' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TEGAL.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'jkt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGL' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGL' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PEMALANG.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'jkt'){
                            echo rupiah($berat * 1250 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PML' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PML' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    
                    //PEKALONGAN.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1150 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'jkt'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat == 1 &&$tujuan == 'PKL' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat == 2 &&$tujuan == 'PKL' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    
                    //BANJAR PATROMAN.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1150 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'jkt'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SEMARANG.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'jkt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SMG' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SMG' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'jkt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDS' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDS' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JEPARA/PATI.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1500 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'jkt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'jkt'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'jkt'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'jkt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'YGY' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'YGY' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'jkt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SOLO' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SOLO' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'jkt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KLT' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KLT' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'jkt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SLTG' &&$dari == 'jkt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SLTG' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'jkt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'MGL' &&$dari == 'jkt'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MGL' &&$dari == 'jkt'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1250 + 60000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'jkt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'SBY' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SBY' &&$dari == 'jkt'){
                            echo rupiah(41000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //BLORA.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'jkt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLA' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLA' &&$dari == 'jkt'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BOJONEGORO.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'jkt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BJG' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BJG' &&$dari == 'jkt'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BGRESIK.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'jkt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'GSK' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GSK' &&$dari == 'jkt'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //SIDOARJO.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'jkt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'SDJ' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SDJ' &&$dari == 'jkt'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MOJOKERTO.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'jkt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MJK' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MJK' &&$dari == 'jkt'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    
                    //MALANG.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'jkt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MLG' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MLG' &&$dari == 'jkt'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }


                    //KEDIRI.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'jkt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDR' &&$dari == 'jkt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDR' &&$dari == 'jkt'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BLITAR.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'jkt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLT' &&$dari == 'jkt'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLT' &&$dari == 'jkt'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TULUNGAGUNG.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'jkt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGA' &&$dari == 'jkt'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGA' &&$dari == 'jkt'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PASURUHAN.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'jkt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PSR' &&$dari == 'jkt'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PSR' &&$dari == 'jkt'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PROBOLINGGO.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'jkt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PRB' &&$dari == 'jkt'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PRB' &&$dari == 'jkt'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //NGANJUK.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'jkt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'NGJ' &&$dari == 'jkt'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'NGJ' &&$dari == 'jkt'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MADIUN.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN' &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'jkt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'jkt'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'jkt'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //ponorogo/magetan.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1' &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'jkt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN1' &&$dari == 'jkt'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN1' &&$dari == 'jkt'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JEMBER.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'jkt'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBR' &&$dari == 'jkt'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBR' &&$dari == 'jkt'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //LUMAJANG.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'jkt'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'LMG' &&$dari == 'jkt'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'LMG' &&$dari == 'jkt'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //BANYUWANGI.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'jkt'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'BYG' &&$dari == 'jkt'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BYG' &&$dari == 'jkt'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //DENPASAR.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'jkt'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPS' &&$dari == 'jkt'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'DPS' &&$dari == 'jkt'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //TABANAN.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'jkt'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'TBN' &&$dari == 'jkt'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TBN' &&$dari == 'jkt'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //NUSADUA.JKT//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'jkt'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'jkt'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'jkt'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //SINGARAJA.JKT//

                    if($berat <=100 &&$berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'jkt'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'jkt'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'jkt'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'SGRJ' &&$dari == 'jkt'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SGRJ' &&$dari == 'jkt'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    
                    //BANDAR.JKT//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'BDR'  &&$dari == 'jkt'){
                        echo rupiah(50000 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }                       
                        elseif($berat ==1 &&$tujuan == 'BDR' &&$dari == 'jkt'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDR' &&$dari == 'jkt'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'BDR' &&$dari == 'jkt'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    
                    //PALEMBANG.JKT//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'PLB'  &&$dari == 'jkt'){
                        echo rupiah(50000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }                       
                        elseif($berat ==1 &&$tujuan == 'PLB' &&$dari == 'jkt'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PLB' &&$dari == 'jkt'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'PLB' &&$dari == 'jkt'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PekanBaru.JKT//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'jkt'){
                        echo rupiah(20000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'jkt'){
                            echo rupiah((60000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'jkt'){
                            echo rupiah(($berat * 3000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        elseif($berat == 1 &&$tujuan == 'PKB' &&$dari == 'jkt'){
                            echo rupiah(20000);
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }  

                    //Jambi.JKT//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'jkt'){
                        echo rupiah(20000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'jkt'){
                            echo rupiah((50000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'jkt'){
                            echo rupiah(($berat * 2500) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat == 1 &&$tujuan == 'JBI' &&$dari == 'jkt'){
                            echo rupiah(20000);
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'jkt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

            // DEPOK.dpk//

                    //jakarta.dpk///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1050 + 57000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'dpk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'JKT' &&$dari == 'dpk'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JKT' &&$dari == 'dpk'){
                            echo rupiah(31000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }                

                    //Depok.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'dpk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPK' &&$dari == 'dpk'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'DPK' &&$dari == 'dpk'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //tangerang.dpk///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'dpk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGR' &&$dari == 'dpk'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGR' &&$dari == 'dpk'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //bekasi.dpk/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'dpk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BKS' &&$dari == 'dpk'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BKS' &&$dari == 'dpk'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //cikarang.dpk///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'dpk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'CKR' &&$dari == 'dpk'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CKR' &&$dari == 'dpk'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }
                    
                    //karawang.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'dpk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'KRW' &&$dari == 'dpk'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KRW' &&$dari == 'dpk'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SERANG.dpk///

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'dpk'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'SRG' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SRG' &&$dari == 'dpk'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BOGOR.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'dpk'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BGR' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BGR' &&$dari == 'dpk'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //CIREBON.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'dpk'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'CRB' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CRB' &&$dari == 'dpk'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //purwakarta.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'dpk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //Indramayu.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'dpk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BANDUNG.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'dpk'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDG' &&$dari == 'dpk'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDG' &&$dari == 'dpk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //GARUT.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'dpk'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'GRT' &&$dari == 'dpk'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GRT' &&$dari == 'dpk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //TASIK.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'dpk'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'TSK' &&$dari == 'dpk'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TSK' &&$dari == 'dpk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SUKABUMI.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'dpk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SKB' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SKB' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PURWOKERTO.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'dpk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWT' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWT' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KEBUMEN.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'dpk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KPB' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KPB' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TEGAL.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'dpk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGL' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGL' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PEMALANG.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'dpk'){
                            echo rupiah($berat * 1250 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PML' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PML' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    
                    //PEKALONGAN.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1150 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'dpk'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PKL' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PKL' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    
                    //BANJAR PATROMAN.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1150 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'dpk'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'BTR' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BTR' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SEMARANG.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'dpk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SMG' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SMG' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'dpk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDS' &&$dari == 'dpk'){
                            echo rupiah(116000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDS' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JEPARA/PATI.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1500 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'dpk'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'dpk'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'dpk'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'dpk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'YGY' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'YGY' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'dpk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SOLO' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SOLO' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'dpk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KLT' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KLT' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'dpk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SLTG' &&$dari == 'dpk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SLTG' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'dpk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'MGL' &&$dari == 'dpk'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MGL' &&$dari == 'dpk'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1250 + 60000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'dpk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat ==1 &&$tujuan == 'SBY' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SBY' &&$dari == 'dpk'){
                            echo rupiah(41000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //BLORA.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'dpk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLA' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLA' &&$dari == 'dpk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BOJONEGORO.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'dpk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BJG' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BJG' &&$dari == 'dpk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BGRESIK.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'dpk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'GSK' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GSK' &&$dari == 'dpk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //SIDOARJO.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'dpk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'SDJ' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SDJ' &&$dari == 'dpk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MOJOKERTO.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'dpk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MJK' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MJK' &&$dari == 'dpk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JOMBANG.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'dpk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBG' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBG' &&$dari == 'dpk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MALANG.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'dpk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MLG' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MLG' &&$dari == 'dpk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }


                    //KEDIRI.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'dpk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDR' &&$dari == 'dpk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDR' &&$dari == 'dpk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BLITAR.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'dpk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLT' &&$dari == 'dpk'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLT' &&$dari == 'dpk'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TULUNGAGUNG.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'dpk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGA' &&$dari == 'dpk'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGA' &&$dari == 'dpk'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PASURUHAN.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'dpk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'dpk'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'dpk'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PROBOLINGGO.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'dpk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PRB' &&$dari == 'dpk'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PRB' &&$dari == 'dpk'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //NGANJUK.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'dpk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'NGJ' &&$dari == 'dpk'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'NGJ' &&$dari == 'dpk'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MADIUN.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN' &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'dpk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'dpk'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'dpk'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //ponorogo/magetan.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1' &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == "MDN1"  &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == "MDN1"  &&$dari == 'dpk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == "MDN1"  &&$dari == 'dpk'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == "MDN1"  &&$dari == 'dpk'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == "MDN1"  &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JEMBER.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'dpk'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBR' &&$dari == 'dpk'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBR' &&$dari == 'dpk'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //LUMAJANG.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'dpk'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'LMG' &&$dari == 'dpk'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'LMG' &&$dari == 'dpk'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //BANYUWANGI.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'dpk'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'BYG' &&$dari == 'dpk'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BYG' &&$dari == 'dpk'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //DENPASAR.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'dpk'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPS' &&$dari == 'dpk'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'DPS' &&$dari == 'dpk'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //TABANAN.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'dpk'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'TBN' &&$dari == 'dpk'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TBN' &&$dari == 'dpk'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //NUSADUA.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'dpk'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'ND2' &&$dari == 'dpk'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'ND2' &&$dari == 'dpk'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //SINGARAJA.dpk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'dpk'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'dpk'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'dpk'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'SGRJ' &&$dari == 'dpk'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SGRJ' &&$dari == 'dpk'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    
                    //BANDAR.dpk//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'BDR'  &&$dari == 'dpk'){
                        echo rupiah(50000 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }                       
                        elseif($berat ==1 &&$tujuan == 'BDR' &&$dari == 'dpk'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDR' &&$dari == 'dpk'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'BDR' &&$dari == 'dpk'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    
                    //PALEMBANG.dpk//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'PLB'  &&$dari == 'dpk'){
                        echo rupiah(50000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }                       
                        elseif($berat ==1 &&$tujuan == 'PLB' &&$dari == 'dpk'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PLB' &&$dari == 'dpk'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'PLB' &&$dari == 'dpk'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PekanBaru.dpk//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'dpk'){
                        echo rupiah(20000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'dpk'){
                            echo rupiah((60000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'dpk'){
                            echo rupiah(($berat * 3000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }  

                    //Jambi.dpk//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'dpk'){
                        echo rupiah(25000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'dpk'){
                            echo rupiah((50000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'dpk'){
                            echo rupiah(($berat * 2500) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'dpk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

            // Bogor.bgr//

                    //jakarta.bgr///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1050 + 57000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'bgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'JKT' &&$dari == 'bgr'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JKT' &&$dari == 'bgr'){
                            echo rupiah(31000);
                        }
                            //////////////////tambahan///////////////////

                        elseif($tujuan == 'JKT' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(80000 * $koli);
                        }
                        elseif($tujuan == 'JKT' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(25000 * $koli);

                        }
                            ///////////////////////////////////////////

                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }                

                    //Depok.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'bgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPK' &&$dari == 'bgr'){
                            echo rupiah(21000);
                        }
                            //////////////////tambahan///////////////////

                        elseif($tujuan == 'DPK' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(85000 * $koli);
                        }
                        elseif($tujuan == 'DPK' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(25000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat ==2 &&$tujuan == 'DPK' &&$dari == 'bgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //tangerang.dpk///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'bgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGR' &&$dari == 'bgr'){
                            echo rupiah(21000);
                        }
                            //////////////////tambahan///////////////////

                        elseif($tujuan == 'TGR' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(85000 * $koli);
                        }
                        elseif($tujuan == 'TGR' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(25000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat ==2 &&$tujuan == 'TGR' &&$dari == 'bgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //bekasi.bgr/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'bgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BKS' &&$dari == 'bgr'){
                            echo rupiah(21000);
                        }
                            //////////////////tambahan///////////////////

                        elseif($tujuan == 'BKS' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(85000 * $koli);
                        }
                        elseif($tujuan == 'BKS' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(25000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat ==2 &&$tujuan == 'BKS' &&$dari == 'bgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //cikarang.bgr///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'bgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'CKR' &&$dari == 'bgr'){
                            echo rupiah(21000);
                        }
                            //////////////////tambahan///////////////////

                        elseif($tujuan == 'CKR' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(85000 * $koli);
                        }
                        elseif($tujuan == 'CKR' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(30000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat ==2 &&$tujuan == 'CKR' &&$dari == 'bgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }
                    
                    //karawang.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'bgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'KRW' &&$dari == 'bgr'){
                            echo rupiah(21000);
                        }
                            //////////////////tambahan///////////////////

                        elseif($tujuan == 'KRW' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(85000 * $koli);
                        }
                        elseif($tujuan == 'KRW' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(30000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat ==2 &&$tujuan == 'KRW' &&$dari == 'bgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SERANG.bgr///

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'bgr'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'SRG' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SRG' &&$dari == 'bgr'){
                            echo rupiah(21000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'SRG' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(85000 * $koli);
                        }
                        elseif($tujuan == 'SRG' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(25000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BOGOR.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'bgr'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BGR' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BGR' &&$dari == 'bgr'){
                            echo rupiah(21000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'BGR' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(85000 * $koli);
                        }
                        elseif($tujuan == 'BGR' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(25000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //CIREBON.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'bgr'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'CRB' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CRB' &&$dari == 'bgr'){
                            echo rupiah(21000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'CRB' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(85000 * $koli);
                        }
                        elseif($tujuan == 'CRB' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(30000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //purwakarta.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'bgr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'PWA' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(10000 * $koli);
                        }
                        elseif($tujuan == 'PWA' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(35000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //Indramayu.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'bgr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'IDW' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(100000 * $koli);
                        }
                        elseif($tujuan == 'IDW' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(35000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BANDUNG.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'bgr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDG' &&$dari == 'bgr'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDG' &&$dari == 'bgr'){
                            echo rupiah(20000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'BDG' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(85000 * $koli);
                        }
                        elseif($tujuan == 'BDG' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(25000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //GARUT.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'bgr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'GRT' &&$dari == 'bgr'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GRT' &&$dari == 'bgr'){
                            echo rupiah(20000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'GRT' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(100000 * $koli);
                        }
                        elseif($tujuan == 'GRT' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(35000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //TASIK.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'bgr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'TSK' &&$dari == 'bgr'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TSK' &&$dari == 'bgr'){
                            echo rupiah(20000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'TSK' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(100000 * $koli);
                        }
                        elseif($tujuan == 'TSK' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(35000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SUKABUMI.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'bgr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SKB' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SKB' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'SKB' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(70000 * $koli);
                        }
                        elseif($tujuan == 'SKB' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(25000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PURWOKERTO.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'bgr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWT' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'PWT' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(125000 * $koli);
                        }
                        elseif($tujuan == 'PWT' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(35000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat ==2 &&$tujuan == 'PWT' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KEBUMEN.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'bgr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KPB' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'KPB' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(145000 * $koli);
                        }
                        elseif($tujuan == 'KPB' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(40000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat ==2 &&$tujuan == 'KPB' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TEGAL.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'bgr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGL' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGL' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'TGL' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(100000 * $koli);
                        }
                        elseif($tujuan == 'TGL' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(35000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PEMALANG.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'bgr'){
                            echo rupiah($berat * 1250 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PML' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PML' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'PML' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(100000 * $koli);
                        }
                        elseif($tujuan == 'PML' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(35000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    
                    //PEKALONGAN.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1150 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'bgr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PKL' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PKL' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'PKL' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(100000 * $koli);
                        }
                        elseif($tujuan == 'PKL' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(35000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    
                    //BANJAR PATROMAN.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1150 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'bgr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'BTR' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BTR' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'BTR' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(100000 * $koli);
                        }
                        elseif($tujuan == 'BTR' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(35000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SEMARANG.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'bgr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SMG' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SMG' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'SMG' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(145000 * $koli);
                        }
                        elseif($tujuan == 'SMG' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(40000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'bgr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDS' &&$dari == 'bgr'){
                            echo rupiah(116000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDS' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'KDS' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(145000 * $koli);
                        }
                        elseif($tujuan == 'KDS' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(40000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JEPARA/PATI.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1500 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'bgr'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'bgr'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'bgr'){
                            echo rupiah(30000);
                        }
                          //////////////////tambahan///////////////////

                        elseif($tujuan == 'JPI' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(145000 * $koli);
                        }
                        elseif($tujuan == 'JPI' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(40000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'bgr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'YGY' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'YGY' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'YGY' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(145000 * $koli);
                        }
                        elseif($tujuan == 'YGY' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(40000 * $koli);

                        }
                            ///////////////////////////////////////////

                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'bgr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SOLO' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SOLO' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'SOLO' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(145000 * $koli);
                        }
                        elseif($tujuan == 'SOLO' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(40000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'bgr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KLT' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KLT' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'KLT' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(145000 * $koli);
                        }
                        elseif($tujuan == 'KLT' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(40000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'bgr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SLTG' &&$dari == 'bgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SLTG' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'SLTG' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(145000 * $koli);
                        }
                        elseif($tujuan == 'SLTG' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(40000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'bgr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'MGL' &&$dari == 'bgr'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MGL' &&$dari == 'bgr'){
                            echo rupiah(30000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'MGL' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(145000 * $koli);
                        }
                        elseif($tujuan == 'MGL' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(40000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1250 + 60000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'bgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat ==1 &&$tujuan == 'SBY' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SBY' &&$dari == 'bgr'){
                            echo rupiah(41000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'SBY' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(180000 * $koli);
                        }
                        elseif($tujuan == 'SBY' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(60000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //BLORA.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'bgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLA' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLA' &&$dari == 'bgr'){
                            echo rupiah(44000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'BLA' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(180000 * $koli);
                        }
                        elseif($tujuan == 'BLA' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BOJONEGORO.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'bgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BJG' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BJG' &&$dari == 'bgr'){
                            echo rupiah(44000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'BJG' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(180000 * $koli);
                        }
                        elseif($tujuan == 'BJG' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BGRESIK.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'bgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'GSK' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GSK' &&$dari == 'bgr'){
                            echo rupiah(44000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'GSK' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(180000 * $koli);
                        }
                        elseif($tujuan == 'GSK' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //SIDOARJO.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'bgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'SDJ' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SDJ' &&$dari == 'bgr'){
                            echo rupiah(44000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'SDJ' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(180000 * $koli);
                        }
                        elseif($tujuan == 'SDJ' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MOJOKERTO.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'bgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MJK' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MJK' &&$dari == 'bgr'){
                            echo rupiah(44000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'MJK' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(190000 * $koli);
                        }
                        elseif($tujuan == 'MJK' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JOMBANG.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'bgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBG' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBG' &&$dari == 'bgr'){
                            echo rupiah(44000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'JBG' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(190000 * $koli);
                        }
                        elseif($tujuan == 'JBG' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MALANG.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'bgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MLG' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MLG' &&$dari == 'bgr'){
                            echo rupiah(44000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'MLG' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(180000 * $koli);
                        }
                        elseif($tujuan == 'MLG' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }


                    //KEDIRI.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'bgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDR' &&$dari == 'bgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDR' &&$dari == 'bgr'){
                            echo rupiah(44000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'KDR' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(180000 * $koli);
                        }
                        elseif($tujuan == 'KDR' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BLITAR.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'bgr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLT' &&$dari == 'bgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLT' &&$dari == 'bgr'){
                            echo rupiah(48000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'BLT' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(190000 * $koli);
                        }
                        elseif($tujuan == 'BLT' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TULUNGAGUNG.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'bgr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGA' &&$dari == 'bgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGA' &&$dari == 'bgr'){
                            echo rupiah(48000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'TGA' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(190000 * $koli);
                        }
                        elseif($tujuan == 'TGA' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PASURUHAN.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'bgr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'bgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'bgr'){
                            echo rupiah(48000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'PSR' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(190000 * $koli);
                        }
                        elseif($tujuan == 'PSR' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PROBOLINGGO.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'bgr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PRB' &&$dari == 'bgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PRB' &&$dari == 'bgr'){
                            echo rupiah(48000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'PRB' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(190000 * $koli);
                        }
                        elseif($tujuan == 'PRB' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //NGANJUK.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'bgr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'NGJ' &&$dari == 'bgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'NGJ' &&$dari == 'bgr'){
                            echo rupiah(48000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'NGJ' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(190000 * $koli);
                        }
                        elseif($tujuan == 'NGJ' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MADIUN.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN' &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'bgr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'bgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'bgr'){
                            echo rupiah(48000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'MDN' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(190000 * $koli);
                        }
                        elseif($tujuan == 'MDN' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //ponorogo/magetan.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1' &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == "MDN1"  &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == "MDN1"  &&$dari == 'bgr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == "MDN1"  &&$dari == 'bgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == "MDN1"  &&$dari == 'bgr'){
                            echo rupiah(48000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'MDN1' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(190000 * $koli);
                        }
                        elseif($tujuan == 'MDN1' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(75000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == "MDN1"  &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JEMBER.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'bgr'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBR' &&$dari == 'bgr'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBR' &&$dari == 'bgr'){
                            echo rupiah(51000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'JBR' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(200000 * $koli);
                        }
                        elseif($tujuan == 'JBR' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(80000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //LUMAJANG.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'bgr'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'LMG' &&$dari == 'bgr'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'LMG' &&$dari == 'bgr'){
                            echo rupiah(51000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'LMG' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(200000 * $koli);
                        }
                        elseif($tujuan == 'LMG' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(70000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //BANYUWANGI.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'bgr'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'BYG' &&$dari == 'bgr'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BYG' &&$dari == 'bgr'){
                            echo rupiah(51000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'BYG' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(200000 * $koli);
                        }
                        elseif($tujuan == 'BYG' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(80000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //DENPASAR.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'bgr'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPS' &&$dari == 'bgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'DPS' &&$dari == 'bgr'){
                            echo rupiah(59000);
                        }
                         //////////////////tambahan///////////////////

                        elseif($tujuan == 'DPS' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(280000 * $koli);
                        }
                        elseif($tujuan == 'DPS' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(100000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //TABANAN.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'bgr'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'TBN' &&$dari == 'bgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TBN' &&$dari == 'bgr'){
                            echo rupiah(59000);
                        }
                        //////////////////tambahan///////////////////

                        elseif($tujuan == 'TBN' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(280000 * $koli);
                        }
                        elseif($tujuan == 'TBN' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(100000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //NUSADUA.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'bgr'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'ND2' &&$dari == 'bgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'ND2' &&$dari == 'bgr'){
                            echo rupiah(59000);
                        }
                        //////////////////tambahan///////////////////

                        elseif($tujuan == 'ND2' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(280000 * $koli);
                        }
                        elseif($tujuan == 'ND2' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(100000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //SINGARAJA.bgr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'bgr'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'bgr'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'bgr'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'SGRJ' &&$dari == 'bgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SGRJ' &&$dari == 'bgr'){
                            echo rupiah(59000);
                        }
                        //////////////////tambahan///////////////////

                        elseif($tujuan == 'SGRJ' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(280000 * $koli);
                        }
                        elseif($tujuan == 'SGRJ' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(100000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    
                    //BANDAR.bgr//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'BDR'  &&$dari == 'bgr'){
                        echo rupiah(50000 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }                       
                        elseif($berat ==1 &&$tujuan == 'BDR' &&$dari == 'bgr'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDR' &&$dari == 'bgr'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'BDR' &&$dari == 'bgr'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        //////////////////tambahan///////////////////

                        elseif($tujuan == 'BDR' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(250000 * $koli);
                        }
                        elseif($tujuan == 'BDR' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(100000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    
                    //PALEMBANG.bgr//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'PLB'  &&$dari == 'bgr'){
                        echo rupiah(50000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }                       
                        elseif($berat ==1 &&$tujuan == 'PLB' &&$dari == 'bgr'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PLB' &&$dari == 'bgr'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'PLB' &&$dari == 'bgr'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        //////////////////tambahan///////////////////

                        elseif($tujuan == 'PLB' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(300000 * $koli);
                        }
                        elseif($tujuan == 'PLB' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(110000 * $koli);

                        }
                            ///////////////////////////////////////////
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PekanBaru.bgr//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'bgr'){
                        echo rupiah(20000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'bgr'){
                            echo rupiah((60000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'bgr'){
                            echo rupiah(($berat * 3000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        //////////////////tambahan///////////////////

                        elseif($tujuan == 'PKB' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(350000 * $koli);
                        }
                        elseif($tujuan == 'PKB' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(110000 * $koli);

                        }
                            ///////////////////////////////////////////
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }  

                    //Jambi.bgr//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'bgr'){
                        echo rupiah(25000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'bgr'){
                            echo rupiah((50000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'bgr'){
                            echo rupiah(($berat * 2500) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        //////////////////tambahan///////////////////

                        elseif($tujuan == 'JBI' && $dari == 'bgr' &&$jenis == 'stu'){

                            echo rupiah(300000 * $koli);
                        }
                        elseif($tujuan == 'JBI' && $dari == 'bgr' &&$jenis == 'spt'){
                            echo rupiah(110000 * $koli);

                        }
                            ///////////////////////////////////////////
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'bgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

            // BEKASI.bks//

                    //jakarta.bks///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1050 + 57000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'bks'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'JKT' &&$dari == 'bks'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JKT' &&$dari == 'bks'){
                            echo rupiah(31000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }                

                    //Depok.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'bks'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPK' &&$dari == 'bks'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'DPK' &&$dari == 'bks'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //tangerang.bks///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'bks'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGR' &&$dari == 'bks'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGR' &&$dari == 'bks'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //bekasi.bks/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'bks'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BKS' &&$dari == 'bks'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BKS' &&$dari == 'bks'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //cikarang.bks///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'bks'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'CKR' &&$dari == 'bks'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CKR' &&$dari == 'bks'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }
                    
                    //karawang.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'bks'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'KRW' &&$dari == 'bks'){
                            echo rupiah(21000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KRW' &&$dari == 'bks'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SERANG.bks///

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'bks'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'SRG' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SRG' &&$dari == 'bks'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BOGOR.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'bks'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BGR' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BGR' &&$dari == 'bks'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //CIREBON.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'bks'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'CRB' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CRB' &&$dari == 'bks'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //purwakarta.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'bks'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //Indramayu.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'bks'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BANDUNG.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'bks'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDG' &&$dari == 'bks'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDG' &&$dari == 'bks'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //GARUT.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'bks'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'GRT' &&$dari == 'bks'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GRT' &&$dari == 'bks'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //TASIK.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'bks'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'TSK' &&$dari == 'bks'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TSK' &&$dari == 'bks'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SUKABUMI.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'bks'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SKB' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SKB' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PURWOKERTO.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'bks'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWT' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWT' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KEBUMEN.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'bks'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KPB' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KPB' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TEGAL.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'bks'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGL' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGL' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PEMALANG.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'bks'){
                            echo rupiah($berat * 1250 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PML' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PML' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    
                    //PEKALONGAN.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1150 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'bks'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PKL' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PKL' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    
                    //BANJAR PATROMAN.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1150 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'bks'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'BTR' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BTR' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SEMARANG.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'bks'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SMG' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SMG' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'bks'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDS' &&$dari == 'bks'){
                            echo rupiah(116000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDS' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JEPARA/PATI.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1500 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'bks'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'bks'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'bks'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'bks'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'YGY' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'YGY' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'bks'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SOLO' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SOLO' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'bks'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KLT' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KLT' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'bks'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SLTG' &&$dari == 'bks'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SLTG' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'bks'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'MGL' &&$dari == 'bks'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MGL' &&$dari == 'bks'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1250 + 60000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'bks'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat ==1 &&$tujuan == 'SBY' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SBY' &&$dari == 'bks'){
                            echo rupiah(41000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //BLORA.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'bks'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLA' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLA' &&$dari == 'bks'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BOJONEGORO.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'bks'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BJG' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BJG' &&$dari == 'bks'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BGRESIK.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'bks'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'GSK' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GSK' &&$dari == 'bks'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //SIDOARJO.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'bks'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'SDJ' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SDJ' &&$dari == 'bks'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MOJOKERTO.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'bks'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MJK' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MJK' &&$dari == 'bks'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JOMBANG.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'bks'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBG' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBG' &&$dari == 'bks'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MALANG.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'bks'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MLG' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MLG' &&$dari == 'bks'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }


                    //KEDIRI.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'bks'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDR' &&$dari == 'bks'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDR' &&$dari == 'bks'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BLITAR.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'bks'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLT' &&$dari == 'bks'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLT' &&$dari == 'bks'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TULUNGAGUNG.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'bks'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGA' &&$dari == 'bks'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGA' &&$dari == 'bks'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PASURUHAN.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'bks'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'bks'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'bks'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PROBOLINGGO.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'bks'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PRB' &&$dari == 'bks'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PRB' &&$dari == 'bks'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //NGANJUK.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'bks'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'NGJ' &&$dari == 'bks'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'NGJ' &&$dari == 'bks'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MADIUN.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN' &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'bks'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'bks'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'bks'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //ponorogo/magetan.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1' &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == "MDN1"  &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == "MDN1"  &&$dari == 'bks'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == "MDN1"  &&$dari == 'bks'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == "MDN1"  &&$dari == 'bks'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == "MDN1"  &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JEMBER.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'bks'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBR' &&$dari == 'bks'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBR' &&$dari == 'bks'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //LUMAJANG.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'bks'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'LMG' &&$dari == 'bks'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'LMG' &&$dari == 'bks'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //BANYUWANGI.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'bks'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'BYG' &&$dari == 'bks'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BYG' &&$dari == 'bks'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //DENPASAR.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'bks'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPS' &&$dari == 'bks'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'DPS' &&$dari == 'bks'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //TABANAN.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'bks'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'TBN' &&$dari == 'bks'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TBN' &&$dari == 'bks'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //NUSADUA.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'bks'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'ND2' &&$dari == 'bks'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'ND2' &&$dari == 'bks'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //SINGARAJA.bks//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'bks'){
                        echo rupiah((($berat - 10) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'bks'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'bks'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'SGRJ' &&$dari == 'bks'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SGRJ' &&$dari == 'bks'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    
                    //BANDAR.bks//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'BDR'  &&$dari == 'bks'){
                        echo rupiah(50000 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }                       
                        elseif($berat ==1 &&$tujuan == 'BDR' &&$dari == 'bks'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDR' &&$dari == 'bks'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'BDR' &&$dari == 'bks'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    
                    //PALEMBANG.bks//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'PLB'  &&$dari == 'bks'){
                        echo rupiah(50000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }                       
                        elseif($berat ==1 &&$tujuan == 'PLB' &&$dari == 'bks'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PLB' &&$dari == 'bks'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'PLB' &&$dari == 'bks'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PekanBaru.bks//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'bks'){
                        echo rupiah(20000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'bks'){
                            echo rupiah((60000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'bks'){
                            echo rupiah(($berat * 3000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }  

                    //Jambi.bks//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'bks'){
                        echo rupiah(25000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'bks'){
                            echo rupiah((50000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'bks'){
                            echo rupiah(($berat * 2500) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'bks'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

            // TANGERANG.TGR//

                    //jakarta.TGR///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1050 + 62000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'tgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'tgr'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'tgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }                

                    //Depok.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'tgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'tgr'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'tgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //tangerang.TGR///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'tgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'tgr'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'tgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //bekasi.TGR/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'tgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'tgr'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'tgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //cikarang.TGR///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'tgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'tgr'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'tgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }
                    
                    //karawang.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'tgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'tgr'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'tgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SERANG.TGR///

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'tgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'SRG' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SRG' &&$dari == 'tgr'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BOGOR.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'tgr'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'BGR' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BGR' &&$dari == 'tgr'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //CIREBON.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'tgr'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'CRB' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CRB' &&$dari == 'tgr'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                     //indramayu.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'tgr'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'tgr'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                     //PURWAKARTA.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'tgr'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'tgr'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BANDUNG.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'tgr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDG' &&$dari == 'tgr'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDG' &&$dari == 'tgr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //GARUT.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'tgr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'GRT' &&$dari == 'tgr'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GRT' &&$dari == 'tgr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TASIK.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'tgr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'TSK' &&$dari == 'tgr'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TSK' &&$dari == 'tgr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SUKABUMI.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'tgr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SKB' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SKB' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PURWOKERTO.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'tgr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWT' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWT' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KEBUMEN.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'tgr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KPB' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KPB' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TEGAL.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'tgr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGL' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGL' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PEMALANG.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'tgr'){
                            echo rupiah($berat * 1250 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PML' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PML' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                   
                    //PEKALONGAN.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'tgr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PKL' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PKL' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }
                    
                    //BANJAR PATROMAN.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'tgr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'BTR' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BTR' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SEMARANG.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'tgr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SMG' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SMG' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'tgr'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDS' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDS' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JEPARA/PATI.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1500 + 65000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'tgr'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'tgr'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'tgr'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'tgr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'YGY' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'YGY' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'tgr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SOLO' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SOLO' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'tgr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KLT' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KLT' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'tgr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SLTG' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SLTG' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'tgr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'MGL' &&$dari == 'tgr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MGL' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'tgr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'SBY' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SBY' &&$dari == 'tgr'){
                            echo rupiah(41000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    
                    //BOJONEGORO.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'tgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BJG' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BJG' &&$dari == 'tgr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //GRESIK.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'tgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'GSK' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GSK' &&$dari == 'tgr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //SIDOARJO.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'tgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'SDJ' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SDJ' &&$dari == 'tgr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MOJOKERTO.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'tgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MJK' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MJK' &&$dari == 'tgr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JOMBANG.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'tgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBG' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBG' &&$dari == 'tgr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MALANG.TGR/

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'tgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MLG' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MLG' &&$dari == 'tgr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }


                    //KEDIRI.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'tgr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDR' &&$dari == 'tgr'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDR' &&$dari == 'tgr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BLITAR.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'tgr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLT' &&$dari == 'tgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLT' &&$dari == 'tgr'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TULUNGAGUNG.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'tgr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGA' &&$dari == 'tgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGA' &&$dari == 'tgr'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PASURUHAN.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'tgr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PSR' &&$dari == 'tgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PSR' &&$dari == 'tgr'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PROBOLINGGO.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'tgr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PRB' &&$dari == 'tgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PRB' &&$dari == 'tgr'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //NGANJUK.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'tgr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'NGJ' &&$dari == 'tgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'NGJ' &&$dari == 'tgr'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MADIUN.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN' &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'tgr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'tgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'tgr'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //ponorogo/magetan.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'   &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == "MDN1"  &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == "MDN1"  &&$dari == 'tgr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == "MDN1"  &&$dari == 'tgr'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == "MDN1"  &&$dari == 'tgr'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == "MDN1"  &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JEMBER.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'tgr'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBR' &&$dari == 'tgr'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBR' &&$dari == 'tgr'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //LUMAJANG.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'tgr'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'LMG' &&$dari == 'tgr'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'LMG' &&$dari == 'tgr'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //BANYUWANGI.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'tgr'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'BYG' &&$dari == 'tgr'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BYG' &&$dari == 'tgr'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //DENPASAR.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'tgr'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPS' &&$dari == 'tgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'DPS' &&$dari == 'tgr'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //TABANAN.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'tgr'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'TBN' &&$dari == 'tgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TBN' &&$dari == 'tgr'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //NUSADUA.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'tgr'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'ND2' &&$dari == 'tgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'ND2' &&$dari == 'tgr'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //SINGARAJA.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'tgr'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'tgr'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'tgr'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'SGRJ' &&$dari == 'tgr'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SGRJ' &&$dari == 'tgr'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                   
                    //BANDAR.TGR//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'BDR'  &&$dari == 'tgr'){
                        echo rupiah((55000 * 1500)+ ($Lebar * $Panjang * $Tinggi * $e2));
                        }                       
                        elseif($berat ==1 &&$tujuan == 'BDR' &&$dari == 'tgr'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDR' &&$dari == 'tgr'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'BDR' &&$dari == 'tgr'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    
                    //PALEMBANG.TGR//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'PLB'  &&$dari == 'tgr'){
                        echo rupiah((55000 * 1500)+ ($Lebar * $Panjang * $Tinggi * $e3));
                        }                       
                        elseif($berat ==1 &&$tujuan == 'PLB' &&$dari == 'tgr'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PLB' &&$dari == 'tgr'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'PLB' &&$dari == 'tgr'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PekanBaru.tgr//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'tgr'){
                        echo rupiah(30000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'tgr'){
                            echo rupiah((70000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'tgr'){
                            echo rupiah(($berat * 3400) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }  

                    //Jambi.tgr//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'tgr'){
                        echo rupiah(30000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'tgr'){
                            echo rupiah((60000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'tgr'){
                            echo rupiah(($berat * 2900) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

            // CIKARANG.CKR//

                    //jakarta.CKR///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1050 + 62000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'ckr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'ckr'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'ckr'){
                            echo rupiah(31000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }                

                    //Depok.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'ckr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'ckr'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'ckr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //tangerang.CKR///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'ckr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'ckr'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'ckr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //bekasi.CKR/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'ckr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'ckr'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'ckr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //cikarang.CKR///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'ckr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'ckr'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'ckr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }
                    
                    //karawang.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'ckr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'ckr'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'ckr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SERANG.CKR///

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'ckr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'ckr'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'ckr'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BOGOR.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'ckr'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'ckr'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //CIREBON.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'ckr'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'ckr'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //indramayu.ckr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'ckr'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'ckr'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                     //PURWAKARTA.ckr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'ckr'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'ckr'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BANDUNG.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'ckr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'ckr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'ckr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //GARUT.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'ckr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'ckr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'ckr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TASIK.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'ckr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'ckr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'ckr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SUKABUMI.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'ckr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PURWOKERTO.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'ckr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KEBUMEN.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'ckr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TEGAL.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'ckr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PEMALANG.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'ckr'){
                            echo rupiah($berat * 1250 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                   
                    //PEKALONGAN.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'ckr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BANJAR PATROMAN.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'ckr'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SEMARANG.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'ckr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'ckr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JEPARA/PATI.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1500 + 65000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'ckr'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'ckr'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'ckr'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'ckr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'ckr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'ckr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'ckr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'ckr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'ckr'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'ckr'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'ckr'){
                            echo rupiah(41000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //BLORA.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'ckr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'ckr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BOJONEGORO.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'ckr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'ckr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //GRESIK.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'ckr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'ckr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //SIDOARJO.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'ckr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'ckr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MOJOKERTO.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'ckr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'ckr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JOMBANG.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'ckr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'ckr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MALANG.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'ckr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'ckr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }


                    //KEDIRI.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'ckr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'ckr'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'ckr'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BLITAR.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'ckr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'ckr'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'ckr'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TULUNGAGUNG.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'ckr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'ckr'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'ckr'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PASURUHAN.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'ckr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'ckr'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'ckr'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PROBOLINGGO.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'ckr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'ckr'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'ckr'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //NGANJUK.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'ckr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'ckr'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'ckr'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MADIUN.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN' &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'ckr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN' &&$dari == 'ckr'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN' &&$dari == 'ckr'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //ponorogo/magetan.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1' &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == "MDN1"  &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == "MDN1"  &&$dari == 'ckr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == "MDN1"  &&$dari == 'ckr'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == "MDN1"  &&$dari == 'ckr'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == "MDN1"  &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JEMBER.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'ckr'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'ckr'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'ckr'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //LUMAJANG.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'ckr'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'ckr'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'ckr'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //BANYUWANGI.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'ckr'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'ckr'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'ckr'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //DENPASAR.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'ckr'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'ckr'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'ckr'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //TABANAN.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'ckr'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'ckr'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'ckr'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //NUSADUA.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'ckr'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'ckr'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'ckr'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //SINGARAJA.CKR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'ckr'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'ckr'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'ckr'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'ckr'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'ckr'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'tgr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                   
                    //BANDAR.CKR//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'BDR'  &&$dari == 'ckr'){
                        echo rupiah(55000 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }                       
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'ckr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'ckr'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'BDR' &&$dari == 'ckr'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //PALEMBANG.CKR//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'PLB'  &&$dari == 'ckr'){
                        echo rupiah(55000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }                       
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'ckr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'ckr'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'PLB' &&$dari == 'ckr'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PekanBaru.ckr//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'ckr'){
                        echo rupiah(30000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'ckr'){
                            echo rupiah((70000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'ckr'){
                            echo rupiah(($berat * 3400) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }  

                    //Jambi.ckr//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'ckr'){
                        echo rupiah(30000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'ckr'){
                            echo rupiah((60000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'ckr'){
                            echo rupiah(($berat * 2900) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'ckr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

            // KARAWANG.KRW//

                    //jakarta.KRW///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1050 + 62000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'krw'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'krw'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'krw'){
                            echo rupiah(31000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }                

                    //Depok.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'krw'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'krw'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'krw'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //tangerang.KRW///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'krw'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'krw'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'krw'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //bekasi.KRW/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'krw'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'krw'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'krw'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //cikarang.KRW///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'krw'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'krw'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'krw'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }
                    
                    //karawang.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'krw'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'krw'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'krw'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SERANG.KRW///

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'krw'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'krw'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'krw'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BOGOR.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'krw'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'krw'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //CIREBON.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'krw'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'krw'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //indramayu.krw//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'krw'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'krw'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                     //PURWAKARTA.krw//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'krw'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'krw'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BANDUNG.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'krw'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'krw'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'krw'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //GARUT.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'krw'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'krw'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'krw'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TASIK.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'krw'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'krw'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'krw'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SUKABUMI.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'krw'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PURWOKERTO.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'krw'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KEBUMEN.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'krw'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TEGAL.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'krw'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PEMALANG.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'krw'){
                            echo rupiah($berat * 1250 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                   
                    //PEKALONGAN.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'krw'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BATANG.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'krw'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BANJAR PATROMAN.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'krw'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SEMARANG.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'krw'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1500 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'krw'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'krw'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'krw'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JEPARA/PATI.krw//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1500 + 65000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'krw'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'krw'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'krw'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'krw'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'krw'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'krw'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'krw'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'krw'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'krw'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'krw'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'krw'){
                            echo rupiah(41000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //BLORA.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'krw'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'krw'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BOJONEGORO.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'krw'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'krw'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //GRESIK.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'krw'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'krw'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //SIDOARJO.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'krw'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'krw'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MOJOKERTO.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'krw'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'krw'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JOMBANG.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'krw'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'krw'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MALANG.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'krw'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'krw'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }


                    //KEDIRI.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'krw'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'krw'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'krw'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BLITAR.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'krw'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'krw'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'krw'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TULUNGAGUNG.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'krw'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'krw'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'krw'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PASURUHAN.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'krw'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'krw'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'krw'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PROBOLINGGO.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'krw'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'krw'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'krw'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //NGANJUK.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'krw'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'krw'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'krw'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MADIUN.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN' &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'krw'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN' &&$dari == 'krw'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN' &&$dari == 'krw'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //ponorogo/magetan.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1' &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == "MDN1"  &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == "MDN1"  &&$dari == 'krw'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == "MDN1"  &&$dari == 'krw'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == "MDN1"  &&$dari == 'krw'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == "MDN1"  &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JEMBER.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'krw'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'krw'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'krw'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //LUMAJANG.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'krw'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'krw'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'krw'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //BANYUWANGI.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'krw'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'krw'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'krw'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //DENPASAR.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'krw'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'krw'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'krw'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //TABANAN.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'krw'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'krw'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'krw'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //NUSADUA.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'krw'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'krw'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'krw'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //SINGARAJA.KRW//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'krw'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'krw'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'krw'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'krw'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'krw'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                   
                    //BANDAR.KRW//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'BDR'  &&$dari == 'krw'){
                        echo rupiah(55000 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }                       
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'krw'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'krw'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'BDR' &&$dari == 'krw'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }
                    
                    //PALEMBANG.KRW//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'PLB'  &&$dari == 'krw'){
                        echo rupiah(55000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }                       
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'krw'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'krw'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'PLB' &&$dari == 'krw'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PekanBaru.krw//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'krw'){
                        echo rupiah(30000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'krw'){
                            echo rupiah((70000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'krw'){
                            echo rupiah(($berat * 3400) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }  

                    //Jambi.krw//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'krw'){
                        echo rupiah(30000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'krw'){
                            echo rupiah((60000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'krw'){
                            echo rupiah(($berat * 2900) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'krw'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

            // SERANG.SRG//

                    //jakarta.srg///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1050 + 62000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'srg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'srg'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'srg'){
                            echo rupiah(31000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }                

                    //Depok.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'srg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'srg'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'srg'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //tangerang.srg///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'srg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'srg'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'srg'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //bekasi.srg/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'srg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'srg'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'srg'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //cikarang.srg///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'srg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'srg'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'srg'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }
                    
                    //karawang.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'srg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'srg'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'srg'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SERANG.srg///

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'srg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'srg'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'srg'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BOGOR.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'srg'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'srg'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //CIREBON.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'srg'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'srg'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //indramayu.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'srg'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'srg'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                     //PURWAKARTA.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'srg'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'srg'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BANDUNG.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'srg'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'srg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'srg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //GARUT.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'srg'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'srg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'srg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TASIK.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'srg'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'srg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'srg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SUKABUMI.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'srg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PURWOKERTO.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'srg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KEBUMEN.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'srg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TEGAL.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'srg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PEMALANG.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'srg'){
                            echo rupiah($berat * 1250 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                   
                    //PEKALONGAN.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'srg'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    
                    //BANJAR PATROMAN.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'srg'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SEMARANG.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'srg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1500 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'srg'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'srg'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'srg'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JEPARA/PATI.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1500 + 65000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'srg'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'srg'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'srg'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'srg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'srg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'srg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'srg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'srg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'srg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'srg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'srg'){
                            echo rupiah(41000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    
                    //BOJONEGORO.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'srg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'srg'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //GRESIK.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'srg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'srg'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //SIDOARJO.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'srg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'srg'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MOJOKERTO.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'srg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'srg'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JOMBANG.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'srg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'srg'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MALANG.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'srg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'srg'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }


                    //KEDIRI.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'srg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'srg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'srg'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BLITAR.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'srg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'srg'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'srg'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TULUNGAGUNG.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'srg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'srg'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'srg'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PASURUHAN.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'srg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'srg'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'srg'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PROBOLINGGO.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'srg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'srg'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'srg'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //NGANJUK.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'srg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'srg'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'srg'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MADIUN.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN' &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'srg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN' &&$dari == 'srg'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN' &&$dari == 'srg'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //ponorogo/magetan.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1' &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == "MDN1"  &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == "MDN1"  &&$dari == 'srg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == "MDN1"  &&$dari == 'srg'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == "MDN1"  &&$dari == 'srg'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == "MDN1"  &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JEMBER.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'srg'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'srg'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'srg'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //LUMAJANG.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'srg'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'srg'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'srg'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //BANYUWANGI.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'srg'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'srg'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'srg'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //DENPASAR.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'srg'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'srg'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'srg'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //TABANAN.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'srg'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'srg'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'srg'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //NUSADUA.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'srg'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'srg'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'srg'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //SINGARAJA.srg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'srg'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'srg'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'srg'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'srg'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'srg'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                   
                    //BANDAR.srg//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'BDR'  &&$dari == 'srg'){
                        echo rupiah(55000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }                       
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'srg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'srg'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'BDR' &&$dari == 'srg'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }                    

                    //PALEMBANG.KRW//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'PLB'  &&$dari == 'srg'){
                        echo rupiah(55000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }                       
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'srg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'srg'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'PLB' &&$dari == 'srg'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PekanBaru.srg//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'srg'){
                        echo rupiah(30000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'srg'){
                            echo rupiah((70000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'srg'){
                            echo rupiah(($berat * 3400) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }  

                    //Jambi.srg//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'srg'){
                        echo rupiah(30000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'srg'){
                            echo rupiah((60000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'srg'){
                            echo rupiah(($berat * 2900) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'srg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

            // SUKABUMI.SKB//

                    //jakarta.skb///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1050 + 62000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'skb'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'skb'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'skb'){
                            echo rupiah(31000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }                

                    //Depok.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'skb'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'skb'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'skb'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //tangerang.skb///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'skb'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'skb'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'skb'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //bekasi.skb/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'skb'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'skb'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'skb'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //cikarang.skb///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'skb'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'skb'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'skb'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }
                    
                    //karawang.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'skb'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'skb'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'skb'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SERANG.skb///

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'skb'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'skb'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'skb'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BOGOR.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'skb'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'skb'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //CIREBON.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'skb'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'skb'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //indramayu.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'skb'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'skb'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                     //PURWAKARTA.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'skb'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'skb'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BANDUNG.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'skb'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'skb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'skb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //GARUT.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'skb'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'skb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'skb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TASIK.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'skb'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'skb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'skb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SUKABUMI.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'skb'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PURWOKERTO.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'skb'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KEBUMEN.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'skb'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TEGAL.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'skb'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PEMALANG.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'skb'){
                            echo rupiah($berat * 1250 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                   
                    //PEKALONGAN.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'skb'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    
                    //BANJAR PATROMAN.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'skb'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SEMARANG.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'skb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1500 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'skb'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'skb'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'skb'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JEPARA/PATI.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1500 + 65000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'skb'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'skb'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'skb'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'skb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'skb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'skb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'skb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'skb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'skb'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'skb'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'skb'){
                            echo rupiah(41000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    
                    //BOJONEGORO.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'skb'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'skb'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //GRESIK.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'skb'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'skb'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //SIDOARJO.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'skb'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'skb'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MOJOKERTO.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'skb'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'skb'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JOMBANG.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'skb'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'skb'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MALANG.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'skb'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'skb'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }


                    //KEDIRI.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'skb'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'skb'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'skb'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BLITAR.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'skb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'skb'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'skb'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TULUNGAGUNG.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'skb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'skb'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'skb'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PASURUHAN.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'skb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'skb'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'skb'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PROBOLINGGO.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'skb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'skb'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'skb'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //NGANJUK.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'skb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'skb'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'skb'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MADIUN.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN' &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'skb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN' &&$dari == 'skb'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN' &&$dari == 'skb'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //ponorogo/magetan.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1' &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == "MDN1"  &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == "MDN1"  &&$dari == 'skb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == "MDN1"  &&$dari == 'skb'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == "MDN1"  &&$dari == 'skb'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == "MDN1"  &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JEMBER.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'skb'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'skb'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'skb'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //LUMAJANG.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'skb'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'skb'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'skb'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //BANYUWANGI.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'skb'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'skb'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'skb'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //DENPASAR.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'skb'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'skb'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'skb'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //TABANAN.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'skb'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'skb'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'skb'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //NUSADUA.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'skb'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'skb'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'skb'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //SINGARAJA.skb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'skb'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'skb'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'skb'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'skb'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'skb'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                   
                    //BANDAR.skb//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'BDR'  &&$dari == 'skb'){
                        echo rupiah(55000 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }                       
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'skb'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'skb'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'BDR' &&$dari == 'skb'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }                    

                    //PALEMBANG.skb//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'PLB'  &&$dari == 'skb'){
                        echo rupiah(55000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }                       
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'skb'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'skb'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'PLB' &&$dari == 'skb'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PekanBaru.skb//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'skb'){
                        echo rupiah(30000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'skb'){
                            echo rupiah((70000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'skb'){
                            echo rupiah(($berat * 3400) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }  

                    //Jambi.skb//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'skb'){
                        echo rupiah(30000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'skb'){
                            echo rupiah((60000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'skb'){
                            echo rupiah(($berat * 2900) + ($Lebar * $Panjang * $Tinggi  * $e5));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'skb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

            // BANDUNG.bdg//

                    //jakarta.bdg///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1050 + 57000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'bdg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'bdg'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'bdg'){
                            echo rupiah(31000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }                

                    //Depok.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'bdg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'bdg'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'bdg'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //tangerang.bdg///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'bdg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'bdg'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'bdg'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //bekasi.bdg/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'bdg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'bdg'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'bdg'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //cikarang.bdg///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'bdg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'bdg'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'bdg'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }
                    
                    //karawang.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'bdg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'bdg'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'bdg'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SERANG.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'bdg'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'bdg'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    
                    //BOGOR.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'bdg'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'bdg'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //CIREBON.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1050 + 51000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'bdg'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'bdg'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //INDRAMAYU.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'bdg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //PURWAKARTA.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'bdg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BANDUNG.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >10 && $berat <=100 &&$tujuan == 'BDG' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10) * 1000 + 35000)+ ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'bdg'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat == 1 &&$tujuan == 'BDG' &&$dari == 'bdg'){
                            echo rupiah(15000);
                        }
                        elseif($berat == 2 &&$tujuan == 'BDG' &&$dari == 'bdg'){
                            echo rupiah(20000);
                        }                    
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //GARUT.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >10 && $berat <=100 &&$tujuan == 'GRT' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10) * 1000 + 35000)+ ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'bdg'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat == 1 &&$tujuan == 'GRT' &&$dari == 'bdg'){
                            echo rupiah(15000);
                        }
                        elseif($berat == 2 &&$tujuan == 'GRT' &&$dari == 'bdg'){
                            echo rupiah(20000);
                        }                    
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //TASIK.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2200 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >10 && $berat <=100 &&$tujuan == 'TSK' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10) * 1000 + 35000)+ ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'bdg'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat == 1 &&$tujuan == 'TSK' &&$dari == 'bdg'){
                            echo rupiah(15000);
                        }
                        elseif($berat == 2 &&$tujuan == 'TSK' &&$dari == 'bdg'){
                            echo rupiah(20000);
                        }                    
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SUKABUMI.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'bdg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PURWOKERTO.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'bdg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KEBUMEN.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'bdg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TEGAL.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'bdg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PEMALANG.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'bdg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                   
                    //PEKALONGAN.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1150 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'bdg'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BANJAR PATROMAN.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1150 + 55000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'bdg'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SEMARANG.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'bdg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'bdg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JEPARA/PATI.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1500 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'bdg'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'bdg'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'bdg'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'bdg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'bdg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'bdg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'bdg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.bdg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'bdg'){
                        echo rupiah((($berat - 10) * 1300 + 56000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'bdg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'bdg'){
                            echo rupiah(16000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'SBY' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1250 + 60000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'bdg'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'bdg'){
                            echo rupiah(41000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //BOJONEGORO.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'BJG' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'bdg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'bdg'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //GRESIK.bdg//

                     if($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'GSK' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'bdg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'bdg'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //SIDOARJO.bdg//

                     if($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'SDJ' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'bdg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'bdg'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MOJOKERTO.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'MJK' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'bdg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'bdg'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    
                    //MALANG.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'MLG' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'bdg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'bdg'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }


                    //KEDIRI.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 43000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'KDR' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1250 + 61000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'bdg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'bdg'){
                            echo rupiah(26000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'bdg'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BLITAR.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'BLT' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'bdg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'bdg'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'bdg'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TULUNGAGUNG.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'TGA' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'bdg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'bdg'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'bdg'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PASURUHAN.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'PSR' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'bdg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'bdg'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'bdg'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PROBOLINGGO.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'PRB' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'bdg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'bdg'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'bdg'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //NGANJUK.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'NGJ' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'bdg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'bdg'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'bdg'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MADIUN.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'MDN' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'bdg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN' &&$dari == 'bdg'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN' &&$dari == 'bdg'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //ponorogo/magetan.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 47000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'MDN1' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1350 + 62000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'bdg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'bdg'){
                            echo rupiah(31000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'bdg'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JEMBER.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'JBR' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'bdg'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'bdg'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'bdg'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //LUMAJANG.bdg//

                   if($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'LMG' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'bdg'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'bdg'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'bdg'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //BANYUWANGI.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'BYG' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1400 + 65000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'bdg'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'bdg'){
                            echo rupiah(34000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'bdg'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //DENPASAR.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'DPS' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'bdg'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'bdg'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'bdg'){
                            echo rupiah(56000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //TABANAN.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'TBN' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'bdg'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'bdg'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'bdg'){
                            echo rupiah(56000);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //NUSADUA.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'ND2' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'bdg'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'bdg'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'bdg'){
                            echo rupiah(56000);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //SINGARAJA.bdg//

                    if($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'bdg'){
                            echo rupiah((($berat - 1) * 2700 + 58000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >10 && $berat >=100 &&$tujuan == 'SGRJ' &&$dari == 'bdg'){
                            echo rupiah((($berat - 10 ) * 1650 + 80000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'bdg'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'bdg'){
                            echo rupiah(36000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'bdg'){
                            echo rupiah(56000);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                   
                    //BANDAR.bdg//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'BDR'  &&$dari == 'bdg'){
                        echo rupiah(55000 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }                       
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'bdg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'bdg'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'BDR' &&$dari == 'bdg'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //PALEMBANG.bdg//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'PLB'  &&$dari == 'bdg'){
                        echo rupiah(55000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }                       
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'bdg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'bdg'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'PLB' &&$dari == 'bdg'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PekanBaru.bdg//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'bdg'){
                        echo rupiah(20000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'bdg'){
                            echo rupiah((60000) + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'bdg'){
                            echo rupiah(($berat * 3000) + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }  

                    //Jambi.bdg//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'bdg'){
                        echo rupiah(20000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e8));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'bdg'){
                            echo rupiah((50000) + ($Lebar * $Panjang * $Tinggi  * $e8));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'bdg'){
                            echo rupiah(($berat * 2500) + ($Lebar * $Panjang * $Tinggi  * $e8));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'bdg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

            // GARUT.grt//

                    //jakarta.grt///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1050 + 62000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'grt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'grt'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'grt'){
                            echo rupiah(31000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }                

                    //Depok.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'grt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'grt'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'grt'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //tangerang.grt///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'grt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'grt'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'grt'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //bekasi.grt/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'grt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'grt'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'grt'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //cikarang.grt///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'grt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'grt'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'grt'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }
                    
                    //karawang.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'grt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'grt'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'grt'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SERANG.grt///

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'grt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'SRG' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SRG' &&$dari == 'grt'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BOGOR.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'grt'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BGR' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BGR' &&$dari == 'grt'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //CIREBON.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'grt'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'CRB' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CRB' &&$dari == 'grt'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                     //indramayu.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'grt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                     //PURWAKARTA.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'grt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BANDUNG.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'grt'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDG' &&$dari == 'grt'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDG' &&$dari == 'grt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //GARUT.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'grt'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'GRT' &&$dari == 'grt'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GRT' &&$dari == 'grt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //TASIK.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'grt'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'TSK' &&$dari == 'grt'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TSK' &&$dari == 'grt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SUKABUMI.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'grt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SKB' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SKB' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PURWOKERTO.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'grt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWT' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWT' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KEBUMEN.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'grt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KPB' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KPB' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TEGAL.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'grt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGL' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGL' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PEMALANG.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'grt'){
                            echo rupiah($berat * 1250 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PML' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PML' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                   
                    //PEKALONGAN.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'grt'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PKL' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PKL' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }
                    
                    //BANJAR PATROMAN.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'grt'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'BTR' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BTR' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SEMARANG.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'grt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SMG' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SMG' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'grt'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDS' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDS' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JEPARA/PATI.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1500 + 65000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'grt'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'grt'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'grt'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'grt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'YGY' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'YGY' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'grt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SOLO' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SOLO' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'grt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KLT' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KLT' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'grt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SLTG' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SLTG' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'grt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'MGL' &&$dari == 'grt'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MGL' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'grt'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat ==1 &&$tujuan == 'SBY' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SBY' &&$dari == 'grt'){
                            echo rupiah(41000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    
                    //BOJONEGORO.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'grt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BJG' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BJG' &&$dari == 'grt'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //GRESIK.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'grt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'GSK' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GSK' &&$dari == 'grt'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //SIDOARJO.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'grt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'SDJ' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SDJ' &&$dari == 'grt'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MOJOKERTO.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'grt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MJK' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MJK' &&$dari == 'grt'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JOMBANG.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'grt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBG' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBG' &&$dari == 'grt'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MALANG.grt/

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'grt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MLG' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MLG' &&$dari == 'grt'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }


                    //KEDIRI.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'grt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDR' &&$dari == 'grt'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDR' &&$dari == 'grt'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BLITAR.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'grt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLT' &&$dari == 'grt'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLT' &&$dari == 'grt'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TULUNGAGUNG.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'grt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGA' &&$dari == 'grt'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGA' &&$dari == 'grt'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PASURUHAN.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'grt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PSR' &&$dari == 'grt'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PSR' &&$dari == 'grt'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PROBOLINGGO.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'grt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PRB' &&$dari == 'grt'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PRB' &&$dari == 'grt'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //NGANJUK.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'grt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'NGJ' &&$dari == 'grt'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'NGJ' &&$dari == 'grt'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MADIUN.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN' &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'grt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'grt'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'grt'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //ponorogo/magetan.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'   &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == "MDN1"  &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == "MDN1"  &&$dari == 'grt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == "MDN1"  &&$dari == 'grt'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == "MDN1"  &&$dari == 'grt'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == "MDN1"  &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JEMBER.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'grt'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBR' &&$dari == 'grt'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBR' &&$dari == 'grt'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //LUMAJANG.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'grt'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'LMG' &&$dari == 'grt'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'LMG' &&$dari == 'grt'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //BANYUWANGI.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'grt'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'BYG' &&$dari == 'grt'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BYG' &&$dari == 'grt'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //DENPASAR.TGR//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'grt'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPS' &&$dari == 'grt'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'DPS' &&$dari == 'grt'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //TABANAN.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'grt'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'TBN' &&$dari == 'grt'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TBN' &&$dari == 'grt'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //NUSADUA.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'grt'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'ND2' &&$dari == 'grt'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'ND2' &&$dari == 'grt'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //SINGARAJA.grt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'grt'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'grt'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'grt'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'SGRJ' &&$dari == 'grt'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SGRJ' &&$dari == 'grt'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                   
                    //BANDAR.grt//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'BDR'  &&$dari == 'grt'){
                        echo rupiah((55000 * 1500)+ ($Lebar * $Panjang * $Tinggi * $e2));
                        }                       
                        elseif($berat ==1 &&$tujuan == 'BDR' &&$dari == 'grt'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDR' &&$dari == 'grt'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'BDR' &&$dari == 'grt'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    
                    //PALEMBANG.grt//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'PLB'  &&$dari == 'grt'){
                        echo rupiah((55000 * 1500)+ ($Lebar * $Panjang * $Tinggi * $e3));
                        }                       
                        elseif($berat ==1 &&$tujuan == 'PLB' &&$dari == 'grt'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PLB' &&$dari == 'grt'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'PLB' &&$dari == 'grt'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PekanBaru.grt//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'grt'){
                        echo rupiah(40000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'grt'){
                            echo rupiah((80000) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'grt'){
                            echo rupiah(($berat * 4100) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e23);
                    }  

                    //Jambi.grt//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'grt'){
                        echo rupiah(40000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e29));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'grt'){
                            echo rupiah((70000) + ($Lebar * $Panjang * $Tinggi  * $e29));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'grt'){
                            echo rupiah(($berat * 3500) + ($Lebar * $Panjang * $Tinggi  * $e29));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'grt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e29);
                    }

            // TASIKMALAYA.tsk//

                    //jakarta.tsk///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1050 + 62000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'tsk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi  * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'tsk'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'tsk'){
                            echo rupiah(31000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }                

                    //Depok.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'tsk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'tsk'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'tsk'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //tangerang.tsk///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'tsk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'tsk'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'tsk'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //bekasi.tsk/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'tsk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'tsk'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'tsk'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //cikarang.tsk///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'tsk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'tsk'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'tsk'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }
                    
                    //karawang.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1050 + 58000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'tsk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'tsk'){
                            echo rupiah(21000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'tsk'){
                            echo rupiah(36000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SERANG.tsk///

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1050 + 53000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'tsk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'SRG' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SRG' &&$dari == 'tsk'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BOGOR.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'tsk'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BGR' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BGR' &&$dari == 'tsk'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //CIREBON.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1050 + 55000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'tsk'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'CRB' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CRB' &&$dari == 'tsk'){
                            echo rupiah(21000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                     //indramayu.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'tsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                     //PURWAKARTA.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1200 + 56000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'tsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BANDUNG.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'tsk'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDG' &&$dari == 'tsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDG' &&$dari == 'tsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //GARUT.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'tsk'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'GRT' &&$dari == 'tsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GRT' &&$dari == 'tsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //TASIK.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1000 + 40000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'tsk'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'TSK' &&$dari == 'tsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TSK' &&$dari == 'tsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SUKABUMI.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'tsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SKB' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SKB' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PURWOKERTO.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'tsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWT' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWT' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KEBUMEN.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'tsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KPB' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KPB' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //TEGAL.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'tsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGL' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGL' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //PEMALANG.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1200 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'tsk'){
                            echo rupiah($berat * 1250 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PML' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PML' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                   
                    //PEKALONGAN.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'tsk'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'PKL' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PKL' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }
                    
                    //BANJAR PATROMAN.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1150 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'tsk'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'BTR' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BTR' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SEMARANG.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'tsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SMG' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SMG' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'tsk'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDS' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDS' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JEPARA/PATI.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1500 + 65000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 35000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'tsk'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'tsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'tsk'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'tsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'YGY' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'YGY' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'tsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SOLO' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SOLO' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'tsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'KLT' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KLT' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'tsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'SLTG' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SLTG' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'tsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat ==1 &&$tujuan == 'MGL' &&$dari == 'tsk'){
                            echo rupiah(16000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MGL' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'tsk'){
                            echo rupiah($berat * 1550 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat ==1 &&$tujuan == 'SBY' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SBY' &&$dari == 'tsk'){
                            echo rupiah(41000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    
                    //BOJONEGORO.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'tsk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BJG' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BJG' &&$dari == 'tsk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //GRESIK.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'tsk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'GSK' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GSK' &&$dari == 'tsk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //SIDOARJO.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'tsk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'SDJ' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SDJ' &&$dari == 'tsk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MOJOKERTO.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'tsk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MJK' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MJK' &&$dari == 'tsk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JOMBANG.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'tsk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBG' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBG' &&$dari == 'tsk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MALANG.tsk/

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'tsk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MLG' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MLG' &&$dari == 'tsk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }


                    //KEDIRI.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1250 + 65000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 48000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'tsk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDR' &&$dari == 'tsk'){
                            echo rupiah(26000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDR' &&$dari == 'tsk'){
                            echo rupiah(44000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BLITAR.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'tsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLT' &&$dari == 'tsk'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLT' &&$dari == 'tsk'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TULUNGAGUNG.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'tsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGA' &&$dari == 'tsk'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGA' &&$dari == 'tsk'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PASURUHAN.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'tsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PSR' &&$dari == 'tsk'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PSR' &&$dari == 'tsk'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PROBOLINGGO.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'tsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PRB' &&$dari == 'tsk'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PRB' &&$dari == 'tsk'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //NGANJUK.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'tsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'NGJ' &&$dari == 'tsk'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'NGJ' &&$dari == 'tsk'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //MADIUN.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN' &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'tsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'tsk'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'tsk'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //ponorogo/magetan.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'   &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1350 + 67000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == "MDN1"  &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 52000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == "MDN1"  &&$dari == 'tsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == "MDN1"  &&$dari == 'tsk'){
                            echo rupiah(31000);
                        }
                        elseif($berat ==2 &&$tujuan == "MDN1"  &&$dari == 'tsk'){
                            echo rupiah(48000);
                        }
                        elseif($berat <1 &&$tujuan == "MDN1"  &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //JEMBER.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'tsk'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBR' &&$dari == 'tsk'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBR' &&$dari == 'tsk'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //LUMAJANG.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'tsk'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'LMG' &&$dari == 'tsk'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'LMG' &&$dari == 'tsk'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //BANYUWANGI.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1400 + 70000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'tsk'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat ==1 &&$tujuan == 'BYG' &&$dari == 'tsk'){
                            echo rupiah(34000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BYG' &&$dari == 'tsk'){
                            echo rupiah(51000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //DENPASAR.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'tsk'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPS' &&$dari == 'tsk'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'DPS' &&$dari == 'tsk'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //TABANAN.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'tsk'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'TBN' &&$dari == 'tsk'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TBN' &&$dari == 'tsk'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //NUSADUA.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'tsk'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'ND2' &&$dari == 'tsk'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'ND2' &&$dari == 'tsk'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //SINGARAJA.tsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'tsk'){
                        echo rupiah((($berat - 10) * 1650 + 85000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'tsk'){
                            echo rupiah((($berat - 1) * 2700 + 63000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'tsk'){
                            echo rupiah($berat * 2650 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'SGRJ' &&$dari == 'tsk'){
                            echo rupiah(36000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SGRJ' &&$dari == 'tsk'){
                            echo rupiah(59000);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                   
                    //BANDAR.tsk//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'BDR'  &&$dari == 'tsk'){
                        echo rupiah((55000 * 1500)+ ($Lebar * $Panjang * $Tinggi * $e2));
                        }                       
                        elseif($berat ==1 &&$tujuan == 'BDR' &&$dari == 'tsk'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDR' &&$dari == 'tsk'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'BDR' &&$dari == 'tsk'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $e2));
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    
                    //PALEMBANG.tsk//

                    if($berat <=50 && $berat >=3 &&$tujuan == 'PLB'  &&$dari == 'tsk'){
                        echo rupiah((55000 * 1500)+ ($Lebar * $Panjang * $Tinggi * $e3));
                        }                       
                        elseif($berat ==1 &&$tujuan == 'PLB' &&$dari == 'tsk'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PLB' &&$dari == 'tsk'){
                            echo rupiah(50000);
                        }
                         elseif($berat >50 &&$tujuan == 'PLB' &&$dari == 'tsk'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PekanBaru.tsk//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'tsk'){
                        echo rupiah(40000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'tsk'){
                            echo rupiah((80000) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'tsk'){
                            echo rupiah(($berat * 4100) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e23);
                    }  

                    //Jambi.tsk//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'tsk'){
                        echo rupiah(40000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e29));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'tsk'){
                            echo rupiah((70000) + ($Lebar * $Panjang * $Tinggi  * $e29));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'tsk'){
                            echo rupiah(($berat * 3500) + ($Lebar * $Panjang * $Tinggi  * $e29));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'tsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e29);
                    }

                      function rupiah($angka){  

                        $hasil_rupiah = "Rp. " . number_format($angka,2,',','.'); 
                        return $hasil_rupiah; 
                      }?>
