<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>BC360</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/templatemo-edu-meeting.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/lightbox.css')}}">
    

  </head>

<body>
    <style type="text/css">
      .error{
        color: red;
      }
      .hide_data{
        display: none;
      }
    </style>
  
  <div class="back-to-top"></div>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p><em class="pr-2">Phone: </em>{{\App\Models\HeaderContact::first()['phone']}}<em class="pl-2"> Email:</em>{{\App\Models\HeaderContact::first()['email']}}</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              @foreach ( \App\Models\Link::all() as $item )
              
              <li><a target="_blank" href="{{$item['link']}}"><i class="fa fa-{{$item['name']}}"></i></a></li>
            
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="{{route('home')}}" class="logo">
                          
                         <img src="{{asset('frontend/assets/images/bc.png')}}" width="120" height="100">

                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class=""><a href="{{route('home')}}" class="active">Home</a></li>
                          
                          <li class="has-sub">
                            <a href="">Our Services</a>
                            <ul class="sub-menu">
                             
                              @foreach(\App\Models\Service::all() as $item)
                                <li>
                                  <a href="{{ route('service_details',[$item->link])}}">
                                    {{$item->service_title}}
                                  </a>
                                </li>
                              @endforeach

                            </ul>
                        </li>
                          <li class=""><a href="{{route('courses')}}">Courses</a></li> 
                           
                          <li class=""><a href="{{route('blogs')}}">Blog</a></li>
                          <li ><a href="{{route('contact_us')}}">Contact Us</a></li> 
                          
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->