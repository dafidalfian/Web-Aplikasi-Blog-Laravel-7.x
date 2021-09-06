<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{url('/home')}}">Kampungku ID</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('/home')}}">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class=active><a class="nav-link" href="{{url('home')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>

            <li class="menu-header">Starter</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-pen"></i> <span>Post</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('post.index')}} ">List Post</a></li>
                <li><a class="nav-link" href="{{route('post.tampil_hapus')}} ">List Post Yang Terhapus</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-book"></i> <span>Kategori</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('category.index')}} ">List Kategori</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-tags"></i> <span>Tags</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('tag.index')}} ">List Tags</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-user"></i> <span>Users</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('user.index')}} ">List User</a></li>
              </ul>
            </li>
            
        </aside>
      </div>