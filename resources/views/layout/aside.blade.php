<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="/home" aria-expanded="false"><i class="mdi mr-2 mdi-gauge"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/pendaftar" aria-expanded="false"><i class="mdi mr-2 mdi-account-multiple"></i><span
                                    class="hide-menu">Pendaftar</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="/terima" aria-expanded="false"><i class="mdi mr-2 mdi-account-check"></i><span
                                            class="hide-menu">diterima</span></a></li>
                                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                href="/proses" aria-expanded="false"><i class="mdi mr-2 mdi-account-alert"></i><span
                                                    class="hide-menu">Proses</span></a></li>
                                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                href="/tolak" aria-expanded="false"><i class="mdi mr-2 mdi-account-remove"></i><span
                                                    class="hide-menu">ditolak</span></a></li>
            </ul>

        </nav>
    </div>
    <div class="sidebar-footer">
        <div class="row">
            <div class="col-4 link-wrap">
                <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                        class="ti-settings"></i></a>
            </div>
            <div class="col-4 link-wrap">
                <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                        class="mdi mdi-gmail"></i></a>
            </div>
            <div class="col-4 link-wrap">
                <a href="" class="link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i
                        class="mdi mdi-power"></i></a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
            </div>
            
        </div>
    </div>
</aside>