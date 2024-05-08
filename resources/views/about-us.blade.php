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
                        <h1>{{ $founder }}</h1>
                    </div>
                </div>
                <div class="col-12">
                    <p>{{ $origin }}</p>
                </div>
            </div>
        </div>
    </main>
    <h1></h1>
    <p></p>
</body>

</html>
