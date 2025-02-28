<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note Web | Show </title>
</head>
<body>
        <div class="container">
            <div class="note_wrapper">
                    <p>{{$notes->Note}}</p>
                    <a href="{{ route('note.edit', $notes)}}">Edit</a>
                    <a href="{{ route('note.destroy', $notes)}}">Delete</a>
            </div>

        </div>
</body>
</html>