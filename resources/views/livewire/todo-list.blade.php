<div>
    <div class="row row-cols-1 pt-5">
        <div class="col text-center">
            <h1 class="position-relative">My todolist</h1>
        </div>
        <div class="col d-flex justify-content-center mt-4 mb-1">
            <form wire:submit.prevent="submitForm" action="{{action('App\Http\Controllers\TodoListController@store')}}" method="post" enctype="multipart/form-data" class="d-flex flex-row">
                @csrf
                <fieldset @unless(Auth::user()) disabled @endunless>
                    <div class="form-group d-flex flex-column">
                        <input wire:model.lazy="body"  type="text" name="body" class="form-control" placeholder="Add todo here ...." id="body">
                        <button type="submit" class="btn btn-primary">Create todo</button>
                    </div>

                </fieldset>
            </form>
        </div>

        <div class="col mt-1 mb-4 d-flex justify-content-center">
            @if(Auth::user())
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            @else
                <small>
                    <i class="bi bi-info-square"></i>
                    You must be
                    <a href="{{route('register')}}">registered</a> &
                    <a href="{{route('login')}}">logged in</a> to add a todo of to delete your todos.
                    <br>
                </small>
            @endif

        </div>
    </div>
    <div class="row">
        <hr>
    </div>
    <div class="row offset-md-3 col-md-6 ">
        <div class="col my-4">
            <ul class="list-group">
                @foreach($todos as $todo)
                    <li class="list-group-item d-flex justify-content-between ">
                        <p  class="my-0">{{$todo['body']}}
                            <small class="text-secondary ps-2"> <i
                                    class="bi bi-person-square"></i> {{$todo->user->name}}</small></p>
                        @can('remove-todo', $todo)
                            <i wire:click="deleteTodo({{$todo}})" class="bi bi-x-square text-danger"></i>
                        @endcan
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
