<table width="100%" class="___class_+?14___">
    <tr class="inv-num">
        <td class="f-14 text-dark">
            <p class="mt-3 mb-0">
                {{ $companyName }}<br>
                {{ $address }}<br>
                {{ $companyPhone }}
            </p><br>
        </td>
        <td align="right">
            <table class="inv-num-date text-dark f-13 ">
                <tr>
                    <td class="bg-light-grey border-right-0 f-w-500">
                        <strong>Invoice Number</strong></td>
                    <td class="border-left-0">{{ $invoiceNo }}</td>
                </tr>
                <tr>
                    <td class="bg-light-grey border-right-0 f-w-500">
                        <strong>Invoice Date</strong></td>
                    <td class="border-left-0">
                        {{ $date }}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td height="20"></td>
    </tr>
</table>
