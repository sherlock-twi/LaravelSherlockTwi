@if($errors->any())
    <div class="errors errred">
        <ul>
            @foreach ($errors->all() as $er)
                <li>{{ $er }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="errors">
        {{ session('success') }}
    </div>
@endif