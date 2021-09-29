@extends("templates.template")
@section("content")

<link rel="stylesheet" href="CSS/index.css">

<!-- database name task -->
<h1>Tareas</h1>
     
<div id="table-container">
    <table class="table table-light" id="tabla">
        <thead class="thead-dark">
            <tr>
                <th id="tb-icon">Ícono</th>
                <th id="tb-nombre">Nombre</th>
                <th>Descripción</th>
                <th id="tb-date">Fecha</th>
                <th id="tb-action">Acción</th>
           </tr>
        </thead>
    
        <tbody>
            @foreach ($taskList as $task )
            <tr>
                <td>
                    <img src="IMG/icons/icon{{$task->icon}}.png" alt="" class="table-icon"> 
                </td>
                <td class="name-column">
                    <div class="name-div">
                        {{$task->taskName}}
                    </div>
                </td>
                <td class="task-column">
                    <div class="description-div">
                        {{$task->desciption}}
                    </div>
                </td>
                <td>
                    {{$task->date}}
                </td>
                <td>
                    <a href="{{route('delete', $task->id)}}"><img src="IMG/delete.png" alt="" class="table-icon"></a>
                    &nbsp;&nbsp;
                    <a href="{{route('editTask', $task)}}"><img src="IMG/edit.png" alt="" class="table-icon"></a>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="task-controllers">
    {{$taskList->links()}}
</div>

@endsection