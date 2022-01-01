<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Service;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\Task;
use App\Models\Category;
use App\Models\CourseSlider;
use App\Models\CourseDetail;
use App\Models\CourseCard;
use App\Models\Course;
use App\Models\Intro;
use App\Models\AboutSlider;
use App\Models\Gallery;
use App\Models\HomeContact;
use App\Models\Client;
use App\Models\GoodStory;
use App\Models\FooterContact;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage(){
        $intro = Intro::first();
        $aboutSlider = AboutSlider::all();
        $gallery = Gallery::all();
        $homeContact = HomeContact::all();
        $client = Client::all();
        $goodStory = GoodStory::first();
        $footerContact = FooterContact::first();
        $task = Task::all();

        return view('frontend.index', compact('task','intro','aboutSlider','gallery','homeContact','client','goodStory','footerContact'));
    }

    public function serviceDetail($link){
        $service = Service::where('link', $link)->first();
        return view('frontend.service-details', compact('service'));
    }

    public function course(){
        $course = Course::first();
        return view('frontend.courses', compact('course'));
    }

    public function courseDetail($link){
        $course_detail = CourseDetail::where('link', $link)->first();
        return view('frontend.course-detail', compact('course_detail'));
    }

    public function blogs(){
        $category_id=request('category_id');

      
            $query = DB::table('blogs');
                    if($category_id){
                       $query->where('cat_id',$category_id);
                    }
            $cat_blog=$query->paginate(2);
                    
        $cats=DB::table('categories')->get();

        $blog = Blog::first();
        $main_blog_page =  DB::table('main_blog_page')->first();
        return view('frontend.blog', compact('cat_blog','cats','blog', 'main_blog_page'));
    }

 
    public function blog_details($link) {
        $cat_blog_detail = Blog::where('blog_link', $link)->first();
        return view('frontend.blog-details', compact('cat_blog_detail'));
    }

    public function contact_us(){
        $footerContact = FooterContact::first();
        $contact_us = ContactUs::first();
        return view('frontend.contact', compact('footerContact','contact_us'));
    }

    //public function mail(Request $request){
    //$details = [
    //'name' => $request->name,
    //'email' => $request->email,
    //'subject' => $request->subject,
    //'message' => $request->message,
    //];
    //
    //Mail::to('your email')->send(new ContactMail($details));
    //return back()->with('message_sent', 'Message sent!');
    //}
    
    public function create_contact(Request $request){
       
        $data =  $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['subject']=$request->subject;
    	$data['message']=$request->message;
    	DB::table('contact_forms')->insert($data);
    
        return back()->with('success', 'Thanks for Contact us!');
    }
    

}