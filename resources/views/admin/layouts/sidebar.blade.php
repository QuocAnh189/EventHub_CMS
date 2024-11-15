<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">EventHub</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">||</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Admin Dashboard</li>
            <li class="{{ setActive(['admin.dashboard']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="{{ setActive(['admin.users.*']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                </a>
            </li>

            <li class="{{ setActive(['admin.categories.*']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-list"></i>
                    <span>Categories</span>
                </a>
            </li>

            <li class="{{ setActive(['admin.events.*']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-ruler"></i>
                    <span>Events</span>
                </a>
            </li>

            <li class="{{ setActive(['admin.coupons.*']) }}">
                <a class="nav-link" href="">
                    <i class="fab fa-ravelry"></i>
                    <span>Coupons</span>
                </a>
            </li>

            <li class="{{ setActive(['admin.ticket-types.*']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-sign"></i>
                    <span>Ticket Types</span>
                </a>
            </li>

            <li class="{{ setActive(['admin.reviews.*']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-stamp"></i>
                    <span>Reviews</span>
                </a>
            </li>

            <li class="{{ setActive(['admin.labels.*']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-th"></i>
                    <span>Labels</span>
                </a>
            </li>

            <li class="{{ setActive(['admin.payments.*']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-tablet-alt"></i>
                    <span>Payments</span>
                </a>
            </li>

            <li class="{{ setActive(['admin.tickets.*']) }}">
                <a class="nav-link" href="">
                    <i class="fab fa-teamspeak"></i>
                    <span>Tickets</span>
                </a>
            </li>

            <li class="{{ setActive(['admin.conversations.*']) }}">
                <a class="nav-link" href="">
                    <i class="fab fa-weebly"></i>
                    <span>Conversations</span>
                </a>
            </li>

            <li class="{{ setActive(['admin.functions.*']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-tired"></i>
                    <span>Functions</span>
                </a>
            </li>

            <li class="{{ setActive(['admin.commands.*']) }}">
                <a class="nav-link" href="">
                    <i class="fab fa-themeco"></i>
                    <span>Commands</span>
                </a>
            </li>

            <li class="{{ setActive(['admin.roles.*']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-transgender"></i>
                    <span>Roles</span>
                </a>
            </li>

            <li class="{{ setActive(['admin.permission.*']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-vial"></i>
                    <span>Permission</span>
                </a>
            </li>
    </aside>
</div>
