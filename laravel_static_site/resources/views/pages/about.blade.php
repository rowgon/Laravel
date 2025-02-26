@extends('layouts.app')

@section('content')
<h1>About Us</h1>
<p>This page provides information about the site.</p> <br>
{{$data}} <br>
{{$data->name}} <br>
{{$data->phone}} <br>
{{-- @foreach($datas as $data)
{{$data->name}}
@endforeach --}}
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>

        </tr>
    </thead>
    <tbody>
        @foreach($datas as $index => $data)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$datas[0]->name}}
<input type="text" value="{{$data->name}}"> <td>{{ $data->name }}</td>
<td>{{ $data->email }}</td>
</tr>
@endforeach
</tbody>
</table>
{{$datas[0]->name}}
<input type="text" value="{{$data->name}}">
@endsection
@endsection <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$datas[0]->name}}
<input type="text" value="{{$data->name}}">
@endsection