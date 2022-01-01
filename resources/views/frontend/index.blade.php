@extends('frontend.layouts.main')
@section('main-container')
  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="{{asset($intro['bg-video'])}}" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
                  
              <h6>{{$intro['first_message']}}</h6> 
              <h2>{{$intro['welcome_message']}}</h2>
              <p>{{$intro['short_description']}}</p>
              
              <div class="main-button-red">
                  <div class=""><a href="{{route('contact_us')}}">Join Us Now!</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
           
            @foreach($aboutSlider as $item)
          <div class="item">
            <div class="icon">
              <img class="top-slider-image" src="{{asset($item['about_slider_image'])}}" alt="">
            </div>
            <div class="down-content">
              <h4>{{$item['about_slider_title']}}</h4>
              <p>{{$item['about_slider_description']}}</p>
            </div>
          </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Discover Us</h2>
          </div>
        </div>
          <div class="row">
            <div class="photo-galla col-lg-12">

          @if (count($gallery)) > 0)
              @foreach($gallery as $item)
                <div class="photo-gal">
                  <img src="{{asset($item['gallery_image'])}}" alt="">
                </div>
              @endforeach
          @endif
              
            </div>
          </div>
      </div>
    </div>
  </section>

  <section style="background-image: url('{{asset($intro['bg-image-one'])}}')" class="upcoming-meetings apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          
          <div class="row">

            @foreach ($homeContact as $item) {}
            <div class="col-lg-12">
              <div class="item">
                <h3>{{$item['contact_title']}}</h3>
                <p>{{$item['contact_description']}}</p>
                <div class="main-button-red">
                  <div class="scroll-to-section">
                      <a type="button" href="{{route('contact_us')}}">{{$item['contact_button']}}</a>
                  </div>
              </div>
              </div>
            </div>
            @endforeach
            
            
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">

            @foreach ($task as $item)

            <article class="accordion">
                <div class="accordion-head">
                    <span>{{$item['title']}}</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>{{$item['description']}}</p>
                    </div>
                </div>
            </article>
            @endforeach
            
        </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>What our clients say</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
        
            @foreach($client as $item)
            <div  class="item">
              <div style="border-radius: 10px;" class=" scroll down-content">
                <div class="card-img">
                <img style="height: 100px; width: 100px;" src="{{asset($item['client_image'])}}" alt="Course One">
              </div>
                <h4>{{($item['client_detail'])}}</h4>
                <p>{{($item['client_words'])}}</p>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="background-image: url('{{asset($intro['bg-image-two'])}}')" class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>Our Success At a glance</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">{{$goodStory['success_rate']}}</div>
                    <div class="count-title">Success Rate</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">{{$goodStory['project_done']}}</div>
                    <div class="count-title">Project Done</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">{{$goodStory['happy_students']}}</div>
                    <div class="count-title">Happy Students</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">{{$goodStory['awards']}}</div>
                    <div class="count-title">Awards</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 

       

        <div class="col-lg-6 align-self-center">
          <div style="background-image: url('{{asset($goodStory['video_image'])}}')" class="video" >
            <a href="{{$goodStory['video_link']}}" target="_blank"><img src="{{url('frontend/assets/images/play-icon.png')}}" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">

              <form  id="contact" action="{{route('create-contact')}}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Let's get in touch</h2>
                  </div>
                  
                 

                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  @if($errors->has('name'))
                      <div class="error">{{ $errors->first('name') }}</div>
                  @endif
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                  @if($errors->has('email'))
                      <div class="error">{{ $errors->first('email') }}</div>
                  @endif
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                 
                      <div class="col-lg-12">
                        <fieldset >
                          <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                        </fieldset>
                      </div> 
                </div>
              </form>

            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>{{$footerContact['phone_number']}}</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>{{$footerContact['email']}}</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>{{$footerContact['address']}}</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>{{$footerContact['website']}}</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    @endsection
   