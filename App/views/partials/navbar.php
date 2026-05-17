<?php
use Framework\Session;
?>

<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        
        <div class="flex items-center gap-4">
            <h1 class="text-3xl font-semibold m-0 p-0 flex items-center">
                <a href="/" class="flex items-center gap-2">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#CFD8DC" stroke-linecap="round" stroke-linejoin="round" />
                        <g clip-path="url(#clip0_0_1_nav)">
                            <path d="M12.6668 14.75V8.08333C12.6668 7.86232 12.579 7.65036 12.4228 7.49408C12.2665 7.3378 12.0545 7.25 11.8335 7.25H10.1668C9.94582 7.25 9.73385 7.3378 9.57757 7.49408C9.42129 7.65036 9.3335 7.86232 9.3335 8.08333V14.75M7.66683 8.91667H14.3335C14.7937 8.91667 15.1668 9.28976 15.1668 9.75V13.9167C15.1668 14.3769 14.7937 14.75 14.3335 14.75H7.66683C7.20659 14.75 6.8335 14.3769 6.8335 13.9167V9.75C6.8335 9.28976 7.20659 8.91667 7.66683 8.91667Z" stroke="#FFC107" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_0_1_nav">
                                <rect width="10" height="10" fill="white" transform="translate(6 6)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="leading-none">JobSeek</span>
                </a>
            </h1>

            <?php if (Session::has('user')) : ?>
                <div class="text-sm border-l border-gray-400 pl-4 h-5 flex items-center font-medium opacity-90 leading-none">
                    Welcome, <?= Session::get('user')['name'] ?? '' ?>!
                </div>
            <?php endif; ?>
        </div>

        <nav class="space-x-4">
            <?php if (Session::has('user')) : ?>
                <div class="flex items-center gap-4">
                    <form method="POST" action="/auth/logout" class="m-0">
                        <button type="submit" class="text-white inline hover:underline focus:outline-none">Logout</button>
                    </form>
                    <a href="/listings/create"
                       class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300 flex items-center gap-2">
                        <i class="fa fa-edit"></i> 
                        <span>Post a Job</span>
                    </a>
                </div>
            <?php else : ?>
                <a href="/auth/login" class="text-white hover:underline">Login</a>
                <a href="/auth/register" class="text-white hover:underline">Register</a>
            <?php endif; ?>
        </nav>
    </div>
</header>