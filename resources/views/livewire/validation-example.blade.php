<div>
    @foreach($references ?? [] as $key => $reference)
        <div wire:key="reference-{{ $key }}">
            <h2 class="text-xl font-bold mt-4 mb-4">Reference {{ $key }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4" style="margin-top: -1rem;">
                <div class="@error('references.'.$key.'.name') text-red-600 @enderror">
                    <label class="label">Name
                        <input type="text" wire:model.lazy="references.{{ $key }}.name" class="border border-gray-400 rounded-sm mt-1 block w-full">
                    </label>
                    @error('references.'.$key.'.name') <span class="input-message">{{ $message }}</span> @enderror
                </div>
                <div class="@error('references.'.$key.'.email') text-red-600 @enderror">
                    <label class="label">Email
                        <input type="email" wire:model.lazy="references.{{ $key }}.email" class="border border-gray-400 rounded-sm mt-1 block w-full">
                    </label>
                    @error('references.'.$key.'.email') <span class="input-message">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    @endforeach
</div>
