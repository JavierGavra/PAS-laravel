<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JalanIn</title>
	{{-- <link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> --}}

    <!-- bootstrap --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2 align="center">Edit Destinasi</h2>
                        <form action="/update/ {{ $destination->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Tujuan</label>
                                <input type="text" class="form-control" required name="tujuan" id="tujuan" placeholder="Masukkan tujuan : " value="{{ old('tujuan', $destination->tujuan) }}">
                            </div><br>
                            <div class="form-group">
                                <label for="publisher">Wilayah</label>
                                <select class="form-select" name="id_wilayah" id="">
                                    @foreach ($country as $item)
                                    @if (old('id_wilayah', $destination->id_wilayah == $item->id))
                                        <option name="id_wilayah" value="{{ $item->id }}" selected>{{ $item->wilayah }}</option>
                                    @else
                                        <option name="id_wilayah" value="{{ $item->id }}">{{ $item->wilayah }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div><br>
                            <div class="form-group">
                                <label for="publisher">Biro</label>
                                <select class="form-select" name="id_biro" id="">
                                    @foreach ($bureau as $item)
                                    @if (old('id_biro', $destination->id_biro == $item->id))
                                        <option name="id_biro" value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                    @else
                                        <option name="id_biro" value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div><br>
                            <div class="form-group">
                                <label for="pengarang">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi : " required value="{{ old('deskripsi', $destination->deskripsi) }}">
                            </div><br>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukkan harga : " required  required value="{{ old('harga', $destination->harga) }}">
                            </div><br>
                            <div class="form-group">
                                <label for="pengarang">Gambar</label>
                                <input type="file" class="form-control" name="gambar_tujuan" id="gambar_tujuan" placeholder="Masukkan gambar : " required value="{{ old('gambar_tujuan', $destination->gambar_tujuan) }}">
                            </div><br>
                            <button type="submit" class="btn btn-primary float-end" name="submit">Simpan Data</button>
                        </form>          
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>