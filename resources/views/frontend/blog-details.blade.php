@extends('frontend.layouts.main')
@section('main-container')

  <section style="background-image: url('{{asset($cat_blog_detail->heading_image)}}')" class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>{{$cat_blog_detail->bdetail_sub_title}}</h6>
          <h2>{{$cat_blog_detail->bdetail_title}}</h2>
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
                
                  <a href="meeting-details.html"><img src="{{asset($cat_blog_detail['image'])}}" alt=""></a>
                </div>
                <div class="down-content">
                  <a href="meeting-details.html"><h4>{{$cat_blog_detail['bdetail_blog_title']}}</h4></a>
                  <p>{{$cat_blog_detail['location']}}</p>
                  <p class="description">
                    {{$cat_blog_detail['description']}}
                  </p>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="hours">
                        <h5>Author</h5>
                        <p>{{$cat_blog_detail['bdetail_time']}}</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="location">
                        <h5>Location</h5>
                        <p>{{$cat_blog_detail['location']}}</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="book now">
                        <h5>Contact</h5>
                        <p>{{$cat_blog_detail['bdetail_phone_number']}}</p>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="share">
                        <ul>
                        @foreach ( \App\Models\Link::all() as $item )
              
              <li><a href="{{$item['link']}}"><i class="fa fa-{{$item['name']}}"></i></a></li>
            
              @endforeach
            </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button-red">
                <a href="/blogs">Back To Blogs List</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection