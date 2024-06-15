@extends('layouts.main')
@section('main-contant')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="blogbg">
    </div>
    <img class="blogimg" src="{{ url('/img/hike.jpg') }}" alt="" width="800px" height="500px">
    <div class="container blogtxt">
        <h1>11 things to know before you visit rainbow mountain.</h1>
            <ol>
                <li><b>Altitude:</b> Rainbow Mountain sits at a high altitude, over 5,000 meters (16,400 feet) above sea level, so be prepared for altitude sickness.</li>
                <li><b>Physical Fitness:</b> The hike to Rainbow Mountain can be challenging, so ensure you're physically fit and prepared for the trek.</li>
                <li><b>Weather:</b> Weather conditions can change rapidly, so dress in layers and bring waterproof gear.</li>
                <li><b>Acclimatization:</b> Spend a few days acclimatizing to the altitude in Cusco or another high-altitude location before attempting the hike.</li>
                <li><b>Sun Protection:</b> UV radiation is strong at high altitudes, so wear sunscreen, a hat, and sunglasses to protect yourself from sunburn.</li>
                <li><b>Hydration:</b> Drink plenty of water to stay hydrated, especially at high altitudes where dehydration can occur more quickly.</li>
                <li><b>Snacks:</b> Bring high-energy snacks like nuts, fruits, and granola bars to keep your energy levels up during the hike.</li>
                <li><b>Guided Tours:</b> Consider joining a guided tour for safety and to learn more about the area's history and culture.</li>
                <li><b>Respect Local Customs:</b> Rainbow Mountain is considered a sacred site by local communities, so be respectful of the land and its significance.</li>
                <li><b>Leave No Trace:</b> Practice Leave No Trace principles by packing out all your trash and avoiding disturbing wildlife or vegetation.</li>
                <li><b>Photography:</b> Rainbow Mountain offers stunning photo opportunities, but be mindful of where you step and avoid trampling fragile ecosystems for the perfect shot.</li>
            </ol>
    </div>

@endsection
