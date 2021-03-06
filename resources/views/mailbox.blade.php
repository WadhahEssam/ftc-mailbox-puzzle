<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="./css/material.min.css">
  <script src="./js/material.min.js"></script>
  <link rel="stylesheet" href="/css/mailbox.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>MailBox Puzzle</title>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  @include('navbar')
  @include('drawer')
  <main class="mdl-layout__content">
    <div class="page-content">
      @include('pageContent')
    </div>

    <button  class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored fixed-button show-dialog">
      <i id="tt4" class="material-icons">add</i>
    </button>
  </main>
</div>

</body>
@include('dialog')
@include('restorePasswordDialog')
</html>