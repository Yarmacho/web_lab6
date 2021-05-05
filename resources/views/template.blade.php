<html lang = "ru">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <style>
        .wrapper, .books, .teachers {
            display: flex;
            flex-direction: column;
        }

        .info
        {
            display: flex;
            justify-content: space-between;
            border: 2px #1a202c;
        }

        .other_subjects
        {
            border: 2px solid #1a202c;
            display:  inline-block;
            width: 90%;
            padding: 30px;
            margin-left: 50px;
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="subjects">
            <h1 align="center">{{$subject->name}}</h1>

            <div class="info">
                <div class="books">
                    <h3 align = "center">Книги:</h3>
                    @foreach($books as $book)
                        <h4>{{$book->name}}</h4>
                    @endforeach
                </div>
                <div class="teachers">
                    <h3 align = "center">Преподаватели:</h3>
                    @foreach($teachers as $teacher)
                        <h4>{{$teacher->fullname}}</h4>
                    @endforeach
                </div>
            </div>

            <br>
            <br>
            <br>
            <br>

            <div class="other_subjects">
                @foreach($subjects as $subj)
                    @if($subject->id !== $subj->id)
                        <a href="{{$subj->id}}">{{$subj->name}}</a>
                    @else
                        <strong>{{$subj->name}}</strong>
                    @endif
                        <br>
                        <hr>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
