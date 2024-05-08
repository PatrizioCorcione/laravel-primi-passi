<!DOCTYPE html>
<html lang="en">

@include('head')

<body>
    @include('header')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h1>{{ $title }}</h1>
                    </div>
                </div>
                <div class="col-12">
                    <p>{{ $description }}</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
