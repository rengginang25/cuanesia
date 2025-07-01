<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuanesia</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class = "main">
        <nav>
            <a href="#" class = "logo">
                <img src="images/logo.webp">

            </a>
            <ul class = "menu">
                <li><a href="#"class="active">Home</a></li>
                <li><a href="#webinars">Webinars</a></li>
                <li><a href="Classes/">Classes</a></li>
                <li><a href="#community">Community</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Bangun Perspektif Finansial Baru Bersama Cuanesia</h1>
            <p>Platform edukasi keuangan digital yang membantumu 
                memahami, merencanakan, dan mengelola keuangan pribadi 
                dengan cara yang mudah, interaktif, dan aplikatif.</p>
            <a class="main-btn" href="#features">Ayo Mulai!</a>
        </div>
    </header>

<!-- Ini 3 section yang itu -->

     <section class="features" id="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/ICON2.jpg"/>
                </div>
                <div class="f-text">
                    <h4>WEBINARS</h4>
                    <p>Tingkatkan wawasan finansialmu langsung dari para ahli lewat sesi webinar interaktif setiap pekan di Cuanesia yang membahas update market.</p>
                    <a href="#webinars" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/ICON4.jpg"/>
                </div>
                <div class="f-text">
                    <h4>ONLINE CLASSES</h4>
                    <p>Pelajari keuangan digital dari nol hingga mahir lewat kelas online terstruktur yang fleksibel dan praktis.</p>
                    <a href="Classes/" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/ICON3.jpg"/>
                </div>
                <div class="f-text">
                    <h4>COMMUNITY</h4>
                    <p>Gabung komunitas Discord Coinesia dan temukan ruang diskusi seru, modul gratis, airdrop, dan strategi market.</p>
                    <a href="#community" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>

<!-- Ini section webinar -->

    <section class="about" id = "webinars">
        <div class="about-img">
            <img src="images/seminar.png">
        </div>
        <div class="about-text">
            <h2>Dapatkan Pembelajaran Spesial dari Webinar Kami</h2>
            <p>Cuanesia menawarkan webinar yang menghadirkan beberapa tokoh keuangan penting dari seluruh dunia. Tokoh-tokoh ini tidak hanya akan memberikan materi
                saja, mereka juga akan membagikan pengalaman-pengalaman berharga mereka yang akan menjadi bekal spesial untuk para pemula dari luar sana. 
                Webinar spesial ini hanya bisa kamu akses di komunitas kami, jadi tunggu apalagi?
            </p>
            <a href="#community" class="main-btn">Gabung ke Komunitas</a>
        </div>
    </section>

<!-- Ini section Community -->

    <footer class="contact" id = "community">
        <div class="contact-heading">
            <h1>Join Our Community</h1>
            <p>Kami Tunggu Perjalanan Indah Anda bersama Cuanesia</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Nama Panjang Kamu..."/>
            <input type="email" name="email" placeholder="Gmail Kamu..."/>
            <textarea name="message" placeholder="Alasan Kamu Tertarik untuk Bergabung..."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </footer>
    
</body>
</html>