<nav>
    <h2>CRUD Navigation</h2>
    <ul>
        <li>
            <a href="{{ route('tweets.index') }}">
                Index
            </a>
        </li>
        @auth
            <li>
                <a href="{{ route('tweets.create') }}">
                    Create
                </a>
            </li>
        @endauth
        <li>
            <a href="{{ route('teams') }}">
                Teams
            </a>
        </li>
    </ul>
</nav>