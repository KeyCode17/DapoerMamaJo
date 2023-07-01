<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/about*') ? 'active' : '' }}" href="/dashboard/about/about">
                    <span data-feather="book"></span>
                    About
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/category*') ? 'active' : '' }}" href="/dashboard/category">
                    <span data-feather="book-open"></span>
                    Category
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="file-text"></span>
                    My Post
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/promo*') ? 'active' : '' }}" href="/dashboard/promo">
                    <span data-feather="dollar-sign"></span>
                    Promo
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/contacts*') ? 'active' : '' }}" href="/dashboard/contacts">
                    <span data-feather="user"></span>
                    Contacts
                </a>
            </li>
        </ul>
    </div>
</nav>