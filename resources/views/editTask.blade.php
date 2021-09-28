@extends("templates.template")
@section("content")

  <script type="text/javascript" src="{{ asset('JS/edit.js') }}" defer></script>

<h1>Ingresa la nueva tarea</h1>
<div id="form-container">
    <form method="POST" action="{{route('editTaskPost', $task)}}" id="form">
    @method("put")
    @csrf

        <div class="data-container">
            <label for="taskName">Tarea</label>
            <input type="text" id="taskName" name="taskName" required autocomplete="off" value="{{$task->taskName}}">
        </div>
        <div class="data-container">
            <label for="taskDescription">Descripcion</label>
            <textarea id="taskDescription" name="taskDescription" cols="30" rows="5" required>{{$task->desciption}}</textarea>
        </div>
        <div class="data-container" >
            <label for="taskDate">Fecha</label>
            <input type="date" name="taskDate" id="taskDate" required value="{{$task->date}}">
        </div>
        
        <img src="{{ asset('IMG/icons/icon10.png')}}" alt="" id="displayed-icon">
        
        <div class="data-container">
            <label for="taskIcon">Icono</label>
            <select name="icon" id="taskIcon">
                <option value="1">Cena</option>
                <option value="2">Auto</option>
                <option value="3">Reparar</option>
                <option value="4">Avion</option>
                <option value="5">Acampar</option>
                <option value="6">Pizarra</option>
                <option value="7">Computadora</option>
                <option value="8">Football</option>
                <option value="9">Boda</option>
                <option value="10">Iglesia</option>
                <option value="11">Importante</option>
                <option value="12">Corazon</option>
                <option value="13">Enojado</option>
                <option value="14">Triste</option>
                <option value="15">Feliz</option>
                
            </select>
        </div>
        
        <button type="submit" id="btn-guardar"><img src="IMG/save.png" alt="" id="btn-img">&nbsp;Guardar</button>
        
    </form>

    
</div>
 
 
<script>
    let selected = "{{$task->icon}}";
    let icon1 = "{{ asset('IMG/icons/icon1.png')}}";
    let icon2 = "{{ asset('IMG/icons/icon2.png')}}";
    let icon3 = "{{ asset('IMG/icons/icon3.png')}}";
    let icon4 = "{{ asset('IMG/icons/icon4.png')}}";
    let icon5 = "{{ asset('IMG/icons/icon5.png')}}";
    let icon6 = "{{ asset('IMG/icons/icon6.png')}}";
    let icon7 = "{{ asset('IMG/icons/icon7.png')}}";
    let icon8 = "{{ asset('IMG/icons/icon8.png')}}";
    let icon9 = "{{ asset('IMG/icons/icon9.png')}}";
    let icon10 = "{{ asset('IMG/icons/icon10.png')}}";
    let icon11 = "{{ asset('IMG/icons/icon11.png')}}";
    let icon12 = "{{ asset('IMG/icons/icon12.png')}}";
    let icon13 = "{{ asset('IMG/icons/icon13.png')}}";
    let icon14 = "{{ asset('IMG/icons/icon14.png')}}";
    let icon15 = "{{ asset('IMG/icons/icon15.png')}}";
</script>
    
    
    @endsection