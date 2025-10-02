<table style="width:100%; border-collapse:collapse; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:10px; overflow:hidden;">
    <thead style="background:linear-gradient(90deg, #6c757d, #007bff); color:white;">
        <tr>
            <th style="padding:12px; text-align:center;">ID</th>
            <th style="padding:12px; text-align:center;">NAMA</th>
            <th style="padding:12px; text-align:center;">NPM</th>
            <th style="padding:12px; text-align:center;">KELAS</th>
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
            </tr>
        @endforeach
    </tbody>
</table>
