<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>adidas</title>
  <link rel="shortcut icon" href="view/img/icon-adidas-logo.svg" />
  <link rel="stylesheet" type="text/css" href="./view/css/index.min.css" />

  <!-- Link Remixi Icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <!--End Link Remixi Icon -->

  <!--Link Fontawesome -->
  <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    /> -->
  <!--End Link Fontawesome -->

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <!--End Link Swiper's CSS -->
</head>

<body>
  <main>
    <section id="header">
      <div class="header container">
        <div class="nav-bar">
          <div class="brand">
            <a href="" data-after="Home">
              <div class="logo">
                <img src="view/img/icon-adidas-logo.svg" />
              </div>
            </a>
          </div>
          <div class="nav-list">
            <div class="hamburger">
              <div class="bar"></div>
            </div>
            <ul>
              <li class="stand">
                <a href="men.php" data-after="Men">MEN</a>
              </li>
              <li>
                <a href="woman.php" data-after="Women">WOMEN</a>
              </li>
              <li><a href="kid.php" data-after="Kids">KIDS</a></li>
              <li><a href="" data-after="Sports">SPORTS</a></li>
              <li><a href="" data-after="Brands">BRANDS</a></li>
              <li><a href="" data-after="Release date">RELEASE DATES</a></li>
              <li><a href="" data-after="Outlet">OUTLET</a></li>
            </ul>
          </div>
        </div>

        <div class="function">
          <div class="box">
            <input type="checkbox" id="check" />
            <div class="search-box">
              <input type="text" placeholder="Search" />
              <label for="check" class="icon">
                <i class="fas fa-search"></i>
              </label>
            </div>
          </div>

          <div class="user">
            <div class="user-login fnc-content">
              <button type="button">
                <a href="./view/account/login.php"><i class="ri-user-line"></i></a>
              </button>

              <?php
              session_start();
              include('config.php');
              if (isset($_POST['username'])) {
                $_SESSION['isUser'] = $_POST['username'];
                extract($_POST['username']);
              ?>

                <div class="user-info hid">
                  <span class="user-name">Welcome back
                    <?php if (!empty($_SESSION['isUser'])) {
                      echo $_SESSION['isUser'];
                    } ?> </span>
                  <a href="./view/account/profile.php"><button <? include('./view/account/profile.php'); ?> type="button" class="my-profile">My Profile</button></a>

                  <button type="button" class="exit">Logout</button>



                </div>

              <?php
              } else {

              ?>

                <?php

                if (!empty($_SESSION['isUser'])) {
                  echo '<div class="user-info"><span class="user-name">Welcome back ' . $_SESSION['isUser'] . '</span>' . '<a href="./view/account/profile.php"><button type="button" class="my-profile">My Profile</button></a>
                  <a href="./view/account/logout.php"><button type="button" class="exit">Logout</button></a>
                  <a href="/admin/index.php"><button type="button"class="exit" >Admin</button></a>

                </div>';
                }


                ?>
              <?php } ?>



            </div>

            <div class="heart-like fnc-content">
              <button type="button">
                <a href="#"><i class="ri-heart-2-line"></i></a>
              </button>
            </div>

            <div class="shopping-cart fnc-content">
              <button type="button">
                <a href="viewcard.php"><i class="ri-shopping-bag-line"></i></a>
              </button>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="page_1">
      <div class="dynamic-img-container">
        <!-- <picture
            ><source
              media="(min-width: 960px)"
              srcset="
                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_1920,w_1920/enVN/Images/football-fw22-worldcup-brandcampaign-launch-homepage-kickoff-masthead-d_tcm212-961909.jpg
              "
            />
            <source
              media="(min-width: 600px)"
              srcset="
                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_960,w_960/enVN/Images/football-fw22-worldcup-brandcampaign-launch-homepage-kickoff-masthead-t_tcm212-961910.jpg
              "
            />
            <source
              srcset="
                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_600,w_600/enVN/Images/football-fw22-worldcup-brandcampaign-launch-homepage-kickoff-masthead-m_tcm212-961906.jpg
              "
            />
            <img
              id="tcm:212-961912"
              src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_1920,w_1920/enVN/Images/football-fw22-worldcup-brandcampaign-launch-homepage-kickoff-masthead-d_tcm212-961909.jpg"
              class="performance-item"
              data-inject_ssr_performance_instrument=""
            />
          </picture> -->

        <picture>
          <source media="(min-width: 960px)" srcset="
                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_1920,w_1920/enVN/Images/football-fw22-worldcup-brandcampaign-launch-homepage-masthead-d_tcm212-960051.jpg
              " />
          <source media="(min-width: 600px)" srcset="
                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_960,w_960/enVN/Images/football-fw22-worldcup-brandcampaign-launch-homepage-masthead-t_tcm212-960052.jpg
              " />
          <source srcset="
                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_600,w_600/enVN/Images/football-fw22-worldcup-brandcampaign-launch-homepage-masthead-m_tcm212-960050.jpg
              " />
          <img class="high-res-picture" id="tcm:212-960053" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_1920,w_1920/enVN/Images/football-fw22-worldcup-brandcampaign-launch-homepage-masthead-d_tcm212-960051.jpg" decoding="async" loading="lazy" />
        </picture>
      </div>
      <div class="content_page-1">
        <div class="poster_content-1">
          <div class="logo">
            <picture>
              <source media="(min-width: 960px)" srcset="
                    https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/football-fw22-worldcup-brandcampaign-launch-homepage-kickoff-masthead-logo_tcm212-960468.png
                  " />
              <source media="(min-width: 600px)" srcset="
                    https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/football-fw22-worldcup-brandcampaign-launch-homepage-kickoff-masthead-logo_tcm212-960468.png
                  " />
              <source srcset="
                    https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/football-fw22-worldcup-brandcampaign-launch-homepage-kickoff-masthead-logo_tcm212-960468.png
                  " />
              <img class="high-res-picture" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/football-fw22-worldcup-brandcampaign-launch-homepage-kickoff-masthead-logo_tcm212-960468.png" alt="logo" decoding="sync" loading="eager" />
            </picture>
          </div>

          <div class="title-summary-container">
            <div class="summary">
              Four tournaments in the making. Lionel Messi prepares for FIFA
              World Cup 2022™ with an impossible rondo.
            </div>
          </div>

          <div class="explore_but">
            <div>
              <button type="button" class="xn_but">
                <a href="#">EXPLORE NOW
                  <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                  <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="loop" colors="primary:#000" state="intro" style="width: 30px; height: 30px; margin-left: 15px">
                  </lord-icon>
                </a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="page_3">
      <div class="visual-nav-redesign">
        <div class="header_container">
          <h2 class="">WHO ARE YOU SHOPPING FOR?</h2>
        </div>
        <div class="cards-wrapper">
          <div class="card">
            <div class="card-image">
              <div class="wallpaperWrapper">
                <div class="wall_container">
                  <picture>
                    <source media="(min-width: 960px)" srcset="
                          https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/nav-women-d_tcm212-819363.jpg
                        " />
                    <source media="(min-width: 600px)" srcset="
                          https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/nav-women-t_tcm212-819371.jpg
                        " />
                    <source srcset="
                          https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/nav-women-m_tcm212-819365.jpg
                        " />
                    <img class="high-res-picture" id="tcm:212-819378" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/nav-women-d_tcm212-819363.jpg" decoding="async" loading="lazy" />
                  </picture>
                </div>
              </div>
            </div>
            <p class="card-title">WOMEN</p>
          </div>
          <div class="card">
            <div class="card-image">
              <div class="wallpaperWrapper">
                <div class="wall_container">
                  <picture>
                    <source media="(min-width: 960px)" srcset="
                          https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/nav-men-d_tcm212-819364.jpg
                        " />
                    <source media="(min-width: 600px)" srcset="
                          https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/nav-men-t_tcm212-819369.jpg
                        " />
                    <source srcset="
                          https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/nav-men-m_tcm212-819366.jpg
                        " />
                    <img class="high-res-picture" id="tcm:212-819377" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/nav-men-d_tcm212-819364.jpg" decoding="async" loading="lazy" />
                  </picture>
                </div>
              </div>
            </div>
            <p class="card-title">MEN</p>
          </div>
          <div class="card">
            <div class="card-image">
              <div class="wallpaperWrapper">
                <div class="wall_container">
                  <picture>
                    <source media="(min-width: 960px)" srcset="
                          https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/nav-kids-d_tcm212-819367.jpg
                        " />
                    <source media="(min-width: 600px)" srcset="
                          https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/nav-kids-t_tcm212-819368.jpg
                        " />
                    <source srcset="
                          https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/nav-kids-m_tcm212-819370.jpg
                        " />
                    <img class="high-res-picture" id="tcm:212-819376" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/nav-kids-d_tcm212-819367.jpg" decoding="async" loading="lazy" />
                  </picture>
                </div>
              </div>
            </div>
            <p class="card-title">KIDS</p>
          </div>
        </div>
      </div>
    </section>

    <section id="page_2">
      <div class="wrapper">
        <div class="player">
          <!-- <video
              src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto/video/upload/global%20brand%20publishing/Statement/fw22-collaboration-archive-sale/fw22-archive-sale-launch-early-access-catlp-mh-d.mp4"
              preload="auto"
              loop="true"
              playsinline=""
              webkit-playsinline=""
              x5-playsinline=""
              style="width: 100%; height: 100%"
              muted="true"
              autoplay="true"
              id="collaboration"
            ></video> -->
          <video src="https://brand.assets.adidas.com/image/upload/q_auto,vc_auto/enVN/Images/football-fw22-federations-agnostic-excluding-belgium-hp-mh-d_tcm212-931507.mp4" preload="auto" autoplay="" loop="" playsinline="" webkit-playsinline="" x5-playsinline="" style="width: 100%; height: 100%" muted="true" autoplay="true" id="fifa"></video>
        </div>

        <div class="controls">
          <a class="icon_but" onclick="changePath()">
            <svg class="icon-border" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="pause-icon">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 14H17V30H19V14ZM27 14H25V30H27V14Z" fill="white" class="pathcon" data-id="pause"></path>
            </svg>
          </a>
        </div>
      </div>

      <div class="content_page-2">
        <div class="poster_content-2">
          <div class="logo">
            <picture>
              <source media="(min-width: 960px)" srcset="
                    https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/Adidas-Logo-White-Desktop_tcm212-924458.png
                  " />
              <source media="(min-width: 600px)" srcset="
                    https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/Adidas-Logo-White-Tablet_tcm212-924461.png
                  " />
              <source srcset="
                    https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/Adidas-Logo-White-Mobile_tcm212-924460.png
                  " />
              <img class="high-res-picture___3SJ41 loaded___3ltPt" id="tcm:212-924475" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/Adidas-Logo-White-Desktop_tcm212-924458.png" alt="logo" decoding="async" loading="lazy" />
            </picture>
          </div>

          <div class="title-summary-container-2">
            <!-- <div>
                <h2 class="title_heading">COLLABORATIONS ARCHIVE SALE</h2>
              </div> -->

            <div class="summary">
              <!-- Step inside to find up to 50% off hand picked pieces -->
              <h2 class="title_heading">FIFA WORLD CUP 2022™ KITS</h2>
            </div>
          </div>

          <div class="sinside_but">
            <div>
              <button type="button" class="si_but">
                <a href="#">STEP INSIDE
                  <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                  <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="loop" colors="primary:#000" state="intro" style="width: 30px; height: 30px; margin-left: 15px">
                  </lord-icon>
                </a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="gsap_scroll-wh">
      <div class="trigger-wh trigtext">
        <span>What's hot</span>
        <span class="illo">
          <img width="173px" src="view/img/icon-adidas-scroll-logo.svg" /></span>
        <span>What's hot</span>
        <span class="illo">
          <img width="173px" src="view/img/icon-adidas-scroll-logo.svg" /></span>
        <span>What's hot</span>
        <span class="illo">
          <img width="173px" src="view/img/icon-adidas-scroll-logo.svg" /></span>
        <span>What's hot</span>
        <span class="illo">
          <img width="173px" src="view/img/icon-adidas-scroll-logo.svg" /></span>
        <span>What's hot</span>
        <span class="illo">
          <img width="173px" src="view/img/icon-adidas-scroll-logo.svg" /></span>
        <span>What's hot</span>
        <span class="illo">
          <img width="173px" src="view/img/icon-adidas-scroll-logo.svg" /></span>
        <span>What's hot</span>
        <span class="illo">
          <img width="173px" src="view/img/icon-adidas-scroll-logo.svg" /></span>
      </div>
    </section>

    <section id="page_4" class="carouSwip">
      <div class="carousel">
        <div class="carousel_content">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide s1">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <picture>
                        <source media="(min-width: 960px)" srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-grinch-tcc-d_tcm212-959762.jpg
                            " />
                        <source media="(min-width: 600px)" srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-grinch-tcc-t_tcm212-959763.jpg
                            " />
                        <source srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-grinch-tcc-m_tcm212-959760.jpg
                            " />
                        <img class="high-res-picture___3SJ41 loaded___3ltPt img___zgj1u" id="tcm:212-959767" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-grinch-tcc-d_tcm212-959762.jpg" alt="A red background with a pencil drawing of the Grinch holding the green Forum sneaker." decoding="async" loading="lazy" />
                      </picture>
                    </div>
                  </div>
                </div>
                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">adidas Originals X The Grinch</strong>
                  </span>
                  <p class="summary_teaser">
                    Go Grinch or go home with these Forum Lows.
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="PREVIEW NOW">PREVIEW NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s2">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <!-- <picture
                          ><source
                            media="(min-width: 960px)"
                            srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-sporty_and_rich-hp-tcc-ftw-d_tcm212-952580.jpg
                            " />
                          <source
                            media="(min-width: 600px)"
                            srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-sporty_and_rich-hp-tcc-ftw-t_tcm212-952582.jpg
                            " />
                          <source
                            srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-sporty_and_rich-hp-tcc-ftw-m_tcm212-952579.jpg
                            " />
                          <img
                            class="high-res-picture___3SJ41 loaded___3ltPt img___zgj1u"
                            id="tcm:212-952590"
                            src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-sporty_and_rich-hp-tcc-ftw-d_tcm212-952580.jpg"
                            alt="The white adidas X Sporty &amp; Rich Samba 0G displayed on a statue surrounded by nature."
                            decoding="async"
                            loading="lazy"
                        /></picture> -->

                      <video muted loop="" autoplay="" playsinline="" src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto,c_scale,w_0.5/video/upload/global%20brand%20publishing/HBS/Tennis/fw22-stanniversary/fw22-stanniversary-launch-dotcom-glp-men-tc-carousel-d.mp4"></video>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">HAPPY 50TH STANNIVERSARY</strong>
                  </span>
                  <p class="summary_teaser">
                    It's the 50th anniversary of adidas and Stan Smith's
                    partnership. Celebrate with us.
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s3">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <picture>
                        <source media="(min-width: 960px)" srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/my-tc-hp_tcm212-942051.jpg
                            " />
                        <source media="(min-width: 600px)" srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/my-tc-hp_tcm212-942051.jpg
                            " />
                        <source srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/my-tc-hp_tcm212-942051.jpg
                            " />
                        <img class="high-res-picture___3SJ41 loaded___3ltPt img___zgj1u" id="tcm:212-957629" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/my-tc-hp_tcm212-942051.jpg" decoding="async" loading="lazy" />
                      </picture>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">ADICLUB IS LIVE NOW. GET MORE OF WHAT YOU
                      LOVE​&ZeroWidthSpace;​</strong>
                  </span>
                  <p class="summary_teaser">
                    Join adiClub now and enjoy 15% reward as a new member.
                    T&Cs apply.​&ZeroWidthSpace;
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s4">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <!-- <picture
                          ><source
                            media="(min-width: 960px)"
                            srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-ISC-trend-pack-nov-global-launch-hp-tc-v1-dual-gender-d_tcm212-954474.jpg
                            " />
                          <source
                            media="(min-width: 600px)"
                            srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-ISC-trend-pack-nov-global-launch-hp-tc-v1-dual-gender-t_tcm212-954472.jpg
                            " />
                          <source
                            srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-ISC-trend-pack-nov-global-launch-hp-tc-v1-dual-gender-m_tcm212-954468.jpg
                            " />
                          <img
                            class="high-res-picture___3SJ41 loaded___3ltPt img___zgj1u"
                            id="tcm:212-954493"
                            src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-ISC-trend-pack-nov-global-launch-hp-tc-v1-dual-gender-d_tcm212-954474.jpg"
                            alt="Three models wearing adidas Originals Centre Stage collection."
                            decoding="async"
                            loading="lazy"
                        /></picture> -->

                      <video muted loop="" autoplay="" playsinline="" src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto,c_scale,w_0.5/video/upload/running-fw21-adiospro3-launch-glp-teaser-carousel-animated-d_xi7ilr.mp4"></video>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">ADIZERO ADIOS PRO 3</strong>
                  </span>
                  <p class="summary_teaser">
                    Whatever it takes to go beyond fast.
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s5">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <picture>
                        <source media="(min-width: 960px)" srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/collection-FW22-Thebe_Magugu-2-global-educate-hp-teaser-carousel_tcm212-928237.jpg
                            " />
                        <source media="(min-width: 600px)" srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/collection-FW22-Thebe_Magugu-2-global-educate-hp-teaser-carousel_tcm212-928237.jpg
                            " />
                        <source srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/collection-FW22-Thebe_Magugu-2-global-educate-hp-teaser-carousel_tcm212-928237.jpg
                            " />
                        <img class="high-res-picture___3SJ41 loaded___3ltPt img___zgj1u" id="tcm:212-928280" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/collection-FW22-Thebe_Magugu-2-global-educate-hp-teaser-carousel_tcm212-928237.jpg" alt="Model wears adidas THEBE MAGUGU collection" decoding="async" loading="lazy" />
                      </picture>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">adidas x Thebe Magugu</strong>
                  </span>
                  <p class="summary_teaser">
                    The latest collection of sporting vibrancy straight out of
                    South Africa is here!
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s6">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <video muted="" loop="" autoplay="" playsinline="" src="https://brand.assets.adidas.com/image/upload/q_auto,vc_auto,c_scale,w_0.5/enVN/Images/football-fw22-federations-agnostic-excluding-belgium-hp-tcc_tcm212-931511.mp4"></video>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">FIFA WORLD CUP 2022™ KITS</strong>
                  </span>
                  <p class="summary_teaser">
                    It's time to show your colours. Get united by the love of
                    the beautiful game.
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s7">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <video muted="" loop="" autoplay="" playsinline="" src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto,c_scale,w_0.5/video/upload/studioa-dtc-samba_carry_over-fw22-hp-teaser-carousel-dmt_eqood8.mp4"></video>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">THE LEGACY LIVES ON</strong>
                  </span>
                  <p class="summary_teaser">From stadium to the streets.</p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s8">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <video muted loop="" autoplay="" playsinline="" src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto,c_scale,w_0.5/video/upload/global%20brand%20publishing/football/FW22%20%7C%20World%20Cup%20%7C%20Inclusivity%20Drops/football-fw22-worldcup-inclusivitydrop-launch-homepage-alrihlapack-tcc-d.mp4"></video>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">Al Rihla pack</strong>
                  </span>
                  <p class="summary_teaser">
                    Speed. Control. Touch — Our elevated boot pack inspired by
                    the vibrant colours of the World Cup Match Ball.
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s9">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <video muted loop="" autoplay="" playsinline="" src="https://brand.assets.adidas.com/image/upload/q_auto,vc_auto,c_scale,w_0.5/enVN/Images/nmd-tcars_tcm212-954877.mp4"></video>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">THE NMD EVOLVES</strong>
                  </span>
                  <p class="summary_teaser">
                    The NMD_V3 reimagines the past whilst looking to the
                    future. It’s time to create new paths.
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s10">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <video muted loop="" autoplay="" playsinline="" src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto,c_scale,w_0.5/video/upload/yoga-fw22-make_space-launch-teaser_carousel-d_i0onzm.mp4"></video>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">Ready for yoga</strong>
                  </span>
                  <p class="summary_teaser">
                    A versatile yoga collection designed for comfort.
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s11">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <picture>
                        <source media="(min-width: 960px)" srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/fwtc_tcm212-741942.jpg
                            " />
                        <source media="(min-width: 600px)" srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/fwtc_tcm212-741942.jpg
                            " />
                        <source srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/fwtc_tcm212-741942.jpg
                            " />
                        <img class="high-res-picture___3SJ41 loaded___3ltPt img___zgj1u" id="tcm:212-741944" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/fwtc_tcm212-741942.jpg" decoding="async" loading="lazy" />
                      </picture>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">adidas Campus 80s South Park Towelie</strong>
                  </span>
                  <p class="summary_teaser">
                    Towelie — reincarnated in a Campus shoe. Available Now.
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s12">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <picture>
                        <source media="(min-width: 960px)" srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-always-originals-sustain-hp-tc-01-d_tcm212-897674.jpg
                            " />
                        <source media="(min-width: 600px)" srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-always-originals-sustain-hp-tc-01-t_tcm212-897673.jpg
                            " />
                        <source srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-always-originals-sustain-hp-tc-01-m_tcm212-897675.jpg
                            " />
                        <img class="high-res-picture___3SJ41 loaded___3ltPt img___zgj1u" id="tcm:212-897681" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/originals-fw22-always-originals-sustain-hp-tc-01-d_tcm212-897674.jpg" alt="Always Original collection" decoding="async" loading="lazy" />
                      </picture>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">MADE FOR EVERY STORY</strong>
                  </span>
                  <p class="summary_teaser">
                    No matter your size, shape, gender, or style. This is
                    Always Original.
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <button class="swiper-button-next">
              <span class="next_icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="12" fill="none">
                  <path fill="#000" fill-rule="evenodd" d="M20.175 7H0V5h20.175l-3.293-3.293L18.296.293 24.003 6l-5.707 5.707-1.414-1.414L20.175 7Z" clip-rule="evenodd" />
                </svg>
              </span>
            </button>

            <button class="swiper-button-prev">
              <span class="prev_icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="12" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.825 6.99997H25V4.99997H4.825L8.118 1.70697L6.704 0.292969L0.997 5.99997L6.704 11.707L8.118 10.293L4.825 6.99997Z" fill="#000" />
                </svg>
              </span>
            </button>
            <!-- <div class="swiper-pagination"></div> -->
          </div>
        </div>
      </div>
    </section>

    <section id="page_5">
      <div class="content_page-5">
        <div class="wallpaperWrapper">
          <div class="wall_container">
            <picture>
              <source media="(min-width: 960px)" srcset="
                    https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-tcc-background-d_tcm221-967809.jpg
                  " />
              <source media="(min-width: 600px)" srcset="
                    https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-tcc-background-t_tcm221-967807.jpg
                  " />
              <source srcset="
                    https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-tcc-background-m_tcm221-967806.jpg
                  " />
              <img class="high-res-picture" id="tcm:221-967813" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-tcc-background-d_tcm221-967809.jpg" decoding="async" loading="lazy" />
            </picture>
          </div>
        </div>

        <div class="carousel">
          <div class="carousel_content">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide s1">
                  <div class="card-image">
                    <div class="wallpaperWrapper">
                      <div class="wall_container">
                        <picture>
                          <source media="(min-width: 960px)" srcset="
                                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-ultraboost-tcc_tcm221-967808.jpg
                              " />
                          <source media="(min-width: 600px)" srcset="
                                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-ultraboost-tcc_tcm221-967808.jpg
                              " />
                          <source srcset="
                                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-ultraboost-tcc_tcm221-967808.jpg
                              " />
                          <img class="high-res-picture___3SJ41 loaded___3ltPt img___zgj1u" id="tcm:221-967814" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-ultraboost-tcc_tcm221-967808.jpg" decoding="async" loading="lazy" />
                        </picture>
                      </div>
                    </div>
                  </div>
                  <div class="teaser_content">
                    <span class="teaser_title">
                      <strong class="str_title">UP TO 40% OFF ULTRABOOST</strong>
                    </span>
                    <p class="summary_teaser">
                      Enjoy instant comfort and energy return with these
                      responsive Boost shoes.
                    </p>
                    <div class="teaser_card">
                      <button type="button" class="teaser_but">
                        <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide s2">
                  <div class="card-image">
                    <div class="wallpaperWrapper">
                      <div class="wall_container">
                        <picture>
                          <source media="(min-width: 960px)" srcset="
                                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-fleece-tcc_tcm221-967803.jpg
                              " />
                          <source media="(min-width: 600px)" srcset="
                                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-fleece-tcc_tcm221-967803.jpg
                              " />
                          <source srcset="
                                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-fleece-tcc_tcm221-967803.jpg
                              " />
                          <img class="high-res-picture___3SJ41 loaded___3ltPt img___zgj1u" id="tcm:221-967810" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-fleece-tcc_tcm221-967803.jpg" decoding="async" loading="lazy" />
                        </picture>
                      </div>
                    </div>
                  </div>

                  <div class="teaser_content">
                    <span class="teaser_title">
                      <strong class="str_title">FLEECE UP TO 60% OFF</strong>
                    </span>
                    <p class="summary_teaser">
                      From soft hoodies to warm joggers, find styles that make
                      the holidays cozy.
                    </p>
                    <div class="teaser_card">
                      <button type="button" class="teaser_but">
                        <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide s3">
                  <div class="card-image">
                    <div class="wallpaperWrapper">
                      <div class="wall_container">
                        <picture>
                          <source media="(min-width: 960px)" srcset="
                                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-footwear-tcc_tcm221-967804.jpg
                              " />
                          <source media="(min-width: 600px)" srcset="
                                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-footwear-tcc_tcm221-967804.jpg
                              " />
                          <source srcset="
                                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-footwear-tcc_tcm221-967804.jpg
                              " />
                          <img class="high-res-picture___3SJ41 loaded___3ltPt img___zgj1u" id="tcm:221-967811" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-footwear-tcc_tcm221-967804.jpg" decoding="async" loading="lazy" />
                        </picture>
                      </div>
                    </div>
                  </div>

                  <div class="teaser_content">
                    <span class="teaser_title">
                      <strong class="str_title">FOOTWEAR FAVES UNDER $100​</strong>
                    </span>
                    <p class="summary_teaser">
                      Gift the iconic styles everyone loves, from Stan Smith
                      to Superstar.
                    </p>
                    <div class="teaser_card">
                      <button type="button" class="teaser_but">
                        <span class="card_content" title="SIGN UP NOW">SHOP NOW</span>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide s4">
                  <div class="card-image">
                    <div class="wallpaperWrapper">
                      <div class="wall_container">
                        <picture>
                          <source media="(min-width: 960px)" srcset="
                                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-stocking-tcc_tcm221-967805.jpg
                              " />
                          <source media="(min-width: 600px)" srcset="
                                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-stocking-tcc_tcm221-967805.jpg
                              " />
                          <source srcset="
                                https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-stocking-tcc_tcm221-967805.jpg
                              " />
                          <img class="high-res-picture___3SJ41 loaded___3ltPt img___zgj1u" id="tcm:221-967812" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/promo-fw22-blackfriday-stocking-tcc_tcm221-967805.jpg" decoding="async" loading="lazy" />
                        </picture>
                      </div>
                    </div>
                  </div>

                  <div class="teaser_content">
                    <span class="teaser_title">
                      <strong class="str_title">STOCKING STUFFERS UNDER $30</strong>
                    </span>
                    <p class="summary_teaser">
                      Stock up on hats, slides, socks, and more for those
                      last-minute gifts.
                    </p>
                    <div class="teaser_card">
                      <button type="button" class="teaser_but">
                        <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <button class="swiper-button-next">
                <span class="next_icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="12" fill="none">
                    <path fill="#000" fill-rule="evenodd" d="M20.175 7H0V5h20.175l-3.293-3.293L18.296.293 24.003 6l-5.707 5.707-1.414-1.414L20.175 7Z" clip-rule="evenodd" />
                  </svg>
                </span>
              </button>

              <button class="swiper-button-prev">
                <span class="prev_icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="12" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.825 6.99997H25V4.99997H4.825L8.118 1.70697L6.704 0.292969L0.997 5.99997L6.704 11.707L8.118 10.293L4.825 6.99997Z" fill="#000" />
                  </svg>
                </span>
              </button>
              <!-- <div class="swiper-pagination"></div> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="gsap_scroll-td">
      <div class="trigger-td trigtext">
        <span>Trending</span>
        <span class="illo">
          <img width="173px" src="view/img/icon-adidas-scroll-logo.svg" /></span>
        <span>Trending</span>
        <span class="illo">
          <img width="173px" src="view/img/icon-adidas-scroll-logo.svg" /></span>
        <span>Trending</span>
        <span class="illo">
          <img width="173px" src="view/img/icon-adidas-scroll-logo.svg" /></span>
        <span>Trending</span>
        <span class="illo">
          <img width="173px" src="view/img/icon-adidas-scroll-logo.svg" /></span>
        <span>Trending</span>
        <span class="illo">
          <img width="173px" src="view/img/icon-adidas-scroll-logo.svg" /></span>
        <span>Trending</span>
        <span class="illo">
          <img width="173px" src="view/img/icon-adidas-scroll-logo.svg" /></span>
        <span>Trending</span>
        <span class="illo">
          <img width="173px" src="view/img/icon-adidas-scroll-logo.svg" /></span>
      </div>
    </section>

    <section id="page_6" class="carouSwip">
      <div class="carousel">
        <div class="carousel_content">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide s1">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <video muted loop="" autoplay="" playsinline="" src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto,c_scale,w_0.5/video/upload/football-fw22-manchesterunited-away-hp-tcc_pm02ak.mp4"></video>
                    </div>
                  </div>
                </div>
                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">MAN UTD 22/23 AWAY KIT</strong>
                  </span>
                  <p class="summary_teaser">
                    The legendary classic white is back combined with red and
                    black 3 stripes.
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s2">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <video muted loop="" autoplay="" playsinline="" src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto,c_scale,w_0.5/video/upload/2262440_-_APAC_SEA_DTC_Exclusive_App_Onsite_TC_B1_1050x1400_mq9asa.mp4"></video>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">Here, and only here​</strong>
                  </span>
                  <p class="summary_teaser">
                    ONLY AT ADIDAS​ From special collections to one-time
                    drops, all our exclusive products are here to discover in
                    one place.
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s3">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <video muted loop="" autoplay="" playsinline="" src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto,c_scale,w_0.5/video/upload/running-ss22-ultraboost-launch-hp-teaser-carousel-dual-d_r7lyzp.mp4"></video>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">SUPREME ENERGY RETURN. 360° FIT IMPROVEMENT.​</strong>
                  </span>
                  <p class="summary_teaser">
                    Own your energy with Ultraboost 22.
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s4">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <video muted loop="" autoplay="" playsinline="" src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto,c_scale,w_0.5/video/upload/lace-triple-black-hp-teaser-carousel-dtm_1_ppd0pi.mp4"></video>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">TRIPLE BLACK COLLECTION</strong>
                  </span>
                  <p class="summary_teaser">Dark mode enabled.</p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s5">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <video muted loop="" autoplay="" playsinline="" src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto,c_scale,w_0.5/video/upload/training-ss22-bra_rev-launch-hp-teaser_carousel-d_azo0a8.mp4"></video>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">SUPPORT IS EVERYTHING</strong>
                  </span>
                  <p class="summary_teaser">
                    Sports bras for every fit and move.
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="swiper-slide s6">
                <div class="card-image">
                  <div class="wallpaperWrapper">
                    <div class="wall_container">
                      <picture>
                        <source media="(min-width: 960px)" srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/running-shoe-finder-attract-fw22-digital-hp-teaser-carousel-d_tcm212-938990.jpg
                            " />
                        <source media="(min-width: 600px)" srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/running-shoe-finder-attract-fw22-digital-hp-teaser-carousel-t_tcm212-938994.jpg
                            " />
                        <source srcset="
                              https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/running-shoe-finder-attract-fw22-digital-hp-teaser-carousel-m_tcm212-938992.jpg
                            " />
                        <img class="high-res-picture___3SJ41 loaded___3ltPt img___zgj1u" id="tcm:212-939022" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/running-shoe-finder-attract-fw22-digital-hp-teaser-carousel-d_tcm212-938990.jpg" alt="Supernova adidas running shoe superimposed over a split-screen of a pink background and a landscape." decoding="async" loading="lazy" />
                      </picture>
                    </div>
                  </div>
                </div>

                <div class="teaser_content">
                  <span class="teaser_title">
                    <strong class="str_title">Ready, set, find.</strong>
                  </span>
                  <p class="summary_teaser">
                    Get the perfect fit for your run with the adidas Running
                    Shoe Finder
                  </p>
                  <div class="teaser_card">
                    <button type="button" class="teaser_but">
                      <span class="card_content" title="SHOP NOW">SHOP NOW</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <button class="swiper-button-next">
              <span class="next_icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="12" fill="none">
                  <path fill="#000" fill-rule="evenodd" d="M20.175 7H0V5h20.175l-3.293-3.293L18.296.293 24.003 6l-5.707 5.707-1.414-1.414L20.175 7Z" clip-rule="evenodd" />
                </svg>
              </span>
            </button>

            <button class="swiper-button-prev">
              <span class="prev_icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="12" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.825 6.99997H25V4.99997H4.825L8.118 1.70697L6.704 0.292969L0.997 5.99997L6.704 11.707L8.118 10.293L4.825 6.99997Z" fill="#000" />
                </svg>
              </span>
            </button>
            <!-- <div class="swiper-pagination"></div> -->
          </div>
        </div>
      </div>
    </section>

    <section id="page_7">
      <div class="component-wrapper">
        <div class="popular_key">
          <div class="content_pop">
            <div class="header_pop">
              <h2 class="title_pop">NOW POPULAR IN MEN'S</h2>
            </div>
            <div class="keyword_content">
              <div class="keywords">
                <div class="keyword_wrapper">
                  <a href="#" class="keyword_redesign">tracksuits</a>
                </div>
                <div class="keyword_wrapper">
                  <a href="#" class="keyword_redesign">running shoes</a>
                </div>
                <div class="keyword_wrapper">
                  <a href="#" class="keyword_redesign">shoes</a>
                </div>
                <div class="keyword_wrapper">
                  <a href="#" class="keyword_redesign">jacket</a>
                </div>
                <div class="keyword_wrapper">
                  <a href="#" class="keyword_redesign">slides</a>
                </div>
                <div class="keyword_wrapper">
                  <a href="#" class="keyword_redesign">hoodies</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="page_8">
      <div class="seo_component">
        <div class="seo_container">
          <div class="seo_row">
            <article class="seo-first-column">
              <h2 class="seo_heading">
                STORIES, STYLES AND SPORTSWEAR AT ADIDAS, SINCE 1949
              </h2>

              <div class="seo_content">
                Sport keeps us fit. Keeps you mindful. Brings us together.
                Through sport we have the power to change lives. Whether it is
                through stories of inspiring athletes. Helping you to get up
                and get moving. Sportswear featuring the latest technologies,
                to up your performance. Beat your PB.adidas offers a home to
                the runner, the basketball player, the soccer kid, the fitness
                enthusiast. The weekend hiker that loves to escape the city.
                The yoga teacher that spreads the moves. The 3-Stripes are
                seen in the music scene. On stage, at festivals. Our sports
                clothing keeps you focused before that whistle blows. During
                the race. And at the finish lines. We’re here to
                supportcreators. Improve their game. Their lives. And change
                the world. <br /><br />
                adidas is about more than sportswear and workout clothes. We
                partner with the best in the industry to co-create. This way
                we offer our fans the sports apparel and style that match
                their athletic needs, while keeping sustainability in mind.
                We’re here to support creators. Improve their game. Create
                change. And we think about the impact we have on our world.
              </div>
            </article>

            <article class="seo-second-column">
              <h2 class="seo_heading">WORKOUT CLOTHES, FOR ANY SPORT</h2>

              <div class="seo_content">
                adidas designs for and with athletes of all kinds. Creators,
                who love to change the game. Challenge conventions. Break the
                rules and define new ones. Then break them again. We supply
                teams and individuals with athletic clothing pre-match. To
                stay focussed. We design sports apparel that get you to the
                finish line. To win the match. We support women, with bras and
                tights made for purpose. From low to high support. Maximum
                comfort. We design, innovate and itterate. Testing new
                technologies in action. On the pitch, the tracks, the court,
                the pool. Retro workout clothes inspire new streetwear
                essentials. Like NMD, Ozweego and our Firebird tracksuits.
                Classic sports models are brought back to life. Like Stan
                Smith. And Superstar. Now seen on the streets and the stages.
                <br /><br />
                Through our collections we blur the borders between high
                fashion and high performance. Like our adidas by Stella
                McCartney athletic clothing collection – designed to look the
                part inside and outside of the gym. Or some of our adidas
                Originals lifestyle pieces, that can be worn as sportswear
                too. Our lives are constantly changing. Becoming more and more
                versatile. And adidas designs with that in mind.
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- --------------------Footer------------------------- -->
  <footer class="footer">
    <div class="footer-interactive">
      <div class="footer_newsletter">
        <div class="wrapper row">
          <div class="left_content">
            <h4 class="heading_letter">BECOME A MEMBER & GET 15% OFF</h4>
          </div>
          <div class="right_content">
            <div>
              <button type="button" class="suff">
                <a href="./view/account/login.php">SIGN UP FOR FREE
                  <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                  <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="loop" colors="primary:#fff" state="intro" style="width: 30px; height: 30px; margin-left: 15px">
                  </lord-icon>
                </a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_top">
      <div class="footer_container">
        <div class="footer_main">
          <ul class="footer_group">
            <li class="footer_link headline">
              <a href="" class="footer_link-item">PRODUCTS</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Shoes</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Clothing</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Accessories</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">New Arrivals</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Release Date</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Top Seller</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">adidas Exclusive</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Outlet</a>
            </li>
          </ul>
          <ul class="footer_group">
            <li class="footer_link headline">
              <a href="" class="footer_link-item">SPORTS</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Running</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Golf</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Gym & Training</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Football</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Basketball</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Tennis</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Outdoor</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Swimming</a>
            </li>
          </ul>
          <ul class="footer_group">
            <li class="footer_link headline">
              <a href="" class="footer_link-item">COLLECTIONS</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">IVY PARK</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Pharrell Williams</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Ultraboost</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Pureboost</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Predator</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">X</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Copa</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Continental 80</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Superstar</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Stan Smith</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">nmd</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">ZX</a>
            </li>
          </ul>
          <ul class="footer_group">
            <li class="footer_link headline">
              <a href="" class="footer_link-item">COMPANY INFO</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">About Us</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Careers</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Press</a>
            </li>
          </ul>
          <ul class="footer_group">
            <li class="footer_link headline">
              <a href="" class="footer_link-item">SUPPORT</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Help & Customer</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Service</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Store Locator</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Size Charts</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Payment</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Delivery</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Returns & Refunds</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Promotions</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Sitemap</a>
            </li>
          </ul>
          <ul class="footer_group">
            <li class="footer_link headline">
              <a href="" class="footer_link-item">FOLLOW US</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">
                <ion-icon name="logo-tiktok"></ion-icon>
              </a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <button title="ScrollToTop" onclick="scrollToTop()" class="scoll-to-top">
        <span class="top_icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="12" fill="none">
            <path fill="#fff" fill-rule="evenodd" d="M20.175 7H0V5h20.175l-3.293-3.293L18.296.293 24.003 6l-5.707 5.707-1.414-1.414L20.175 7Z" clip-rule="evenodd"></path>
          </svg>
        </span>
      </button>
    </div>
    <div class="footer_bottom">
      <div class="footer_container">
        <ol class="footer_legal">
          <li class="legal_item">
            <a href="" class="legal_link">Privacy Policy</a>
          </li>
          <li class="legal_item">
            <a href="" class="legal_link">Terms and Conditions</a>
          </li>
          <li class="legal_item">
            <a href="" class="legal_link">Imprint</a>
          </li>
          <li class="legal_item last_item">
            <a href="" class="legal_link">© 2020 adidas Vietnam Company Limited</a>
          </li>
        </ol>
      </div>
    </div>
  </footer>
  <!-- --------------------End Footer--------------------- -->

  <!-- --------------------Cursor------------------------- -->
  <div id="app">
    <div :class="[ 'g-cursor']">
      <div :style="cursorCircle" class="g-cursor__circle"></div>
      <!-- <div class="g-cursor__point" ref="point" :style="cursorPoint"></div> -->
    </div>
  </div>
  <!-- --------------------End Cursor--------------------- -->

  <!-- --------------------Link Script-------------------- -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.21/vue.min.js"></script> -->

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <script async src="view/js/index.js"></script>

  <script async src="view/js/scroll-trigger.js"></script>

  <script async src="view/js/swiper.js"></script>

  <!-- --------------------End Link Script---------------- -->
</body>

</html>