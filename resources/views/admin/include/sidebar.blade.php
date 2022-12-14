<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-diagram-2"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.carousel') }}">
                <i class="bi bi-circle"></i>
                <span>The Carousel</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.about.editPage') }}">
                <i class="bi bi-question-circle"></i>
                <span>About</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.service.index') }}">
                <i class="bi bi-clipboard"></i>
                <span>Our Services</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.contact.editPage') }}">
                <i class="bi bi-card-list"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.subscribers') }}">
                <i class="bi bi-arrow-down-circle"></i>
                <span>Subscribed Emails</span>
            </a>
        </li><!-- End Login Page Nav -->

         <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.inbox') }}">
                <i class="bi bi-envelope"></i>
                <span>Inbox</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.logout') }}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Login Page Nav -->
    </ul>

</aside><!-- End Sidebar-->
