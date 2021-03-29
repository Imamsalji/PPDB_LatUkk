<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md ">
        <div class="navbar-header">
                
                <span class="logo-text mt-2">
                    <h3 style="color: white">Peserta didik baru</h3>
                </span>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav d-lg-none d-md-block ">
                <li class="nav-item">
                    <a class="nav-toggler nav-link waves-effect waves-light text-white "
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto mt-md-0 ">
                <li class="nav-item search-box">
                    <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search" style="display: none;">
                        <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                            class="srh-btn"><i class="ti-close"></i></a> </form>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                            src="../assets/images/users/1.jpg" alt="user" class="profile-pic m-r-10">{{auth()->user()->name}}</a>
                </li>
            </ul>
        </div>
    </nav>
</header>