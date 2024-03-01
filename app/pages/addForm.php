<?php
    require '../components/header.php';
?>

<form action="../functions/addUser.php" method="post" class="form d-flex flex-column">
    <h5 class="title font-weight-normal">Nuevo Usuario</h5>

    <label>
        <input type="text" name="new-user-dni" placeholder="DNI" pattern="[0-9]{8}[A-Za-z]" title="Por favor, ingresa un DNI válido (8 dígitos seguidos de una letra)" required>
    </label>

    <label>
        <input type="text" name="new-user-name" placeholder="Nombre" pattern="[A-Za-z ]*" title="Por favor, ingresa solo letras y espacios" required>
    </label>

    <label>
        <input type="email" name="new-user-email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Por favor, ingresa un correo electrónico válido" require>
    </label>

    <label>
        <input type="tel" name="new-user-tel" placeholder="Teléfono" pattern="[0-9()+\- ]*" title="Por favor, ingresa un número de teléfono válido" required>
    </label>

    <label>
        <input type="date" name="new-user-date" required>
    </label>

    <div class="d-flex justify-content-end controls mt-4">
        <button class="btn btn-primary mr-3" name="add-btn">Guardar</button>
        <a href="../../index.php" class="btn btn-light" type="button">Cancelar</a>
    </div>
</form>

<?php    
    require '../components/footer.php';
?>