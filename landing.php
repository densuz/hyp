<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/dm/dark-mode.css">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Home</title>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="landing/assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="landing/assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="landing/assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="landing/assets/img/favicons/favicon.ico">
  <link rel="manifest" href="landing/assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="landing/assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="landing/assets/css/theme.css" rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

</head>


<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand" href="#"><img class="img-fluid" src="landing/assets/img/icons/logo.png" alt="" /></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto ms-lg-4 ms-xl-7 border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
            <li class="nav-item"><a class="nav-link fw-medium active" aria-current="page" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link fw-medium text-primary" href="#">Help</a></li>
            <li class="nav-item"><a class="nav-link fw-medium text-primary" href="#">Features</a></li>
            <li class="nav-item"><a class="nav-link fw-medium text-primary" href="#">Signup</a></li>
          </ul>
          <?php 
          if (!empty($_SESSION['userid'])) {
            session_start();
            echo '<a class="btn btn-success btn-sm " href="main" role="button">
            LOGINED
          </a>';
          }else if(isset($_SESSION['userid']) == '') {
            echo '<a class="btn btn-primary btn-sm " href="login" role="button">
            LOGIN
          </a>';
          }
          ?>
          <!-- <a class="btn btn-primary btn-sm " href="login" role="button">
            LOGIN
          </a> -->
          <br>
        </div>
        <div class="form-check form-switch ">
          <input type="checkbox" class="form-check-input mx-auto" role="switch" id="darkSwitch">
          <label class="form-check-label" for="darkSwitch"></label>
        </div>
      </div>

    </nav>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-5">

      <div class="container ">
        <div class="row align-items-center">
          <div class="col-md-5 col-lg-7 order-md-1 pt-8"><img class="img-fluid" src="landing/assets/img/illustrations/hero-header.png" alt="" /></div>
          <div class="col-md-7 col-lg-5 text-center text-md-start pt-5 pt-md-9">
            <h1 class="mb-4 display-2 fw-bold text-success ">Save your data <br class="d-block d-lg-none d-xl-block" />storage here.</h1>
            <p class="mt-3 mb-4 ">Data Warehouse is a data storage area that <br />has been tested for security, so you can store<br />your data here safely but not be afraid of <br />being stolen by others.</p><a class="btn btn-lg btn-primary rounded-pill " href="#" role="button">Learn more</a>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-4">

      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card mb-3 bg-soft-warning rounded-3">
              <div class="row g-0 align-items-center">
                <div class="col-md-5 col-lg-6 text-md-center"><img class="img-fluid" src="landing/assets/img/illustrations/about.png" alt="" /></div>
                <div class="col-md-7 col-lg-6 px-md-2 px-xl-6 text-center text-md-start">
                  <div class="card-body px-4 py-5 p-lg-3 p-md-4">
                    <h1 class="mb-4 fw-bold">We are a high-level data<br class="d-md-none d-xxl-block" />storage bank</h1>
                    <p class="card-text text-dark">The place to store various data that you can access at any<br class="d-none d-xxl-block" />time through the internet and where you can carry it. <br class="d-none d-xxl-block" />This very flexible storage area has a high level of security.<br class="d-none d-xxl-block" />To enter into your own data you must enter the password<br class="d-none d-xxl-block" />that you created when you registered in this Data <br class="d-none d-xxl-block" />Warehouse. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section class="py-6">
      <div class="container-lg">
        <div class="row flex-center mb-5">
          <div class="col-auto text-center my-4">
            <h1 class="mb-4 fw-bold text-primary">Features</h1>
            <p>Some of the features and advantages that we provide for those of you <br />who store data in this Data Warehouse.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="card px-5 px-md-3 py-lg-5">
              <div class="row flex-center">
                <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(landing/assets/img/illustrations/feature-bg-1.png);background-position:center;background-size:contain;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(landing/assets/img/illustrations/feature-bg-1.png);background-position:center;background-size:cover;">
                </div>
                <!--/.bg-holder-->

                <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="landing/assets/img/illustrations/feature-search.png" alt="" /></div>
                <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                  <div class="card-body px-0">
                    <h4 class="card-title pt-md-5 text-primary">Search Data</h4>
                    <p class="mb-0 text-dark">Don’t worry if your data is very <br class="d-none d-lg-block"> large, the Data Warehoue <br class="d-none d-lg-block"> provides a search engine, <br class="d-none d-lg-block"> which is useful for making it <br class="d-none d-lg-block"> easier to find data effectively<br class="d-none d-lg-block">saving time. </p>
                    <div><a class="btn btn-lg ps-0 pe-3" href="#" role="button">Learn more</a>
                      <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9C69E2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card px-5 px-md-3 py-lg-5">
              <div class="row flex-center">
                <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(landing/assets/img/illustrations/feature-bg-2.png);background-position:center;background-size:contain;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(landing/assets/img/illustrations/feature-bg-2.png);background-position:center;background-size:cover;">
                </div>
                <!--/.bg-holder-->

                <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="landing/assets/img/illustrations/feature-hour.png" alt="" /></div>
                <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                  <div class="card-body px-0">
                    <h4 class="card-title pt-md-5 text-primary">24 Hours Access </h4>
                    <p class="mb-0 text-dark">Don’t worry if your data is very <br class="d-none d-lg-block"> large, the Data Warehoue <br class="d-none d-lg-block"> provides a search engine, <br class="d-none d-lg-block"> which is useful for making it <br class="d-none d-lg-block"> easier to find data effectively<br class="d-none d-lg-block">saving time. </p>
                    <div><a class="btn btn-lg ps-0 pe-3" href="#" role="button">Learn more</a>
                      <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9C69E2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card px-5 px-md-3 py-lg-5">
              <div class="row flex-center">
                <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(landing/assets/img/illustrations/feature-bg-3.png);background-position:center;background-size:contain;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(landing/assets/img/illustrations/feature-bg-3.png);background-position:center;background-size:cover;">
                </div>
                <!--/.bg-holder-->

                <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="landing/assets/img/illustrations/feature-print.png" alt="" /></div>
                <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                  <div class="card-body px-0">
                    <h4 class="card-title pt-md-5 text-primary">Print Out</h4>
                    <p class="mb-0 text-dark">Don’t worry if your data is very <br class="d-none d-lg-block"> large, the Data Warehoue <br class="d-none d-lg-block"> provides a search engine, <br class="d-none d-lg-block"> which is useful for making it <br class="d-none d-lg-block"> easier to find data effectively<br class="d-none d-lg-block">saving time. </p>
                    <div><a class="btn btn-lg ps-0 pe-3" href="#" role="button">Learn more</a>
                      <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9C69E2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card px-5 px-md-3 py-lg-5">
              <div class="row flex-center">
                <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(landing/assets/img/illustrations/feature-bg-4.png);background-position:center;background-size:contain;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(landing/assets/img/illustrations/feature-bg-4.png);background-position:center;background-size:cover;">
                </div>
                <!--/.bg-holder-->

                <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="landing/assets/img/illustrations/feature-security.png" alt="" /></div>
                <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                  <div class="card-body px-0">
                    <h4 class="card-title pt-md-5 text-primary">Security Code</h4>
                    <p class="mb-0 text-dark">Don’t worry if your data is very <br class="d-none d-lg-block"> large, the Data Warehoue <br class="d-none d-lg-block"> provides a search engine, <br class="d-none d-lg-block"> which is useful for making it <br class="d-none d-lg-block"> easier to find data effectively<br class="d-none d-lg-block">saving time. </p>
                    <div><a class="btn btn-lg ps-0 pe-3" href="#" role="button">Learn more</a>
                      <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9C69E2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5">
      <div class="container-lg bg-primary p-5 p-md-5 p-xl-7 rounded-3">
        <div class="row flex-center">
          <div class="col-12">
            <h2 class="text-light fw-bold">Testimonials</h2>
          </div>
        </div>
        <div class="carousel slide pt-6" id="carouselExampleDark" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <div class="row h-100">
                <div class="col-md-4 mb-3 mb-md-0">
                  <div class="card h-100 py-3">
                    <div class="card-body my-2">
                      <div class="d-flex align-items-center"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/1.png" width="70" alt="" />
                        <div class="flex-1 align-items-center">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">John Fang </h6>
                          <p class="fs--2 fw-normal text-info mb-0">wordfaang.com</p>
                        </div>
                      </div>
                      <p class="card-text ps-7 ps-md-0 ps-xl-7 pt-md-4 pt-lg-3 pt-xl-0 text-dark">“Wow...I am very happy to use this VPN, it turned out to be more than my expectations and so far there have been no problems. LaslesVPN always the best”.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                  <div class="card h-100 py-3">
                    <div class="card-body my-2">
                      <div class="d-flex align-items-center"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/2.png" width="70" alt="" />
                        <div class="flex-1 align-items-center">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Jeny Doe</h6>
                          <p class="fs--2 fw-normal text-info mb-0">UX Engineer</p>
                        </div>
                      </div>
                      <p class="card-text ps-7 ps-md-0 ps-xl-7 pt-md-4 pt-lg-3 pt-xl-0 text-dark">“I like it because I like to travel far and still can connect with high speed.”</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                  <div class="card h-100 py-3">
                    <div class="card-body my-2">
                      <div class="d-flex align-items-center"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/3.png" width="70" alt="" />
                        <div class="flex-1 align-items-center">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">William</h6>
                          <p class="fs--2 fw-normal text-info mb-0">Web Designer</p>
                        </div>
                      </div>
                      <p class="card-text ps-7 ps-md-0 ps-xl-7 pt-md-4 pt-lg-3 pt-xl-0 text-dark">“I like it because I like to travel far and still can connect with high speed.”</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <div class="row h-100">
                <div class="col-md-4 mb-3 mb-md-0">
                  <div class="card h-100 py-3">
                    <div class="card-body my-2">
                      <div class="d-flex align-items-center"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/1.png" width="70" alt="" />
                        <div class="flex-1 align-items-center">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Viezh Robert</h6>
                          <p class="fs--2 fw-normal text-info mb-0">arsaw, Poland</p>
                        </div>
                      </div>
                      <p class="card-text ps-7 ps-md-0 ps-xl-7 pt-md-4 pt-lg-3 pt-xl-0 text-dark">“Wow...I am very happy to use this VPN, it turned out to be more than my expectations and so far there have been no problems. LaslesVPN always the best”.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                  <div class="card h-100 py-3">
                    <div class="card-body my-2">
                      <div class="d-flex align-items-center"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/2.png" width="70" alt="" />
                        <div class="flex-1 align-items-center">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                          <p class="fs--2 fw-normal text-info mb-0">UX Engineer</p>
                        </div>
                      </div>
                      <p class="card-text ps-7 ps-md-0 ps-xl-7 pt-md-4 pt-lg-3 pt-xl-0 text-dark">“I like it because I like to travel far and still can connect with high speed.”</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                  <div class="card h-100 py-3">
                    <div class="card-body my-2">
                      <div class="d-flex align-items-center"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/3.png" width="70" alt="" />
                        <div class="flex-1 align-items-center">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                          <p class="fs--2 fw-normal text-info mb-0">Web Designer</p>
                        </div>
                      </div>
                      <p class="card-text ps-7 ps-md-0 ps-xl-7 pt-md-4 pt-lg-3 pt-xl-0 text-dark">“I like it because I like to travel far and still can connect with high speed.”</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row h-100">
                <div class="col-md-4 mb-3 mb-md-0">
                  <div class="card h-100 py-3">
                    <div class="card-body my-2">
                      <div class="d-flex align-items-center"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/1.png" width="70" alt="" />
                        <div class="flex-1 align-items-center">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Viezh Robert</h6>
                          <p class="fs--2 fw-normal text-info mb-0">arsaw, Poland</p>
                        </div>
                      </div>
                      <p class="card-text ps-7 ps-md-0 ps-xl-7 pt-md-4 pt-lg-3 pt-xl-0 text-dark">“Wow...I am very happy to use this VPN, it turned out to be more than my expectations and so far there have been no problems. LaslesVPN always the best”.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                  <div class="card h-100 py-3">
                    <div class="card-body my-2">
                      <div class="d-flex align-items-center"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/2.png" width="70" alt="" />
                        <div class="flex-1 align-items-center">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                          <p class="fs--2 fw-normal text-info mb-0">UX Engineer</p>
                        </div>
                      </div>
                      <p class="card-text ps-7 ps-md-0 ps-xl-7 pt-md-4 pt-lg-3 pt-xl-0 text-dark">“I like it because I like to travel far and still can connect with high speed.”</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                  <div class="card h-100 py-3">
                    <div class="card-body my-2">
                      <div class="d-flex align-items-center"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/3.png" width="70" alt="" />
                        <div class="flex-1 align-items-center">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                          <p class="fs--2 fw-normal text-info mb-0">Web Designer</p>
                        </div>
                      </div>
                      <p class="card-text ps-7 ps-md-0 ps-xl-7 pt-md-4 pt-lg-3 pt-xl-0 text-dark">“I like it because I like to travel far and still can connect with high speed.”</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row px-3 px-md-0 mt-4">
            <div class="col-6 position-relative">
              <ol class="carousel-indicators">
                <li class="active" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
              </ol>
            </div>
            <div class="col-6 position-relative"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
          </div>
        </div>
      </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-6 pb-0">

      <div class="container">
        <hr class="text-info opacity-25" />
        <div class="row py-7 justify-content-sm-between text-center text-md-start">

          <div class="row justify-content-lg-around">
            <div class="col-12 col-sm-12 col-lg-3 mb-4 order-0 order-sm-0 ">
              <a class="text-decoration-none" href="#"><img class="img-fluid me-3" src="landing/assets/img/icons/logo.png" alt="" />
                <span class="fs-1 text-1000 ">
                  <label class="text-primary">DataWarehouse</label>
                </span>
              </a>
              <p class="mt-4">ABCD E FGHJKL<br />Link.Ciriu - CILEGON BANTEN</p>
              <p>densuz97@gmail.com<br />62-123-4567 (Main) </p>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 mb-3 order-2 order-sm-1">
              <h6 class="lh-lg fw-bold mb-4 text-warning">About</h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg "><a class="text-primary fs--1 text-decoration-none" href="#!">Profile</a></li>
                <li class="lh-lg"><a class="text-primary fs--1 text-decoration-none" href="#!">Features</a></li>
                <li class="lh-lg"><a class="text-primary fs--1 text-decoration-none" href="#!">Careers</a></li>
                <li class="lh-lg"><a class="text-primary fs--1 text-decoration-none" href="#!">DW News</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
              <h6 class="lh-lg fw-bold mb-4 text-warning"> Help </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-primary fs--1 text-decoration-none" href="#!">Support</a></li>
                <li class="lh-lg"><a class="text-primary fs--1 text-decoration-none" href="#!">Sign Up </a></li>
                <li class="lh-lg"><a class="text-primary fs--1 text-decoration-none" href="#!">Guide</a></li>
                <li class="lh-lg"><a class="text-primary fs--1 text-decoration-none" href="#!">Reports</a></li>
                <li class="lh-lg"><a class="text-primary fs--1 text-decoration-none" href="#!">Q&amp;A</a></li>
              </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 mb-3 order-1 order-sm-3">
              <h6 class="lh-lg fw-bold mb-4 text-warning">Social Media </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="list-inline-item"><a class="text-primary fs--1 text-decoration-none" href="#!"><img class="img-fluid" src="landing/assets/img/icons/f.png" width="40" alt="" /></a></li>
                <li class="list-inline-item"><a class="text-primary fs--1 text-decoration-none" href="#!"><img class="img-fluid" src="landing/assets/img/icons/t.png" width="40" alt="" /></a></li>
                <li class="list-inline-item"><a class="text-primary fs--1 text-decoration-none" href="#!"><img class="img-fluid" src="landing/assets/img/icons/i.png" width="40" alt="" /></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-6">


      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->




  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="landing/vendors/@popperjs/popper.min.js"></script>
  <script src="landing/vendors/bootstrap/bootstrap.min.js"></script>
  <script src="landing/vendors/is/is.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="landing/assets/js/theme.js"></script>
  <script src="assets/dm/dark-mode-switch.min.js"></script>


  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,700;1,900&amp;display=swap" rel="stylesheet">
</body>

</html>