<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!--https://www.youtube.com/watch?v=Ny-mloJuoAI-->
@component('mail::message')

Cтатус оплаты: <strong style="color: red;">{{$customerData->payment_status}}</strong><hr>
{{$customerData->payment_id}}<hr>
Email: {{$customerData->payer_email}}<hr>
Номер телефона: {{$customerData->number}}<hr>
IP адрес: <?php echo $_SERVER['REMOTE_ADDR']; ?><hr>
Адрес: {{$customerData->address}}<hr>
Сумма: {{$customerData->amount}}
{{$customerData->currency}}<hr>
Время заявки: {{$customerData->created_at}}<hr>


@foreach($orders as $order)
<hr>
Название: <strong style="color: red;">{{$order->name}}</strong> <br>
Кол-во: {{$order->count}} штук <br>
Цена за одну штуку: {{$order->price}} kzt <br>
Общая цена за одинаковый товар: {{$order->itogprice}} kzt
<hr>
@endforeach

Итоговое кол-во всех товаров: {{$itogCount}} штук

Итоговая цена за все товары: <strong style="color: red;">{{$total}}</strong> kzt.


@endcomponent