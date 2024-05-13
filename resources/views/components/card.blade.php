<div class="col-12 col-md-6 col-lg-4 col-xl-3">
    {{-- @dd($announcements) --}}
    <div class="card card_announcement my-5">
        <a class="img_card" href="{{route('announcement.show', compact('announcement'))}}">
            <img src="{{ Storage::url($announcement->img) }}" class="card-img-top" alt="{{$announcement->title}}" height="250px">
        </a>
        <div class=" card-body d-flex flex-column ">
            <a class="card_category mb-2" href="{{route('category.index', $announcement->category)}}"
                class="card-text">{{ ucfirst($announcement->category->name) }}</a>
            <a class="title_card" href="{{route('announcement.show', compact('announcement'))}}">
                <h5 class="card-title">{{ $announcement->title }}</h5>
            </a>
            <p class="card-text">{{ $announcement->price }} €</p>
            {{-- <p class="card-text">Creato da: {{ $announcement->user->name }}</p> --}}
           
        </div>
    </div>
</div>