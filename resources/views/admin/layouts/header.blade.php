<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <div class="navbar-brand col-sm-3 col-md-2 mr-0 text-center">Dapoer Mama Jo</div>
    <div class="form-control form-control-dark py-4"></div>
    <ul class="navbar-nav bg-grey px-3">
        <li class="nav-item text-nowrap">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link">
                    <span data-feather="log-out"></span> Log out
                </button>
            </form>
        </li>
    </ul>
</nav>