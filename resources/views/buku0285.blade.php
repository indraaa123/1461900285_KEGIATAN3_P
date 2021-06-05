<head>
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <title>DATA BUKU</title>

    <style>
    
        table{
            border-collapse: collaspse;
            border-spacing: 0;
            width: 85%;
            border 1px solid #ffcce5;
        }
        thead {

            background-color: #66ffff;
        }
        th,
        td {
            text-alight: right;
            padding: 7px;
        }
        tr:nth-child(even) {

            background-color: #f2f2f2;
        }
        .tambah {

            padding: 7px 14px;
            text-decoration: none;
        }
    
    </style>
</head>

<body>
    <div style="overflow-%: auto">

        <a class="tambah" href="{{ url('buku0285/') }}">Tambah Buku</a>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Buku</th>
                    <th>Judul Buku</th>
                    <th>Edit/Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($buku as $bk)

                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $bk->buku_id }}</td>
                    <td>{{ $bk->buku_judul }}</td>
                    <td>
                        <a href="{{ url('buku0285/' . $bk->buku_id . '/edit') }}">Edit</a>

                        <form action="{{ url('buku0285/' . $bk->buku_id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delate">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                
                @endforeach
            
            </tbody>
        </table>
        
    </div>
</body>