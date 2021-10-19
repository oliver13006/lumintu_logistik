<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="nyoba.css">
    <!-- Font Awesome Link -->
    <link rel="stylesheet" types="text/css" href="fontawesome/css/all.min.css" />
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <img src="assets/img/unnamed.png">
        </div>    

        <div class="sidebar-menu">     
            <ul>
                <li>
                    <a href="" class="active"><span class="fas fa-home"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="fas fa-user"></span>
                    <span>Data Akun</span></a>
                </li>
                <li>
                    <a href=""><span class="fas fa-users"></span>
                    <span>Data Peserta</span></a>
                </li>
                <li>
                    <a href=""><span class="fas fa-calendar-week"></span>
                    <span>Data Event</span></a>
                </li>
                <li>
                    <a href=""><span class="fas fa-ticket-alt"></span>
                    <span>Data Tiket</span></a>
                </li>
                <li>
                    <a href=""><span class="fas fa-clipboard-list"></span>
                    <span>Data Transaksi</span></a>
                </li>
                <li>
                    <a href=""><span class="fas fa-folder-open"></span>
                    <span>Data Logistik</span></a>
                </li>
            </ul>
        </div>    
    </div>
    
    <div class="main-content">
       <header>
           
           <h1>
           <label for="nav-toggle">
                <span class="fas fa-bars" style="text-align: center;"></span>
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
                        <button> Lihat Semua <span class=""></span></button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Nama</td>
                                        <td>Pemesanan</td>
                                        <td>Harga</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tamia Indah Imanika</td>
                                        <td>Symposisum Day 1 Sesi 1</td>
                                        <td>Rp. 75.000</td>
                                        <td>
                                            <span class="status paid"></span> Paid
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ahmad Syauqi Darussalam</td>
                                        <td>Symposisum Day 1 Sesi 2,3</td>
                                        <td>Rp. 140.000</td>
                                        <td>
                                            <span class="status process"></span>Process
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ari Sukarizo</td>
                                        <td>Symposisum Day 2 Sesi 1</td>
                                        <td>Rp. 75.000</td>
                                        <td>
                                            <span class="status paid"></span>Paid
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mina Rofida Rahmatika</td>
                                        <td>Symposisum Day 1 Sesi 2</td>
                                        <td>Rp. 75.000</td>
                                        <td>
                                            <span class="status process"></span>Process
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Muhammad Sultan Rafi</td>
                                        <td>Symposisum Day 3 Sesi 1,2,3</td>
                                        <td>Rp. 270.000</td>
                                        <td>
                                            <span class="status paid"></span>Paid
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h2>Pelanggan Terbaru</h2>
                            <button> Lihat Semua <span class=""></span></button>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="assets/img/asa.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ahmad Syauqi Darussalam</h4>
                                        <small>Day 1 Sesi 2,3</small>
                                    </div>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="assets/img/asa.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ahmad Syauqi Darussalam</h4>
                                        <small>Day 1 Sesi 2,3</small>
                                    </div>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="assets/img/asa.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ahmad Syauqi Darussalam</h4>
                                        <small>Day 1 Sesi 2,3</small>
                                    </div>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="assets/img/asa.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ahmad Syauqi Darussalam</h4>
                                        <small>Day 1 Sesi 2,3</small>
                                    </div>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="assets/img/asa.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ahmad Syauqi Darussalam</h4>
                                        <small>Day 1 Sesi 2,3</small>
                                    </div>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="assets/img/asa.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ahmad Syauqi Darussalam</h4>
                                        <small>Day 1 Sesi 2,3</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</html>