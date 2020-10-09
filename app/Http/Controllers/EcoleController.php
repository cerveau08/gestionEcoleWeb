<?php

namespace App\Http\Controllers;

use App\Models\Ecole;
use Illuminate\Http\Request;

class EcoleController extends Controller
{
    public $ecoles, $name, $adresse, $ecole_id, $phone, $email, $description;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function index()
    {
        $ecoles = Ecole::latest()->paginate(5);

        return view('ecoles-index',compact('ecoles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->name = '';
        $this->adresse = '';
        $this->ecole_id = '';
        $this->phone = '';
        $this->email = '';
        $this->description = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store(Request $request)
    {
        $ecole = new Ecole();
        $ecole->name = $request->name;
        $ecole->adresse = $request->adresse;
        $ecole->phone = $request->phone;
        $ecole->email = $request->email;
        $ecole->description = $request->description;

        $ecole->save();
        return redirect()->route('ecoles.render');

    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $ecole = Ecole::findOrFail($id);
        $this->ecole_id = $id;
        $this->name = $ecole->name;
        $this->adresse = $ecole->adresse;
        $this->phone = $ecole->phone;
        $this->email = $ecole->email;
        $this->description = $ecole->description;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Ecole::find($id)->delete();
        session()->flash('message', 'Ecoles Deleted Successfully.');
    }
}
