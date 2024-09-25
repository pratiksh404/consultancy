<div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400&family=Merriweather:wght@900&display=swap');

        #mock-tests {
            padding: 20px 10px;
            font-family: 'IBM Plex Sans', sans-serif;
            color: #334155;
            /* slate-800 */
            background-color: #e5e7eb;
            border-radius: 10px;
            /* slate-200 */
        }

        #mock-tests h1 {
            font-family: 'Merriweather', serif;
            font-weight: 900;
            /* font-black */
            font-size: 3rem;
            /* text-3xl */
            padding: 24px 0;
            /* py-6 */
        }

        #mock-tests .section {
            display: flex;
            flex-direction: column;
            max-width: 1024px;
            /* max-w-4xl */
            margin: auto;
        }

        #mock-tests .event {
            display: flex;
            align-items: center;
            margin: 8px 0;
            width: 100%;
            /* my-2 */
        }

        #mock-tests .event-card {
            display: flex;
            flex-direction: row;
            padding: 16px;
            /* p-4 */
            background-color: #f8fafc;
            /* slate-50 */
            border-radius: 0.75rem;
            /* rounded-xl */
            box-shadow: 0 2px 10px rgba(203, 213, 225, 0.4);
            /* shadow-md */
            transition: box-shadow 0.2s ease;
            width: 85%;
        }

        #mock-tests .event-card:hover {
            box-shadow: 0 4px 20px rgba(156, 163, 175, 0.4);
            /* hover:shadow-lg */
        }

        #mock-tests .event-time {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 30%;
            /* w-48 */
            padding: 20px;
            /* px-5 py-5 */
            font-family: 'Merriweather', serif;
            border-radius: 0.5rem;
            margin: 8px;
            /* rounded-lg */
        }

        #mock-tests .event-time.tod {
            background-color: #fee2e2;
            /* rose-100 */
        }

        #mock-tests .event-time.velvet {
            background-color: #fcd34d;
            /* amber-100 */
        }

        #mock-tests .event-time.darkness {
            background-color: #c7d2fe;
            /* indigo-100 */
        }

        #mock-tests .event-title {
            font-family: 'Merriweather', serif;
            font-weight: 900;
            /* font-black */
            font-size: 1.25rem;
            /* text-xl */
            padding-bottom: 16px;
            /* pb-4 */
        }

        #mock-tests .event-description {
            font-size: 0.875rem;
            /* text-sm */
        }

        #mock-tests .add-to-calendar {
            font-size: 0.75rem;
            /* text-xs */
            background-color: #f8fafc;
            /* slate-50 */
            padding: 16px;
            /* p-4 */
            border-radius: 0 0.5rem 0.5rem 0;
            /* rounded-r-md */
            box-shadow: 0 2px 10px rgba(203, 213, 225, 0.4);
            /* shadow-md */
            cursor: pointer;
            transition: background-color 0.2s ease, color 0.2s ease;
            width: 15%;
        }

        #mock-tests .add-to-calendar:hover {
            background-color: #1e293b;
            /* slate-900 */
            color: #f8fafc;
            /* slate-50 */
        }

        #mock-tests .footer-note {
            margin-top: 16px;
            /* mt-4 */
        }

        #mock-tests .footer-note a {
            color: #e11d48;
            /* rose-500 */
            text-decoration: underline;
        }
    </style>
    <div id="mock-tests">
        <section class="section">
            <h1>Mock Tests</h1>
            @if ($tests->count() > 0)
                @foreach ($tests as $test)
                    <div class="event">
                        <div class="event-card">
                            <div class="event-time {{ [1 => 'tod', 2 => 'velvet', 3 => 'darkness'][$loop->iteration] }}">
                                <div class="font-bold">{{ \Carbon\Carbon::create($test->test_date)->format('d M') }}
                                </div>
                                <div class="font-bold text-3xl">
                                    {{ \Carbon\Carbon::create($test->test_date)->format('H:i') }}</div>
                            </div>
                            <div class="flex flex-col justify-center pl-6">
                                <h2 class="event-title">{{ $test->name }}</h2>
                                <p class="event-description">
                                    {!! $test->description !!}
                                </p>
                            </div>
                        </div>
                        <a href="{{ route('website.test', $test->code) }}" class="add-to-calendar"><span
                                class="text-sm">+</span> See More</a>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{ $tests->links() }}
                </div>
            @else
                <div class="event">
                    <div class="event-card" style="width: 100%">
                        <h2 class="text-center">No Mock Test Available</h2>

                    </div>
                </div>
            @endif
        </section>
    </div>
</div>
