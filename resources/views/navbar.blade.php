<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Divops</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Material
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('material.create')}}">Create</a></li>
                        <li><a class="dropdown-item" href="{{route('material.index')}}">Get</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownOrder" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Order
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownOrder">
                        <li><a class="dropdown-item" href="{{route('order.create')}}">Create</a></li>
                        <li><a class="dropdown-item" href="{{route('order.index')}}">Get</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProduction" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Production
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownProduction">
                        <li><a class="dropdown-item" href="{{route('prod.create')}}">Create</a></li>
                        <li><a class="dropdown-item" href="{{route('prod.index')}}">Get</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLogistic" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Logistic
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownLogistic">
                        <li><a class="dropdown-item" href="{{route('logistic.create')}}">Create</a></li>
                        <li><a class="dropdown-item" href="{{route('logistic.index')}}">Get</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMaintenance" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Maintenance
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMaintenance">
                        <li><a class="dropdown-item" href="{{route('mt.create')}}">Create</a></li>
                        <li><a class="dropdown-item" href="{{route('mt.index')}}">Get</a></li>
                    </ul>
                </li>
            </div>
        </div>
    </div>
</nav>