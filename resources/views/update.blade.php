<h1>Update file</h1>
<form action="/Up" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="ficheiro" placeholder="selecione o seu ficheiro">
    <button>Upload</button>
</form>