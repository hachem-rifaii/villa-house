<div class="flex flex-col gap-4 ">
    <input wire:model.live="search" type="search" placeholder="Search posts by title...">
    <select wire:model.live="code" id="">
        <option value="USD">USD</option>
        <option value="LB">lira</option>
    </select>
    <input wire:model.live="min" type="number" >
    <input wire:model.live="max" type="number" >
    <select wire:model.live="category" id="">
        <option value="1">villa</option>
        <option value="2">private gym</option>
        <option value="3">department</option>
    </select>
 
    <h1>Search Results:</h1>
 
    <ul>
        @foreach($properties as $property)
            <li>{{ $property->title }}</li>
        @endforeach
    </ul>
</div>