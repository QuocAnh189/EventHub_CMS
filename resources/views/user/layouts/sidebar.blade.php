<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">EventHub</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">||</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">User Dashboard</li>
            <li class="{{ setActive(['user.dashboard']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="{{ setActive(['user.events.*']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-ruler"></i>
                    <span>Events</span>
                </a>
            </li>

            <li class="{{ setActive(['user.coupons.*']) }}">
                <a class="nav-link" href="">
                    <i class="fab fa-ravelry"></i>
                    <span>Coupons</span>
                </a>
            </li>

            <li class="{{ setActive(['user.ticket-types.*']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-sign"></i>
                    <span>Ticket Types</span>
                </a>
            </li>

            <li class="{{ setActive(['user.reviews.*']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-stamp"></i>
                    <span>Reviews</span>
                </a>
            </li>

            <li class="{{ setActive(['user.payments.*']) }}">
                <a class="nav-link" href="">
                    <i class="fas fa-tablet-alt"></i>
                    <span>Payments</span>
                </a>
            </li>

            <li class="{{ setActive(['user.tickets.*']) }}">
                <a class="nav-link" href="">
                    <i class="fab fa-teamspeak"></i>
                    <span>Tickets</span>
                </a>
            </li>

            <li class="{{ setActive(['user.conversations.*']) }}">
                <a class="nav-link" href="">
                    <i class="fab fa-weebly"></i>
                    <span>Conversations</span>
                </a>
            </li>
    </aside>
</div>
