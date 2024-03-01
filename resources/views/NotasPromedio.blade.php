<h1>Formulario</h1>

<form action="{{route('Qualification.store')}}" method="POST" enctype="multipart/form-data">

@csrf
<label>
    ingrese el nombre :
    <br>
    <input type="text" name="nombre">
</label>
<br>
<label>
    ingrese la nota 1 :
    <br>
    <input type="number" name="num1">
</label>
<br>
<label>
    ingrese la nota 2 :
    <br>
    <input type="number" name="num2">
</label>
<br>
<label>
    ingrese la nota 3:
    <br>
    <input type="number" name="num3">
</label>
<br>
<button type="submit">Enviar Formulario:</button>
</form>