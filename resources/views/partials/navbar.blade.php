<ul class="nav nav-pills nav-fill">
    <li class="nav-item">
        <a class="nav-link {{ Request::is('crud*') ? 'active' : '' }}" href="/crud">CRUD</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('fibonacci') ? 'active' : '' }}" href="/fibonacci">FIBONACCI</a>
    </li>

    <li class="nav-item">
        <form action="/logout" method="POST">
            @csrf
            <button class="nav-link" type="submit">Logout</button>
        </form>
    </li>



</ul>
