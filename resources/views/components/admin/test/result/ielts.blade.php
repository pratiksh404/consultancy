<div>
    @props(['test', 'mark'])
    <style>
        @media print {
            @page {
                margin: 0.3in;
                /* 1 inch margin for all sides */
            }
        }

        .report-card {
            width: 210mm;
            height: 297mm;
        }
    </style>
    <div class="report-card">
        <span style="font-size: 35px;font-weight: bold;">IELTS™</span>
        <div style="display: flex;justify-content: space-between;">
            <span style="font-size: 25px;font-weight: bold;">Test Report Form</span>
            <div style="border: 1px solid black;width:30mm;padding:1mm;text-align: center;">ACADEMIC</div>
        </div>
        <div style="display: flex;justify-content: space-between;margin-top: 3mm;">
            <span style="font-size: 20px;font-weight: bold;">Note</span>
            <div style="width: 190mm;">This is the test report form of <b>mock test</b> for IELTS organized by
                [Consultancy Name Here]. It <b>does not</b> represent an official report.</div>
        </div>
        <div style="margin: 3mm 0;border-bottom: 1px solid black;">
            <div style="display: flex;justify-content: space-between;padding-bottom:2mm">
                <div style="display: flex; justify-content: start;">
                    <span style="margin-right: 3mm;margin-top: 2mm;">Center</span>
                    <div style="border: 1px solid black;padding:2mm;min-width: 30mm;">{{ title() }}</div>
                </div>
                <div style="display: flex; justify-content: start;">
                    <span style="margin-right: 3mm;margin-top: 2mm;">Date</span>
                    <div style="border: 1px solid black;padding:2mm;min-width: 30mm;">
                        {{ \Carbon\Carbon::create($test->test_date)->format('d/M/Y') }}</div>
                </div>
                <div style="display: flex; justify-content: start;">
                    <span style="margin-right: 3mm;margin-top: 2mm;">Candidate Number</span>
                    <div style="border: 1px solid black;padding:2mm;min-width: 30mm;">
                        {{ $mark['candidate']['code'] }}</div>
                </div>
            </div>
        </div>
        <div
            style="display: flex; justify-content: space-between;height: 50mm; padding: 3mm 0;border-bottom: 1px solid black;">
            <div style="width: 160mm;">
                <span style="font-size: 25px;font-weight: bold;">Candidate Details</span>
                <div style="display: flex;justify-content:start;margin-top: 2mm;">
                    <span style="margin-right: 2mm;width: 30%;margin-top:2mm">Family Name</span>
                    <span
                        style="width: 60%; border: 1px solid black;background-color: rgb(178, 180, 182);padding: 2mm;">{{ $mark['candidate']['last_name'] }}</span>
                </div>
                <div style="display: flex;justify-content:start;margin-top: 2mm;">
                    <span style="margin-right: 2mm;width: 30%;margin-top:2mm">First Name(s)</span>
                    <span
                        style="width: 60%; border: 1px solid black;background-color: rgb(178, 180, 182);padding: 2mm;">{{ $mark['candidate']['first_name'] }}
                        {{ $mark['candidate']['middle_name'] ?? '' }}</span>
                </div>
                <div style="display: flex;justify-content:start;margin-top: 2mm;">
                    <span style="margin-right: 2mm;width: 30%;margin-top:2mm">Candidate ID</span>
                    <span
                        style="width: 40%; border: 1px solid black;background-color: rgb(178, 180, 182);padding: 2mm;">{{ sprintf('%07d', $mark['candidate']['id']) }}</span>
                </div>
            </div>
            <div>
                <img src="https://placeholderjs.com/300x300" style="height: 100%;width: auto;">
            </div>
        </div>
        <div style="margin: 3mm 0;border-bottom: 1px solid black;">
            <div style="display: flex;justify-content: space-between;padding-bottom:2mm">
                <div style="display: flex; justify-content: start;">
                    <span style="margin-right: 3mm;margin-top: 2mm;">Date of Birth</span>
                    <div style="border: 1px solid black;padding:2mm;min-width: 30mm;"></div>
                </div>
                <div style="display: flex; justify-content: start;">
                    <span style="margin-right: 3mm;margin-top: 2mm">Sex(M/F)</span>
                    <div style="border: 1px solid black;padding:2mm;;min-width:10mm"></div>
                </div>
                <div style="display: flex; justify-content: start;">
                    <span style="margin-right: 3mm;margin-top: 2mm;">Scheme Code</span>
                    <div style="border: 1px solid black;padding:2mm;min-width: 30mm;">Private Candidate</div>
                </div>
            </div>
            <div style="display: flex;justify-content:start;margin-top: 2mm;">
                <span style="margin-right: 2mm;margin-top:2mm;width: 15%;">Country</span>
                <span style="width: 85%; border: 1px solid black;padding: 2mm;">Nepal</span>
            </div>
            <div style="display: flex;justify-content:start;margin: 2mm 0;">
                <span style="margin-right: 2mm;margin-top:2mm;white-space: nowrap;width: 15%;">First Language</span>
                <span style="width: 85%; border: 1px solid black;padding: 2mm;">Nepali</span>
            </div>
        </div>
        <div style="margin-top: 3mm;padding-bottom:2mm;border-bottom: 1px solid black;">
            <span style="font-size: 25px;font-weight: bold;">Test Result</span>
            <div style="display: flex;justify-content: space-between;margin-top: 2mm;">
                @if (count($mark['sections'] ?? []) > 0)
                    @foreach ($mark['sections'] as $name => $obtained_marks)
                        <div style="display: flex; justify-content: start;">
                            <span style="font-weight: bold;margin: 0 1.5mm;margin-top:5mm">{{ $name }}</span>
                            <div style="border: 1px solid black;background-color: rgb(178, 180, 182);padding:5mm">
                                {{ $obtained_marks ?? '*' }}</div>
                        </div>
                    @endforeach
                    <div style="display: flex; justify-content: start;">
                        <span style="font-weight: bold;margin: 0 1.5mm;margin-top:2mm">Overall Band Score</span>
                        <div style="border: 1px solid black;background-color: rgb(178, 180, 182);padding:5mm">
                            {{ $mark['overall'] }}</div>
                    </div>
                @else
                    <div style="display: flex; justify-content: start;">
                        <span style="font-weight: bold;margin: 0 1.5mm;margin-top:5mm">Listening</span>
                        <div style="border: 1px solid black;background-color: rgb(178, 180, 182);padding:5mm">*
                        </div>
                    </div>
                    <div style="display: flex; justify-content: start;">
                        <span style="font-weight: bold;margin: 0 1.5mm;margin-top:5mm">Reading</span>
                        <div style="border: 1px solid black;background-color: rgb(178, 180, 182);padding:5mm">*
                        </div>
                    </div>
                    <div style="display: flex; justify-content: start;">
                        <span style="font-weight: bold;margin: 0 1.5mm;margin-top:5mm">Writing</span>
                        <div style="border: 1px solid black;background-color: rgb(178, 180, 182);padding:5mm">*
                        </div>
                    </div>
                    <div style="display: flex; justify-content: start;">
                        <span style="font-weight: bold;margin: 0 1.5mm;margin-top:5mm">Speaking</span>
                        <div style="border: 1px solid black;background-color: rgb(178, 180, 182);padding:5mm">*
                        </div>
                    </div>
                    <div style="display: flex; justify-content: start;">
                        <span style="font-weight: bold;margin: 0 1.5mm;margin-top:2mm">Overall Band Score</span>
                        <div style="border: 1px solid black;background-color: rgb(178, 180, 182);padding:5mm">*
                        </div>
                    </div>
                @endif
                <div style="display: flex; justify-content: start;">
                    <span style="font-weight: bold;margin: 0 1.5mm;margin-top:5mm">CEFR Level</span>
                    <div style="border: 1px solid black;background-color: rgb(178, 180, 182);padding:5mm">
                        {{ !is_null($mark['overall']) ? getCEFRLevel($mark['overall']) : '*' }}</div>
                </div>
            </div>
        </div>
        <div style="margin-top: 3mm;padding-bottom:2mm;border-bottom: 1px solid black;">
            <div style="display: flex;justify-content: space-between;height: 50mm">
                <div style="width: 55%;">
                    <span style="font-size: 20px;font-weight: bold;">Administrator Comment</span>
                    <div style="width: 100%;height:80%;border: 1px solid black;margin-top:2mm"></div>
                </div>
                <div style="width:45%;display: flex;justify-content: center;">
                    <div style="width: 50%;padding:2mm;">
                        <div
                            style="width: 100%;height:100%;border: 1px solid black;display: flex;justify-content: center;">
                            <span style="text-align: center;font-weight: bold;margin:auto">Recognizing organizations
                                must verify this score at ielts.org/verify</span>
                        </div>
                    </div>
                    <div style="width: 50%;padding:2mm 0 2mm 2mm">
                        <div
                            style="width: 100%;height:100%;border: 1px solid black;display: flex;justify-content: center;">
                            <span style="margin-top:3mm;font-weight: bold;">Validation Stamp</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 15mm;display: flex;justify-content: end;">
            <div style="display: flex; justify-content: start;">
                <span style="margin-right: 3mm;margin-top: 2mm;">Date</span>
                <div style="border: 1px solid black;padding:2mm;min-width: 30mm;">
                    {{ \Carbon\Carbon::now()->format('d/M/Y') }}</div>
            </div>
            <div style="display: flex; justify-content: start;">
                <span style="margin: 0 3mm;margin-top: 2mm;">Test Report Number</span>
                <div style="border: 1px solid black;padding:2mm;min-width: 60mm;background-color: rgb(178, 180, 182)">
                    {{ $test->code }}</div>
            </div>
        </div>
        <div style="margin-top: 5mm;display: flex;justify-content: center;">
            <img src="{{ asset('adminetic/static/british_council.png') }}" height="80" style="padding: 5mm;">
            <img src="{{ asset('adminetic/static/idp.png') }}" height="80" style="padding: 5mm;">
            <img src="{{ asset('adminetic/static/cambridge.png') }}" height="80" style="padding: 5mm;">
        </div>
        <span style="display:flex;justify-content:center;font-size:10px;width:100%;">IELTS is jointly owned by
            British
            Council, IDP, and Cambridge University Press & Assessment.</span>
    </div>
</div>
