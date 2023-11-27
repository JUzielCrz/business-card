<link href="{{asset('css/cards/cardOne.css')}}" rel="stylesheet">
<x-page-layout>

    @include('cardOne.about')

    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-4 ">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="profile">
                            <img src="https://images.pexels.com/photos/5091121/pexels-photo-5091121.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" alt="Foto de perfil">
                        </div>
                        <h3>Carmen Mark</h3>
                        <p>titulo o profesion</p>
                        <div class="social-buttons">
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                          </div>
                        
                          <div class="card card-contact border-0 rounded-3 bg-light">
                            <div class="card-body">
                                    <div class="d-flex align-items-start ">
                                        <div class="box-shadow">
                                            <i class="fa-solid fa-phone-volume"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-start">
                                                <span>Teléfono</span> <br>
                                                123-456-7890
                                            </p>
                                        </div>
                                    </div> 
                                    <hr class="mx-4">
                                    <div class="d-flex align-items-start ">
                                        <div class="box-shadow">
                                            <i class="fa-solid fa-envelope-open-text"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-start">
                                                <span>Correo</span> <br>
                                                123-456-7890
                                            </p>
                                        </div>
                                    </div> 
                                    <hr class="mx-4">
                                    <div class="d-flex align-items-start ">
                                        <div class="box-shadow">
                                            <i class="fa-solid fa-map-location"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-start">
                                                <span>Ubicación</span> <br>
                                                123-456-7890
                                            </p>
                                        </div>
                                    </div> 
                                    <hr class="mx-4">
                                    <div class="d-flex align-items-start ">
                                        <div class="box-shadow">
                                            <i class="fa-solid fa-cake-candles"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-start">
                                                <span>Cumpleaños</span> <br>
                                                123-456-7890
                                            </p>
                                        </div>
                                    </div> 
                                      
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 ">
                <div class="card mt-5">
                    <div class="card-body p-5">
                        <div class="title-line">
                            <h2>Sobre Mí</h2>
                            <div class="line"></div>
                        </div>
                        <p>
                            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                        </p>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-body p-5">
                        <div class="title-line">
                            <h2>Portafolio</h2>
                            <div class="line"></div>
                        </div>
                        <p>
                            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-page-layout>
