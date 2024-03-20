<a href="{{ url('/kategori/' . $id . '/ubah') }}" class="btn btn-primary">Edit</a>

<form id="destroy{{ $id }}" style="display:inline;" action="{{ url('/kategori/' . $id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
