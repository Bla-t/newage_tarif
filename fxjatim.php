<?php

//////////////////-----------------RMS CBG--------------------------///////////

            // SURABAYA.sby//

                    //jakarta.sby///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1500 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2600 + 35000) + ($Lebar * $Panjang * $Tinggi  * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'sby'){
                            echo rupiah($berat * 1600 + ($Lebar * $Panjang * $Tinggi  * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'sby'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'sby'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }                

                    //Depok.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1600 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2700 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'sby'){
                            echo rupiah($berat * 1750 + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'sby'){
                            echo rupiah(45000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'sby'){
                            echo rupiah(50000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //tangerang.sby///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1600 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2700 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'sby'){
                            echo rupiah($berat * 1750 + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'sby'){
                            echo rupiah(45000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'sby'){
                            echo rupiah(50000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //bekasi.sby/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1600 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2700 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'sby'){
                            echo rupiah($berat * 1750 + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'sby'){
                            echo rupiah(45000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'sby'){
                            echo rupiah(50000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //cikarang.sby///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1600 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2700 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'sby'){
                            echo rupiah($berat * 1750 + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'sby'){
                            echo rupiah(45000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'sby'){
                            echo rupiah(50000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }
                    
                    //karawang.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1600 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2700 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'sby'){
                            echo rupiah($berat * 1750 + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'sby'){
                            echo rupiah(45000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'sby'){
                            echo rupiah(50000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //SERANG.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1600 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2700 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'sby'){
                            echo rupiah($berat * 1750 + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'sby'){
                            echo rupiah(45000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'sby'){
                            echo rupiah(50000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    
                    //BOGOR.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1600 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2700 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'sby'){
                            echo rupiah($berat * 1750 + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'sby'){
                            echo rupiah(45000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'sby'){
                            echo rupiah(50000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //CIREBON.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'sby'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'sby'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e11);
                    }

                    //BANDUNG.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'sby'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'sby'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'sby'){
                            echo rupiah(32000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //GARUT.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'sby'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'sby'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'sby'){
                            echo rupiah(32000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TASIK.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'sby'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'sby'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'sby'){
                            echo rupiah(32000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SUKABUMI.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1600 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2700 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'sby'){
                            echo rupiah($berat * 1750 + ($Lebar * $Panjang * $Tinggi  * $e2));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'sby'){
                            echo rupiah(45000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'sby'){
                            echo rupiah(50000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e2);
                    }

                    //PURWOKERTO.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'sby'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'sby'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e11);
                    }

                    //KEBUMEN.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'sby'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'sby'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e11);
                    }

                    //TEGAL.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'sby'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'sby'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e11);
                    }

                    //indramayu.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'sby'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'sby'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e11);
                    }

                    //PURWAKARTA.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'sby'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'sby'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e11);
                    }

                    //PEMALANG.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'sby'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'sby'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e11);
                    }

                   
                    //PEKALONGAN.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'sby'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'sby'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e11);
                    }

                    //BATANG.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'sby'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e11));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'sby'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e11);
                    }

                    //BANJAR PATROMAN.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'sby'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'sby'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'sby'){
                            echo rupiah(32000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SEMARANG.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 1700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'sby'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'sby'){
                            echo rupiah(18000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //KUDUS.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 1700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'sby'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'sby'){
                            echo rupiah(18000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //jepara/pati.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 1700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'sby'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'sby'){
                            echo rupiah(18000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //JOGJA.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 1700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'sby'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'sby'){
                            echo rupiah(18000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SOLO.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 1700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'sby'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'sby'){
                            echo rupiah(18000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }


                    //KELATEN.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 1700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'sby'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'sby'){
                            echo rupiah(18000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SALATIGA.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 1700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'sby'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'sby'){
                            echo rupiah(18000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //MAGELANG.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 1700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'sby'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'sby'){
                            echo rupiah(18000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BLORA.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) * 1000 + 25000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 1700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'sby'){
                            echo rupiah($berat * 1150 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'sby'){
                            echo rupiah(18000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //BOJONEGORO.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 15000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'sby'){
                            echo rupiah($berat * 900 + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'sby'){
                            echo rupiah(17500);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e10);
                    }

                    //GRESIK.sby//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 15000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'sby'){
                            echo rupiah($berat * 900 + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'sby'){
                            echo rupiah(17500);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e10);
                    }

                    //SIDOARJO.sby//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 15000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'sby'){
                            echo rupiah($berat * 900 + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'sby'){
                            echo rupiah(17500);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e10);
                    }

                    //MOJOKERTO.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 15000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'sby'){
                            echo rupiah($berat * 900 + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'sby'){
                            echo rupiah(17500);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e10);
                    }

                    //JOMBANG.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 15000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'sby'){
                            echo rupiah($berat * 900 + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'sby'){
                            echo rupiah(17500);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e10);
                    }

                    //MALANG.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 15000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'sby'){
                            echo rupiah($berat * 900 + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'sby'){
                            echo rupiah(17500);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e10);
                    }


                    //KEDIRI.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 15000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'sby'){
                            echo rupiah($berat * 900 + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'sby'){
                            echo rupiah(17500);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e10);
                    }

                    //BLITAR.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 15000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'sby'){
                            echo rupiah($berat * 900 + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'sby'){
                            echo rupiah(17500);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e10);
                    }

                    //TULUNGAGUNG.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 15000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'sby'){
                            echo rupiah($berat * 900 + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'sby'){
                            echo rupiah(17500);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e10);
                    }

                    //PASURUHAN.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 15000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'sby'){
                            echo rupiah($berat * 900 + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'sby'){
                            echo rupiah(17500);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e10);
                    }

                    //PROBOLINGGO.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 15000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'sby'){
                            echo rupiah($berat * 900 + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'sby'){
                            echo rupiah(17500);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e10);
                    }

                    //NGANJUK.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 15000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'sby'){
                            echo rupiah($berat * 900 + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'sby'){
                            echo rupiah(17500);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e10);
                    }

                    //MADIUN.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2000 + 15000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'sby'){
                            echo rupiah($berat * 900 + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'sby'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'sby'){
                            echo rupiah(17500);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e10);
                    }

                    //Ponorogo/Magetan.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2300 + 17000) + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'sby'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e10));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'sby'){
                            echo rupiah(18000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e10);
                    }

                    //JEMBER.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2300 + 17000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'sby'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'sby'){
                            echo rupiah(18000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //LUMAJANG.sby//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2300 + 17000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'sby'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'sby'){
                            echo rupiah(18000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BANYUWANGI.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 2300 + 17000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'sby'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'sby'){
                            echo rupiah(18000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //DENPASAR.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 1700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'sby'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'sby'){
                            echo rupiah(22000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //TABANAN.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 1700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'sby'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'sby'){
                            echo rupiah(22000);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //NUSADUA.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 1700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'sby'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'sby'){
                            echo rupiah(22000);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                    //SINGARAJA.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *1000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 1700 + 20000) + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'sby'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'sby'){
                            echo rupiah(20000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'sby'){
                            echo rupiah(22000);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e);
                    }

                   
                    //BANDAR.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *2100 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 3000 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'sby'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'sby'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'sby'){
                            echo rupiah(52000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }


                    //METRO.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *2100 + 55000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 3000 + 50000) + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'sby'){
                            echo rupiah($berat * 2200 + ($Lebar * $Panjang * $Tinggi * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'sby'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'sby'){
                            echo rupiah(52000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //PALEMBANG.sby//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'sby'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'sby'){
                            echo rupiah((($berat - 1) * 3100 + 55000) + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'sby'){
                            echo rupiah($berat * 2400 + ($Lebar * $Panjang * $Tinggi * $e5));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'sby'){
                            echo rupiah(60000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'sby'){
                            echo rupiah(65000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e5);
                    }

                    //PekanBaru.sby//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'sby'){
                        echo rupiah(55000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e33));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'sby'){
                            echo rupiah((94000) + ($Lebar * $Panjang * $Tinggi  * $e33));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'sby'){
                            echo rupiah(($berat * 4550) + ($Lebar * $Panjang * $Tinggi  * $e33));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e33);
                    }  

                    //Jambi.sby//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'sby'){
                        echo rupiah(55000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'sby'){
                            echo rupiah((85000) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'sby'){
                            echo rupiah(($berat * 4050) + ($Lebar * $Panjang * $Tinggi  * $e23));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'sby'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e23);
                    }

            // bangkalan.bkl//

                    //jakarta.bkl///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1500 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'bkl'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'bkl'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'bkl'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }                

                    //Depok.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'bkl'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'bkl'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'bkl'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //tangerang.bkl///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'bkl'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'bkl'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'bkl'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //bekasi.bkl/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'bkl'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'bkl'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'bkl'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //cikarang.bkl///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'bkl'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'bkl'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'bkl'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }
                    
                    //karawang.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'bkl'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'bkl'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'bkl'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //SERANG.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'bkl'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'bkl'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'bkl'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    
                    //BOGOR.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'bkl'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'bkl'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'bkl'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //CIREBON.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'bkl'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'bkl'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANDUNG.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'bkl'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'bkl'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'bkl'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //GARUT.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'bkl'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'bkl'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'bkl'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //TASIK.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'bkl'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'bkl'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'bkl'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SUKABUMI.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'bkl'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'bkl'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'bkl'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //PURWOKERTO.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'bkl'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'bkl'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //KEBUMEN.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'bkl'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'bkl'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TEGAL.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'bkl'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'bkl'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //indramayu.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'bkl'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'bkl'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PURWAKARTA.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'bkl'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'bkl'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PEMALANG.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'bkl'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'bkl'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //PEKALONGAN.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'bkl'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'bkl'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BATANG.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'bkl'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'bkl'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANJAR PATROMAN.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'bkl'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'bkl'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'bkl'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SEMARANG.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'bkl'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'bkl'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'bkl'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'bkl'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //jepara/pati.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'bkl'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'bkl'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'bkl'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'bkl'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'bkl'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'bkl'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'bkl'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'bkl'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'bkl'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'bkl'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'bkl'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'bkl'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'bkl'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'bkl'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'bkl'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'bkl'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BOJONEGORO.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'bkl'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.bkl//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'bkl'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.bkl//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'bkl'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'bkl'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'bkl'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'bkl'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'bkl'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'bkl'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'bkl'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'bkl'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PROBOLINGGO.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'bkl'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //NGANJUK.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'bkl'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'bkl'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //Ponorogo/Magetan.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'bkl'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'bkl'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.bkl//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'bkl'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'bkl'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'bkl'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'bkl'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'bkl'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'bkl'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'bkl'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'bkl'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'bkl'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'bkl'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'bkl'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'bkl'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'bkl'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'bkl'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'bkl'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'bkl'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'bkl'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'bkl'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'bkl'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }


                    //METRO.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'bkl'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'bkl'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'bkl'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }

                    //PALEMBANG.bkl//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'bkl'){
                        echo rupiah((($berat - 10) *2500 + 58000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'bkl'){
                            echo rupiah((($berat - 1) * 3300 + 55000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'bkl'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'bkl'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'bkl'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e14);
                    }

                    //PekanBaru.bkl//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'bkl'){
                        echo rupiah(60000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'bkl'){
                            echo rupiah((100000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'bkl'){
                            echo rupiah(($berat * 4900) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }  

                    //Jambi.bkl//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'bkl'){
                        echo rupiah(60000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'bkl'){
                            echo rupiah((90000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'bkl'){
                            echo rupiah(($berat * 4400) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'bkl'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                    }

            // SIDOARJO.sdj//

                    //jakarta.sdj///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1500 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'sdj'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'sdj'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'sdj'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }                

                    //Depok.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'sdj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'sdj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'sdj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //tangerang.sdj///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'sdj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'sdj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'sdj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //bekasi.sdj/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'sdj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'sdj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'sdj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //cikarang.sdj///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'sdj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'sdj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'sdj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }
                    
                    //karawang.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'sdj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'sdj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'sdj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //SERANG.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'sdj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'sdj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'sdj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    
                    //BOGOR.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'sdj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'sdj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'sdj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //CIREBON.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'sdj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'sdj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANDUNG.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'sdj'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'sdj'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'sdj'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //GARUT.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'sdj'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'sdj'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'sdj'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //TASIK.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'sdj'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'sdj'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'sdj'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SUKABUMI.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'sdj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'sdj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'sdj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //PURWOKERTO.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'sdj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'sdj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //KEBUMEN.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'sdj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'sdj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TEGAL.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'sdj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'sdj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //indramayu.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'sdj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'sdj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PURWAKARTA.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'sdj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'sdj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PEMALANG.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'sdj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'sdj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //PEKALONGAN.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'sdj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'sdj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BATANG.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'sdj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'sdj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANJAR PATROMAN.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'sdj'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'sdj'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'sdj'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SEMARANG.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'sdj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'sdj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'sdj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'sdj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //jepara/pati.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'sdj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'sdj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'sdj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'sdj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'sdj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'sdj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'sdj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'sdj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'sdj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'sdj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'sdj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'sdj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'sdj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'sdj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'sdj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'sdj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BOJONEGORO.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'sdj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.sdj//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'sdj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.sdj//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'sdj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'sdj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'sdj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'sdj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'sdj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'sdj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'sdj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'sdj'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PROBOLINGGO.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'sdj'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //NGANJUK.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'sdj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'sdj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //Ponorogo/Magetan.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'sdj'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'sdj'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.sdj//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'sdj'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'sdj'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'sdj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'sdj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'sdj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'sdj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'sdj'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'sdj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'sdj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'sdj'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'sdj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'sdj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'sdj'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'sdj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'sdj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'sdj'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'sdj'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'sdj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'sdj'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }


                    //METRO.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'sdj'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'sdj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'sdj'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }

                    //PALEMBANG.sdj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'sdj'){
                        echo rupiah((($berat - 10) *2500 + 58000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'sdj'){
                            echo rupiah((($berat - 1) * 3300 + 55000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'sdj'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'sdj'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'sdj'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e14);
                    }

                    //PekanBaru.sdj//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'sdj'){
                        echo rupiah(60000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'sdj'){
                            echo rupiah((100000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'sdj'){
                            echo rupiah(($berat * 4900) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }  

                    //Jambi.sdj//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'sdj'){
                        echo rupiah(60000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'sdj'){
                            echo rupiah((90000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'sdj'){
                            echo rupiah(($berat * 4400) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'sdj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                    }

            // GRESIK.gsk//

                    //jakarta.gsk///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1500 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'gsk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'gsk'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'gsk'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }                

                    //Depok.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'gsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'gsk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'gsk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //tangerang.gsk///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'gsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'gsk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'gsk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //bekasi.gsk/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'gsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'gsk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'gsk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //cikarang.gsk///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'gsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'gsk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'gsk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }
                    
                    //karawang.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'gsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'gsk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'gsk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //SERANG.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'gsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'gsk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'gsk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    
                    //BOGOR.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'gsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'gsk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'gsk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //CIREBON.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'gsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'gsk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANDUNG.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'gsk'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'gsk'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'gsk'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //GARUT.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'gsk'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'gsk'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'gsk'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //TASIK.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'gsk'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'gsk'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'gsk'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SUKABUMI.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'gsk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'gsk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'gsk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //PURWOKERTO.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'gsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'gsk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //KEBUMEN.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'gsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'gsk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TEGAL.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'gsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'gsk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //indramayu.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'gsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'gsk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PURWAKARTA.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'gsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'gsk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PEMALANG.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'gsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'gsk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //PEKALONGAN.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'gsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'gsk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BATANG.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'gsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'gsk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANJAR PATROMAN.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'gsk'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'gsk'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'gsk'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SEMARANG.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'gsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'gsk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'gsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'gsk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //jepara/pati.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'gsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'gsk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'gsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'gsk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'gsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'gsk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'gsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'gsk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'gsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'gsk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'gsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'gsk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'gsk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'gsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'gsk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BOJONEGORO.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'gsk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.gsk//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'gsk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.gsk//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'gsk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'gsk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'gsk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'gsk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'gsk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'gsk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'gsk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'gsk'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PROBOLINGGO.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'gsk'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //NGANJUK.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'gsk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'gsk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //Ponorogo/Magetan.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'gsk'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'gsk'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.gsk//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'gsk'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'gsk'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'gsk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'gsk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'gsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'gsk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'gsk'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'gsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'gsk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'gsk'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'gsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'gsk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'gsk'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'gsk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'gsk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'gsk'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'gsk'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'gsk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'gsk'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }


                    //METRO.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'gsk'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'gsk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'gsk'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }

                    //PALEMBANG.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) *2500 + 58000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 3300 + 55000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'gsk'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'gsk'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'gsk'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e14);
                    }

                    //PekanBaru.gsk//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'gsk'){
                        echo rupiah(60000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'gsk'){
                            echo rupiah((100000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'gsk'){
                            echo rupiah(($berat * 4900) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }  

                    //Jambi.gsk//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'gsk'){
                        echo rupiah(60000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'gsk'){
                            echo rupiah((90000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'gsk'){
                            echo rupiah(($berat * 4400) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                    }

            // BOJONEGORO.bjg//

                    //jakarta.bjg///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1500 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'bjg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'bjg'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'bjg'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }                

                    //Depok.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'bjg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'bjg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'bjg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //tangerang.bjg///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'bjg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'bjg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'bjg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //bekasi.bjg/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'bjg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'bjg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'bjg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //cikarang.bjg///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'bjg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'bjg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'bjg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }
                    
                    //karawang.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'bjg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'bjg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'bjg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //SERANG.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'bjg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'bjg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'bjg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    
                    //BOGOR.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'bjg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'bjg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'bjg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //CIREBON.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'bjg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'bjg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANDUNG.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'bjg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'bjg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'bjg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //GARUT.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'bjg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'bjg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'bjg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //TASIK.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'bjg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'bjg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'bjg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SUKABUMI.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'bjg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'bjg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'bjg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //PURWOKERTO.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'bjg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'bjg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //KEBUMEN.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'bjg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'bjg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TEGAL.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'bjg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'bjg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //indramayu.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'bjg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'bjg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PURWAKARTA.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'bjg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'bjg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PEMALANG.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'bjg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'bjg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //PEKALONGAN.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'bjg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'bjg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BATANG.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'bjg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'bjg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANJAR PATROMAN.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'bjg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'bjg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'bjg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SEMARANG.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'bjg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'bjg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'bjg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'bjg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //jepara/pati.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'bjg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'bjg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'bjg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'bjg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'bjg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'bjg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'bjg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'bjg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'bjg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'bjg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'bjg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'bjg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'bjg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'bjg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'bjg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'bjg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BOJONEGORO.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'bjg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.bjg//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'bjg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.bjg//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'bjg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'bjg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'bjg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'bjg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'bjg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'bjg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'bjg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'bjg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PROBOLINGGO.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'bjg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //NGANJUK.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'bjg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'bjg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //Ponorogo/Magetan.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'bjg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'bjg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.bjg//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'bjg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'bjg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'bjg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'bjg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'bjg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'bjg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'bjg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'bjg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'bjg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'bjg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'bjg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'bjg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'bjg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'bjg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'bjg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'bjg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'bjg'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'bjg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'bjg'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }


                    //METRO.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'bjg'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'bjg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'bjg'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }

                    //PALEMBANG.bjg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'bjg'){
                        echo rupiah((($berat - 10) *2500 + 58000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'bjg'){
                            echo rupiah((($berat - 1) * 3300 + 55000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'bjg'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'bjg'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'bjg'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e14);
                    }

                    //PekanBaru.bjg//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'bjg'){
                        echo rupiah(60000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'bjg'){
                            echo rupiah((100000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'bjg'){
                            echo rupiah(($berat * 4900) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }  

                    //Jambi.bjg//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'bjg'){
                        echo rupiah(60000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'bjg'){
                            echo rupiah((90000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'bjg'){
                            echo rupiah(($berat * 4400) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'bjg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                    }

            // MOJOKERTO.mjk//

                    //jakarta.mjk///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1500 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'mjk'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'mjk'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'mjk'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }                

                    //Depok.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'mjk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'mjk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'mjk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //tangerang.mjk///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'mjk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'mjk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'mjk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //bekasi.mjk/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'mjk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'mjk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'mjk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //cikarang.mjk///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'mjk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'mjk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'mjk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }
                    
                    //karawang.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'mjk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'mjk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'mjk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //SERANG.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'mjk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'mjk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'mjk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    
                    //BOGOR.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'mjk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'mjk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'mjk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //CIREBON.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'mjk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'mjk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANDUNG.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'mjk'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'mjk'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'mjk'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //GARUT.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'mjk'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'mjk'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'mjk'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //TASIK.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'mjk'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'mjk'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'mjk'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SUKABUMI.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'mjk'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'mjk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'mjk'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //PURWOKERTO.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'mjk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'mjk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //KEBUMEN.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'mjk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'mjk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TEGAL.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'mjk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'mjk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //indramayu.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'mjk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'mjk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PURWAKARTA.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'mjk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'mjk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PEMALANG.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'mjk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'mjk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //PEKALONGAN.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'mjk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'mjk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BATANG.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'mjk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'mjk'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANJAR PATROMAN.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'mjk'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'mjk'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'mjk'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SEMARANG.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'mjk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'mjk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'mjk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'mjk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //jepara/pati.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'mjk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'mjk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'mjk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'mjk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'mjk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'mjk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'mjk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'mjk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'mjk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'mjk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'mjk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'mjk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'mjk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'mjk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'mjk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'mjk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BOJONEGORO.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'mjk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.mjk//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'mjk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.mjk//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'mjk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'mjk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'mjk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'mjk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'mjk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'mjk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'mjk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'mjk'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PROBOLINGGO.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'mjk'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //NGANJUK.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'mjk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'mjk'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //Ponorogo/Magetan.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'mjk'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'mjk'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.mjk//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'mjk'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'mjk'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'mjk'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'mjk'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'mjk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'mjk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'mjk'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'mjk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'mjk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'mjk'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'mjk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'mjk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'mjk'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'mjk'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'mjk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'mjk'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'mjk'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'mjk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'mjk'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }


                    //METRO.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'mjk'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'mjk'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'mjk'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }

                    //PALEMBANG.mjk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'mjk'){
                        echo rupiah((($berat - 10) *2500 + 58000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'mjk'){
                            echo rupiah((($berat - 1) * 3300 + 55000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'mjk'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'mjk'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'mjk'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e14);
                    }

                    //PekanBaru.mjk//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'mjk'){
                        echo rupiah(60000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'mjk'){
                            echo rupiah((100000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'mjk'){
                            echo rupiah(($berat * 4900) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }  

                    //Jambi.mjk//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'mjk'){
                        echo rupiah(60000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'mjk'){
                            echo rupiah((90000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'mjk'){
                            echo rupiah(($berat * 4400) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'mjk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                    }

            // MALANG.mlg//

                    //jakarta.mlg///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1500 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'mlg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'mlg'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'mlg'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }                

                    //Depok.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'mlg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'mlg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'mlg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //tangerang.mlg///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'mlg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'mlg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'mlg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //bekasi.mlg/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'mlg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'mlg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'mlg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //cikarang.mlg///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'mlg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'mlg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'mlg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }
                    
                    //karawang.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'mlg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'mlg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'mlg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //SERANG.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'mlg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'mlg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'mlg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    
                    //BOGOR.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'mlg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'mlg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'mlg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //CIREBON.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'mlg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'mlg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANDUNG.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'mlg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'mlg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'mlg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //GARUT.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'mlg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'mlg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'mlg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //TASIK.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'mlg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'mlg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'mlg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SUKABUMI.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'mlg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'mlg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'mlg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //PURWOKERTO.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'mlg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'mlg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //KEBUMEN.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'mlg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'mlg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TEGAL.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'mlg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'mlg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //indramayu.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'mlg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'mlg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PURWAKARTA.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'mlg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'mlg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PEMALANG.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'mlg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'mlg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //PEKALONGAN.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'mlg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'mlg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BATANG.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'mlg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'mlg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANJAR PATROMAN.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'mlg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'mlg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'mlg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SEMARANG.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'mlg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'mlg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'mlg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'mlg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //jepara/pati.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'mlg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'mlg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'mlg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'mlg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'mlg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'mlg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'mlg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'mlg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'mlg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'mlg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'mlg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'mlg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'mlg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'mlg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'mlg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'mlg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BOJONEGORO.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'mlg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.mlg//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'mlg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.mlg//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'mlg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'mlg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'mlg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'mlg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'mlg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'mlg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'mlg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'mlg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PROBOLINGGO.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'mlg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //NGANJUK.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'mlg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'mlg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //Ponorogo/Magetan.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'mlg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'mlg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.mlg//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'mlg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'mlg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'mlg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'mlg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'mlg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'mlg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'mlg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'mlg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'mlg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'mlg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'mlg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'mlg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'mlg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'mlg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'mlg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'mlg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'mlg'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'mlg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'mlg'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }


                    //METRO.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'mlg'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'mlg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'mlg'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }

                    //PALEMBANG.mlg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'mlg'){
                        echo rupiah((($berat - 10) *2500 + 58000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'mlg'){
                            echo rupiah((($berat - 1) * 3300 + 55000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'mlg'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'mlg'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'mlg'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e14);
                    }

                    //PekanBaru.mlg//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'mlg'){
                        echo rupiah(60000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'mlg'){
                            echo rupiah((100000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'mlg'){
                            echo rupiah(($berat * 4900) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }  

                    //Jambi.mlg//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'mlg'){
                        echo rupiah(60000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'mlg'){
                            echo rupiah((90000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'mlg'){
                            echo rupiah(($berat * 4400) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'mlg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                    }

            // KEDIRI.kdr//

                    //jakarta.kdr///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1500 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'kdr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'kdr'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'kdr'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }                

                    //Depok.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'kdr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'kdr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'kdr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //tangerang.kdr///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'kdr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'kdr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'kdr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //bekasi.kdr/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'kdr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'kdr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'kdr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //cikarang.kdr///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'kdr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'kdr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'kdr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }
                    
                    //karawang.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'kdr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'kdr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'kdr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //SERANG.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'kdr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'kdr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'kdr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    
                    //BOGOR.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'kdr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'kdr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'kdr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //CIREBON.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'kdr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'kdr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANDUNG.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'kdr'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'kdr'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'kdr'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //GARUT.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'kdr'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'kdr'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'kdr'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //TASIK.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'kdr'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'kdr'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'kdr'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SUKABUMI.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'kdr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'kdr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'kdr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //PURWOKERTO.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'kdr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'kdr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //KEBUMEN.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'kdr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'kdr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TEGAL.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'kdr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'kdr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //indramayu.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'kdr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'kdr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PURWAKARTA.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'kdr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'kdr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PEMALANG.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'kdr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'kdr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //PEKALONGAN.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'kdr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'kdr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BATANG.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'kdr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'kdr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANJAR PATROMAN.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'kdr'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'kdr'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'kdr'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SEMARANG.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'kdr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'kdr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'kdr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'kdr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //jepara/pati.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'kdr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'kdr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'kdr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'kdr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'kdr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'kdr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'kdr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'kdr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'kdr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'kdr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'kdr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'kdr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'kdr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'kdr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'kdr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'kdr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BOJONEGORO.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'kdr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.kdr//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'kdr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.kdr//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'kdr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'kdr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'kdr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'kdr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'kdr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'kdr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'kdr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'kdr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PROBOLINGGO.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'kdr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //NGANJUK.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'kdr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'kdr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //Ponorogo/Magetan.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'kdr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'kdr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.kdr//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'kdr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'kdr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'kdr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'kdr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'kdr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'kdr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'kdr'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'kdr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'kdr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'kdr'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'kdr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'kdr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'kdr'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'kdr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'kdr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'kdr'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'kdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'kdr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'kdr'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }


                    //METRO.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'kdr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'kdr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'kdr'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }

                    //PALEMBANG.kdr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'kdr'){
                        echo rupiah((($berat - 10) *2500 + 58000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'kdr'){
                            echo rupiah((($berat - 1) * 3300 + 55000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'kdr'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'kdr'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'kdr'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e14);
                    }

                    //PekanBaru.kdr//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'kdr'){
                        echo rupiah(60000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'kdr'){
                            echo rupiah((100000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'kdr'){
                            echo rupiah(($berat * 4900) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }  

                    //Jambi.kdr//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'kdr'){
                        echo rupiah(60000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'kdr'){
                            echo rupiah((90000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'kdr'){
                            echo rupiah(($berat * 4400) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'kdr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                    }

            // BLITAR.blt//

                    //jakarta.blt///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1500 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'blt'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'blt'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'blt'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }                

                    //Depok.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'blt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'blt'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'blt'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //tangerang.blt///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'blt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'blt'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'blt'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //bekasi.blt/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'blt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'blt'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'blt'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //cikarang.blt///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'blt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'blt'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'blt'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }
                    
                    //karawang.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'blt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'blt'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'blt'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //SERANG.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'blt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'blt'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'blt'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    
                    //BOGOR.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'blt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'blt'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'blt'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //CIREBON.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'blt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'blt'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANDUNG.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'blt'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'blt'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'blt'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //GARUT.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'blt'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'blt'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'blt'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //TASIK.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'blt'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'blt'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'blt'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SUKABUMI.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'blt'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'blt'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'blt'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //PURWOKERTO.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'blt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'blt'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //KEBUMEN.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'blt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'blt'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TEGAL.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'blt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'blt'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //indramayu.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'blt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'blt'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PURWAKARTA.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'blt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'blt'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PEMALANG.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'blt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'blt'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //PEKALONGAN.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'blt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'blt'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BATANG.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'blt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'blt'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANJAR PATROMAN.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'blt'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'blt'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'blt'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SEMARANG.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'blt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'blt'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'blt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'blt'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //jepara/pati.gsk//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'gsk'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'gsk'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'gsk'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'gsk'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'gsk'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'gsk'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'blt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'blt'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'blt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'blt'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'blt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'blt'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'blt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'blt'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'blt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'blt'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'blt'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'blt'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'blt'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'blt'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BOJONEGORO.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'blt'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.blt//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'blt'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.blt//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'blt'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'blt'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'blt'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'blt'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'blt'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'blt'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'blt'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'blt'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PROBOLINGGO.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'blt'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //NGANJUK.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'blt'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'blt'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //Ponorogo/Magetan.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'blt'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'blt'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.blt//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'blt'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'blt'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'blt'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'blt'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'blt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'blt'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'blt'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'blt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'blt'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'blt'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'blt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'blt'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'blt'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'blt'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'blt'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'blt'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'blt'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'blt'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'blt'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }


                    //METRO.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'blt'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'blt'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'blt'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }

                    //PALEMBANG.blt//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'blt'){
                        echo rupiah((($berat - 10) *2500 + 58000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'blt'){
                            echo rupiah((($berat - 1) * 3300 + 55000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'blt'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'blt'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'blt'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e14);
                    }

                    //PekanBaru.blt//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'blt'){
                        echo rupiah(60000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'blt'){
                            echo rupiah((100000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'blt'){
                            echo rupiah(($berat * 4900) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }  

                    //Jambi.blt//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'blt'){
                        echo rupiah(60000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'blt'){
                            echo rupiah((90000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'blt'){
                            echo rupiah(($berat * 4400) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'blt'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                    }

