@php

@endphp

<style>
    .pub{
        height: 133px;
    }
</style>

<div class="row">
    @for ($i = 0; $i < 2; $i++)
        <div class="col-md-12 mt-2">
            <div class="card pub">
                <p class="text-center">Espace publicitaire</p>
            </div>

        </div>
    @endfor
</div>

