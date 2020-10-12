<?php

namespace App\Http\Livewire;

use App\Models\Ecole;
use Livewire\Component;

class Ecoles extends Component
{
    public $ecoles, $name, $adresse, $ecole_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->ecoles = Ecole::all();
        return view('livewire.ecoles');
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
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'adresse' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        Ecole::updateOrCreate(['id' => $this->ecole_id], [
            'name' => $this->name,
            'adresse' => $this->adresse,
            'email' => $this->email,
            'phone' => $this->phone,
            'description' => $this->description
        ]);

        session()->flash('message',
            $this->ecole_id ? 'Ecoles Updated Successfully.' : 'Ecoles Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
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
