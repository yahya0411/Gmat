<div class="content">
    @push('styles')
        <style>
            input,td {

                text-transform: uppercase
            }

            input::placeholder {

                text-transform: none
            }
            .small .text-muted {
                visibility: hidden;
            }
        </style>
    @endpush
<div class="content">
  {{$id}}
</div>

