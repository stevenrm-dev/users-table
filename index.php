<?php
    require './app/components/header.php';
?>
    <header class="d-flex flex-column w-100 container mt-5">
        <h5 class="font-weight-normal">Listado de Usuarios</h5>
        <a href="./app/pages/addForm.php" class="btn btn-primary rounded-pill text-white align-self-end" id="open-add">Nuevo Usuario</a>
    </header>
    <main class="container">
        <table class="table mt-4">
            <thead>
                <tr>
                    <td scope="col" class="font-weight-bold">DNI</td>
                    <td scope="col" class="font-weight-bold">Name</td>
                    <td scope="col" class="font-weight-bold">Email</td>
                    <td scope="col" class="font-weight-bold">Teléfono</td>
                    <td scope="col" class="font-weight-bold">Fecha de nacimiento</td>
                </tr>
            </thead>
            <tbody id="data-users">
            </tbody>
        </table>
        <div>
            <button class="btn btn-light" id="previous">Anterior</button>
            <button class="btn btn-light" id="next">Siguiente</button>
        </div>
    </main>

    <script src=<?php echo $GLOBALS['base_url'] . "app/js/createList.js"; ?>></script>

</body>
</html>