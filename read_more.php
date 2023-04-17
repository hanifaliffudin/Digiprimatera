<?php
include 'dbconnect.php';
// $insight_id = $_GET['id'];
$url = $_GET['title'];
$url_title = str_replace("+"," ",$url);
$sql = "SELECT * FROM insight where title like '%$url_title'";
$query = $db->query($sql);

$query->bindColumn('id', $id);
$query->bindColumn('bigPicture', $bigPicture);
$query->bindColumn('title', $title);
$query->bindColumn('date', $date);
$query->bindColumn('creator', $creator);
$query->bindColumn('content', $content);
$query->bindColumn('keyword', $keyword);

while ($row = $query->fetch(PDO::FETCH_BOUND)) {
            
  $date = date("d F Y", strtotime($date)); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/img/misc/favicon.png" />
    <meta
      name="description"
      content="Experienced for more than 12 years, we bring the experts & capabilities to help the client's organizations to accelerate & grow the business by digital transformations."
    />
    
    <meta
      name="keywords"
      content="Digiprimatera, DPS, Transformasi digital, Digitalisasi, Teknologi, Artificial intelligence, Bigdata, Document security, Digital platform, Digital services, Indonesia, Startup, Multichannel, Internet services, PT. Digital Prima Sejahtera, Cybersecurity, Digital banking, Layanan transformasi, Biometric, Sertifikasi (certified), meterai elektronik, produk digital <?php echo $keyword ?>"
    />
<meta name="author" content="" />

    <meta property="og:title" content="Digiprimatera" />
    <meta
      property="og:description"
      content="Perusahaan teknologi informasi & digital yang tersertifikasi dan berpengalaman membantu mempercepat jangkauan bisnis pelanggan melalui layanan transformasi digital."
    />
    <meta property="og:image" content="/img/logo.png" />
    <meta property="og:url" content="https://www.digiprimatera.co.id//" />
    <meta property="og:site_name" content="Digiprimatera" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="/img/logo.png" />
    <meta
      name="twitter:description"
      content="Perusahaan teknologi informasi & digital yang tersertifikasi dan berpengalaman membantu mempercepat jangkauan bisnis pelanggan melalui layanan transformasi digital."
    />
    <meta name="twitter:site" content="@DigiPrimatera" />
    <meta name="twitter:creator" content="@DigiPrimatera" />
    <title>Digital Prima Sejahtera</title>
    <!-- Bootstrap Core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom CSS-->
    <link href="css/main.css" rel="stylesheet" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7C96LNVDYS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7C96LNVDYS');
</script>
  </head>
  <body class="top" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Preloader-->
    <!-- <div id="preloader">
      <div id="status"></div>
    </div> -->
    <!-- Navigation-->
    <nav class="navbar navbar-unibody navbar-custom navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
          <button
            class="navbar-toggle"
            type="button"
            data-toggle="collapse"
            data-target=".navbar-main-collapse"
          >
            <span class="sr-only">Toggle navigation</span
            ><span class="icon-bar"></span><span class="icon-bar"></span
            ><span class="icon-bar"></span></button
          ><a class="navbar-brand page-scroll" href="#page-top">
            <!-- Text or Image logo--><img
              class="logo"
              src="/img/logo.png"
              alt="Logo" /><img
              class="logodark"
              src="/img/logodark.png"
              alt="Logo"
          /></a>
        </div>
        <div class="collapse navbar-collapse navbar-main-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="hidden"><a href="#page-top"></a></li>
            <li>
              <a href="/">Beranda <span class="caret"></span></a>
            </li>
            <li>
              <a href="/solusi">Solusi <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/solusi">Digital Bank Platform</a></li>
                <li><a href="/solusi">Digital Document Security</a></li>
                <li><a href="/solusi">Digital Transformation Services</a></li>
              </ul>
            </li>
            <li>
              <a href="/product-digital.html"
                >Produk Digital <span class="caret"></span
              ></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="/produk-digital/stempel-digital"
                    >STEMPEL DIGITAL (DIGI-STAMP)</a
                  >
                </li>
                <li>
                  <a href="/produk-digital/tanda-tangan-digital"
                    >TANDA TANGAN DIGITAL</a
                  >
                </li>
                <li>
                  <a href="/produk-digital/otentifikasi-sertifikat-digital"
                    >OTENTIFIKASI SERTIFIKAT DIGITAL</a
                  >
                </li>
                <li><a href="/produk-digital/keyla">KEYLA</a></li>
                <li>
                  <a href="/produk-digital/meterai-elektronik"
                    >METERAI ELEKTRONIK</a
                  >
                </li>
                <li>
                  <a href="/produk-digital/sistem-manajemen-dokumen"
                    >Sistem Manajemen Dokumen</a
                  >
                </li>
                <li>
                  <a href="/produk-digital/manajemen-aset-ti"
                    >Manajemen Aset TI</a
                  >
                </li>
                <li>
                  <a href="/produk-digital/pelacakan-aset-ti"
                    >Pelacakan Aset TI</a
                  >
                </li>
              </ul>
            </li>
            <li>
              <a href="/insight">Insight <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/artikel">Artikel</a></li>
                <li><a>Video</a></li>
                <li><a>Infografis</a></li>
              </ul>
            </li>
             <li>
              <a href="/tentang-kami">Tentang Kami <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/tentang-kami">Tentang DPS</a></li>
                <li><a href="/tentang-kami#keunggulan">Keunggulan Kami</a></li>
                <li><a href="/hubungi-kami">Hubungi Kami</a></li>
                <li><a href="/testimoni"> Testimoni</a></li>
              </ul>
            </li>
            <li class="visible-lg">&nbsp;</li>
            <li class="dropdown">
              <a class="dropdown-toggle" href="#"
                ><i class="fa fa-search fa-lg"></i><span class="caret"></span
              ></a>
              <ul class="dropdown-menu">
                <li>
                  <form class="search-form" method="post">
                    <button class="search-button" type="submit" title="Search">
                      <i class="fa fa-search fa-lg"></i>
                    </button>
                    <input
                      class="form-control search-field"
                      type="text"
                      placeholder="SEARCH"
                    />
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header-->
    <?php
          
                   
          ?>
    <header class="intro introhalf" <?php echo 'data-background="data:image/jpeg;base64,'.base64_encode( $bigPicture ).'"'; ?>>
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2><?php echo $title ; ?></h2>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="section-small" id="news-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <p><?php echo $content ; ?></p>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>   <!-- share -->
    <div class="share d-flex flex-md-column px-5 mb-5 px-md-0 mb-md-0">
      <a class="p-0 m-0"
        href="https://www.facebook.com/sharer/sharer.php?u=https://digiprimatera.co.id/read_more?title=<?php echo str_replace(" ","%2B",$url) ?>"
        target="_blank"
      >
        <span
          class="iconify"
          data-icon="bx:bxl-facebook"
          data-inline="false"
        ></span>
      </a>
      <a
        href="https://api.whatsapp.com/send?text=<?php echo $title ; ?>%20https%3A//digiprimatera.co.id/read_more?title=<?php echo str_replace(" ","%2B",$url) ?>"
        target="_blank"
      >
        <span class="iconify" data-icon="bx:bxl-whatsapp"></span>
      </a>
      <a
        href="https://twitter.com/intent/tweet?text=<?php echo $title ; ?>+https://digiprimatera.co.id/read_more?title=<?php echo str_replace(" ","%2B",$url) ?>"
        target="_blank"
      >
        <span
          class="iconify"
          data-icon="ant-design:twitter-outlined"
          data-inline="false"
        ></span>
      </a>
      <a
        href="mailto:?subject=<?php echo $title ; ?>&amp;body=<?php echo mb_strimwidth($content, 0, 150); ?> %0D%0Ahttps://digiprimatera.co.id/read_more?title=<?php echo str_replace(" ","%2B",$url) ?>"
        target="_blank"
      >
        <span
          class="iconify"
          data-icon="ant-design:mail-outlined"
          data-inline="false"
        ></span>
      </a>
    </div>
    </section>
   
    <!-- Footer Section-->
    <footer class="section-video bg-gray footer pb-2">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h4 class="mb-2">Tentang Kami</h4>
            <p class="text-justify">
              <b>PT Digital Prima Sejahtera (DIGIPRIMATERA)</b> - Berpengalaman
              selama lebih dari 12 tahun dengan tenaga ahli bersertifikasi,
              Digiprimatera membantu organisasi pelanggan mempercepat &
              memperluas jangkauan bisnis dengan pemanfaatan teknologi berbasis
              <i>big data</i>, menggunakan AI & Biometric secara
              <i>powerful</i> & aman.
            </p>
          </div>
          <div class="col-md-3 col-md-offset-1 footer-menu">
            <h4 class="mb-2">Alamat</h4>
            <div>
              Gedung 18 Parc Place SCBD Kingsland Tower Lantai 3 <br />
              Jl Jenderal Sudirman Kav 52-53, Senayan, Kebayoran Baru, <br />
              Jakarta Selatan 12190
            </div>
            <div class="py-2">
              <a target="_blank" href="tel:+622139721721"> +6221 3972 1721</a>
            </div>
            <p class="">
              <a href="mailto:support@digiprimatera.co.id"
                >support@digiprimatera.co.id</a
              >
            </p>
            <ul class="list-inline">
              <li>
                <a target="_blank" href="https://www.instagram.com/digiprimatera/"><i class="fa fa-instagram fa-fw fa-lg"></i></a>
              </li>
              <li>
                <a target="_blank" href="https://www.facebook.com/PT-Digital-Prima-Sejahtera-Digiprimatera-105763341809637"><i class="fa fa-facebook fa-fw fa-lg"></i></a>
              </li>
              <li>
                <a target="_blank" href="https://twitter.com/DigiPrimatera"><i class="fa fa-twitter fa-fw fa-lg"></i></a>
              </li>
<li>
                <a
                  target="_blank"
                  href="https://www.youtube.com/channel/UCaMpa9lJbOLXLbn-k9obrSA"
                  ><i class="fa fa-youtube" aria-hidden="true"></i
                ></a>
              </li>
            </ul>
          </div>

          <div class="col-md-3 col-md-offset-1 footer-menu">
            <h4 class="mb-2">PERUSAHAAN</h4>
            <h5 class="my-2"><a href="/karir">Karir</a></h5>
            <h5 class="my-2">
              <a href="/tentang-kami#sertifikasi">Sertifikasi Perusahaan</a>
            </h5>
            <h5 class="my-2">
              <a href="/tentang-kami#ahli">Sertifikasi Tenaga Ahli</a>
            </h5>
            <h5 class="my-2">
              <a href="/tentang-kami#teknologi">Teknologi</a>
            </h5>
          </div>
        </div>
        <div class="d-flex py-2 border-top justify-content-center">
          <div class="col">
            © 2022 Digital Prima Sejahtera
          </div>
        </div>
      </div>
   
    </footer>
    <!-- jQuery-->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/form.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/jquery.parallax.min.js"></script>
    <script src="js/jquery.circle-progress.min.js"></script>
    <script src="js/jquery.swipebox.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.smartmenus.js"></script>
    <!-- Custom Theme JavaScript-->
    <script src="js/main.js"></script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
  </body>
</html>