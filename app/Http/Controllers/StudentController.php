<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\URL;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    









    public function index()

    {
        





       $data = DB::table('students')->paginate(5);
//$data= Student::all();
        return view('student',compact('data'));
   

    }
        
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search( )

    {





        $data = DB::table('students')->paginate(5);
        //$data= Student::all();
//return view('student',compact('data'));


       $search=$_GET['query'];
       $dataa=Student::where('id','LIKE','%'.$search.'%')->orWhere('title','LIKE','%'.$search.'%')->orwhere('description','LIKE','%'.$search.'%')->get();
       return view('student',compact('dataa','data'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    $request->validate([ 'title'=>'required ',
        'description'=>'required'
        
    ]);

   

 


    $hh=Student::create($request->all());
      $kk=$hh->id;
     


      $request->session()->put('data',$request->input());
      $k=$request->session()->get('data');
      if($k['title']== "admin" && $k['description']=="admin"){
     
      
  
   return redirect()->route('students.index')->with('success', "your record insert successfully AND Registration numer is:".$kk);}
       else{return view('welcome');}
       
      
//$path=$request->file('image')->store('upload');      echo $path; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {       $student = Student::find($id);
         
     

          
        return view('show', compact('student'));

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    $contact = Student::find($id);
         
     

          
        return view('edit', compact('contact'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    { 
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            
        ]);
        
        
        
        
        $yy = Student::find($id);
        $yy->title = $request->get('title');
        $yy->description = $request->get('description');
       
        $yy->save();
        
    

        return redirect()->route('students.index')->with('up', 'your record updated successfully');
   // return redirect()->route('students.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $data=Student::find($id);
        
        $data->delete();
        return redirect()->route('students.index')->with('del', 'your record delete successfully');;
 
        //
    }
    
                             



}
