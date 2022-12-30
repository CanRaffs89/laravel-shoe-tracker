<x-layout>
    @if (count($shoes) == 0)
        <div class="no-shoes-card">
            <p class="no-shoes-message">No shoes here yet... click the <img id="edit-icon-text" class="card-icon" src="{{asset('img/circle-plus-solid.svg')}}" alt=""> to add some</p>
        </div>
    @endif
    @foreach($shoes as $shoe)
    <div class="card">
        @if ($shoe->type == 'Hiking')
        <img src="{{asset('img/hiking-icon.svg')}}" alt="" class="shoe-icon">
        @elseif ($shoe->type == 'Running')
        <img src="{{asset('img/running-icon.svg')}}" alt="" class="shoe-icon">
        @else
        <img src="{{asset('img/casual-icon.svg')}}" alt="" class="shoe-icon">
        @endif
        <h3>{{$shoe['name']}}</h3>
        <div class="distance-display">
            <h1 class="distance-number">{{$shoe['distance']}}</h1>
            <h4 class="distance-unit">miles</h4>
        </div>
        <div class="card-buttons">
            <a href="/shoes/edit/{{$shoe['id']}}"><img id="edit-icon" class="card-icon" src="{{asset('img/circle-plus-solid.svg')}}" alt=""></a>
            <form action="/shoes/{{$shoe['id']}}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')
                <button id="delete-button"><img id="delete-icon" class="card-icon" src="{{asset('img/trash-can-solid.svg')}}"></button>
            </form>
        </div>
    </div>
    @endforeach
</x-layout>
