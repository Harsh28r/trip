<?php include("header.php");?>
    <!-- ================================
         END HEADER AREA
================================= -->

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg">
      <div class="overlay"></div>
      <!-- end overlay -->
      <div class="container">
        <div class="breadcrumb-content text-center">
          <h2 class="sec__title text-white mb-3">Listing Grid</h2>
          <ul class="bread-list">
            <li><a href="index.html">home</a></li>
            <li>listing</li>
            <li>listing grid</li>
          </ul>
        </div>
        <!-- end breadcrumb-content -->
      </div>
      <!-- end container -->
      <div class="bread-svg">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
          <path
            d="M-4.22,89.30 C280.19,26.14 324.21,125.81 511.00,41.94 L500.00,150.00 L0.00,150.00 Z"
          ></path>
        </svg>
      </div>
      <!-- end bread-svg -->
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->

    <!-- ================================
    START CARD AREA
================================= -->
    <section class="card-area padding-top-60px padding-bottom-90px">
      <div class="container">
        <div class="card">
          <div
            class="card-body d-flex flex-wrap align-items-center justify-content-between"
          >
            <p class="card-text py-2">Showing 1 to 6 of 30 entries</p>
            <div class="d-flex align-items-center">
              <select
                class="select-picker select-picker-sm me-3"
                data-width="160"
                data-size="5"
              >
                <option value="">Short by</option>
                <option value="short-by-default">Short by default</option>
                <option value="high-rated">High Rated</option>
                <option value="most-reviewed">Most Reviewed</option>
                <option value="popular-Listing">Popular Listing</option>
                <option value="newest-Listing">Newest Listing</option>
                <option value="older-Listing">Older Listing</option>
                <option value="price-low-to-high">Price: low to high</option>
                <option value="price-high-to-low">Price: high to low</option>
                <option value="random-listing">Random listing</option>
              </select>
              <ul class="filter-nav ms-2">
                <li>
                  <a
                    href="listing-list.html"
                    class="icon-element icon-element-sm"
                    data-bs-toggle="tooltip"
                    data-placement="top"
                    title="List View"
                    ><i class="fal fa-list"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="listing-grid.html"
                    class="active icon-element icon-element-sm"
                    ><i class="fal fa-th-large"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end card -->
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="card hover-y">
              <a href="listing-details.html" class="card-image">
                <img
                  src="images/img-loading.jpg"
                  data-src="images/img1.jpg"
                  class="card-img-top lazy"
                  alt="card image"
                />
                <span class="badge text-bg-success badge-pill">Now open</span>
              </a>
              <div class="card-body position-relative">
                <a href="user-profile.html" class="author-img">
                  <img src="images/small-team1.jpg" alt="author-img" />
                </a>
                <a href="#" class="card-cat mb-2"
                  ><span
                    class="fal fa-utensils icon-element icon-element-sm"
                  ></span>
                  Restaurant</a
                >
                <div class="d-flex align-items-center mb-1">
                  <h4 class="card-title mb-0">
                    <a href="listing-details.html">Favorite Place Food Bank</a>
                  </h4>
                  <i
                    class="fa fa-check-circle ms-1 text-success"
                    data-bs-toggle="tooltip"
                    data-placement="top"
                    title="Claimed"
                  ></i>
                </div>
                <p class="card-text">Bishop Avenue, New York</p>
                <ul class="info-list mt-3">
                  <li>
                    <span class="fal fa-phone icon"></span> (416) 551-0589
                  </li>
                  <li>
                    <span class="fal fa-link icon"></span>
                    <a href="#">www.mysitelink.com</a>
                  </li>
                  <li>
                    <span class="fal fa-calendar icon"></span> Posted 1 month
                    ago
                  </li>
                </ul>
              </div>
              <!-- end card-body -->
              <div
                class="card-footer bg-transparent border-top-gray d-flex align-items-center justify-content-between"
              >
                <div class="star-rating" data-rating="5">
                  <div class="rating-counter">5 reviews</div>
                </div>
                <a
                  href="#"
                  class="bookmark-btn icon-element icon-element-sm bg-white shadow-sm text-black"
                  data-bs-toggle="tooltip"
                  data-placement="top"
                  title="Bookmark"
                >
                  <i class="fal fa-bookmark"></i>
                </a>
              </div>
              <!-- end card-footer -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 col-md-6">
            <div class="card hover-y">
              <a href="listing-details.html" class="card-image">
                <img
                  src="images/img-loading.jpg"
                  data-src="images/img2.jpg"
                  class="card-img-top lazy"
                  alt="card image"
                />
                <span class="badge text-bg-danger badge-pill">Closed</span>
              </a>
              <div class="card-body position-relative">
                <a href="user-profile.html" class="author-img">
                  <img src="images/small-team1.jpg" alt="author-img" />
                </a>
                <a href="#" class="card-cat mb-2"
                  ><span
                    class="fal fa-utensils icon-element icon-element-sm"
                  ></span>
                  Restaurant</a
                >
                <div class="d-flex align-items-center mb-1">
                  <h4 class="card-title mb-0">
                    <a href="listing-details.html">Favorite Place Food Bank</a>
                  </h4>
                  <i
                    class="fa fa-check-circle ms-1 text-success"
                    data-bs-toggle="tooltip"
                    data-placement="top"
                    title="Claimed"
                  ></i>
                </div>
                <p class="card-text">Bishop Avenue, New York</p>
                <ul class="info-list mt-3">
                  <li>
                    <span class="fal fa-phone icon"></span> (416) 551-0589
                  </li>
                  <li>
                    <span class="fal fa-link icon"></span>
                    <a href="#">www.mysitelink.com</a>
                  </li>
                  <li>
                    <span class="fal fa-calendar icon"></span> Posted 1 month
                    ago
                  </li>
                </ul>
              </div>
              <!-- end card-body -->
              <div
                class="card-footer bg-transparent border-top-gray d-flex align-items-center justify-content-between"
              >
                <div class="star-rating" data-rating="4.5">
                  <div class="rating-counter">4 reviews</div>
                </div>
                <a
                  href="#"
                  class="bookmark-btn icon-element icon-element-sm bg-white shadow-sm text-black"
                  data-bs-toggle="tooltip"
                  data-placement="top"
                  title="Bookmark"
                >
                  <i class="fal fa-bookmark"></i>
                </a>
              </div>
              <!-- end card-footer -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 col-md-6">
            <div class="card hover-y">
              <a href="listing-details.html" class="card-image">
                <img
                  src="images/img-loading.jpg"
                  data-src="images/img3.jpg"
                  class="card-img-top lazy"
                  alt="card image"
                />
                <span class="badge text-bg-success badge-pill">Now open</span>
              </a>
              <div class="card-body position-relative">
                <a href="user-profile.html" class="author-img">
                  <img src="images/small-team1.jpg" alt="author-img" />
                </a>
                <a href="#" class="card-cat mb-2"
                  ><span
                    class="fal fa-utensils icon-element icon-element-sm"
                  ></span>
                  Restaurant</a
                >
                <div class="d-flex align-items-center mb-1">
                  <h4 class="card-title mb-0">
                    <a href="listing-details.html">Favorite Place Food Bank</a>
                  </h4>
                  <i
                    class="fa fa-check-circle ms-1 text-success"
                    data-bs-toggle="tooltip"
                    data-placement="top"
                    title="Claimed"
                  ></i>
                </div>
                <p class="card-text">Bishop Avenue, New York</p>
                <ul class="info-list mt-3">
                  <li>
                    <span class="fal fa-phone icon"></span> (416) 551-0589
                  </li>
                  <li>
                    <span class="fal fa-link icon"></span>
                    <a href="#">www.mysitelink.com</a>
                  </li>
                  <li>
                    <span class="fal fa-calendar icon"></span> Posted 1 month
                    ago
                  </li>
                </ul>
              </div>
              <!-- end card-body -->
              <div
                class="card-footer bg-transparent border-top-gray d-flex align-items-center justify-content-between"
              >
                <div class="star-rating" data-rating="4.5">
                  <div class="rating-counter">4 reviews</div>
                </div>
                <a
                  href="#"
                  class="bookmark-btn icon-element icon-element-sm bg-white shadow-sm text-black"
                  data-bs-toggle="tooltip"
                  data-placement="top"
                  title="Bookmark"
                >
                  <i class="fal fa-bookmark"></i>
                </a>
              </div>
              <!-- end card-footer -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 col-md-6">
            <div class="card hover-y">
              <a href="listing-details.html" class="card-image">
                <img
                  src="images/img-loading.jpg"
                  data-src="images/img4.jpg"
                  class="card-img-top lazy"
                  alt="card image"
                />
                <span class="badge text-bg-success badge-pill">Now open</span>
              </a>
              <div class="card-body position-relative">
                <a href="user-profile.html" class="author-img">
                  <img src="images/small-team1.jpg" alt="author-img" />
                </a>
                <a href="#" class="card-cat mb-2"
                  ><span
                    class="fal fa-utensils icon-element icon-element-sm"
                  ></span>
                  Restaurant</a
                >
                <div class="d-flex align-items-center mb-1">
                  <h4 class="card-title mb-0">
                    <a href="listing-details.html">Favorite Place Food Bank</a>
                  </h4>
                  <i
                    class="fa fa-check-circle ms-1 text-success"
                    data-bs-toggle="tooltip"
                    data-placement="top"
                    title="Claimed"
                  ></i>
                </div>
                <p class="card-text">Bishop Avenue, New York</p>
                <ul class="info-list mt-3">
                  <li>
                    <span class="fal fa-phone icon"></span> (416) 551-0589
                  </li>
                  <li>
                    <span class="fal fa-link icon"></span>
                    <a href="#">www.mysitelink.com</a>
                  </li>
                  <li>
                    <span class="fal fa-calendar icon"></span> Posted 1 month
                    ago
                  </li>
                </ul>
              </div>
              <!-- end card-body -->
              <div
                class="card-footer bg-transparent border-top-gray d-flex align-items-center justify-content-between"
              >
                <div class="star-rating" data-rating="4.5">
                  <div class="rating-counter">4 reviews</div>
                </div>
                <a
                  href="#"
                  class="bookmark-btn icon-element icon-element-sm bg-white shadow-sm text-black"
                  data-bs-toggle="tooltip"
                  data-placement="top"
                  title="Bookmark"
                >
                  <i class="fal fa-bookmark"></i>
                </a>
              </div>
              <!-- end card-footer -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 col-md-6">
            <div class="card hover-y">
              <a href="listing-details.html" class="card-image">
                <img
                  src="images/img-loading.jpg"
                  data-src="images/img5.jpg"
                  class="card-img-top lazy"
                  alt="card image"
                />
                <span class="badge text-bg-success badge-pill">Now open</span>
              </a>
              <div class="card-body position-relative">
                <a href="user-profile.html" class="author-img">
                  <img src="images/small-team1.jpg" alt="author-img" />
                </a>
                <a href="#" class="card-cat mb-2"
                  ><span
                    class="fal fa-utensils icon-element icon-element-sm"
                  ></span>
                  Restaurant</a
                >
                <div class="d-flex align-items-center mb-1">
                  <h4 class="card-title mb-0">
                    <a href="listing-details.html">Favorite Place Food Bank</a>
                  </h4>
                  <i
                    class="fa fa-check-circle ms-1 text-success"
                    data-bs-toggle="tooltip"
                    data-placement="top"
                    title="Claimed"
                  ></i>
                </div>
                <p class="card-text">Bishop Avenue, New York</p>
                <ul class="info-list mt-3">
                  <li>
                    <span class="fal fa-phone icon"></span> (416) 551-0589
                  </li>
                  <li>
                    <span class="fal fa-link icon"></span>
                    <a href="#">www.mysitelink.com</a>
                  </li>
                  <li>
                    <span class="fal fa-calendar icon"></span> Posted 1 month
                    ago
                  </li>
                </ul>
              </div>
              <!-- end card-body -->
              <div
                class="card-footer bg-transparent border-top-gray d-flex align-items-center justify-content-between"
              >
                <div class="star-rating" data-rating="4.5">
                  <div class="rating-counter">4 reviews</div>
                </div>
                <a
                  href="#"
                  class="bookmark-btn icon-element icon-element-sm bg-white shadow-sm text-black"
                  data-bs-toggle="tooltip"
                  data-placement="top"
                  title="Bookmark"
                >
                  <i class="fal fa-bookmark"></i>
                </a>
              </div>
              <!-- end card-footer -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 col-md-6">
            <div class="card hover-y">
              <a href="listing-details.html" class="card-image">
                <img
                  src="images/img-loading.jpg"
                  data-src="images/img6.jpg"
                  class="card-img-top lazy"
                  alt="card image"
                />
                <span class="badge text-bg-success badge-pill">Now open</span>
              </a>
              <div class="card-body position-relative">
                <a href="user-profile.html" class="author-img">
                  <img src="images/small-team1.jpg" alt="author-img" />
                </a>
                <a href="#" class="card-cat mb-2"
                  ><span
                    class="fal fa-utensils icon-element icon-element-sm"
                  ></span>
                  Restaurant</a
                >
                <div class="d-flex align-items-center mb-1">
                  <h4 class="card-title mb-0">
                    <a href="listing-details.html">Favorite Place Food Bank</a>
                  </h4>
                  <i
                    class="fa fa-check-circle ms-1 text-success"
                    data-bs-toggle="tooltip"
                    data-placement="top"
                    title="Claimed"
                  ></i>
                </div>
                <p class="card-text">Bishop Avenue, New York</p>
                <ul class="info-list mt-3">
                  <li>
                    <span class="fal fa-phone icon"></span> (416) 551-0589
                  </li>
                  <li>
                    <span class="fal fa-link icon"></span>
                    <a href="#">www.mysitelink.com</a>
                  </li>
                  <li>
                    <span class="fal fa-calendar icon"></span> Posted 1 month
                    ago
                  </li>
                </ul>
              </div>
              <!-- end card-body -->
              <div
                class="card-footer bg-transparent border-top-gray d-flex align-items-center justify-content-between"
              >
                <div class="star-rating" data-rating="4.5">
                  <div class="rating-counter">4 reviews</div>
                </div>
                <a
                  href="#"
                  class="bookmark-btn icon-element icon-element-sm bg-white shadow-sm text-black"
                  data-bs-toggle="tooltip"
                  data-placement="top"
                  title="Bookmark"
                >
                  <i class="fal fa-bookmark"></i>
                </a>
              </div>
              <!-- end card-footer -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center pagination-list">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true" class="fal fa-angle-left"></span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true" class="fal fa-angle-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- end container -->
    </section>
    <!-- end card-area -->
    <!-- ================================
    END CARD AREA
================================= -->

    <!-- ================================
    START SUBSCRIBER AREA
================================= -->
    <section class="subscriber-area mb-n5 position-relative z-index-2">
      <div class="container">
        <div
          class="subscriber-box d-flex flex-wrap align-items-center justify-content-between bg-dark overflow-hidden"
        >
          <div class="section-heading my-2">
            <h2 class="sec__title text-white mb-2">Subscribe to Newsletter!</h2>
            <p class="sec__desc text-white-50">
              Subscribe to get latest updates and information.
            </p>
          </div>
          <!-- end section-heading -->
          <form method="post">
            <div class="input-group">
              <span class="fal fa-envelope form-icon"></span>
              <input
                class="form-control form--control"
                type="email"
                placeholder="Enter your email"
              />
              <div class="input-group-append">
                <button class="theme-btn" type="submit">Subscribe</button>
              </div>
            </div>
          </form>
        </div>
        <!-- end subscriber-box -->
      </div>
      <!-- end container -->
    </section>
    <!-- end subscriber-area -->
    <!-- ================================
    END SUBSCRIBER AREA
================================= -->

    <!-- ================================
       START FOOTER AREA
================================= -->
<?php include("footer.php");?>