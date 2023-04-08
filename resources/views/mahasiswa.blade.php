<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center">Pemanasan Sebelum Ujian Web Programming</h3>
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One To One & One To Many</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>IPK</th>
                            <th>Daftar Mata Kuliah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            {{-- @foreach ($user->nims()->get() as $nim)
                                {{$nim->nim}}
                            @endforeach --}}
                            <td>{{$user->nim->NIM}}</td>
                            <td>{{$user->nim->IPK}}</td>
                            {{-- <td>{{$user->nim->kelas->}}</td> --}}
                            {{-- <td>{{$user->nim->kelas->matkul}}</td> --}}
                           <td>
                                @foreach ($user->nim->kelas()->get() as $kelas)
                                <ul>{{$kelas->matkul}}</ul>
                            @endforeach
                           </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
