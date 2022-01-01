@extends('frontend.layouts.main')
@section('main-container')

  <section style="background-image: url('{{asset($contact_us['heading-image'])}}')" class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>{{$contact_us['subtitle']}}</h6>
          <h2>{{$contact_us['title']}}</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us meetings-page" id="contact-us">
  
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





    
    



          <div class="mt-5 col-lg-12">
            <div class="mapouter"><div class="gmap_canvas">
              <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Chowdhury%20Centre,%20New%20Eskaton%20Road&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            <style>
            .mapouter{position:relative;text-align:right;width:100%;height:400px;}
            .gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}
            .gmap_iframe {border-radius:20px; width:100%!important;height:400px!important;}
            </style>
            </div>
          </div>

        </div>

       

    
        @endsection