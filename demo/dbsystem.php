<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DB System Demo</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="../fontawesome/all.min.css" /> -->
     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
  </head>
  <body>
    <div id="spinner"><i class="fa fa-spinner fa-spin"></i></div>

    <header id="header" class="show-body">
      <div class="menu-btn">
        <div class="btn-line"></div>
        <div class="btn-line"></div>
        <div class="btn-line"></div>
      </div>

      <nav class="menu">
        <div class="menu-branding">
          <div class="brand-name">
            <!-- <h4>artisao</h4> -->
            <img src="../img/logo.png" alt="artisao-logo" class="logo" />
          </div>
        </div>
        <ul class="menu-nav">
          <li class="nav-item current">
            <a href="../index.php" class="nav-link">Home</a>
          </li>
          
        </ul>
      </nav>
    </header>

    <div class="sidebar">
      <div class="menu-branding">
        <div class="brand-name">
          <!-- <h4>artisao</h4> -->
          <img src="../img/logo.png" alt="artisao-logo" class="logo" />
        </div>
      </div>
      <ul class="menu-nav">
        <li class="nav-item current">
          <a href="../index.php" class="nav-link">Home</a>
        </li>
        
      </ul>
    </div>

    <div id="home" class="show-body">
      <section id="demo-section">
        <div class="demo-container">
          <!--  <video src="../video/companyvideo.mp4" controls class="video-frame">  -->
            <!-- <source src="../video/companyvideo.mp4" type="video/mp4" /> -->
          <!--  </video>  -->
          <iframe  src="https://youtube.com/embed/SgbfFE1mzaA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </section>

      <section id="demo-details">
        <div class="container reveal">
          <div class="text-card">
            <h3>Demo Project</h3>
            <hr />
            <br />
            <div class="text-details">
              <h4><span class="second-text">Type:</span> Database System</h4>
              <h4><span class="second-text">Setup:</span> Online / Offline</h5>
              <h4><span class="second-text">Category:</span> Database</h5>
              <h4><span class="second-text">Version:</span> Demo</h5>
            </div>
            <br />
            <hr />
              <h5>Features</h5>
            <p>
              <li>SSL Certificate if online</li>
              <li>Mobile Friendly</li>
              <li>Content Management (Admin Dashboard)</li>
              <li>Internal Messaging</li>
              <li>Document or File Transfer</li>
              <li>Other services/functionalities agreed on.</li>
            </p>
            <div class="pricing-btn">
                <a href="../pricing.php">Pricing</a>
            </div>
          </div>
          <div class="text-card">
            <h3>Package</h3>
            <hr>
            <!-- <br> -->
            <h5>OFFLINE</h4>
            <div class="package-list">
              <li>SSL Certificate</li>
              <li>Enough Storage Space</li>
              <li>Dynamic Content</li>
              <li>Database Setup</li>
              <li>Hosted on Company Server</li>
              <li>Web Application or Desktop Application</li>
            </div>

          </div>
          <div class="text-card">
            <h3>Package</h3>
            <hr>
            <!-- <br> -->
            <h5>ONLINE</h4>
            <div class="package-list">
              <li>SSL Certificate</li>
              <li>Free Low Level Domain( such as .tk, .io, .rc)</li>
              <li>10GB Storage</li>
              <li>30GB of Bandwidth</li>
              <li>Dynamic Content</li>
              <li>Database</li>
              <li>Virtual Private Server(VPS)</li>
              <li>Emailing Integration</li>
            </div>

          </div>
    
        </div>
      </section>
    </div>

    <script src="../js/demo.js" defer></script>
    <!-- <script src="../fontawesome/all.min.js" defer></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
  </body>
  <footer id="main-footer" class="show-body">
    Copyright &copy; 2021 | Artisao Technologies
  </footer>
</html>
