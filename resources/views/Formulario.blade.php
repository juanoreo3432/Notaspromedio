<h1>Formulario</h1>

<form action="{{route('primo.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    ingrese la nota 1 :
    <br>
    <input type="number" name="num1">
</label>
<br>
<label>
    ingrese la nota 2 :
    <br>
    <input type="numbre" name="num2">
</label>
<br>
<label>
    ingrese la nota 3:
    <br>
    <input type="numbre" name="num3">
</label>
