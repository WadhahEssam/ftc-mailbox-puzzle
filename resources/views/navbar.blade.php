<header class="mdl-layout__header">
  <div class="mdl-layout__header-row">
  <span class="mdl-layout-title" style="margin-right: 30px"><a href="/"><img width="40" src='/img/ftc-logo.png'></a></span>
  <span class="mdl-layout-title">FTC Mail</span>
    <nav class="mdl-navigation mdl-layout--large-screen-only">
      <a class="mdl-navigation__link" ></a>
      <a class="mdl-navigation__link" href="/">Mailbox</a>
      <a class="mdl-navigation__link show-dialog">Settings</a>
    </nav>
    <div class="mdl-layout-spacer"></div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                mdl-textfield--floating-label mdl-textfield--align-right">
      <label class="mdl-button mdl-js-button mdl-button--icon"
            for="fixed-header-drawer-exp">
        <i class="material-icons">search</i>
      </label>
      <div class="mdl-textfield__expandable-holder">
        <form action="/search">
          {{ csrf_field() }}
          <input class="mdl-textfield__input" type="text" name="string"
                id="fixed-header-drawer-exp">
        </form>
      </div>
    </div>
  </div>
</header>