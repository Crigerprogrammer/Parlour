<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.jsp">Tienda Videojuegos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <!-- Area Ventas -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ventas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="consultarcliente.php">Consultar Cliente</a>
          <a class="dropdown-item" href="crearventa.php">Registrar Venta</a>
          <a class="dropdown-item" href="consultarventa.php">Consultar Ventas</a>
        </div>
      </li>
      <!-- Area de videojuegos -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Videojuegos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="crearvideojuego.php">Registrar Nuevo Videojuego</a>
          <a class="dropdown-item" href="consultarviodejuego.php">Consultar Videojuegos</a>
        </div>
      </li>
      <!-- Fin Videojuegos -->
      <!-- Inicio Proveedores -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Proveedores
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="crearproveedor.php">Registrar Nuevo Proveedor</a>
          <a class="dropdown-item" href="consultarproveedor.php">Consultar Proveedores</a>
        </div>
      </li>
      <!-- Fin Proveedores -->
      <!-- Inicio Plataformas -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Inventario
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="crearinventario.php">Registrar Inventario</a>
          <a class="dropdown-item" href="consultarinventario.php">Consultar Inventario</a>
        </div>
      </li>
      <!-- Fin Plataformas -->
      <!-- Tiendas -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tiendas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="creartienda.php">Registrar Nueva Tienda</a>
          <a class="dropdown-item" href="consultartienda.php">Consultar Tiendas</a>
        </div>
      </li>
      <!-- Fin Tiendas -->
      <!-- Departamentos --> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Departamentos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="creardepartamento.php">Registrar Nuevo Departamento</a>
          <a class="dropdown-item" href="consultardepartamento.php">Consultar Departamentos</a>
        </div>
      </li>
      <!-- Fin Departamentos -->
      <!-- Empleados -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Empleados
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="crearempleado.php">Registrar Nuevo Empleado</a>
          <a class="dropdown-item" href="consultarempleado.php">Consultar Empleados</a>
        </div>
      </li>      
      <!-- Fin Empleados -->
      <!-- Inicio Dashboards -->
      <li class="nav-item ">
        <a class="nav-link" href="dashboards.php">Dash Boards<span class="sr-only"></span></a>
      </li>
      <!-- Fin DashBoards -->
    </ul>
  </div>
</nav>