<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="my-3">Toko Cuy</h1>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="/cheackout" method="post">
                @csrf
                <div class="mb-3">
                    <label for="qty" class="form-label">Mau Pesan Berapa?</label>
                    <input type="number" name="qty" class="form-control" id="qty" placeholder="Jumlah yang dipesan">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Pelanggan</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama pelanggan">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" name="phone" class="form-control" id="phone" placeholder="Masukkan Nomor hp">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Masukkan Alamat">
                </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                <button type="sumbit" class="btn btn-primary">Simpan Transaksi</button>
            </form>
            </div>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>