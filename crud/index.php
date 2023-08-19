<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="
    stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!--Font Awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>PHP CRUD Application</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 md-5 mb-3" style="background-color:#00ff5573;">
        PHP Complete CRUD Applicaton
    </nav>

    <div class="container">
        <?php
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
        <a href="addNew.php" class="btn btn-dark mb-3">Add New</a>

        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>
                </tr>           
            </thead>
            <tbody>
                    <?php
                        include "dbConfig.php";
                        $sql = "SELECT * FROM `employee_personal`";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['first_name'] ?></td>
                                    <td><?php echo $row['last_name'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['gender'] ?></td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id'] ?>" 
                                        class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                        <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5 "></i></a>
                                    </td>
                                </tr>
                            <?php
                        }
                    ?>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <a href="" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="" class="link-dark"><i class="fa-solid fa-trash fs-5 "></i></a>
                    </td>
                </tr>
            </tbody> 
        </table>
    </div>
<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>   
</body>
</html>
