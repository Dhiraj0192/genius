
<?php



  
  use App\Models\AdminUser;
  use App\Models\Result;

  new AdminUser();
  new Result();

  if (session()->has('adminloginId')) {
    $uid = session()->get('adminloginId');
  }
  
  $users = AdminUser::where('profile_uid','=',$uid)->first();
  $result = Result::orderBy('created_at','desc')->get();
 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Urbana Admin | AddAdminUser</title>
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

    <div class="bodycontainer">
        <div class="header-section">
            <h2 class="header-title">RESULT</h2>

        </div>

        <div class="add-user-container">
            <div>


                
                <form name="form" action="{{url('/admin/addResultProcesses')}}" method="post" enctype="multipart/form-data" class="user-image">
                    @csrf
                    <div>
                        <img src="" id="img_url"
                            style="background-image: url() ; background-size: cover;">
                        <input class="file" name="resultPic" type="file" id="img_file" onChange="img_pathUrl(this);" required>

                        <p style="text-align: center; font-size: 20px; color: #ffb43a;">Upload Result in JPG</p>

                    </div>


                    <div class="user-info">
                        <input class="fullname" type="text" name="studentName" placeholder="Student Name : " required>
                        


                        <input class="number" type="text" name="symbolNo" placeholder="Symbol No. : ">

                       

                        <div class="btn">
                            
                            <button class="add-user-btn" type="submit">ADD RESULT</button>
                        </div>


                    </div>
                    
                </form>

            </div>






        </div>

        <div class="user-container">
      	<!-- <div class="user-info-heading"> -->


          <table class="spacing">
           <tr class="movies-info-heading">
              <div class="movies-heading-container">
                <th>ID</th>
                <th>Result</th>
                <th>Student Name</th>
                
                <th>Symbol No.</th>
                <th style="text-align: right;">ACTIONS</th>

              </div>
            </tr>

            @foreach($result as $result)
            <tr class="movies-info-heading-data">
              <div class="movies-data-container">
                <td><p class="id-data">{{$result->id}}</p></td>
                <td>
                  <div class="info-container">
                    <img src="{{asset('/images/Result/'.$result->resultPic)}}" class="user-image-data">
                    
                  </div>
                </td>
                <td style=" letter-spacing: 1px"><p class="comment-data">{{$result->studentName}}</p></td>
                
                <td><p class="status-data">{{$result->symbolNo}}</p></td>
                <td style="text-align: right;">
                  <div class="action-container">
                    <!-- <a href=""><i class='bx bxs-low-vision eye-icon'></i></a> -->
                    <a href="{{route('deleteresult',['id'=> $result->id])}}"><i class='bx bxs-trash delete-icon' ></i></a>
                  </div>
                </td>
              </div>
              
            </tr>
            @endforeach
           




            




          </table>






      		
      	</div>
    </div>


    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('adminFiles/js/dashboard.js')}}"></script>

</body>

</html>