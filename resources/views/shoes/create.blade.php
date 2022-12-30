<x-layout>
    <h2>Add a New Shoe</h2>
    <form action="/shoes" method="POST">
        @csrf
        <label for="name">Enter a shoe name...</label>
        <input id="shoe-name-input" type="text" name="name" placeholder="Enter a name...">
        <label for="type">Choose a shoe type...</label>
        <select name="type" id="shoe-type-input">
            <option value="" disabled selected>Choose a shoe...</option>
            <option value="Hiking">Hiking</option>
            <option value="Running">Running</option>
            <option value="Casual">Casual</option>
        </select>
        <input id="shoe-form-submit" name="submit" type="submit" value="Submit">
    </form>
</x-layout>
