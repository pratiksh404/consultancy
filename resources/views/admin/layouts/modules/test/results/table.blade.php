<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $test->course->name }} Test Result</title>
</head>

<body>
    <x-admin.test.result.table :test="$test" />
</body>

</html>
