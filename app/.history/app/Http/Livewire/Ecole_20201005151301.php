<?php

namespace App\Http\Livewire;

use App\Models\Ecoles;
use Livewire\Component;

class Ecole extends Component
{
    public $ecoles, $name, $adresse, $ecole_;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->ecoles = Ecoles::all();
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
        $this->ecole_ = '';
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
            'telephone' => 'required',
            'email' => 'required|email',
        ]);

        Ecoles::updateOrCreate(['id' => $this->ecole_], [
            'name' => $this->name,
            'adresse' => $this->adresse
        ]);

        session()->flash('message',
            $this->ecole_ ? 'Ecoles Updated Successfully.' : 'Ecoles Created Successfully.');

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
        $blog = Ecoles::findOrFail($id);
        $this->ecole_ = $id;
        $this->name = $blog->name;
        $this->adresse = $blog->adresse;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Ecoles::find($id)->delete();
        session()->flash('message', 'Ecoles Deleted Successfully.');
    }
}
