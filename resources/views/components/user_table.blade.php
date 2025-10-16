<table style="width:100%; border-collapse:collapse; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:10px; overflow:hidden;">
    <thead style="background:linear-gradient(90deg, #6c757d, #007bff); color:white;">
        <tr>
            <th style="padding:12px; text-align:center;">ID</th>
            <th style="padding:12px; text-align:center;">NAMA</th>
            <th style="padding:12px; text-align:center;">NPM</th>
            <th style="padding:12px; text-align:center;">KELAS</th>
            <th style="padding:12px; text-align:center;">AKSI</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $user)
            @php
                $bgColor = $loop->even ? '#fafafa' : '#ffffff';
            @endphp
            <tr style="transition:background 0.3s; background: #fafafa;"
                onmouseover="this.style.background='#e9f3ff';"
                onmouseout="this.style.background='{{ $bgColor }}';">
                <td style="padding:12px; text-align:center;">{{ $user->id }}</td>
                <td style="padding:12px; text-align:center;">{{ $user->nama }}</td>
                <td style="padding:12px; text-align:center;">{{ $user->nim }}</td>
                <td style="padding:12px; text-align:center;">{{ $user->kelas->nama_kelas }}</td>
                <td style="padding:12px; text-align:center;">
                    <a href="{{ route('user.edit', $user->id) }}" style="text-decoration:none; color:black; background-color:#ffc107; padding:6px 10px; border-radius:4px; font-size:13px;">Edit</a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline-block; margin-left:4px;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color:#dc3545; color:white; padding:6px 10px; border:none; border-radius:4px; font-size:13px; cursor:pointer;">Hapus</button>
                    </form>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>
