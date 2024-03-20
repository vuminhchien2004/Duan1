<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../public/index.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"    
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <title>Admin Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../img/tải xuống.png" alt="Logo" width="70">
            </div>

            <span class="logo_name">Play Mobile</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links m-0 p-0">
                <li><a href="index.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Home</span>
                </a></li>
                <li><a href="?act=list-categories">
                    <i class="uil uil-align-left"></i>
                    <span class="link-name">Categories</span>
                </a></li>
                <li><a href="?act=list-products">
                    <i class="uil uil-book-alt"></i>
                    <span class="link-name">Products</span>
                </a></li>
                <li><a href="?act=list-carts">
                    <i class="uil uil-question-circle"></i>
                    <span class="link-name">Order</span>
                </a></li>
                <li><a href="?act=list-posts">
                    <i class="uil uil-newspaper"></i>
                    <span class="link-name">Posts</span>
                </a></li>
                <li><a href="?act=comments">
                    <i class="uil uil-comment-alt-dots"></i>
                    <span class="link-name">Comment</span>
                </a></li>
                <li><a href="?act=list-users">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Users</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode m-0 p-0">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
            <div class="header-action">
              <div class="user-profile">
                
                  <div class="submenu">
                      <ul>
                          <li><a href="/VietNamHistory/client/">Truy cập trang user</a></li>
                          <li><a href="../client/index.php?act=profile">Trang cá nhân</a></li>
                          <li><a href="">Danh sách khóa học</a></li>
                          <li><a href="/VietNamHistory/client/index.php?act=logout">Đăng xuất</a></li>
                      </ul>
                  </div>
              </div>
          </div>
        </div>
      
  
  