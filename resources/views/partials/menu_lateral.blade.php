<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <h4>Bienvedi@</h4>
                {{--<img src="images/user.png" width="48" height="48" alt="User" />--}}
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                <div class="email">{{ Auth::user()->email }}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>{{ Auth::user()->name }}</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Salir
                            <i class="material-icons">input</i></a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MENU PRINCIPAL</li>
                <li class="active">
                    <a href="#"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i><span>Salir del Sistema</span>
                    </a>

                </li>
                    {!! Html::menu() !!}
                {{--
                <li>
                    <a href="{{url('/')}}">
                        <i class="material-icons">home</i>
                        <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('project-tab.index')}}">
                        <i class="material-icons">folder_special</i>
                        <span>Ficha del Proyecto</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('person.index')}}">
                        <i class="material-icons">person_pin</i>
                        <span>Ficha Tecnica</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="material-icons">insert_drive_file</i>
                        <span>Consolidado</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="material-icons">format_indent_increase</i>
                        <span>Incice</span>
                    </a>
                </li>
                <li class="header">Herramientas del Usuario</li>
                --}}
                <li>
                    <a href="#" class="menu-toggle">
                        <i class="material-icons">swap_calls</i>
                        <span>User Interface (UI)</span>
                    </a>
                    <ul class="ml-menu">

                        <li>
                            <a href="{{url('admin/community-council')}}">Consejos Comunales</a>
                        </li>
                        <li>
                            <a href="{{url('admin/role')}}">Roles del Usuario</a>
                        </li>

                    </ul>
                </li>
        </div>
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2017 <a href="javascript:void(0);">Barrio Nuevo Tricolor</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0
            </div>
        </div>
        <!-- #Footer -->
    </aside>
</section>