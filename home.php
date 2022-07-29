<?php include "components/data.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "components/header.php"; ?>
</head>

<body>

  <!-- ======= Navbar 2 ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    
    <?php include "components/navbar_2.php"; ?>

  </header><!-- End Navbar 2 -->



      <main id="main"> 


      <?php

        if(isset($_GET['page']))
        {
            if($_GET['page'] == "Contact")
            {
                include 'pages/contact.php';
            }
            elseif ($_GET['page'] == "Foto") 
            {
                include 'pages/foto.php';
            }
            elseif ($_GET['page'] == "Video")
            {
                include 'pages/video.php';
            }
            elseif ($_GET['page'] == "Certificate")
            {
                include 'pages/certificate.php';
            }
            elseif ($_GET['page'] == "About")
            {
                include 'pages/about.php';
            }
            elseif ($_GET['page'] == "Categories")
            {
                include 'pages/categories.php';
            }
            elseif  ($_GET['page'] == "Document_R")
            {
                include 'pages/document_requirements.php';
            }
            elseif ($_GET['page'] == "PressRelease_YISF")
            {
                include 'pages/PressRelease_YISF.php';
            }
            elseif ($_GET['page'] == "GuideBook")
            {
                include 'pages/guide_book.php';
            }
            elseif ($_GET['page'] == "Curation") 
            {
                include 'pages/curation.php';
            }
            elseif ($_GET['page'] == "news1")
            {
              include 'pages/news/1news.php';
            }
            elseif ($_GET['page'] == "news2")
            {
              include 'pages/news/2news.php';
            }
            elseif ($_GET['page'] == "news3")
            {
              include 'pages/news/3news.php';
            }
            elseif ($_GET['page'] == "news4")
            {
              include 'pages/news/4news.php';
            }
            elseif ($_GET['page'] == "news5")
            {
              include 'pages/news/5news.php';
            }
        }

      ?>

        </div>

    


  <!-- ======= Footer ======= -->
 

</body>

<?php include "components/footer.php"; ?>

</html>

