<form action="{{ route('deleteData', ['id' => $laporan->id]) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data?')">
    {{ method_field('DELETE') }}    
    @csrf
    <input type="hidden">
</form>