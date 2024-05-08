<!DOCTYPE html>
<html lang="en">

@include('head')

<body>
    @include('header')
    <main>
        <div class="container">
            <div class="row row-cols-3 ">
                @foreach ($data as $sponsor)
                    <div class="col my-3">
                        <div class="card text-center ">
                            <h2>{{ $sponsor->name }}</h2>
                            <p>Logo: {{ $sponsor->logo }}</p>
                            <p>Time: {{ $sponsor->time }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
