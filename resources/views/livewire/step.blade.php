<div>
    <div class="flex justify-center pb-0 px-4">
        <h2 class="text-lg pb-4">Add Steps For Task</h2>
        <span wire:click="increment" class="fas fa-plus py-2 px-3 cursor-pointer text-blue-400 hover:text-blue-900" />
    </div>

    @for($i=0; $i
    <$steps; $i++) <div class="flex justify-center py-2">
        {{ $i }} <input type="text" name="step" class="flex, justify-center py-1 px-2 border rounded" placeholder="Describe steps" />
        <span wire:click="decrement" class="fas fa-times text-red-400 p-2"></span>
</div>
@endfor
</div>