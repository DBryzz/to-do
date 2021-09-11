<div>
    <div class="flex justify-center pb-0 px-4">
        <h2 class="text-lg pb-4">Add Steps For Task</h2>
        <span wire:click="increment" class="fas fa-plus py-2 px-3 cursor-pointer text-blue-400 hover:text-blue-900" />
    </div>

    @foreach($steps as $step)
    <div class="flex justify-center py-2" wire:key="{{ $loop->index }}">
        <input type="text" name="stepNames[]" class="flex, justify-center py-1 px-2 border rounded" value="{{$step['name']}}" placeholder="{{ 'Describe step '. ($loop->index + 1) }}" />
        <input type="hidden" name="stepIds[]" value="{{$step['id']}}" />
        <span wire:click="remove({{ $loop->index }})" class="fas fa-times text-red-400 p-2"></span>
    </div>
    @endforeach
</div>