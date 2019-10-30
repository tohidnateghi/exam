<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Your own meta tags -->
    <meta name="description" content="Exam Project">
    <meta name="author" content="Tohid Nateghi">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-rtl.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="/css/main.css">

    <title>Exam Project</title>
    <style>
        /*
    DEMO STYLE
*/

        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
            
        }
  
        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a,
        a:hover,
        a:focus {
            text-decoration: none;
            transition: all 0.3s;
        }

        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }


        /* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

        .wrapper {
            display: flex;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #7386D5;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar a,
        #sidebar a:hover,
        #sidebar a:focus {
            color: inherit;
        }

        #sidebar.active {
            margin-right: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #6d7fcc;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fff;
            background: #6d7fcc;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        a[aria-expanded="false"]::before,
        a[aria-expanded="true"]::before {
            content: '\e259';
            display: block;
            position: absolute;
            left: 20px;
            font-family: 'Glyphicons Halflings';
            font-size: 0.6em;
        }

        a[aria-expanded="true"]::before {
            content: '\e260';
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-right: 30px !important;
            background: #6d7fcc;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.download {
            background: #fff;
            color: #7386D5;
        }

        a.article,
        a.article:hover {
            background: #6d7fcc !important;
            color: #fff !important;
        }


        /* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

        #content {
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
        }

        #content p a {
            color:
        }


        /* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

        @media (max-width: 768px) {
            #sidebar {
                margin-right: -250px;
            }

            #sidebar.active {
                margin-right: 0;
            }

            #sidebarCollapse span {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="contianer">
        <div class="row">
            <div class="col-lg-3">
                 <!-- Sidebar Holder -->
        <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Bootstrap</h3>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Home 1</a></li>
                            <li><a href="#">Home 2</a></li>
                            <li><a href="#">Home 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">About</a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to the article</a></li>
                </ul>
        </nav>
            </div>
            <div class="col-lg-9">
                    <div>
       
                            <!-- Page Content Holder -->
                            <div id="content">
                    
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                    
                                        <div class="navbar-header" >
                                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                                <i class="glyphicon glyphicon-align-left"></i>
                                                <span>Toggle Sidebar</span>
                                            </button>
                                        </div>
                    
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="#">Page</a></li>
                                                <li><a href="#">Page</a></li>
                                                <li><a href="#">Page</a></li>
                                                <li><a href="#">Page</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <div class="mt-5"></div>
                    
                                <h2>Collapsible Sidebar Using Bootstrap 3</h2>
                                <p class="lead">This pen is a part of a <a href="https://bootstrapious.com/p/bootstrap-sidebar">Bootstrap
                                        sidebar tutorial</a> from Bootstrapious.com. CC-BY licensed.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    
                                <div class="line"></div>
                    
                                <h2>Lorem Ipsum Dolor</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    
                                <div class="line"></div>
                    
                                <h2>Lorem Ipsum Dolor</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    
                                <div class="line"></div>
                    
                                <h3>Lorem Ipsum Dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            
                            <!-- Footer -->
                        <footer class="bg-light py-2">
                                <div class="container">
                                    <p class="m-0 text-center">طراحی و توسعه با <i class="fa fa-heart text-danger"></i> توسط ناطقی</p>
                                </div>
                            </footer>
                            <!-- End Footer -->    </div>
                            
                        </div>

            </div>
        </div>

    </div>

    

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.4.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
  $("#sidebarCollapse").on("click", function() {
    $("#sidebar").toggleClass("active");
    $(this).toggleClass("active");
  });
});

    </script>

</body>

</html>