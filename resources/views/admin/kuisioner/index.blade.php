@extends('admin.main')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Home</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
    <h2>Kusioner</h2><br/>
    <form action="/kuisioner/store" method="post">
		{{ csrf_field() }}
		Pertanyaan <input type="text" name="pertanyaan" required="required"> <br/>
        <br/>
		<input type="submit" value="Tambah Data">
	</form>
    <hr>
    <table border="0">
		<tr>
			<th>Id</th>
			<th>Pertanyaan</th>
		</tr>
		@foreach($pertanyaan as $p)
		<tr>
			<td>{{ $p->id_pertanyaan }}</td>
			<td>{{ $p->pertanyaan }}</td>
		</tr>
		@endforeach
	</table>
@endsection