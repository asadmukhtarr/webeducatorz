<div>
    <textarea class="summernote" wire:change="descrip($event.target.value)" wire:model="description"></textarea>
    <font color="red"> 
        <b> @error('description') <span class="error">{{ $message }}</span> @enderror </b>
    </font>
</div>
