<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('assets/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @if(Auth::check() && Auth::user()->usersRole->id == 1)
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item has-treeview {{ Request::routeIs('types','create','types.edit') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('types','create','types.edit') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tint"></i>
                        <p>
                            News Types
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('types') }}" class="nav-link {{ Request::routeIs('types','create','types.edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Types</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ Request::routeIs('country','country.create','country.edit','division_city','division_city.create','division_city.edit','zilla_state','zilla_state.create','zilla_state.edit','upzilla_substate','upzilla_substate.create','upzilla_substate.edit') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('country','country.create','country.edit','division_city','division_city.create','division_city.edit','zilla_state','zilla_state.create','zilla_state.edit','upzilla_substate','upzilla_substate.create','upzilla_substate.edit') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-flag"></i>
                        <p>
                            News Country
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('country') }}" class="nav-link {{ Request::routeIs('country','country.create','country.edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Country</p>
                            </a>

                            <a href="{{ route('division_city') }}" class="nav-link {{ Request::routeIs('division_city','division_city.create','division_city.edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Division/City</p>
                            </a>

                            <a href="{{ route('zilla_state') }}" class="nav-link {{ Request::routeIs('zilla_state','zilla_state.create','zilla_state.edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Zilla/State</p>
                            </a>

                            <a href="{{ route('upzilla_substate') }}" class="nav-link {{ Request::routeIs('upzilla_substate','upzilla_substate.create','upzilla_substate.edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>UpZilla/Sub-State</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ Request::routeIs('category','category.create','category.edit','sub_category','sub_category.create','sub_category.edit') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('category','category.create','category.edit','sub_category','sub_category.create','sub_category.edit') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            News Category
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('category') }}" class="nav-link {{ Request::routeIs('category','category.create','category.edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>

                            <a href="{{ route('sub_category') }}" class="nav-link {{ Request::routeIs('sub_category','sub_category.create','sub_category.edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub-Category</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ Request::routeIs('tag','tag.create','tag.edit') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('tag','tag.create','tag.edit') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            News Tag
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('tag') }}" class="nav-link {{ Request::routeIs('tag','tag.create','tag.edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tag</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview {{ Request::routeIs('gallery','gallery.image') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('gallery','gallery.image') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-image"></i>
                        <p>
                            News Gallery
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('gallery') }}" class="nav-link {{ Request::routeIs('gallery','gallery.image') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gallery</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ Request::routeIs('news','news.create','news.edit','news.video','news.video_create','news.video_edit') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('news','news.create','news.edit','news.video','news.video_create','news.video_edit') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book-reader"></i>
                        <p>
                            News Post
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('news') }}" class="nav-link {{ Request::routeIs('news','news.create','news.edit','news.video','news.video_create','news.video_edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>News</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ Request::routeIs('emailsubscribe','emailsubscribe.create') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('emailsubscribe','emailsubscribe.create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope-open"></i>
                        <p>
                            Email Subscriber
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('emailsubscribe') }}" class="nav-link {{ Request::routeIs('emailsubscribe','emailsubscribe.create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subscriber</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            User Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User</p>
                            </a>
                        </li>
                    </ul>
                </li>

                @elseif(Auth::check() && Auth::user()->usersRole->id == 2)
                    <li class="nav-item">
                        <a href="{{ route('editor.dashboard') }}" class="nav-link {{ Request::routeIs('editor.dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview {{ Request::routeIs('news','news.create','news.edit','news.video','news.video_create','news.video_edit') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ Request::routeIs('news','news.create','news.edit','news.video','news.video_create','news.video_edit') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-book-reader"></i>
                            <p>
                                News Post
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('news') }}" class="nav-link {{ Request::routeIs('news','news.create','news.edit','news.video','news.video_create','news.video_edit') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>News</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>