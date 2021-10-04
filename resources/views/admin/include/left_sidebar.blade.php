<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="{{ asset('admin/images/logo.svg') }}" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
    </div>

    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="{{ asset('admin/images/profile_av.jpg') }}" alt="User"></a>
                    <div class="detail">
                        <h4>Michael</h4>
                        <small>Super Admin</small>
                    </div>
                </div>
            </li>
            <li><a href="{{ route('dashboard.index') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="setting.html"><i class="zmdi zmdi-settings"></i><span>Setting</span></a></li>
            <li><a href="pages.html"><i class="zmdi zmdi-google-pages"></i><span>Pages</span></a></li>
            <li><a href="profile.html"><i class="zmdi zmdi-account"></i><span>My Profile</span></a></li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>File Manager</span></a>
                <ul class="ml-menu">
                    <li class=""><a href="media.html">Images</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                <ul class="ml-menu">
                    <li><a href="blog-post.html">Blog Post</a></li>
                    <li><a href="category.html">Blog Category</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                    <li class="active"><a href="all-blogs.html">All Blogs</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Slider</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('slider.index') }}">All Sliders</a></li>
                    <li><a href="{{ route('slider.create') }}">Add Slider</a></li>
                </ul>
            </li>
            
        </ul>
    </div>
</aside>