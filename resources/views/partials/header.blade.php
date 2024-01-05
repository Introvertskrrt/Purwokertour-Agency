<!-- header.blade.php -->

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="/" class="logo">Purwoker<em> Tour</em></a>

                    <ul class="nav">
                        <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                        <li><a href="/packages" class="{{ Request::is('packages') ? 'active' : '' }}">Packages</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/about">About Us</a>
                                <a class="dropdown-item" href="/testimonials">Testimonials</a>
                                <a class="dropdown-item" href="/terms">Terms</a>
                            </div>
                        </li>
                        <li><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
                        <li><a href="/admin" class="{{ Request::is('admin') ? 'active' : '' }}">Admin</a></li>
                    </ul>

                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>
