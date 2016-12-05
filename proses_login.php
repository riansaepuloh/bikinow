<?php
if(isset($_POST['username'])&&isset($_POST['password'])){
  include("config/connection.php");
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $query = mysqli_query($koneksi, "SELECT * FROM t_akun WHERE username='$username' AND password='$password'");


  if(mysqli_num_rows($query) == 0){
    ?>
    <script type="text/javascript">
    alert("Username atau password salah silahkan ulangi!!");
    </script>
    <?php
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  }else{
    $row = mysqli_fetch_assoc($query);
    if($row['level_akses'] == "admin"){
      $_SESSION['username']=$username;
      header("Location: admin/index.php");
    }else if($row['level_akses'] == "provider"){
      $_SESSION['username']=$username;
      header("Location: media.php ");
    }else if($row['level_akses'] == "customer"){
      $_SESSION['username']=$username;
      header("Location: media.php");
    }else{
      echo '<div class="alert alert-danger"> Data Yang dimasukan Salah</div>';
    }
  }
}
?>