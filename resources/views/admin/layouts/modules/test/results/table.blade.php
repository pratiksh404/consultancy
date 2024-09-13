<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $test->course->name }} Test Result</title>
</head>

<body>
    <div id="printContainer" class="printContainer">
        <style>
            table,
            th,
            td {

                border: 1px solid #aaaaaa;
                padding: 2px;
                text-align: left;
                border-spacing: 0;

            }
        </style>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="row">
                    <div class="col-xs-12">
                        <!--<div class="box" style="height:670px;overflow:scroll">-->
                        <div class="box">
                            <div class="box-header">
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <style>
                                    @media print {
                                        body {
                                            -webkit-print-color-adjust: exact !important;
                                            print-color-adjust: exact !important;
                                        }

                                        .hide-print {
                                            display: none !important;
                                        }

                                        table {
                                            width: 100%;
                                            border-collapse: collapse;
                                            border: 1px solid #777;
                                        }

                                        td,
                                        th {
                                            border: 1px solid #777;
                                            padding: 2px 6px !important;
                                        }
                                    }

                                    table {
                                        width: 100%;
                                    }

                                    .colspan-th {
                                        text-align: center;
                                        font-size: 12px;
                                        font-weight: 400 !important;
                                        width: 40px;
                                    }

                                    .thead-th {
                                        font-size: 13px !important;
                                        background: #ddd !important;
                                        padding: 2px !important;
                                        border-bottom: 1px solid #777 !important;
                                        white-space: nowrap;
                                    }

                                    .table-print tbody td {
                                        font-size: 13px;
                                        padding: 2px !important;
                                    }

                                    .table.table-borderd tbody td,
                                    .table.table-borderd thead th {
                                        border-color: #777 !important;
                                    }

                                    td.fail {
                                        background: #ccc !important;
                                        white-space: nowrap;
                                    }

                                    td.fail::after {
                                        content: '*';
                                        display: inline-block;
                                    }

                                    .table-print {
                                        border: 1px solid #777 !important;
                                    }

                                    .t-content {
                                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                                    }

                                    @media screen {
                                        .p-footer {
                                            display: none;
                                        }
                                    }

                                    @media print {

                                        .p-footer {
                                            position: fixed;
                                            bottom: 0;
                                            font-size: 10px;
                                            display: block;
                                            width: 100%;
                                        }

                                        @page {
                                            @bottom-right {
                                                content: counter(page) "/" counter(pages);
                                            }
                                        }
                                    }
                                </style>
                                <div style="overflow: auto;" class="t-content">
                                    <h3
                                        style="text-align: center; font-weight: bold; margin: 10px 0 4px 0; font-size: 15px">
                                        {{ title() }}</h3>
                                    <h3
                                        style="text-align: center; font-weight: bold; margin: 0 0 4px 0; font-size: 14px">
                                    </h3>
                                    <h3
                                        style="text-align: center; font-weight: bold; margin: 0 0 4px 0; font-size: 14px">
                                        {{ $test->course->name }} Mock Test </h3>
                                    <h3
                                        style="text-align: center; font-weight: bold; margin: 0 0 10px 0; font-size: 14px">
                                        {{ \Carbon\Carbon::create($test->test_date)->toFormattedDateString() . ' - ' . toFormattedNepaliDate(\Carbon\Carbon::create($test->test_date)) }}
                                    </h3>
                                    <table
                                        class="table tablePrint table table-borderd table-stripe table-hover table-sm table-print">
                                        <thead>
                                            <tr>
                                                <th class="thead-th">Candidate</th>
                                                @foreach ($test->course->sections as $section)
                                                    <th class="thead-th">{{ $section['name'] }}
                                                        ({{ $section['full_marks'] }})
                                                    </th>
                                                @endforeach
                                                <th class="thead-th">Overall</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($test->marks as $candidate_id => $mark)
                                                <tr class="border-main">
                                                    <td>
                                                        {{ $mark['candidate']['name'] . ' - ' . $mark['candidate']['code'] }}
                                                    </td>
                                                    @foreach ($test->course->sections as $section)
                                                        <td>
                                                            {{ $mark['sections'][$section['name']] ?? '*' }}
                                                        </td>
                                                    @endforeach
                                                    <td>
                                                        {{ $mark['overall'] ?? '*' }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->

            </section>
        </div>
    </div>
</body>

</html>
