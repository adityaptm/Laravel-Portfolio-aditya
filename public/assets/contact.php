<?php

$success = "";
$error = "";

/* KONEKSI DATABASE */
$host = "localhost";
$user = "root";
$pass = "1234";
$db   = "kontak";
$port = 8111;

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

/* PROSES FORM */
if(isset($_POST['submit'])){

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    /* PREPARED STATEMENT */
    $stmt = mysqli_prepare($conn,
        "INSERT INTO messages (name,email,subject,message) VALUES (?,?,?,?)"
    );

    mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$subject,$message);

    if(mysqli_stmt_execute($stmt)){
        $success = "Pesan berhasil dikirim!";
    }else{
        $error = "Pesan gagal dikirim!";
    }

    mysqli_stmt_close($stmt);
}

?>
<!doctype html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Contact - Aditya Pratama Putra</title>

<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">
<div class="container">

<div class="logo">Aditya<span>.dev</span></div>

<ul class="nav-menu">
<li><a href="index.html">Home</a></li>
<li><a href="about.html">About</a></li>
<li><a href="skills.html">Resume</a></li>
<li><a href="project.html">Projects</a></li>
<li><a href="contact.php" class="active">Contact</a></li>
</ul>

</div>
</nav>


<main>

<section class="contact">

<div class="container">

<div class="section-title">
<h2>Contact Me</h2>
<p>Silakan hubungi saya melalui form atau kontak berikut</p>
</div>


<div class="contact-wrapper">

<!-- CONTACT INFO -->
<div class="contact-info">

<div class="info-item">
<i class="bx bx-envelope"></i>
<div>
<span>Email</span>
<p>aditya@email.com</p>
</div>
</div>

<div class="info-item">
<i class="bx bx-phone"></i>
<div>
<span>Phone</span>
<p>+62 813 9166 4927</p>
</div>
</div>

<div class="info-item">
<i class="bx bx-map"></i>
<div>
<span>Location</span>
<p>Bekasi, Jawa Barat</p>
</div>
</div>

<div class="info-item">
<i class="bx bxl-linkedin"></i>
<div>
<span>LinkedIn</span>
<p>linkedin.com/in/aditya-pratama-putra</p>
</div>
</div>

</div>


<!-- CONTACT FORM -->
<div class="contact-form">

<?php if($success != ""): ?>
<div class="alert success">
<?= $success ?>
</div>
<?php endif; ?>

<?php if($error != ""): ?>
<div class="alert error">
<?= $error ?>
</div>
<?php endif; ?>


<form method="POST">

<input
type="text"
name="name"
placeholder="Nama Lengkap"
required
>

<input
type="email"
name="email"
placeholder="Email"
required
>

<input
type="text"
name="subject"
placeholder="Subject"
required
>

<textarea
name="message"
rows="5"
placeholder="Pesan..."
required
></textarea>

<button type="submit" name="submit">
<i class="bx bx-send"></i> Kirim Pesan
</button>

</form>

</div>

</div>

</div>

</section>

</main>


<footer class="footer">

<div class="container">

<div class="footer-social">

<a href="https://linkedin.com">
<i class="bx bxl-linkedin"></i>
</a>

<a href="https://github.com">
<i class="bx bxl-github"></i>
</a>

<a href="https://instagram.com">
<i class="bx bxl-instagram"></i>
</a>

<a href="https://wa.me/6281391664927">
<i class="bx bxl-whatsapp"></i>
</a>

</div>

<p>© 2026 Aditya Pratama Putra</p>

</div>

</footer>


<script>

/* AUTO HILANG ALERT */
setTimeout(function(){
  let alert = document.querySelector(".alert");
  if(alert){
    alert.style.display="none";
  }
},3000);

</script>

</body>
</html>