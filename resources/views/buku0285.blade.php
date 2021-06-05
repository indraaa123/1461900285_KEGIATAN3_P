<head>
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <title>Data Buku</title>

    <style>
        table{
            border-collapse: collaspse;
            border-spacing: 0;
            width: 100%;
            border 1px solid #ddd;
        }
        thead {

            background-color: #f2f2f2;
        }
        th,
        td {
            text-alight: left;
            padding: 8px;
        }
        tr:nth-child(even) {

            background-color: #f2f2f2;
        }
        .tambah {

            padding: 8px 16px;
            text-decoration: none;
        }
    
    </style>
</head>

<body>
    <div style="overflow-%: auto">

        <a class="tambah" href="{{ route('buku')}}">Tambah Buku</a>

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
                <php $no =1; ?>
                foreach ($buku as $bk)

                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $bk->buku_id }}</td>
                    <td>{{ $bk->buku_judul }}</td>
                    <td>
                        <a href="{{ url('buku/' . $bk->id . "/edit") }}">Edit</a>

                        <form action="{{ url('buku/' . $bk->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delate">
                            
                        </form>
                    </td>
                </tr>

                endforeach
            </tbody>
        </table>
        
    </div>
</body>