

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('autors*') ? 'active' : '' }}">
    <a href="{{ route('autors.index') }}"><i class="fa fa-edit"></i><span>Autors</span></a>
</li>

<li class="{{ Request::is('editorials*') ? 'active' : '' }}">
    <a href="{{ route('editorials.index') }}"><i class="fa fa-edit"></i><span>Editorials</span></a>
</li>




