<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHM Travel Developer Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        display: ['"Playfair Display"', 'serif'],
                        body: ['"DM Sans"', 'sans-serif'],
                    },
                    colors: {
                        sand: {
                            50:  '#faf8f4',
                            100: '#f2ece0',
                            200: '#e6d9c3',
                        },
                        ink: '#1a1714',
                    }
                }
            }
        }
    </script>
</head>

<body class="font-body bg-sand-50 min-h-screen flex items-center justify-center px-4">

    <!-- Decorative background rule -->
    <div class="fixed inset-0 bg-[radial-gradient(ellipse_at_top_right,_#e6d9c3_0%,_transparent_60%)] pointer-events-none"></div>

    <main class="relative w-full max-w-lg">

        <!-- Card -->
        <div class="bg-white border border-sand-200 rounded-2xl shadow-sm px-10 py-12">

            <!-- Header -->
            <div class="mb-10 border-b border-sand-100 pb-8">
                <p class="text-xs font-medium tracking-[0.2em] uppercase text-amber-600 mb-3">KHM Travel · Developer Test</p>
                <h1 class="font-display text-3xl text-ink leading-snug">
                    Greatest TV Show<br>of All Time
                </h1>
                <p class="mt-3 text-sm text-stone-400">Cast your vote. We'll keep a tally.</p>
            </div>

            <!-- Form -->
            <form action="insert-data.php" method="post" class="space-y-6">

                <div class="space-y-2">
                    <label for="tv-show" class="block text-sm font-medium text-stone-600">
                        Show name
                    </label>
                    <input
                        type="text"
                        id="tv-show"
                        name="tv-show"
                        placeholder="e.g. The Wire, Succession, Twin Peaks…"
                        autocomplete="off"
                        class="w-full px-4 py-3 rounded-xl border border-sand-200 bg-sand-50 text-ink placeholder-stone-300 text-sm
                               focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent
                               transition duration-150"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full bg-ink text-sand-50 font-medium text-sm tracking-wide py-3 rounded-xl
                           hover:bg-stone-700 active:scale-[0.98]
                           transition-all duration-150"
                >
                    Save to database →
                </button>

            </form>

        </div>

        <!-- Footer note -->
        <p class="text-center text-xs text-stone-300 mt-6">
            Submissions are stored locally in <code class="font-mono">tv_shows.db</code>
        </p>

    </main>

</body>

</html>