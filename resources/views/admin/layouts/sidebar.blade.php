          <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><h6>E-ASKADUTA</h6></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a class="nav-link {{ ($title === "E-ASKADUTA | Aspirasi Saya") ? 'active' : '' }}" href='/aspirasisaya' aria-expanded="true"><i class="ti-receipt"></i><span>Aspirasi Saya</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Progres</span></a>
                                <ul class="collapse">
                                    <li><a href="barchart.html">Ditampung</a></li>
                                    <li><a href="linechart.html">Direkap</a></li>
                                    <li><a href="piechart.html">Disalurkan</a></li>
                                </ul>
                            </li>
                            @can('admin')
                                <li>
                                    <a class="nav-link {{ ($title === "E-ASKADUTA | Aspirasi Admin") ? 'active' : '' }}" href='/admin' aria-expanded="true"><i class="ti-slice"></i><span>Admin</span></a>
                                </li>
                            @endcan
                        </ul>
                    </nav>
                </div>
            </div>
        </div>