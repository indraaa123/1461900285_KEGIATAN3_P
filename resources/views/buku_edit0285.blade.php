<form action="{{ route('buku0285.update') }}" method="post">

    @csrf
    <input type="hidden" name="_metod" value="patch">
    ID: <input type="text" name="buku_id" value="{{ $buku->buku_id }}">
    JUDUl: <input type="text" name="buku_judul" value="{{ $buku->buku_judul }}">
    <button type="submit">Simpan</button>

</form>