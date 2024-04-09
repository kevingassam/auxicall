<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\categories;
use App\Models\configurations;
use App\Models\devis;
use App\Models\projets;
use App\Models\services;
use App\Models\visitors;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function logout()
    {
        auth()->logout();
        return redirect("/");
    }

    public function blog()
    {
        $blogs = blogs::all();
        return view("front.blog", compact("blogs"));
    }

    public function blog_details($id, Request $request)
    {
        $article = blogs::find($id);
        if (!$article) {
            abort(404);
        }

        //save viste unique
        visitors::firstOrCreate(
            [
                'ip' => $request->ip(),
                'id_article' => $id,
                'type'=>"lecture"
            ]
        );

        $categories = categories::all();
        $rescents = blogs::Orderby("id", "Desc")->limit(5)->get();
        return view("front.blog_details", compact("article", "rescents", "categories"));
    }

    public function contact()
    {
        $config = configurations::first();
        return view("front.contact", compact("config"));
    }

    public function about()
    {
        return view("front.about");
    }

    public function welcome()
    {
        $rescents = blogs::Orderby("id", "Desc")->limit(3)->get();
        $services = services::all();
        $last_projet = projets::ORderby("id","Desc")->take("3")->get();
        return view('front.welcome', compact("rescents", "services","last_projet"));
    }

    public function services()
    {
        $services = services::all();
        return view('front.services', compact('services'));
    }


    public function checkout(){
        return view("front.checkout");
    }

    public function cart(){
        return view("front.cart");
    }


    public function services_details($id){
        $service = services::find($id);
        if(!$service){
            //abort 404
            return abort(404);
        }
        $services = services::all();
        return view('front.service-details', compact('service','services'));
    }




    public function show_service_page()
    {
        return view("admin.services");
    }

    public function teams()
    {
        return view("front.teams");
    }


    public function show_categorie_page()
    {
        return view("admin.categories");
    }

    public function show_blog_page()
    {
        return view("admin.blog");
    }

    public function show_devis_page()
    {
        return view("admin.devis");
    }

    public function show_devis_details($id)
    {
        $devis = devis::find($id);
        if (!$devis) {
            abort(404);
        }
        return view("admin.devis_details", compact("devis"));
    }


    public function projets(){
        $projets = projets::all();
        return view("front.projets", compact("projets"));
    }

    public function show_admin_page(){
        return view("admin.contacts");
    }
}
