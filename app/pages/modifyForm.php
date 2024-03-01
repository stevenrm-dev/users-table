<?php
    require '../components/header.php';

    require "../functions/obtainData.php";
?>

<form action="../functions/modifyUser.php" method="post" class="form d-flex flex-column">
    <h5 class="title font-weight-normal">Modificar Usuario</h5>
    
    <input type="hidden" name="mod-id" value="<?php echo isset($contentItems['id']) ? $contentItems['id'] : ''; ?>">

    <label>
        <input type="text" name="mod-dni" placeholder="DNI" pattern="[0-9]{8}[A-Za-z]" title="Por favor, ingresa un DNI válido (8 dígitos seguidos de una letra)" required
            value="<?php echo isset($contentItems['dni']) ? $contentItems['dni'] : ''; ?>"
        >
    </label>

    <label>
        <input type="text" name="mod-name" pattern="[A-Za-z ]*" title="Por favor, ingresa solo letras y espacios" required
            value="<?php echo isset($contentItems['userName']) ? $contentItems['userName'] : ''; ?>"
        >
    </label>

    <label>
        <input type="email" name="mod-email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Por favor, ingresa un correo electrónico válido" require
            value="<?php echo isset($contentItems['email']) ? $contentItems['email'] : ''; ?>"
        >
    </label>

    <label>
        <input type="tel" name="mod-tel" placeholder="Teléfono" pattern="[0-9()+\- ]*" title="Por favor, ingresa un número de teléfono válido" required
            value="<?php echo isset($contentItems['phone']) ? $contentItems['phone'] : ''; ?>"
        >
    </label>

    <label>
        <input type="date" name="mod-date" required
            value="<?php echo isset($contentItems['age']) ? $contentItems['age'] : ''; ?>"
        >
    </label>

    <div class="d-flex justify-content-end controls mt-4">
        <button class="btn btn-primary mr-3" name="mod-btn">Guardar</button>
        <a href="../../index.php" class="btn btn-light" type="button">Cancelar</a>
    </div>
</form>

<?php    
    require '../components/footer.php';
?>