<?php
$conn=mysqli_connect("localhost","root","","arka");

$query=mysqli_query($conn,"SELECT users.id, users.name, GROUP_CONCAT(skills.name) AS 'skills' 
                            FROM users left join skills on users.id=skills.user_id 
                            group by users.id");

?>

<!doctype html>
<html lang="en">

<head>
    <title>Part B</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-5">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Tambah Programmer Baru"
                            aria-label="Recipient's username" aria-describedby="button-addon2" name="programmer">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="submit" id="button-addon2"
                                name="Pbutton">Button</button>
                        </div>
                    </div>
                </form>
                <?php
                while($row=mysqli_fetch_array($query)){?>
                <table class="table table-bordered mt-5">
                    <form action="tambahskill.php" method="get">
                        <tbody>
                            <tr>
                                <td><?= $row['name'] ?></td>
                                <td class="align-middle" style="width: 50%" rowspan="3">
                                    <div class="input-group">
                                        <input type="text" class="form-control " placeholder="Input Tambah Skill"
                                            aria-label="Recipient's username" aria-describedby="button-addon2"
                                            name="skill">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="submit" name="Sbutton"
                                                id="button-addon2" value="<?= $row['id'] ?>">Button</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2"><?= $row['skills'] ?></td>
                            </tr>
                        </tbody>
                    </form>
                    

                
                </table>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

<?php

if (isset($_POST['Pbutton'])) {
    $programmer = mysqli_real_escape_string($conn,$_POST['programmer']);
    mysqli_query($conn,"INSERT INTO users(name) VALUES('$programmer')");
    ?>
<script>
    swal({
        title: "Alert",
        text: "Berhasil Menambah Programmer",
        icon: "success",
        button: "OK",
    }).then(function () {
        window.location.href = "";
    });
</script>
<?php
}
?>