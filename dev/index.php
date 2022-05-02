 <html lang="en">
 <head>
      <title>Developers</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="logo.png" rel="icon">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
  </head>
    
 <body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-end">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="logo.png" alt="Logo" style="width:140px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#dev">Developers</a>
                </li>
                </ul>
            </div>
         </nav>
    </header>

    <section>
        <div class="container" style="width:auto;justify-content: space-around;" id="dev">
        <h1 style="    display: flex;
        align-content: center;
        justify-content: center;">Developers</h1>
       <div class="row">
        <div class="col-md-4">
           <img src="de.jpeg"  style="width: 100%;">
           <p><h3 align="center">Devanand T</h3></p>
        </div>
        <div class="col-md-4" >
            <img src="nm.jpeg" style="width: 100%;">
            <p><h3 align="center">Nevin Michael</h3></p>
        </div>
        <div class="col-md-4">
            <img src="as.jpeg" style="width: 100%;">
            <p><h3 align="center">Amal Soman</h3></p>
        </div>
        </div>
        </div>
    </section>

    <footer class="mt-auto">

        <section class="footer-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 bg-light text-center" style="display: flex; justify-content: flex-end ;padding-top: 50px;">
                        <p class="text-center">  &copy; <?php echo date('Y');?> Online Library Management System |<a href="#dev"> Designed by Nevin,Devanand&Amal</a></p>
                    </div>
    
                </div>
            </div>
        </section>
    
    </footer>
</body>
</html>
