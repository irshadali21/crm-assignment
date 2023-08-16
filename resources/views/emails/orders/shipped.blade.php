

@component('mail::message')

@include('vendor.mail.html.billedFrom', [
    'companyName' => 'Mini CRM',
    'address' => '123 Mian st: Rawalpindi',
    'companyPhone' => '+92-1231231234',
    'invoiceNo' => 'InV-123',
    'date' => '12-12-2023',
])
@include('vendor.mail.html.billedTo', [
    'clientName' => 'Client Khan',
    'address' => '123 Mian st: Islamabad',
    'Phone' => '+92-3213214321',
])


@component('mail::table')
| Product | Quantity | Price | Total |
|:-------:|:--------:|:-----:|:-----:|
|name|quantity|price|Total|

@endcomponent


@component('mail::panel')
Thank you for your business!
@endcomponent
@endcomponent

