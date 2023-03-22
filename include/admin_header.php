
<style> 

  /* font-family: Arial, Helvetica, sans-serif; */
 

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}
#header {
    transition: all 0.5s;
    background: #fff;
    z-index: 997;
    padding: 0.3% 0;
    border-bottom: 1px solid #e6f2fb;
}
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 10px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* .header a:hover {
  background-color: #ddd;
  color: black;
} */

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

.align-items-center {
    align-items: center!important;
}
.justify-content-between {
    justify-content: space-between!important;
}.d-flex {
    display: flex!important;
}.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-right: auto;
    margin-left: auto;
}*, ::after, ::before {
    box-sizing: border-box;
}#header {
  transition: all 0.5s;
  background: #fff;
  z-index: 997;
  padding: 0.3% 0;
  border-bottom: 1px solid #e6f2fb;
}

#header.header-scrolled {
  border-color: #fff;
  box-shadow: 0px 2px 15px rgba(18, 66, 101, 0.08);
}

#header .logo {
  font-size: 28px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 300;
  letter-spacing: 0.5px;
  font-family: "Open Sans", sans-serif;
}

#header .logo a {
  color: #16507b;
}

#header .logo img {
  max-height: 40px;
}

@media (max-width: 992px) {
  #header .logo {
    font-size: 20px;
  }
  .ict_logo {
    width: 10rem;
  }
}
#back{
  width: 100%;
  height: 100vh;
  position: relative;
  background: url("assets/img/ThankYou!.jpg") top center;
  background-size: cover;
  position: relative;
}
body { 
  margin: 0;
  font-family: "Open Sans", sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}
#header {
    transition: all 0.5s;
    background: #fff;
    z-index: 997;
    padding: 0.3% 0;
    border-bottom: 1px solid #e6f2fb;
}
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 10px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* .header a:hover {
  background-color: #ddd;
  color: black;
} */

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

.align-items-center {
    align-items: center!important;
}
.justify-content-between {
    justify-content: space-between!important;
}.d-flex {
    display: flex!important;
}.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-right: auto;
    margin-left: auto;
}*, ::after, ::before {
    box-sizing: border-box;
}#header {
  transition: all 0.5s;
  background: #fff;
  z-index: 997;
  padding: 0.3% 0;
  border-bottom: 1px solid #e6f2fb;
}

#header.header-scrolled {
  border-color: #fff;
  box-shadow: 0px 2px 15px rgba(18, 66, 101, 0.08);
}

#header .logo {
  font-size: 28px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 300;
  letter-spacing: 0.5px;
  font-family: "Open Sans", sans-serif;
}

#header .logo a {
  color: #16507b;
}

#header .logo img {
  max-height: 40px;
}

@media (max-width: 992px) {
  #header .logo {
    font-size: 20px;
  }
  .ict_logo {
    width: 10rem;
  }
}

</style>
  <header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
      <!-- <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation" >
        <i class="fas fa-bars"></i>
      </button> -->
      <img class="ict_logo" src="assets/img/logo.png" alt="ICT LOGO" height="50">
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" style= "font-size: 30px;">Student's Corner</a>
          </li>
        </ul>
        <img class="ict_logo" src="assets\img\ICT_logo.svg" alt="ICT LOGO" height="50">
        <!-- <button align="Right"><a href="logout.php">Logout</a></button> -->
       
      </div>
       <!-- Right elements -->
    
        <a href="adminlogout.php" role="button" aria-expanded="false" >
          <i class="fa fa-sign-out"></i>
        </a>
        <!-- <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </li>
</ul> -->
   
    </ul>
    <!-- Right elements -->
    </div>
   
  </nav>
  <!-- Navbar -->
</header>