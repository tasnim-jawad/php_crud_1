<?php 
    // error_reporting(E_ALL);
    // ini_set('display_errors', '1');

    include "./classes/student.php";
    $student1 = new Student();

    if (isset($_POST['add_user'])){
        // echo 11; die();
        $student1->add_student($_POST);
    }

    $students = $student1->show_student();
    // echo "<pre>"; print_r($students); die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"  />
    
</head>
<body>
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h1 class="bg-info text-center display-1 py-5">CRUD OPERATION</h1>
                </div>
            </div>
            <div class="row ">
                <div class="col-4">
                    <form class="shadow p-4" method="POST">
                        <h2 class="display-4 text-center text-info">Student Info</h2>
                        <div class="form-group pb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="" placeholder="Enter Name">
                        </div>
                        <div class="form-group pb-3">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" id=""  placeholder="Enter email">
                        </div>
                        <div class="form-group pb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-info" name="add_user" >Add User</button>
                    </form>
                </div>
                <div class="col-8">
                    <table class="table table-striped table-active">
                        <thead>
                            <tr>
                                <th>#sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; while($student = mysqli_fetch_assoc($students)){ ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $student['name']; ?></td>
                                <td><?= $student['email']; ?></td>
                                <td>
                                    <a href="">Edit</a>
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    









    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
</body>
</html>