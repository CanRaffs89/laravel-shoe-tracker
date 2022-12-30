<x-layout>
    <h2>Add Distance</h2>
    <div class="card card-update">
        <h2>{{$shoe['name']}}</h2>
        <div class="distance-display distance-display-update">
            <form action="/shoes/{{$shoe->id}}" method="POST">
                @csrf
                @method('PUT')
                <label id="distance-input-label" for="distance">Add your distance...</label>
                <input type="number" step="0.1" id="distance-input" name="distance" value="{{$shoe->distance}}">
                <input id="distance-form-submit" name="submit" type="image" src="{{asset('img/circle-check-solid.svg')}}" value="Submit">
            </form>
        </div>
    </div>
</x-layout>