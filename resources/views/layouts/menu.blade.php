<li class="nav-item {{ Request::is('newsletters*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('newsletters.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Newsletters</span>
    </a>
</li>
