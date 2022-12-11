<div class="menu">
    <div class="menu-header">
        <a href="index.html" class="menu-header-logo">
            <img src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
        </a>
        <a href="index.html" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="{{asset('uploads')}}/{{auth()->user()->image}}"
                         class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold">{{auth()->user()->name}}</div>
                    <small class="text-muted">{{auth()->user()->role}}</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="/client/profil" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-person dropdown-item-icon"></i> Profile
                </a>
                <a href="login.html" class="dropdown-item d-flex align-items-center text-danger"
                target="_blank" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                 <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
            </div>
        </div>
        <ul>
            <li class="menu-divider">E-Commerce</li>
            <li>
                <a  class="active"
                    href="/client/dashboard">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/client/cart">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Commande</span>
                </a>
                
            </li>
            
            
           
            
         
           
            
        </ul>
    </div>
</div>