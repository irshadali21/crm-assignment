<html>

<head>


    <style>
            /*! Email Template */.email-wraper{background:#f5f6fa;font-size:14px;line-height:22px;font-weight:400;color:#8094ae;width:100%}.email-wraper a{color:#733aea;word-break:break-all}.email-wraper .link-block{display:block}.email-ul{margin:5px 0;padding:0}.email-ul:not(:last-child){margin-bottom:10px}.email-ul li{list-style:disc;list-style-position:inside}.email-ul-col2{display:flex;flex-wrap:wrap}.email-ul-col2 li{width:50%;padding-right:10px}.email-body{width:96%;max-width:620px;margin:0 auto;background:#fff}.email-success{border-bottom:#0fca7a}.email-warning{border-bottom:#fd9722}.email-btn{background:#733aea;border-radius:4px;color:#fff !important;display:inline-block;font-size:13px;font-weight:600;line-height:44px;text-align:center;text-decoration:none;text-transform:uppercase;padding:0 30px}.email-btn-sm{line-height:38px}.email-header,.email-footer{width:100%;max-width:620px;margin:0 auto}.email-logo{height:40px}.email-title{font-size:13px;color:#733aea;padding-top:12px}.email-heading{font-size:18px;color:#733aea;font-weight:600;margin:0;line-height:1.4}.email-heading-sm{font-size:24px;line-height:1.4;margin-bottom:.75rem}.email-heading-s1{font-size:20px;font-weight:400;color:#526484}.email-heading-s2{font-size:16px;color:#526484;font-weight:600;margin:0;text-transform:uppercase;margin-bottom:10px}.email-heading-s3{font-size:18px;color:#733aea;font-weight:400;margin-bottom:8px}.email-heading-success{color:#0fca7a}.email-heading-warning{color:#fd9722}.email-note{margin:0;font-size:13px;line-height:22px;color:#8094ae}.email-copyright-text{font-size:13px}.email-social li{display:inline-block;padding:4px}.email-social li a{display:inline-block;height:30px;width:30px;border-radius:50%;background:#fff}.email-social li a img{width:30px}@media(max-width: 480px){.email-preview-page .card{border-radius:0;margin-left:-20px;margin-right:-20px}.email-ul-col2 li{width:100%}}

    </style>
</head>

<body>
    <div class="nk-block">
        <div class="card">
            <div class="card-inner">
                <table class="email-wraper">
                    <tbody>
                        <tr>
                            <td class="py-5">
                                <table class="email-header">
                                    <tbody>
                                        <tr>
                                            <td class="text-center pb-4"><a href="#"><img class="email-logo" src="{{ asset('images/logo-dark2x.png') }}"
                                                        alt="logo"></a>
                                                <p class="email-title">Notification for new Employee registration</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="email-body">
                                    <tbody>
                                        <tr>
                                            <td class="p-3 p-sm-5">
                                                <p><strong>Hello </strong>,</p>
                                                <p>New Employee Register</p>
                                                <p>Employee Name : {{ $emplyee->name }}</p>
                                                <p class="mt-4">---- <br> Regards<br>CRM Team</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="email-footer">
                                    <tbody>
                                        <tr>
                                            <td class="text-center pt-4">
                                                <p class="email-copyright-text">Copyright © 2023 DashLite. All rights reserved. <br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
