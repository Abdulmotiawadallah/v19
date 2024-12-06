<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Searvices</title>
    <style>

        body{
            font-family: Arial,Helvetica,sans-serif;/*بتعطي شكل جمالي اوضح*/
        }
        h1{
            text-align:center;  /*بتخلي العنوان في وسط الصفحة*/
            margin: bottom 20px;
        }
        table{
            width: 80%;   /*مساحة الجدول عند عرضه في الصفحة*/
            margin:0 auto; /* بتنصص الجدول في الوسط*/
            border-collapse:collapse;  /*بترفع المسافات بين خطوط الجدول*/
            text-align:center;
        }
        table th , table td {
            border: 1px solid #eee; /* خلت حجم الخط تبع الجدول 1 و ولونه رمادي*/
            padding: 5px ;
        }
        table th {
            background-color: #0faabc;/* اعطينا لون للعناوين*/
            color:#fff;/* اعطينا العنوان نفسه (الكلام)لون*/
        }
    </style>
</head>
<body>
    <h1>All Searvices </h1>
<Table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
 
    @foreach ($searvices as $searvice)
    <tr>
        <td>
        @if($loop->first)
            {{'first'}}
        @elseif($loop->last)
                {{'last'}}
        @else
           {{$searvice [0]}}
        @endif 
       
        </td>
        <td>{{$searvice [1]}}</td>
        <td>{{$searvice [2]}}</td>
    </tr>
   @endforeach
  
</Table>
</body>
</html>