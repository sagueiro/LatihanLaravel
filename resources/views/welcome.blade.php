<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Buku</title>
    <style>
        body { max-width: 900px; margin: 30px auto; padding: 0 16px; font-family: Arial, sans-serif; color: #222; }
        table { width: 100%; margin-top: 20px; border-collapse: collapse; }
        th, td { padding: 9px; border: 1px solid #ccc; text-align: left; }
        input { margin: 4px 0 12px; padding: 7px; }
        button { cursor: pointer; }
        .message { color: green; }
    </style>
</head>
<body>
    <h1>Daftar Buku</h1>

    @if (session('success'))
        <p class="message">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <h2>Koleksi Buku</h2>


    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Penerbit</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->author }}</td>
                    <td>{{ $item->year }}</td>
                    <td>{{ $item->publisher }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada buku.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
