<?php

            // Denpasar.dps//

                    //jakarta.dps///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1400 + 50000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2600 + 45000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'dps'){
                            echo rupiah($berat * 2300 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'JKT' &&$dari == 'dps'){
                            echo rupiah(43000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JKT' &&$dari == 'dps'){
                            echo rupiah(45000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }             

                    //Depok.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'dps'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPK' &&$dari == 'dps'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'DPK' &&$dari == 'dps'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //tangerang.dps///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'dps'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGR' &&$dari == 'dps'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGR' &&$dari == 'dps'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //bekasi.dps/// 

                     if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'dps'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'BKS' &&$dari == 'dps'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BKS' &&$dari == 'dps'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //cikarang.dps///
                    
                     if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'dps'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'CKR' &&$dari == 'dps'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CKR' &&$dari == 'dps'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }
                    
                    //karawang.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'dps'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'KRW' &&$dari == 'dps'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KRW' &&$dari == 'dps'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //SERANG.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'dps'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'SRG' &&$dari == 'dps'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SRG' &&$dari == 'dps'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    
                    //BOGOR.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'dps'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'BGR' &&$dari == 'dps'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BGR' &&$dari == 'dps'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //CIREBON.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'dps'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'CRB' &&$dari == 'dps'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CRB' &&$dari == 'dps'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //indramayu.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'dps'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'dps'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'dps'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PURWAKARTA.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'dps'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'dps'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'dps'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BANDUNG.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'dps'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDG' &&$dari == 'dps'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDG' &&$dari == 'dps'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //GARUT.dps//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'dps'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'GRT' &&$dari == 'dps'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GRT' &&$dari == 'dps'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //TASIK.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'dps'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'TSK' &&$dari == 'dps'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TSK' &&$dari == 'dps'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //SUKABUMI.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'dps'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'SKB' &&$dari == 'dps'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SKB' &&$dari == 'dps'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //PURWOKERTO.dps//

                   if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'dps'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWT' &&$dari == 'dps'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWT' &&$dari == 'dps'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //KEBUMEN.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'dps'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'KPB' &&$dari == 'dps'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KPB' &&$dari == 'dps'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TEGAL.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1400 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'dps'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGL' &&$dari == 'dps'){
                            echo rupiah(30000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGL' &&$dari == 'dps'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PEMALANG.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1400 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'dps'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PML' &&$dari == 'dps'){
                            echo rupiah(30000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PML' &&$dari == 'dps'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                   
                    //PEKALONGAN.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1400 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'dps'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PKL' &&$dari == 'dps'){
                            echo rupiah(30000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PKL' &&$dari == 'dps'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    
                    //BANJAR PATROMAN.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'dps'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'BTR' &&$dari == 'dps'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BTR' &&$dari == 'dps'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //SEMARANG.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'dps'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'SMG' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SMG' &&$dari == 'dps'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //KUDUS.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'dps'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDS' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDS' &&$dari == 'dps'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //JEPARA/PATI.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'dps'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'dps'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //JOGJA.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'dps'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'YGY' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'YGY' &&$dari == 'dps'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //SOLO.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'dps'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'SOLO' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SOLO' &&$dari == 'dps'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }


                    //KELATEN.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'dps'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'KLT' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KLT' &&$dari == 'dps'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //SALATIGA.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'dps'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'SLTG' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SLTG' &&$dari == 'dps'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //MAGELANG.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'dps'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'MGL' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MGL' &&$dari == 'dps'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //SURABAYA.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'SBY' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SBY' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }
                    
                    //BOJONEGORO.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'BJG' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BJG' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //GRESIK.dps//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'GSK' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GSK' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SIDOARJO.dps//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'SDJ' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SDJ' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //MOJOKERTO.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MJK' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MJK' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }
                    
                    //MALANG.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MLG' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MLG' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }


                    //KEDIRI.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDR' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDR' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BLITAR.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLT' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLT' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TULUNGAGUNG.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGA' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGA' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PASURUHAN.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'PSR' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PSR' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PROBOLINGGO.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'PRB' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PRB' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NGANJUK.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'NGJ' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'NGJ' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //MADIUN.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //ponorogo/magetan.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'dps'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN1' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN1' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //JEMBER.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBR' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBR' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //LUMAJANG.dps//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'LMG' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'LMG' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANYUWANGI.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'dps'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'BYG' &&$dari == 'dps'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BYG' &&$dari == 'dps'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    
                    //BANDAR.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 2700 + 72000) + ($Lebar * $Panjang * $Tinggi * $e33));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 3500 + 65000) + ($Lebar * $Panjang * $Tinggi * $e33));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'dps'){
                            echo rupiah($berat * 3500 + ($Lebar * $Panjang * $Tinggi * $e33));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDR' &&$dari == 'dps'){
                            echo rupiah(60000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDR' &&$dari == 'dps'){
                            echo rupiah(65000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e33);
                    }
                      
                    
                    //PALEMBANG.dps//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'dps'){
                        echo rupiah((($berat - 10) * 3000 + 80000) + ($Lebar * $Panjang * $Tinggi * $e27));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'dps'){
                            echo rupiah((($berat - 1) * 3500 + 70000) + ($Lebar * $Panjang * $Tinggi * $e27));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'dps'){
                            echo rupiah($berat * 4000 + ($Lebar * $Panjang * $Tinggi * $e27));
                        }
                        elseif($berat ==1 &&$tujuan == 'PLB' &&$dari == 'dps'){
                            echo rupiah(70000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PLB' &&$dari == 'dps'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'dps'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }

                    //JAMBI.dps///

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'dps'){
                            echo rupiah(80000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'dps'){
                                echo rupiah(107000);
                            }
                            elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'dps'){
                                echo rupiah($berat * 5150);
                            }
                            elseif($berat == 1 &&$tujuan == 'JBI' &&$dari == 'dps'){
                                echo rupiah($berat * 80000);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'dps'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //Pekanbaru.dps///

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'dps'){
                            echo rupiah(80000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e32));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'dps'){
                                echo rupiah(116000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'dps'){
                                echo rupiah($berat * 5650);
                            }
                            elseif($berat == 1 &&$tujuan == 'PKB' &&$dari == 'dps'){
                                echo rupiah($berat * 80000);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'dps'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e32);
                        }

            // tabanan.tbn//

                    //jakarta.tbn///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1400 + 50000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2600 + 45000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'tbn'){
                            echo rupiah($berat * 2300 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'JKT' &&$dari == 'tbn'){
                            echo rupiah(43000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JKT' &&$dari == 'tbn'){
                            echo rupiah(45000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }             

                    //Depok.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'tbn'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPK' &&$dari == 'tbn'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'DPK' &&$dari == 'tbn'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //tangerang.tbn///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'tbn'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGR' &&$dari == 'tbn'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGR' &&$dari == 'tbn'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //bekasi.tbn/// 

                     if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'tbn'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'BKS' &&$dari == 'tbn'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BKS' &&$dari == 'tbn'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //cikarang.tbn///
                    
                     if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'tbn'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'CKR' &&$dari == 'tbn'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CKR' &&$dari == 'tbn'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }
                    
                    //karawang.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'tbn'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'KRW' &&$dari == 'tbn'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KRW' &&$dari == 'tbn'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //SERANG.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'tbn'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'SRG' &&$dari == 'tbn'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SRG' &&$dari == 'tbn'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    
                    //BOGOR.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'tbn'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'BGR' &&$dari == 'tbn'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BGR' &&$dari == 'tbn'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //CIREBON.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'tbn'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'CRB' &&$dari == 'tbn'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CRB' &&$dari == 'tbn'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //indramayu.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'tbn'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'tbn'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'tbn'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PURWAKARTA.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'tbn'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'tbn'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'tbn'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BANDUNG.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'tbn'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDG' &&$dari == 'tbn'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDG' &&$dari == 'tbn'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //GARUT.tbn//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'tbn'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'GRT' &&$dari == 'tbn'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GRT' &&$dari == 'tbn'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //TASIK.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'tbn'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'TSK' &&$dari == 'tbn'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TSK' &&$dari == 'tbn'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //SUKABUMI.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'tbn'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'SKB' &&$dari == 'tbn'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SKB' &&$dari == 'tbn'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //PURWOKERTO.tbn//

                   if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'tbn'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWT' &&$dari == 'tbn'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWT' &&$dari == 'tbn'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //KEBUMEN.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'tbn'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'KPB' &&$dari == 'tbn'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KPB' &&$dari == 'tbn'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TEGAL.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1400 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'tbn'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGL' &&$dari == 'tbn'){
                            echo rupiah(30000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGL' &&$dari == 'tbn'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PEMALANG.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1400 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'tbn'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PML' &&$dari == 'tbn'){
                            echo rupiah(30000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PML' &&$dari == 'tbn'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                   
                    //PEKALONGAN.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1400 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'tbn'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PKL' &&$dari == 'tbn'){
                            echo rupiah(30000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PKL' &&$dari == 'tbn'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    
                    //BANJAR PATROMAN.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'tbn'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'BTR' &&$dari == 'tbn'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BTR' &&$dari == 'tbn'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //SEMARANG.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'tbn'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'SMG' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SMG' &&$dari == 'tbn'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //KUDUS.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'tbn'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDS' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDS' &&$dari == 'tbn'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //JEPARA/PATI.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'tbn'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'tbn'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //JOGJA.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'tbn'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'YGY' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'YGY' &&$dari == 'tbn'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //SOLO.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'tbn'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'SOLO' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SOLO' &&$dari == 'tbn'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }


                    //KELATEN.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'tbn'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'KLT' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KLT' &&$dari == 'tbn'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //SALATIGA.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'tbn'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'SLTG' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SLTG' &&$dari == 'tbn'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //MAGELANG.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'tbn'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'MGL' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MGL' &&$dari == 'tbn'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //SURABAYA.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'SBY' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SBY' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }
                    
                    //BOJONEGORO.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'BJG' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BJG' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //GRESIK.tbn//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'GSK' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GSK' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SIDOARJO.tbn//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'SDJ' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SDJ' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //MOJOKERTO.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MJK' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MJK' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }
                    
                    //MALANG.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MLG' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MLG' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }


                    //KEDIRI.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDR' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDR' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BLITAR.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLT' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLT' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TULUNGAGUNG.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGA' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGA' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PASURUHAN.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'PSR' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PSR' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PROBOLINGGO.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'PRB' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PRB' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NGANJUK.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'NGJ' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'NGJ' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //MADIUN.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //ponorogo/magetan.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'tbn'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN1' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN1' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //JEMBER.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBR' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBR' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //LUMAJANG.tbn//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'LMG' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'LMG' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANYUWANGI.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'tbn'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'BYG' &&$dari == 'tbn'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BYG' &&$dari == 'tbn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    
                    //BANDAR.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 2700 + 72000) + ($Lebar * $Panjang * $Tinggi * $e33));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 3500 + 65000) + ($Lebar * $Panjang * $Tinggi * $e33));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'tbn'){
                            echo rupiah($berat * 3500 + ($Lebar * $Panjang * $Tinggi * $e33));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDR' &&$dari == 'tbn'){
                            echo rupiah(60000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDR' &&$dari == 'tbn'){
                            echo rupiah(65000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e33);
                    }
                      
                    
                    //PALEMBANG.tbn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'tbn'){
                        echo rupiah((($berat - 10) * 3000 + 80000) + ($Lebar * $Panjang * $Tinggi * $e27));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'tbn'){
                            echo rupiah((($berat - 1) * 3500 + 70000) + ($Lebar * $Panjang * $Tinggi * $e27));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'tbn'){
                            echo rupiah($berat * 4000 + ($Lebar * $Panjang * $Tinggi * $e27));
                        }
                        elseif($berat ==1 &&$tujuan == 'PLB' &&$dari == 'tbn'){
                            echo rupiah(70000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PLB' &&$dari == 'tbn'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'tbn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }

                    //JAMBI.tbn///

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'tbn'){
                            echo rupiah(80000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'tbn'){
                                echo rupiah(107000);
                            }
                            elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'tbn'){
                                echo rupiah($berat * 5150);
                            }
                            elseif($berat == 1 &&$tujuan == 'JBI' &&$dari == 'tbn'){
                                echo rupiah($berat * 80000);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'tbn'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //Pekanbaru.tbn///

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'tbn'){
                            echo rupiah(80000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e32));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'tbn'){
                                echo rupiah(116000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'tbn'){
                                echo rupiah($berat * 5650);
                            }
                            elseif($berat == 1 &&$tujuan == 'PKB' &&$dari == 'tbn'){
                                echo rupiah($berat * 80000);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'tbn'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e32);
                        }

            // nusadua.nd2//

                    //jakarta.nd2///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1400 + 50000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2600 + 45000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'nd2'){
                            echo rupiah($berat * 2300 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'JKT' &&$dari == 'nd2'){
                            echo rupiah(43000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JKT' &&$dari == 'nd2'){
                            echo rupiah(45000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }             

                    //Depok.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'nd2'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPK' &&$dari == 'nd2'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'DPK' &&$dari == 'nd2'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //tangerang.nd2///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'nd2'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGR' &&$dari == 'nd2'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGR' &&$dari == 'nd2'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //bekasi.nd2/// 

                     if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'nd2'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'BKS' &&$dari == 'nd2'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BKS' &&$dari == 'nd2'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //cikarang.nd2///
                    
                     if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'nd2'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'CKR' &&$dari == 'nd2'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CKR' &&$dari == 'nd2'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }
                    
                    //karawang.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'nd2'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'KRW' &&$dari == 'nd2'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KRW' &&$dari == 'nd2'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //SERANG.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'nd2'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'SRG' &&$dari == 'nd2'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SRG' &&$dari == 'nd2'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    
                    //BOGOR.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'nd2'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'BGR' &&$dari == 'nd2'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BGR' &&$dari == 'nd2'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //CIREBON.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'nd2'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'CRB' &&$dari == 'nd2'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CRB' &&$dari == 'nd2'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //indramayu.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'nd2'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'nd2'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'nd2'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PURWAKARTA.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'nd2'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'nd2'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'nd2'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BANDUNG.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'nd2'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDG' &&$dari == 'nd2'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDG' &&$dari == 'nd2'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //GARUT.nd2//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'nd2'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'GRT' &&$dari == 'nd2'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GRT' &&$dari == 'nd2'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //TASIK.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'nd2'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'TSK' &&$dari == 'nd2'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TSK' &&$dari == 'nd2'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //SUKABUMI.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'nd2'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'SKB' &&$dari == 'nd2'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SKB' &&$dari == 'nd2'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //PURWOKERTO.nd2//

                   if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'nd2'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWT' &&$dari == 'nd2'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWT' &&$dari == 'nd2'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //KEBUMEN.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'nd2'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'KPB' &&$dari == 'nd2'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KPB' &&$dari == 'nd2'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TEGAL.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1400 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'nd2'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGL' &&$dari == 'nd2'){
                            echo rupiah(30000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGL' &&$dari == 'nd2'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PEMALANG.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1400 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'nd2'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PML' &&$dari == 'nd2'){
                            echo rupiah(30000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PML' &&$dari == 'nd2'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                   
                    //PEKALONGAN.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1400 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'nd2'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PKL' &&$dari == 'nd2'){
                            echo rupiah(30000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PKL' &&$dari == 'nd2'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    
                    //BANJAR PATROMAN.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'nd2'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'BTR' &&$dari == 'nd2'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BTR' &&$dari == 'nd2'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //SEMARANG.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'nd2'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'SMG' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SMG' &&$dari == 'nd2'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //KUDUS.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'nd2'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDS' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDS' &&$dari == 'nd2'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //JEPARA/PATI.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'nd2'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'nd2'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //JOGJA.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'nd2'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'YGY' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'YGY' &&$dari == 'nd2'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //SOLO.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'nd2'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'SOLO' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SOLO' &&$dari == 'nd2'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }


                    //KELATEN.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'nd2'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'KLT' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KLT' &&$dari == 'nd2'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //SALATIGA.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'nd2'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'SLTG' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SLTG' &&$dari == 'nd2'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //MAGELANG.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'nd2'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'MGL' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MGL' &&$dari == 'nd2'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //SURABAYA.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'SBY' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SBY' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }
                    
                    //BOJONEGORO.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'BJG' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BJG' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //GRESIK.nd2//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'GSK' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GSK' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SIDOARJO.nd2//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'SDJ' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SDJ' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //MOJOKERTO.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MJK' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MJK' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }
                    
                    //MALANG.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MLG' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MLG' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }


                    //KEDIRI.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDR' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDR' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BLITAR.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLT' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLT' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TULUNGAGUNG.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGA' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGA' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PASURUHAN.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'PSR' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PSR' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PROBOLINGGO.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'PRB' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PRB' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NGANJUK.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'NGJ' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'NGJ' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //MADIUN.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //ponorogo/magetan.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'nd2'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN1' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN1' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //JEMBER.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBR' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBR' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //LUMAJANG.nd2//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'LMG' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'LMG' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANYUWANGI.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'nd2'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'BYG' &&$dari == 'nd2'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BYG' &&$dari == 'nd2'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    
                    //BANDAR.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 2700 + 72000) + ($Lebar * $Panjang * $Tinggi * $e33));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 3500 + 65000) + ($Lebar * $Panjang * $Tinggi * $e33));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'nd2'){
                            echo rupiah($berat * 3500 + ($Lebar * $Panjang * $Tinggi * $e33));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDR' &&$dari == 'nd2'){
                            echo rupiah(60000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDR' &&$dari == 'nd2'){
                            echo rupiah(65000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e33);
                    }
                      
                    
                    //PALEMBANG.nd2//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'nd2'){
                        echo rupiah((($berat - 10) * 3000 + 80000) + ($Lebar * $Panjang * $Tinggi * $e27));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'nd2'){
                            echo rupiah((($berat - 1) * 3500 + 70000) + ($Lebar * $Panjang * $Tinggi * $e27));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'nd2'){
                            echo rupiah($berat * 4000 + ($Lebar * $Panjang * $Tinggi * $e27));
                        }
                        elseif($berat ==1 &&$tujuan == 'PLB' &&$dari == 'nd2'){
                            echo rupiah(70000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PLB' &&$dari == 'nd2'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'nd2'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }

                    //JAMBI.nd2///

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'nd2'){
                            echo rupiah(80000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'nd2'){
                                echo rupiah(107000);
                            }
                            elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'nd2'){
                                echo rupiah($berat * 5150);
                            }
                            elseif($berat == 1 &&$tujuan == 'JBI' &&$dari == 'nd2'){
                                echo rupiah($berat * 80000);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'nd2'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //Pekanbaru.nd2///

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'nd2'){
                            echo rupiah(80000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e32));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'nd2'){
                                echo rupiah(116000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'nd2'){
                                echo rupiah($berat * 5650);
                            }
                            elseif($berat == 1 &&$tujuan == 'PKB' &&$dari == 'nd2'){
                                echo rupiah($berat * 80000);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'nd2'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e32);
                        }

            // singaraja.sgrj//

                    //jakarta.sgrj///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1400 + 50000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2600 + 45000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'sgrj'){
                            echo rupiah($berat * 2300 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat ==1 &&$tujuan == 'JKT' &&$dari == 'sgrj'){
                            echo rupiah(43000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JKT' &&$dari == 'sgrj'){
                            echo rupiah(45000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }             

                    //Depok.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'sgrj'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'DPK' &&$dari == 'sgrj'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'DPK' &&$dari == 'sgrj'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //tangerang.sgrj///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'sgrj'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGR' &&$dari == 'sgrj'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGR' &&$dari == 'sgrj'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //bekasi.sgrj/// 

                     if($berat <=100 && $berat >10 &&$tujuan == 'BKS'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'sgrj'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'BKS' &&$dari == 'sgrj'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BKS' &&$dari == 'sgrj'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //cikarang.sgrj///
                    
                     if($berat <=100 && $berat >10 &&$tujuan == 'CKR'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'sgrj'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'CKR' &&$dari == 'sgrj'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CKR' &&$dari == 'sgrj'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }
                    
                    //karawang.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'sgrj'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'KRW' &&$dari == 'sgrj'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KRW' &&$dari == 'sgrj'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //SERANG.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'sgrj'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'SRG' &&$dari == 'sgrj'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SRG' &&$dari == 'sgrj'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    
                    //BOGOR.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'sgrj'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'BGR' &&$dari == 'sgrj'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BGR' &&$dari == 'sgrj'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //CIREBON.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'CRB' &&$dari == 'sgrj'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'CRB' &&$dari == 'sgrj'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //indramayu.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'IDW' &&$dari == 'sgrj'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'IDW' &&$dari == 'sgrj'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PURWAKARTA.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWA' &&$dari == 'sgrj'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWA' &&$dari == 'sgrj'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //BANDUNG.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'sgrj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDG' &&$dari == 'sgrj'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDG' &&$dari == 'sgrj'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //GARUT.sgrj//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'sgrj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'GRT' &&$dari == 'sgrj'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GRT' &&$dari == 'sgrj'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //TASIK.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'sgrj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'TSK' &&$dari == 'sgrj'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TSK' &&$dari == 'sgrj'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //SUKABUMI.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 2300 + 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 3000 + 55000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'sgrj'){
                            echo rupiah($berat * 2600 + ($Lebar * $Panjang * $Tinggi * $e22));
                        }
                        elseif($berat ==1 &&$tujuan == 'SKB' &&$dari == 'sgrj'){
                            echo rupiah(50000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SKB' &&$dari == 'sgrj'){
                            echo rupiah(57000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                    }

                    //PURWOKERTO.sgrj//

                   if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PWT' &&$dari == 'sgrj'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PWT' &&$dari == 'sgrj'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //KEBUMEN.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1700 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'KPB' &&$dari == 'sgrj'){
                            echo rupiah(32000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KPB' &&$dari == 'sgrj'){
                            echo rupiah(37000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //TEGAL.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1400 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGL' &&$dari == 'sgrj'){
                            echo rupiah(30000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGL' &&$dari == 'sgrj'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    //PEMALANG.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1400 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PML' &&$dari == 'sgrj'){
                            echo rupiah(30000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PML' &&$dari == 'sgrj'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                   
                    //PEKALONGAN.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1400 + 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi * $e3));
                        }
                        elseif($berat ==1 &&$tujuan == 'PKL' &&$dari == 'sgrj'){
                            echo rupiah(30000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PKL' &&$dari == 'sgrj'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

                    
                    //BANJAR PATROMAN.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1700 + 45000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'sgrj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi * $e8));
                        }
                        elseif($berat ==1 &&$tujuan == 'BTR' &&$dari == 'sgrj'){
                            echo rupiah(35000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BTR' &&$dari == 'sgrj'){
                            echo rupiah(40000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                    }

                    //SEMARANG.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'SMG' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SMG' &&$dari == 'sgrj'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //KUDUS.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDS' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDS' &&$dari == 'sgrj'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //JEPARA/PATI.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'JPI' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JPI' &&$dari == 'sgrj'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //JOGJA.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'YGY' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'YGY' &&$dari == 'sgrj'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //SOLO.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'SOLO' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SOLO' &&$dari == 'sgrj'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }


                    //KELATEN.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'KLT' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KLT' &&$dari == 'sgrj'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //SALATIGA.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'SLTG' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SLTG' &&$dari == 'sgrj'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //MAGELANG.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2300 + 30000) + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1500 + ($Lebar * $Panjang * $Tinggi * $S17));
                        }
                        elseif($berat ==1 &&$tujuan == 'MGL' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MGL' &&$dari == 'sgrj'){
                            echo rupiah(30000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $S17);
                    }

                    //SURABAYA.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'SBY' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SBY' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }
                    
                    //BOJONEGORO.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'BJG' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BJG' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //GRESIK.sgrj//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'GSK' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'GSK' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SIDOARJO.sgrj//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'SDJ' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'SDJ' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //MOJOKERTO.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MJK' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MJK' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }
                    
                    //MALANG.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MLG' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MLG' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }


                    //KEDIRI.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'KDR' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'KDR' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BLITAR.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'BLT' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BLT' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TULUNGAGUNG.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'TGA' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'TGA' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PASURUHAN.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'PSR' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PSR' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PROBOLINGGO.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'PRB' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PRB' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NGANJUK.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'NGJ' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'NGJ' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //MADIUN.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //ponorogo/magetan.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1100 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN1' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN1' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //JEMBER.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'JBR' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'JBR' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //LUMAJANG.sgrj//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'LMG' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'LMG' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANYUWANGI.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 2200 + 25000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'sgrj'){
                            echo rupiah($berat * 1050 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat ==1 &&$tujuan == 'BYG' &&$dari == 'sgrj'){
                            echo rupiah(20000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BYG' &&$dari == 'sgrj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    
                    //BANDAR.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 2700 + 72000) + ($Lebar * $Panjang * $Tinggi * $e33));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 3500 + 65000) + ($Lebar * $Panjang * $Tinggi * $e33));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'sgrj'){
                            echo rupiah($berat * 3500 + ($Lebar * $Panjang * $Tinggi * $e33));
                        }
                        elseif($berat ==1 &&$tujuan == 'BDR' &&$dari == 'sgrj'){
                            echo rupiah(60000);
                        }
                        elseif($berat ==2 &&$tujuan == 'BDR' &&$dari == 'sgrj'){
                            echo rupiah(65000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e33);
                    }
                      
                    
                    //PALEMBANG.sgrj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'sgrj'){
                        echo rupiah((($berat - 10) * 3000 + 80000) + ($Lebar * $Panjang * $Tinggi * $e27));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'sgrj'){
                            echo rupiah((($berat - 1) * 3500 + 70000) + ($Lebar * $Panjang * $Tinggi * $e27));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'sgrj'){
                            echo rupiah($berat * 4000 + ($Lebar * $Panjang * $Tinggi * $e27));
                        }
                        elseif($berat ==1 &&$tujuan == 'PLB' &&$dari == 'sgrj'){
                            echo rupiah(70000);
                        }
                        elseif($berat ==2 &&$tujuan == 'PLB' &&$dari == 'sgrj'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'sgrj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }

                    //JAMBI.sgrj///

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'sgrj'){
                            echo rupiah(80000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'sgrj'){
                                echo rupiah(107000);
                            }
                            elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'sgrj'){
                                echo rupiah($berat * 5150);
                            }
                            elseif($berat == 1 &&$tujuan == 'JBI' &&$dari == 'sgrj'){
                                echo rupiah($berat * 80000);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'sgrj'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //Pekanbaru.sgrj///

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'sgrj'){
                            echo rupiah(80000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e32));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'sgrj'){
                                echo rupiah(116000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'sgrj'){
                                echo rupiah($berat * 5650);
                            }
                            elseif($berat == 1 &&$tujuan == 'PKB' &&$dari == 'sgrj'){
                                echo rupiah($berat * 80000);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'sgrj'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e32);
                        }

            // bandar.bdr//

                    //jakarta.bdr///

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'JKT' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 1600 + 50000) + ($Lebar * $Panjang * $Tinggi  * $e7));
                        }

                        elseif($berat >50 &&$tujuan == 'JKT' &&$dari == 'bdr'){
                            echo rupiah($berat * 1600 + ($Lebar * $Panjang * $Tinggi  * $e7));
                        }
                        elseif($tujuan == 'JKT' &&$dari == 'bdr'){
                            echo rupiah(($koli * 35000) + ($Lebar * $Panjang * $Tinggi * $e7));        
                    }                

                    //Depok.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'DPK' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 1700 + 60000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat >50 &&$tujuan == 'DPK' &&$dari == 'bdr'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($tujuan == 'DPK' &&$dari == 'bdr'){
                            echo rupiah(($koli * 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                        
                    }

                    //tangerang.bdr///

                    if($berat <=50 &&$tujuan == 'TGR' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 1700 + 60000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat >50 &&$tujuan == 'TGR' &&$dari == 'bdr'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($tujuan == 'TGR' &&$dari == 'bdr'){
                            echo rupiah(($koli * 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                    }

                    //bekasi.bdr/// 

                     if($berat > 0 &&$berat <=50 &&$tujuan == 'BKS' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 1700 + 60000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat >50 &&$tujuan == 'BKS' &&$dari == 'bdr'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($tujuan == 'BKS' &&$dari == 'bdr'){
                            echo rupiah(($koli * 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                    }

                    //cikarang.bdr///
                    
                     if($berat > 0 &&$berat <=50 &&$tujuan == 'CKR' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 1700 + 60000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat >50 &&$tujuan == 'CKR' &&$dari == 'bdr'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($tujuan == 'CKR' &&$dari == 'bdr'){
                            echo rupiah(($koli * 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                    }
                    
                    //karawang.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'KRW' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 1700 + 60000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat >50 &&$tujuan == 'KRW' &&$dari == 'bdr'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($tujuan == 'KRW' &&$dari == 'bdr'){
                            echo rupiah(($koli * 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                    }

                    //SERANG.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'SRG' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 1700 + 60000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat >50 &&$tujuan == 'SRG' &&$dari == 'bdr'){
                            echo rupiah($berat * 1700 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($tujuan == 'SRG' &&$dari == 'bdr'){
                            echo rupiah(($koli * 40000) + ($Lebar * $Panjang * $Tinggi * $e3));
                    }

                    
                    //BOGOR.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'BGR' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 1600 + 50000) + ($Lebar * $Panjang * $Tinggi  * $e7));
                        }

                        elseif($berat >50 &&$tujuan == 'BGR' &&$dari == 'bdr'){
                            echo rupiah($berat * 1600 + ($Lebar * $Panjang * $Tinggi  * $e7));
                        }
                        elseif($tujuan == 'BGR' &&$dari == 'bdr'){
                            echo rupiah(($koli * 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                    }

                    //CIREBON.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'CRB' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2700 + 90000) + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }

                        elseif($berat >50 &&$tujuan == 'CRB' &&$dari == 'bdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }
                        elseif($tujuan == 'CRB' &&$dari == 'bdr'){
                            echo rupiah(($koli * 55000) + ($Lebar * $Panjang * $Tinggi * $e13));
                    }

                    //BANDUNG.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'BDG' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2500 + 80000) + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }

                        elseif($berat >50 &&$tujuan == 'BDG' &&$dari == 'bdr'){
                            echo rupiah($berat * 2500 + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }
                        elseif($tujuan == 'BDG' &&$dari == 'bdr'){
                            echo rupiah(($koli * 50000) + ($Lebar * $Panjang * $Tinggi * $e13));
                    }

                    //GARUT.bdr//

                     if($berat > 0 &&$berat <=50 &&$tujuan == 'GRT' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2500 + 100000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'GRT' &&$dari == 'bdr'){
                            echo rupiah($berat * 2500 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'GRT' &&$dari == 'bdr'){
                            echo rupiah(($koli * 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        
                    }

                    //TASIK.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'TSK' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2500 + 90000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'TSK' &&$dari == 'bdr'){
                            echo rupiah($berat * 2500 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'TSK' &&$dari == 'bdr'){
                            echo rupiah(($koli * 55000)+ ($Lebar * $Panjang * $Tinggi * $e22));
                        
                    }

                    //SUKABUMI.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'SKB' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2500 + 60000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'SKB' &&$dari == 'bdr'){
                            echo rupiah($berat * 2500 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'SKB' &&$dari == 'bdr'){
                            echo rupiah(($koli * 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        
                    }

                    //PURWOKERTO.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'PWT' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2500 + 90000) + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }

                        elseif($berat >50 &&$tujuan == 'PWT' &&$dari == 'bdr'){
                            echo rupiah($berat * 2500 + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }
                        elseif($tujuan == 'PWT' &&$dari == 'bdr'){
                            echo rupiah(($koli * 55000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        
                    }

                    //KEBUMEN.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'KPB' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2700 + 100000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'KPB' &&$dari == 'bdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'KPB' &&$dari == 'bdr'){
                            echo rupiah($koli * 60000) + ($Lebar * $Panjang * $Tinggi * $e22);
                        
                    }

                    //TEGAL.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'TGL' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2700 + 100000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'TGL' &&$dari == 'bdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'TGL' &&$dari == 'bdr'){
                            echo rupiah(($koli * 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                       
                    }

                    //PEMALANG.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'PML' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2700 + 100000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'PML' &&$dari == 'bdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'PML' &&$dari == 'bdr'){
                            echo rupiah(($koli * 60000) + ($Lebar * $Panjang * $Tinggi * $e22));                    
                    }

                   
                    //PEKALONGAN.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'PKL' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2700 + 100000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'PKL' &&$dari == 'bdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'PKL' &&$dari == 'bdr'){
                            echo rupiah(($koli * 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        
                    }

                    //BATANG.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'BTG' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2700 + 100000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'BTG' &&$dari == 'bdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'BTG' &&$dari == 'bdr'){
                            echo rupiah(($koli * 60000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        
                    }

                    //BANJAR PATROMAN.bdr//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'BTR' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2700 + 100000) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }

                        elseif($berat >50 &&$tujuan == 'BTR' &&$dari == 'bdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }
                        elseif($tujuan == 'BTR' &&$dari == 'bdr'){
                            echo rupiah(($koli * 60000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        
                    }

                    //SEMARANG.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'SMG' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2700 + 100000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'SMG' &&$dari == 'bdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'SMG' &&$dari == 'bdr'){
                            echo rupiah(($koli * 62000) + ($Lebar * $Panjang * $Tinggi * $e22));                        
                    }

                    //KUDUS.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'KDS' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2700 + 105000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'KDS' &&$dari == 'bdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'KDS' &&$dari == 'bdr'){
                            echo rupiah(($koli * 65000) + ($Lebar * $Panjang * $Tinggi * $e22));                        
                    }

                    //JOGJA.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'YGY' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2700 + 100000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'YGY' &&$dari == 'bdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'YGY' &&$dari == 'bdr'){
                            echo rupiah(($koli * 62000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        
                    }

                    //SOLO.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'SOLO' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2700 + 100000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'SOLO' &&$dari == 'bdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'SOLO' &&$dari == 'bdr'){
                            echo rupiah(($koli * 62000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        
                    }


                    //KELATEN.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'KLT' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2700 + 100000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'KLT' &&$dari == 'bdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'KLT' &&$dari == 'bdr'){
                            echo rupiah(($koli * 62000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        
                    }

                    //SALATIGA.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'SLTG' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2700 + 100000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'SLTG' &&$dari == 'bdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'SLTG' &&$dari == 'bdr'){
                            echo rupiah(($koli * 62000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        
                    }

                    //MAGELANG.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'MGL' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2700 + 100000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'MGL' &&$dari == 'bdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'MGL' &&$dari == 'bdr'){
                            echo rupiah(($koli * 62000) + ($Lebar * $Panjang * $Tinggi * $e22));
                        
                    }

                    //SURABAYA.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'SBY' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 2800 + 105000) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }

                        elseif($berat >50 &&$tujuan == 'SBY' &&$dari == 'bdr'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }
                        elseif($tujuan == 'SBY' &&$dari == 'bdr'){
                            echo rupiah(($koli * 75000) + ($Lebar * $Panjang * $Tinggi * $e23));
                        
                    }

                    
                    //BOJONEGORO.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'BJG' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3300 + 110000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }

                        elseif($berat >50 &&$tujuan == 'BJG' &&$dari == 'bdr'){
                            echo rupiah($berat * 3300 + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }
                        elseif($tujuan == 'BJG' &&$dari == 'bdr'){
                            echo rupiah(($koli * 80000) + ($Lebar * $Panjang * $Tinggi * $e24));                        
                    }

                    //GRESIK.bdr//

                     if($berat > 0 &&$berat <=50 &&$tujuan == 'GSK' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3300 + 110000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }

                        elseif($berat >50 &&$tujuan == 'GSK' &&$dari == 'bdr'){
                            echo rupiah($berat * 3300 + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }
                        elseif($tujuan == 'GSK' &&$dari == 'bdr'){
                            echo rupiah(($koli * 80000) + ($Lebar * $Panjang * $Tinggi * $e24));
                        
                    }

                    //SIDOARJO.bdr//

                     if($berat > 0 &&$berat <=50 &&$tujuan == 'SDJ' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3300 + 110000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }

                        elseif($berat >50 &&$tujuan == 'SDJ' &&$dari == 'bdr'){
                            echo rupiah($berat * 3300 + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }
                        elseif($tujuan == 'SDJ' &&$dari == 'bdr'){
                            echo rupiah(($koli * 80000) + ($Lebar * $Panjang * $Tinggi * $e24));                        
                    }

                    //MOJOKERTO.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'MJK' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3300 + 110000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }

                        elseif($berat >50 &&$tujuan == 'MJK' &&$dari == 'bdr'){
                            echo rupiah($berat * 3300 + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }
                        elseif($tujuan == 'MJK' &&$dari == 'bdr'){
                            echo rupiah(($koli * 80000) + ($Lebar * $Panjang * $Tinggi * $e24));
                    }

                    //JOMBANG.bdr//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'JBG' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3300 + 110000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }

                        elseif($berat >50 &&$tujuan == 'JBG' &&$dari == 'bdr'){
                            echo rupiah($berat * 3300 + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }
                        elseif($tujuan == 'JBG' &&$dari == 'bdr'){
                            echo rupiah(($koli * 80000) + ($Lebar * $Panjang * $Tinggi * $e24));
                       
                    }

                    //MALANG.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'MLG' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3300 + 110000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }

                        elseif($berat >50 &&$tujuan == 'MLG' &&$dari == 'bdr'){
                            echo rupiah($berat * 3300 + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }
                        elseif($tujuan == 'MLG' &&$dari == 'bdr'){
                            echo rupiah(($koli * 80000) + ($Lebar * $Panjang * $Tinggi * $e24));                        
                    }


                    //KEDIRI.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'KDR' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3300 + 110000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }

                        elseif($berat >50 &&$tujuan == 'KDR' &&$dari == 'bdr'){
                            echo rupiah($berat * 3300 + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }
                        elseif($tujuan == 'KDR' &&$dari == 'bdr'){
                            echo rupiah(($koli * 80000) + ($Lebar * $Panjang * $Tinggi * $e24));
                    }

                    //BLITAR.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'BLT' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3300 + 110000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }

                        elseif($berat >50 &&$tujuan == 'BLT' &&$dari == 'bdr'){
                            echo rupiah($berat * 3300 + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }
                        elseif($tujuan == 'BLT' &&$dari == 'bdr'){
                            echo rupiah(($koli * 80000) + ($Lebar * $Panjang * $Tinggi * $e24));
                    }

                    //TULUNGAGUNG.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'TGA' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3300 + 110000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }

                        elseif($berat >50 &&$tujuan == 'TGA' &&$dari == 'bdr'){
                            echo rupiah($berat * 3300 + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }
                        elseif($tujuan == 'TGA' &&$dari == 'bdr'){
                            echo rupiah(($koli * 80000) + ($Lebar * $Panjang * $Tinggi * $e24));
                    }

                    //PASURUHAN.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'PSR' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3400 + 115000) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }

                        elseif($berat >50 &&$tujuan == 'PSR' &&$dari == 'bdr'){
                            echo rupiah($berat * 3400 + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }
                        elseif($tujuan == 'PSR' &&$dari == 'bdr'){
                            echo rupiah(($koli * 85000) + ($Lebar * $Panjang * $Tinggi * $e23));
                    }

                    //PROBOLINGGO.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'PRB' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3400 + 115000) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }

                        elseif($berat >50 &&$tujuan == 'PRB' &&$dari == 'bdr'){
                            echo rupiah($berat * 3400 + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }
                        elseif($tujuan == 'PRB' &&$dari == 'bdr'){
                            echo rupiah(($koli * 85000) + ($Lebar * $Panjang * $Tinggi * $e23));
                        
                    }

                    //NGANJUK.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'NGJ' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3400 + 115000) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }

                        elseif($berat >50 &&$tujuan == 'NGJ' &&$dari == 'bdr'){
                            echo rupiah($berat * 3400 + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }
                        elseif($tujuan == 'NGJ' &&$dari == 'bdr'){
                            echo rupiah(($koli * 85000) + ($Lebar * $Panjang * $Tinggi * $e23));
                    }

                    //MADIUN.bdr//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'MDN' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3300 + 110000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }

                        elseif($berat >50 &&$tujuan == 'MDN' &&$dari == 'bdr'){
                            echo rupiah($berat * 3300 + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }
                        elseif($tujuan == 'MDN' &&$dari == 'bdr'){
                            echo rupiah(($koli * 80000) + ($Lebar * $Panjang * $Tinggi * $e24));
                    }      

                    //ponorogo/magetan.bdr//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'MDN1' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3300 + 110000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }

                        elseif($berat >50 &&$tujuan == 'MDN1' &&$dari == 'bdr'){
                            echo rupiah($berat * 3300 + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }
                        elseif($tujuan == 'MDN1' &&$dari == 'bdr'){
                            echo rupiah(($koli * 80000) + ($Lebar * $Panjang * $Tinggi * $e24));
                    }              

                    //JEMBER.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'JBR' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3400 + 115000) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }

                        elseif($berat >50 &&$tujuan == 'JBR' &&$dari == 'bdr'){
                            echo rupiah($berat * 3400 + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }elseif($tujuan == 'JBR' &&$dari == 'bdr'){
                            echo rupiah(($koli * 85000) + ($Lebar * $Panjang * $Tinggi * $e23));                        
                    }

                    //LUMAJANG.bdr//

                   if($berat > 0 &&$berat <=50 &&$tujuan == 'LMG' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3400 + 115000) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }

                        elseif($berat >50 &&$tujuan == 'LMG' &&$dari == 'bdr'){
                            echo rupiah($berat * 3400 + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }
                        elseif($tujuan == 'LMG' &&$dari == 'bdr'){
                            echo rupiah(($koli * 85000) + ($Lebar * $Panjang * $Tinggi * $e23));
                    }

                    //BANYUWANGI.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'BYG' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 3500 + 100000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >50 &&$tujuan == 'BYG' &&$dari == 'bdr'){
                            echo rupiah($berat * 3500 + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($tujuan == 'BYG' &&$dari == 'bdr'){
                            echo rupiah(($koli * 90000) + ($Lebar * $Panjang * $Tinggi * $e25));
                        
                    }

                    //DENPASAR.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'DPS' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 4000 + 125000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }

                        elseif($berat >50 &&$tujuan == 'DPS' &&$dari == 'bdr'){
                            echo rupiah($berat * 4000 + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }
                        elseif($tujuan == 'DPS' &&$dari == 'bdr'){
                            echo rupiah($koli * 95000) + ($Lebar * $Panjang * $Tinggi * $e26);
                        
                    }

                    //TABANAN.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'TBN' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 4000 + 125000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }

                        elseif($berat >50 &&$tujuan == 'TBN' &&$dari == 'bdr'){
                            echo rupiah($berat * 4000 + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }
                        elseif($tujuan == 'TBN' &&$dari == 'bdr'){
                            echo rupiah(($koli * 95000) + ($Lebar * $Panjang * $Tinggi * $e26));                       
                    }

                    //NUSADUA.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'ND2' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 4000 + 125000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }

                        elseif($berat >50 &&$tujuan == 'ND2' &&$dari == 'bdr'){
                            echo rupiah($berat * 4000 + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }
                        elseif($tujuan == 'ND2' &&$dari == 'bdr'){
                            echo rupiah(($koli * 95000) + ($Lebar * $Panjang * $Tinggi * $e26));                        
                    }

                    //SINGARAJA.bdr//

                    if($berat > 0 &&$berat <=50 &&$tujuan == 'SGRJ' &&$dari == 'bdr'){
                        echo rupiah((($berat - 10) * 4000 + 125000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }

                        elseif($berat >50 &&$tujuan == 'SGRJ' &&$dari == 'bdr'){
                            echo rupiah($berat * 4000 + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }
                        elseif($tujuan == 'SGRJ' &&$dari == 'bdr'){
                            echo rupiah(($koli * 95000) + ($Lebar * $Panjang * $Tinggi * $e26));
                    }

                    //jambi.bdr//

                       if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'bdr'){
                            echo rupiah(20000 + (($berat -1 ) * 2000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'bdr'){
                                echo rupiah(40000);
                            }
                            elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'bdr'){
                                echo rupiah($berat * 2000);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'bdr'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                        }

                    //PEKANBARU.bdr//

                       if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'bdr'){
                            echo rupiah(22000 + (($berat -1 ) * 2000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'bdr'){
                                echo rupiah(52000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'bdr'){
                                echo rupiah($berat * 2500);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'bdr'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                        }

            // Jambi.jbi//

                    //jakarta.jbi///

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'JKT' &&$dari == 'jbi'){
                            echo rupiah(25000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e5));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'JKT' &&$dari == 'jbi'){
                                echo rupiah(55000);
                            }
                            elseif($berat > 20 &&$tujuan == 'JKT' &&$dari == 'jbi'){
                                echo rupiah($berat * 3000);
                            }
                            elseif($berat == 1 &&$tujuan == 'JKT' &&$dari == 'jbi'){
                                echo rupiah(25000);
                            }
                            elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                        }                

                    //Depok.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'DPK' &&$dari == 'jbi'){
                            echo rupiah(35000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'DPK' &&$dari == 'jbi'){
                                echo rupiah(66000);
                            }
                            elseif($berat > 20 &&$tujuan == 'DPK' &&$dari == 'jbi'){
                                echo rupiah($berat * 3400);
                            }
                            elseif($berat == 1 &&$tujuan == 'DPK' &&$dari == 'jbi'){
                                echo rupiah(35000);
                            }
                            elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                        }

                    //tangerang.jbi///

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'TGR' &&$dari == 'jbi'){
                            echo rupiah(35000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'TGR' &&$dari == 'jbi'){
                                echo rupiah(66000);
                            }
                            elseif($berat > 20 &&$tujuan == 'TGR' &&$dari == 'jbi'){
                                echo rupiah($berat * 3400);
                            }
                            elseif($berat == 1 &&$tujuan == 'TGR' &&$dari == 'jbi'){
                                echo rupiah(35000);
                            }
                            elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                        }

                    //bekasi.jbi/// 

                      if($berat > 1 &&$berat <=10 &&$tujuan == 'BKS' &&$dari == 'jbi'){
                        echo rupiah(35000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'BKS' &&$dari == 'jbi'){
                            echo rupiah(66000);
                        }
                        elseif($berat > 20 &&$tujuan == 'BKS' &&$dari == 'jbi'){
                            echo rupiah($berat * 3400);
                        }
                        elseif($berat == 1 &&$tujuan == 'BKS' &&$dari == 'jbi'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'jbi'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                     }

                    //cikarang.jbi///
                    
                     if($berat > 1 &&$berat <=10 &&$tujuan == 'CKR' &&$dari == 'jbi'){
                        echo rupiah(35000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'CKR' &&$dari == 'jbi'){
                            echo rupiah(66000);
                        }
                        elseif($berat > 20 &&$tujuan == 'CKR' &&$dari == 'jbi'){
                            echo rupiah($berat * 3400);
                        }
                        elseif($berat == 1 &&$tujuan == 'CKR' &&$dari == 'jbi'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'jbi'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                     }
                    
                    //karawang.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'KRW' &&$dari == 'jbi'){
                            echo rupiah(35000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'KRW' &&$dari == 'jbi'){
                                echo rupiah(66000);
                            }
                            elseif($berat > 20 &&$tujuan == 'KRW' &&$dari == 'jbi'){
                                echo rupiah($berat * 3400);
                            }
                            elseif($berat == 1 &&$tujuan == 'KRW' &&$dari == 'jbi'){
                                echo rupiah(35000);
                            }
                            elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                        }

                    //SERANG.jbi//

                     if($berat > 1 &&$berat <=10 &&$tujuan == 'SRG' &&$dari == 'jbi'){
                        echo rupiah(35000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'SRG' &&$dari == 'jbi'){
                            echo rupiah(66000);
                        }
                        elseif($berat > 20 &&$tujuan == 'SRG' &&$dari == 'jbi'){
                            echo rupiah($berat * 3400);
                        }
                        elseif($berat == 1 &&$tujuan == 'SRG' &&$dari == 'jbi'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'jbi'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                     }

                    //BOGOR.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'BGR' &&$dari == 'jbi'){
                            echo rupiah(53000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BGR' &&$dari == 'jbi'){
                                echo rupiah(83000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BGR' &&$dari == 'jbi'){
                                echo rupiah($berat * 4200);
                            }
                            elseif($berat == 1 &&$tujuan == 'BGR' &&$dari == 'jbi'){
                                echo rupiah(53000);
                            }
                            elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //CIREBON.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'CRB' &&$dari == 'jbi'){
                            echo rupiah(53000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'CRB' &&$dari == 'jbi'){
                                echo rupiah(83000);
                            }
                            elseif($berat > 20 &&$tujuan == 'CRB' &&$dari == 'jbi'){
                                echo rupiah($berat * 4200);
                            }
                            elseif($berat == 1 &&$tujuan == 'CRB' &&$dari == 'jbi'){
                                echo rupiah(53000);
                            }
                            elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //BANDUNG.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'BDG' &&$dari == 'jbi'){
                            echo rupiah(53000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BDG' &&$dari == 'jbi'){
                                echo rupiah(83000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BDG' &&$dari == 'jbi'){
                                echo rupiah($berat * 4200);
                            }
                            elseif($berat == 1 &&$tujuan == 'BDG' &&$dari == 'jbi'){
                                echo rupiah(53000);
                            }
                            elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //GARUT.jbi//

                         if($berat > 1 &&$berat <=10 &&$tujuan == 'GRT' &&$dari == 'jbi'){
                            echo rupiah(53000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'GRT' &&$dari == 'jbi'){
                                echo rupiah(83000);
                            }
                            elseif($berat > 20 &&$tujuan == 'GRT' &&$dari == 'jbi'){
                                echo rupiah($berat * 4200);
                            }
                            elseif($berat == 1 &&$tujuan == 'GRT' &&$dari == 'jbi'){
                                echo rupiah(53000);
                            }
                            elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                         }

                    //TASIK.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'TSK' &&$dari == 'jbi'){
                            echo rupiah(53000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'TSK' &&$dari == 'jbi'){
                                echo rupiah(83000);
                            }
                            elseif($berat > 20 &&$tujuan == 'TSK' &&$dari == 'jbi'){
                                echo rupiah($berat * 4200);
                            }
                            elseif($berat == 1 &&$tujuan == 'TSK' &&$dari == 'jbi'){
                                echo rupiah(53000);
                            }
                            elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //SUKABUMI.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'SKB' &&$dari == 'jbi'){
                            echo rupiah(53000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SKB' &&$dari == 'jbi'){
                                echo rupiah(83000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SKB' &&$dari == 'jbi'){
                                echo rupiah($berat * 4200);
                            }
                            elseif($berat == 1 &&$tujuan == 'SKB' &&$dari == 'jbi'){
                                echo rupiah(53000);
                            }
                            elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //PURWOKERTO.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'PWT' &&$dari == 'jbi'){
                            echo rupiah(53000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PWT' &&$dari == 'jbi'){
                                echo rupiah(83000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PWT' &&$dari == 'jbi'){
                                echo rupiah($berat * 4200);
                            }
                            elseif($berat == 1 &&$tujuan == 'PWT' &&$dari == 'jbi'){
                                echo rupiah(53000);
                            }
                            elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //KEBUMEN.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'KPB' &&$dari == 'jbi'){
                            echo rupiah(53000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'KPB' &&$dari == 'jbi'){
                                echo rupiah(83000);
                            }
                            elseif($berat > 20 &&$tujuan == 'KPB' &&$dari == 'jbi'){
                                echo rupiah($berat * 4200);
                            }
                            elseif($berat == 1 &&$tujuan == 'KPB' &&$dari == 'jbi'){
                                echo rupiah(53000);
                            }
                            elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //TEGAL.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'TGL' &&$dari == 'jbi'){
                            echo rupiah(53000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'TGL' &&$dari == 'jbi'){
                                echo rupiah(83000);
                            }
                            elseif($berat > 20 &&$tujuan == 'TGL' &&$dari == 'jbi'){
                                echo rupiah($berat * 4200);
                            }
                            elseif($berat == 1 &&$tujuan == 'TGL' &&$dari == 'jbi'){
                                echo rupiah(53000);
                            }
                            elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //PEMALANG.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'PML' &&$dari == 'jbi'){
                            echo rupiah(53000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PML' &&$dari == 'jbi'){
                                echo rupiah(83000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PML' &&$dari == 'jbi'){
                                echo rupiah($berat * 4200);
                            }
                            elseif($berat == 1 &&$tujuan == 'PML' &&$dari == 'jbi'){
                                echo rupiah(53000);
                            }
                            elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //PEKALONGAN.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'PKL' &&$dari == 'jbi'){
                            echo rupiah(53000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKL' &&$dari == 'jbi'){
                                echo rupiah(83000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PKL' &&$dari == 'jbi'){
                                echo rupiah($berat * 4200);
                            }
                            elseif($berat == 1 &&$tujuan == 'PKL' &&$dari == 'jbi'){
                                echo rupiah(53000);
                            }
                            elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //BATANG.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'BTG' &&$dari == 'jbi'){
                            echo rupiah(53000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BTG' &&$dari == 'jbi'){
                                echo rupiah(83000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BTG' &&$dari == 'jbi'){
                                echo rupiah($berat * 4200);
                            }
                            elseif($berat == 1 &&$tujuan == 'BTG' &&$dari == 'jbi'){
                                echo rupiah(53000);
                            }
                            elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //BANJAR PATROMAN.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'BTR' &&$dari == 'jbi'){
                            echo rupiah(53000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BTR' &&$dari == 'jbi'){
                                echo rupiah(83000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BTR' &&$dari == 'jbi'){
                                echo rupiah($berat * 4200);
                            }
                            elseif($berat == 1 &&$tujuan == 'BTR' &&$dari == 'jbi'){
                                echo rupiah(53000);
                            }
                            elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //SEMARANG.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'SMG' &&$dari == 'jbi'){
                            echo rupiah(55000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SMG' &&$dari == 'jbi'){
                                echo rupiah(85000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SMG' &&$dari == 'jbi'){
                                echo rupiah($berat * 4300);
                            }
                            elseif($berat == 1 &&$tujuan == 'SMG' &&$dari == 'jbi'){
                                echo rupiah(55000);
                            }
                            elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //KUDUS.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'KDS' &&$dari == 'jbi'){
                            echo rupiah(55000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'KDS' &&$dari == 'jbi'){
                                echo rupiah(85000);
                            }
                            elseif($berat > 20 &&$tujuan == 'KDS' &&$dari == 'jbi'){
                                echo rupiah($berat * 4300);
                            }
                            elseif($berat == 1 &&$tujuan == 'KDS' &&$dari == 'jbi'){
                                echo rupiah(55000);
                            }
                            elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //JOGJA.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'YGY' &&$dari == 'jbi'){
                            echo rupiah(55000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'YGY' &&$dari == 'jbi'){
                                echo rupiah(85000);
                            }
                            elseif($berat > 20 &&$tujuan == 'YGY' &&$dari == 'jbi'){
                                echo rupiah($berat * 4300);
                            }
                            elseif($berat == 1 &&$tujuan == 'YGY' &&$dari == 'jbi'){
                                echo rupiah(55000);
                            }
                            elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //SOLO.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'SOLO' &&$dari == 'jbi'){
                            echo rupiah(55000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SOLO' &&$dari == 'jbi'){
                                echo rupiah(85000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SOLO' &&$dari == 'jbi'){
                                echo rupiah($berat * 4300);
                            }
                            elseif($berat == 1 &&$tujuan == 'SOLO' &&$dari == 'jbi'){
                                echo rupiah(55000);
                            }
                            elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }


                    //KELATEN.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'KLT' &&$dari == 'jbi'){
                            echo rupiah(55000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'KLT' &&$dari == 'jbi'){
                                echo rupiah(85000);
                            }
                            elseif($berat > 20 &&$tujuan == 'KLT' &&$dari == 'jbi'){
                                echo rupiah($berat * 4300);
                            }
                            elseif($berat == 1 &&$tujuan == 'KLT' &&$dari == 'jbi'){
                                echo rupiah(55000);
                            }
                            elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //SALATIGA.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'SLTG' &&$dari == 'jbi'){
                            echo rupiah(55000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SLTG' &&$dari == 'jbi'){
                                echo rupiah(85000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SLTG' &&$dari == 'jbi'){
                                echo rupiah($berat * 4300);
                            }
                            elseif($berat == 1 &&$tujuan == 'SLTG' &&$dari == 'jbi'){
                                echo rupiah(55000);
                            }
                            elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //MAGELANG.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'MGL' &&$dari == 'jbi'){
                            echo rupiah(55000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'MGL' &&$dari == 'jbi'){
                                echo rupiah(85000);
                            }
                            elseif($berat > 20 &&$tujuan == 'MGL' &&$dari == 'jbi'){
                                echo rupiah($berat * 4300);
                            }
                            elseif($berat == 1 &&$tujuan == 'MGL' &&$dari == 'jbi'){
                                echo rupiah(55000);
                            }
                            elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //SURABAYA.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'SBY' &&$dari == 'jbi'){
                            echo rupiah(63000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SBY' &&$dari == 'jbi'){
                                echo rupiah(93000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SBY' &&$dari == 'jbi'){
                                echo rupiah($berat * 4550);
                            }                           
                            elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //BLORA.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'BLA' &&$dari == 'jbi'){
                            echo rupiah(70000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BLA' &&$dari == 'jbi'){
                                echo rupiah(99000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BLA' &&$dari == 'jbi'){
                                echo rupiah($berat * 4900);
                            }                           
                            elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }

                    //BOJONEGORO.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'BJG' &&$dari == 'jbi'){
                            echo rupiah(70000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BJG' &&$dari == 'jbi'){
                                echo rupiah(99000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BJG' &&$dari == 'jbi'){
                                echo rupiah($berat * 4900);
                            }                           
                            elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }

                    //GRESIK.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'GSK' &&$dari == 'jbi'){
                            echo rupiah(70000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'GSK' &&$dari == 'jbi'){
                                echo rupiah(99000);
                            }
                            elseif($berat > 20 &&$tujuan == 'GSK' &&$dari == 'jbi'){
                                echo rupiah($berat * 4900);
                            }                           
                            elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }

                    //SIDOARJO.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'SDJ' &&$dari == 'jbi'){
                            echo rupiah(70000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SDJ' &&$dari == 'jbi'){
                                echo rupiah(99000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SDJ' &&$dari == 'jbi'){
                                echo rupiah($berat * 4900);
                            }                           
                            elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }

                    //MOJOKERTO.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'MJK' &&$dari == 'jbi'){
                            echo rupiah(70000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'MJK' &&$dari == 'jbi'){
                                echo rupiah(99000);
                            }
                            elseif($berat > 20 &&$tujuan == 'MJK' &&$dari == 'jbi'){
                                echo rupiah($berat * 4900);
                            }                           
                            elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }

                    //JOMBANG.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'JBG' &&$dari == 'jbi'){
                            echo rupiah(70000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBG' &&$dari == 'jbi'){
                                echo rupiah(99000);
                            }
                            elseif($berat > 20 &&$tujuan == 'JBG' &&$dari == 'jbi'){
                                echo rupiah($berat * 4900);
                            }                           
                            elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }

                    //MALANG.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'MLG' &&$dari == 'jbi'){
                            echo rupiah(70000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'MLG' &&$dari == 'jbi'){
                                echo rupiah(99000);
                            }
                            elseif($berat > 20 &&$tujuan == 'MLG' &&$dari == 'jbi'){
                                echo rupiah($berat * 4900);
                            }                           
                            elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }


                    //KEDIRI.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'KDR' &&$dari == 'jbi'){
                            echo rupiah(70000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'KDR' &&$dari == 'jbi'){
                                echo rupiah(99000);
                            }
                            elseif($berat > 20 &&$tujuan == 'KDR' &&$dari == 'jbi'){
                                echo rupiah($berat * 4900);
                            }                           
                            elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }

                    //BLITAR.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'BLT' &&$dari == 'jbi'){
                            echo rupiah(72000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BLT' &&$dari == 'jbi'){
                                echo rupiah(102000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BLT' &&$dari == 'jbi'){
                                echo rupiah($berat * 5000);
                            }                           
                            elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }

                    //TULUNGAGUNG.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'TGA' &&$dari == 'jbi'){
                            echo rupiah(72000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'TGA' &&$dari == 'jbi'){
                                echo rupiah(102000);
                            }
                            elseif($berat > 20 &&$tujuan == 'TGA' &&$dari == 'jbi'){
                                echo rupiah($berat * 5000);
                            }                           
                            elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }

                    //PASURUHAN.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'PSR' &&$dari == 'jbi'){
                            echo rupiah(72000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PSR' &&$dari == 'jbi'){
                                echo rupiah(102000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PSR' &&$dari == 'jbi'){
                                echo rupiah($berat * 5000);
                            }                           
                            elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }

                    //PROBOLINGGO.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'PRB' &&$dari == 'jbi'){
                            echo rupiah(72000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PRB' &&$dari == 'jbi'){
                                echo rupiah(102000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PRB' &&$dari == 'jbi'){
                                echo rupiah($berat * 5000);
                            }                           
                            elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }

                    //NGANJUK.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'NGJ' &&$dari == 'jbi'){
                            echo rupiah(72000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'NGJ' &&$dari == 'jbi'){
                                echo rupiah(102000);
                            }
                            elseif($berat > 20 &&$tujuan == 'NGJ' &&$dari == 'jbi'){
                                echo rupiah($berat * 5000);
                            }                           
                            elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }

                    //MADIUN.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'MDN' &&$dari == 'jbi'){
                            echo rupiah(72000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'MDN' &&$dari == 'jbi'){
                                echo rupiah(102000);
                            }
                            elseif($berat > 20 &&$tujuan == 'MDN' &&$dari == 'jbi'){
                                echo rupiah($berat * 5000);
                            }                           
                            elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }

                        //ponorogo/magetan.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'MDN1' &&$dari == 'jbi'){
                            echo rupiah(72000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan =='MDN1' &&$dari == 'jbi'){
                                echo rupiah(102000);
                            }
                            elseif($berat > 20 &&$tujuan =='MDN1' &&$dari == 'jbi'){
                                echo rupiah($berat * 5000);
                            }                           
                            elseif($berat <1 &&$tujuan =='MDN1' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                        }

                    //JEMBER.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'JBR' &&$dari == 'jbi'){
                            echo rupiah(76000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBR' &&$dari == 'jbi'){
                                echo rupiah(106000);
                            }
                            elseif($berat > 20 &&$tujuan == 'JBR' &&$dari == 'jbi'){
                                echo rupiah($berat * 5200);
                            }                           
                            elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                        }

                    //LUMAJANG.jbi//

                       if($berat > 1 &&$berat <=10 &&$tujuan == 'LMG' &&$dari == 'jbi'){
                            echo rupiah(76000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'LMG' &&$dari == 'jbi'){
                                echo rupiah(106000);
                            }
                            elseif($berat > 20 &&$tujuan == 'LMG' &&$dari == 'jbi'){
                                echo rupiah($berat * 5200);
                            }                           
                            elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                        }

                    //BANYUWANGI.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'BYG' &&$dari == 'jbi'){
                            echo rupiah(76000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BYG' &&$dari == 'jbi'){
                                echo rupiah(106000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BYG' &&$dari == 'jbi'){
                                echo rupiah($berat * 5200);
                            }                           
                            elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                        }

                    //DENPASAR.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'DPS' &&$dari == 'jbi'){
                            echo rupiah(85000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e28));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'DPS' &&$dari == 'jbi'){
                                echo rupiah(115000);
                            }
                            elseif($berat > 20 &&$tujuan == 'DPS' &&$dari == 'jbi'){
                                echo rupiah($berat * 5650);
                            }                           
                            elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e28);
                        }

                    //TABANAN.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'TBN' &&$dari == 'jbi'){
                            echo rupiah(85000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e28));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'TBN' &&$dari == 'jbi'){
                                echo rupiah(115000);
                            }
                            elseif($berat > 20 &&$tujuan == 'TBN' &&$dari == 'jbi'){
                                echo rupiah($berat * 5650);
                            }                           
                            elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e28);
                        }

                    //NUSADUA.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'ND2' &&$dari == 'jbi'){
                            echo rupiah(85000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e28));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'ND2' &&$dari == 'jbi'){
                                echo rupiah(115000);
                            }
                            elseif($berat > 20 &&$tujuan == 'ND2' &&$dari == 'jbi'){
                                echo rupiah($berat * 5650);
                            }                           
                            elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e28);
                        }

                    //SINGARAJA.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'SGRJ' &&$dari == 'jbi'){
                            echo rupiah(85000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e28));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SGRJ' &&$dari == 'jbi'){
                                echo rupiah(115000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SGRJ' &&$dari == 'jbi'){
                                echo rupiah($berat * 5650);
                            }                           
                            elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e28);
                        }

                    //BANDAR LAMPUNG.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'BDR' &&$dari == 'jbi'){
                            echo rupiah(20000 + (($berat -1 ) * 2000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BDR' &&$dari == 'jbi'){
                                echo rupiah(40000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BDR' &&$dari == 'jbi'){
                                echo rupiah($berat * 2000);
                            }                           
                            elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                        }   

                    //PALEMBANG.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'PLB' &&$dari == 'jbi'){
                            echo rupiah(18000 + (($berat -1 ) * 2000) + ($Lebar * $Panjang * $Tinggi  * $e7));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PLB' &&$dari == 'jbi'){
                                echo rupiah(37000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PLB' &&$dari == 'jbi'){
                                echo rupiah($berat * 1800);
                            }                           
                            elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                        }   

                    //PEKANBARU.jbi//

                        if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'jbi'){
                            echo rupiah(20000 + (($berat -1 ) * 2000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'jbi'){
                                echo rupiah(40000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'jbi'){
                                echo rupiah($berat * 2000);
                            }                           
                            elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'jbi'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                        }

            // PALEMBANG.plb//

                    //jakarta.plb///

                    if($berat >0 &&$berat <=50 &&$tujuan == 'JKT' &&$dari == 'plb'){
                        echo rupiah((($berat * 2000) + 80000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }

                        elseif($berat >50 &&$tujuan == 'JKT' &&$dari == 'plb'){
                            echo rupiah(($berat * 2000 ) + ($Lebar * $Panjang * $Tinggi  * $e32));
                        }
                        elseif($tujuan == 'JKT' &&$dari == 'plb'){
                            echo  rupiah($koli * 55000);
                    } 
                        
                                  

                    //Depok.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'DPK' &&$dari == 'plb'){
                        echo rupiah((($berat * 2000) + 80000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat >50 &&$tujuan == 'DPK' &&$dari == 'plb'){
                            echo rupiah(($berat * 2000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($tujuan == 'DPK' &&$dari == 'plb'){
                            echo  rupiah($koli * 55000);
                    }

                    //tangerang.plb///

                    if($berat >0 &&$berat <=50 &&$tujuan == 'TGR' &&$dari == 'plb'){
                        echo rupiah((($berat * 2000) + 80000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat >50 &&$tujuan == 'TGR' &&$dari == 'plb'){
                            echo rupiah(($berat * 2000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($tujuan == 'TGR' &&$dari == 'plb'){
                            echo  rupiah($koli * 55000);
                    }

                    //bekasi.plb/// 

                    if($berat >0 &&$berat <=50 &&$tujuan == 'BKS' &&$dari == 'plb'){
                        echo rupiah((($berat * 2000) + 80000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat >50 &&$tujuan == 'BKS' &&$dari == 'plb'){
                            echo rupiah(($berat * 2000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($tujuan == 'BKS' &&$dari == 'plb'){
                            echo  rupiah($koli * 55000);
                    }

                    //cikarang.plb///
                    
                    if($berat >0 &&$berat <=50 &&$tujuan == 'CKR' &&$dari == 'plb'){
                        echo rupiah((($berat * 2000) + 80000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat >50 &&$tujuan == 'CKR' &&$dari == 'plb'){
                            echo rupiah(($berat * 2000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($tujuan == 'CKR' &&$dari == 'plb'){
                            echo  rupiah($koli * 55000);
                    }
                    
                    //karawang.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'KRW' &&$dari == 'plb'){
                        echo rupiah((($berat * 2000) + 80000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat >50 &&$tujuan == 'KRW' &&$dari == 'plb'){
                            echo rupiah(($berat * 2000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($tujuan == 'KRW' &&$dari == 'plb'){
                            echo  rupiah($koli * 55000);
                    }

                    //SERANG.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'SRG' &&$dari == 'plb'){
                        echo rupiah((($berat * 2000) + 80000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat >50 &&$tujuan == 'SRG' &&$dari == 'plb'){
                            echo rupiah(($berat * 2000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($tujuan == 'SRG' &&$dari == 'plb'){
                            echo  rupiah($koli * 55000);
                    }

                    
                    //BOGOR.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'BGR' &&$dari == 'plb'){
                        echo rupiah((($berat * 2000) + 80000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat >50 &&$tujuan == 'BGR' &&$dari == 'plb'){
                            echo rupiah(($berat * 2000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($tujuan == 'BGR' &&$dari == 'plb'){
                            echo  rupiah($koli * 70000);
                    }

                    //CIREBON.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'CRB' &&$dari == 'plb'){
                        echo rupiah((($berat * 3000) + 85000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'CRB' &&$dari == 'plb'){
                            echo rupiah(($berat * 3000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'CRB' &&$dari == 'plb'){
                            echo  rupiah($koli * 75000);
                    }

                    //BANDUNG.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'BDG' &&$dari == 'plb'){
                        echo rupiah((($berat * 2000) + 80000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat >50 &&$tujuan == 'BDG' &&$dari == 'plb'){
                            echo rupiah(($berat * 2000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($tujuan == 'BDG' &&$dari == 'plb'){
                            echo  rupiah($koli * 70000);
                    }

                    //GARUT.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'GRT' &&$dari == 'plb'){
                        echo rupiah((($berat * 2500) + 85000) + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }

                        elseif($berat >50 &&$tujuan == 'GRT' &&$dari == 'plb'){
                            echo rupiah(($berat * 2500) + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }
                        elseif($tujuan == 'GRT' &&$dari == 'plb'){
                            echo  rupiah($koli * 73000);
                    }

                    //TASIK.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'TSK' &&$dari == 'plb'){
                        echo rupiah((($berat * 2500) + 85000) + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }

                        elseif($berat >50 &&$tujuan == 'TSK' &&$dari == 'plb'){
                            echo rupiah(($berat * 2500) + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }
                        elseif($tujuan == 'TSK' &&$dari == 'plb'){
                            echo  rupiah($koli * 73000);
                    }

                    //SUKABUMI.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'TSK' &&$dari == 'plb'){
                        echo rupiah((($berat * 3000) + 85000) + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }

                        elseif($berat >50 &&$tujuan == 'TSK' &&$dari == 'plb'){
                            echo rupiah(($berat * 3000) + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }
                        elseif($tujuan == 'TSK' &&$dari == 'plb'){
                            echo  rupiah($koli * 70000);
                    }

                    //PURWOKERTO.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'PWT' &&$dari == 'plb'){
                        echo rupiah((($berat * 3000) + 85000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'PWT' &&$dari == 'plb'){
                            echo rupiah(($berat * 3000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'PWT' &&$dari == 'plb'){
                            echo  rupiah($koli * 70000);
                    }

                    //KEBUMEN.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'KPB' &&$dari == 'plb'){
                        echo rupiah((($berat * 3200) + 90000) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }

                        elseif($berat >50 &&$tujuan == 'KPB' &&$dari == 'plb'){
                            echo rupiah(($berat * 3200) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }
                        elseif($tujuan == 'KPB' &&$dari == 'plb'){
                            echo  rupiah($koli * 80000);
                    }

                    //TEGAL.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'TGL' &&$dari == 'plb'){
                        echo rupiah((($berat * 3000) + 85000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'TGL' &&$dari == 'plb'){
                            echo rupiah(($berat * 3000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'TGL' &&$dari == 'plb'){
                            echo  rupiah($koli * 75000);
                    }

                    //PEMALANG.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'PML' &&$dari == 'plb'){
                        echo rupiah((($berat * 3000) + 85000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'PML' &&$dari == 'plb'){
                            echo rupiah(($berat * 3000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'PML' &&$dari == 'plb'){
                            echo  rupiah($koli * 75000);
                    }
                   
                    //PEKALONGAN.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'PKL' &&$dari == 'plb'){
                        echo rupiah((($berat * 3000) + 85000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }

                        elseif($berat >50 &&$tujuan == 'PKL' &&$dari == 'plb'){
                            echo rupiah(($berat * 3000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                        }
                        elseif($tujuan == 'PKL' &&$dari == 'plb'){
                            echo  rupiah($koli * 75000);
                    }                    

                    //BANJAR PATROMAN.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'BTR' &&$dari == 'plb'){
                        echo rupiah((($berat * 3000) + 85000) + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }

                        elseif($berat >50 &&$tujuan == 'BTR' &&$dari == 'plb'){
                            echo rupiah(($berat * 3000) + ($Lebar * $Panjang * $Tinggi  * $e13));
                        }
                        elseif($tujuan == 'BTR' &&$dari == 'plb'){
                            echo  rupiah($koli * 75000);
                    }

                    //SEMARANG.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'SMG' &&$dari == 'plb'){
                        echo rupiah((($berat * 3200) + 90000) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }

                        elseif($berat >50 &&$tujuan == 'SMG' &&$dari == 'plb'){
                            echo rupiah(($berat * 3200) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }
                        elseif($tujuan == 'SMG' &&$dari == 'plb'){
                            echo  rupiah($koli * 77000);
                    }

                    //KUDUS.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'KDS' &&$dari == 'plb'){
                        echo rupiah((($berat * 3200) + 90000) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }

                        elseif($berat >50 &&$tujuan == 'KDS' &&$dari == 'plb'){
                            echo rupiah(($berat * 3200) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }
                        elseif($tujuan == 'KDS' &&$dari == 'plb'){
                            echo  rupiah($koli * 77000);
                    }

                    //JOGJA.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'YGY' &&$dari == 'plb'){
                        echo rupiah((($berat * 3200) + 90000) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }

                        elseif($berat >50 &&$tujuan == 'YGY' &&$dari == 'plb'){
                            echo rupiah(($berat * 3200) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }
                        elseif($tujuan == 'YGY' &&$dari == 'plb'){
                            echo  rupiah($koli * 77000);
                    }

                    //SOLO.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'SOLO' &&$dari == 'plb'){
                        echo rupiah((($berat * 3200) + 90000) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }

                        elseif($berat >50 &&$tujuan == 'SOLO' &&$dari == 'plb'){
                            echo rupiah(($berat * 3200) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }
                        elseif($tujuan == 'SOLO' &&$dari == 'plb'){
                            echo  rupiah($koli * 77000);
                    }


                    //KELATEN.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'KLT' &&$dari == 'plb'){
                        echo rupiah((($berat * 3200) + 90000) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }

                        elseif($berat >50 &&$tujuan == 'KLT' &&$dari == 'plb'){
                            echo rupiah(($berat * 3200) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }
                        elseif($tujuan == 'KLT' &&$dari == 'plb'){
                            echo  rupiah($koli * 77000);
                    }

                    //SALATIGA.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'SLTG' &&$dari == 'plb'){
                        echo rupiah((($berat * 3200) + 90000) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }

                        elseif($berat >50 &&$tujuan == 'SLTG' &&$dari == 'plb'){
                            echo rupiah(($berat * 3200) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }
                        elseif($tujuan == 'SLTG' &&$dari == 'plb'){
                            echo  rupiah($koli * 77000);
                    }

                    //MAGELANG.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'MGL' &&$dari == 'plb'){
                        echo rupiah((($berat * 3200) + 90000) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }

                        elseif($berat >50 &&$tujuan == 'MGL' &&$dari == 'plb'){
                            echo rupiah(($berat * 3200) + ($Lebar * $Panjang * $Tinggi  * $e14));
                        }
                        elseif($tujuan == 'MGL' &&$dari == 'plb'){
                            echo  rupiah($koli * 77000);
                    }

                    //SURABAYA.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'SBY' &&$dari == 'plb'){
                        echo rupiah((($berat * 3300) + 95000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }

                        elseif($berat >50 &&$tujuan == 'SBY' &&$dari == 'plb'){
                            echo rupiah(($berat * 3300) + ($Lebar * $Panjang * $Tinggi  * $e24));
                        }
                        elseif($tujuan == 'SBY' &&$dari == 'plb'){
                            echo  rupiah($koli * 88000);
                    }

                    //BLORA.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'BLA' &&$dari == 'plb'){
                        echo rupiah((($berat * 3600) + 100000) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }

                        elseif($berat >50 &&$tujuan == 'BLA' &&$dari == 'plb'){
                            echo rupiah(($berat * 3600) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }
                        elseif($tujuan == 'BLA' &&$dari == 'plb'){
                            echo  rupiah($koli * 95000);
                    }

                    //BOJONEGORO.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'BJG' &&$dari == 'plb'){
                        echo rupiah((($berat * 3600) + 100000) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }

                        elseif($berat >50 &&$tujuan == 'BJG' &&$dari == 'plb'){
                            echo rupiah(($berat * 3600) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }
                        elseif($tujuan == 'BJG' &&$dari == 'plb'){
                            echo  rupiah($koli * 95000);
                    }

                    //GRESIK.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'GSK' &&$dari == 'plb'){
                        echo rupiah((($berat * 3600) + 100000) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }

                        elseif($berat >50 &&$tujuan == 'GSK' &&$dari == 'plb'){
                            echo rupiah(($berat * 3600) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }
                        elseif($tujuan == 'GSK' &&$dari == 'plb'){
                            echo  rupiah($koli * 95000);
                    }

                    //SIDOARJO.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'SDJ' &&$dari == 'plb'){
                        echo rupiah((($berat * 3600) + 100000) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }

                        elseif($berat >50 &&$tujuan == 'SDJ' &&$dari == 'plb'){
                            echo rupiah(($berat * 3600) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }
                        elseif($tujuan == 'SDJ' &&$dari == 'plb'){
                            echo  rupiah($koli * 95000);
                    }

                    //MOJOKERTO.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'MJK' &&$dari == 'plb'){
                        echo rupiah((($berat * 3600) + 100000) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }

                        elseif($berat >50 &&$tujuan == 'MJK' &&$dari == 'plb'){
                            echo rupiah(($berat * 3600) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }
                        elseif($tujuan == 'MJK' &&$dari == 'plb'){
                            echo  rupiah($koli * 95000);
                    }

                    //JOMBANG.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'JBG' &&$dari == 'plb'){
                        echo rupiah((($berat * 3600) + 100000) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }

                        elseif($berat >50 &&$tujuan == 'JBG' &&$dari == 'plb'){
                            echo rupiah(($berat * 3600) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }
                        elseif($tujuan == 'JBG' &&$dari == 'plb'){
                            echo  rupiah($koli * 95000);
                    }

                    //MALANG.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'MLG' &&$dari == 'plb'){
                        echo rupiah((($berat * 3600) + 100000) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }

                        elseif($berat >50 &&$tujuan == 'MLG' &&$dari == 'plb'){
                            echo rupiah(($berat * 3600) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }
                        elseif($tujuan == 'MLG' &&$dari == 'plb'){
                            echo  rupiah($koli * 95000);
                    }


                    //KEDIRI.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'KDR' &&$dari == 'plb'){
                        echo rupiah((($berat * 3600) + 100000) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }

                        elseif($berat >50 &&$tujuan == 'KDR' &&$dari == 'plb'){
                            echo rupiah(($berat * 3600) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }
                        elseif($tujuan == 'KDR' &&$dari == 'plb'){
                            echo  rupiah($koli * 95000);
                    }

                    //BLITAR.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'BLT' &&$dari == 'plb'){
                        echo rupiah((($berat * 3600) + 100000) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }

                        elseif($berat >50 &&$tujuan == 'BLT' &&$dari == 'plb'){
                            echo rupiah(($berat * 3600) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }
                        elseif($tujuan == 'BLT' &&$dari == 'plb'){
                            echo  rupiah($koli * 95000);
                    }

                    //TULUNGAGUNG.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'TGA' &&$dari == 'plb'){
                        echo rupiah((($berat * 3600) + 100000) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }

                        elseif($berat >50 &&$tujuan == 'TGA' &&$dari == 'plb'){
                            echo rupiah(($berat * 3600) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }
                        elseif($tujuan == 'TGA' &&$dari == 'plb'){
                            echo  rupiah($koli * 95000);
                    }

                    //PASURUHAN.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'PSR' &&$dari == 'plb'){
                        echo rupiah((($berat * 3600) + 100000) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }

                        elseif($berat >50 &&$tujuan == 'PSR' &&$dari == 'plb'){
                            echo rupiah(($berat * 3600) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }
                        elseif($tujuan == 'PSR' &&$dari == 'plb'){
                            echo  rupiah($koli * 95000);
                    }

                    //PROBOLINGGO.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'PRB' &&$dari == 'plb'){
                        echo rupiah((($berat * 3600) + 100000) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }

                        elseif($berat >50 &&$tujuan == 'PRB' &&$dari == 'plb'){
                            echo rupiah(($berat * 3600) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }
                        elseif($tujuan == 'PRB' &&$dari == 'plb'){
                            echo  rupiah($koli * 95000);
                    }

                    //NGANJUK.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'NGJ' &&$dari == 'plb'){
                        echo rupiah((($berat * 3600) + 100000) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }

                        elseif($berat >50 &&$tujuan == 'NGJ' &&$dari == 'plb'){
                            echo rupiah(($berat * 3600) + ($Lebar * $Panjang * $Tinggi  * $e34));
                        }
                        elseif($tujuan == 'NGJ' &&$dari == 'plb'){
                            echo  rupiah($koli * 95000);
                    }

                    //MADIUN.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'MDN' &&$dari == 'plb'){
                        echo rupiah((($berat * 3700) + 100000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >50 &&$tujuan == 'MDN' &&$dari == 'plb'){
                            echo rupiah(($berat * 3700) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($tujuan == 'MDN' &&$dari == 'plb'){
                            echo  rupiah($koli * 98000);
                    }

                    //Ponorogo/Magetan.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'MDN1' &&$dari == 'plb'){
                        echo rupiah((($berat * 3900) + 110000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >50 &&$tujuan == 'MDN1' &&$dari == 'plb'){
                            echo rupiah(($berat * 3900) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($tujuan == 'MDN1' &&$dari == 'plb'){
                            echo  rupiah($koli * 100000);
                    }
                    
                    //JEMBER.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'JBR' &&$dari == 'plb'){
                        echo rupiah((($berat * 3900) + 110000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >50 &&$tujuan == 'JBR' &&$dari == 'plb'){
                            echo rupiah(($berat * 3900) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($tujuan == 'JBR' &&$dari == 'plb'){
                            echo  rupiah($koli * 100000);
                    }

                    //LUMAJANG.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'LMG' &&$dari == 'plb'){
                        echo rupiah((($berat * 3900) + 110000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >50 &&$tujuan == 'LMG' &&$dari == 'plb'){
                            echo rupiah(($berat * 3900) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($tujuan == 'LMG' &&$dari == 'plb'){
                            echo  rupiah($koli * 100000);
                    }

                    //BANYUWANGI.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'BYG' &&$dari == 'plb'){
                        echo rupiah((($berat * 3900) + 110000) + ($Lebar * $Panjang * $Tinggi  * $e33));
                        }

                        elseif($berat >50 &&$tujuan == 'BYG' &&$dari == 'plb'){
                            echo rupiah(($berat * 3900) + ($Lebar * $Panjang * $Tinggi  * $e33));
                        }
                        elseif($tujuan == 'BYG' &&$dari == 'plb'){
                            echo  rupiah($koli * 100000);
                    }

                    //DENPASAR.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'DPS' &&$dari == 'plb'){
                        echo rupiah((($berat * 4300) + 125000) + ($Lebar * $Panjang * $Tinggi  * $e36));
                        }

                        elseif($berat >50 &&$tujuan == 'DPS' &&$dari == 'plb'){
                            echo rupiah(($berat * 4300) + ($Lebar * $Panjang * $Tinggi  * $e36));
                        }
                        elseif($tujuan == 'DPS' &&$dari == 'plb'){
                            echo  rupiah($koli * 120000);
                    }

                    //TABANAN.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'TBN' &&$dari == 'plb'){
                        echo rupiah((($berat * 4300) + 125000) + ($Lebar * $Panjang * $Tinggi  * $e36));
                        }

                        elseif($berat >50 &&$tujuan == 'TBN' &&$dari == 'plb'){
                            echo rupiah(($berat * 4300) + ($Lebar * $Panjang * $Tinggi  * $e36));
                        }
                        elseif($tujuan == 'TBN' &&$dari == 'plb'){
                            echo  rupiah($koli * 120000);
                    }

                    //NUSADUA.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'ND2' &&$dari == 'plb'){
                        echo rupiah((($berat * 4300) + 125000) + ($Lebar * $Panjang * $Tinggi  * $e36));
                        }

                        elseif($berat >50 &&$tujuan == 'ND2' &&$dari == 'plb'){
                            echo rupiah(($berat * 4300) + ($Lebar * $Panjang * $Tinggi  * $e36));
                        }
                        elseif($tujuan == 'ND2' &&$dari == 'plb'){
                            echo  rupiah($koli * 120000);
                    }

                    //SINGARAJA.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'SGRJ' &&$dari == 'plb'){
                        echo rupiah((($berat * 4300) + 125000) + ($Lebar * $Panjang * $Tinggi  * $e36));
                        }

                        elseif($berat >50 &&$tujuan == 'SGRJ' &&$dari == 'plb'){
                            echo rupiah(($berat * 4300) + ($Lebar * $Panjang * $Tinggi  * $e36));
                        }
                        elseif($tujuan == 'SGRJ' &&$dari == 'plb'){
                            echo  rupiah($koli * 120000);
                    }

                    //Bandar.plb//

                    if($berat >0 &&$berat <=50 &&$tujuan == 'BDR' &&$dari == 'plb'){
                        echo rupiah((($berat * 1800) + 80000) + ($Lebar * $Panjang * $Tinggi  * $e1));
                        }

                        elseif($berat >50 &&$tujuan == 'BDR' &&$dari == 'plb'){
                            echo rupiah(($berat * 1800) + ($Lebar * $Panjang * $Tinggi  * $e1));
                        }
                        elseif($tujuan == 'BDR' &&$dari == 'plb'){
                            echo  rupiah($koli * 50000);
                    }

                    //JAMBI.plb//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'plb'){
                        echo rupiah(18000 + (($berat -1 ) * 2000) + ($Lebar * $Panjang * $Tinggi  * $e7));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'plb'){
                            echo rupiah((38000) + ($Lebar * $Panjang * $Tinggi  * $e7));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'plb'){
                            echo rupiah(($berat * 1800) + ($Lebar * $Panjang * $Tinggi  * $e7));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'plb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //pekanbaru.plb//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'plb'){
                            echo rupiah(20000 + (($berat -1 ) * 2500) + ($Lebar * $Panjang * $Tinggi  * $e3));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'plb'){
                                echo rupiah((50000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                            }
                            elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'plb'){
                                echo rupiah(($berat * 2300) + ($Lebar * $Panjang * $Tinggi  * $e3));
                            }
                            
                            elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'plb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }

            // PEKANBARU.pkb//

                    //jakarta.pkb///

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'JKT' &&$dari == 'pkb'){
                            echo rupiah(25000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e22));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'JKT' &&$dari == 'pkb'){
                                echo rupiah(66000);
                            }
                            elseif($berat > 20 &&$tujuan == 'JKT' &&$dari == 'pkb'){
                                echo rupiah($berat * 3500);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e22);
                        }                

                    //Depok.pkb//

                       if($berat >=1 &&$berat <=10 &&$tujuan == 'DPK' &&$dari == 'pkb'){
                            echo rupiah(35000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e29));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'DPK' &&$dari == 'pkb'){
                                echo rupiah(76000);
                            }
                            elseif($berat > 20 &&$tujuan == 'DPK' &&$dari == 'pkb'){
                                echo rupiah($berat * 3900);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e29);
                        }

                    //tangerang.pkb///

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'TGR' &&$dari == 'pkb'){
                            echo rupiah(35000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e29));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'TGR' &&$dari == 'pkb'){
                                echo rupiah(76000);
                            }
                            elseif($berat > 20 &&$tujuan == 'TGR' &&$dari == 'pkb'){
                                echo rupiah($berat * 3900);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e29);
                        }

                    //bekasi.pkb/// 

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'BKS' &&$dari == 'pkb'){
                            echo rupiah(35000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e29));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BKS' &&$dari == 'pkb'){
                                echo rupiah(76000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BKS' &&$dari == 'pkb'){
                                echo rupiah($berat * 3900);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e29);
                        }

                    //cikarang.pkb///
                    
                        if($berat >=1 &&$berat <=10 &&$tujuan == 'CKR' &&$dari == 'pkb'){
                            echo rupiah(35000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e29));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'CKR' &&$dari == 'pkb'){
                                echo rupiah(76000);
                            }
                            elseif($berat > 20 &&$tujuan == 'CKR' &&$dari == 'pkb'){
                                echo rupiah($berat * 3900);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e29);
                        }
                    
                    //karawang.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'KRW' &&$dari == 'pkb'){
                            echo rupiah(35000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e29));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'KRW' &&$dari == 'pkb'){
                                echo rupiah(76000);
                            }
                            elseif($berat > 20 &&$tujuan == 'KRW' &&$dari == 'pkb'){
                                echo rupiah($berat * 3900);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e29);
                        }

                    //SERANG.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'SRG' &&$dari == 'pkb'){
                            echo rupiah(35000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e29));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SRG' &&$dari == 'pkb'){
                                echo rupiah(76000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SRG' &&$dari == 'pkb'){
                                echo rupiah($berat * 3900);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e29);
                        }

                    //BOGOR.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'BGR' &&$dari == 'pkb'){
                            echo rupiah(53000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BGR' &&$dari == 'pkb'){
                                echo rupiah(94000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BGR' &&$dari == 'pkb'){
                                echo rupiah($berat * 4700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //CIREBON.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'CRB' &&$dari == 'pkb'){
                            echo rupiah(53000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'CRB' &&$dari == 'pkb'){
                                echo rupiah(94000);
                            }
                            elseif($berat > 20 &&$tujuan == 'CRB' &&$dari == 'pkb'){
                                echo rupiah($berat * 4700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //BANDUNG.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'BDG' &&$dari == 'pkb'){
                            echo rupiah(53000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BDG' &&$dari == 'pkb'){
                                echo rupiah(94000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BDG' &&$dari == 'pkb'){
                                echo rupiah($berat * 4700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //GARUT.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'GRT' &&$dari == 'pkb'){
                            echo rupiah(53000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'GRT' &&$dari == 'pkb'){
                                echo rupiah(94000);
                            }
                            elseif($berat > 20 &&$tujuan == 'GRT' &&$dari == 'pkb'){
                                echo rupiah($berat * 4700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //TASIK.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'TSK' &&$dari == 'pkb'){
                            echo rupiah(53000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'TSK' &&$dari == 'pkb'){
                                echo rupiah(94000);
                            }
                            elseif($berat > 20 &&$tujuan == 'TSK' &&$dari == 'pkb'){
                                echo rupiah($berat * 4700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //SUKABUMI.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'SKB' &&$dari == 'pkb'){
                            echo rupiah(53000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SKB' &&$dari == 'pkb'){
                                echo rupiah(94000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SKB' &&$dari == 'pkb'){
                                echo rupiah($berat * 4700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //PURWOKERTO.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'PWT' &&$dari == 'pkb'){
                            echo rupiah(53000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PWT' &&$dari == 'pkb'){
                                echo rupiah(94000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PWT' &&$dari == 'pkb'){
                                echo rupiah($berat * 4700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //KEBUMEN.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'KPB' &&$dari == 'pkb'){
                            echo rupiah(53000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'KPB' &&$dari == 'pkb'){
                                echo rupiah(94000);
                            }
                            elseif($berat > 20 &&$tujuan == 'KPB' &&$dari == 'pkb'){
                                echo rupiah($berat * 4700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //TEGAL.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'TGL' &&$dari == 'pkb'){
                            echo rupiah(53000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'TGL' &&$dari == 'pkb'){
                                echo rupiah(94000);
                            }
                            elseif($berat > 20 &&$tujuan == 'TGL' &&$dari == 'pkb'){
                                echo rupiah($berat * 4700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //PEMALANG.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'PML' &&$dari == 'pkb'){
                            echo rupiah(53000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PML' &&$dari == 'pkb'){
                                echo rupiah(94000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PML' &&$dari == 'pkb'){
                                echo rupiah($berat * 4700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //PEKALONGAN.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'PKL' &&$dari == 'pkb'){
                            echo rupiah(53000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKL' &&$dari == 'pkb'){
                                echo rupiah(94000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PKL' &&$dari == 'pkb'){
                                echo rupiah($berat * 4700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    
                    //BANJAR PATROMAN.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'BTR' &&$dari == 'pkb'){
                            echo rupiah(53000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BTR' &&$dari == 'pkb'){
                                echo rupiah(94000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BTR' &&$dari == 'pkb'){
                                echo rupiah($berat * 4700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //SEMARANG.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'SMG' &&$dari == 'pkb'){
                            echo rupiah(55000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SMG' &&$dari == 'pkb'){
                                echo rupiah(96000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SMG' &&$dari == 'pkb'){
                                echo rupiah($berat * 4800);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //KUDUS.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'KDS' &&$dari == 'pkb'){
                            echo rupiah(55000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'KDS' &&$dari == 'pkb'){
                                echo rupiah(96000);
                            }
                            elseif($berat > 20 &&$tujuan == 'KDS' &&$dari == 'pkb'){
                                echo rupiah($berat * 4800);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //JOGJA.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'YGY' &&$dari == 'pkb'){
                            echo rupiah(55000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'YGY' &&$dari == 'pkb'){
                                echo rupiah(96000);
                            }
                            elseif($berat > 20 &&$tujuan == 'YGY' &&$dari == 'pkb'){
                                echo rupiah($berat * 4800);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //SOLO.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'SOLO' &&$dari == 'pkb'){
                            echo rupiah(55000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SOLO' &&$dari == 'pkb'){
                                echo rupiah(96000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SOLO' &&$dari == 'pkb'){
                                echo rupiah($berat * 4800);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }


                    //KELATEN.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'KLT' &&$dari == 'pkb'){
                            echo rupiah(55000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'KLT' &&$dari == 'pkb'){
                                echo rupiah(96000);
                            }
                            elseif($berat > 20 &&$tujuan == 'KLT' &&$dari == 'pkb'){
                                echo rupiah($berat * 4800);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //SALATIGA.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'SLTG' &&$dari == 'pkb'){
                            echo rupiah(55000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SLTG' &&$dari == 'pkb'){
                                echo rupiah(96000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SLTG' &&$dari == 'pkb'){
                                echo rupiah($berat * 4800);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                        }

                    //MAGELANG.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'MGL' &&$dari == 'pkb'){
                            echo rupiah(55000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e24));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'MGL' &&$dari == 'pkb'){
                                echo rupiah(96000);
                            }
                            elseif($berat > 20 &&$tujuan == 'MGL' &&$dari == 'pkb'){
                                echo rupiah($berat * 4800);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e24);
                        }

                    //SURABAYA.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'SBY' &&$dari == 'pkb'){
                            echo rupiah(63000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SBY' &&$dari == 'pkb'){
                                echo rupiah(102000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SBY' &&$dari == 'pkb'){
                                echo rupiah($berat * 5050);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                        }

                    
                    //BOJONEGORO.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'BJG' &&$dari == 'pkb'){
                            echo rupiah(70000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BJG' &&$dari == 'pkb'){
                                echo rupiah(110000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BJG' &&$dari == 'pkb'){
                                echo rupiah($berat * 5400);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //GRESIK.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'GSK' &&$dari == 'pkb'){
                            echo rupiah(70000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'GSK' &&$dari == 'pkb'){
                                echo rupiah(110000);
                            }
                            elseif($berat > 20 &&$tujuan == 'GSK' &&$dari == 'pkb'){
                                echo rupiah($berat * 5400);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //SIDOARJO.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'SDJ' &&$dari == 'pkb'){
                            echo rupiah(70000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SDJ' &&$dari == 'pkb'){
                                echo rupiah(110000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SDJ' &&$dari == 'pkb'){
                                echo rupiah($berat * 5400);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //MOJOKERTO.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'MJK' &&$dari == 'pkb'){
                            echo rupiah(70000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'MJK' &&$dari == 'pkb'){
                                echo rupiah(110000);
                            }
                            elseif($berat > 20 &&$tujuan == 'MJK' &&$dari == 'pkb'){
                                echo rupiah($berat * 5400);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //JOMBANG.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'JBG' &&$dari == 'pkb'){
                            echo rupiah(70000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBG' &&$dari == 'pkb'){
                                echo rupiah(110000);
                            }
                            elseif($berat > 20 &&$tujuan == 'JBG' &&$dari == 'pkb'){
                                echo rupiah($berat * 5400);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //MALANG.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'MLG' &&$dari == 'pkb'){
                            echo rupiah(70000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'MLG' &&$dari == 'pkb'){
                                echo rupiah(110000);
                            }
                            elseif($berat > 20 &&$tujuan == 'MLG' &&$dari == 'pkb'){
                                echo rupiah($berat * 5400);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }


                    //KEDIRI.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'KDR' &&$dari == 'pkb'){
                            echo rupiah(70000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'KDR' &&$dari == 'pkb'){
                                echo rupiah(110000);
                            }
                            elseif($berat > 20 &&$tujuan == 'KDR' &&$dari == 'pkb'){
                                echo rupiah($berat * 5400);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //BLITAR.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'BLT' &&$dari == 'pkb'){
                            echo rupiah(72000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BLT' &&$dari == 'pkb'){
                                echo rupiah(112000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BLT' &&$dari == 'pkb'){
                                echo rupiah($berat * 5500);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //TULUNGAGUNG.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'TGA' &&$dari == 'pkb'){
                            echo rupiah(72000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'TGA' &&$dari == 'pkb'){
                                echo rupiah(112000);
                            }
                            elseif($berat > 20 &&$tujuan == 'TGA' &&$dari == 'pkb'){
                                echo rupiah($berat * 5500);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //PASURUHAN.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'PSR' &&$dari == 'pkb'){
                            echo rupiah(72000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PSR' &&$dari == 'pkb'){
                                echo rupiah(112000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PSR' &&$dari == 'pkb'){
                                echo rupiah($berat * 5500);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //PROBOLINGGO.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'PRB' &&$dari == 'pkb'){
                            echo rupiah(72000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PRB' &&$dari == 'pkb'){
                                echo rupiah(112000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PRB' &&$dari == 'pkb'){
                                echo rupiah($berat * 5500);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //NGANJUK.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'NGJ' &&$dari == 'pkb'){
                            echo rupiah(72000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'NGJ' &&$dari == 'pkb'){
                                echo rupiah(112000);
                            }
                            elseif($berat > 20 &&$tujuan == 'NGJ' &&$dari == 'pkb'){
                                echo rupiah($berat * 5500);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //MADIUN.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == "MDN" &&$dari == 'pkb'){
                            echo rupiah(72000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'MDN' &&$dari == 'pkb'){
                                echo rupiah(112000);
                            }
                            elseif($berat > 20 &&$tujuan == 'MDN' &&$dari == 'pkb'){
                                echo rupiah($berat * 5500);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                        //ponorogo/magetan.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == "MDN1" &&$dari == 'pkb'){
                            echo rupiah(72000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'MDN1' &&$dari == 'pkb'){
                                echo rupiah(112000);
                            }
                            elseif($berat > 20 &&$tujuan == 'MDN1' &&$dari == 'pkb'){
                                echo rupiah($berat * 5500);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                        }

                    //JEMBER.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'JBR' &&$dari == 'pkb'){
                            echo rupiah(76000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e28));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBR' &&$dari == 'pkb'){
                                echo rupiah(116000);
                            }
                            elseif($berat > 20 &&$tujuan == 'JBR' &&$dari == 'pkb'){
                                echo rupiah($berat * 5700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e28);
                        }

                    //LUMAJANG.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'JBR' &&$dari == 'pkb'){
                            echo rupiah(76000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e28));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBR' &&$dari == 'pkb'){
                                echo rupiah(116000);
                            }
                            elseif($berat > 20 &&$tujuan == 'JBR' &&$dari == 'pkb'){
                                echo rupiah($berat * 5700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e28);
                        }

                    //BANYUWANGI.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'BYG' &&$dari == 'pkb'){
                            echo rupiah(76000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e28));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'BYG' &&$dari == 'pkb'){
                                echo rupiah(116000);
                            }
                            elseif($berat > 20 &&$tujuan == 'BYG' &&$dari == 'pkb'){
                                echo rupiah($berat * 5700);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e28);
                        }

                    //DENPASAR.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'DPS' &&$dari == 'pkb'){
                            echo rupiah(85000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e31));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'DPS' &&$dari == 'pkb'){
                                echo rupiah(125000);
                            }
                            elseif($berat > 20 &&$tujuan == 'DPS' &&$dari == 'pkb'){
                                echo rupiah($berat * 6150);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e31);
                        }

                    //TABANAN.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'TBN' &&$dari == 'pkb'){
                            echo rupiah(85000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e31));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'TBN' &&$dari == 'pkb'){
                                echo rupiah(125000);
                            }
                            elseif($berat > 20 &&$tujuan == 'TBN' &&$dari == 'pkb'){
                                echo rupiah($berat * 6150);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e31);
                        }

                    //NUSADUA.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'ND2' &&$dari == 'pkb'){
                            echo rupiah(85000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e31));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'ND2' &&$dari == 'pkb'){
                                echo rupiah(125000);
                            }
                            elseif($berat > 20 &&$tujuan == 'ND2' &&$dari == 'pkb'){
                                echo rupiah($berat * 6150);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e31);
                        }

                    //SINGARAJA.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'SGRJ' &&$dari == 'pkb'){
                            echo rupiah(85000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e31));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SGRJ' &&$dari == 'pkb'){
                                echo rupiah(125000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SGRJ' &&$dari == 'pkb'){
                                echo rupiah($berat * 6150);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e31);
                        }

                    //BANDAR LAMPUNG.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'SGRJ' &&$dari == 'pkb'){
                            echo rupiah(25000 + (($berat -1 ) * 2500) + ($Lebar * $Panjang * $Tinggi  * $e8));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'SGRJ' &&$dari == 'pkb'){
                                echo rupiah(50000);
                            }
                            elseif($berat > 20 &&$tujuan == 'SGRJ' &&$dari == 'pkb'){
                                echo rupiah($berat * 2500);
                            }
                            
                            elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e8);
                        }   

                    //PALEMBANG.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'PLB' &&$dari == 'pkb'){
                            echo rupiah(25000 + (($berat -1 ) * 2500) + ($Lebar * $Panjang * $Tinggi  * $e4));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PLB' &&$dari == 'pkb'){
                                echo rupiah(48000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PLB' &&$dari == 'pkb'){
                                echo rupiah($berat * 2300);
                            }                           
                            elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                        }   

                    //PEKANBARU.pkb//

                        if($berat >=1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'pkb'){
                            echo rupiah(20000 + (($berat -1 ) * 2000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                            }

                            elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'pkb'){
                                echo rupiah(40000);
                            }
                            elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'pkb'){
                                echo rupiah($berat * 2000);
                            }                           
                            elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'pkb'){
                                echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                        }

                       ?>
