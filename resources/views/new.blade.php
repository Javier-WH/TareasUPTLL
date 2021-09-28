@extends("templates.template")
@section("content")
<!-- <link rel="stylesheet" href="CSS/new.css"> -->
  <script type="text/javascript" src="{{ asset('JS/new.js') }}" defer></script>

<h1>Ingresa la nueva tarea</h1>
<div id="form-container">
    <form method="POST" action="{{route('insertTask')}}" id="form">
        @csrf
        <div class="data-container">
            <label for="taskName">Tarea</label>
            <input type="text" id="taskName" name="taskName" required autocomplete="off">
        </div>
        <div class="data-container">
            <label for="taskDescription">Descripcion</label>
            <textarea id="taskDescription" name="taskDescription" cols="30" rows="5" required></textarea>
        </div>
        <div class="data-container" >
            <label for="taskDate">Fecha</label>
            <input type="date" name="taskDate" id="taskDate" required>
        </div>
        
        <img src="IMG/icons/icon15.png" alt="" id="displayed-icon">
        
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
    
    
    
    
    @endsection