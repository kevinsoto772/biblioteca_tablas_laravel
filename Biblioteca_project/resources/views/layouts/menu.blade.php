

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}" style="color:white"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('autors*') ? 'active' : '' }}">
    <a href="{{ route('autors.index') }}" style="color:white"><i class="fa fa-edit"></i><span>Autors</span></a>
</li>

<li class="{{ Request::is('editorials*') ? 'active' : '' }}">
    <a href="{{ route('editorials.index') }}" style="color:white"><i class="fa fa-edit"></i><span>Editorials</span></a>
</li>




<li class="{{ Request::is('libros*') ? 'active' : '' }}">
    <a href="{{ route('libros.index') }}"style="color:white"><i class="fa fa-edit"></i><span>Libros</span></a>
</li>

<li class="{{ Request::is('provedores*') ? 'active' : '' }}">
    <a href="{{ route('provedores.index') }}"style="color:white"><i class="fa fa-edit"></i><span>Provedores</span></a>
</li>

<li class="{{ Request::is('pais*') ? 'active' : '' }}">
    <a href="{{ route('pais.index') }}"style="color:white"><i class="fa fa-edit"></i><span>Pais</span></a>
</li>

<li class="{{ Request::is('estados*') ? 'active' : '' }}">
    <a href="{{ route('estados.index') }}"style="color:white"><i class="fa fa-edit"></i><span>Estados</span></a>
</li>

<li class="{{ Request::is('tiposPrestamos*') ? 'active' : '' }}">
    <a href="{{ route('tiposPrestamos.index') }}"style="color:white"><i class="fa fa-edit"></i><span>Tipos Prestamos</span></a>
</li>

<li class="{{ Request::is('prestamos*') ? 'active' : '' }}">
    <a href="{{ route('prestamos.index') }}"style="color:white"><i class="fa fa-edit"></i><span>Prestamos</span></a>
</li>

