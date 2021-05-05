<html lang = "ru">
<head>
    <title>Subjects</title>
    <style>
        .wrapper
        {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }
        .subjects
        {
            width: 100%;
            text-align: center;
        }

    </style>
</head>

    <body>
        <div class="wrapper">
            <div class="subjects">
                <h1>Всі можливі предмети:</h1>
                @foreach($subjects as $subj)
                    <a href="subject/{{$subj->id}}">{{$subj->name}}</a><br>
                    <hr>
                @endforeach
            </div>
        </div>
    </body>
</html>
