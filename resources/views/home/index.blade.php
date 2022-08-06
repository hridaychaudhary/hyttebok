<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Hyttebok | Home</title>

        <!-- SEO Meta Tags-->
        <meta name="description" content="Hyttebok - Hyttebok Sales" />
        <meta name="keywords" content="Hyttebok, business" />
        <meta name="author" content="Hyttebok" />

        <!-- Viewport-->
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Favicon and Touch Icons-->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('home/img/apple-touch-icon.png') }}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('home/img/favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('home/img/favicon-16x16.png') }}" />
        <link rel="manifest" href="{{ URL::asset('home/img/site.webmanifest') }}" />
        <link rel="mask-icon" color="#5bbad5" href="{{ URL::asset('home/img/safari-pinned-tab.svg') }}" />
        <meta name="msapplication-TileColor" content="#766df4" />
        <meta name="theme-color" content="#ffffff" />

        <!-- Vendor Styles-->
        <link rel="stylesheet" media="screen" href="{{ URL::asset('home/css/lightgallery.min.css') }}" />
        <link rel="stylesheet" media="screen" href="{{ URL::asset('home/css/tiny-slider.css') }}" />

        <!-- Main Theme Styles + Bootstrap-->
        <link rel="stylesheet" media="screen" href="{{ URL::asset('home/css/theme.min.css') }}" />


	
	</head>

    <!-- Body-->
    <body>


        <!-- Main content-->
        <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
        <main class="page-wrapper position-relative">

            <!-- Navbar -->
            <!-- Remove .navbar-sticky class to detach .navbar from page scroll -->
            <header class="header navbar navbar-expand-md navbar-dark navbar-sticky navbar-floating">
                <div class="container px-0 px-xl-3">
                    <a class="navbar-brand order-md-1 me-md-5 me-0 pe-lg-2" href="index.html">
                        HYTTEBOK
                    </a>
					
					
                    <div class="d-flex align-items-center order-md-3">
					
                        <a class="btn btn-primary rounded-pill d-sm-inline-block d-none ms-3" href="{{  route('login') }}"><i class="ci-profile mt-n1 me-2 lead align-middle"></i> LOG IN</a>
						
						
						
                        <button class="navbar-toggler ms-1 me-n3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse1" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <nav class="collapse navbar-collapse order-md-2" id="navbarCollapse1">
                        <ul class="navbar-nav me-auto">
						
                            <li class="nav-item">
                                <a class="nav-link active" href="index.html">Home</a>
                            </li>
							
						
							
                            <li class="nav-item">
                                <a class="nav-link" href="#">About us</a>
                            </li>
								
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
							
		
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact us</a>
                            </li>
							

							
                        </ul>
                    </nav>
                </div>
            </header>

            <!-- Hero-->
            <section class="jarallax d-flex align-items-stretch min-vh-100 bg-dark overflow-hidden pt-5" data-jarallax data-speed="0.5">
                <div class="jarallax-img" style="background-image: url({{ URL::asset('home/img/pexels-syed-qaarif-andrabi-9252383.jpg') }});"></div>
                <div class="container d-flex flex-column justify-content-around pt-5 pt-sm-4 pb-5">
                    <div class="row mt-md-5 pt-sm-5">
					
					
					
                        <div class="col-lg-6 col-md-6 order-md-1 order-2 text-md-start text-center">
                            <div class="mt-lg-5 mb-4">
                                <a href="#" class="btn-video me-3" data-gallery-video data-sub-html="<h6 class='fs-sm text-light'>Hyttebok Showreel</h6>"></a>
                                <span class="fs-sm fw-bold text-light">Play Showreel</span>
                            </div>
                            <h1 class="mb-lg-5 mb-4 pb-2 display-1 text-light">Hey, we’re Hytte<span class="text-primary">bok</span></h1>
                            <a href="#portfolio" class="mb-lg-0 mb-5 btn btn-lg btn-primary rounded-pill" data-scroll>Get Started Now!</a>
                        </div>
						
						
					
						
						
                    </div>
                    <div class="row d-md-flex d-none align-items-center mt-lg-n5">
                        <div class="col-4">
                            <ul class="ps-4 list-unstyled border-start border-primary fw-bold text-muted text-uppercase lead">
                                <li>HYTTE BOK</li>
                                <li>VACATIONS</li>
                                <li>HOLIDAYS</li>
                                <li>OTHER SERVICES</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <a href="#mission" data-scroll class="d-flex align-items-center justify-content-center fs-sm fw-bold text-light text-decoration-none">
                                <i class="ci-arrow-down h4 me-2 mb-0 fw-normal text-light"></i>
                                Scroll down
                            </a>
                        </div>
                        <div class="col-4">
                            <div class="text-end">
                                <span class="ms-auto fw-bold text-light">
                                    12+ <br />
                                    awards
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Mission -->
            <section id="mission" class="container py-lg-6 py-5 my-3 mt-lg-1 mb-sm-5">
                <h3 class="h6 mb-3 pb-1 text-uppercase">What we do</h3>
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <p class="h3 mb-md-0 mb-3 pb-md-0 pb-1 line-height-base">
                            Lorem Ipsum er rett og slett dummytekst fra og for trykkeindustrien. Lorem Ipsum har vært bransjens standard for dummytekst helt siden 1500-tallet, da en ukjent boktrykker stokket en mengde bokstaver for å lage et prøveeksemplar av en bok.
                        </p>
                    </div>
                    <div class="col-lg-5 col-md-6 overflow-hidden">
                        <div class="d-flex justify-content-md-end flex-sm-nowrap flex-wrap mx-n4">
                            <div class="mb-sm-0 mb-4 px-4">
                                <span class="d-inline-block pb-1 fs-sm text-dark text-nowrap">Highlighted in</span>
                                <img class="d-block mt-md-3 mt-2" src="{{ URL::asset('home/img/forbes.svg') }}" alt="Brand logo" />
                            </div>
                            <div class="mb-sm-0 mb-4 px-4">
                                <span class="d-inline-block pb-1 fs-sm text-dark text-nowrap">Top rated agency</span>
                                <img class="d-block mt-md-3 mt-2" src="{{ URL::asset('home/img/upwork.svg') }}" alt="Brand logo" />
                            </div>
                            <div class="mb-sm-0 mb-4 px-4">
                                <span class="d-inline-block pb-1 fs-sm text-dark text-nowrap">5 stars only</span>
                                <img class="d-block mt-md-3 mt-2" src="{{ URL::asset('home/img/clutch.svg') }}" alt="Brand logo" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Approach -->
            <section class="pt-lg-3 pb-4">
                <div class="container">
                    <h3 class="h6 mb-2 text-uppercase">Our approach</h3>
                    <h2 class="h1 mb-lg-5 mb-4">That’s how we do it</h2>
                </div>

                <!-- Carousel -->
                <div class="container px-0">
                    <div class="tns-carousel-wrapper tns-nav-outside mt-n4 ms-lg-n5">
                        <div
                            class="tns-carousel-inner pt-4 ps-lg-5"
                            data-carousel-options='{
              "loop": false,
              "controls": false,
              "responsive": {
                "0": {
                  "items": 1
                },
                "576": {
                  "items": 2
                },
                "768": {
                  "items": 3
                },
                "992": {
                  "items": 4
                }
              }
            }'
                        >
                            <!-- Horizontal step item -->
                            <div class="step pt-2 px-3">
                                <div class="step-head mb-3">
                                    <span class="step-indicator">01</span>
                                    <span class="step-line"></span>
                                </div>
                                <div class="step-body">
                                    <h3 class="h5 mb-2">Registrer deg</h3>
                                    <p class="mb-0 text-muted">Culpa nostrud commodo ea consequat aliquip reprehenderit. Veniam velit nostrud aliquip sunt.</p>
                                </div>
                            </div>

                            <!-- Horizontal step item -->
                            <div class="step pt-2 px-3">
                                <div class="step-head mb-3">
                                    <span class="step-indicator">02</span>
                                    <span class="step-line"></span>
                                </div>
                                <div class="step-body">
                                    <h3 class="h5 mb-2">Lag ditt hyttenavn</h3>
                                    <p class="mb-0 text-muted">Anim reprehenderit sint voluptate exercitation adipisicing laborum adipisicing. Minim ad tempor.</p>
                                </div>
                            </div>

                            <!-- Horizontal step item -->
                            <div class="step pt-2 px-3">
                                <div class="step-head mb-3">
                                    <span class="step-indicator">03</span>
                                    <span class="step-line"></span>
                                </div>
                                <div class="step-body">
                                    <h3 class="h5 mb-2">Velg design</h3>
                                    <p class="mb-0 text-muted">Sit veniam aute dolore adipisicing nulla sit culpa. Minim mollit voluptate ullamco proident ea ad.</p>
                                </div>
                            </div>

                            <!-- Horizontal step item -->
                            <div class="step pt-2 px-3">
                                <div class="step-head mb-3">
                                    <span class="step-indicator">04</span>
                                </div>
                                <div class="step-body">
                                    <h3 class="h5 mb-2">Siden er klar!</h3>
                                    <p class="mb-0 text-muted">Adipisicing esse aliqua aliquip qui amet. Aute eiusmod dolore dolore et ad et veniamad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services -->
            <section class="container py-lg-6 mb-md-3 mb-lg-0 py-5">
                <h3 class="h6 mb-2 text-uppercase">Capabilities</h3>
                <h2 class="h1 mb-lg-4 mb-2 pb-3">Our services</h2>
                <div class="row align-items-center">
                    <div class="col-md-5 order-md-1 order-2">
                        <!-- Accordion -->
                        <div class="accordion" id="accordionServices">
                            <!-- Item -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="servicesHeading-1">
                                    <button
                                        class="accordion-button border-0"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-binded-content="#identity"
                                        data-bs-target="#servicesCollapse-1"
                                        aria-expanded="true"
                                        aria-controls="servicesCollapse-1"
                                    >
                                        SERVICE - ONE
                                    </button>
                                </h3>
                                <div class="accordion-collapse border-0 collapse show" id="servicesCollapse-1" aria-labelledby="servicesHeading-1" data-bs-parent="#accordionServices">
                                    <div class="accordion-body">
                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                                        provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="servicesHeading-2">
                                    <button
                                        class="accordion-button border-0 collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-binded-content="#web"
                                        data-bs-target="#servicesCollapse-2"
                                        aria-expanded="false"
                                        aria-controls="servicesCollapse-2"
                                    >
                                        SERVICE - TWO
                                    </button>
                                </h3>
                                <div class="accordion-collapse border-0 collapse" id="servicesCollapse-2" aria-labelledby="servicesHeading-2" data-bs-parent="#accordionServices">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore porro molestiae nihil ad aut atque tempora tempore fugiat ipsum aspernatur officiis, obcaecati modi excepturi, aliquid reprehenderit?
                                        Sint ullam magni molestias?
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="servicesHeading-3">
                                    <button
                                        class="accordion-button border-0 collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-binded-content="#photography"
                                        data-bs-target="#servicesCollapse-3"
                                        aria-expanded="false"
                                        aria-controls="servicesCollapse-3"
                                    >
                                        SERVICE - THREE
                                    </button>
                                </h3>
                                <div class="accordion-collapse border-0 collapse" id="servicesCollapse-3" aria-labelledby="servicesHeading-3" data-bs-parent="#accordionServices">
                                    <div class="accordion-body">
                                        Doloribus quo sed beatae provident placeat voluptate corporis eligendi maxime laborum reprehenderit voluptatibus obcaecati recusandae illum, delectus ipsum ab vitae cum excepturi? Illo ad id mollitia,
                                        sit obcaecati qui laborum iste minima deserunt consequatur sunt neque aliquid, error aspernatur!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 order-md-2 order-1 ms-auto">
                        <!-- Images binded to accordion -->
                        <div class="binded-content mb-4">
                            <div id="identity" class="binded-item active">
                                <img class="d-block" src="{{ URL::asset('home/img/01.svg') }}" alt="Identity Design &amp; Illustration" />
                            </div>
                            <div id="web" class="binded-item">
                                <img class="d-block" src="{{ URL::asset('home/img/02.svg') }}" alt="UX / UI Design" />
                            </div>
                            <div id="photography" class="binded-item">
                                <img class="d-block" src="{{ URL::asset('home/img/03.svg') }}" alt="Photography &amp; Video Production" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- Pricing -->
        <section class="container mt-md-4 pt-lg-6 pt-5 pb-4">
          <h2 class="h1 mb-md-5 pb-2 text-center">Flexible pricing plans</h2>

          <!-- Vertical pricing plan wrapper + Carousel -->
          <div class="pricing-wrap tns-carousel-wrapper tns-nav-outside">

            <!-- Price switch -->
            <div class="mx-auto mb-md-5 mb-4 pb-2" style="max-width: 390px;">
              <div class="switch">
                <input class="switch-input visually-hidden" type="checkbox" id="switchAlt">
                <label class="switch-label" for="switchAlt">
                  <span class="switch-label-item">Monthly</span>
                  <span class="switch-label-item">Yearly
                    <small class="ms-2 fs-xs fw-normal">-12% Off</small>
                  </span>
                </label>
              </div>
            </div>

            <div class="tns-carousel-inner" data-carousel-options='{
              "gutter": 30,
              "loop": false,
              "controls": false,
              "responsive": {
                "0": {
                  "items": 1,
                  "nav": true
                },
                "576": {
                  "items": 2
                },
                "992": {
                  "items": 3,
                  "nav": false
                }
              }
            }'>

              <div><!-- Plan card -->
                <div class="card h-100">
                  <div class="card-img-top text-center pt-4">
                    <h3 class="mt-3 mb-2">Basic</h3>
                  </div>
                  <div class="card-body pt-0">
                    <div class="display-4 d-flex justify-content-center mb-3 py-2 px-4 text-primary">$
                      <span class="price" data-current-price="22" data-new-price="20">22</span>
                      <sup class="lead fw-bold mt-4 ms-2">/mon</sup>
                    </div>
                    <hr class="hr-gradient mx-n4 mb-4">
                    <ul class="list-unstyled d-table mx-auto mb-0 pb-2">
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-primary me-2"></i>
                        <span>Advanced Analytics</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-primary me-2"></i>
                        <span>Change Management</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-primary me-2"></i>
                        <span>Corporate Finance</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-primary me-2"></i>
                        <span>One Way Link Building</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-primary me-2"></i>
                        <span>Social Media Marketing</span>
                      </li>
                      <li class="d-flex align-items-center mb-2 opacity-90">
                        <i class="ci-cross text-muted me-2"></i>
                        <span class="text-muted">Strategy & Marketing</span>
                      </li>
                      <li class="d-flex align-items-center mb-2 opacity-90">
                        <i class="ci-cross text-muted me-2"></i>
                        <span class="text-muted">Information Technology</span>
                      </li>
                    </ul>
                  </div>
                  <div class="card-footer pt-0 border-0 text-center">
                    <a class="btn btn-outline-primary mb-4" href="#">Choose plan</a>
                  </div>
                </div>
              </div>

              <div><!-- Featured plan card -->
                <div class="card border-success bg-dark h-100">
                  <div class="card-img-top text-center pt-4">
                    <h3 class="mt-3 mb-2 text-white">Optimal</h3>
                  </div>
                  <div class="card-body pt-0">
                    <div class="display-4 d-flex justify-content-center mb-3 py-2 px-4 text-success">$
                      <span class="price" data-current-price="64" data-new-price="62">64</span>
                      <sup class="lead fw-bold mt-4 ms-2">/mon</sup>
                    </div>
                    <hr class="hr-gradient hr-light mx-n4 mb-4">
                    <ul class="list-unstyled d-table mx-auto mb-0 pb-2">
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-success me-2"></i>
                        <span class="text-white">Advanced Analytics</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-success me-2"></i>
                        <span class="text-white">Change Management</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-success me-2"></i>
                        <span class="text-white">Corporate Finance</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-success me-2"></i>
                        <span class="text-white">One Way Link Building</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-success me-2"></i>
                        <span class="text-white">Social Media Marketing</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-success me-2"></i>
                        <span class="text-white">Strategy & Marketing</span>
                      </li>
                      <li class="d-flex mb-2 opacity-50">
                        <i class="ci-cross text-muted mt-1 me-2"></i>
                        <span class="text-white">Information Technology</span>
                      </li>
                    </ul>
                  </div>
                  <div class="card-footer pt-0 border-0 text-center">
                    <a class="btn btn-primary mb-4" href="#">Choose plan</a>
                  </div>
                </div>
              </div>

              <div><!-- Plan card -->
                <div class="card h-100">
                  <div class="card-img-top text-center pt-4">
                    <h3 class="mt-3 mb-2">Premium</h3>
                  </div>
                  <div class="card-body pt-0">
                    <div class="display-4 d-flex justify-content-center mb-3 py-2 px-4 text-primary">$
                      <span class="price" data-current-price="98" data-new-price="94">98</span>
                      <sup class="lead fw-bold mt-4 ms-2">/mon</sup>
                    </div>
                    <hr class="hr-gradient mx-n4 mb-4">
                    <ul class="list-unstyled d-table mx-auto mb-0 pb-2">
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-primary me-2"></i>
                        <span>Advanced Analytics</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-primary me-2"></i>
                        <span>Change Management</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-primary me-2"></i>
                        <span>Corporate Finance</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-primary me-2"></i>
                        <span>One Way Link Building</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-primary me-2"></i>
                        <span>Social Media Marketing</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-primary me-2"></i>
                        <span>Strategy & Marketing</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="ci-checkmark text-primary me-2"></i>
                        <span>Information Technology</span>
                      </li>
                    </ul>
                  </div>
                  <div class="card-footer pt-0 border-0 text-center">
                    <a class="btn btn-outline-primary mb-4" href="#">Choose plan</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>







      <!-- Details -->
      <section class="py-5 jarallax" data-jarallax data-speed="0.8">

        <!-- Parallax bg -->
        <div class="jarallax-img" style="background-image: url({{ URL::asset('home/img/pexels-roland-juhász-1381134.jpg') }});"></div>

        <!-- Content -->
        <div class="container py-4">
          <div class="ms-md-auto me-md-0 mx-auto" style="max-width: 495px;">

            <!-- Details form -->
            <form class="py-5 px-sm-5 px-4 bg-light rounded shadow-lg">
              <h2 class="h3 text-center">A quick way to discuss details</h2>
              <div class="mb-4">
                <label for="detail-name" class="form-label">Name*</label>
                <input id="detail-name" class="form-control" type="text" placeholder="Your name" required>
              </div>
              <div class="mb-4">
                <label for="detail-tel" class="form-label">Phone*</label>
                <input id="detail-tel" class="form-control" type="tel" placeholder="Your phone number" required>
              </div>
              <div class="mb-4">
                <label for="detail-email" class="form-label">Email</label>
                <input id="detail-email" class="form-control" type="email" placeholder="Your working email">
              </div>
              <div class="mb-4">
                <label for="detail-message" class="form-label">Message*</label>
                <textarea id="detail-message" class="form-control" rows="2" placeholder="Your message" required></textarea>
              </div>
              <div class="mb-4 form-check">
                <input id="detail-subscribe" class="form-check-input" type="checkbox" checked>
                <label for="detail-subscribe" class="form-check-label fs-sm">I agree to receive communications from Createx Construction Bureau.</label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary text-uppercase">Send request</button>
              </div>
            </form>
          </div>
        </div>
      </section>
        </main>
        <!-- / Main content: .page-wrapper -->

        <!-- Footer -->
        <footer class="footer pt-3 bg-dark">
            <div class="container py-lg-5 py-4">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-12 order-md-1 order-2 mb-md-0 mb-4">
                        <h3 class="h6 mb-3 text-uppercase text-light">Contact us</h3>
                        <ul class="nav nav-light flex-column">
                            <li class="nav-item mb-2">
                                <a href="tel:(000) 000-0000" class="nav-link p-0 fw-normal">
                                    <span class="text-light">Call: </span>
                                    (000) 000-0000
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="mailto:hello@example.com" class="nav-link p-0 fw-normal">
                                    <span class="text-light">Email: </span>
                                    hello@example.com
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12 order-md-2 order-1 offset-lg-1 mb-md-0 mb-4">
                        <h3 class="h6 mb-3 text-uppercase text-light">Quick links</h3>
                        <ul class="nav nav-light flex-md-column flex-sm-row flex-column">
                            <li class="nav-item mb-2">
                                <a href="index.html" class="nav-link me-md-0 me-sm-4 p-0 fw-normal">Home</a>
                            </li>

                            <li class="nav-item mb-2">
                                <a href="about.html" class="nav-link me-md-0 me-sm-4 p-0 fw-normal">About us</a>
                            </li>
							
                            <li class="nav-item mb-2">
                                <a href="blog.html" class="nav-link me-md-0 me-sm-4 p-0 fw-normal">Pricing</a>
                            </li>
							
                            <li class="nav-item mb-2">
                                <a href="contacts.html" class="nav-link me-md-0 me-sm-4 p-0 fw-normal">Contacts</a>
                            </li>
							
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 order-md-3 order-sm-4 order-3 offset-lg-1 mb-md-0 mb-4">
                        <h3 class="h6 mb-3 text-uppercase text-light">Follow us</h3>
                        <a href="#" class="btn-social bs-solid rounded-circle bs-light me-2 mb-2 mt-md-0 mt-sm-1">
                            <i class="ci-facebook"></i>
                        </a>
                        <a href="#" class="btn-social bs-solid rounded-circle bs-light me-2 mb-2 mt-md-0 mt-sm-1">
                            <i class="ci-instagram"></i>
                        </a>

                    </div>
                    <div class="col-md-3 col-sm-6 order-md-4 order-sm-3 order-4 mb-md-0 mb-4">
                        <h3 class="h6 mb-3 text-uppercase text-light">Subscribe</h3>
                        <form>
                            <div class="input-group input-group-light mb-2 pb-1">
                                <input class="form-control pe-5 rounded" type="text" placeholder="Email address*" />
                                <i class="ci-arrow-right lead text-light position-absolute top-50 end-0 translate-middle-y mt-n1 me-3"></i>
                            </div>
                            <small class="d-block form-text fs-xs line-height-base text-light">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</small>
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-2 pt-1">
                    <div class="text-light">
                        <span class="d-block fs-xs mb-1">
                            <span class="fs-sm">&copy; </span> 2022
                            All rights reserved.
                        </span>
                        <span class="d-block fs-xs">
                            Made with
                            <i class="ci-heart mt-n1 mx-1 fs-base text-primary align-middle"></i>
                            <a href="#" class="text-light" target="_blank" rel="noopener noreferrer">by MACIVI</a>
                        </span>
                    </div>
                    <div class="d-flex align-items-end">
                        <span class="d-sm-inline-block d-none text-light fs-sm me-3">Back to top</span>
                        <a class="btn-scroll-top position-static rounded-circle" href="#top" data-scroll>
                            <i class="btn-scroll-top-icon ci-angle-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Vendor scripts: js libraries and plugins-->
        <script src="{{ URL::asset('home/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ URL::asset('home/js/smooth-scroll.polyfills.min.js') }}"></script>
        <script src="{{ URL::asset('home/js/jarallax.min.js') }}"></script>
        <script src="{{ URL::asset('home/js/lightgallery.min.js') }}"></script>
        <script src="{{ URL::asset('home/js/lg-video.min.js') }}"></script>
        <script src="{{ URL::asset('home/js/parallax.min.js') }}"></script>
        <script src="{{ URL::asset('home/js/tiny-slider.js') }}"></script>

        <!-- Main theme script-->
        <script src="{{ URL::asset('home/js/theme.min.js') }}"></script>
    </body>
</html>