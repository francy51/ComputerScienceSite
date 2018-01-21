<html>
  <!-- header include -->
  <!-- for webhost change to this format -->
  <?php include 'includes/header.php';; ?>
  <body>
    <!-- Nav Include -->
      <?php include 'includes/nav.php'; ?>

<div class="text-center">
  <h2>RAM vs ROM</h2>
  <p>Primary memory can't be made entirley out of RAM because RAM is volatile and therefor is lost when the computer is shut down.
  This would mean that when the user tries to open the computer the CPU would not know what to do since it has no memory and can't access the
OS directly. This is why ROM is needed ROM is non-volatile memory that stores the BIOS. The BIOS are the set of instructions that tells the CPU the
needed memory adresses and instructions to launch the OS and other important features needed to start the computer.</p>
<h2>How the RAM, CACHE and CPU communicate</h2>
<img src="images/cacheRelationShip.png" alt="Diagram of data transfer for cache">
<p>The CACHE stores commonly used data by the CPU so that instead of having to waste time and retrieve the data from the RAM it can retrieve it from
the CACHE which is withing the CPU. This means that the data transfer from CACHE to CPU is must faster than that of RAM to CPU. Also the CPU can directly
access CACHE but it needs to use the DATA BUS to access RAM. </p>
<h2>Parallel Processing</h2>
<p>Praallel Processing is the concept of completing multiple tasks at the same time. This is complicated as one tasks might relay on another to be finished first
so the CU must perfectly time the tasks performed so that there are no bottle necks or errors. This is even more troublesome when having multi-core processors.
This is because each core has its own CU directing it. This is realley hard to do as it is almost impossible to stop all bottle neck and stoping the cores from waiting.
Although in modern day computer waiting does happen it is very minimal and ultimatly doesn't cause major decrease in performance. </p>

<h3>Homework</h3>
<b>Describe the fetch, decode and execute cycle.</b>
<p>The CPU uses something called the fetch,decode and execute cycle to process information. Basically what happens is that the PROGRAM COUNTER (PC) containts the current adress being used by the CONTROL UNIT (CU) whilst the MEMORY ADRESS REGISTER conatins the adress to look at for the next fetch cycle intructions. This adress is then loaded onto the ADDRESS BUS (AB) which tell the RAM what memory location to send back. The INSTRUCTION REGISTER (IR) instead hols the instruction being currently used by the CU. The MEMORY DATA REGISTER instead holds the current data being manipulated within the CPU. This data can then be stored. The RAM then places the data onto the DATA BUS (DB) which transmits the data back to the CU which then inturn decides what the ARITHMATIC LOGIC UNIT (ALU) and all other units within the CPU do. </p>

</div>
  </body>
  <!-- JavaScript Include -->
  <?php include 'includes/javaScriptCdn.php'; ?>

</html>
