<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <link rel="stylesheet" href="/css/mailbox.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  @include('dialog')
  @include('navbar')
  @include('drawer')
  <main class="mdl-layout__content">
    <div class="page-content">
      @include('pageContent')
    </div>

    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored fixed-button show-dialog">
      <i class="material-icons">add</i>
    </button>
  </main>
</div>

</body>
<script>
      var dialog = document.querySelector('dialog');
      var showDialogButton = document.querySelectorAll('.show-dialog');
      for(var i = 0; i < showDialogButton.length; i++) {
        if (! dialog.showModal) {
          dialogPolyfill.registerDialog(dialog);
        }

        showDialogButton[i].addEventListener('click', function() {
          dialog.showModal();
        });

        dialog.querySelector('.close').addEventListener('click', function() {
          dialog.close();
        });
      }
  </script>
  
</html>