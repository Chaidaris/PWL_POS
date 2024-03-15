<form method="POST" action="{{ url('kategori.update', $kategori) }}">
    @csrf
    @method('PUT')
    <!-- Form fields -->
    <input type="text" name="kodeKategori" value="{{ $kategori->kategori_kode }}">
    <input type="text" name="namaKategori" value="{{ $kategori->kategori_nama }}">
    <!-- Other form fields -->
    <button type="submit">Submit</button>
</form>