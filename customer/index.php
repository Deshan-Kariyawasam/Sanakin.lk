<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/favicon.png"
      type="image/x-icon"
    />
    <title>sanakin.lk</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="index.php">
          <img src="assets/images/logo/logo.png" alt="logo" />
        </a>
      </div>
      <nav class="sidebar-nav" style="margin-top: 60px;">
        <ul>
          <li class="nav-item active" style="background-color: #FF9C00;">
            <a href="index.php">
              <span class="icon">
               <i class="lni lni-home"></i>
              </span>
              <span class="text">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="complaint.php">
              <span class="icon">
                <i class="lni lni-add-files"></i></span>
              <span class="text">Complaint</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="Accounts.php">
              <span class="icon">
                <i class="lni lni-users"></i>
              </span>
              <span class="text">Accounts</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="products.php">
              <span class="icon">
                <i class="lni lni-package"></i>
              </span>
              <span class="text">Products</span>
            </a>
          </li>
          
      <div class="promo-box">
        <h5 style="color:#ffffff;">Profile</h5>
        <a
          href="#popup1"
        >
          Log out
        </a>
      </div>
    </aside>
    <div class="overlay"></div>



    <main class="main-wrapper">
      <!-- ========== header  ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-20">
                  <button
                    id="menu-toggle"
                    class="main-btn primary-btn btn-hover"
                  >
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>
                <div class="header-search d-none d-md-flex">
                  <h3>Dashboard</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button
                    class="dropdown-toggle bg-transparent border-0"
                    type="button"
                    id="profile"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <div class="profile-info">
                      <div class="info">
                        <div class="image">
                          <img
                            src="assets/images/profile/profile-image.png"
                            alt=""
                          />
                          <span class="status"></span>
                        </div>
                        <h6>John Doe</h6>
                      </div>
                    </div>
                    <i class="lni lni-chevron-down"></i>
                  </button>

              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->
<br><br>
      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="content">
                  <h3 class="mb-10">34567</h3>
                  <h6 class="text-sm text-medium">Total Shoppers</h6>
                </div>
                <div class="icon purple" style="margin-left: 100px;">
                  <i class="lni lni-cart-full"></i>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="content">
                  <h3 class="mb-10">1200</h3>
                  <h6 class="text-sm text-medium">Total Customers</h6>
                </div>
                <div class="icon success" style="margin-left: 100px;">
                  <i class="lni lni-dollar"></i>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="content">
                  <h3 class="mb-10">120</h3>
                  <h6 class="text-sm text-medium">Today Total Orders</h6>
                </div>
                <div class="icon primary" style="margin-left: 100px;">
                  <i class="lni lni-credit-cards"></i>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            </div>
            <!-- End Col -->
          </div>
  
          <!-- End Row -->
      <section class="section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12 col-lg-4 col-sm-6">
            <div class="card-style mb-30">
                <div
                  class="
                    title
                    d-flex
                    flex-wrap
                    align-items-center
                    justify-content-between
                  "
                >
                </div>
                <!-- End Title -->
                <div class="table-responsive">
                  <table class="table top-selling-table">
                    <thead>
                      <tr>
                        <th>
                          <h6 class="text-sm text-medium">New Accounts</h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            Customer Name
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            Registered date
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            AC. Verification
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            Type
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                              
                          </h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="product">
                            <p class="text-sm">#456546546546</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">Ahinsa De Silva</p>
                        </td>
                        <td>
                          <p class="text-sm">12/11/22</p>
                        </td>
                        <td>
                          <span class="status-btn close-btn">Pending</span>
                        </td>
                        <td>
                        <p class="text-sm">Shopper</p>
                        </td>
                        <td>
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="product">
                            <p class="text-sm">#456546546546</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">Ahinsa De Silva</p>
                        </td>
                        <td>
                          <p class="text-sm">12/11/22</p>
                        </td>
                        <td>
                          <span class="status-btn  success-btn">Completed</span>
                        </td>
                        <td>
                        <p class="text-sm">Shopper</p>
                        </td>
                        <td>
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr><tr>
                        <td>
                          <div class="product">
                            <p class="text-sm">#456546546546</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">Ahinsa De Silva</p>
                        </td>
                        <td>
                          <p class="text-sm">12/11/22</p>
                        </td>
                        <td>
                          <span class="status-btn close-btn">Pending</span>
                        </td>
                        <td>
                        <p class="text-sm">Shopper</p>
                        </td>
                        <td>
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr><tr>
                        <td>
                          <div class="product">
                            <p class="text-sm">#456546546546</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">Ahinsa De Silva</p>
                        </td>
                        <td>
                          <p class="text-sm">12/11/22</p>
                        </td>
                        <td>
                          <span class="status-btn  success-btn">Completed</span>
                        </td>
                        <td>
                        <p class="text-sm">Shopper</p>
                        </td>
                        <td>
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr><tr>
                        <td>
                          <div class="product">
                            <p class="text-sm">#456546546546</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">Ahinsa De Silva</p>
                        </td>
                        <td>
                          <p class="text-sm">12/11/22</p>
                        </td>
                        <td>
                          <span class="status-btn close-btn">Pending</span>
                        </td>
                        <td>
                        <p class="text-sm">Shopper</p>
                        </td>
                        <td>
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr><tr>
                        <td>
                          <div class="product">
                            <p class="text-sm">#456546546546</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">Ahinsa De Silva</p>
                        </td>
                        <td>
                          <p class="text-sm">12/11/22</p>
                        </td>
                        <td>
                          <span class="status-btn close-btn">Pending</span>
                        </td>
                        <td>
                        <p class="text-sm">Shopper</p>
                        </td>
                        <td>
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr><tr>
                        <td>
                          <div class="product">
                            <p class="text-sm">#456546546546</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">Ahinsa De Silva</p>
                        </td>
                        <td>
                          <p class="text-sm">12/11/22</p>
                        </td>
                        <td>
                          <span class="status-btn close-btn">Pending</span>
                        </td>
                        <td>
                        <p class="text-sm">Shopper</p>
                        </td>
                        <td>
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr><tr>
                        <td>
                          <div class="product">
                            <p class="text-sm">#456546546546</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">Ahinsa De Silva</p>
                        </td>
                        <td>
                          <p class="text-sm">12/11/22</p>
                        </td>
                        <td>
                          <span class="status-btn close-btn">Pending</span>
                        </td>
                        <td>
                        <p class="text-sm">Shopper</p>
                        </td>
                        <td>
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- End Table -->
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
        
        </div>
        <!-- end container -->

      </section>
    </main>

  

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>

  </body>
</html>
