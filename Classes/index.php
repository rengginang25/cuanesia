<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Simpan pesan notifikasi ke dalam session
    $_SESSION['pesan_error'] = "Untuk memastikan kamu manusia, tolong login terlebih dahulu.";
    
    // Arahkan ke halaman login
    header("Location: ../login.php");
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preview Kelas - Cuanesia</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="main">
    <nav>
      <a href="/index.php" class="logo">
        <img src="/images/logo.webp" alt="Logo">
      </a>
      <ul class="menu">
          <li><a href="../index.php">Home</a></li>
          <li><a href="../index.php#webinars">Webinars</a></li>
          <li><a href="#" class="active">Classes</a></li>
          <li><a href="../index.php#community">Community</a></li>
          
          <?php
          if (isset($_SESSION['user_id'])) {
              echo '<li><span style="color: #ddb942; padding: 0 15px; line-height: 43px;">Halo, ' . htmlspecialchars($_SESSION['username']) . '</span></li>';
              echo '<li><a href="../logout.php">Logout</a></li>';
          }
          ?>
      </ul>
    </nav>
  </header>

  <section class="features">
    <h1 class="section-title">Preview Video Akses Gratis</h1>
    
    <div class="feature-container">
      
      <div class="feature-box">
        <div class="f-img">
          <img src="/images/Thumbnail 1.png" alt="Thumbnail Video Gratis 1">
        </div>
        <a href="https://youtu.be/oUc_TeouXaY" target="_blank" rel="noopener noreferrer" class="f-text-link">
          <div class="f-text0">
            <h4>Global Macro Economics</h4>
          </div>
        </a>
      </div>

      <div class="feature-box">
        <div class="f-img">
          <img src="/images/Thumbnail 2.png" alt="Thumbnail Video Gratis 2">
        </div>
        <a href="https://youtu.be/j744rR_DLTM" target="_blank" rel="noopener noreferrer" class="f-text-link">
          <div class="f-text0">
            <h4>Introduction to Crypto</h4>
          </div>
        </a>
      </div>

      <div class="feature-box">
        <div class="f-img">
          <img src="/images/Thumbnail 3.png" alt="Thumbnail Video Gratis 3">
        </div>
        <a href="https://youtu.be/-PxYTW77X-s" target="_blank" rel="noopener noreferrer" class="f-text-link">
          <div class="f-text0">
            <h4>BITCOIN VS ALTCOIN</h4>
          </div>
        </a>
      </div>
    </div>

    <h2 class="section-subtitle">Preview Video Akses Premium</h2>
    
    <div class="feature-container">

      <div class="feature-box">
        <div class="f-img">
          <img src="/images/Thumbnail 4.png" alt="Thumbnail Video Premium 1">
        </div>
        <a href="https://youtu.be/X-m7q4_f4XA" target="_blank" rel="noopener noreferrer" class="f-text-link">
          <div class="f-text">
            <h4>Crypto Fundamental Research</h4>
          </div>
        </a>
      </div>

      <div class="feature-box">
        <div class="f-img">
          <img src="/images/Thumbnail 5.png" alt="Thumbnail Video Premium 2">
        </div>
        <a href="https://youtu.be/ZRYSCpVtbEQ" target="_blank" rel="noopener noreferrer" class="f-text-link">
          <div class="f-text">
            <h4>Crypto Smart Money</h4>
          </div>
        </a>
      </div>

      <div class="feature-box">
        <div class="f-img">
          <img src="/images/Thumbnail 6.png" alt="Thumbnail Video Premium 3">
        </div>
        <a href="https://youtu.be/zE1MVDD_NgY" target="_blank" rel="noopener noreferrer" class="f-text-link">
          <div class="f-text">
            <h4>Crypto Smart Contract</h4>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section class="pricing-section">

    <h2 class="section-title2">Pilih Paketmu dan Ayo Bergabung</h2>

    <div class="pricing-images-container">
        <img src="/images/price(1).png" alt="Detail Paket Harga 1" class="pricing-image-item">
        
        <img src="/images/price(2).png" alt="Detail Paket Harga 2" class="pricing-image-item">
        
        <img src="/images/price(3).png" alt="Detail Paket Harga 3" class="pricing-image-item">
    </div>

    <a href="../index.php#community" class="main-bton">Gabung Sekarang</a>

  </section>

</body>
</html>