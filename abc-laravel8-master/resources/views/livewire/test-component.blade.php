<div>
    <div wire:ignore> {{-- [tl! highlight] --}}
        <select id="orderbyid" name="orderby">
            <option value="0">Mặc định</option>
            <option value="1">Tăng</option>
            <option value="2">Giảm</option>
        </select>
        </select>

        <!-- Select2 will insert its DOM here. -->
    </div>

    <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
    {{$sortBy}}
</div>

@push('scripts')
<script>
    $(function() {
        alert('123');
        // $('.select2').niceSelect();
        $('#orderbyid').on('change', function(e){
            @this.set('sortBy',e.target.value);
        });
    });
</script>
@endpush
