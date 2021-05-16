<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUs;
use App\Mission;
//use App\Vision;
use App\Contact;
use App\Testimonial;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }
// ================================ about us ======================================================//
    public function createAboutUs()
{
    $abt =AboutUs::first();
    return view('home.aboutus.index')->withAbt($abt);
}

public function postcreateAboutUs(Request $request)
{
    $check =Aboutus::first();
    if($check == null)
    {
    $abt =new Aboutus;
    $abt->name =$request->name;
    $abt->save();
    $request->session()->flash('success', 'successful!');
    }else{
        $request->session()->flash('warning', 'abouts us contents exist already, so u can edit only now!'); 
    }
    return back(); 
}

public function editAboutUs($id)
    {
        $abt =AboutUs::find($id);
        return view('home.aboutus.edit')->withAbt($abt);
    }

    public function updateAboutUs(Request $request,$id)
    {
        $abt =AboutUs::find($id);
        $abt->name =$request->name;
    $abt->save();
    $request->session()->flash('success', 'Update successful!');
    return redirect()->action('HomeController@createAboutUs');
    }

//=========================================== end of about us code ==============================================//
//==================================== mission=================================================================//
public function mission()
{
    $m =Mission::first();
    return view('home.mission.index')->withM($m);
}

public function postMission(Request $request)
{
    $m =Mission::first();
    if($m == null)
    {
    $m =new Mission;
    $m->content =$request->content;
    $m->save();
    $request->session()->flash('success', 'successful!');
    }else{
        $request->session()->flash('warning', 'mission contents exist already, so u can edit only now!');
    }
    return back(); 
}

public function editMission($id)
    {
        $m =Mission::find($id);
        return view('home.mission.edit')->withM($m);
    }

    public function updateMission(Request $request,$id)
    {
        $m =Mission::find($id);
        $m->content =$request->content;
    $m->save();
    $request->session()->flash('success', 'Update successful!');
    return redirect()->action('HomeController@mission');
    }

//=======================================end of mission=======================================================//

//=================================vission =============================================================//

/*public function vission()
{
    $v =Vision::first();
    return view('home.vission.index')->withV($v);
}

public function postVission(Request $request)
{
    $v =Vision::first();
    if($v == null)
    {
    $v =new Vision;
    $v->content =$request->content;
    $v->save();
    $request->session()->flash('success', 'successful!');
    }else{
        $request->session()->flash('warning', 'vission contents exist already, so u can edit only now!');
    }
    return back(); 
}

public function editVission($id)
    {
        $v =Vision::find($id);
        return view('home.vission.edit')->withV($v);
    }

    public function updateVission(Request $request,$id)
    {
        $v =Vision::find($id);
        $v->content =$request->content;
    $v->save();
    $request->session()->flash('success', 'Update successful!');
    return redirect()->action('HomeController@vission');
    }*/
//====================================== end vission =================================================//

//============================================create contact us ========================================//
public function createContact()
{
    $c =Contact::first();
    return view('home.contact.index')->withC($c);
}

public function postCreateContact(Request $request)
{
    $check =Contact::first();
    if($check == null){
    $c =new Contact;
    $c->phone =$request->phone;
    $c->email =$request->email;
    $c->facebook =$request->facebook;
    $c->twitter =$request->twitter;
    $c->lindlink =$request->lindlink;
    $c->googleplus =$request->googleplus;
    $c->location =$request->location;
    $c->save();
    $request->session()->flash('success', 'successful!');
    }else{
        $request->session()->flash('warning', 'Contact contents exist already, so u can edit only now!');  
    }
    return back(); 
}

public function editContact($id)
    {
        $c =Contact::find($id);
        return view('home.contact.edit')->withC($c);
    }

    public function updateContact(Request $request,$id)
    {
        $c =Contact::find($id);
        $c->phone =$request->phone;
        $c->email =$request->email;
        $c->facebook =$request->facebook;
        $c->twitter =$request->twitter;
        $c->lindlink =$request->lindlink;
        $c->googleplus =$request->googleplus;
        $c->location =$request->location;
        $c->save();
    
    $request->session()->flash('success', 'Update successful!');
    return redirect()->action('HomeController@createContact');
    }
//=========================================end create contact us ========================================//

//========================================== testimonial ============================================//
public function testimonial()
{
    $t =Testimonial::get();
    return view('home.testimonial.index')->withT($t);
}

public function postTestimonial(Request $request)
{
   $t =new Testimonial;
    $t->name =$request->name;
    $t->school =$request->school;
    $t->content =$request->content;
    $t->save();
    $request->session()->flash('success', 'successful!');
    return back(); 
}

public function viewTestimonial()
{
    $t =Testimonial::get();
    return view('home.testimonial.view')->withT($t); 
}
public function editTestimonial($id)
    {
        $t =Testimonial::find($id);
        return view('home.testimonial.edit')->withT($t);
    }

    public function updateTestimonial(Request $request,$id)
    {
        $t =Testimonial::find($id);
        $t->name=$request->name;
        $t->school=$request->school;
        $t->content =$request->content;
        $t->save();
    
    $request->session()->flash('success', 'Update successful!');
    return redirect()->action('HomeController@viewTestimonial');
    }
    //============================== end of testimonial ======================================//


    //===============================posting on home page =========================================//
    public function posting()
{
    $v =Posting::first();
 
    return view('home.posting.index')->withV($v);
}

public function postPosting(Request $request)
{
    $ch =Posting::first();
    if($ch == null){
    $v =new Posting;
    $v->status = 0;
    $v->content = $request->input('content');
    $v->save();
    $request->session()->flash('success',"SUCCESSFULL.");
    }else{
    $request->session()->flash('warning',"you can only edit the post or delete it.");
    }
    return back(); 
}

public function editPosting($id)
    {
        $p =Posting::find($id);
        return view('home.posting.edit')->withV($p);
    }

    public function updatePosting(Request $request,$id)
    {
        $p =Posting::find($id);
        $p->content=$request->content;
        $p->save();
    
    $request->session()->flash('success', 'Update successful!');
    return redirect()->action('HomeController@posting');
    }

    public function activatePosting(Request $request,$id)
    {
        $p =Posting::find($id);
        $p->status =1;
        $p->save();

        $request->session()->flash('success', 'Activate successful, you p[ost is live now!');
        return redirect()->action('HomeController@posting');
    }

    public function deactivatePosting(Request $request,$id)
{
    $p =Posting::find($id);
    $p->status =0;
    $p->save();
    $request->session()->flash('success', 'Deactivate successful, you post is not active again!');
    return redirect()->action('HomeController@posting');
}

}
