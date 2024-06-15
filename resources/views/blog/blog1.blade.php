@extends('layouts.main')
@section('main-contant')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="blogbg">
    </div>
    <img class="blogimg" src="{{ url('/img/trekking.jpg') }}" alt="" width="800px" height="500px">
    <div class="container blogtxt">
        <h1>10 mistakes every first time traveller will make and how to avoid them!</h1>
            <ol>
                <li>Overpacking: Stick to essentials and versatile clothing items. Make a list and prioritize what you need.</li>
                <li>Not researching enough: Learn about your destination's culture, customs, and basic phrases to avoid cultural faux pas.</li>
                <li>Ignoring safety precautions: Keep important documents secure, be aware of your surroundings, and research any safety concerns beforehand.</li>
                <li>Forgetting travel insurance: Protect yourself from unexpected expenses like medical emergencies or trip cancellations.</li>
                <li>Overplanning: Leave room for spontaneity and unexpected experiences. Have a loose itinerary but be flexible.</li>
                <li>Not informing your bank: Avoid card issues by letting your bank know about your travel plans to prevent them from flagging your transactions as fraudulent.</li>
                <li>Not budgeting properly: Plan your expenses beforehand and include some buffer for unexpected costs.</li>
                <li>Underestimating transportation time: Account for delays and give yourself extra time when traveling between places.</li>
                <li>Being too dependent on technology: Have offline backups of important documents, maps, and translations in case of internet issues.</li>
                <li>Not immersing in the local culture: Connect with locals, try local cuisine, and embrace new experiences to make the most of your trip.</li>
            </ol>
    </div>

@endsection
