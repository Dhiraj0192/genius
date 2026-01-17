<?php



  
  use App\Models\AdminUser;
  

  new AdminUser();
  

  if (session()->has('adminloginId')) {
    $uid = session()->get('adminloginId');
  }
  
  $users = AdminUser::where('profile_uid','=',$uid)->first();


  
  use App\Models\Notice;
  

  
  new Notice();
  

  
  $notice = Notice::orderBy('created_at','desc')->take(7)->get();
  use App\Models\Gallery;


  new Gallery();
  
  $images = Gallery::orderBy('created_at','desc')->take(9)->get();
  
 
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Urbana Admin | Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{url('adminFiles/css/dashboard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('adminFiles/css/movies.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body style="background-image: url({{url('landingFrontendFiles/images/backgroundimage.jpg')}}); background-size: cover;background-repeat: no-repeat; background-attachment: fixed;background-position: center; position: relative;">
    <div class="sidebar-container">
        <div class="logo-section">
            <a href="{{url('/admin/index')}}" class="logo">Urbana<span>School</span></a>

        </div>


        <div class="admin-info-section">
            <img src="{{asset('/images/AdminProfilePic/'.$users->profilePic)}}" class="admin-image">
            <div class="admin-info">
                <h2 class="admin">Admin</h2>
                <h2 class="admin-name">
                    {{$users->name}}
                </h2>

            </div>
            <div class="logout-section">
                <a href="{{url('/adminlogout')}}"><i class='bx bx-log-out'></i></a>
            </div>
        </div>

        <div class="navbar-container">
            <a href="{{url('/admin/dashboard')}}" class="nav-link "><i class='bx bxs-dashboard'></i><span
                    class="nav-active">DASHBOARD</span></a>

            
            <a href="{{url('/admin/addAdmin')}}" class="nav-link"><i class='bx bx-note'></i><span>Add admin user</span></a>
            <a href="{{url('/admin/adminUsers')}}" class="nav-link"><i class='bx bx-note'></i><span>Admin User</span></a>

            <a href="{{url('/admin/notice')}}" class="nav-link"><i class='bx bx-note'></i><span>Notice </span></a>
            
            <a href="{{url('/admin/result')}}" class="nav-link"><i class='bx bx-note'></i><span>Result </span></a>

            <a href="{{url('/admin/reg-reply')}}" class="nav-link"><i class='bx bx-note'></i><span>Registration Reply </span></a>

            <a href="{{url('/admin/gallery')}}" class="nav-link"><i class='bx bx-note'></i><span>Gallery </span></a>






            <a href="{{url('/')}}" class="nav-link" target="_blank"><i class='bx bx-arrow-back'></i><span>BACK TO
            Urbana</span></a>
        </div>

        <div class="sidebar-footer">
            <p>© Urbana School, 2023.</p>
            <p>Create by <span>Dhiraj Yadav</span></p>
        </div>


    </div>

    <head>
        <link rel="stylesheet" type="text/css" href="css/movies.css">
    </head>

    <div class="bodycontainer">
        <div class="header-section">
            <h2 class="header-title">Dashboard</h2>

            <!-- <form action="movie-search.php" method="POST">
                <div class="search-box">

                    <input type="text" name="search" value="" id="search-input" placeholder="" maxlength="10">
                    <input class="search-btn" type="submit" name="submit" value="Search"></input>

                </div>

            </form> -->
            <a href="{{url('/admin/notice')}}" class="add-movie-btn"><span>Add Notice</span></a>

        </div>

        

        






        <div class="second-body">
            <div class="second-div">



                <div class="first">

                    <div class="top-view">
                        <div class="top-one">
                            <i class='bx bx-user-circle'></i>
                            <p class="top-heading">Latest Notice</p>
                        </div>
                        <div>
                            <a class="view-all-btn" href="{{url('/admin/notice')}}">View All</a>
                        </div>
                    </div>

                    <div class="table-container">



                    <!-- table -->
                    <table class="spacing">
                <tr class="movies-info-heading">
                    <div class="movies-heading-container">
                        <th>ID</th>
                        <th>Notice</th>

                        <th style="text-align: right;">ACTIONS</th>

                    </div>
                </tr>

                @foreach($notice as $notice)
                <tr class="movies-info-heading-data">
                    <div class="movies-data-container">
                        <td>
                            <p class="id-data">{{$notice->id}}</p>
                        </td>


                        <td>
                            <p class="status-data">{{$notice->notice}}</p>
                        </td>
                        <td style="text-align: right;">
                            <div class="action-container">
                                <!-- <a href=""><i class='bx bxs-low-vision eye-icon'></i></a> -->
                                <a href="{{route('deletenotice',['id'=> $notice->id])}}"><i class='bx bxs-trash delete-icon'></i></a>
                            </div>
                        </td>
                    </div>

                </tr>

                @endforeach









            </table>
                        
                    </div>
                </div>





            </div>



        </div>



        <div class="second-body">
            <div class="second-div">



                <div class="first">

                    <div class="top-view">
                        <div class="top-one">
                            <i class='bx bx-user-circle'></i>
                            <p class="top-heading">Latest Pictures</p>
                        </div>
                        <div>
                            <a class="view-all-btn" href="{{url('/admin/gallery')}}">View All</a>
                        </div>
                    </div>

                    <div class="table-container">



                    <!-- table -->
                    <section class="gallery" id="gallery">
    
    <div class="gallery-content" >

      <!-- <h2 class="section-title text-primary text-center px-3">GALLERY</h2> -->
      
      <ul class="images" style="display: grid;
	  grid-template-columns: 400px 400px 400px; padding: 5rem; grid-gap: 50px; border: 1px solid whilte; justify-items: center;">

        @foreach($images as $image)
        
        <div style="text-align: center;" class="action-container">
            <img style="border-radius: 1rem; border: 3px solid whitesmoke;" src="{{asset('/images/Gallery/'.$image->galleryPic)}}" alt="img">
        
            
            <div style="text-align: center;  border-radius: 1rem; border: 3px solid whitesmoke;" class="action">                  
                <a href="{{route('deletegallery',['id'=> $image->id])}}"><i class='bx bxs-trash delete-icon'></i></a>
            </div>
          
          
        </div>  
        
        
        @endforeach

        

        

      </ul>
    </div>
  </section>

                        
                    </div>
                </div>





            </div>



        </div>














    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('adminFiles/js/dashboard.js')}}"></script>

</body>

</html>