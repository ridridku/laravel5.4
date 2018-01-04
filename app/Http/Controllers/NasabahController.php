<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nasabah;
use App\Http\Requests\createNasabah;
use Illuminate\Support\Facades\Session;



class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	 
	 
	  public function __construct(){
      $this->middleware('auth');
  }
    public function index()

    {
// cara 1 tanpa paging
// $data ['nasabah']= Nasabah::all();
// // cara 2
//         $data ['nasabah']= Nasabah::paginate(2);
// // cara 3 pake cutom url
//         $data ['nasabah']=   $data ['nasabah']->setPath('nasabah');
//  $nasabah           = Nasabah::where('alamat','=','soreang')->paginate(3);

        $data ['nasabah']  = Nasabah::paginate(10);
        $data ['nasabah']  =   $data ['nasabah']->setPath('nasabah');
        return view('nasabah.index',$data);


       // return $nasabah;
       // die();
       // $nama='opik';
       // $umur=23;
       // $nasabah= array('aa','bb');
       // return view('nasabah.index',compact('nama','umur','nasabah'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('nasabah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createNasabah $request)
    {
        // $this->validate($request,[
        //     'rekening'=>'required',
        //       'nama_lengkap'=>'required',
        //         'alamat'=>'required']);
        $data =  $request->all();
        Nasabah::create($data);
		Session::flash('success_message','No rekening = '.$request->rekening.',Berhasil dimasukan');
        return redirect('nasabah');





        //return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data ['nasabah']= Nasabah::find($id);
        return view('nasabah.edit',$data);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(createNasabah $request, $id)
    {
       // $this->validate($request,[
       //                          'rekening'=>'required',
       //                          'nama_lengkap'=>'required',
       //                          'alamat'=>'required']);
        $data =  $request->all();
        $nasabah = Nasabah::find($id);
        $nasabah ->update($data);
	   
		 Session::flash('success_message','No rekening = '.$request->rekening.' ,Berhasil Diupdate');
		
        return redirect('nasabah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nasabah = Nasabah::find($id);
        $nasabah ->delete();
        return redirect('nasabah');

    }


     public function search(Request $request)
    {
        $keyword           = $request['keyword'];
         $data ['nasabah']           = Nasabah::where('alamat','=',$keyword)->paginate(10);
        $data ['nasabah'] =    $data ['nasabah']   ->setPath('nasabah');
		
		
		
		
    

        if($keyword !='')
            {        
                return view('nasabah.index',$data);  
            }
        else
            { 
               return redirect('nasabah');
            }
       

     

    }

}
