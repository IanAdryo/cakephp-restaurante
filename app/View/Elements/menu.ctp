<style>
  body {
    padding-top: 70px;
    padding-bottom: 30px;
  }

  .theme-dropdown .dropdown-menu {
    position: static;
    display: block;
    margin-bottom: 20px;
  }

  .theme-showcase>p>.btn {
    margin: 5px 0;
  }

  .theme-showcase .navbar .container {
    width: auto;
  }

  .error-message {
    color: red;
  }

  .oculto {
    display: none;
  }

  .platillo img {
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.5) 5px 5px 10px;
  }

  .food-category {
    color: #333333;
  }

  .food-category:hover {
    color: #333333;
  }

  .flash-msg {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 10000;
  }

  .img-pedidos {
    height: 60px;
  }

  .remove {
    color: #000000;
    font-size: 1.3em;
  }

  .remove:hover {
    color: #000000;
  }

  .tr {
    text-align: right
  }

  .total {
    font-size: 20px;
    font-weight: bold;
  }
</style>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Bootstrap theme</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">

        <li class="active"><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'home')) ?></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Meseros <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->Html->link('Lista Meseros', array('controller' => 'meseros', 'action' => 'index')) ?></li>
            <li><?php echo $this->Html->link('Nuevo Mesero', array('controller' => 'meseros', 'action' => 'add')) ?></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cocineros <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->Html->link('Lista Cocineros', array('controller' => 'cocineros', 'action' => 'index')) ?></li>
            <li><?php echo $this->Html->link('Nueva Cocineros', array('controller' => 'cocineros', 'action' => 'add')) ?></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mesas <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->Html->link('Lista Mesas', array('controller' => 'mesas', 'action' => 'index')) ?></li>
            <li><?php echo $this->Html->link('Nueva Mesa', array('controller' => 'mesas', 'action' => 'add')) ?></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Platillos <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->Html->link('Lista Platillos', array('controller' => 'platillos', 'action' => 'index')) ?></li>
            <li><?php echo $this->Html->link('Nueva Platillos', array('controller' => 'platillos', 'action' => 'add')) ?></li>
            <li class="divider"></li>
            <li class="dropdown-header">Categorias</li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->Html->link('Lista Categorias', array('controller' => 'categoriaPlatillos', 'action' => 'index')) ?></li>
            <li><?php echo $this->Html->link('Nueva Categorias', array('controller' => 'categoriaPlatillos', 'action' => 'add')) ?></li>
          </ul>
        </li>
      </ul>

      <li><?php echo $this->Html->link('Pedidos', array('controller' => 'pedidos', 'action' => 'view'), array('class' => 'btn btn-success navbar-btn')) ?></li>




    </div><!--/.nav-collapse -->
  </div>
</div>