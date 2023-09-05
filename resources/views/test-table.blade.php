<table>
    <thead>
        <tr>
            <td>Nama</td>
            <td>Jenis</td>
            <td>Kondisi</td>
            <td>kuantitas</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->condition }}</td>
            <td>{{ $item->quantity }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

