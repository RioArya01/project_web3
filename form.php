<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="css2.css">

    <!-- My Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>Formulir Pendaftaran</title>
</head>

<body>
    <!-- FORM -->
    <div class="container">
        <div class="text-center mb-3 animate__animated animate__jello">
            <h1>Formulir Pendaftaran</h1>
            <img src="img/readinggirl.png" class="img-fluid" max-width=100%; width="250px" height=auto;>
        </div>

        <form action="" method="POST">

            <div class="form-group mb-3">
                <div class="input-group">
                    <input type="text" name="" class="form-control" placeholder="Nama Lengkap" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" name="" class="form-control" placeholder="Tempat Lahir" required>
                </div>
                <div class="col-md-6">
                    <input type="date" name="" class="form-control" placeholder="Tanggal Lahir" required>
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="input-group">
                    <textarea class="form-control" rows="3" placeholder="Alamat" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" name="" class="form-control" placeholder="Email" required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="" class="form-control" placeholder="No. Telp" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin"
                            value="Laki-laki" checked="">
                        <label class="form-check-label" for="jeniskelamin">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin"
                            value="Perempuan">
                        <label class="form-check-label" for="jeniskelamin">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="form-select" aria-label="Default select example" required="true">
                        <option value="">Jenjang Pendidikan</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMP">SMA/SMK</option>
                        <option value="SMP">Umum</option>
                    </select>
                </div>
            </div>

            <div class="form-group mb-3">
                <select class="form-select" aria-label="Default select example" required="true">
                    <option value="">Kursus Bahasa Yang Diambil</option>
                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                    <option value="Bahasa Jepang">Bahasa Jepang</option>
                    <option value="Bahasa Korea">Bahasa Korea</option>
                    <option value="Bahasa China">Bahasa Mandarin</option>
                    <option value="Bahasa Prancis">Bahasa Perancis</option>
                    <option value="Bahasa Jerman">Bahasa Jerman</option>
                    <option value="Bahasa Rusia">Bahasa Rusia</option>
                </select>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
                <div class="col-md-6">
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>

        </form>

    </div>
    <!-- AKHIR FORM -->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>