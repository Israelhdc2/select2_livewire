<div>
    {{-- The Master doesn't talk, he acts. --}}
    <select class="select2">
        <option value="PE">Peru</option>
        <option value="AR">Argentina</option>
        <option value="CH">Chile</option>
    </select>

    <script>
        document.addEventListener('livewire:load', function(){
            $(".select2").select2();
        });
    </script>

</div>
