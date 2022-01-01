@extends('frontend.layouts.main')
@section('main-container')

  <section style="background-image: url('{{asset($course['heading_image'])}}')" class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>{{$course['subtitle']}}</h6>
          <h2>{{$course['title']}}</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page our-courses" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">                                     
                  <div class="section-heading">
                    <h2 class="text-center">{{$course['main_title']}}</h2>
                    <p>{{$course['description']}}</p>
                    <h2 class="text-center">Relevent Other Services</h2>
                  </div> 

                  <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            
            @foreach (\App\Models\CourseDetail::all() as $item)
            
            <div class="item">
              <a href="{{ route('course_details',[$item->link])}}">
              <img class="card-image-style" src="{{asset($item['course_image'])}}" alt="Course One">
              <div class="down-content">
                <h4>{{$item['course_title']}}</h4>
                <p>{{Str::limit($item['course_description'],40)}}</p>
                
              </div>
            </a>
            </div>
              
            @endforeach
          
          </div>
        </div>
        </div>

      </div>
    </div>
    @endsection