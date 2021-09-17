  <!-- Home Banner -->
  <style>
      .banner-wrapper {
    margin: 0 auto;
    max-width: 1044px!important;
    width: 100%;
}
  </style>
  <section class="section section-search" id="section_1">
      <div class="container-fluid">
          <div class="banner-wrapper">
              <div class="text-center banner-header">
                  <h1>Busca a tu médico por su nombre,especialidad y ubicación</h1>
                  <p>Reserva de forma presencial y virtual</p>
              </div>

              <!-- Search -->
              <div class="search-box"  >
                  <div class="row form-row">

                      <div class="form-group search-location col-md-3">
                          <select name="departamento" class="form-control" id="departamento" onchange="cargaProvincias();">
                              <option default hidden>Departamentos</option>
                          </select>
                          <span class="form-text">Eliga un departamento</span>
                      </div>

                      <div class="form-group search-location col-md-3">
                        <select name="provincia" class="form-control" id="provincia" onchange="cargaDistritos();">
                        <option default hidden>Provincias</option>
                        </select>
                          <span class="form-text">Eliga una provincia</span>
                      </div>

                      <div class="form-group search-location col-md-3">
                          <select name="distrito" class="form-control" id="distrito">
                              <option default hidden>Distritos</option>
                          </select>
                          <span class="form-text">Eliga un distrito</span>
                      </div>

                      <div class="form-group search-location col-md-3">
                          <select name="especialidad" class="form-control" id="especialidad">
                              <option default hidden>Especialidades</option>

                          </select>
                          <span class="form-text">Eliga una espeacialidad</span>
                      </div> 
                      <button type="button" class="mt-0 btn btn-primary search-btn" onclick="search()"><i class="fas fa-search"></i>
                          <span>Buscar</span></button>
                  </div>
                 
              </div>
              <!-- /Search -->

          </div>
      </div>
  </section>
  <!-- /Home Banner -->

  <!-- Category Section -->
  <section class="section home-tile-section" id="section_2">
      <div class="container">
          <div class="section-header">
              <h2 class="mt-2 text-center">¿Qué te ofrecemos?</h2>
          </div>
          <div class="row">

              <div class="col-lg-4">
                  <div class="category-box">
                      <div class="category-image">
                          <img src="views/assets/img/category/1.png" alt="">
                      </div>
                      <div class="category-content">

                          <span>Opción 1</span>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="category-box">
                      <div class="category-image">
                          <img src="views/assets/img/category/2.png" alt="">
                      </div>
                      <div class="category-content">

                          <span>Opción 2</span>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="category-box">
                      <div class="category-image">
                          <img src="views/assets/img/category/3.png" alt="">
                      </div>
                      <div class="category-content">

                          <span>Opción 3</span>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="category-box">
                      <div class="category-image">
                          <img src="views/assets/img/category/4.png" alt="">
                      </div>
                      <div class="category-content">

                          <span>Opción 4</span>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="category-box">
                      <div class="category-image">
                          <img src="views/assets/img/category/5.png" alt="">
                      </div>
                      <div class="category-content">

                          <span>Opción 5</span>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="category-box">
                      <div class="category-image">
                          <img src="views/assets/img/category/1.png" alt="">
                      </div>
                      <div class="category-content">

                          <span>Opción 6</span>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </section>
  <!-- Category Section -->


  <!-- Availabe Features -->
  <section class="section home-tile-section" id="section_3">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-5 features-img">
                  <img src="views/assets/img/features/feature.png" class="img-fluid" alt="Feature">
              </div>
              <div class="col-md-7">

                  <div class="features-slider slider">
                      <!-- Slider Item -->
                      <div class="text-center feature-item">
                          <img src="views/assets/img/features/feature-01.jpg" class="img-fluid" alt="Feature">
                          <p>Patient Ward</p>
                      </div>
                      <!-- /Slider Item -->

                      <!-- Slider Item -->
                      <div class="text-center feature-item">
                          <img src="views/assets/img/features/feature-02.jpg" class="img-fluid" alt="Feature">
                          <p>Test Room</p>
                      </div>
                      <!-- /Slider Item -->

                      <!-- Slider Item -->
                      <div class="text-center feature-item">
                          <img src="views/assets/img/features/feature-03.jpg" class="img-fluid" alt="Feature">
                          <p>ICU</p>
                      </div>
                      <!-- /Slider Item -->

                      <!-- Slider Item -->
                      <div class="text-center feature-item">
                          <img src="views/assets/img/features/feature-04.jpg" class="img-fluid" alt="Feature">
                          <p>Laboratory</p>
                      </div>
                      <!-- /Slider Item -->

                      <!-- Slider Item -->
                      <div class="text-center feature-item">
                          <img src="views/assets/img/features/feature-05.jpg" class="img-fluid" alt="Feature">
                          <p>Operation</p>
                      </div>
                      <!-- /Slider Item -->

                      <!-- Slider Item -->
                      <div class="text-center feature-item">
                          <img src="views/assets/img/features/feature-06.jpg" class="img-fluid" alt="Feature">
                          <p>Medical</p>
                      </div>
                      <!-- /Slider Item -->
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- /Availabe Features -->


  <section class="section home-tile-section" id="section_4">
      <div class="container-fluid">
          <div class="row">
              <div class="m-auto col-md-9">
                  <div class="text-center section-header">
                      <h2>Encuentra todo lo que buscas</h2>
                  </div>
                  <div class="row">
                      <div class="mb-3 col-lg-4">
                          <div class="text-center card doctor-book-card">
                              <img src="views/assets/img/doctors/doctor-07.jpg" alt="" class="img-fluid">
                              <div class="doctor-book-card-content tile-card-content-1">
                                  <div>
                                      <h3 class="mb-0 card-title">Reserva</h3>
                                      <a href="search" class="px-3 py-2 mt-3 btn book-btn1" tabindex="0">Book Now</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="mb-3 col-lg-4">
                          <div class="text-center card doctor-book-card">
                              <img src="views/assets/img/img-pharmacy1.jpg" alt="" class="img-fluid">
                              <div class="doctor-book-card-content tile-card-content-1">
                                  <div>
                                      <h3 class="mb-0 card-title">Preguntas Frecuentes</h3>
                                      <a href="pharmacy-search" class="px-3 py-2 mt-3 btn book-btn1" tabindex="0">Find Now</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="mb-3 col-lg-4">
                          <div class="text-center card doctor-book-card">
                              <img src="views/assets/img/lab-image.jpg" alt="" class="img-fluid">
                              <div class="doctor-book-card-content tile-card-content-1">
                                  <div>
                                      <h3 class="mb-0 card-title">Precios</h3>
                                      <a href="javascript:void(0);" class="px-3 py-2 mt-3 btn book-btn1" tabindex="0">Coming Soon</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

 