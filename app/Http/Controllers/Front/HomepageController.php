<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Mail;

use Illuminate\Support\Facades\Validator;

//models
use App\Models\Category;
use App\Models\Article;
use App\Models\Page;
use App\Models\Contact;
use App\Models\Config;
use Illuminate\Support\Facades\Cache;

class HomepageController extends Controller
{
    //tüm viewlere pages data sını yollar önemli!!
    public function __construct(){
        if(Config::find(1)->active==0){
            return redirect()->to('site-bakımda')->send();
        }
        view()->share('pages',Page::where('status',1)->orderBy('order','ASC')->get());
        view()->share('categories',Category::where('status',1)->inRandomOrder()->get());

    }

    public function index(){


        $data['articles'] = Article::with('getCategory')->where('status',1)->whereHas('getCategory',function($query){
            $query->where('status',1);
        })->orderBy('created_at','DESC')->paginate(5);
        $data['articles']->withPath(url('/sayfa'));


        return view('front.homepage',$data);
    }

    public function single($category,$slug){
        $category=Category::whereSlug($category)->first() ?? abort(403,"Böyle bir kategori bulunamadı");
        $article=Article::whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(403, 'Böyle bir yazı bulunamadı');
        $article->increment('hit');
        $data['article']=$article;

        return view('front.single',$data);
    }

    public function category($slug){
        $category=Category::whereSlug($slug)->first() ?? abort(403,'Böyle bir kategori bulunamadı');
        $data['category']=$category;
        $data['articles']=Article::where('category_id', $category->id)->where('status',1)->orderBy('created_at','DESC')->paginate(4);


        return view('front.category',$data);
    }

    public function page($slug){
        $page=Page::whereSlug($slug)->first() ?? abort(403,'Böyle bir kategori bulunamadı');
        $data['page']=$page;

        return view('front.page',$data);
    }

    public function contact(){
        return view('front.contact');
    }

    public function contactpost(Request $request){

        $validator = Validator::make($request->post(), [
            'name'=>'required|min:5',
            'email'=>'required|email',
            'topic'=>'required',
            'messeage'=>'required|min:10'
        ]);

        if($validator->fails()){
            return redirect()->route('contact')->withErrors($validator)->withInput();
        }

        Mail::raw(' Mesajı Gönderen: '.$request->name.'
                     Mesajı Gönderen Mail: '.$request->email.'
                     Mesajın Konusu: '.$request->topic.'
                     Mesaj: '.$request->messeage.'
                     Mesaj Gönderilme Tarihi: '.now().'', function($message) use($request){
            $message->from('rootkodbi@gmail.com', 'Blog Sitesi');
            $message->to('rootkodbi@gmail.com');
            $message->subject($request->name. ' iletişimden mesaj gönderdi!');

        });

        // $contact = new Contact;
        // $contact->name=$request->name;
        // $contact->email=$request->email;
        // $contact->topic=$request->topic;
        // $contact->messeage=$request->messeage;bi@
        // $contact->save();
        return redirect()->route('contact')->with('success','Mesajınız bize iletildi. Teşekkür ederiz!');

    }
}
