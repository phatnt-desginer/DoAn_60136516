<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DSVL</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    </head>
    <body class="sb-nav-fixed">
    <?php
    include './SQL/config.php';
    $query = 'SELECT * FROM congviec';
    $result = $conn->query($query);
    if(!$result) echo 'Cau truy van bi sai';
    ?>
    <?php include 'Header.php' ?>
    <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">DANH SÁCH CÔNG VIỆC</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">TRANG CHỦ</a></li>
                            <li class="breadcrumb-item active">Danh sách công việc</li>
                        </ol>

                        <a class="mb-4 btn btn-primary" href="createCV.php" role="button">Tạo mới CV</a>

                        <div class="card mb-4">
                            <div class="card-body">
                                <table id="datatablesSimple"class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Mã CV</th>
                                            <th>Tên Công việc</th>
                                            <th>Số lượng tuyển</th>
                                            <th>Ngôn Ngữ</th>
                                            <th>Tuyển dụng bởi</th>
                                            <th>Mức Lương</th>
                                            <th>Thời gian ứng tuyển kết thúc</th>
                                      </tr>
                                    </thead>
                                    <?php if($result-> num_rows != 0){ ?>
                                        <?php while($row = $result->fetch_array()){ ?>
                                            <tr>
                                                <td><?= $row['MACV'] ?></td>
                                                <td><?= $row['TENCV'] ?></td>
                                                <td><?= $row['SL'] ?></td>
                                                <td><?= $row['NN'] ?></td>
                                                <td><?= $row['MACTY'] ?></td>
                                                <td><?= $row['MUCLUONG'] ?> VND</td>
                                                <td><?= $row['TGKETTHUC'] ?></td>
                                                <td><a class="btn btn-outline-danger" href="Xoa_VL.php?macv=<?= $row['MACV'] ?>"> <i class="bi bi-x-circle"></i> </a>
                                                    <a class="btn btn-outline-success" href="Edit_VL.php?macv=<?= $row['MACV'] ?>"><i class="bi bi-pencil"> </i></a>
                                               </td>
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
