<h1>Hola desde la vista edit</h1>

        <form action="{{route('curso.update', $curso)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Name:
        <br>
        <input name="name" type="text" value="{{old('name',$curso->name) }}">
        <br>
        </label>
        <br>
        <label>
        Descripcion:
        <br>
        <input name="descripcion" type="text" value="{{old('descripcion',$curso->descripcion)}}">
        <br>
        </label>
        <br>

        <button  type="submit">Actualizar Curso</button>

    </form>
