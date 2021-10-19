<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome Link -->
    <link rel="stylesheet" types="text/css" href="fontawesome/css/all.min.css" />
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="sidebar close">
      <div class="logo-details">
        <div class="logo_name">
          <img src="assets/img/unnamed.png" />
        </div>
      </div>
      <ul class="nav-links">
        <li>
          <a href="navbar.html">
            <i class="fas fa-home"></i>
            <span class="link_name">Dashboard</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="navbar.html">Navbar.html</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-user"></i>
            <span class="link_name">Data Akun</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Data Akun</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-users"></i>
            <span class="link_name">Data Peserta</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Data Peserta</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-calendar-minus"></i>
            <span class="link_name">Data Acara</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Data Acara</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-ticket-alt"></i>
            <span class="link_name">Data Tiket</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Data Tiket</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class="fas fa-clipboard-list"></i>
              <span class="link_name">Data Transaksi</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Data Transaksi</a></li>
            <li><a href="#">Pemesanan</a></li>
            <li><a href="#">Pembayaran</a></li>
            <li><a href="#">Check In</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class="fas fa-folder-open"></i>
              <span class="link_name">Data Logistik</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Data Logistik</a></li>
            <li><a href="merchandise.php">Merchandise</a></li>
            <li><a href="certificate.php">Data Setifikat</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <div class="home-content">
      <header>
          <h1>
            <label for="nav-toggle">
              <span class="fas fa-bars" style="text-align: center"></span>
            </label>
            Data Sertifikat
          </h1>

          <div class="user-wrapper">
            <i class="fas fa-users-cog"></i>
            <div>
              <h4>Tamia Indah Imanika</h4>
              <small>Admin</small>
            </div>
          </div>
        </header>
      </div>
       <main>

            <div class="recent-flex">
                <div class="project">
                    <div class="project-header">
                            
                    </div>

                    <div class="project-body">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>Email</td>
                                    <td>No.Hp</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>Tamia Indah Imanika</td>
                              <td>mia@gmail.com</td>
                              <td>089869569</td>
                              <td><span class="status paid"></span> Terbagikan</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Ahmad Syauqi Darussalam</td>
                              <td>syuqiw@gmail.com</td>
                              <td>07996t86</td>
                              <td><span class="status process"></span>Belum</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Ari Sukarizo</td>
                              <td>sukarizo@gmail.com</td>
                              <td>07957956</td>
                              <td><span class="status paid"></span>Terbagikan</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Mina Rofida Rahmatina</td>
                              <td>mina@gmail.com</td>
                              <td>078959569</td>
                              <td><span class="status process"></span>Belum</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Muhammad Sultan Rafi</td>
                              <td>sultan@gmail.com</td>
                              <td>08085775</td>
                              <td><span class="status paid"></span>Terbagikan</td>
                            </tr>                                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>
        
      let arrow = document.querySelectorAll(".arrow");
      for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
          let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
          arrowParent.classList.toggle("showMenu");
        });
      }
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".fa-bars");
      console.log(sidebarBtn);
      sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
      });
    </script>
</html>