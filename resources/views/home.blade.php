@extends("layouts.base")

@section("title", "My advertisement")

@section("main")
    <p class="text-right"><a href="#">Add advertisement</a></p>
    @if(count($bbs) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Goods</th>
                    <th>Prise</th>
                    <th colspan="2">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bbs as $bb)
                    <tr>
                        <td><h3>{{ $bb->title }}</h3></td>
                        <td><h3>{{ $bb->price }}</h3></td>
                        <td>
                            <a href="#">Change</a>
                        </td>
                        <td>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
