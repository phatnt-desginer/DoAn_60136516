<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    </head>
    <body class="sb-nav-fixed">

    <?php
    include './SQL/config.php';

    $query = 'SELECT * FROM congty';
    $result = $conn ->query($query);
    if(!$result) echo 'Cau truy van bi sai';
    ?>
        <nav class="sb-topnav navbar navbar-expand navbar-blue bg-light">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php"><b>itviec.com</b></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="CaNhan.php">Thông tin cá nhân</a></li>
                        <li><a class="dropdown-item" href="#!">Bài tập cá nhân</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav bg-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Danh sách trang</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-house-door-fill"></i></div>
                                                    Trang chủ
                            </a>
                            <hr class="dropdown-divider" />
                            <a class="nav-link" href="DSVL.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-briefcase-fill"></i>
                                </div>
                                Danh sách Việc làm
                            </a>
                            <hr class="dropdown-divider" />
                            <a class="nav-link" href="DSCTY.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-building"></i>
                                    </i></div>
                                Danh sách Công Ty
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">DANH SÁCH CÔNG TY</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">TRANG CHỦ</a></li>
                            <li class="breadcrumb-item active">DSCT</li>
                        </ol>
                        <a class="mb-4 btn btn-primary" href="createCT.php" role="button">Nhập công ty mới</a>

                        <div class="card mb-4">
                            <div class="card-body">
                                <table class="table table-striped" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Logo</th>
                                            <th>Mã Công ty</th>
                                            <th>Tên Công ty</th>
                                            <th>Địa chỉ</th>
                                            <th>Số Lượng NV</th>
                                            <th>Quốc gia</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                        </tr>
                                    </thead>

                                    <?php if($result-> num_rows != 0){ ?>
                                        <?php while($row = $result->fetch_array()){ ?>
                                            <tr>
                                                <td><img src="<?= $row['Anh'] ?>" class="img-fluid rounded-start" alt="..." style="width: 100px"></td>                                                <td><?= $row['MACTY'] ?></td>
                                                <td><?= $row['TENCTY'] ?></td>
                                                <td><?= $row['DIACHI'] ?></td>
                                                <td><?= $row['SLNV'] ?></td>
                                                <td><?= $row['QUOCGIA'] ?></td>
                                                <td><?= $row['EMAIL'] ?></td>
                                                <td><?= $row['SDT_CT'] ?></td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>

                                    <?php $conn->close(); ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'footer.php'?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
