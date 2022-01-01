@extends('frontend.layouts.main')
@section('main-container')

  <section style="background-image: url('{{asset($course_detail['course_page_heading_image'])}}')" class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
           <h6>{{$course_detail['course_page_subtitle']}}</h6>
          <h2>{{$course_detail['course_page_title']}}</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                
                  <a href="meeting-details.html"><img src="{{asset($course_detail['course_image'])}}" class="img-fluid"></a>
                </div>
                <div class="down-content">
                  <a style="text-align: center!important;" href="meeting-details.html"><h4>{{$course_detail['course_title']}}</h4></a>
                  <p class="description">
                    {{$course_detail['course_description']}}
                  </p>
   

                  <div class="row">

                  
                    <div class="col-4">
                      <div class="course-card">
                        <div class="course-container">
                          <i class="text-center fas fa-pen-nib"></i>
                            <b>{!!$course_detail['coursecard_subject']!!}</b> <br>
                        </div>
                      </div>
                    </div>

                    <div class="col-4">
                      <div class="course-card">
                        <div class="course-container">
                          <i class="text-center fas fa-pen-nib"></i>
                            <b>{!!$course_detail['coursecard_topic']!!}</b> <br>
                        </div>
                      </div>
                    </div>

                    <div class="col-4">
                      <div class="course-card">
                        <div class="course-container">
                          <i class="text-center fas fa-pen-nib"></i>
                            <b>{!!$course_detail['coursecard_others']!!}</b> <br>
                        </div>
                      </div>
                    </div>    

                  </div>
              
                  <p class="description">
                    {{$course_detail['course_description_more']}}
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button-red">
                <a href="{{route('courses')}}">Back To Main Course Page</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    @endsection