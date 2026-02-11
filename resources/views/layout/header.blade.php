<header id="header">
   <nav class="navbar navbar-expand-lg p-0">
      <div class="container-fluid">
         <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/logo-upi.png')}}" alt=""
               class="imgResponsive"></a>
         <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }}">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">About Us</a>
               </li>
               <li class="nav-item dropdown">
                  <span class="icon"></span>
                  <a class="nav-link" href="{{ route('all_chemicals') }}">
                     Products 
                     <!-- <i class="fa-solid fa-chevron-down"></i> -->
                  </a>

                  <!-- <ul class="subMenu">
                     @foreach($menuCategories as $category)
                        <li class="dropdown">
                           <span class="icon">+</span>
                           <a href="#">{{ $category->name }}</a>

                           @if($category->children->count())
                              <ul class="subMenu submenu-02">
                                 @foreach($category->children as $child)
                                    <li>
                                       <a href="{{ route('coming.soon', $child->slug) }}">
                                          {{ $child->name }}
                                       </a>
                                    </li>
                                 @endforeach
                              </ul>
                           @endif
                        </li>
                     @endforeach
                  </ul> -->
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('quality_safety') }}">Quality & Safety Controls </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('machinery_equipment') }}">Machinery & Equipment</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('packaging_materials') }}">Packaging Materials</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
</header>