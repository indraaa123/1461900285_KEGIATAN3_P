<form action="{{ route('buku0285.store') }}" method="post">

    @csrf
    ID BUKU: <input type="text" name="buku_id">
    JUDUL BUKU : <input type="text" name="buku_judul">
    <button type="submit">Simpan</button>

</form>