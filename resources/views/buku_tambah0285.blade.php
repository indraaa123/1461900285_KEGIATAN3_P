<form action="{{ route('buku.store') }}" method="post">

    @csrf
    ID: <input type="text" name="buku_id">
    JUDUl: <input type="text" name="buku_judil">
    <button type="submit">Simpan</button>

</form>