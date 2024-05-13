<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Educate Tutorials | ADD Page</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.min.css">
  
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
               
                <div class="logo-text">
                    <span class="logo-title">Educate </span>
                    <span class="logo-title">Tutorials</span>
                </div>
<?php
 session_start();
     
 
 $admin=$_SESSION['admin'];
 if ($admin==true) {
 
 }
 else{
   header("location:index.html");
 }

?>
            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="dashboard.php"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>
                  <a class="" href="ann.php"><span class="icon document" aria-hidden="true"></span>Add Notes / Notice</a>
              </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon folder" aria-hidden="true"></span>View
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="notice.php">notice</a>
                        </li>
                        <li>
                          <a href="notes.php">notes</a>
                      </li>
                    </ul>
                </li>
                <li>
                  <a class="" href="subscribe.php"><span class="icon message" aria-hidden="true"></span>Subscribe</a>
              </li>
                    </ul>
              
                  
          
        </div>
    </div>
  
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
     
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
     
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <!-- <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div> -->
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
          <picture><source srcset="./img/favicon.png" type="image/webp"><img src="./img/favicon.png" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
        
          <li><a class="danger" href="logout.php">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- ! Main -->
  
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Add Notes |Notice </h2>
       <div class="fluid-container">

        <form class="form-container" action="add_n_n.php" method="post" enctype="multipart/form-data">
          <label for="title">Title</label>
          <input type="text" id="title" name="content" required>
  
          <label for="class">Class</label>
          <input type="text" id="class" name="class" required>
  
          <label for="date">Date</label>
          <input type="date" id="date" name="date" required>
  
          <div class="radio-buttons">
              <input type="radio" id="notes" name="table" value="notes" checked>
              <label for="notes">Notes</label>
  
              <input type="radio" id="notices" name="table" value="notice">
              <label for="notices">Notices</label>
  
              <input type="file" id="file" name="pdf" accept="application/pdf" aria-describedby="fileHelpId" required> 
          </div>
          
          
          <p>Maximum size 500KB.</p>
         <div>
          <button type="submit">Submit</button>
          <script>
                const uploadField = document.getElementById("file");
    
    uploadField.onchange = function() {
        if(this.files[0].size >500000){
           alert("File is big than 500KB!");
           this.value = "";
        }
    }
          </script>
         </div>
      </form>
      <style>
 

.form-container {
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    background-color: #ffffff;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"], input[type="date"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #cccccc;
    border-radius: 5px;
}

.radio-buttons {
    display: flex;
    flex-direction: column;
}

input[type="radio"] {
    margin-bottom: 5px;
}

input[type="file"] {
    margin-bottom: 15px;
}

button[type="submit"] {
    background-color: #007bff;
    color: #ffffff;
    padding: 10px 18px;
    margin-top: 1.4rem;
  
    border: none;
    
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button[type="submit"]:hover {
    background-color: #1dea12;
}
      </style>
       </div>
          </div>
</main>
  </div>
</div>

<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>