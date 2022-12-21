
<x-nav.header />

<body>
  <h1 class="text-3xl font-bold underline">
    Hello!
  </h1>
  <strong>Database Connected: </strong>
<?php
    try {
        \DB::connection()->getPDO();
        echo \DB::connection()->getDatabaseName();
        } catch (\Exception $e) {
        echo 'None';
    }
?>
</body>
<x-nav.footer />