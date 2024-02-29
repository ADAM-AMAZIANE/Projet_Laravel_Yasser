@extends('Master_page')
@section('title','Home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/homestyle.css') }}">
         {{-- hadi dyal slider kbira  --}}

    <title>Home</title>
    <style>

         body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

.footer {
    display: none ;
}

        /* style dyal div li f wst tsswira lowla  */
        .home1 {
            position: absolute;
            top: 300px;
            left: 450px;
    background-color: rgba(225, 157, 69, 0.801);
    border-radius: 20px;
    width: 800px;
    text-align: center;
    font-weight: bolder;
    font-size: 20px;
    color: black;
    padding: 10px;
    box-shadow: 10px 10px 10px rgba(225, 157, 69, 0.801);

    }
       /* style dyal buttona d read  */
    .btn1 {
        background-color: rgba(225, 157, 69, 0.801);
        font-weight: 400;
        padding: 5px;
        border-radius: 10px;
        box-shadow: 1px 1px  20px rgba(225, 157, 69, 0.801);


    }
    .btn1:hover {
        font-weight: 600;
        background-color: rgba(220, 157, 75, 0.801);
        cursor: pointer;
        box-shadow: 1px 1px  20px rgb(241, 216, 146);

    }

   
    </style>
</head>
<body style="background-image: url('{{ asset('imgs/Homebg (1).jpg') }}'); background-size: cover;">
     <div class="home1">

    <p>Welcome to ADAM'STORE , your gateway to endless stories. Dive into a world of imagination with our curated collection of books, spanning genres and captivating tales. Find your next literary adventure at ADAM'STORE where every page turns into a journey. Happy reading!</p>
    <button class="btn1"><a style="color: black" href="">READ</a></button>
     </div>



</body>
</html>



@endsection
