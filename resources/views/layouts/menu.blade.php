<li class="nav-item {{ Request::is('newsletters*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('newsletters.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Newsletters</span>
    </a>
</li>
<li class="nav-item {{ Request::is('messages*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('messages.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Messages</span>
    </a>
</li>

<li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('articles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('articles.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Articles</span>
    </a>
</li>
<li class="nav-item {{ Request::is('ecommerceCategories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('ecommerceCategories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Ecommerce Categories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('ecommerceArticles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('ecommerceArticles.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Ecommerce Articles</span>
    </a>
</li>
<li class="nav-item {{ Request::is('ecommercePaniers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('ecommercePaniers.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Ecommerce Paniers</span>
    </a>
</li>
