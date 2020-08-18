      <?php      

            // TULUNGAGUNG.tga//

                    //jakarta.tga///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1500 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'tga'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'tga'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'tga'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }                

                    //Depok.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'tga'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'tga'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'tga'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //tangerang.tga///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'tga'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'tga'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'tga'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //bekasi.tga/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'tga'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'tga'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'tga'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //cikarang.tga///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'tga'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'tga'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'tga'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }
                    
                    //karawang.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'tga'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'tga'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'tga'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //SERANG.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'tga'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'tga'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'tga'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    
                    //BOGOR.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'tga'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'tga'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'tga'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //CIREBON.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'tga'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'tga'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANDUNG.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'tga'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'tga'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'tga'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //GARUT.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'tga'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'tga'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'tga'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //TASIK.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'tga'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'tga'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'tga'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SUKABUMI.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'tga'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'tga'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'tga'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //PURWOKERTO.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'tga'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'tga'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //KEBUMEN.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'tga'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'tga'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TEGAL.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'tga'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'tga'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //indramayu.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'tga'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'tga'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //purwakarta.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'tga'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'tga'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PEMALANG.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'tga'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'tga'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //PEKALONGAN.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'tga'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'tga'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BATANG.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'tga'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'tga'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANJAR PATROMAN.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'tga'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'tga'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'tga'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SEMARANG.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'tga'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'tga'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'tga'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'tga'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //jepara/pati.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'tga'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'tga'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'tga'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'tga'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'tga'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'tga'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'tga'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'tga'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'tga'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'tga'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'tga'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'tga'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'tga'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'tga'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'tga'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'tga'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BOJONEGORO.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'tga'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.tga//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'tga'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.tga//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'tga'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'tga'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'tga'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'tga'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'tga'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'tga'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'tga'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'tga'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PROBOLINGGO.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'tga'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //NGANJUK.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'tga'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'tga'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //ponorogo/Magetan.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'tga'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'tga'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.tga//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'tga'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'tga'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'tga'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'tga'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'tga'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'tga'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'tga'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'tga'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'tga'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'tga'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'tga'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'tga'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'tga'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'tga'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'tga'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'tga'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'tga'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'tga'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'tga'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }


                    //METRO.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'tga'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'tga'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'tga'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }

                    //PALEMBANG.tga//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'tga'){
                        echo rupiah((($berat - 10) *2500 + 58000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'tga'){
                            echo rupiah((($berat - 1) * 3300 + 55000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'tga'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'tga'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'tga'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e14);
                    }

                    //PekanBaru.tga//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'tga'){
                        echo rupiah(60000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'tga'){
                            echo rupiah((100000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'tga'){
                            echo rupiah(($berat * 4900) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }  

                    //Jambi.tga//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'tga'){
                        echo rupiah(60000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'tga'){
                            echo rupiah((90000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'tga'){
                            echo rupiah(($berat * 4400) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'tga'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                    }

            // MADIUN.mdn//

                    //jakarta.mdn///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1500 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'mdn'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'mdn'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'mdn'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }                

                    //Depok.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'mdn'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'mdn'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'mdn'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //tangerang.mdn///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'mdn'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'mdn'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'mdn'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //bekasi.mdn/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'mdn'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'mdn'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'mdn'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //cikarang.mdn///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'mdn'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'mdn'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'mdn'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }
                    
                    //karawang.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'mdn'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'mdn'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'mdn'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //SERANG.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'mdn'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'mdn'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'mdn'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    
                    //BOGOR.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'mdn'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'mdn'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'mdn'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //CIREBON.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'mdn'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'mdn'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANDUNG.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'mdn'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'mdn'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'mdn'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //GARUT.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'mdn'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'mdn'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'mdn'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //TASIK.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'mdn'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'mdn'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'mdn'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SUKABUMI.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'mdn'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'mdn'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'mdn'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //PURWOKERTO.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'mdn'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'mdn'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //KEBUMEN.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'mdn'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'mdn'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TEGAL.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'mdn'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'mdn'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //indramayu.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'mdn'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'mdn'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //purwakarta.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'mdn'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'mdn'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PEMALANG.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'mdn'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'mdn'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //PEKALONGAN.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'mdn'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'mdn'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BATANG.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'mdn'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'mdn'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANJAR PATROMAN.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'mdn'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'mdn'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'mdn'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SEMARANG.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'mdn'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'mdn'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'mdn'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'mdn'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //jepara/pati.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'mdn'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'mdn'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'mdn'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'mdn'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'mdn'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'mdn'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'mdn'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'mdn'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'mdn'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'mdn'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'mdn'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'mdn'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'mdn'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'mdn'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'mdn'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'mdn'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BOJONEGORO.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'mdn'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.mdn//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'mdn'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.mdn//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'mdn'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'mdn'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'mdn'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'mdn'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'mdn'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'mdn'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'mdn'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'mdn'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PROBOLINGGO.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'mdn'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //NGANJUK.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'mdn'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //JEMBER.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'mdn'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.mdn//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'mdn'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'mdn'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'mdn'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'mdn'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'mdn'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'mdn'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'mdn'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'mdn'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'mdn'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'mdn'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'mdn'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'mdn'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'mdn'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'mdn'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'mdn'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'mdn'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'mdn'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'mdn'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'mdn'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }


                    //METRO.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'mdn'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'mdn'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'mdn'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }

                    //PALEMBANG.mdn//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'mdn'){
                        echo rupiah((($berat - 10) *2500 + 58000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'mdn'){
                            echo rupiah((($berat - 1) * 3300 + 55000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'mdn'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'mdn'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'mdn'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e14);
                    }

                    //PekanBaru.mdn//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'mdn'){
                        echo rupiah(60000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'mdn'){
                            echo rupiah((100000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'mdn'){
                            echo rupiah(($berat * 4900) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }  

                    //Jambi.mdn//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'mdn'){
                        echo rupiah(60000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'mdn'){
                            echo rupiah((90000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'mdn'){
                            echo rupiah(($berat * 4400) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'mdn'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                    }

            // NGANJUK.ngj//

                    //jakarta.ngj///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1500 + 45000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2500 + 40000) + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'ngj'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e3));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'ngj'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'ngj'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e3);
                    }                

                    //Depok.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'ngj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'ngj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'ngj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //tangerang.ngj///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'ngj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'ngj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'ngj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //bekasi.ngj/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'ngj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'ngj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'ngj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //cikarang.ngj///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'ngj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'ngj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'ngj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }
                    
                    //karawang.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'ngj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'ngj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'ngj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //SERANG.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'ngj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'ngj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'ngj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    
                    //BOGOR.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'ngj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'ngj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'ngj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //CIREBON.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'ngj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'ngj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANDUNG.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'ngj'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'ngj'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'ngj'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //GARUT.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'ngj'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'ngj'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'ngj'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //TASIK.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'ngj'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'ngj'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'ngj'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SUKABUMI.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1700 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2800 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'ngj'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e4));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'ngj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'ngj'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e4);
                    }

                    //PURWOKERTO.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'ngj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'ngj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //KEBUMEN.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'ngj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'ngj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TEGAL.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'ngj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'ngj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //indramayu.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'ngj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'ngj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //purwakarta.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'ngj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'ngj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //PEMALANG.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'ngj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'ngj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //PEKALONGAN.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'ngj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'ngj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BATANG.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1200 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'ngj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'ngj'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //BANJAR PATROMAN.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1300 + 40000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2300 + 35000) + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'ngj'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e7));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'ngj'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'ngj'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e7);
                    }

                    //SEMARANG.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'ngj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'ngj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //KUDUS.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'ngj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'ngj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //jepara/pati.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'ngj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'ngj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //JOGJA.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'ngj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'ngj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SOLO.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'ngj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'ngj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }


                    //KELATEN.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'ngj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'ngj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SALATIGA.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'ngj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'ngj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //MAGELANG.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'ngj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'ngj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //SURABAYA.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'ngj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 1100 + 30000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 22000) + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'ngj'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e1));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'ngj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'ngj'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e1);
                    }

                    //BOJONEGORO.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'ngj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.ngj//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'ngj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.ngj//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'ngj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'ngj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'ngj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'ngj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'ngj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'ngj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'ngj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'ngj'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PROBOLINGGO.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'ngj'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //NGANJUK.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'ngj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) *800 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 20000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'ngj'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //Ponorogo/Magetan.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'ngj'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'ngj'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.ngj//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'ngj'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) * 900 + 30000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2100 + 25000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'ngj'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'ngj'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'ngj'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'ngj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'ngj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'ngj'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'ngj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'ngj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'ngj'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'ngj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'ngj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'ngj'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) *1100 + 35000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 2000 + 30000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'ngj'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'ngj'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'ngj'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'ngj'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'ngj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'ngj'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }


                    //METRO.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) *2200 + 57000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 3100 + 52000) + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'ngj'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e13));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'ngj'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'ngj'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e13);
                    }

                    //PALEMBANG.ngj//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'ngj'){
                        echo rupiah((($berat - 10) *2500 + 58000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'ngj'){
                            echo rupiah((($berat - 1) * 3300 + 55000) + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'ngj'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e14));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'ngj'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'ngj'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e14);
                    }

                    //PekanBaru.ngj//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'ngj'){
                        echo rupiah(60000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'ngj'){
                            echo rupiah((100000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'ngj'){
                            echo rupiah(($berat * 4900) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }  

                    //Jambi.ngj//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'ngj'){
                        echo rupiah(60000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'ngj'){
                            echo rupiah((90000) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'ngj'){
                            echo rupiah(($berat * 4400) + ($Lebar * $Panjang * $Tinggi  * $e25));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'ngj'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e25);
                    }

            // PASURUHAN.psr//

                    //jakarta.psr///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1600 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2600 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'psr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'psr'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'psr'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e18);
                    }                

                    //Depok.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'psr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'psr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'psr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //tangerang.psr///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'psr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'psr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'psr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //bekasi.psr/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'psr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'psr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'psr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //cikarang.psr///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'psr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'psr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'psr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }
                    
                    //karawang.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'psr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'psr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'psr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //SERANG.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'psr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'psr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'psr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    
                    //BOGOR.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'psr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'psr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'psr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //CIREBON.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'psr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'psr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BANDUNG.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'psr'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'psr'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'psr'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //GARUT.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'psr'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'psr'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'psr'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //TASIK.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'psr'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'psr'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'psr'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //SUKABUMI.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'psr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'psr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'psr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //PURWOKERTO.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'psr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'psr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //KEBUMEN.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'psr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'psr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //TEGAL.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'psr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'psr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //PEMALANG.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'psr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'psr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                   
                    //PEKALONGAN.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'psr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'psr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BATANG.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'psr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'psr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BANJAR PATROMAN.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'psr'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'psr'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'psr'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //SEMARANG.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'psr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'psr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //KUDUS.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'psr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'psr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //indramayu.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'psr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'psr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //purwakarta.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'psr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'psr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //jepara/pati.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'psr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'psr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //JOGJA.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'psr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'psr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SOLO.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'psr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'psr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }


                    //KELATEN.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'psr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'psr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SALATIGA.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'psr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'psr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //MAGELANG.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'psr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'psr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SURABAYA.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'psr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'psr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'psr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'psr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //BOJONEGORO.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'psr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.psr//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'psr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.psr//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'psr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'psr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'psr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'psr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'psr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'psr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'psr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'psr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //PROBOLINGGO.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'psr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //NGANJUK.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'psr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) *900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'psr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //Ponorogo/magetan.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'psr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'psr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.psr//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'psr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'psr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'psr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'psr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'psr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'psr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'psr'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'psr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'psr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'psr'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'psr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'psr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'psr'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'psr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'psr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'psr'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) *2300 + 59000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 3200 + 54000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'psr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'psr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'psr'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e20);
                    }


                    //METRO.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) *2300 + 59000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 3200 + 54000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'psr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'psr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'psr'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e20);
                    }

                    //PALEMBANG.psr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'psr'){
                        echo rupiah((($berat - 10) *2600 + 60000) + ($Lebar * $Panjang * $Tinggi * $e21));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'psr'){
                            echo rupiah((($berat - 1) * 3400 + 57000) + ($Lebar * $Panjang * $Tinggi * $e21));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'psr'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e21));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'psr'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'psr'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e21);
                    }

                    //PekanBaru.psr//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'psr'){
                        echo rupiah(62000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'psr'){
                            echo rupiah((102000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'psr'){
                            echo rupiah(($berat * 5000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }  

                    //Jambi.psr//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'psr'){
                        echo rupiah(62000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e33));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'psr'){
                            echo rupiah((92000) + ($Lebar * $Panjang * $Tinggi  * $e33));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'psr'){
                            echo rupiah(($berat * 4500) + ($Lebar * $Panjang * $Tinggi  * $e33));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'psr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e33);
                    }

            // PROBOLINGGO.prb//

                    //jakarta.pbg///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'pbg'){
                        echo rupiah((($berat - 10) * 1600 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2600 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'prb'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'prb'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'prb'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e18);
                    }                

                    //Depok.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'prb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'prb'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'prb'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //tangerang.prb///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'prb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'prb'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'prb'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //bekasi.prb/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'prb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'prb'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'prb'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //cikarang.prb///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'prb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'prb'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'prb'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }
                    
                    //karawang.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'prb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'prb'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'prb'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //SERANG.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'prb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'prb'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'prb'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    
                    //BOGOR.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'prb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'prb'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'prb'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //CIREBON.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'prb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'prb'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BANDUNG.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'prb'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'prb'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'prb'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //GARUT.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'prb'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'prb'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'prb'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //TASIK.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'prb'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'prb'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'prb'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //SUKABUMI.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'prb'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'prb'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'prb'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //PURWOKERTO.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'prb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'prb'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //KEBUMEN.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'prb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'prb'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //TEGAL.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'prb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'prb'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //PEMALANG.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'prb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'prb'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                   
                    //PEKALONGAN.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'prb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'prb'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BATANG.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'prb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'prb'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BANJAR PATROMAN.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'prb'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'prb'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'prb'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //SEMARANG.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'prb'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'prb'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //KUDUS.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'prb'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'prb'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //indramayu.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'prb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'prb'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //purwakarta.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'prb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'prb'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //jepara/pati.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'prb'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'prb'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //JOGJA.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'prb'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'prb'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SOLO.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'prb'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'prb'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }


                    //KELATEN.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'prb'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'prb'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SALATIGA.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'prb'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'prb'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //MAGELANG.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'prb'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'prb'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SURABAYA.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'prb'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'prb'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'prb'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'prb'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //BOJONEGORO.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'prb'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.prb//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'prb'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.prb//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'prb'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'prb'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'prb'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'prb'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'prb'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'psr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'prb'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'prb'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //PROBOLINGGO.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'prb'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //NGANJUK.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'prb'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) *900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'prb'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //Ponorogo/Magetan.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'prb'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'prb'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.prb//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'prb'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'prb'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'prb'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'prb'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'prb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'prb'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'prb'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'prb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'prb'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'prb'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'prb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'prb'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'prb'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'prb'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'prb'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'prb'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) *2300 + 59000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 3200 + 54000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'prb'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'prb'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'prb'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e20);
                    }


                    //METRO.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) *2300 + 59000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 3200 + 54000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'prb'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'prb'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'prb'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e20);
                    }

                    //PALEMBANG.prb//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'prb'){
                        echo rupiah((($berat - 10) *2600 + 60000) + ($Lebar * $Panjang * $Tinggi * $e21));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'prb'){
                            echo rupiah((($berat - 1) * 3400 + 57000) + ($Lebar * $Panjang * $Tinggi * $e21));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'prb'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e21));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'prb'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'prb'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e21);
                    }

                    //PekanBaru.prb//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'prb'){
                        echo rupiah(62000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'prb'){
                            echo rupiah((102000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'prb'){
                            echo rupiah(($berat * 5000) + ($Lebar * $Panjang * $Tinggi  * $e27));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e27);
                    }  

                    //Jambi.prb//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'prb'){
                        echo rupiah(62000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e33));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'prb'){
                            echo rupiah((92000) + ($Lebar * $Panjang * $Tinggi  * $e33));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'prb'){
                            echo rupiah(($berat * 4500) + ($Lebar * $Panjang * $Tinggi  * $e33));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'prb'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e33);
                    }

            // LUMAJANG.lmg//

                    //jakarta.lmg///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1600 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2600 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'lmg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'lmg'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'lmg'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e18);
                    }                

                    //Depok.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'lmg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'lmg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'lmg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //tangerang.lmg///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'lmg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'lmg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'lmg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //bekasi.lmg/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'lmg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'lmg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'lmg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //cikarang.lmg///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'lmg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'lmg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'lmg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }
                    
                    //karawang.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'lmg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'lmg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'lmg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //SERANG.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'lmg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'lmg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'lmg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    
                    //BOGOR.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'lmg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'lmg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'lmg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //CIREBON.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'lmg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'lmg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BANDUNG.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'lmg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'lmg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'lmg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //GARUT.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'lmg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'lmg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'lmg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //TASIK.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'lmg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'lmg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'lmg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //SUKABUMI.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'lmg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'lmg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'lmg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //PURWOKERTO.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'lmg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'lmg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //KEBUMEN.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'lmg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'lmg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //TEGAL.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'lmg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'lmg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //PEMALANG.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'lmg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'lmg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                   
                    //PEKALONGAN.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'lmg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'lmg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BATANG.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'lmg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'lmg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BANJAR PATROMAN.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'lmg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'lmg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'lmg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //SEMARANG.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'lmg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'lmg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //KUDUS.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'lmg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'lmg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //indramayu.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'lmg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'lmg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //purwakarta.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'lmg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'lmg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //jepara/pati.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'lmg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'lmg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //JOGJA.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'lmg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'lmg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SOLO.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'lmg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'lmg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }


                    //KELATEN.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'lmg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'lmg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SALATIGA.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'lmg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'lmg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //MAGELANG.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'lmg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'lmg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SURABAYA.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'lmg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'lmg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'lmg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'lmg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //BOJONEGORO.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'lmg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.lmg//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'lmg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.lmg//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'lmg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'lmg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'lmg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'lmg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'lmg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'lmg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'lmg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'lmg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //PROBOLINGGO.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'lmg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //NGANJUK.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'lmg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) *900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'lmg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //Ponorogo/Magetan.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'lmg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'lmg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.lmg//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'lmg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'lmg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'lmg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'lmg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'lmg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'lmg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'lmg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'lmg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'lmg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'lmg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'lmg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'lmg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'lmg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'lmg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'lmg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'lmg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) *2300 + 59000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 3200 + 54000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'lmg'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'lmg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'lmg'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e20);
                    }


                    //METRO.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) *2300 + 59000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 3200 + 54000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'lmg'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'lmg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'lmg'){
                            echo rupiah(55000);
                        }

                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e20);
                    }

                    //PALEMBANG.lmg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'lmg'){
                        echo rupiah((($berat - 10) *2600 + 60000) + ($Lebar * $Panjang * $Tinggi * $e21));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'lmg'){
                            echo rupiah((($berat - 1) * 3400 + 57000) + ($Lebar * $Panjang * $Tinggi * $e21));
                        }
                        elseif($berat >100 &&$tujuan == 'PLMB' &&$dari == 'lmg'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e21));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'lmg'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'lmg'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e21);
                    }

                    //PekanBaru.lmg//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'lmg'){
                        echo rupiah(67000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'lmg'){
                            echo rupiah((107000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'lmg'){
                            echo rupiah(($berat * 5200) + ($Lebar * $Panjang * $Tinggi  * $e30));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                    }  

                    //Jambi.lmg//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'lmg'){
                        echo rupiah(67000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'lmg'){
                            echo rupiah((97000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'lmg'){
                            echo rupiah(($berat * 4700) + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'lmg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                    }

            // JEMBER.jbr//

                    //jakarta.jbr///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1600 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2600 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'jbr'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'jbr'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'jbr'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e18);
                    }                

                    //Depok.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'jbr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'jbr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'jbr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //tangerang.jbr///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'jbr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'jbr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'jbr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //bekasi.jbr/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'jbr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'jbr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'jbr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //cikarang.jbr///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'jbr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'jbr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'jbr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }
                    
                    //karawang.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'jbr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'jbr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'jbr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //SERANG.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'jbr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'jbr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'jbr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    
                    //BOGOR.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'jbr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'jbr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'jbr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //CIREBON.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'jbr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'jbr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BANDUNG.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'jbr'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'jbr'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'jbr'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //GARUT.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'jbr'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'jbr'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'jbr'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //TASIK.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'jbr'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'jbr'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'jbr'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //SUKABUMI.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'jbr'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'jbr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'jbr'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //PURWOKERTO.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'jbr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'jbr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //KEBUMEN.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'jbr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'jbr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //TEGAL.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'jbr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'jbr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //PEMALANG.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'jbr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'jbr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                   
                    //PEKALONGAN.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'jbr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'jbr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BATANG.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'jbr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'jbr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BANJAR PATROMAN.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'jbr'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'jbr'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'jbr'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //SEMARANG.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'jbr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'jbr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //KUDUS.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'jbr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'jbr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //indramayu.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'jbr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'jbr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //purwakarta.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'jbr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'jbr'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //jepara/pati.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'jbr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'jbr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //JOGJA.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'jbr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'jbr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SOLO.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'jbr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'jbr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }


                    //KELATEN.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'jbr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'jbr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SALATIGA.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'jbr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'jbr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //MAGELANG.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'jbr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'jbr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SURABAYA.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'jbr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'jbr'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'jbr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'jbr'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //BOJONEGORO.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'jbr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.jbr//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'jbr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.jbr//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'jbr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'jbr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'jbr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'jbr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'jbr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'jbr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'jbr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'jbr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //PROBOLINGGO.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'jbr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //NGANJUK.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'jbr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) *900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'jbr'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //Ponorogo/Magetan.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'jbr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'jbr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.jbr//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'jbr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'jbr'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'jbr'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'jbr'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'jbr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'jbr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'jbr'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'jbr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'jbr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'jbr'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'jbr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'jbr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'jbr'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'jbr'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'jbr'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'jbr'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) *2300 + 59000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 3200 + 54000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'jbr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'jbr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'jbr'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e20);
                    }


                    //METRO.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) *2300 + 59000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 3200 + 54000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'jbr'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'jbr'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'jbr'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e20);
                    }

                    //PALEMBANG.jbr//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'jbr'){
                        echo rupiah((($berat - 10) *2600 + 60000) + ($Lebar * $Panjang * $Tinggi * $e21));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'jbr'){
                            echo rupiah((($berat - 1) * 3400 + 57000) + ($Lebar * $Panjang * $Tinggi * $e21));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'jbr'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e21));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'jbr'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'jbr'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e21);
                    }

                    //PekanBaru.jbr//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'jbr'){
                        echo rupiah(67000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'jbr'){
                            echo rupiah((107000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'jbr'){
                            echo rupiah(($berat * 5200) + ($Lebar * $Panjang * $Tinggi  * $e30));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                    }  

                    //Jambi.jbr//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'jbr'){
                        echo rupiah(67000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'jbr'){
                            echo rupiah((97000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'jbr'){
                            echo rupiah(($berat * 4700) + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'jbr'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                    }

            // BANYUWANGI.byg//

                    //jakarta.byg///

                    if($berat <=100 && $berat >10 &&$tujuan == 'JKT' &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1600 + 47000) + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JKT' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2600 + 42000) + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }
                        elseif($berat >100 &&$tujuan == 'JKT' &&$dari == 'byg'){
                            echo rupiah($berat * 1900 + ($Lebar * $Panjang * $Tinggi  * $e18));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JKT' &&$dari == 'byg'){
                            echo rupiah(40000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JKT' &&$dari == 'byg'){
                            echo rupiah(42500);
                        }
                        elseif($berat <1 &&$tujuan == 'JKT' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e18);
                    }                

                    //Depok.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPK' &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPK' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'DPK' &&$dari == 'byg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPK' &&$dari == 'byg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPK' &&$dari == 'byg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'DPK' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //tangerang.byg///

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGR' &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGR' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'TGR' &&$dari == 'byg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGR' &&$dari == 'byg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGR' &&$dari == 'byg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGR' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //bekasi.byg/// 

                    if($berat <=100 && $berat >10 &&$tujuan == 'BKS' &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BKS' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'BKS' &&$dari == 'byg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BKS' &&$dari == 'byg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BKS' &&$dari == 'byg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BKS' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //cikarang.byg///
                    
                    if($berat <=100 && $berat >10 &&$tujuan == 'CKR' &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CKR' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'CKR' &&$dari == 'byg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CKR' &&$dari == 'byg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CKR' &&$dari == 'byg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'CKR' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }
                    
                    //karawang.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KRW' &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KRW' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'KRW' &&$dari == 'byg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KRW' &&$dari == 'byg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KRW' &&$dari == 'byg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'KRW' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //SERANG.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SRG' &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SRG' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'SRG' &&$dari == 'byg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SRG' &&$dari == 'byg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SRG' &&$dari == 'byg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SRG' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    
                    //BOGOR.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BGR' &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BGR' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'BGR' &&$dari == 'byg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BGR' &&$dari == 'byg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BGR' &&$dari == 'byg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'BGR' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //CIREBON.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'CRB'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'CRB' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'CRB' &&$dari == 'byg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'CRB' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'CRB' &&$dari == 'byg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'CRB' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BANDUNG.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDG'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDG' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'BDG' &&$dari == 'byg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDG' &&$dari == 'byg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDG' &&$dari == 'byg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDG' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //GARUT.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'GRT'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GRT' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'GRT' &&$dari == 'byg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GRT' &&$dari == 'byg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GRT' &&$dari == 'byg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'GRT' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //TASIK.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TSK'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TSK' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'TSK' &&$dari == 'byg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TSK' &&$dari == 'byg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TSK' &&$dari == 'byg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'TSK' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //SUKABUMI.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SKB' &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1800 + 49000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SKB' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2900 + 44000) + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat >100 &&$tujuan == 'SKB' &&$dari == 'byg'){
                            echo rupiah($berat * 2000 + ($Lebar * $Panjang * $Tinggi  * $e19));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SKB' &&$dari == 'byg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SKB' &&$dari == 'byg'){
                            echo rupiah(53000);
                        }
                        elseif($berat <1 &&$tujuan == 'SKB' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e19);
                    }

                    //PURWOKERTO.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWT'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWT' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PWT' &&$dari == 'byg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWT' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWT' &&$dari == 'byg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWT' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //KEBUMEN.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KPB'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KPB' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'KPB' &&$dari == 'byg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KPB' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KPB' &&$dari == 'byg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'KPB' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //TEGAL.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGL'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGL' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'TGL' &&$dari == 'byg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGL' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGL' &&$dari == 'byg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGL' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //PEMALANG.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PML'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PML' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PML' &&$dari == 'byg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PML' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PML' &&$dari == 'byg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PML' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                   
                    //PEKALONGAN.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PKL'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PKL' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PKL' &&$dari == 'byg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PKL' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PKL' &&$dari == 'byg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PKL' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BATANG.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTG'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTG' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'BTG' &&$dari == 'byg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTG' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTG' &&$dari == 'byg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTG' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //BANJAR PATROMAN.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BTR'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1400 + 42000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BTR' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2400 + 37000) + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat >100 &&$tujuan == 'BTR' &&$dari == 'byg'){
                            echo rupiah($berat * 1400 + ($Lebar * $Panjang * $Tinggi * $e17));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BTR' &&$dari == 'byg'){
                            echo rupiah(30000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BTR' &&$dari == 'byg'){
                            echo rupiah(35000);
                        }
                        elseif($berat <1 &&$tujuan == 'BTR' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e17);
                    }

                    //SEMARANG.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SMG'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SMG' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SMG' &&$dari == 'byg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SMG' &&$dari == 'byg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SMG' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SMG' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //KUDUS.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDS'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDS' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'KDS' &&$dari == 'byg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDS' &&$dari == 'byg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDS' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDS' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //indramayu.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'IDW'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'IDW' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'IDW' &&$dari == 'byg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'IDW' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'IDW' &&$dari == 'byg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'IDW' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //purwakarta.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PWA'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1300 + 37000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PWA' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2300 + 29000) + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat >100 &&$tujuan == 'PWA' &&$dari == 'byg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e16));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PWA' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PWA' &&$dari == 'byg'){
                            echo rupiah(27000);
                        }
                        elseif($berat <1 &&$tujuan == 'PWA' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e16);
                    }

                    //jepara/pati.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JPI'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JPI' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'JPI' &&$dari == 'byg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JPI' &&$dari == 'byg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JPI' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'JPI' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //JOGJA.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'YGY'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'YGY' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'YGY' &&$dari == 'byg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'YGY' &&$dari == 'byg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'YGY' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'YGY' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SOLO.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SOLO'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SOLO' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SOLO' &&$dari == 'byg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SOLO' &&$dari == 'byg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SOLO' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SOLO' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }


                    //KELATEN.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KLT'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KLT' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'KLT' &&$dari == 'byg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KLT' &&$dari == 'byg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KLT' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'KLT' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SALATIGA.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SLTG'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SLTG' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'SLTG' &&$dari == 'byg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SLTG' &&$dari == 'byg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SLTG' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'SLTG' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //MAGELANG.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MGL'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MGL' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'MGL' &&$dari == 'byg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MGL' &&$dari == 'byg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MGL' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'MGL' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //SURABAYA.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SBY'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SBY' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SBY' &&$dari == 'byg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SBY' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SBY' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SBY' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLORA.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLA'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1200 + 32000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLA' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 24000) + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat >100 &&$tujuan == 'BLA' &&$dari == 'byg'){
                            echo rupiah($berat * 1200 + ($Lebar * $Panjang * $Tinggi * $e15));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLA' &&$dari == 'byg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLA' &&$dari == 'byg'){
                            echo rupiah(25000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLA' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e15);
                    }

                    //BOJONEGORO.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BJG'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BJG' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BJG' &&$dari == 'byg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BJG' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BJG' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BJG' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //GRESIK.byg//

                     if($berat <=100 && $berat >10 &&$tujuan == 'GSK'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'GSK' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'GSK' &&$dari == 'byg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'GSK' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'GSK' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'GSK' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //SIDOARJO.byg//

                     if($berat <=100 && $berat >10 &&$tujuan == 'SDJ'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SDJ' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'SDJ' &&$dari == 'byg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SDJ' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SDJ' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'SDJ' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MOJOKERTO.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MJK'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MJK' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MJK' &&$dari == 'byg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MJK' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MJK' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MJK' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JOMBANG.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBG'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBG' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'JBG' &&$dari == 'byg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBG' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBG' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBG' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MALANG.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MLG'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MLG' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MLG' &&$dari == 'byg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MLG' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MLG' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MLG' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }


                    //KEDIRI.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'KDR'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'KDR' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'KDR' &&$dari == 'byg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'KDR' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'KDR' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'KDR' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //BLITAR.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BLT'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BLT' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'BLT' &&$dari == 'byg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BLT' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BLT' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BLT' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //TULUNGAGUNG.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TGA'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TGA' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'TGA' &&$dari == 'byg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TGA' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TGA' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'TGA' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //PASURUHAN.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PSR'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PSR' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'PSR' &&$dari == 'byg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PSR' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PSR' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PSR' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //PROBOLINGGO.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PRB'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PRB' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'PRB' &&$dari == 'byg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PRB' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PRB' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'PRB' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //NGANJUK.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'NGJ'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'NGJ' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'NGJ' &&$dari == 'byg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'NGJ' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'NGJ' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'NGJ' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //MADIUN.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) *900 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2100 + 22000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN' &&$dari == 'byg'){
                            echo rupiah($berat * 950 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat ==1 &&$tujuan == 'MDN' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat ==2 &&$tujuan == 'MDN' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //Ponorogo/Magetan.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MDN1'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MDN1' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat >100 &&$tujuan == 'MDN1' &&$dari == 'byg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e6));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MDN1' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MDN1' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'MDN1' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e6);
                    }

                    //JEMBER.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'JBR'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'JBR' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'JBR' &&$dari == 'byg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'JBR' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'JBR' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'JBR' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //LUMAJANG.byg//

                   if($berat <=100 && $berat >10 &&$tujuan == 'LMG'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'LMG' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'LMG' &&$dari == 'byg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'LMG' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'LMG' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'LMG' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //BANYUWANGI.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BYG'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) * 1000 + 32000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BYG' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2200 + 27000) + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat >100 &&$tujuan == 'BYG' &&$dari == 'byg'){
                            echo rupiah($berat * 1000 + ($Lebar * $Panjang * $Tinggi * $e12));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BYG' &&$dari == 'byg'){
                            echo rupiah(15000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BYG' &&$dari == 'byg'){
                            echo rupiah(20000);
                        }
                        elseif($berat <1 &&$tujuan == 'BYG' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e12);
                    }

                    //DENPASAR.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'DPS'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'DPS' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'DPS' &&$dari == 'byg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'DPS' &&$dari == 'byg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'DPS' &&$dari == 'byg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'DPS' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //TABANAN.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'TBN'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'TBN' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'TBN' &&$dari == 'byg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'TBN' &&$dari == 'byg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'TBN' &&$dari == 'byg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'TBN' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //NUSADUA.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'ND2'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'ND2' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'ND2' &&$dari == 'byg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'ND2' &&$dari == 'byg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'ND2' &&$dari == 'byg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'ND2' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                    //SINGARAJA.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'SGRJ'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) *1200 + 37000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'SGRJ' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 2600 + 32000) + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat >100 &&$tujuan == 'SGRJ' &&$dari == 'byg'){
                            echo rupiah($berat * 1300 + ($Lebar * $Panjang * $Tinggi * $e9));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'SGRJ' &&$dari == 'byg'){
                            echo rupiah(22000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'SGRJ' &&$dari == 'byg'){
                            echo rupiah(23500);
                        }
                        elseif($berat <1 &&$tujuan == 'SGRJ' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e9);
                    }

                   
                    //BANDAR.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'BDR'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) *2300 + 59000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'BDR' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 3200 + 54000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat >100 &&$tujuan == 'BDR' &&$dari == 'byg'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'BDR' &&$dari == 'byg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'BDR' &&$dari == 'byg'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'BDR' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e20);
                    }


                    //METRO.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'MTO'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) *2300 + 59000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'MTO' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 3200 + 54000) + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat >100 &&$tujuan == 'MTO' &&$dari == 'byg'){
                            echo rupiah($berat * 2700 + ($Lebar * $Panjang * $Tinggi * $e20));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'MTO' &&$dari == 'byg'){
                            echo rupiah(50000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'MTO' &&$dari == 'byg'){
                            echo rupiah(55000);
                        }
                        elseif($berat <1 &&$tujuan == 'MTO' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e20);
                    }

                    //PALEMBANG.byg//

                    if($berat <=100 && $berat >10 &&$tujuan == 'PLB'  &&$dari == 'byg'){
                        echo rupiah((($berat - 10) *2600 + 60000) + ($Lebar * $Panjang * $Tinggi * $e21));
                        }

                        elseif($berat <=10 && $berat >=3 &&$tujuan == 'PLB' &&$dari == 'byg'){
                            echo rupiah((($berat - 1) * 3400 + 57000) + ($Lebar * $Panjang * $Tinggi * $e21));
                        }
                        elseif($berat >100 &&$tujuan == 'PLB' &&$dari == 'byg'){
                            echo rupiah($berat * 2800 + ($Lebar * $Panjang * $Tinggi * $e21));
                        }
                        elseif($berat <2 && $berat >=1 &&$tujuan == 'PLB' &&$dari == 'byg'){
                            echo rupiah(65000);
                        }
                        elseif($berat >1 && $berat <=2 &&$tujuan == 'PLB' &&$dari == 'byg'){
                            echo rupiah(75000);
                        }
                        elseif($berat <1 &&$tujuan == 'PLB' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e21);
                    }

                    //PekanBaru.byg//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'PKB' &&$dari == 'byg'){
                        echo rupiah(67000 + (($berat -1 ) * 4000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'PKB' &&$dari == 'byg'){
                            echo rupiah((107000) + ($Lebar * $Panjang * $Tinggi  * $e30));
                        }
                        elseif($berat > 20 &&$tujuan == 'PKB' &&$dari == 'byg'){
                            echo rupiah(($berat * 5200) + ($Lebar * $Panjang * $Tinggi  * $e30));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'PKB' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e30);
                    }  

                    //Jambi.byg//

                    if($berat > 1 &&$berat <=10 &&$tujuan == 'JBI' &&$dari == 'byg'){
                        echo rupiah(67000 + (($berat -1 ) * 3000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }

                        elseif($berat >10 &&$berat <=20 &&$tujuan == 'JBI' &&$dari == 'byg'){
                            echo rupiah((97000) + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }
                        elseif($berat > 20 &&$tujuan == 'JBI' &&$dari == 'byg'){
                            echo rupiah(($berat * 4700) + ($Lebar * $Panjang * $Tinggi  * $e26));
                        }
                        
                        elseif($berat <1 &&$tujuan == 'JBI' &&$dari == 'byg'){
                            echo  rupiah($Lebar * $Panjang * $Tinggi * $e26);
                    }

                    ?>
