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
<!-- No header, and the drawer stays open on larger screens (fixed drawer). -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
    <span class="mdl-layout-title">FTC Mail</span>
      <nav class="mdl-navigation mdl-layout--large-screen-only">
      <a class="mdl-navigation__link" href=""></a>
      <a class="mdl-navigation__link" href="">Mailbox</a>
      <a class="mdl-navigation__link" href="">Settings</a>
      </nav>
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp">
        </div>
      </div>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Mailbox</span>
    <nav class="mdl-navigation">
      <a style="background:#dedede" class="mdl-navigation__link" href="">    
        <span class="mdl-list__item-primary-content">
        <i class="material-icons mdl-list__item-icon">mail_outline</i>
          &emsp;&emsp;Inbox
        </span>
      </a>
      <a class="mdl-navigation__link" href="">    
        <span class="mdl-list__item-primary-content">
        <i class="material-icons mdl-list__item-icon">delete_forever</i>
        &emsp;&emsp;Trash
        </span>
      </a>
      <a class="mdl-navigation__link" href="">    
        <span class="mdl-list__item-primary-content">
        <i class="material-icons mdl-list__item-icon">send</i>
        &emsp;&emsp;Sent
        </span>
      </a>
      <a class="mdl-navigation__link" href="">    
        <span class="mdl-list__item-primary-content">
        <i class="material-icons mdl-list__item-icon">receipt</i>
        &emsp;&emsp;Drafts
        </span>
      </a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">

    </div>
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored fixed-button">
      <i class="material-icons">add</i>
    </button>
  </main>


</div>

</body>
</html>