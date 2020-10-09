<?php

namespace App\Http\Livewire;

use App\Models\Ecole;
use Livewire\Component;

class Ecole extends Component
{
    public $blogs, $title, $body, $blog_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->blogs = Ecole::all();
        return view('livewire.blogs');
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
        $this->title = '';
        $this->body = '';
        $this->blog_id = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Ecole::updateOrCreate(['id' => $this->blog_id], [
            'title' => $this->title,
            'body' => $this->body
        ]);

        session()->flash('message',
            $this->blog_id ? 'Ecole Updated Successfully.' : 'Ecole Created Successfully.');

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
        $blog = Ecole::findOrFail($id);
        $this->blog_id = $id;
        $this->title = $blog->title;
        $this->body = $blog->body;

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
        session()->flash('message', 'Ecole Deleted Successfully.');
    }
}
