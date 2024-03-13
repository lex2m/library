<?php

require "function.php";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Kütüphane</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- BootStrap -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/f30e8168c4.js" crossorigin="anonymous"></script>
    <!-- Favico -->
    <link href="img/favicon.png" rel="icon" />
    <link href="img/favicon.png" rel="apple-touch-icon" />

    <style>
        .text-purple {
            color: #6749B9;
        }
    </style>

</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Kütüphane</span>
                </button>
            </div>
            <div class="p-4 pt-5">
                <h2 class="text-light fw-bold">Kütüphane</h2>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="#" class="text-decoration-none">Ana Sayfa</a>
                    </li>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle text-decoration-none">Kitaplar</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="#" class="text-decoration-none">Kitap Ekle</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Kitapları Düzenle</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Kitap Listesi</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle text-decoration-none">Kategoriler</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#" class="text-decoration-none">Kategori Ekle</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Kategorileri Düzenle</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Kategori Listesi</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="text-decoration-none">Müşteriler</a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none">Diğer</a>
                    </li>
                </ul>


            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">

            <h2 class="mb-4">İşlem türü seçin</h2>
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="card p-3">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-book text-purple"></i> Kitap Ekle
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 mb-3">
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="card p-3">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-book-open text-purple"></i> Kitapları Düzenle
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 mb-3">
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="card p-3">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-bookmark text-purple"></i> Kitap Listesi
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- sa -->

            <div class="row">
                <div class="col-lg-3 mb-3">
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="card p-3">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-list text-purple"></i> Kategori Ekle
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 mb-3">
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="card p-3">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-layer-group text-purple"></i> Kategorileri Düzenle
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 mb-3">
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="card p-3">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-table-cells-large text-purple"></i> Kategori Listesi
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <h2 class="mb-4">İstatistikler</h2>

            <div class="row">
                <div class="card col-lg-5 mb-3">
                    <div class="card-body">
                        <center><canvas id="pastaGrafigi" width="200" height="200"></canvas></center>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="card col-lg-5 mb-3">
                    <div class="card-body">
                        <center><canvas id="cizgiGrafigi" width="200" height="200"></canvas></center>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Pasta grafiği için veri
        var data = {
            labels: ["Kalan Depolama", "Kullanılan Depolama"],
            datasets: [{
                data: [33, 67],
                backgroundColor: ["#6c757d", "#6749b9"]
            }]
        };

        // Pasta grafiğini oluştur
        var ctx = document.getElementById('pastaGrafigi').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: {
                legend: {
                    display: false
                }
            }
        });


        var data2 = {
            labels: ["Kasım", "Aralık", "Ocak", "Şubat", "Mart"],
            datasets: [{
                label: "Kullanıcılar",
                data: [234, 312, 458, 376, 612],
                fill: false,
                borderColor: "#6749b9",
                backgroundColor: "#6749b9",
                tension: 0.4
            }]
        };
        var ctx = document.getElementById('cizgiGrafigi').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: data2,
            options: {
                scales: {
                    x: [{
                        grid: {
                            display: false
                        }
                    }],
                    y: [{
                        grid: {
                            display: false
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>