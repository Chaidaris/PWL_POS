<a href="{{ url('/level/' . $id . '/ubah') }}" class="btn btn-primary">
    <i class="fas fa-edit"></i>
</a>

<form id="destroy{{ $id }}" style="display:inline;" action="{{ url('/level/' . $id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger">
        <i class="fas fa-trash"></i>
    </button>
</form>
