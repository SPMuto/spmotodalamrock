<header class="sticky top-0 z-50 bg-white border-b">

    <div class="flex justify-between items-center px-6 py-4">

        <h2 class="font-bold text-xl">
            Dashboard
        </h2>

        <div class="flex items-center gap-4">

            <button>
                🔔
            </button>

            <div class="font-medium">
                {{ auth()->user()->name }}
            </div>

        </div>

    </div>

</header>
