<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\BulletinModel; 
 
class BulletinController extends Controller
{

    // <--KAFA ADMIN-->

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bulletins = BulletinModel::all();
        return view ('Manage Bulletin.KAFA Admin.KABulletinList')->with('bulletins', $bulletins);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Manage Bulletin.KAFA Admin.KABulletinCreateInfo');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        BulletinModel::create($input);
        return redirect('bulletin')->with('flash_message', 'Bulletin Addedd!');  
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bulletin = BulletinModel::find($id);
        return view('Manage Bulletin.KAFA Admin.KABulletinView')->with('bulletins', $bulletin);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bulletin = BulletinModel::find($id);
        return view('Manage Bulletin.KAFA Admin.KABulletinEdit')->with('bulletins', $bulletin);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bulletin = BulletinModel::find($id);
        $input = $request->all();
        $bulletin->update($input);
        return redirect('bulletin')->with('flash_message', 'Bulletin Updated!');  
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BulletinModel::destroy($id);
        return redirect('bulletin')->with('flash_message', 'Bulletin deleted!');  
    }

    // <--Parents-->

    public function indexparents()
    {
        $bulletins = BulletinModel::all();
        return view ('Manage Bulletin.Parents.ParentsBulletinList')->with('bulletins', $bulletins);
    }

    public function showparents($id)
    {
        $bulletin = BulletinModel::find($id);
        return view('Manage Bulletin.Parents.ParentsBulletinView')->with('bulletin', $bulletin);
    }

    // <--Teacher-->

    public function indexteacher()
    {
        $bulletins = BulletinModel::all();
        return view ('Manage Bulletin.Teacher.TeacherBulletinList')->with('bulletins', $bulletins);
    }

    public function showteacher($id)
    {
        $bulletin = BulletinModel::find($id);
        return view('Manage Bulletin.Teacher.TeacherBulletinView')->with('bulletin', $bulletin);
    }
}