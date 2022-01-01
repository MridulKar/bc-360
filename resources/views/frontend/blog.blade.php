@extends('frontend.layouts.main')
@section('main-container')

  <section style="background-image: url('{{asset($main_blog_page->heading_image)}}')" class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>{{$main_blog_page->sub_title}}</h6>
          <h2>{{$main_blog_page->title}}</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings meetings-page" id="meetings">
    

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Blogs</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>Blog Catgories</h4>
            <ul>
              @foreach ($cats as $cat)
              <li><a href="{{ route('blogs')}}?category_id={{$cat->id}}">{{$cat->cat_title}}</a></li><br>
              @endforeach
            </ul>
           
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            @foreach ($cat_blog as $item)
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <a href=""><img class="card-image-style" src="{{asset($item->image)}}" alt="New Lecturer Meeting"></a>
                </div>
                <div class="down-content">
                  <a href="#"><h4>{{($item->bdetail_blog_title)}}</h4>
                 
                    <p>{{Str::limit($item->description,40)}}</p>
                    <a class="mt-3 mt-3 btn btn-danger" href="{{ route('blog_details',[$item->blog_link])}}">Read More</a>
                  </a>
                </div>
              </div>
            </div>   
            @endforeach
          </div>
          {!! $cat_blog->render() !!}
        </div>
       
          
     
   
      </div>
    </div>

    @endsection