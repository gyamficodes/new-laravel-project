<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<nav>
<x-layout-link href="/" >Home</x-layout-link>
<x-layout-link href="/about" >About</x-layout-link>
<x-layout-link href="/contact" >Contact</x-layout-link>
 </nav>
   
       {{$slot}}
</body>
</html>