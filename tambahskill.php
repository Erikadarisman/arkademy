<!-- Sweet Alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
$conn=mysqli_connect("localhost","root","","arka");
if (isset($_GET['Sbutton'])) {
$id=$_GET['Sbutton'];
$skill=$_GET['skill'];
mysqli_query($conn,"INSERT INTO skills(name,user_id) VALUES('$skill','$id')");
?>
<script>
    swal({
        title: "Alert",
        text: "Berhasil Menambah Skill",
        icon: "success",
        button: "OK",
    }).then(function () {
        window.location.href = "index.php";
    });
</script>
<?php }?>
