<!DOCTYPE HTML>
<HTML>
<head>
<style>
#invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #A04126;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #926DC6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}


th {
  background-color: #FBB710;
}
@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
</style>
</head>
<body>
<div id="invoice">

    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                          <img src="https://sun9-38.userapi.com/c855232/v855232818/21858a/NZYAEGcKyyc.jpg" data-holder-rendered="true" />
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            ReadHome.com
                        </h2>
                        <div>221b Baker Street, Zherdyn bir zherova, Vakanda</div>
                        <div>8 800 555 35 35</div>
                        <div>dont_write@hell.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h3 class="to">{{$data->fname}} {{$data->lname}}</h3>
                        <div class="address">{{$data->address}}</div>
                        <div class="email"><a href="mailto:".''>{{Auth::user()->email}}</a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">Invoice # {{$data->id}}</h1>
                        <div class="date">Date: {{ date('d-m-Y H:i')}}</div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-left">Product</th>
                            <th class="text-right">Price</th>
                              <th class="text-right">Quantity</th>
                            <th class="text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($cart as $item)
                        <tr>
                            <td><img src={{ $item['item']->url}} width="100" height="100" alt="Product"></td>
                            <td class="text-left">
                                <h3>
                                {{$item['item']->title}}
                                </h3>
                               {{$item['item']->author}}
                            </td>
                            <td class="unit">${{$item['item']->price}}</td>
                            <td class="qty">{{$item['qty']}}</td>
                            <td class="total">${{$item['item']->price*$item['qty']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">Grand total</td>
                            <td>{{$data->bill}}</td>
                        </tr>
                    </tfoot>
                </table>
                <br><br>
                <div class="thanks"><p>Thank you!</p></div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">Transaction was completed from cart ended with {{substr($card,0,4)}} <small>**** ****</small> {{substr($card,-4,strlen($card))}}</div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
</body>
</html>
