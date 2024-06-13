<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\BulletinModel; 
class BulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bulletins = BulletinModel::paginate(5); // Adjust the number as needed
        return view('Manage Bulletin.KABulletinList')->with('bulletins', $bulletins);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ManageBulletin.KABulletinCreateInfo');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'tajuk' => 'required|string|max:255',
        'tarikh' => 'required|date',
        'kepentingan' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'daripada' => 'required|string|max:255',
        'kepada' => 'required|string|max:255',
        'isi' => 'required|string',
    ]);

    // Create a new bulletin record with the validated data
    BulletinModel::create($validatedData);

    // Redirect to the bulletin index view with a success message
    return redirect()->route('bulletin.index')->with('flash_message', 'Bulletin Added!');
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
        return view('Manage Bulletin.KABulletinView')->with('bulletins', $bulletin);
    }
 
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BulletinController::destroy($id);
        return redirect('bulletin')->with('flash_message', 'Bulletin deleted!');  
    }
}