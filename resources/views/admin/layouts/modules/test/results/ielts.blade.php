<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IELTS Report Card</title>
</head>


<body>
    @isset($test)
        @if (count($test->marks) > 0)
            <style>
                @media print {
                    br {
                        page-break-after: always;
                    }
                }
            </style>
            @foreach (collect($test->marks)->filter(fn($mark, $candidate_id) => isset($candidate_ids) ? in_array($candidate_id, $candidate_ids) : true)->sortByDesc(fn($mark) => $mark['overall'] ?? 0)->toArray() as $mark)
                <x-admin.test.result.ielts :mark='$mark' :test='$test' />
            @endforeach
        @endif
    @endisset
</body>

</html>
