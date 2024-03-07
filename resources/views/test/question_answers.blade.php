<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>True or False Quiz</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">{{$heading}}</h1>
        <form action="{{route('submit_answer', ['user_id' => $user_id, 'test_id'=> $test_id])}}" method="post">
            @csrf
            <div class="card">
                <div class="card-body">
                    @php
                    $i = 1;
                    @endphp
                    @foreach($details as $detail)
                        <div class="form-group">
                            <label for="q{{$i}}">Question {{$i}}: {{$detail['questions']['question_title']}}</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="{{$detail['question_id']}}" id="q{{$i}}_true" value="true">
                                <label class="form-check-label" for="q{{$i}}_true">True</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="{{$detail['question_id']}}" id="q{{$i}}_false" value="false">
                                <label class="form-check-label" for="q{{$i}}_false">False</label>
                            </div>
                        </div>
                        @php
                        $i++;
                        @endphp
                    @endforeach
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Submit Answers</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
