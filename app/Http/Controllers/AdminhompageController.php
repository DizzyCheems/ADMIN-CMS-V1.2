<?php

namespace App\Http\Controllers;

use App\Models\adminhompage;
use App\Models\agendas;
use App\Models\User;
use App\Models\Document;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminhompageController extends Controller
{



///Authentication///
 /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('pages.admin_admin_login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('pages.admin_registration');
    }
      
    /**
     * Write code on Method
     * 
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended('/homepage')
                        ->withSuccess('You have Successfully logged in');
        }
  
        return redirect("login")->withSuccess('Sorry! You have entered invalid credentials');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('Great! please login.');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('pages.admin_homepage');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
    
///End///

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_admin_user()
    {
        //
        return view ('pages.admin_registration');
    }

    public function admin_initialize_session()
    {
        //
        return view ('pages.admin_admin_login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function document_store(Request $request)
    {
        // admin registration
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'date_published'=>'required',
            'docs' => 'required|mimes:csv,docx,txt,xlx,xls,pdf|max:2048'

        ]);
         $input = $request->all();
        if ($image = $request->file('file')) {
            $destinationPath = 'documents/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['file'] = "$profileImage";
        }
   

        Document::create($request->all());
        return redirect()->route('executive_documents')
                        ->with('success', 'Control Center administrator authorized');
    
    }


    public function create_document()
    {
        //
        return view ('pages.admin_document_register');
    }

    public function show_document(Document $request)
    {
        //
           //
           $request=Document::all();   
           return view ('pages.admin_documents',['docs'=>$request]);
    }

    public function document_index()
    {
        //
        return view ('pages.admin_document_register');
    }


      /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminhompage  $adminhompage
     * @return \Illuminate\Http\Response
     */
    public function edit_document($id)
    {
        //
         $agendas=Document::find($id);
        return view ('pages.admin_document_update',['agendas'=>$agendas]);
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adminhompage  $adminhompage
     * @return \Illuminate\Http\Response
     */
    public function document_delete($id)
    { 
        //
        $documents=Document::find($id);
        $documents->delete();
        return redirect()->route('executive_documents')
        ->with('success', 'Document, Deleted Successfully');
    }
       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function widgetcalendar()
    {
        //
        return view ('pages.admin_corporatecalendar');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function scheduleregister(Request $request)
    {
        // admin registration
        $request->validate([
            'eventname'=>'required',
            'participants'=>'required'

        ]);
        User::create($request->all());
        return redirect()->route('executive_calendar')
                        ->with('success', 'Schedule Registered');
    
    }

  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_inbox_view()
    {
        //
        return view ('pages.admin_inbox_message');
    }    

        /**
     * Display the specified resource.
     *
     * @param  \App\Models\adminhompage  $adminhompage
     * @return \Illuminate\Http\Response
     */
    public function showschedule(adminhompage $adminhompage)
    {
        //
           //
           $schedule=agendas::all();   
           return view ('pages.admin_corporatecalendar',['schedules'=>$schedule]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agendaindex()
    {
        //
    return view ('pages.addagenda');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // admin registration
        $request->validate([
            'name'=>'required',
            'password'=>'required'

        ]);
        User::create($request->all());
        return redirect()->route('executive_homepage')
                        ->with('success', 'Control Center administrator authorized');
    
    }
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function agendastore(Request $request)
 {   
    $message=[
        'required' => 'This credential field is required!'
    ];
    $request->validate([
        'agenda'=>'required',
        'date'=>'required',
        'deadline'=>'required',
        'person'=>'required'


    ],$message);
    agendas::create($request->all());
    return redirect()->route('executive_homepage')
                    ->with('success', 'Agenda Registered Successfully');
                }


                
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adminhompage  $adminhompage
     * @return \Illuminate\Http\Response
     */
    public function show(adminhompage $adminhompage)
    {
        //
           //
           $agendas=agendas::all();   
           return view ('pages.admin_homepage',['agendas'=>$agendas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminhompage  $adminhompage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $agendas=agendas::find($id);
        return view ('pages.admin_updateagenda',['agendas'=>$agendas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adminhompage  $adminhompage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adminhompage $adminhompage)
    {
        //
           //
           $message=[
            'required' => 'This credential field is required!'
        ];
        $request->validate([
            'agenda'=>'required',
            'date'=>'required',
            'deadline'=>'required',
            'person'=>'required'

        ],$message);
        $agendas=agendas::find($request->id);
        $agendas->agenda=$request->agenda;
        $agendas->date=$request->date;    
        $agendas->deadline=$request->deadline;
        $agendas->person=$request->person;
        $agendas->save();
        return redirect()->route('executive_homepage')
        ->with('success', 'Agenda, Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adminhompage  $adminhompage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        
        //
        $agendas=agendas::find($id);
        $agendas->delete();
        return redirect()->route('executive_homepage')
        ->with('success', 'Agenda, Deleted Successfully');
    }
}
