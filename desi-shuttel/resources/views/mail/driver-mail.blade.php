<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
  <div>
    <h1> {{ $mailmessage }} </h1>
    <h1> {{ $subject }} </h1>
    <ul>
        <li>Name : {{ $maildetail['name'] }} </li>
        <li>Email : {{ $maildetail['email'] }} </li>
        <li>Numner : {{ $maildetail['number'] }} </li>
        <li>Pick UP Location : {{ $maildetail['Pickup_location'] }}</li>
        <li>Drop Of Location : {{ $maildetail['Drop_Location'] }}</li>
    </ul>

  </div>

    

</body>
</html>