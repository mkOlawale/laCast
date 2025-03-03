<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note Web</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
        <div class="container">
            <h1>Hello world this is index page</h1>
            @foreach($notes as $note)
            <div class="note_wrapper">
                    <p>{{$note->Note}}</p>
                    <a href="{{ route('note.show', $note)}}">Show</a>
                    <a href="{{ route('note.edit', $note)}}">Edit</a>
                    <a href="{{ route('note.destroy', $note)}}">Delete</a>
            </div>
            @endforeach
        </div>
</body>
</html>