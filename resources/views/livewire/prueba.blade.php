<div>
    {{-- The Master doesn't talk, he acts. --}}

    {{$pais}}

    <div class="mb-4" wire:ignore>
        <select class="select2" wire:model="pais">
            <option value="PE">Peru</option>
            <option value="AR">Argentina</option>
            <option value="CH">Chile</option>
        </select>
    </div>

    <input type="text" wire:model="ciudad">

    <script>
        document.addEventListener('livewire:load', function(){
            $(".select2").select2();
            $(".select2").on('change', function(){
                @this.set('pais', this.value);
            });
        });
    </script>

</div>
