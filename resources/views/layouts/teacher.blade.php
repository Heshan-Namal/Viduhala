<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="{{asset('assets/front/css/dashboard.css')}}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      
        <div class="logo_name">Welcome Back</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      
      <li>
        <a href="#">
            <i class='bx bx-home' ></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="/mySubjects/333">
        <i class='bx bx-book-reader'></i>
         <span class="links_name">Subjects</span>
       </a>
       <span class="tooltip">Subjects</span>
     </li>
     <li>
       <a href="#">
        <i class='bx bxs-graduation'></i>
         <span class="links_name">Quizes</span>
       </a>
       <span class="tooltip">Quizes</span>
     </li>
     <li>
       <a href="#">
        <i class='fas fa-bell' ></i>
         <span class="links_name">Notifications</span>
       </a>
       <span class="tooltip">Notifications</span>
     </li>
     <li>
       <a href="{{route('myprofile')}}">
        <i class='bx bx-user' ></i>
         <span class="links_name">My Profile</span>
       </a>
       <span class="tooltip">My Profile</span>
     </li>
     
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Attendance</span>
       </a>
       <span class="tooltip">Attendance</span>
     </li>
     <li class="profile">
         
           <img src="{{ URL::to('/assets/front/images/v.PNG') }}" alt="profileImg">
           
     </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="wrapper">
      <div class="navbar">
          <div class="left">
              <ul>
                <li><a href="#">
                  Hello Admin</i></a></li>
                <li><a href="#">
                  <i class="fas fa-envelope"></i></a></li>
                <li><a href="#">
                  <i class="fas fa-bell"></i></a></li>
                  <li><p>
                     Viduhala Your Virtual School</p></li>
            </ul>
          </div>
          <div class="right">
              <ul>
                <li>
                  <a href="#">
                     <span>Admin</span><img src="{{ URL::to('/assets/front/images/pp.jpg') }}" alt="Admin" width="40"><i class="fas fa-angle-down"></i>
                  </a>
                   
                  <div class="dropdown">
                      <ul>
                        <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                        <li><a href="#"><i class="fas fa-sliders-h"></i> Settings</a></li>
                        <li><a href="#"><i class="fas fa-sign-out-alt"></i> Signout</a></li>
                    </ul>
                  </div>
                  
                </li>
            </ul>
          </div>
      </div>
      @yield('content')
  </div>	
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
   $color=['F3C8EF','E1A4F0','EF9696','D6FED6','FFECC7','CFE8FF'];
  
  </script>
  <script>
    document.querySelector(".right ul li").addEventListener("click", function(){
        this.classList.toggle("active");
    });
  </script>
</body>
</html>
