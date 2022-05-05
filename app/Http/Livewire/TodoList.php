<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TodoList extends Component
{

    public $body;

    public function render()
    {
        $todos = Todo::with('user')->get();
        return view('livewire.todo-list', compact('todos'));
    }

    public function submitForm(){
        //validation
        $this->validate([
            'body' => 'required|string|max:255'
        ]);


        $user = Auth::user();           //ingelogde user ophalen

        $todo = new Todo();                 //nieuwe taak aanmaken
        $todo->body = $this->body;
        $todo->user_id = $user->id;
        $todo->save();

        $this->body = '';                   //inputveld clearen
    }

    public function deleteTodo(Todo $todo){
        $todo->delete();
    }
}
