<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400&display=swap" rel="stylesheet">
    <!-- bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>


<body>
    <div style="display: flex; justify-content: center;">
        <h1>
            Click Page
        </h1>


    </div>
    <div style="display: flex; justify-content: center;">
        <p>กดไปเเล้ว &nbsp; {{ $count }} &nbsp; ครั้ง</p>

    </div>
    <div style="display: flex; justify-content: center;">
        <form action="{{ url('isclick') }}" method="POST">
            @csrf
            <input name="name">
            <button type="submit">กดเเล้ว</button>

        </form>



    </div>


    <table class="table table-bordered table-striped mt-4">
        <tr style="border-color:rgb(0, 0, 0);">
            <th style="text-align: center ;border-color:rgb(0, 0, 0); width:6rem">ลำดับ</th>
            <th style="text-align: center ;border-color:rgb(0, 0, 0); width:6rem">ชื่อ</th>
        </tr>
        @foreach ($data as $key => $val)
            <tr style="border-color:rgb(0, 0, 0);">
                <td style="text-align: center ;border-color:rgb(0, 0, 0);">{{ ++$i }}</td>
                <td style="text-align: center ;border-color:rgb(0, 0, 0);">{{ $val->name }}</td>

            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-end">
        {!! $data->withQueryString()->links() !!}
      </div>
</body>
<style>
    body {
        background-color: #dddddd;
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>

</html>
