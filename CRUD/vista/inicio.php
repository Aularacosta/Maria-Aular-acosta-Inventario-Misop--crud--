<?php require_once "componentes/head.php" ?>

<body>
  <div class="container pt-5">

    <?php if(!isset($modificar_producto)){ ?>
      
      <div class="card">
        <div class="card-header">
          <h3 class="card-title text-center">Inventario</h3>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#registrar_producto">
            Registrar producto
          </button>
          <table class="table text-center table-hover table-striped table-bordered">
            <thead>
              <tr>
                <td>Código</td>
                <td>Producto</td>
                <td>Descripción</td>
                <td>Precio</td>
                <td>Acciones</td>
              </tr>
            </thead>
            <tbody>
              <form method="POST">
                <?php if (isset($productos)) {
                  foreach ($productos as $producto) { ?>
                    <tr>
                      <td> <?php echo $producto['codigo'] ?> </td>
                      <td> <?php echo $producto['nombre'] ?></td>
                      <td> <?php echo $producto['descripcion'] ?> </td>
                      <td> <?php echo $producto['precio'] ?></td>
                      <td>
                        <button type="submit" class="btn btn-warning" name="seleccionar" value="<?php echo $producto['codigo'] ?>">
                          Modificar
                        </button>
                        <button type="submit" class="btn btn-danger" name="eliminar" value="<?php echo $producto['codigo'] ?>">
                          Eliminar
                        </button>
                      </td>
                    </tr>
                  <?php }
                  } else { ?>
                  <tr>
                    <td colspan=" 4">
                          <h2>Sin registros</h2>
                      </td>
                    </tr>
                  <?php } ?>
              </form>
            </tbody>
          </table>
        </div>
      </div>
    <?php } ?>

    <?php if(isset($modificar_producto)){ ?>

      <div class="card">
        <div class="card-header">
          <h3 class="card-title text-center">Modificar Producto</h3>
        </div>
        <div class="card-body">
          <form method="POST">
            <div class="modal-body d-flex flex-column gap-2">
              <input class="form-control" type="text" name="codigo" value="<?php echo $modificar_producto['codigo']?>" placeholder="Ingrese el codigo del producto">
              <input class="form-control" type="text" name="nombre" value="<?php echo $modificar_producto['nombre']?>" placeholder="Ingrese el nombre del producto">
              <input class="form-control" type="text" name="descripcion" value="<?php echo $modificar_producto['descripcion']?>" placeholder="Ingrese la descripción del producto">
              <input class="form-control" type="text" name="precio" value="<?php echo $modificar_producto['precio']?>" placeholder="Ingrese el precio del producto">
            </div>
            <div class="modal-footer d-flex justify-content-between py-3">
              <button type="submit" class="btn btn-danger">Regresar</button>
              <button type="submit" class="btn btn-success" name="modificar" value="<?php echo $modificar_producto['codigo']?>" >Modificar</button>
            </div>
          </form>
        </div>
      </div>

    <?php } ?>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="registrar_producto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Registrar nuevo producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST">
          <div class="modal-body d-flex flex-column gap-2">
            <input class="form-control" type="text" name="codigo" placeholder="Ingrese el codigo del producto">
            <input class="form-control" type="text" name="nombre" placeholder="Ingrese el nombre del producto">
            <input class="form-control" type="text" name="descripcion" placeholder="Ingrese la descripción del producto">
            <input class="form-control" type="text" name="precio" placeholder="Ingrese el precio del producto">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>


</body>

</html>