<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if(session('success'))
        <div class="bg-green-500 text-white p-4">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="bg-black">
        <form action="{{ route('request.store') }}" method="POST">
            @csrf
            <div class="flex flex-col gap-4 ">
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Phone">
                
                <button type="submit">Submit</button>
            </div>

        </form>
    </div>
</body>
</html>