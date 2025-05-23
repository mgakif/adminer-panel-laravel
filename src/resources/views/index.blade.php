@extends(config('adminer-panel.layout', 'layouts.app'))

@section('content')
    <div class="container">
        <h1 class="mb-4">Veritabanı Yönetimi (Adminer)</h1>
        <iframe src="{{ asset('tools/adminer.php') }}" width="100%" height="800" style="border: none;"></iframe>
    </div>
@endsection
