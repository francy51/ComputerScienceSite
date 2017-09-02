<<<<<<< HEAD
<!-- TODO: Set Labels ontop of the image that link to teh defenitions -->

<!-- header include -->
<?php include ('includes/header.php'); ?>

<body>
  <!-- Nav Include -->
  <?php include ('includes/nav.php'); ?>

  <div class="container-fluid">
    <div class="img-fluid text-center">

      <img src="images/com_arch_w_labels.png" alt="" usemap="#diagramMap">
      <map name="diagramMap">
          <!-- CORDS -> X1 cord, Y1 cord, X2 Cord, Y2 Cord -->
          <!-- Input label -->
          <area shape="rect" coords="30,50,140,110" href="defenitions.php#Input" alt="Input Button">
          <!-- Output label -->
          <area shape="rect" coords="605,50,720,110" href="defenitions.php#Output" alt="Output Button">
          <!-- Central Processing Unit -->
          <area shape="rect" coords="480,50,275,95" href="defenitions.php#CentralProcessingUnit" alt="Central Processing Unit Button">
          <!-- Control Unit -->
          <area shape="rect" coords="375,100,275,150" href="defenitions.php#ControlUnity" alt="Control Unit Button">
          <!-- Program Counter -->
          <area shape="rect" coords="320,190,270,150" href="defenitions.php#ProgramCounter" alt="Program Counter Button">
          <!-- Instruction Register -->
          <area shape="rect" coords="320,190,375,150" href="defenitions.php#InstructionRegister" alt="Instruction Register Button">
          <!-- Arithmatic Logic Unit -->
          <area shape="rect" coords="380,100,480,190" href="defenitions.php#ArithmaticLogicUnity" alt="Arithmatic Logic Unit Button">
          <!-- Memory Adress Registry -->
          <area shape="rect" coords="285,205,355,240" href="defenitions.php#MemoryAdressRegistry" alt="Memory Adress Registry Button">
          <!-- Memory Data Registry -->
          <area shape="rect" coords="425,205,355,240" href="defenitions.php#MemoryDataRegistry" alt="Memory Data Registry Button">
          <!-- Adress Bus  -->
          <area shape="rect" coords="30,300,145,280" href="defenitions.php#AdressBus" alt="Adress Bus Button">
          <!-- Cache -->
          <area shape="rect" coords="405,280,480,330" href="defenitions.php#Cache" alt="Cache Button">
          <!-- Data Bus -->
          <area shape="rect" coords="590,325,675,350" href="defenitions.php#DataBus" alt="Output Button">
          <!-- Primary Memory -->
          <area shape="rect" coords="275,420,480,350" href="defenitions.php#PrimaryMemory" alt="Primary Memory Button">
      </map>


    </div>
  </div>
</body>
<!-- JavaScript Include -->
<?php include ('includes/javaScriptCdn.php'); ?>
