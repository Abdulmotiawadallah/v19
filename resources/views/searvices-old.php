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
    <?php 
    $i = 0;
    foreach ($searvices as $searvice){ ?>
    <tr>
        <td><?php
        if ($i==0){
            echo 'first';
        }else if($i==count($searvice)){
                echo 'last';
        }else{
            echo $searvice [0] ;  
        }
        $i++;
        ?></td>
        <td><?php echo $searvice [1]?></td>
        <td><?php echo $searvice [2]?></td>
    </tr>
    <?php } ?>
  
</Table>
</body>
</html>