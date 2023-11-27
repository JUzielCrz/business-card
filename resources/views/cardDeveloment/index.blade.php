
<x-page-layout>
    <!DOCTYPE html>

<head>
    <!-- Favicon -->
    <link href="/img/cardDeveloment/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="{{asset('preconnect" href="https://fonts.gstatic.com')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap')}}" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/cards/develoment/style.css')}}" rel="stylesheet">
</head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <!-- Navbar Start -->
        <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="/develoment/profile" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5"><span class="text-primary">Mi </span>Portafolio</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="#home" class="nav-item nav-link active">Inicio</a>
                    <a href="#about" class="nav-item nav-link">Acerca</a>
                    <a href="#qualification" class="nav-item nav-link">Educación/Experiencia</a>
                    <a href="#skill" class="nav-item nav-link">Habilidades</a>
                    {{-- <a href="#service" class="nav-item nav-link">Service</a> --}}
                    <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                    {{-- <a href="#testimonial" class="nav-item nav-link">Review</a> --}}
                    {{-- <a href="#blog" class="nav-item nav-link">Blog</a> --}}
                    {{-- <a href="#contact" class="nav-item nav-link">Contact</a> --}}
                </div>
                <a href="" class="btn btn-outline-primary d-none d-lg-block">Hire Me</a>
            </div>
        </nav>
        <!-- Navbar End -->
    
    
        <!-- Video Modal Start -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->
    
    
        <!-- Header Start -->
        <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                        <img class="img-fluid w-100 rounded-circle shadow-sm" src="/img/cardDeveloment/profile.jpg" alt="">
                    </div>
                    <div class="col-lg-7 text-center text-lg-left">
                        <h3 class="text-white font-weight-normal mb-3">Yo soy</h3>
                        <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;">Uziel Alonso</h1>
                        <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                        <div class="typed-text d-none">Web Developer, Front End Developer, Web Designer</div>
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                            {{-- <a href="" class="btn btn-outline-light mr-5">Download CV</a> --}}
                            {{-- <button type="button" class="btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button> --}}
                            {{-- <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    
    
        <!-- About Start -->
        <div class="container-fluid py-5" id="about">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Acerca</h1>
                    <h1 class="position-absolute text-uppercase text-primary">Acerca de Mi</h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 pb-4 pb-lg-0">
                        <img class="img-fluid rounded w-100" src="/img/cardDeveloment/about.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <h3 class="mb-4">Desarrollador Web</h3>
                        <p>Hola, mi nombre es Uziel Jefthe Alonso Cruz y soy Ingeniero en Sistemas Computacionales graduado en el año 2020. Actualmente, estoy buscando una nueva oportunidad laboral donde pueda aplicar mis conocimientos y habilidades.</p>
                        <div class="row mb-3">
                            <div class="col-sm-6 py-2"><h6>Nombre: <span class="text-secondary">Uziel J. Alonso Cruz</span></h6></div>
                            <div class="col-sm-6 py-2"><h6>F. Nacimiento: <span class="text-secondary">18 Diciembre 1994</span></h6></div>
                            <div class="col-sm-6 py-2"><h6>Desarrollador: <span class="text-secondary">Junior</span></h6></div>
                            <div class="col-sm-6 py-2"><h6>Experiencia: <span class="text-secondary">3 Years</span></h6></div>
                            <div class="col-sm-6 py-2"><h6>Telefono: <span class="text-secondary">+52 951 305 78 89</span></h6></div>
                            <div class="col-sm-6 py-2"><h6>Correo: <span class="text-secondary">uziel.alonsoc@gmail.com</span></h6></div>
                            <div class="col-sm-6 py-2"><h6>Direccion: <span class="text-secondary">Oaxaca, Oax.</span></h6></div>
                            <div class="col-sm-6 py-2"><h6>Freelance: <span class="text-secondary">Available</span></h6></div>
                        </div>
                        {{-- <a href="" class="btn btn-outline-primary mr-4">Hire Me</a>
                        <a href="" class="btn btn-outline-primary">Learn More</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    
    
        <!-- Qualification Start -->
        <div class="container-fluid py-5" id="qualification">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Cualidades</h1>
                    <h1 class="position-absolute text-uppercase text-primary">Educación y Experiencia</h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h3 class="mb-4">Mi Educación</h3>
                        <div class="border-left border-primary pt-2 pl-4 ml-2">
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1">Ingeniería En Sistemas Computacionales</h5>
                                <p class="mb-2"><strong>Instituto Tecnológico de Oaxaca</strong> | <small>2014 - 2020</small></p>
                                <p>Obtuve mi título en Ingeniería en Sistemas Computacionales del Instituto Tecnológico de Oaxaca. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="mb-4">Mi Experiencia</h3>
                        <div class="border-left border-primary pt-2 pl-4 ml-2">
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1">FreeLancer </h5>
                                <p class="mb-2"><strong>Full Stack</strong> </p> 
                                <p>Mi enfoque principal ha sido trabajar en una variedad de proyectos como freelancer, desarrollando soluciones integrales y aplicando mis habilidades tanto en el desarrollo front-end como en el back-end.</p>
                            </div>
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1">Desarrollador Web Full Stack</h5>
                                <p class="mb-2"><strong>Ópticas OVN</strong></p>
                                <p>En Ópticas OVN, utilicé mi experiencia como desarrollador web Full Stack para encabezar la creación y ejecución de una tienda en línea dirigida a los clientes de OVN.</p>
                            </div>
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1">Desarrollador Web Full Stack</h5>
                                <p class="mb-2"><strong>OXINIK Gases Especiales</strong> </p>
                                <p>Desarrollador de sistema web de la empresa para la gestión administrativo en el área de almacén y mostrador en la renta de cilindros con gases especiales.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Qualification End -->
    
    
        <!-- Skill Start -->
        <div class="container-fluid py-5" id="skill">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">HABILIDADES</h1>
                    <h1 class="position-absolute text-uppercase text-primary">MIS HABILIDADES</h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">HTML</h6>
                                <h6 class="font-weight-bold">95%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">CSS</h6>
                                <h6 class="font-weight-bold">85%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">PHP</h6>
                                <h6 class="font-weight-bold">90%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">Node.JS</h6>
                                <h6 class="font-weight-bold">75%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">Javascript</h6>
                                <h6 class="font-weight-bold">90%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">Java</h6>
                                <h6 class="font-weight-bold">70%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">Angular JS</h6>
                                <h6 class="font-weight-bold">75%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">Laravel 7 y 9</h6>
                                <h6 class="font-weight-bold">85%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">Git</h6>
                                <h6 class="font-weight-bold">70%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">MySQL y PhpMyAdmin</h6>
                                <h6 class="font-weight-bold">95%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">PostgreSQL</h6>
                                <h6 class="font-weight-bold">70%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">Node.js</h6>
                                <h6 class="font-weight-bold">70%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">Adobe Photoshop</h6>
                                <h6 class="font-weight-bold">95%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">Adobe Illustrator</h6>
                                <h6 class="font-weight-bold">90%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Skill End -->
    
    
        <!-- Services Start -->
        {{-- <div class="container-fluid pt-5" id="service">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Service</h1>
                    <h1 class="position-absolute text-uppercase text-primary">My Services</h1>
                </div>
                <div class="row pb-3">
                    <div class="col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fa-laptop service-icon bg-primary text-white mr-3"></i>
                            <h4 class="font-weight-bold m-0">Web Design</h4>
                        </div>
                        <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                        <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"></i>
                            <h4 class="font-weight-bold m-0">Web Development</h4>
                        </div>
                        <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                        <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fab fa-2x fa-android service-icon bg-primary text-white mr-3"></i>
                            <h4 class="font-weight-bold m-0">Apps Design</h4>
                        </div>
                        <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                        <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fab fa-2x fa-apple service-icon bg-primary text-white mr-3"></i>
                            <h4 class="font-weight-bold m-0">Apps Development</h4>
                        </div>
                        <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                        <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fa-search service-icon bg-primary text-white mr-3"></i>
                            <h4 class="font-weight-bold m-0">SEO</h4>
                        </div>
                        <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                        <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fa-edit service-icon bg-primary text-white mr-3"></i>
                            <h4 class="font-weight-bold m-0">Content Creating</h4>
                        </div>
                        <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                        <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Services End -->
    
    
        <!-- Portfolio Start -->
        <div class="container-fluid pt-5 pb-3" id="portfolio">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
                    <h1 class="position-absolute text-uppercase text-primary">Mi Portfolio</h1>
                </div>
                <div class="row">
                    <div class="col-12 text-center mb-2">
                        <ul class="list-inline mb-4" id="portfolio-flters">
                            {{-- <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li> --}}
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">TIENDA EN LINEA OVN</li>
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">PAGINA WEB OXINIK</li>
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">SISTEMA OXINIK</li>
                            {{-- <li class="btn btn-sm btn-outline-primary m-1" data-filter=".four">SISTEMA INVENTARIO OXINIK</li> --}}
                                {{-- <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Pagina web Portafolio Online</li> --}}
                        </ul>
                    </div>
                </div>
                @include('cardDeveloment.portafolio.ovn')
                @include('cardDeveloment.portafolio.oxinikWeb')
                @include('cardDeveloment.portafolio.oxinikSystem')
            </div>
        </div>
        <!-- Portfolio End -->
    
    
        <!-- Testimonial Start -->
        {{-- <div class="container-fluid py-5" id="testimonial">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Review</h1>
                    <h1 class="position-absolute text-uppercase text-primary">Clients Say</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                                <img class="img-fluid rounded-circle mx-auto mb-3" src="/img/cardDeveloment/testimonial-1.jpg" style="width: 80px; height: 80px;">
                                <h5 class="font-weight-bold m-0">Client Name</h5>
                                <span>Profession</span>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                                <img class="img-fluid rounded-circle mx-auto mb-3" src="/img/cardDeveloment/testimonial-2.jpg" style="width: 80px; height: 80px;">
                                <h5 class="font-weight-bold m-0">Client Name</h5>
                                <span>Profession</span>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                                <img class="img-fluid rounded-circle mx-auto mb-3" src="/img/cardDeveloment/testimonial-3.jpg" style="width: 80px; height: 80px;">
                                <h5 class="font-weight-bold m-0">Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Testimonial End -->
    
    
        <!-- Blog Start -->
        {{-- <div class="container-fluid pt-5" id="blog">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Blog</h1>
                    <h1 class="position-absolute text-uppercase text-primary">Latest Blog</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-5">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded w-100" src="/img/cardDeveloment/blog-1.jpg" alt="">
                            <div class="blog-date">
                                <h4 class="font-weight-bold mb-n1">01</h4>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <h5 class="font-weight-medium mb-4">Rebum lorem no eos ut ipsum diam tempor sed rebum elitr ipsum</h5>
                        <a class="btn btn-sm btn-outline-primary py-2" href="">Read More</a>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded w-100" src="/img/cardDeveloment/blog-2.jpg" alt="">
                            <div class="blog-date">
                                <h4 class="font-weight-bold mb-n1">01</h4>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <h5 class="font-weight-medium mb-4">Rebum lorem no eos ut ipsum diam tempor sed rebum elitr ipsum</h5>
                        <a class="btn btn-sm btn-outline-primary py-2" href="">Read More</a>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded w-100" src="/img/cardDeveloment/blog-3.jpg" alt="">
                            <div class="blog-date">
                                <h4 class="font-weight-bold mb-n1">01</h4>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <h5 class="font-weight-medium mb-4">Rebum lorem no eos ut ipsum diam tempor sed rebum elitr ipsum</h5>
                        <a class="btn btn-sm btn-outline-primary py-2" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Blog End -->
    
    
        <!-- Contact Start -->
        {{-- <div class="container-fluid py-5" id="contact">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
                    <h1 class="position-absolute text-uppercase text-primary">Contact Me</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-form text-center">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                            required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                            required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                        required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                        required="required"
                                        data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Send
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Contact End -->
    
    
        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
            <div class="container text-center py-5">
                <div class="d-flex justify-content-center mb-4">
                    <a class="btn btn-light btn-social mr-2" target="_blank" href="https://wa.me/9513057889"><i class="fa-brands fa-whatsapp"></i></a>
                    {{-- <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a> --}}
                    <a class="btn btn-light btn-social mr-2" target="_blank" href="https://github.com/JUzielCrz"><i class="fa-brands fa-github"></i></a> 
                    {{-- <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a> --}}
                </div>
                {{-- <div class="d-flex justify-content-center mb-3">
                    <a class="text-white" href="#">Privacy</a>
                    <span class="px-3">|</span>
                    <a class="text-white" href="#">Terms</a>
                    <span class="px-3">|</span>
                    <a class="text-white" href="#">FAQs</a>
                    <span class="px-3">|</span>
                    <a class="text-white" href="#">Help</a>
                </div> --}}
            </div>
        </div>
        <!-- Footer End -->
    
        <!-- Scroll to Bottom -->
        <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>
    
        <!-- JavaScript Libraries -->
        <script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('lib/typed/typed.min.js')}}"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
    
        <!-- Contact Javascript File -->
        <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{asset('mail/contact.js')}}"></script>
    
        <!-- Template Javascript -->
        <script src="{{asset('js/develoment/main.js')}}"></script>
    </body>

</x-page-layout>
