    <div class="list-group mb-4">
        <a href="/dashboard" class="list-group-item list-group-item-action align-items-center d-flex  {{ request()->is('dashboard') ? 'active' : '' }}"><span data-feather="list"></span> Dashboard</a>
    </div>

    
    <div class="mb-4">
        <small class="text-secondary d-block mb-2">Band</small>
        <div class="list-group ">
            <a href="{{ route('bands.create') }}" class="list-group-item list-group-item-action align-items-center d-flex {{ request()->is('band/create') ? 'active' : '' }}"><span data-feather="file-plus"></span> Make a new band</a>
            <a href="{{ route('bands.table') }}" class="list-group-item list-group-item-action align-items-center d-flex {{ request()->is('band/table') ? 'active' : '' }}"><span data-feather="database"></span> List band's</a>
    </div>
    </div>


    <div class="mb-4">
        <small class="text-secondary d-block mb-2">Album</small>
        <div class="list-group">
            <a href="{{ route('album.create') }}" class="list-group-item list-group-item-action align-items-center d-flex {{ request()->is('album/create') ? 'active' : '' }}"><span data-feather="file-plus"></span> Make new new album </a>
            <a href="{{ route('album.table') }}" class="list-group-item list-group-item-action align-items-center d-flex {{ request()->is('album/table') ? 'active' : '' }}"><span data-feather="database"></span> List album's</a>
        </div>
    </div>


    <div class="mb-4">
        <small class="text-secondary d-block mb-2">Genre</small>
        <div class="list-group">
            <a href="{{ route('genre.create') }}" class="list-group-item list-group-item-action align-items-center d-flex {{ request()->is('genre/create') ? 'active' : '' }}"><span data-feather="file-plus"></span> Make a new genre</a>
            <a href="{{ route('genre.table') }}" class="list-group-item list-group-item-action align-items-center d-flex {{  request()->is('genre/table') ? 'active' : '' }}"><span data-feather="database"></span> List genre's</a>
        </div>
    </div>


    <div class="mb-4">
        <small class="text-secondary d-block mb-2">Lyric</small>
        <div class="list-group">
            <a href="{{ route('lyric.create') }}" class="list-group-item list-group-item-action align-items-center d-flex {{ request()->is('lyric/create') ? 'active' : '' }}"><span data-feather="file-plus"></span> Make a new Lyric</a>
            <a href="{{ route('lyric.table') }}" class="list-group-item list-group-item-action align-items-center d-flex {{  request()->is('lyric/table') ? 'active' : '' }}"><span data-feather="database"></span> List lyric's</a>
        </div>
    </div>