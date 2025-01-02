@extends('components.main_view')

@section('css')
    <style>
        .logo_img{
            box-shadow: -10px 10px 5px rgb(92, 82, 82);
        }
        .logo_img2{
            box-shadow: 10px 10px 5px rgb(92, 82, 82);
        }
        .aksi{
            background: palegoldenrod;
            box-shadow: 5px 5px 5px rgb(92, 82, 82);
        }
        .vertical-line {
        display: inline-block;
        width: 1px;
        height: auto;
        background-color: black;
        margin: 0 10px;
        padding: 10px 0;
        }
        
        .sepatu{
            cursor: pointer;
        }
        .clean{
            cursor: pointer;
        }
        .opt1{
            color:blue;
        }

        .opt2{
            color:black;
        }

        .all-image{
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
    </style>
@endsection

@section('container')
    <div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-sm-12 d-flex mb-4 ">
                <div class="col-sm-8">
                    <div class="card col-sm-5 ms-auto">
                        <div class="card-body d-flex justify-content-around">
                        <div class="sepatu active d-flex flex-column text-center">
                            <span><i class="opt1 fa-sharp fa-solid fa-socks fa-lg"></i></span>
                            <a type="button" class="opt1 text-decoration-none">Jenis Sepatu</a>
                        </div>
                        <div class="vertical-line"></div>
                        <div class="clean d-flex flex-column text-center">
                            <span><i class="opt2 fa-sharp fa-solid fa-soap fa-lg"></i></span>
                            <a type="button" class="opt2  text-decoration-none">Jenis Cleaning</a>
                        </div>
                        </div>
                      </div>
                </div>
                <span class="h5 ms-auto">JENIS SEPATU & CLEANING</span>
            </div>
            <hr class="mb-4">
            
           <div class="jenis-sepatu animate__animated animate__fadeIn animate__slow">
            <div class="col-sm-12  d-flex justify-content-between flex-wrap">
                <div class="col-sm-5 mt-4 me-4">
                    <div class="d-flex">
                        <img src="/image/toko.jpg" alt="rusak" class="all-image img-fluid rounded-circle me-4">
                        <div class="theText">
                            <span class="h5 fw-bold text-uppercase">Sneakers</span>
                            <p class="text-muted">Sepatu kasual yang nyaman digunakan sehari-hari. Biasanya terbuat dari bahan kanvas atau kulit sintetis dengan sol karet yang fleksibel. Cocok untuk aktivitas santai atau olahraga ringan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 mt-4 ">
                    <div class="d-flex">
                        <img src="/image/toko.jpg" alt="rusak" class="all-image img-fluid rounded-circle me-4">
                        <div class="theText">
                            <span class="h5 fw-bold text-uppercase">Running Shoes</span>
                            <p class="text-muted">Sepatu khusus untuk olahraga lari, didesain dengan bantalan dan teknologi pendukung untuk kenyamanan serta mengurangi risiko cedera. Umumnya berbahan ringan dan memiliki sol yang empuk.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 mt-4 me-4">
                    <div class="d-flex">
                        <img src="/image/toko.jpg" alt="rusak" class="all-image img-fluid rounded-circle me-4">
                        <div class="theText">
                            <span class="h5 fw-bold text-uppercase">Slip On</span>
                            <p class="text-muted">Sepatu tanpa tali dengan desain simpel yang mudah dipakai dan dilepas. Biasanya berbahan kanvas, kain, atau kulit sintetis, cocok untuk aktivitas santai atau semi-formal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 mt-4 ">
                    <div class="d-flex">
                        <img src="/image/toko.jpg" alt="rusak" class="all-image img-fluid rounded-circle me-4">
                        <div class="theText">
                            <span class="h5 fw-bold text-uppercase">Loafers</span>
                            <p class="text-muted">Sepatu tanpa tali dengan desain formal atau semi-formal, biasanya berbahan kulit atau suede. Sering digunakan untuk acara resmi atau ke kantor karena memberikan tampilan elegan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 mt-4 me-4">
                    <div class="d-flex">
                        <img src="/image/toko.jpg" alt="rusak" class="all-image img-fluid rounded-circle me-4">
                        <div class="theText">
                            <span class="h5 fw-bold text-uppercase">Boots</span>
                            <p class="text-muted">Sepatu dengan desain tinggi yang menutupi pergelangan kaki atau lebih. Terbuat dari bahan kulit atau sintetis, boots cocok untuk melindungi kaki dalam cuaca dingin, hiking, atau memberikan tampilan gaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 mt-4 ">
                    <div class="d-flex">
                        <img src="/image/toko.jpg" alt="rusak" class="all-image img-fluid rounded-circle me-4">
                        <div class="theText">
                            <span class="h5 fw-bold text-uppercase">Stiletto</span>
                            <p class="text-muted">Sepatu hak tinggi dengan hak yang tipis dan tajam, sering digunakan oleh wanita untuk acara formal atau pesta. Memberikan kesan elegan dan feminin.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 mt-4 me-4">
                    <div class="d-flex">
                        <img src="/image/toko.jpg" alt="rusak" class="all-image img-fluid rounded-circle me-4">
                        <div class="theText">
                            <span class="h5 fw-bold text-uppercase">Flat Shoes</span>
                            <p class="text-muted">Sepatu dengan sol rata yang nyaman dipakai, biasanya digunakan untuk aktivitas sehari-hari. Tersedia dalam berbagai model dan bahan, cocok untuk tampilan kasual maupun semi-formal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 mt-4 ">
                    <div class="d-flex">
                        <img src="/image/toko.jpg" alt="rusak" class="all-image img-fluid rounded-circle me-4">
                        <div class="theText">
                            <span class="h5 fw-bold text-uppercase">Wedges</span>
                            <p class="text-muted">Sepatu wanita dengan sol tebal yang menyatu dari depan hingga tumit, memberikan efek tinggi tanpa mengorbankan kenyamanan. Cocok untuk berbagai acara, baik formal maupun santai.</p>
                        </div>
                    </div>
                </div>
            </div>
           </div>

            {{-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: --}}
          
            <div class="jenis-cleaning animate__animated animate__fadeIn animate__slow" style="display:none;">
                <div class="col-sm-12 d-flex justify-content-between flex-wrap">
                    <div class="col-sm-5 mt-4 me-4">
                        <div class="d-flex">
                            <img src="/image/MM.png" alt="rusak" class="all-image img-fluid rounded-circle me-4">
                            <div class="theText">
                                <span class="h5 fw-bold text-uppercase">Deep Cleaning</span>
                                <p class="text-muted">Metode pembersihan sepatu yang dilakukan secara menyeluruh dan instensif</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 mt-4 ">
                        <div class="d-flex">
                            <img src="/image/M.png" alt="rusak" class="all-image img-fluid rounded-circle me-4">
                            <div class="theText">
                                <span class="h5 fw-bold text-uppercase">Express Deep Cleaning</span>
                                <p class="text-muted">Layanan pencucian sepatu secara menyeluruh yang dilakukan dalam waktu 24 jam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 mt-4 me-4">
                        <div class="d-flex">
                            <img src="/image/M.png" alt="rusak" class="all-image img-fluid rounded-circle me-4">
                            <div class="theText">
                                <span class="h5 fw-bold text-uppercase">Unyellowing</span>
                                <p class="text-muted">Perawatan pada bagian midsole yang telah menguning untuk menghilangkan warna kuning menjadi semula tanpa harus di repaint</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
           
            <script>
                $(document).ready(function(){
                    $('.sepatu').click(function(){
                        $('.opt1').css('color' , 'blue');
                        $('.opt2').css('color' , 'black');
                        $('.jenis-sepatu').show();
                        $('.jenis-cleaning').hide();
                    })

                    $('.clean').click(function(){
                        $('.opt1').css('color' , 'black');
                        $('.opt2').css('color' , 'blue');
                        $('.jenis-sepatu').hide();
                        $('.jenis-cleaning').show();
                    })
                })
            </script>

          

          

        </div>
    </div>

 
@endsection
