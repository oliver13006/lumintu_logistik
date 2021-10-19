<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="nyibiinCss.css" />
    <!-- Boxiocns CDN Link -->
    <link rel="stylesheet" types="text/css" href="fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
          <a href="#">
            <i class="fas fa-home"></i>
            <span class="link_name">Dashboard</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="navbar.html">Dashboard</a></li>
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
            Dashboard
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
        <div class="cards">
          <div class="card-single">
            <div>
              <h1>60</h1>
              <span>Akun</span>
            </div>
            <div>
              <span class="fas fa-user"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <h1>50</h1>
              <span>Peserta</span>
            </div>
            <div>
              <span class="fas fa-users"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <h1>55</h1>
              <span>Sisa Ticket</span>
            </div>
            <div>
              <span class="fas fa-ticket-alt"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <h1>55</h1>
              <span>Sisa Merchandise</span>
            </div>
            <div>
              <span class="fas fa-folder-open"></span>
            </div>
          </div>
        </div>

        <div class="recent-grid">
          <div class="project">
            <div class="card">
              <div class="card-header">
                <h2>Pemesanan</h2>
                <button type="button" class="btn btn-secondary"><a href="#" style="text-decoration: none; color: #fff">Lihat Semua</a> <span class=""></span></button>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table width="100%">
                    <thead>
                      <tr>
                        <td>Jenis Peserta</td>
                        <td>Merchandise</td>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <!-- <tr>
                        <td>Tamia Indah Imanika</td>
                        <td>Symposisum Day 1 Sesi 1</td>
                        <td>Rp. 75.000</td>
                        <td><span class="status paid"></span> Paid</td>
                      </tr>
                      <tr>
                        <td>Ahmad Syauqi Darussalam</td>
                        <td>Symposisum Day 1 Sesi 2,3</td>
                        <td>Rp. 140.000</td>
                        <td><span class="status process"></span>Process</td>
                      </tr>
                      <tr>
                        <td>Ari Sukarizo</td>
                        <td>Symposisum Day 2 Sesi 1</td>
                        <td>Rp. 75.000</td>
                        <td><span class="status paid"></span>Paid</td>
                      </tr>
                      <tr>
                        <td>Mina Rofida Rahmatia</td>
                        <td>Symposisum Day 1 Sesi 2</td>
                        <td>Rp. 75.000</td>
                        <td><span class="status process"></span>Process</td>
                      </tr>
                      <tr>
                        <td>Muhammad Sultan Rafi</td>
                        <td>Symposisum Day 3 Sesi 1,2,3</td>
                        <td>Rp. 270.000</td>
                        <td><span class="status paid"></span>Paid</td>
                      </tr> -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </section>
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
  </body>
</html>
