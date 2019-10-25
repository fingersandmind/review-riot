<nav class="navbar navbar-expand-lg custom-navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#retailAdminNavbar" aria-controls="retailAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i></i>
            <i></i>
            <i></i>
        </span>
    </button>
    <div class="collapse navbar-collapse" id="retailAdminNavbar">
        <ul class="navbar-nav m-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/index') }}">
                    <i class="icon-devices_other nav-icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::routeIs('articles.*') ? 'active-page' : ''  }}" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-package nav-icon"></i>
                    Pages
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="appsDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('articles.index') }}">Articles</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('articlecategory.index') }}">Article Categories</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('categories.index') }}">Listing Categories</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('listings.index') }}">Listings</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('reviews.index') }}">Reviews</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('pages.index') }}">Pages</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>