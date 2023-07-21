<nav class="navbar navbar-light bg-white border-bottom shadow">
	<div class="container">
	   <a href="#" class="navbar-brand"><h2>Blog</h2></a>
      
        <ul class="nav">
            <li class="nav-item">
                <a href="#"class="nav-link"><?php echo $_SESSION['user_email']; ?></a>
            </li>
             <li class="nav-item">
                <a href="<?php echo BASE_URL?>"class="nav-link">Go to CSZ Blog</a>
            </li>
        </ul>
         <button class="navbar-toggler shadow-none" type="button" data-bs-target="#sideNavbar" data-bs-toggle="offcanvas">
           <span class="navbar-toggler-icon"></span>
        </button>
	</div>
    <div></div>
</nav>