<?php



  
  use App\Models\AdminUser;
  

  new AdminUser();
  

  if (session()->has('adminloginId')) {
    $uid = session()->get('adminloginId');
  }
  
  $users = AdminUser::where('profile_uid','=',$uid)->first();
  use App\Models\Gallery;


new Gallery();

$images = Gallery::all();
  
 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Urbana Admin | AddAdminUser</title>
    <link rel="stylesheet" type="text/css" href="{{url('adminFiles/css/dashboard.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <style>
        /* images cont */

        .choose-cont {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* margin-top: rem; */
        }

        .choose-cont h4 {
            font-size: 1.3rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .choose-cont .choose-btn {
            font-size: 1rem;
            font-weight: bold;
            padding: .5rem 1rem .5rem 1rem;
            background: var(--main-color);
            color: var(--text-color);
            border-radius: 7px;
            cursor: pointer;
        }




        .images-cont {
            margin-top: 1rem;
            min-height: 30vh;
            min-width: 50vw;
            width: 100%;
            border: 2px solid var(--main-color);
            border-radius: 9px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            column-gap: 5px;
            row-gap: 1em;
            padding: 3px;
        }



        .images-cont img {
            width: 350px;
            height: 250px;
        }

        .btns-group {
            display: flex;
            gap: 1.4rem;
            /* grid-template-columns: repeat(2, 1fr); */
            /* gap: 1.5rem; */
        }

        .btn2 {
            position: relative;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            display: block;
            text-decoration: none;

            color: white;
            text-align: center;
            background: var(--main-color);
            border: .2rem solid var(--main-color);
            border-radius: 15px;
            cursor: pointer;
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 1px;
            border-radius: 10px;
            margin-top: 2rem;
            width: 100%;
            margin-left: auto;
            z-index: 1;
            overflow: hidden;
            transition: .5s;
        }

        .btn2:hover {
            color: var(--main-color);
        }

        .btn2::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: var(--bg-color);
            z-index: -1;
            transition: .5s;
        }

        .btn2:hover::before {
            width: 100%;
        }
    </style>

</head>

<body
    style="background-image: url({{url('landingFrontendFiles/images/backgroundimage.jpg')}}); background-size: cover;background-repeat: no-repeat; background-attachment: fixed;background-position: center; position: relative;">
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



            <a href="{{url('/admin/addAdmin')}}" class="nav-link"><i class='bx bx-note'></i><span>Add admin
                    user</span></a>
            <a href="{{url('/admin/adminUsers')}}" class="nav-link"><i class='bx bx-note'></i><span>Admin
                    User</span></a>
            <a href="{{url('/admin/notice')}}" class="nav-link"><i class='bx bx-note'></i><span>Notice </span></a>

            <a href="{{url('/admin/result')}}" class="nav-link"><i class='bx bx-note'></i><span>Result </span></a>


            <a href="{{url('/admin/reg-reply')}}" class="nav-link"><i class='bx bx-note'></i><span>Registration Reply
                </span></a>
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
            <h2 class="header-title">Gallery</h2>

        </div>

        <div class="add-user-container">
            <div>

                @if(session()->has('notupload'))
                <div>
                    <p class="sess-err" style="margin-top: 1rem;
    margin-bottom: -5rem; text-align: center;
    font-size: 1.5rem;
    color: red;">{{Session()->get('notupload')}}</p>
                </div>

                @endif


                <form name="form" action="{{url('/admin/addGalleryPic')}}" method="post" enctype="multipart/form-data"
                    class="user-image" id="fom">
                    @csrf
                    <div>
                        <input type="file" name="images[]" id="images" multiple="multiple" style="visibility: hidden;"
                            onchange="image_select()" required>
                        <div class="choose-cont">
                            <h4>Project Images <span style="color: red;">*</span> : </h4>

                            <a class="choose-btn" onclick="document.getElementById('images').click()">Choose Images</a>

                        </div>
                        <div class="images-cont" id="images-container">




                        </div>




                        <div class="user-info">



                            <div class="btn">

                                <button class="add-user-btn" type="submit">ADD PHOTOS</button>
                            </div>


                        </div>

                </form>

            </div>

            <!-- gallery  -->
  
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

    <script>
        var images = [];
        function image_select() {
            var image = document.getElementById('images').files;
            for (i = 0; i < image.length; i++) {
                if (check_dup(image[i].name)) {
                    images.push({
                        "name": image[i].name,
                        "url": URL.createObjectURL(image[i]),
                        "file": image[i],
                    })
                } else {
                    alert(image[i].name + " is already added in list.");
                }

            }
            // document.getElementById('fom').reset();

            document.getElementById('images-container').innerHTML = image_show();
        }

        function image_show() {
            var image = "";
            images.forEach((i) => {
                image += `<img src="` + i.url + `" alt="" srcset="">`;
            })
            return image;
        }

        function check_dup(name) {
            var image = true;
            if (images.length > 0) {
                for (j = 0; j < images.length; j++) {
                    if (images[j].name == name) {
                        image = false;
                        break;
                    }
                }
            }
            return image;
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('adminFiles/js/dashboard.js')}}"></script>

</body>

</html>