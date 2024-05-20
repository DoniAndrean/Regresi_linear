<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section class="container d-flex flex-column" style="gap:16px">
        <h1>INTERVIEW {{ $kandidat->nama }}</h1>
        <form action="{{ route('interview.store', $kandidat->id_kandidat) }}" class="d-flex flex-column"
            style="gap:16px" method="POST">
            @csrf
            @method('post')
            @foreach ($soal as $p)
                <div class="d-flex w-100" style="gap: 8px">
                    <div>{{ $loop->iteration }}</div>
                    <div>
                        <div>{{ $p->soal }}</div>
                        <div class="row row-cols-4">
                            @foreach ($options as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="soal_{{ $p->id }}"
                                        id="soal_{{ $p->id }}">
                                    <label class="form-check-label" for="soal_{{ $p->id }}">
                                        {{ $option }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
            <div>
                <button class="btn btn-success" type="submit">Kirim Jawaban</button>
            </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
