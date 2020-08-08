<nav class="navbar navbar-expand-md navbar-ligth">
    <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="myNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 sidebar fixed-top">
                    <a href="/" class="text-white d-block navbar-brand mx-auto text-center mb-4 bottom-border py-3">Tester Application</a>
                    <div class="bottom-border pb-3 mb-3">
                        <img width="50" class="rounded-circle mr-3" src="https://lh3.googleusercontent.com/proxy/ml7T7XRLo_y2Oh1We7dGPDeyczBxUBXtvfs-7b5A57UrZ3sYvSFgD7LR8AWwAeVBrSNXtNosl24" alt="adminmin">
                        <a href="#/" class="text-white">Gerardo A. Belot</a>
                    </div>
                    @include('layouts.admin._navMenu')
                </div>
                <div class="col-lg-9 py-2 ml-auto bg-dark fixed-top">
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
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-comments fa-lg text-muted"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-bell fa-lg text-muted"></i>
                                    </a>
                                </li>
                                <li class="nav-item ml-auto">
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
