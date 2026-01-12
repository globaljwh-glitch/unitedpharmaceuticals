      <header id="header">
         <nav class="navbar navbar-expand-lg p-0">
            <div class="container-fluid">
               <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset( 'images/logo-upi.png')}}" alt="" class="imgResponsive"></a>
               <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="#">Products <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="subMenu">
                           <li class="dropdown">
                              <span class="icon">+</span>
                              <a href="#">APIs</a>
                              <ul class="subMenu submenu-02">
                                 <li><a href="{{ route('coming.soon', 'anticancers') }}">Anticancers</a></li>
                                 <li><a href="{{ route('coming.soon', 'mri-enhancing-agents') }}">MRI Enhancing Agents</a></li>
                                 <li><a href="{{ route('coming.soon', 'cns-agents') }}">CNS Agents</a></li>
                                 <li><a href="{{ route('coming.soon', 'respiratory-agents') }}">Respiratory Agents</a></li>
                                 <li><a href="{{ route('coming.soon', 'vit-d-derivatives') }}">Vit. D Derivatives</a></li>
                                 <li><a href="{{ route('coming.soon', 'anti-imflammatory-and-analgesic-agents') }}">Anti-inflammatory and Analgesic Agents</a></li>
                                 <li><a href="{{ route('coming.soon', 'polymeric-drugs') }}">Polymeric Drugs</a></li>
                                 <li><a href="{{ route('coming.soon', 'immunomodulators') }}">Immunomodulators</a></li>
                                 <li><a href="{{ route('coming.soon', 'steriods') }}">Steroids</a></li>
                                 <li><a href="{{ route('coming.soon', 'antibiotics') }}">Antibiotics</a></li>   
                              </ul>
                           </li>
                           <li class="dropdown">
                              <span class="icon"></span>
                              <a href="#">Excipients</a>
                              <ul class="subMenu submenu-02">
                                 <li><a href="{{ route('coming.soon', 'additives') }}">Additives</a></li>
                                 <li><a href="{{ route('coming.soon', 'colors') }}">Colors</a></li>
                                 <li><a href="{{ route('coming.soon', 'sweetners') }}">Sweeteners</a></li>
                                 <li><a href="{{ route('coming.soon', 'preservatives') }}">Preservatives</a></li>
                                 <li><a href="{{ route('coming.soon', 'filler') }}">Filler</a></li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('coming.soon', 'quality-and-safety-control') }}">Quality & Safety Controls </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('coming.soon', 'machinery-and-equipment') }}">Machinery & Equipment</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('coming.soon', 'packaging-materials') }}">Packaging Materials</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>