@extends("templates.template")
@section("content")


    <script type="text/javascript" src="{{ asset('JS/new.js') }}" defer></script>

<h1>Edita la Tarea</h1>
<div id="form-container">
    <form method="POST" action="{{route('editTaskPost', $task)}}" id="form">
    @method("put")
    @csrf

        <div class="data-container">
            <label for="taskName">Tarea</label>
            <input type="text" id="taskName" name="taskName" required autocomplete="off" value="{{$task->taskName}}" maxlength="50">
        </div>
        <div class="data-container">
            <label for="taskDescription">Descripcion</label>
            <textarea id="taskDescription" name="taskDescription" cols="30" rows="5" required maxlength="500">{{$task->desciption}}</textarea>
        </div>
        <div class="data-container" >
            <label for="taskDate">Fecha</label>
            <input type="date" name="taskDate" id="taskDate" required value="{{$task->date}}">
        </div>
        
        <img src="{{ asset('IMG/icons/icon10.png')}}" alt="" id="displayed-icon">
        
        <div class="data-container">
            <label for="taskIcon">Icono</label>
            <select name="icon" id="taskIcon">
                <option value="1" @if($task->icon == 1) selected @endif>Cena</option>
                <option value="2" @if($task->icon == 2) selected @endif>Auto</option>
                <option value="3" @if($task->icon == 3) selected @endif>Reparar</option>
                <option value="4" @if($task->icon == 4) selected @endif>Avion</option>
                <option value="5" @if($task->icon == 5) selected @endif>Acampar</option>
                <option value="6" @if($task->icon == 6) selected @endif>Pizarra</option>
                <option value="7" @if($task->icon == 7) selected @endif>Computadora</option>
                <option value="8" @if($task->icon == 8) selected @endif>Football</option>
                <option value="9" @if($task->icon == 9) selected @endif>Boda</option>
                <option value="10" @if($task->icon == 10) selected @endif>Iglesia</option>
                <option value="11" @if($task->icon == 11) selected @endif>Importante</option>
                <option value="12" @if($task->icon == 12) selected @endif>Corazon</option>
                <option value="13" @if($task->icon == 13) selected @endif>Enojado</option>
                <option value="14" @if($task->icon == 14) selected @endif>Triste</option>
                <option value="15" @if($task->icon == 15) selected @endif>Feliz</option>
            </select>
        </div>
        
        <button type="submit" id="btn-guardar"><img src="IMG/save.png" alt="" id="btn-img">&nbsp;Guardar</button>
        
    </form>

    
</div>
 

    
    
    @endsection