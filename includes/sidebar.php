<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">SpyXFamily</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="../admin/dashboard.php" class="<?php echo $dashboard; ?>">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" class ="<?php echo $reserve; ?>">
            <i class='bx bx-list-ul'></i>
            <span class="links_name">Reserve</span>
          </a>
        </li>
        <li>
          <a href="#" class="<?php echo $waiting; ?>">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Waiting</span>
          </a>
        </li>
        <li>
          <a href="#" class="<?php echo $serve; ?>">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Serve</span>
          </a>
        </li>
        <li>
          <a href="#" class="<?php echo $canceled; ?>">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Canceled</span>
          </a>
        </li>
        <li>
          <a href="#" class="<?php echo $acccount; ?>">
            <i class='bx bx-user' ></i>
            <span class="links_name">Account</span>
          </a>
        </li>
        <li>
          <a href="#" class="<?php echo $employee; ?>">
            <i class='bx bx-user' ></i>
            <span class="links_name">Employees</span>
          </a>
        </li>
        <li>
          <a href="#" class="<?php echo $feedback; ?>">
            <i class='bx bx-message' ></i>
            <span class="links_name">Feedback</span>
          </a>
        </li>

        <li>
          <a href="#" class="<?php echo $setting; ?>">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../login/logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  
<script>
   let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".sidebarBtn");
  sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
</body>
</html>
