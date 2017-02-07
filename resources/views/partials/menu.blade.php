<li @if(Route::is('/home')) class="active" @endif>
    <a href="{{url('/home')}}">
        <i class="material-icons">home</i>
        <span>Inicio</span>
    </a>
</li>
<li @if(Route::is('project-tab.index')) class="active" @endif>
    <a href="{{route('project-tab.index')}}">
        <i class="material-icons">folder_special</i>
        <span>Ficha del Proyecto</span>
    </a>
</li>