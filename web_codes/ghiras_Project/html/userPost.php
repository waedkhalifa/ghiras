<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>User Profile  | Dania Nazzal </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../planting.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

    <script>
      $(document).ready(function(){
        $('.click').click(function(){
          $('.popup_box').css("display", "block");
        });
        $('.btn1').click(function(){
          $('.popup_box').css("display", "none");
        });
        $('.btn2').click(function(){
          $('.popup_box').css("display", "none");
          alert("Account Permanently Deleted.");
        });
      });

    </script>

    <style>
      @import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap');
      *{
        padding: 0;
        margin: 0;
        text-decoration: none;
      }
      .popup_box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 5px;
      }

      .popup_box{
        width: 600px;
        background: #f2f2f2;
        text-align: center;
        align-items: center;
        padding: 40px;
        border: 1px solid #b3b3b3;
        box-shadow: 0px 5px 10px rgba(0,0,0,.2);
        z-index: 9999;
        display: none;
      }
      .popup_box i{
        font-size: 60px;
        color: #eb9447;
        border: 5px solid #eb9447;
        padding: 20px 40px;
        border-radius: 50%;
        margin: -10px 0 20px 0;
      }
      .popup_box h1{
        font-size: 30px;
        color: #1b2631;
        margin-bottom: 5px;
      }
      .popup_box label{
        font-size: 23px;
        color: #404040;
      }
      .popup_box .btns{
        margin: 40px 0 0 0;
      }
      .btns .btn1, .btns .btn2{
        background: #999999;
        color: white;
        font-size: 18px;
        border-radius: 5px;
        border: 1px solid #808080;
        padding: 10px 13px;
      }
      .btns .btn2{
        margin-left: 20px;
        background: #9AB973;
        border: 1px solid #9AB973;
      }
      .btns .btn1:hover{
        transition: .5s;
        background: #8c8c8c;
      }
      .btns .btn2:hover{
        transition: .5s;
        background: #9AB973;
      }

    </style>

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">

            <img src="../assets/img/avatars/logo.png" alt style="height: 90px;width: 200px;"/>



            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Home Page</div>
              </a>
            </li>


            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Settings</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Account Settings</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-account-settings-account.html" class="menu-link">
                    <div data-i18n="Account">Account</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div data-i18n="Notifications">Notifications</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-connections.html" class="menu-link">
                    <div data-i18n="Connections">Connections</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Privacy and Security</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="auth-login-basic.php" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Login</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="auth-register-basic.php" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Register</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="auth-forgot-password-basic.php" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Forgot Password</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
            <!-- Cards -->
            <li class="menu-item">
              <a href="posts.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Posts</div>
              </a>
            </li>

            <!-- Extended components -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Extended UI">Ghiras Library</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="books.php" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">View Books</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="newBook.php" class="menu-link">
                    <div data-i18n="Text Divider">Add New Book</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item">
              <a href="icons-boxicons.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Boxicons">Products & Crops</div>
              </a>
            </li>

            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Members</span></li>
            <!-- Forms -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">All members</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="forms-basic-inputs.html" class="menu-link">
                    <div data-i18n="Basic Inputs">Basic Inputs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-input-groups.html" class="menu-link">
                    <div data-i18n="Input groups">Input groups</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Tables -->
            <li class="menu-item">
              <a href="reports.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Reports</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="auth-login-basic.php" class="menu-link">
                <i class="bx bx-power-off me-2"></i>
                <div data-i18n="Tables">Log Out</div>
              </a>
            </li>


          </ul>

        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.jpg" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.jpg" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php $_SESSION["username"] ?></span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Reports</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20"></span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

              <!-- Basic Layout -->
              <div class="row" style="margin-left: 300px;margin-right: 300px;margin-top: 30px">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">

                        <?php

                        $db = new mysqli('localhost', 'root', '', 'mozare');
                        if ($db->connect_error)
                        {
                            die("Connection failed: " . $db->connect_error);
                        }
                        $qrystr = "select * from posts where postid=".$_POST['postid'];
                        $res = $db->query($qrystr);

                        for ($i = 0; $i < $res->num_rows; $i++) {
                        while ($row = $res->fetch_object()) {
                        $img="imgs/".$row->img;
                        $username=$row->username;
                        $context=$row->context;
                        $username2=$row->username2;

                        ?>
                      <table><tr>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">

                            <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="<?php echo $username?>"
                            >
                              <a href="dania.php" ;>
                                <img src="../assets/img/avatars/prof8.jpg"alt class="w-px-40 rounded-circle" style="height: 40px;margin-top: -10px"/>
                              </a>
                            </li>

                          </ul>
                        </td>
                        <td>
                          <h5 class="card-title" style="margin-top:10px;margin-left:25px"><?php echo $username?></h5>
                        </td>
                      </tr>
                      </table>
                    </div>
                    <div class="card-body">
                      <form>
                        <p>

                        </p>

                        <p class="card-text"><?php echo $context?></p>
                        <img class="img-fluid" src="../assets/img/elements/p2.jpg" alt="Card image cap" style="margin-left: 100px"/>
                        <div class="row justify-content-end">
                          <p style="border-bottom:solid #90A4AE; border-style: ridge;border-width: thin; ;margin-top: 10px"></p>
                          <div>
                            <img class="" src="../assets/img/elements/heart.png" alt style="margin-left:100px; margin-right: 5px;margin-top: -3px;height:20px; width: 20px"/>
                            <h>53</h>
                            <img class="" src="../assets/img/elements/comment.png" alt style="margin-left: 200px;height:20px;margin-right: 5px; width: 20px" />
                            <h>6</h>
                          </div>
                          <p style="border-bottom:solid #90A4AE; border-style: ridge;border-width: thin; ;margin-top: 10px"></p>

                            <?php


                            }


                            }


                            ?>
                          <table>

                              <?php

                              $db = new mysqli('localhost', 'root', '', 'takeabreak');
                              if ($db->connect_error)
                              {
                                  die("Connection failed: " . $db->connect_error);
                              }
                              $qrystr = "select * from comments";
                              $res = $db->query($qrystr);

                              for ($i = 0; $i < $res->num_rows; $i++) {
                                  while ($row = $res->fetch_object()) {
                                      $img="imgs/".$row->img;
                                      $context=$row->conrext;
                                      $username=$row->username;
                                      $userid=$row->userid;
                                      $userimage=$row->userimage;
                                      ?>

                            <tr>
                              <td>
                                <div style="margin-left: 20px;">
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">

                                <li
                                        data-bs-toggle="tooltip"
                                        data-popup="tooltip-custom"
                                        data-bs-placement="top"
                                        class="avatar avatar-xs pull-up"
                                        title="<?php echo $username?>"
                                >
                                  <a href="userProfile.php?userid="<?php echo $userid?> ;>
                                    <img src="<?php echo $userimage?>" alt class="w-px-40 rounded-circle" style="height: 40px;margin-top: -10px;" />
                                  </a>
                                </li>

                              </ul>
                                </div>
                              </td>
                              <td>
                                <p style="margin-left: 80px"><?php echo $context?></p>
                              </td>
                            </tr>
                              <?php


                            }


                            }


                            ?>
                          </table>
                          <div class="col-sm-10" style="margin-top: 20px;">
                            <button type="button" class="btn btn-primary" onclick="delete " style="margin-left: 100px;width: 120px">Remove</button>
                          </div>
                        </div>

                        <div class="popup_box">
                          <i class="fas fa-exclamation"></i>
                          <h1>Are you sure you want to save changes</h1>
                          <label>Are you sure to proceed?</label>
                          <div class="btns">
                            <a href="userProfile.php" class="btn1">Cancel Process</a>
                            <a href="index.html" class="btn2">Delete Account</a>
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>

              </div>



            </div>
            <!-- / Content -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

<?php
$conn = new mysqli('localhost', 'root', '', 'mozare');

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT 	from * reports";
$result = $conn->query($sql);
$repNum=$result->num_rows;
if ($result->num_rows > 0)
{

}

$conn->close();
?>
