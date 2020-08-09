<nav class="navbar navbar-expand-md navbar-ligth">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-xl-2 col-md-4 sidebar fixed-top">

                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                    <div class="bottom-border pb-3 mb-3">
                        <img width="50" class="rounded-circle mr-3" src="https://lh3.googleusercontent.com/proxy/ml7T7XRLo_y2Oh1We7dGPDeyczBxUBXtvfs-7b5A57UrZ3sYvSFgD7LR8AWwAeVBrSNXtNosl24" alt="adminmin">
                        <a href="#/" class="text-white">Gerardo A. Belot</a>
                    </div>

                    @include('layouts.admin._navMenu')
                </div>
                <div class="col-xl-10 col-lg-9 col-md-8 py-2 ml-auto bg-dark fixed-top top-navbar">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <h4 class="text-light text-uppercase mt-1">Dashboard</h4>
                        </div>
                        <div class="col-md-5">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control text-white search-input" placeholder="Search....">
                                    <button type="button" class="btn search-button"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <ul class="navbar-nav">
                                <li class="nav-item icon-partent">
                                    <a href="#" class="nav-link icon-bullet">
                                        <i class="fa fa-comments fa-lg text-muted"></i>
                                    </a>
                                </li>
                                <li class="nav-item icon-partent">
                                    <a href="#" class="nav-link icon-bullet">
                                        <i class="fa fa-bell fa-lg text-muted"></i>
                                    </a>
                                </li>
                                <li class="nav-item ml-auto icon-partent">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-sign-out-alt fa-lg text-danger"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
