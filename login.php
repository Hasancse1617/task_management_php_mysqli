<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style.css"/>
    <title>Task management</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Task Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
        </div>
    </div>
</nav> 
<div class="register-area">  
    <div class="container"> 
        <div id="main">
            <div id="login">
                <h2>Login Form</h2>
                <hr/>
                <form action="" method="post" name="loginForm">
                    <label>Email:</label>
                    <input type="email" name="email" id="email" required="required" placeholder="admin@gmail.com"/><br/><br />
                    <label>Password*:</label>
                    <input type="password" name="password" id="password" required="required" placeholder="******"/><br/><br />
                </form>
            </div>
        </div>
    </div> 
</div>
<div class="footer-area">
   <div class="container">
       <div class="col-md-12">
          <div class="footer">
             <p>Footer</p>
          </div>
       </div>
   </div>
</div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>