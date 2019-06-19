<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Library</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    </head>
    <body>
        <div class="wrapper customfont">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                  <a href="/home"><h3 class="text-center"><b></b>MNSS</h3></a>
                  <a href="/home"> <strong style="font-size:18px;"><b>MNSS</b></strong></a>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#bookSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i></i>
                            Books
                        </a>
                        <ul class="collapse list-unstyled" id="bookSubmenu">
                            <li>
                              <a href="addBooks">
                                <i></i>
                                Add New Book
                              </a>
                            </li>
                            <li>
                              <a href="booksList">
                                <i></i>
                                Books List
                              </a>
                            </li>
                            <li>
                              <a href="categoriesList">
                                <i></i>
                                Category Wise books
                              </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#catSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i></i>
                            Categories
                        </a>
                        <ul class="collapse list-unstyled" id="catSubmenu">
                            <li>
                              <a href="addCategories">
                                <i></i>
                                Add New Category
                              </a>
                            </li>
                            <li>
                              <a href="categoriesList">
                                <i></i>
                                Categories List
                              </a>
                            </li>
                        </ul>
                    </li>
                  <li >
                        <a href="#issueBookSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i></i>
                            Book Issue
                        </a>
                        <ul class="collapse list-unstyled" id="issueBookSubmenu">
                            <li>
                              <a href="issueBooks">
                                <i></i>
                                Issue A Book
                              </a>
                            </li>
                            <li>
                              <a href="issuedBooks">
                                <i></i>
                                Issued Books
                              </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#memberSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i></i>
                            Members
                        </a>
                        <ul class="collapse list-unstyled" id="memberSubmenu">
                            <li>
                              <a href="addMembers">
                                <i></i>
                                Add New Member
                              </a>
                            </li>
                            <li>
                              <a href="membersList">
                                <i></i>
                                Members List
                              </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="returnBooks">
                            <i></i>
                            Return Books
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-menu-left"></i> <i class=" glyphicon glyphicon-menu-right"></i>

                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="mainContentArea">
                @yield('content')
                </div>
            </div>
        </div>
        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
         @yield('script')
    </body>
</html>
