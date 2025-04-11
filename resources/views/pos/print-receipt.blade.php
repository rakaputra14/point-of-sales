<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            width: 70mm;
            margin: 0 auto;
            font-family: 'Courier New', Courier, monospace;
            font-size: 12px;
            color: #000;
        }

        header h3 {
            margin: 0;
            padding: 0;
            font-size: 16px;
            text-align: center;
        }

        header p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }

        .divider {
            border-top: 1px dashed #000;
            margin: 5px 0;
        }

        .item-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2px;
        }

        .item-row .left {
            flex: 1;
        }

        .item-row .right {
            flex: 0 0 auto;
        }

        .footer {
            margin-top: 10px;
        }

        @media print {
            body {
                margin: 0;
                padding: 0;
            }
        }
    </style>
</head>

<body onload="window.print()">
    <div class="wrapper">
        <header>
            <h3>Andre Barbershop</h3>
            <p>231 Rodok Street</p>
            <br>
            <p>New Philadelphia</p>
            <br>
            <p>Phone: 123-456-7890</p>
        </header>
        <div class="divider"></div>
        <div>
            <div>Date :{{date("D M Y", strtotime($order->order_date))  }}</div>
            <div>No Transaction :{{ $order->order_code }}</div>
        </div>
        <div class="divider"></div>
        @foreach ($orderDetails as $orderDetail)
            <div class="item-row">
                <div class="left">{{ $orderDetail->product->product_name }}</div>
                <div class="right">{{ number_format($orderDetail->order_subtotal) }}</div>
            </div>
            <div class="item-row">
                <div class="left">Qty: {{ $orderDetail->qty }} x {{ number_format($orderDetail->order_price) }}</div>
            </div>
        @endforeach
        <div class="item-row">
            <div class="left">{{number_format($order->order_amount)}}</div>
            {{-- Alternative Syntax --}}
            {{-- <div class="left">{{ $orderDetails[0]->order->order_amount}}</div> --}}
            <div class="right"></div>
        </div>
        <div class="divider"></div>
        <div class="footer">
            <p>Thank you for your order!</p>
            <p>We hope to see you again soon.</p>
            <br>
            <p>Andre Diner</p>
            <p>231 Rodok Street</p>
            <p>New Philadelphia</p>
            <p>Phone: 123-456-7890</p>
            <p>Website: www.andrediner.com</p>
        </div>

</body>

</html>