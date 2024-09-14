<div>
    @props(['test', 'mark'])
    <style>
        @media print {
            @page {
                margin: 0.3in;
                /* 1 inch margin for all sides */
            }

            .report-card {
                width: 210mm;
                height: 297mm;
            }
        }

        .report-card {
            width: 100%;
            min-height: 297mm;
            height: auto;
        }
    </style>
    <div class="report-card">
        <div style="display: flex;justify-content:space-between;padding-bottom:4mm;border-bottom:4px solid #a1876e">
            <img src="{{ asset('adminetic/static/gre.png') }}" alt="gre logo"
                style="height: 8mm;width:auto;margin-top:2mm">
            <div style="text-align: end;">
                <span style="color: #a1876e;font-size: 25px">TEST TAKER SCORE REPORT</span>
                <p style="margin: 0;">
                    <b>Note: </b> This report is not valid transmission of scores to an institution.
                </p>
            </div>
        </div>
        <div style="display: flex;justify-content:space-between;margin-top:2mm">
            <span style="font-size: 20px;font-weight: bold">{{ $mark['candidate']['name'] }}</span>
            <span style="font-size: 20px;font-weight: bold">Most Recent Test Date:
                {{ \Carbon\Carbon::create($test->test_date)->toFormattedDateString() }}</span>
        </div>
        <div style="display: flex;justify-content:space-between;margin-top:4mm">
            <span> <b style="margin-right: 1mm">Address:</b> {{ $mark['candidate']['address'] }}</span>
            <div>
                <span style="margin-right: 1mm">Registration Number: {{ $mark['candidate']['code'] }}</span> <br>
                <span style="margin-right: 1mm">Print Date: {{ \Carbon\Carbon::now()->toFormattedDateString() }}</span>
            </div>
        </div>
        <div style="margin-top:6mm">
            <ul style="list-style: none;padding:0">
                <li><b style="margin-right: 1mm">Email:</b> {{ $mark['candidate']['email'] }}</li>
                <li><b style="margin-right: 1mm">Phone:</b> {{ $mark['candidate']['phone'] }}</li>
                <li><b style="margin-right: 1mm">Date of Birth:</b> </li>
                <li><b style="margin-right: 1mm">Gender:</b> </li>
                <li><b style="margin-right: 1mm">Intended Graduate Major:</b> Undecided(0 0 0 0)</li>
            </ul>
        </div>
        <div style="margin-top:5mm;background-color:#88305c;padding:2mm;width:100%">
            <span style="font-size: 17px;color:white">Your
                Scores for the
                Test Taken on {{ \Carbon\Carbon::create($test->test_date)->toFormattedDateString() }}</span>
        </div>
        <div
            style="display: flex;justify-content:space-evenly;width: 100%;height:65mm;border:1px solid #ab4f01;margin-top:2mm;padding: 2.5mm">
            @if (count($mark['sections']) > 0)
                @foreach ($mark['sections'] as $section_name => $obtained_mark)
                    <div style="width: 100%;height:100%;border-right:1px solid #ab4f01;padding: 1mm">
                        <div style="background-color:#ab4f01;color:white;padding: 1mm;text-align: center">
                            {{ $section_name }}</div>
                        @php
                            $percentile = calculatePercentile(
                                array_map(fn($test) => $test['sections'][$section_name], $test->marks),
                                $obtained_mark,
                            );

                        @endphp
                        <div
                            style="width: 100%;height: 13%;display: flex;justify-content: center;position:relative;top:25mm">
                            130
                            <div style="width:90%;height:100%;background-color:#c4d9ef">
                                <div
                                    style="width: 1mm;height:20mm;background-color:#ab4f01;position:relative;top:-135%;left:{{ $percentile }}%">
                                    <span
                                        style="font-size: 10px;top: -7mm;display: block;position: relative;left: -2mm;font-weight: bold;white-space:nowrap">Score:</span>
                                    <div
                                        style="height: 10mm;width:15mm;background-color:#ab4f01;display:block;border-radius:5px;position:relative;top:-6mm;left:-7mm">
                                        <span
                                            style="color:white;text-align:center;font-size:20px;display:block;width:100%;padding-top:10%">{{ $obtained_mark ?? '-' }}</span>
                                    </div>
                                    <span
                                        style="font-size: 12px;bottom: -7mm;display: block;position: relative;left: -10mm;font-weight: bold;width:30mm">
                                        {{ $percentile }}
                                        <br>
                                        Percentile</span>
                                </div>

                            </div>
                            170
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        @if (count($mark['sections']) > 0)
            <div style="margin-top:10mm;background-color:#88305c;padding:2mm;width:100%">
                <span style="font-size: 17px;color:white">Your
                    Test Score History </span>
            </div>
            <br>
            <span style="font-size: 15px;color:#88305c;font-weight: bold">General Test Score</span>
            <br>
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="border: none;"></th>
                        @foreach ($mark['sections'] as $section_name => $obtained_mark)
                            <th style="background-color: #9e5610;color:white;text-align: center;padding:1mm"
                                colspan="2">
                                {{ $section_name }}
                            </th>
                        @endforeach
                    </tr>
                    <tr style="background-color: #e5e4e0;border-color:#d2d2d2">
                        <th style="padding:1mm;">Test Date</th>
                        <th style="padding:1mm;">Scaled Score</th>
                        <th style="padding:1mm;">Percentile</th>
                        <th style="padding:1mm;">Scaled Score</th>
                        <th style="padding:1mm;">Percentile</th>
                        <th style="padding:1mm;">Scaled Score</th>
                        <th style="padding:1mm;">Percentile</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td style="padding:1mm;  border: 1px solid #d2d2d2;">September 8, 2024</td>
                        @foreach ($mark['sections'] as $section_name => $obtained_mark)
                            @php
                                $percentile = calculatePercentile(
                                    array_map(fn($test) => $test['sections'][$section_name], $test->marks),
                                    $obtained_mark,
                                );

                            @endphp
                            <td style="padding:1mm;  border: 1px solid #d2d2d2;">{{ $obtained_mark }}</td>
                            <td style="padding:1mm;  border: 1px solid #d2d2d2;">{{ $percentile }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
            <div style="position:absolute;bottom:5mm;width:100%">
                <span style="text-align: center;font-size:12px;">
                    <b>* Note Available </b> -
                </span>
            </div>
        @endif
    </div>
</div>
